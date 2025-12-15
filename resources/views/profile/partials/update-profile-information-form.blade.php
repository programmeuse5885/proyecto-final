<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div style="margin-bottom: 1rem;">
            <label for="name" style="display: block; font-weight: 500; color: #374151; margin-bottom: 0.5rem;">
                {{ __('Name') }}
            </label>
            <input 
                id="name" 
                name="name" 
                type="text" 
                value="{{ old('name', $user->name) }}" 
                required 
                autofocus 
                autocomplete="name"
                style="width: 100%; padding: 0.5rem; border: 1px solid #d1d5db; border-radius: 0.375rem; font-size: 1rem; background-color: white; color: #1f2937;"
                onfocus="this.style.borderColor='#667eea'; this.style.boxShadow='0 0 0 3px rgba(102, 126, 234, 0.1)'"
                onblur="this.style.borderColor='#d1d5db'; this.style.boxShadow='none'"
            />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div style="margin-bottom: 1rem;">
            <label for="email" style="display: block; font-weight: 500; color: #374151; margin-bottom: 0.5rem;">
                {{ __('Email') }}
            </label>
            <input 
                id="email" 
                name="email" 
                type="email" 
                value="{{ old('email', $user->email) }}" 
                required 
                autocomplete="username"
                style="width: 100%; padding: 0.5rem; border: 1px solid #d1d5db; border-radius: 0.375rem; font-size: 1rem; background-color: white; color: #1f2937;"
                onfocus="this.style.borderColor='#667eea'; this.style.boxShadow='0 0 0 3px rgba(102, 126, 234, 0.1)'"
                onblur="this.style.borderColor='#d1d5db'; this.style.boxShadow='none'"
            />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div style="margin-top: 0.5rem;">
                    <p style="font-size: 0.875rem; color: #1f2937; margin-bottom: 0.5rem;">
                        {{ __('Your email address is unverified.') }}

                        <button 
                            form="send-verification" 
                            type="submit"
                            style="text-decoration: underline; color: #667eea; background: none; border: none; cursor: pointer; font-size: 0.875rem;"
                            onmouseover="this.style.color='#5568d3'"
                            onmouseout="this.style.color='#667eea'"
                        >
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p style="margin-top: 0.5rem; font-weight: 500; font-size: 0.875rem; color: #10b981;">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <button 
                type="submit"
                style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none; color: white; padding: 0.5rem 1.5rem; border-radius: 0.375rem; font-weight: 500; cursor: pointer;"
                onmouseover="this.style.background='linear-gradient(135deg, #5568d3 0%, #63408b 100%)'; this.style.transform='translateY(-1px)'; this.style.boxShadow='0 4px 6px rgba(0,0,0,0.1)'"
                onmouseout="this.style.background='linear-gradient(135deg, #667eea 0%, #764ba2 100%)'; this.style.transform='translateY(0)'; this.style.boxShadow='none'"
            >
                {{ __('Save') }}
            </button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    style="font-size: 0.875rem; color: #10b981; font-weight: 500;"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>