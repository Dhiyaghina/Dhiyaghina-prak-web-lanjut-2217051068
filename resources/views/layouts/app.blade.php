<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjJ5v5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXhOJMhJY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <!-- Content yang akan ditampilkan di setiap halaman -->
    @yield('content')

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYfOtY3IHB60NNkmXc5s9fDVZLE5aAA55NDzOxhy9GkcIds1K1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
