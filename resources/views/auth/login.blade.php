<x-guest-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .login-card {
            background: white;
            border-radius: 1rem;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            padding: 2.5rem;
            max-width: 450px;
            width: 100%;
        }
        
        .logo-section {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .logo-section h1 {
            font-size: 2rem;
            font-weight: bold;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-top: 1rem;
        }
    </style>

    <div class="login-card">
        <!-- Logo y título -->
        <div class="logo-section">
            <div style="font-size: 3rem;">🚀</div>
            <h1>Programando Ando</h1>
            <p class="text-muted">Inicia sesión en tu cuenta</p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-3">
                <label for="email" style="display: block; font-weight: 500; color: #374151; margin-bottom: 0.5rem;">
                    {{ __('Email') }}
                </label>
                <input 
                    id="email" 
                    type="email" 
                    name="email" 
                    value="{{ old('email') }}" 
                    required 
                    autofocus 
                    autocomplete="username"
                    style="width: 100%; padding: 0.75rem; border: 1px solid #d1d5db; border-radius: 0.5rem; font-size: 1rem;"
                    onfocus="this.style.borderColor='#667eea'; this.style.boxShadow='0 0 0 3px rgba(102, 126, 234, 0.1)'"
                    onblur="this.style.borderColor='#d1d5db'; this.style.boxShadow='none'"
                />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" style="display: block; font-weight: 500; color: #374151; margin-bottom: 0.5rem;">
                    {{ __('Password') }}
                </label>
                <input 
                    id="password" 
                    type="password" 
                    name="password" 
                    required 
                    autocomplete="current-password"
                    style="width: 100%; padding: 0.75rem; border: 1px solid #d1d5db; border-radius: 0.5rem; font-size: 1rem;"
                    onfocus="this.style.borderColor='#667eea'; this.style.boxShadow='0 0 0 3px rgba(102, 126, 234, 0.1)'"
                    onblur="this.style.borderColor='#d1d5db'; this.style.boxShadow='none'"
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="mb-3 form-check">
                <input 
                    id="remember_me" 
                    type="checkbox" 
                    class="form-check-input" 
                    name="remember"
                    style="accent-color: #667eea;"
                >
                <label class="form-check-label text-muted" for="remember_me">
                    {{ __('Remember me') }}
                </label>
            </div>

            <div class="d-flex flex-column gap-3">
                <button 
                    type="submit"
                    style="width: 100%; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none; color: white; padding: 0.75rem; border-radius: 0.5rem; font-weight: 600; font-size: 1rem; cursor: pointer;"
                    onmouseover="this.style.background='linear-gradient(135deg, #5568d3 0%, #63408b 100%)'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 4px 12px rgba(102, 126, 234, 0.4)'"
                    onmouseout="this.style.background='linear-gradient(135deg, #667eea 0%, #764ba2 100%)'; this.style.transform='translateY(0)'; this.style.boxShadow='none'"
                >
                    {{ __('Log in') }}
                </button>

                @if (Route::has('password.request'))
                    <a 
                        href="{{ route('password.request') }}" 
                        class="text-center"
                        style="text-decoration: none; color: #667eea; font-size: 0.875rem;"
                        onmouseover="this.style.color='#5568d3'; this.style.textDecoration='underline'"
                        onmouseout="this.style.color='#667eea'; this.style.textDecoration='none'"
                    >
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </form>

        <!-- Divider -->
        <div class="d-flex align-items-center my-4">
            <hr class="flex-grow-1">
            <span class="px-3 text-muted small">O continúa con</span>
            <hr class="flex-grow-1">
        </div>

        <!-- Google Login Button -->
        <a 
            href="/google-auth/redirect" 
            class="btn btn-outline-secondary w-100 d-flex align-items-center justify-content-center gap-2"
            style="padding: 0.75rem; border: 2px solid #e5e7eb; border-radius: 0.5rem; text-decoration: none; color: #374151; font-weight: 500;"
            onmouseover="this.style.backgroundColor='#f9fafb'"
            onmouseout="this.style.backgroundColor='white'"
        >
            <svg width="20" height="20" viewBox="0 0 24 24">
                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
            </svg>
            Continuar con Google
        </a>

        <!-- Register Link -->
        <div class="text-center mt-4">
            <span class="text-muted small">¿No tienes una cuenta?</span>
            <a 
                href="{{ route('register') }}" 
                style="text-decoration: none; color: #667eea; font-weight: 500; margin-left: 0.25rem;"
                onmouseover="this.style.textDecoration='underline'"
                onmouseout="this.style.textDecoration='none'"
            >
                Regístrate
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-guest-layout>