<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <button
        type="button"
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        style="background-color: #dc3545; color: white; padding: 0.5rem 1.5rem; border-radius: 0.375rem; border: none; font-weight: 500; cursor: pointer;"
        onmouseover="this.style.backgroundColor='#bb2d3b'"
        onmouseout="this.style.backgroundColor='#dc3545'"
    >
        {{ __('Delete Account') }}
    </button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" style="padding: 1.5rem; background: white; border-radius: 0.5rem;">
            @csrf
            @method('delete')

            <h2 style="font-size: 1.25rem; font-weight: 600; color: #1f2937; margin-bottom: 1rem;">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p style="font-size: 0.875rem; color: #6b7280; margin-bottom: 1.5rem;">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div style="margin-bottom: 1.5rem;">
                <label for="password" style="display: block; font-weight: 500; color: #374151; margin-bottom: 0.5rem;">
                    {{ __('Password') }}
                </label>

                <input
                    id="password"
                    name="password"
                    type="password"
                    placeholder="{{ __('Password') }}"
                    style="width: 100%; padding: 0.5rem; border: 1px solid #d1d5db; border-radius: 0.375rem; font-size: 1rem;"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div style="display: flex; justify-content: flex-end; gap: 0.5rem;">
                <button
                    type="button"
                    x-on:click="$dispatch('close')"
                    style="background-color: #6c757d; color: white; padding: 0.5rem 1.5rem; border-radius: 0.375rem; border: none; font-weight: 500; cursor: pointer;"
                    onmouseover="this.style.backgroundColor='#5a6268'"
                    onmouseout="this.style.backgroundColor='#6c757d'"
                >
                    {{ __('Cancel') }}
                </button>

                <button
                    type="submit"
                    style="background-color: #dc3545; color: white; padding: 0.5rem 1.5rem; border-radius: 0.375rem; border: none; font-weight: 500; cursor: pointer;"
                    onmouseover="this.style.backgroundColor='#bb2d3b'"
                    onmouseout="this.style.backgroundColor='#dc3545'"
                >
                    {{ __('Delete Account') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>