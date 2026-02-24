<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recipes</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 min-h-screen">
	<div class="max-w-7xl mx-auto px-4 py-12">
		<!-- Header -->
		<div class="mb-8">
			<h1 class="text-4xl font-bold text-white mb-2">Recepten</h1>
			<a href="/createrecipe" class="inline-block bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
				+ Nieuw Recept
			</a>
		</div>

		<!-- Recipes Grid -->
		@if (count($recipes) == 0)
			<p class="text-gray-400 text-center">Geen recepten gevonden.</p>
		@else
			<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
				@foreach($recipes as $recipe)
					<div class="bg-gray-800 rounded-lg overflow-hidden hover:scale-105 transition">
						@if($recipe->image_path)
							<img src="{{ asset('storage/' . $recipe->image_path) }}" class="w-full h-48 object-cover">
						@else
							<div class="w-full h-48 bg-gray-700 flex items-center justify-center text-6xl">no img</div>
						@endif
						<div class="p-4">
			                    <a href="{{ route('recipe.show', $recipe->title) }}">
							<p class="text-gray-400 text-sm">{{$recipe->description }}</p>
						</div>
					</div>
				@endforeach
			</div>
		@endif
	</div>
</body>
</html>