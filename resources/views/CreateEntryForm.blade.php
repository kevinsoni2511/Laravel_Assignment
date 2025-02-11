<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Entry Form</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1 align="center">
            Product Management System
        </h1>
    </header>
    <br><br>
    <div class="d-flex justify-content-center mt-3">
        <!-- Updated button to link to a new page -->
    <a href="{{ url('/form') }}" class="btn btn-primary">Go to Entry Form</a>&nbsp;&nbsp;
    <a href="{{ url('/') }}" class="btn btn-secondary mx-2">Back to Home</a>
    </div>
    
    <main>
        @yield('content')
    </main>
</body>
</html>
