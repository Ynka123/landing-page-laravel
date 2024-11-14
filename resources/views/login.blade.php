<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <!-- Login Form Container -->
  <div class="w-full max-w-sm p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Login</h2>

    <!-- Login Form -->
    <form action="#" method="POST" class="space-y-4">
      <!-- Username Field -->
      <div>
        <label for="username" class="block text-sm text-gray-700">Username</label>
        <input type="text" id="username" name="username" class="w-full px-4 py-2 mt-1 bg-gray-100 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Enter your username" required>
      </div>

      <!-- Password Field -->
      <div>
        <label for="password" class="block text-sm text-gray-700">Password</label>
        <input type="password" id="password" name="password" class="w-full px-4 py-2 mt-1 bg-gray-100 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Enter your password" required>
      </div>

      <!-- Login Button -->
      <div>
        <button type="submit" class="w-full px-4 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-500 transition">Login</button>
      </div>
    </form>

    <!-- Additional Links -->
    <div class="mt-4 text-center">
      <a href="#" class="text-sm text-blue-500 hover:underline">Forgot password?</a>
    </div>
  </div>
</body>
</html>