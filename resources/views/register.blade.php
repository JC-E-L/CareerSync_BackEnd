<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @vite('resources/css/app.css')
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="icon" href="{{ asset('Favicon.png') }}">

    <!-- Tailwind CSS -->
    

    <title>Register</title>
</head>

<body class="bg-white">

    <nav class="flex justify-between h-13 p-4 bg-green-500">
        <div class="">
            <h1 class="text-2xl font-bold text-white pl-4">Register Form</h1>
        </div>
            
        <div class="text-xl text-white font-bold hover:text-black pr-4">
            <a href="">Login</a>
        </div>
    </nav>

    <div class="flex items-center justify-center pt-10 box-border">
        <div class="bg-white rounded-lg shadow-md">
            <div class="flex justify-center bg-gray-200 p-4 rounded-t-lg">
                <h3 class="text-xl font-semibold text-gray-700">Enter Your Credentials</h3>
            </div>
            <div class="flex justify-center items-center p-4">
                <form method="post" action="" name="login">
                    <div class=" mb-4">
                        <label for="email" class="block font-medium text-gray-600 ">Complete Name:</label>
                        <input type="email" id="email" name="email" required class="w-96 p-2 border-2 rounded focus:outline-none focus:ring focus:border-teal-500">
                    </div>
                    <div class=" mb-4">
                        <label for="email" class="block font-medium text-gray-600 ">E-mail Address:</label>
                        <input type="email" id="email" name="email" required class="w-96 p-2 border-2 rounded focus:outline-none focus:ring focus:border-teal-500">
                    </div>
                    <div class="mb-4 relative">
                        <label for="password" class="block font-medium text-gray-600">Password:</label>
                        <div class="absolute top-9 right-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-6 w-6 text-gray-500 cursor-pointer toggle-password">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <input type="password" id="password" name="password" required class="w-96 p-2 border-2 rounded focus:outline-none focus:ring focus:border-teal-500">
                        
                    </div>
                    <div class="flex justify-center items-center">
                        <button type="submit" class="w-3/5 p-2 bg-green-500 text-white rounded-md hover:bg-green-600 focus:outline-none focus:ring focus:border-teal-700">Register</button>
                    </div>
                    
                    
                    
                </form>
            </div>
        </div>
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const passwordInput = document.getElementById('password');
            const togglePassword = document.querySelector('.toggle-password');

            togglePassword.addEventListener('click', function () {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                this.classList.toggle('text-green-500'); // Change color on toggle
            });
        });
    </script>

</body>

</html>
