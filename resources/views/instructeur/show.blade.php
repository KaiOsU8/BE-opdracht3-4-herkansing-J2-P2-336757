
<x-app-layout>
<script src="https://kit.fontawesome.com/344423929d.js" crossorigin="anonymous"></script>
    <div class=" flex justify-center flex-col items-center">
        <h1 class="text-center text-4xl m-20">Door instructeur gebruikte voertuigen</h1>
        
        <span class="">{{ $instructeur->Voornaam }}</span>
        <span class="">{{ $instructeur->Tussenvoegsel }}</span>
        <span class="">{{ $instructeur->Achternaam }}</span>
        <span class="">{{ $instructeur->Mobiel }}</span>
        <span class="">{{ $instructeur->DatumInDienst }}</span>
        <span class="">{{ $instructeur->AantalSterren }}</span>
            
                @foreach($voertuigen as $voertuig)
                        <div class="mt-4">
                            <p class="text-black-800">{{ $voertuig->id }}</p>
                            <p class="text-sm text-gray-500">{{ $voertuig->Kenteken }}</p>
                        </div>
                    @endforeach
        </table>
    </div>
</x-app-layout>