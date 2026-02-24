<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes = Recipe::all();
        $products = Product::all();
        return view("recipe", compact("recipes", "products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view("createrecipe", compact("products"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|string|max:50",
            "description" => "nullable|string|max:250",
            "image_path" => "nullable|image|max:2048",
        ]);
        if ($request->hasFile("image_path")) {
            $path = $request->file("image_path")->store("recipes", "public");
        } else {
            $path = null;
        }

        Recipe::create([
            "title" => $request->title,
            "description" => $request->description,
            "image_path" => $path,
        ]);
        return redirect("/recipes")->with(
            "success",
            "recipe created successfully!",
        );
    }

    /**
     * Display the specified resource.
     */
    public function show($title)
    {
        $recipe = Recipe::where("title", $title)->firstOrFail();
        return view("viewrecipe", compact("recipe"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
