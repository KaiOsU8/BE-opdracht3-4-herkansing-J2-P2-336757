<x-app-layout>
<script src="https://kit.fontawesome.com/344423929d.js" crossorigin="anonymous"></script>
    <div class=" flex justify-center flex-col items-center">
        <h1 class="text-center text-4xl m-20">Instructeurs in dienst</h1>
        <span class="text-center mb-20 text-xl">Aantal instructeurs: {{ $count }}</span>
        @if (session('success'))
            <div class="alert alert-{{ session('alert-type') }}">
                {{ session('success') }}
            </div>
        @endif
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
            <table class="text-center flex justify-center">
                <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400">Voornaam</th>
                    <th class="border-solid border-2 border-sky-400">Tussenvoegsel</th>
                    <th class="border-solid border-2 border-sky-400">Achternaam</th>
                    <th class="border-solid border-2 border-sky-400">Mobiel</th>
                    <th class="border-solid border-2 border-sky-400">DatumInDienst</th>
                    <th class="border-solid border-2 border-sky-400">AantalSterren</th>
                    <th class="border-solid border-2 border-sky-400">Voertuig</th>
                    <th class="border-solid border-2 border-sky-400">Ziekte/Verlof</th>
                    <th class="border-solid border-2 border-sky-400">Verwijderen</th>
                </tr>
                @foreach ($instructeurs as $instructeur)
                <tr>
                    <td class="border-b-2 border-x-2 border-gray-500">{{ $instructeur->Voornaam }}</td>
                    <td class="border-b-2 border-x-2 border-gray-500">{{ $instructeur->Tussenvoegsel }}</td>
                    <td class="border-b-2 border-x-2 border-gray-500">{{ $instructeur->Achternaam }}</td>
                    <td class="border-b-2 border-x-2 border-gray-500">{{ $instructeur->Mobiel }}</td>
                    <td class="border-b-2 border-x-2 border-gray-500">{{ $instructeur->DatumInDienst }}</td>
                    <td class="border-b-2 border-x-2 border-gray-500">{{ $instructeur->AantalSterren }}</td>
                    <td class="border-b-2 border-x-2 border-gray-500"><a href="{{ route('instructeur.show', ['instructeur' => $instructeur->id]) }}"><i class="fa-solid fa-car-on"></i></a></td>
                    <td class="border-b-2 border-x-2 border-gray-500">
                        @if($instructeur->IsActief)
                            <a href="{{ route('instructeur.deactivate', ['id' => $instructeur->id]) }}" class="btn btn-danger"><i class="fa-solid fa-thumbs-up"></i></a>
                        @else
                            <a href="{{ route('instructeur.activate', ['id' => $instructeur->id]) }}" class="btn btn-success"><i class="fa-solid fa-bandage"></i></a>
                        @endif
                    </td>
                    <td class="border-b-2 border-x-2 border-gray-500">
                        <form action="{{ route('instructeur.destroy', $instructeur) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>