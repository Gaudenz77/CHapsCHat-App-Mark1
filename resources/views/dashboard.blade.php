<x-app-layout>
    <x-slot name="header">
        <h2 class="{{-- font-semibold text-xl text-gray-800 leading-tight --}}">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}<br>
                    <a href="{{ url('/playground') }}">Playground</a>
                        <div class="container">
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

<!---------------------------------------------------------------- TEst edit tailwind components -->
    <div class="container-fluid bg-info">
        <div class="row">
            <div class="col">
                <h2 class="{{-- font-semibold text-xl text-gray-800 leading-tight --}}">
                    {{ __('Dashboard') }}
                </h2>
            </div>
            <div class="col">
        {{ __("You're logged in!") }}<br>
            <a href="{{ url('/playground') }}">Playground</a>
                <div class="container">
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
<!---------------------------------------------------------------- TEst edit tailwind components -->
</x-app-layout>


