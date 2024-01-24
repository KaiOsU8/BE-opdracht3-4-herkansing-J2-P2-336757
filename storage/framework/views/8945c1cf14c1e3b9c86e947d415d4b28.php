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
        <h1 class="text-center text-4xl m-20">Edit Voertuig</h1>

        <form action="<?php echo e(route('voertuig.update', $voertuig->id)); ?>" method="POST" class="text-center flex justify-center">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <table>

            <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400">Instructeur</th>
                    <td class="border-b-2 border-x-2 border-gray-500">
                        <select id="InstructeurId" name="InstructeurId" required>
                            <?php $__currentLoopData = $instructeurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructeur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($instructeur->id); ?>" <?php echo e($voertuig->InstructeurId == $instructeur->id ? 'selected' : ''); ?>>
                                    <?php echo e($instructeur->Voornaam); ?> <?php echo e($instructeur->Tussenvoegsel); ?> <?php echo e($instructeur->Achternaam); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </td>
                </tr>

            <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400">Type Voertuig</th>
                    <td class="border-b-2 border-x-2 border-gray-500">
                        <select id="TypeVoertuigId" name="TypeVoertuigId" required>
                            <?php $__currentLoopData = $typeVoertuigs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typeVoertuig): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($typeVoertuig->id); ?>" <?php echo e($voertuig->TypeVoertuigId == $typeVoertuig->id ? 'selected' : ''); ?>>
                                    <?php echo e($typeVoertuig->TypeVoertuig); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </td>
                </tr>

                <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400">Type</th>
                    <td class="border-b-2 border-x-2 border-gray-500">
                        <input type="text" id="Type" name="Type" value="<?php echo e($voertuig->Type); ?>" required>
                    </td>
                </tr>

                <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400">Bouwjaar</th>
                    <td class="border-b-2 border-x-2 border-gray-500">
                        <?php
                        $dateTime = new DateTime($voertuig->Bouwjaar);
                        ?>
                        <input type="date" id="Bouwjaar" name="Bouwjaar" value="<?php echo e($dateTime->format('Y-m-d')); ?>" required>
                    </td>
                </tr>

                <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400">Brandstof</th>
                    <td class="border-b-2 border-x-2 border-gray-500">
                        <input type="text" id="Brandstof" name="Brandstof" value="<?php echo e($voertuig->Brandstof); ?>" required>
                    </td>
                </tr>

                <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400">Kenteken</th>
                    <td class="border-b-2 border-x-2 border-gray-500">
                        <input type="text" id="Kenteken" name="Kenteken" value="<?php echo e($voertuig->Kenteken); ?>" required>
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\wamp64\www\bej2\BE-opdracht3-J2-P1-336757\resources\views/voertuig/edit.blade.php ENDPATH**/ ?>