<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // VOOR mensen zonder account via sessions
        $activeSessions = DB::table("sessions")->pluck("id");
        Cart::whereNotIn("session_id", $activeSessions)
            ->whereNull("user_id")
            ->delete();

        // VOOR ingelogde mensen via account inplaats van session
        if (Auth::check()) {
            $cart = Cart::with("product")->where("user_id", Auth::id())->get();
        } else {
            $sessionId = session()->getId();
            $cart = Cart::with("product")
                ->where("session_id", $sessionId)
                ->whereNull("user_id")
                ->get();
        }
        // berekent de prijs
        $total = $cart->sum(fn($item) => $item->product->price * $item->amount);
        return view("cart", compact("cart", "total"));
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $sessionId = session()->getId();

        $cart = Cart::where("product_id", $id)
            ->where("session_id", $sessionId)
            ->first();

        if ($cart) {
            $cart->amount++;
            $cart->save();
        } else {
            Cart::create([
                "product_id" => $id,
                "amount" => 1,
                "user_id" => Auth::id(),
                "session_id" => Auth::check() ? null : session()->getId(),
            ]);
        }

        return redirect("/cart")->with("success", "toegevoegd");
    }
    public function increase($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->amount++;
        $cart->save();
        return redirect()->back();
    }
    public function decrease($id)
    {
        $cart = Cart::findOrFail($id);
        if ($cart->amount <= 1){
             $cart->delete();
             return redirect()->back();
        }
        else{
        $cart->amount--;
        $cart->save();
        return redirect()->back();
        }
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();
        return redirect()
            ->route("cart.index")
            ->with("success", "cartitem deleted");
    }
}
