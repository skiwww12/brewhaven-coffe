<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Cormorant+Garamond:wght@500;600;700&family=Playfair+Display:wght@500;600;700;800&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="icon" type="image/png" href="{{ asset('images/logobrew_transparent.png') }}">

    <title>Brew Haven</title>
</head>

<body class="bg-zinc-950 text-white overflow-x-hidden">
    <body class="font-['Inter'] bg-[#16110D] text-[#F7E7D0]">

    @yield('content')

</body>
</html>