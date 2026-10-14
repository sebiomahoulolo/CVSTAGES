<x-guest-layout>
    <div class="text-center mb-4">
        <span style="font-family: 'Inter', sans-serif; font-size: 2.2rem; font-weight: 700; color: #0d6efd; letter-spacing: 1px;">CV LINK</span>
        <div style="font-size: 1rem; color: #6c757d; margin-top: 0.25rem;">Connectez-vous à votre espace</div>
    </div>
    @if (session('status'))
        <div class="alert alert-success text-center">{{ session('status') }}</div>
    @endif
    <form method="POST" action="{{ route('login') }}" class="p-3">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Adresse email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" class="form-control rounded-pill @error('email') is-invalid @enderror">
            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input id="password" type="password" name="password" required autocomplete="current-password" class="form-control rounded-pill @error('password') is-invalid @enderror">
            @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
            <label class="form-check-label" for="remember_me">Se souvenir de moi</label>
        </div>
        <div class="d-grid mb-3">
            <button type="submit" class="btn btn-primary btn-lg rounded-pill">Se connecter</button>
        </div>
        <div class="text-center">
            <a href="{{ route('register') }}" class="text-decoration-none">Pas encore de compte ? <b>Créer un compte</b></a>
        </div>
        @if (Route::has('password.request'))
            <div class="text-center mt-2">
                <a class="text-decoration-none" href="{{ route('password.request') }}">Mot de passe oublié ?</a>
            </div>
        @endif
    </form>
</x-guest-layout>
