<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create Recipe</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 min-h-screen">
	<div class="max-w-2xl mx-auto px-4 py-12">
		<!-- Header -->
		<div class="mb-8">
			<a href="/recipes" class="inline-block text-green-400 hover:text-green-300 mb-4">← Terug</a>
			<h1 class="text-4xl font-bold text-white">Nieuw Recept</h1>
			<p class="text-gray-400 mt-2">Voeg een nieuw recept toe aan je collectie</p>
		</div>

		<!-- Form Card -->
		<div class="bg-gray-800 rounded-xl shadow-2xl p-8">
			@if($errors->any())
				<div class="bg-red-500/10 border border-red-500 text-red-400 p-4 mb-6 rounded-lg">
					@foreach($errors->all() as $error)
						<p>{{ $error }}</p>
					@endforeach
				</div>
			@endif

			<form action="{{ route('recipe.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
				@csrf   
				
				<!-- Title -->
				<div>
					<label for="title" class="block mb-2 text-sm font-semibold text-green-400">Titel</label>
					<input type="text" name="title" id="title" required placeholder="Bijv. Spaghetti Carbonara"
						class="w-full px-4 py-3 bg-gray-700 text-white border-2 border-gray-600 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-500/20 transition-all outline-none placeholder-gray-500">
				</div>

				<!-- Description -->
				<div>
					<label for="description" class="block mb-2 text-sm font-semibold text-green-400">Beschrijving</label>
					<textarea name="description" id="description" placeholder="Vertel iets over je recept..."
						class="w-full px-4 py-3 bg-gray-700 text-white border-2 border-gray-600 rounded-lg focus:border-green-500 focus:ring-2 focus:ring-green-500/20 transition-all outline-none placeholder-gray-500 resize-none" rows="4"></textarea>
				</div>

				<!-- Image Upload -->
				<div>
					<label for="image_path" class="block mb-2 text-sm font-semibold text-green-400">Foto</label>
					<div class="relative">
						<input type="file" name="image_path" id="image_path" accept="image/*"
							class="w-full px-4 py-3 bg-gray-700 text-white border-2 border-gray-600 rounded-lg focus:border-green-500 transition-all outline-none file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-green-600 file:text-white file:font-semibold hover:file:bg-green-500 file:cursor-pointer cursor-pointer">
					</div>
				</div>
				<select name="subject_id" id="subject_id" required class="w-full p-2.5 text-sm bg-gray-50 text-gray-900 border border-gray-300 rounded-lg focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700 dark:text-white dark:border-gray-600">
				@foreach($products as $product)
                <option value="{{ $product->id }}" class="dark:bg-gray-700 dark:text-white">{{ $product->name }}</option>
              @endforeach
				</select>
				<!-- Submit Button -->
				<button type="submit" class="w-full bg-green-600 hover:bg-green-500 text-white font-bold py-4 rounded-lg transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
				    toevoegen
				</button>
			</form>
		</div>
	</div>
</body>
</html>