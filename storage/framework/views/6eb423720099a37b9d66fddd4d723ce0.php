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
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <h1 class="text-center text-4xl">Alle beschikbare voertuigen</h1>
                <div class="p-6 bg-white border-b border-gray-200">

                <div class="my-5 ml-14"> 
                    <p><strong>Naam:</strong> <?php echo e($instructeur->Voornaam); ?> <?php echo e($instructeur->Tussenvoegsel); ?> <?php echo e($instructeur->Achternaam); ?></p>
                    <p><strong>Datum in dienst:</strong> <?php echo e($instructeur->DatumInDienst); ?></p>
                    <p><strong>Aantal Sterren:</strong> <?php echo e($instructeur->AantalSterren); ?></p>
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
                        <?php $__currentLoopData = $voertuigen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voertuig): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="text-center">
                                <td><?php echo e($voertuig->typeVoertuig ? $voertuig->typeVoertuig->TypeVoertuig : 'N/A'); ?></td>
                                <td><?php echo e($voertuig->Type); ?></td>
                                <td><?php echo e($voertuig->Kenteken); ?></td>
                                <td><?php echo e($voertuig->Bouwjaar); ?></td>
                                <td><?php echo e($voertuig->Brandstof); ?></td>
                                <td><?php echo e($voertuig->typeVoertuig ? $voertuig->typeVoertuig->Rijbewijscategorie : 'N/A'); ?></td>
                                <td>
                                    <form action="<?php echo e(route('instructeur.voertuig.add', ['instructeur' => $instructeur->id, 'voertuig' => $voertuig->id])); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-plus"></i></button>
                                    </form>
                                </td>
                                <td class="border-b-2 border-x-2 border-gray-500 text-center">
                                    <a href="<?php echo e(route('voertuig.edit', $voertuig->id)); ?>">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
<?php endif; ?><?php /**PATH C:\wamp64\www\BEJ2\resources\views/voertuig/create.blade.php ENDPATH**/ ?>