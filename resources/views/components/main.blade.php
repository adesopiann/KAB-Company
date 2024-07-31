<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karya Amanah Borneo</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poiret+One|Oswald|Poppins">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
     <script src="https://www.google.com/recaptcha/api.js"></script>
  
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

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script>
      feather.replace();
      AOS.init();
    </script>

    <script>
        function onSubmit(token) {
            document.getElementById("contactForm").submit();
        }
    </script>
</body>
</html>