<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 min-h-screen text-white">

<div class="min-h-screen w-screen flex justify-center items-stretch">
    <div class="flex w-full flex-row-reverse">

        <div class="w-1/5 bg-gray-800 p-6 border-l border-gray-700">

            <h2 class="text-2xl font-bold mb-6">Bestelling</h2>

            <div class="space-y-4">
                <div class="flex justify-between text-gray-400">
                    <span>Aantal producten:</span>
                    <span class="font-semibold text-white">
                        {{ $cart->sum('amount') }}
                    </span>
                </div>

                <div class="border-t border-gray-700 pt-4">
                    <div class="flex justify-between text-xl font-bold">
                        <span>Totaal:</span>
                        <span class="text-green-400">
                            €{{ $total }}
                        </span>
                    </div>
                </div>

                <button class="w-full bg-green-600 hover:bg-green-500 font-bold py-3 rounded-lg mt-6 transition">
                    Afrekenen
                </button>
            </div>

        </div>
        <!-- MAIN CONTENT (Cart Items) -->
        <main class="flex-1 bg-gray-900 p-6 overflow-y-auto">

            <h1 class="text-4xl font-bold mb-8">Winkelwagen</h1>

            @forelse($cart as $cartitem)
            <div class="bg-gray-800 p-6 rounded-lg mb-6">

                <div class="flex justify-between items-start">
                    <div class="flex-1">
                        <h3 class="text-xl font-bold">
                            {{ $cartitem->product->name }}
                        </h3>

                        <p class="text-gray-400 text-sm">
                            {{ $cartitem->product->description }}
                        </p>

                        <p class="text-green-400 mt-2">
                            €{{ $cartitem->product->price }} x {{ $cartitem->amount }}
                        </p>

                        <p class="text-white font-bold text-lg mt-1">
                            €{{ $cartitem->product->price * $cartitem->amount }}
                        </p>
                    </div>

                    <div class="flex gap-2 ml-4">

                        <form action="{{ route('cart.increase', $cartitem->id) }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="bg-green-600 hover:bg-green-500 px-4 py-2 rounded-lg transition">
                                +
                            </button>
                        </form>

                        <form action="{{ route('cart.decrease', $cartitem->id) }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="bg-red-600 hover:bg-red-500 px-4 py-2 rounded-lg transition">
                                -
                            </button>
                        </form>

                        <form action="{{ route('cart.destroy', $cartitem->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit"
                                class="bg-gray-700 hover:bg-gray-600 px-4 py-2 rounded-lg transition">
                                X
                            </button>
                        </form>

                    </div>
                </div>

            </div>

            @empty
            <div class="bg-gray-800 p-6 rounded-lg">
                <h1 class="font-bold">Je winkelwagen is leeg</h1>
            </div>
            @endforelse

        </main>


        <!-- RIGHT SIDEBAR (Order Summary zoals forum subjects) -->


</body>
</html>