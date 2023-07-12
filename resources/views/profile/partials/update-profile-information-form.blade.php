<section class="my-4">
    <header>
        <h2 class="text-lg">
            {{ __('Your') }}<br>{{ __('Profile') }}
        </h2>
    
        <p class="mt-1">
            {{ __("Update your accounts") }}<br>{{ __("profile information and email address.") }}
        </p>
    </header>
    
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    
    <form method="post" action="{{ route('profile.update') }}" class="mt-6">
        @csrf
        @method('patch')
    
        <div class="mb-3 d-flex justify-content-center">
            <div class="col-9">
                <x-input-label class="form-label" for="name" :value="__('Name')" />
                <x-text-input id="name" name="name" type="text" class="form-control" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>
        </div>
    
        <div class="mb-3 d-flex justify-content-center">
            <div class="col-9">
            <x-input-label class="form-label" for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="form-control" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
    
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2">
                        {{ __('Your email address is unverified.') }}
    
                        <button form="send-verification" class="text-decoration-underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>
    
                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 text-sm">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
            </div>
        </div>

    
        <div class="d-flex align-items-center gap-4 justify-content-center">
            <button type="submit" class="btn btn-circleOwn2"><i class='fa-regular fa-save fa-2xl'></i> {{ __('Save') }}</button>
    
            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>

</section>
