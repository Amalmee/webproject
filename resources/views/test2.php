<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Tailwind Homepage</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Navbar -->
  <nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
      <div class="text-xl font-bold text-blue-600">MyWebsite</div>
      <ul class="hidden md:flex space-x-6">
        <li><a href="#" class="hover:text-blue-600">Home</a></li>
        <li><a href="#" class="hover:text-blue-600">About</a></li>
        <li><a href="#" class="hover:text-blue-600">Services</a></li>
        <li><a href="#" class="hover:text-blue-600">Contact</a></li>
      </ul>
      <button class="md:hidden text-gray-600 focus:outline-none">
        ☰
      </button>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="bg-blue-50 py-20">
    <div class="max-w-7xl mx-auto px-4 text-center">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Welcome to My Website</h1>
      <p class="text-lg mb-6 text-gray-600">Build modern websites faster with Tailwind CSS.</p>
      <a href="#" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 transition">Get Started</a>
    </div>
  </section>

  <!-- Features Section -->
  <section class="py-20">
    <div class="max-w-7xl mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12">Our Features</h2>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded shadow text-center">
          <h3 class="text-xl font-semibold mb-2">Responsive Design</h3>
          <p class="text-gray-600">Looks great on all screen sizes with Tailwind's utility-first classes.</p>
        </div>
        <div class="bg-white p-6 rounded shadow text-center">
          <h3 class="text-xl font-semibold mb-2">Fast Prototyping</h3>
          <p class="text-gray-600">Quickly build components and layouts with minimal custom CSS.</p>
        </div>
        <div class="bg-white p-6 rounded shadow text-center">
          <h3 class="text-xl font-semibold mb-2">Modern Look</h3>
          <p class="text-gray-600">Design sleek and modern interfaces with ease using Tailwind.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-white border-t py-6">
    <div class="max-w-7xl mx-auto px-4 text-center text-gray-500">
      © 2025 MyWebsite. All rights reserved.
    </div>
  </footer>

</body>
</html>
