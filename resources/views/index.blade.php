<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spider-Man: No Way Home</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">

  <!-- Navigation Bar -->
  <nav class="flex justify-between items-center p-5 bg-gray-800 shadow-lg">
    <div class="text-lg font-bold">MovieHub</div>
    <div class="space-x-6">
      <a href="#" class="hover:text-red-400">Home</a>
      <a href="#" class="hover:text-red-400">Genre</a>
      <a href="#" class="hover:text-red-400">Year</a>
      <a href="#" class="hover:text-red-400">Movie</a>
      <a href="#" class="hover:text-red-400">Series</a>
    </div>
    <div class="relative">
      <!-- Search Bar with Image as Icon -->
      <input type="text" class="p-2 pl-10 bg-gray-700 text-white rounded-full focus:outline-none" placeholder="Search...">
      <img src="search_icon.png" alt="Search Icon" class="absolute top-2 left-3 w-6 h-6">
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="relative w-full h-screen">
    <img src="your_image_url_here.jpg" alt="Spider-Man: No Way Home" class="object-cover w-full h-full opacity-80">
    <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent"></div>
    <div class="absolute bottom-10 left-10">
      <h1 class="text-5xl font-extrabold text-white drop-shadow-lg">Spider-Man: No Way Home</h1>
      <p class="mt-4 text-lg text-gray-300">Superhero - Supernatural Fantasy - Action - Adventure - Sci-Fi</p>
      <p class="mt-2 text-gray-400">IMDB: 8.2/10 | Cast: Tom Holland, Zendaya, Benedict Cumberbatch</p>
      <div class="mt-6 space-x-4">
        <button class="px-6 py-2 bg-red-600 rounded-full text-white hover:bg-red-700 shadow-lg transition">Watch</button>
        <button class="px-6 py-2 bg-gray-700 rounded-full text-white hover:bg-gray-600 shadow-lg transition">+ Add to List</button>
        <button class="px-6 py-2 bg-gray-700 rounded-full text-white hover:bg-gray-600 shadow-lg transition">Share</button>
      </div>
      <p class="mt-6 text-gray-300 max-w-2xl">When his loved ones are in a dangerous situation, Peter Parker asks Doctor Strange to give him back his secret and accidentally causes a big mess...</p>
    </div>
  </section>

</body>
</html>
