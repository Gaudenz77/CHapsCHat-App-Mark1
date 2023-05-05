<x-app-layout>
    <div class="container py-12">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ __("You're logged in!") }}</h5>
                        <p class="card-text">
                            <a href="{{ url('/playground') }}">Playground</a>
                        </p>
                        <div class="row">
                            <div class="col bg-info">
                                test
                                <button class="btn btn-warning">Danger danger...High Voltage</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


