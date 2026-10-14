<x-guest-layout>
    <div class="text-center mb-4">
        <span style="font-family: 'Inter', sans-serif; font-size: 2.2rem; font-weight: 700; color: #0d6efd; letter-spacing: 1px;">CV LINK</span>
        <div style="font-size: 1rem; color: #6c757d; margin-top: 0.25rem;">Créer un compte gratuitement</div>
    </div>
    <form method="POST" action="{{ route('register') }}" class="p-3">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nom complet</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" class="form-control rounded-pill @error('name') is-invalid @enderror">
            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Adresse email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" class="form-control rounded-pill @error('email') is-invalid @enderror">
            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input id="password" type="password" name="password" required autocomplete="new-password" class="form-control rounded-pill @error('password') is-invalid @enderror">
            @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="form-control rounded-pill @error('password_confirmation') is-invalid @enderror">
            @error('password_confirmation')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="d-grid mb-3">
            <button type="submit" class="btn btn-primary btn-lg rounded-pill">Créer un compte</button>
        </div>
        <div class="text-center">
            <a href="{{ route('login') }}" class="text-decoration-none">Déjà inscrit ? <b>Se connecter</b></a>
        </div>
    </form>
</x-guest-layout>
