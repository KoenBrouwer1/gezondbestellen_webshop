<!DOCTYPE html>
<html>
<head>
    <title>Gezond Bestellen | {{ $product->name }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 min-h-screen">
    <div class="max-w-4xl mx-auto px-4 py-12">
        <!-- Back Button -->
        <a href="/" class="text-green-400 hover:text-green-300 mb-6 inline-block">← Back</a>

        <!-- Product Card -->
        <div class="bg-gray-800 rounded-lg p-8">
            <!-- Category Badge -->
            <span class="inline-block bg-green-600 text-white text-xs font-semibold px-3 py-1 rounded-full mb-4">
                {{ $product->category->name }}
            </span>
            <!-- Product Info -->
            <h1 class="text-4xl font-bold text-white mb-4">{{ $product->name }}</h1>
            <p class="text-gray-300 text-lg">{{ $product->description }}</p>
            <p class="text-green-300 text-lg">€ {{ $product->price }}</p>
            {{-- <a href="#">
            <img class="flex justify-end h-24 2-24" src="{{ asset('img/addtocart.png') }}" alt="add to cart">
            </a> --}}
            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                    <img class="flex justify-end h-7 w-7" src="{{ asset('img/addtocart.png') }}" alt="add to cart">
                </button>
            </form>
        </div>
    </div>
</body>
</html>