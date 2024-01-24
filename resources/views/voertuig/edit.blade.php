<x-app-layout>
<script src="https://kit.fontawesome.com/344423929d.js" crossorigin="anonymous"></script>
    <div class="flex justify-center flex-col items-center">
        <h1 class="text-center text-4xl m-20">Edit Voertuig</h1>

        <form action="{{ route('voertuig.update', $voertuig->id) }}" method="POST" class="text-center flex justify-center">
            @csrf
            @method('PUT')

            <table>

            <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400">Instructeur</th>
                    <td class="border-b-2 border-x-2 border-gray-500">
                        <select id="InstructeurId" name="InstructeurId" required>
                            @foreach($instructeurs as $instructeur)
                                <option value="{{ $instructeur->id }}" {{ $voertuig->InstructeurId == $instructeur->id ? 'selected' : '' }}>
                                    {{ $instructeur->Voornaam }} {{ $instructeur->Tussenvoegsel }} {{ $instructeur->Achternaam }}
                                </option>
                            @endforeach
                            <option value="" {{ $voertuig->InstructeurId == null ? 'selected' : '' }}>
                                No Instructeur
                            </option>
                        </select>
                    </td>
                </tr>

            <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400">Type Voertuig</th>
                    <td class="border-b-2 border-x-2 border-gray-500">
                        <select id="TypeVoertuigId" name="TypeVoertuigId" required>
                            @foreach($typeVoertuigs as $typeVoertuig)
                                <option value="{{ $typeVoertuig->id }}" {{ $voertuig->TypeVoertuigId == $typeVoertuig->id ? 'selected' : '' }}>
                                    {{ $typeVoertuig->TypeVoertuig }}
                                </option>
                            @endforeach
                        </select>
                    </td>
                </tr>

                <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400">Type</th>
                    <td class="border-b-2 border-x-2 border-gray-500">
                        <input type="text" id="Type" name="Type" value="{{ $voertuig->Type }}" required>
                    </td>
                </tr>

                <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400">Bouwjaar</th>
                    <td class="border-b-2 border-x-2 border-gray-500">
                        <?php
                        $dateTime = new DateTime($voertuig->Bouwjaar);
                        ?>
                        <input type="date" id="Bouwjaar" name="Bouwjaar" value="{{ $dateTime->format('Y-m-d') }}" required>
                    </td>
                </tr>

                <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400">Brandstof</th>
                    <td class="border-b-2 border-x-2 border-gray-500">
                        <input type="text" id="Brandstof" name="Brandstof" value="{{ $voertuig->Brandstof }}" required>
                    </td>
                </tr>

                <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400">Kenteken</th>
                    <td class="border-b-2 border-x-2 border-gray-500">
                        <input type="text" id="Kenteken" name="Kenteken" value="{{ $voertuig->Kenteken }}" required>
                    </td>
                </tr>

                <tr class="text-xl">
                    <td colspan="2" class="border-b-2 border-x-2 border-gray-500">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Update Voertuig
                        </button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</x-app-layout>