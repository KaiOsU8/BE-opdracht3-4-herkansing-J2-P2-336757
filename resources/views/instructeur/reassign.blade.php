<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Reassign Vehicle
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl mb-4">Are you sure you want to reassign the vehicle to {{ $instructeur->name }}?</h1>

                    <form action="{{ route('instructeur.doReassign', [$instructeur, $voertuig]) }}" method="POST">
                        @csrf
                        <x-button>
                            Yes, I'm sure
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>