<x-app-layout>
<script src="https://kit.fontawesome.com/344423929d.js" crossorigin="anonymous"></script>
    <div class=" flex justify-center flex-col items-center">
        <h1 class="text-center text-4xl m-20">Instructeurs in dienst</h1>
        <span class="text-center mb-20 text-xl">Aantal instructeurs: {{ $count }}</span>
            <table class="text-center flex justify-center">
                <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400">Voornaam</th>
                    <th class="border-solid border-2 border-sky-400">Tussenvoegsel</th>
                    <th class="border-solid border-2 border-sky-400">Achternaam</th>
                    <th class="border-solid border-2 border-sky-400">Mobiel</th>
                    <th class="border-solid border-2 border-sky-400">DatumInDienst</th>
                    <th class="border-solid border-2 border-sky-400">AantalSterren</th>
                    <th class="border-solid border-2 border-sky-400">Voertuig</th>
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
                </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>