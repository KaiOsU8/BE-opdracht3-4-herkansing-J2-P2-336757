<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <script src="https://kit.fontawesome.com/344423929d.js" crossorigin="anonymous"></script>

    <div class="flex justify-center flex-col items-center">
        <h1 class="text-center text-4xl m-20">Door instructeur gebruikte voertuigen</h1>

        <p><strong>Naam:</strong> <?php echo e($instructeur->Voornaam); ?> <?php echo e($instructeur->Tussenvoegsel); ?> <?php echo e($instructeur->Achternaam); ?></p>
        <p><strong>Datum in dienst:</strong> <?php echo e($instructeur->DatumInDienst); ?></p>
        <p><strong>Aantal Sterren:</strong> <?php echo e($instructeur->AantalSterren); ?></p>

        <a href="<?php echo e(url('voertuig/create/' . $instructeur->id)); ?>" class="my-10 bg-gray-500 hover:bg-smoke-700 text-white font-bold py-2 px-4 rounded">
            Toevoegen Voertuig
        </a>

        <?php if(count($voertuigValues) > 0): ?>
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
                <?php $__currentLoopData = $voertuigValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voertuig): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="border-b-2 border-x-2 border-gray-500"><?php echo e($voertuig->id); ?></td>
                        <td class="border-b-2 border-x-2 border-gray-500"><?php echo e($voertuig->Kenteken); ?></td>
                        <td class="border-b-2 border-x-2 border-gray-500"><?php echo e($voertuig->Type); ?></td>
                        <td class="border-b-2 border-x-2 border-gray-500"><?php echo e($voertuig->Bouwjaar); ?></td>
                        <td class="border-b-2 border-x-2 border-gray-500"><?php echo e($voertuig->Brandstof); ?></td>
                        <td class="border-b-2 border-x-2 border-gray-500"><?php echo e($voertuig->typeVoertuig->TypeVoertuig); ?></td>
                        <td class="border-b-2 border-x-2 border-gray-500"><?php echo e($voertuig->typeVoertuig->Rijbewijscategorie); ?></td>
                        <td class="border-b-2 border-x-2 border-gray-500 text-center">
                            <a href="<?php echo e(route('voertuig.edit', $voertuig->id)); ?>">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                        </td>
                        <td class="border-b-2 border-x-2 border-gray-500 text-center">
                        <form action="<?php echo e(route('voertuig.destroy', $voertuig->id)); ?>" method="POST" class="inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit">
                                <i class="fa-regular fa-trash"></i>
                            </button>
                        </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        <?php else: ?>
            <p>Deze instructeur heeft geen toegewezen voertuigen.</p>
        <?php endif; ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\wamp64\www\bej2\BE-opdracht3-J2-P1-336757\resources\views/instructeur/show.blade.php ENDPATH**/ ?>