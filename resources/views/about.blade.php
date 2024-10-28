<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-md rounded-lg p-8 max-w-md">
        <h1 class="text-3xl font-bold mb-4 text-center">About Me</h1>
        <p class="text-gray-700 mb-4">
            Hello! My name is {{ $name }}!!
        </p>
        <p class="text-gray-700 mb-4">
            I live in {{ $address }}. Feel free to contact me on {{ $email }}
        </p>
    </div>
</body>
</html>
