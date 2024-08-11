<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Phone Number') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Update your phone number to stay connected.') }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_phone_number_current" :value="__('Current Phone Number')" />
            <x-text-input id="update_phone_number_current" name="current_phone" type="text" class="mt-1 block w-full" value="{{ old('current_phone') }}" autocomplete="off" />
            <x-input-error :messages="$errors->updatePhone->get('current_phone')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_phone_number_new" :value="__('New Phone Number')" />
            <x-text-input id="update_phone_number_new" name="new_phone" type="text" class="mt-1 block w-full" value="{{ old('new_phone') }}" autocomplete="off" />
            <x-input-error :messages="$errors->updatePhone->get('new_phone')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_phone_number_new_confirmation" :value="__('Confirm New Phone Number')" />
            <x-text-input id="update_phone_number_new_confirmation" name="new_phone_confirmation" type="text" class="mt-1 block w-full" value="{{ old('new_phone_confirmation') }}" autocomplete="off" />
            <x-input-error :messages="$errors->updatePhone->get('new_phone_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'phone-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
