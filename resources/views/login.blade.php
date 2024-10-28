<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    @vite('resources/css/app.css')
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-200">
    <div class="main bg-white rounded-lg shadow-md p-10 transition-transform w-96 text-center">
        <h1 class="text-green-600 text-3xl">Login</h1>
        <form action="" id="loginForm">
            <label for="username" class="block mt-4 mb-2 text-left text-gray-700 font-bold">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter your Username" class="block w-full mb-6 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-green-400" required>
            <label for="password" class="block mb-2 text-left text-gray-700 font-bold">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your Password" class="block w-full mb-6 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-green-400" required>
            <div class="flex justify-center items-center">
                <button type="submit" class="bg-green-600 text-white py-3 px-6 rounded-md cursor-pointer transition-colors duration-300 hover:bg-green-500">Login</button>
            </div>
        </form>
    </div>
</body>
<script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission

            // Get the input values
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            // Define correct credentials
            const correctUsername = 'zidan';
            const correctPassword = '123';

            // Check credentials
            if(username === correctUsername && password === correctPassword){
            alert("login berhasil");
             window.location.href =  '/';
            }else{
              alert("salah bro");
            }
        });
    </script>
</html>
