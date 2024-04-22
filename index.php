<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="h-screen flex justify-center items-center">
    <div class="w-96 h-auto bg-gray-100 border-[2px] rounded-lg shadow-lg">
        <div class="p-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Login</h1>
            <form method="post" action="login.php">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-2" for="username">Username</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" name="username" type="text" placeholder="Username">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm mb-2" for="password">Password</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="Password">
                </div>
                <div class="mb-6">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-100 leading-tight focus:outline-none bg-gray-800 focus:shadow-outline" id="submit" name="submit" type="submit" value="submit">
                </div>
    </div>
  </div>
</body>
</html>