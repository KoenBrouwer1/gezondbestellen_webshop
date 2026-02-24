<!DOCTYPE html>
<html>
<head>
    <title>Gezond Bestellen | {{ $recipe->title}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 min-h-screen">
    <div class="max-w-4xl mx-auto px-4 py-12">
        <!-- Back Button -->
        <a href="/" class="text-green-400 hover:text-green-300 mb-6 inline-block">← Back</a>

        <!-- Product Card -->
        <div class="bg-gray-800 rounded-lg p-8">
            <!-- Product Info -->
            <h1 class="text-4xl font-bold text-white mb-4">{{ $recipe->title }}</h1>
            <p class="text-gray-300 text-lg">{{ $recipe->description }}</p>
            @if($recipe->image_path)
				<img src="{{ asset('storage/' . $recipe->image_path) }}" class="w-full h-48 object-cover">
				@else
			 
				<div class="w-full h-48 bg-gray-700 flex items-center justify-center text-6xl">no img</div>
			@endif
        </div>
    </div>
</body>
</html>
