@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV LINK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', Arial, sans-serif;
            background: linear-gradient(135deg, #f8fafc 0%, #e3f0ff 100%);
            min-height: 100vh;
        }
        .feature-card {
            height: 100%;
            transition: transform 0.3s;
            border-radius: 18px;
            box-shadow: 0 6px 18px rgba(13,110,253,0.08), 0 1.5px 4px rgba(0,0,0,0.04);
            border: none;
        }
        .feature-card:hover {
            transform: translateY(-7px) scale(1.03);
            box-shadow: 0 12px 32px rgba(13,110,253,0.13), 0 2px 8px rgba(0,0,0,0.06);
        }
        .card-icon {
            font-size: 2.7rem;
            margin-bottom: 1rem;
            color: #0d6efd;
        }
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
        .footer {
            background: #f8fafc;
            color: #6c757d;
            text-align: center;
            padding: 1.2rem 0 0.5rem 0;
            font-size: 1rem;
            border-top: 1px solid #e3e3e3;
            margin-top: 3rem;
        }
    </style>
</head>
<body>
    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">CV LINK</a>
            <span class="navbar-slogan d-none d-md-inline ms-2">Créez votre CV professionnel facilement</span>
            <div class="ms-auto d-flex align-items-center gap-2">
                @auth
                    <span class="avatar-default me-2"><svg xmlns='http://www.w3.org/2000/svg' width='22' height='22' fill='currentColor' viewBox='0 0 16 16'><path d='M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'/></svg></span>
                    <span class="text-success fw-semibold me-2">Connecté{{ Auth::user() ? ' : '.Auth::user()->name : '' }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger btn-sm">Déconnexion</button>
                    </form>
                @else
                    <a href="
                    {{ route('login') }}" class="btn btn-outline-primary me-2">Connexion</a>
                    <a href="
                    {{ route('register') }}" class="btn btn-primary">Créer un compte</a>
                @endauth
            </div>
        </div>
    </nav> --}}
    <div class="container py-5">
        <h1 class="text-center mb-5 fw-bold" style="font-size:2.5rem; color:#0d6efd; letter-spacing:1px;">Bienvenue sur CV LINK</h1>
        <div class="row g-4">
            <!-- Créer mon CV -->
            <div class="col-md-6 col-lg-3">
                <div class="card feature-card h-100 p-4 text-center">
                    <div class="card-body">
                        <div class="card-icon">📝</div>
                        <h3 class="card-title h4">Créer mon CV</h3>
                        <p class="card-text">Commencez à créer votre CV professionnel en quelques minutes</p>
                        <a href="
                        {{ route('cv.index') }}" class="btn btn-primary mt-3 w-100">Commencer</a>
                    </div>
                </div>
            </div>
            <!-- Voir le tutoriel -->
            <div class="col-md-6 col-lg-3">
                <div class="card feature-card h-100 p-4 text-center">
                    <div class="card-body">
                        <div class="card-icon">🎥</div>
                        <h3 class="card-title h4">Tutoriel</h3>
                        <p class="card-text">Apprenez à créer un CV parfait avec nos guides vidéo</p>
                        <a href="
                       {{ route('tuto.index') }} " class="btn btn-outline-primary mt-3 w-100">Voir les tutoriels</a>
                    </div>
                </div>
            </div>
            <!-- Abonnement -->
            <div class="col-md-6 col-lg-3">
                <div class="card feature-card h-100 p-4 text-center">
                    <div class="card-body">
                        <div class="card-icon">⭐</div>
                        <h3 class="card-title h4">Abonnement</h3>
                        <p class="card-text">Découvrez nos offres premium pour plus de fonctionnalités</p>
                        <a href="{{ route('abonnement.index') }}
                        " class="btn btn-outline-success mt-3 w-100">Voir les offres</a>
                    </div>
                </div>
            </div>
            <!-- Télécharger mon CV -->
            <div class="col-md-6 col-lg-3">
                <div class="card feature-card h-100 p-4 text-center">
                    <div class="card-body">
                        <div class="card-icon">📥</div>
                        <h3 class="card-title h4">Télécharger</h3>
                        <p class="card-text">Récupérez votre CV au format PDF ou la lettre de motivation</p>
                        <a href="{{ route('cv.moncv') }}
                        " class="btn btn-outline-secondary mt-3 w-100">Télécharger</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
            &copy; {{ date('Y') }} CV LINK by <a href="stagesbenin.com">StagesBENIN</a>. Tous droits réservés.
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection
