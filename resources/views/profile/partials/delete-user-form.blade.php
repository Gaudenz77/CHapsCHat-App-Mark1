<section class="my-4">
    <header>
        <h2 class="fw-medium text-gray-900">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-3 text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <button
        type="button"
        class="btn btn-circleOwn3 pb-5"
        data-bs-toggle="modal"
        data-bs-target="#confirm-user-deletion"
    >
    <i class="fa-solid fa-skull fa-4x"></i>{{ __('Delete Account') }}</button>

    <div
        class="modal fade"
        id="confirm-user-deletion"
        tabindex="-1"
        aria-labelledby="confirm-user-deletion-title"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <form method="post" action="{{ route('profile.destroy') }}">
                @csrf
                @method('delete')

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirm-user-deletion-title">{{ __('Are you sure you want to delete your account?') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="{{ __('Close') }}"></button>
                    </div>

                    <div class="modal-body">
                        <p>{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. \n Please enter your password to confirm you would like to permanently delete your account.') }}</p>

                        <div class="mb-3">
                            <label for="password" class="form-label visually-hidden">{{ __('Password') }}</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="{{ __('Password') }}">
                            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                        <button type="submit" class="btn btn-danger">{{ __('Delete Account') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</section>
