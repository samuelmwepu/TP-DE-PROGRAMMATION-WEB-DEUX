<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Samuel Mwepu - Portfolio')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('styles')
</head>
<body>

    <!-- Bannière supérieure -->
    <div class="top-banner">
        <span class="banner-left">Samuel Mwepu Nsenga</span>
        <span class="banner-right">Étudiant en Génie Logiciel</span>
    </div>

    <!-- Navigation principale -->
    <nav class="main-nav">
        <ul>
            <li><a href="{{ route('home') }}" class="@if(request()->routeIs('home')) active @endif">Accueil</a></li>
            <li><a href="{{ route('competences') }}" class="@if(request()->routeIs('competences')) active @endif">Compétences</a></li>
            <li><a href="{{ route('projects.index') }}" class="@if(request()->routeIs('projects.*')) active @endif">Projets</a></li>
            <li><a href="{{ route('contact') }}" class="@if(request()->routeIs('contact')) active @endif">Contact</a></li>
            <li><a href="{{ route('admin.messages') }}">Admin</a></li>
        </ul>
    </nav>

    <!-- Messages flash -->
    @if(session('success'))
        <div class="container">
            <div class="alert alert-success" style="background: #d4edda; color: #155724; padding: 1rem; border-radius: 5px; margin-top: 1rem;">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <p>© samuelmwepu90@gmail.com | Tous droits réservés</p>
    </footer>

    @stack('scripts')
</body>
</html>
