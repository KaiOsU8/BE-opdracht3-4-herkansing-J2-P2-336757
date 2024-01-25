<x-app-layout>
    <script src="https://kit.fontawesome.com/344423929d.js" crossorigin="anonymous"></script>

    <div class="flex justify-center flex-col items-center">
        <h1 class="text-center text-4xl m-20">Door instructeur gebruikte voertuigen</h1>

        <p><strong>Naam:</strong> {{ $instructeur->Voornaam }} {{ $instructeur->Tussenvoegsel }} {{ $instructeur->Achternaam }}</p>
        <p><strong>Datum in dienst:</strong> {{ $instructeur->DatumInDienst }}</p>
        <p><strong>Aantal Sterren:</strong> {{ $instructeur->AantalSterren }}</p>

        <a href="{{ url('voertuig/create/' . $instructeur->id) }}" class="my-10 bg-gray-500 hover:bg-smoke-700 text-white font-bold py-2 px-4 rounded">
            Toevoegen Voertuig
        </a>

        @if(count($voertuigValues) > 0)
            <table>
                <tr>
                    <th class="border-solid border-2 border-sky-400">Voertuig ID</th>
                    <th class="border-solid border-2 border-sky-400">Kenteken</th>
                    <th class="border-solid border-2 border-sky-400">Type</th>
                    <th class="border-solid border-2 border-sky-400">Bouwjaar</th>
                    <th class="border-solid border-2 border-sky-400">Brandstof</th>
                    <th class="border-solid border-2 border-sky-400">Type Voertuig</th>
                    <th class="border-solid border-2 border-sky-400">Rijbewijs Categorie</th>
                    <th class="border-solid border-2 border-sky-400">Wijzigen</th>
                    <th class="border-solid border-2 border-sky-400">Verwijderen</th>
                    <th class="border-solid border-2 border-sky-400">Toegewezen</th>
                    
                </tr>
                @foreach($voertuigValues as $voertuig)
                    <tr>
                        <td class="border-b-2 border-x-2 border-gray-500">{{ $voertuig->id }}</td>
                        <td class="border-b-2 border-x-2 border-gray-500">{{ $voertuig->Kenteken }}</td>
                        <td class="border-b-2 border-x-2 border-gray-500">{{ $voertuig->Type }}</td>
                        <td class="border-b-2 border-x-2 border-gray-500">{{ $voertuig->Bouwjaar }}</td>
                        <td class="border-b-2 border-x-2 border-gray-500">{{ $voertuig->Brandstof }}</td>
                        <td class="border-b-2 border-x-2 border-gray-500">{{ $voertuig->typeVoertuig->TypeVoertuig }}</td>
                        <td class="border-b-2 border-x-2 border-gray-500">{{ $voertuig->typeVoertuig->Rijbewijscategorie }}</td>
                        <td class="border-b-2 border-x-2 border-gray-500 text-center">
                            <a href="{{ route('voertuig.edit', $voertuig->id) }}">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                        </td>
                        <td class="border-b-2 border-x-2 border-gray-500 text-center">
                        <form action="{{ route('voertuig.destroy', $voertuig->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                <i class="fa-regular fa-trash"></i>
                            </button>
                        </form>
                        </td>
                        <td class="border-b-2 border-x-2 border-gray-500 text-center">
                            @if ($instructeur->wasVehicleReassignedDuringLeave($voertuig->id))
                                <a href="{{ route('instructeur.reassign', [$instructeur, $voertuig]) }}">
                                    <span style="color: red;">&#10060;</span> <!-- Red cross -->
                                </a>
                            @else
                                <span style="color: green;">&#10004;</span> <!-- Green checkmark -->
                            @endif
                        </td>   
                    </tr>
                @endforeach
            </table>
        @else
            <p>Deze instructeur heeft geen toegewezen voertuigen.</p>
        @endif
    </div>
</x-app-layout>