<!-- @vite('resources/css/app.css') -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
	@vite('resources/css/app.css') 
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6 space-y-8">
        <h1 class="text-3xl font-bold text-center">Sign Up</h1>
        <form class="space-y-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" placeholder="Name" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring focus:ring-offset-1 focus:ring-cyan-600 focus:border-none outline-none">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" placeholder="Email" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring focus:ring-offset-1 focus:ring-cyan-600 focus:border-none outline-none">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" placeholder="Password" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring focus:ring-offset-1 focus:ring-cyan-600 focus:border-none outline-none">
            </div>
            <div>
                <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" name="confirm-password" placeholder="Confirm Password" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring focus:ring-offset-1 focus:ring-cyan-600 focus:border-none outline-none">
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input type="checkbox" name="terms" class="h-4 w-4 text-cyan-600 focus:ring focus:ring-offset-1 focus:ring-cyan-600 border-gray-300 rounded">
                    <label for="terms" class="ml-2 block text-sm text-gray-900">I agree to the <a href="#" class="text-cyan-600 hover:underline">Terms and Conditions</a></label>
                </div>
            </div>
            <button type="submit" class="w-full bg-cyan-600 text-white py-2 rounded-md hover:bg-cyan-700 focus:outline-none focus:ring focus:ring-offset-2 focus:ring-cyan-600">Sign Up</button>
        </form>
        <p class="text-sm text-center text-gray-700">Not a member? <a href="login" class="text-cyan-600 hover:underline">Login</a></p>
    </div>
</body>
</html>
