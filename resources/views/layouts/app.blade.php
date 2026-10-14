<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
<title>CV LINK</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body { font-family: 'Inter', Arial, sans-serif; }
            .navbar-brand {
                font-weight: 700;
                font-size: 2rem;
                color: #0d6efd !important;
                letter-spacing: 1px;
            }
            .navbar-slogan {
                font-size: 1rem;
                color: #6c757d;
                margin-top: -0.5rem;
            }
            .avatar-default {
                width: 36px;
                height: 36px;
                border-radius: 50%;
                background: #e3f0ff;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                font-size: 1.3rem;
                color: #0d6efd;
                margin-right: 0.5rem;
            }
        </style>
    </head>
    <body>
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <main class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/">CV LINK</a>
                        <span class="navbar-slogan d-none d-md-inline ms-2">Créez votre CV professionnel facilement</span>
                        <div class="d-flex align-items-center ms-auto gap-2">
                            @auth
                                <span class="avatar-default me-2"><svg xmlns='http://www.w3.org/2000/svg' width='22' height='22' fill='currentColor' viewBox='0 0 16 16'><path d='M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'/></svg></span>
                                <span class="text-success fw-semibold me-2">Connecté{{ Auth::user() ? ' : '.Auth::user()->name : '' }}</span>
                                @php
                                    $user = Auth::user();
                                @endphp
                                @if($user && $user->estAbonneActif())
                                    <span class="badge bg-success ms-2">Abonnement actif jusqu'au {{ $user->abonnement->date_fin->format('d/m/Y') }}</span>
                                @endif
                                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger btn-sm">Déconnexion</button>
                                </form>
                            @else
                                <a href="/login" class="btn btn-outline-primary">Connexion</a>
                            @endauth
                        </div>
                    </div>
                </nav>
                @yield('content')
            </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
