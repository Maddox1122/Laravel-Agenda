<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Login</title>
</head>
<body class="bg-gray-100 h-screen flex justify-center items-center">

    <div class="bg-white p-8 rounded shadow-md w-96 mr-4">
        <h2 class="text-2xl font-bold mb-4">Register</h2>
        <form action="/register" method="POST">
            @csrf
            <div class="mb-4">
                <label for="reg-username" class="block text-gray-600">Username</label>
                <input type="text" id="reg-username" name="name" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div class="mb-4">
                <label for="reg-email" class="block text-gray-600">Email</label>
                <input type="email" id="reg-email" name="email" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div class="mb-4">
                <label for="reg-password" class="block text-gray-600">Password</label>
                <input type="password" id="reg-password" name="password" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <button type="submit" class="bg-green-500 text-white p-2 rounded">Register</button>
        </form>
    </div>

    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-bold mb-4">Login</h2>
        <form action="/login" method="POST">
            @csrf
            <div class="mb-4">
                <label for="username" class="block text-gray-600">Username</label>
                <input type="text" id="username" name="name" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-600">Password</label>
                <input type="password" id="password" name="password" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Login</button>
        </form>
    </div>

</body>
</html>
