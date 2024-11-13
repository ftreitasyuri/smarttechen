<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SmartTechEnterprise</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body>
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg bg-primary p-4 d-flex justify-content-between">
        <div class="nav-brand">
            <a class="navbar-brand" href="{{route('home')}}">SmartTech Enterprise</a>
        </div>

        <div class="navbar-nav">
            <a class="nav-item nav-link " href="{{ route('home') }}">Home</a>
            <a class="nav-item nav-link" href="{{ route('quemSomos') }}">Quem Somos</a>
            <a class="nav-item nav-link" href="#">Contate-nos</a>
            <a class="nav-item nav-link" href="#">Blog</a>
        </div>
    </nav>

    {{-- FIMNAVBAR  --}}
    <main class="container">
        @yield('content')
    </main>


    <!-- Adicione jQuery (necessário para Bootstrap 4 e abaixo) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Adicione o JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<footer class="mt-5 navbar navbar-expand-lg bg-primary p-4 d-flex justify-content-center">
    <h3 class="text-light">Todos os direitos reservados &copy; SmartTechEnterprise</h3>
</footer>
</body>

</html>
