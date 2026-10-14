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
        .dashboard-card {
            border-radius: 18px;
            box-shadow: 0 6px 18px rgba(13,110,253,0.08), 0 1.5px 4px rgba(0,0,0,0.04);
            border: none;
            background: #fff;
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
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
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
    </nav>
   

    <!-- ADMIN DASHBOARD STATS -->
    <div class="container mb-5">
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="alert alert-primary">
                    <strong>Nombre total d'inscrits :</strong> {{ $users->count() }}
                </div>
            </div>
            <div class="col-md-3">
                <div class="alert alert-success">
                    <strong>Total téléchargements :</strong> {{ $nombreTotalTelechargements }}
                </div>
            </div>
            <div class="col-md-3">
                <div class="alert alert-info">
                    <strong>Chiffre d'affaires téléchargements :</strong> {{ number_format($chiffreAffaires, 0, ',', ' ') }} FCFA
                </div>
            </div>
            <div class="col-md-3">
                <div class="alert alert-warning">
                    <strong>Nombre d'abonnements :</strong> {{ $nombreAbonnements }}<br>
                    <strong>Chiffre d'affaires abonnements :</strong> {{ number_format($chiffreAffairesAbonnements, 0, ',', ' ') }} FCFA
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Nationalité</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $index => $user)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->cvProfil->phone ?? '-' }}</td>
                            <td>{{ $user->cvProfil->nationality ?? '-' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Créer mon CV -->

   <footer class="footer">
            &copy; {{ date('Y') }} CV LINK by <a href="stagesbenin.com">StagesBENIN</a>. Tous droits réservés.
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
