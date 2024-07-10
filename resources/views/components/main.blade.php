<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alp Industry</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poiret+One|Oswald|Poppins">
    <script src="https://unpkg.com/feather-icons"></script>
    @vite('resources/css/app.css')

    <style>
        .size-18{
            width: 18px;
            height: 18px;
        }
    </style>
</head>
<body>
    @include('components.navbar')

    
    @yield('main')


    @include('components.footer')

    <script>
      feather.replace();
    </script>
</body>
</html>