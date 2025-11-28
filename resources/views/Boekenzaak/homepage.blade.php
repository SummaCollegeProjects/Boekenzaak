<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Homepage</title>
</head>
<body class="overflow-x-hidden bg-blue-200 h-screen flex flex-col">
    <header class="h-16 w-full bg-blue-500 flex items-center justify-center space-x-8">
        <h1 class="text-white text-2xl font-bold mr-8">Pietje's Boekenzaak</h1>
        <nav class="flex space-x-4">
            <a href="#" class="text-white font-semibold">Home</a>
            <a href="#" class="text-white font-semibold">Boeken</a>
            <a href="#" class="text-white font-semibold">Contact</a>
            <a href="account" class="text-white font-semibold">Account</a>
        </nav>
    </header>
    <div class="h-[20%] w-full flex flex-col items-center justify-start pt-6">
        <h1 class="text-4xl font-bold">Welkom bij pietje's Boekenzaak</h1>
        <p class="text-xl">Hier verkopen de beste boeken op de markt</p>
    </div>
    <div class="h-[80%] w-full flex flex-col items-center justify-start bg-blue-300">
        <h1 class="text-3xl font-bold mt-4">Onze Collectie</h1>
    </div>
</body>
</html>