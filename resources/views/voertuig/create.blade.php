<x-app-layout>
<script src="https://kit.fontawesome.com/344423929d.js" crossorigin="anonymous"></script>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <h1 class="text-center text-4xl">Alle beschikbare voertuigen</h1>
                <div class="p-6 bg-white border-b border-gray-200">

                <div class="my-5 ml-14"> 
                    <p><strong>Naam:</strong> {{ $instructeur->Voornaam }} {{ $instructeur->Tussenvoegsel }} {{ $instructeur->Achternaam }}</p>
                    <p><strong>Datum in dienst:</strong> {{ $instructeur->DatumInDienst }}</p>
                    <p><strong>Aantal Sterren:</strong> {{ $instructeur->AantalSterren }}</p>
                </div>
                   
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th>TypeVoertuig</th>
                                <th>Type</th>
                                <th>Kenteken</th>
                                <th>Bouwjaar</th>
                                <th>Brandstof</th>
                                <th>Rijbewijscategorie</th>
                                <th>Toevoegen</th>
                                <th>Wijzigen</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($voertuigen as $voertuig)
                            <tr class="text-center">
                                <td>{{ $voertuig->typeVoertuig ? $voertuig->typeVoertuig->TypeVoertuig : 'N/A' }}</td>
                                <td>{{ $voertuig->Type }}</td>
                                <td>{{ $voertuig->Kenteken }}</td>
                                <td>{{ $voertuig->Bouwjaar }}</td>
                                <td>{{ $voertuig->Brandstof }}</td>
                                <td>{{ $voertuig->typeVoertuig ? $voertuig->typeVoertuig->Rijbewijscategorie : 'N/A' }}</td>
                                <td>
                                    <form action="{{ route('instructeur.voertuig.add', ['instructeur' => $instructeur->id, 'voertuig' => $voertuig->id]) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-plus"></i></button>
                                    </form>
                                </td>
                                <td class="border-b-2 border-x-2 border-gray-500 text-center">
                                    <a href="{{ route('voertuig.edit', $voertuig->id) }}">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>