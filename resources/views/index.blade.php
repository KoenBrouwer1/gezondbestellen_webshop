<!DOCTYPE html>
<html>
<head>
    <title>Gezond Bestellen</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 min-h-screen">
    <nav class="bg-gray-800 border-b border-gray-700 mb-8">
           <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
               <a href="/" class="text-2xl font-bold text-green-400">Gezond Bestellen</a>
               <div class="flex gap-4">
                   <a class="px-4 py-2 text-white hover:text-green-400 transition" href="/">Home</a>
                   <a class="px-4 py-2 text-white hover:text-green-400 transition" href="recipes">Recepten</a>
                   <a class="px-4 py-2 text-white hover:text-green-400 transition" href="createrecipe">Recept Maken</a>
                   <form class="m-0" method="POST" action="{{ route('logout') }}">
                             @csrf
                             <button type="submit" class="md:p-0 dark:text-red-600">Logout</button>
                           </form>
                   <a class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-500 transition" href="cart">Winkelwagen</a>
               </div>
           </div>
       </nav>
    <!-- Categories -->
    <div class="max-w-7xl mx-auto px-4 mb-8">
        <div class="flex gap-2 flex-wrap">
            <a class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-600 transition" href="/">deselect</a>
            @foreach($Categories as $category)
            <a href="{{ route('category.show', $category->name) }}"
               class="px-4 py-2 bg-gray-800 text-white rounded-lg hover:bg-green-600 transition">
                {{ $category->name }}
            </a>
            @endforeach
        </div>
    </div>

    <!-- Products -->
    <div class="max-w-7xl mx-auto px-4 pb-12">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach($Products as $product)
                <div class="bg-gray-800 rounded-lg p-4 ">
                    <a href="{{ route('product.show', $product->name) }}">
                    <h3 class="text-white font-bold text-lg mb-1">{{ $product->name }}</h3>
                    <p class="text-green-400 text-sm mb-2">{{ $product->category->name }}</p>
                    <p class="text-gray-400 text-sm">{{ $product->description }}</p>
                    <p class="text-green-300 text-sm">€ {{ $product->price }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
