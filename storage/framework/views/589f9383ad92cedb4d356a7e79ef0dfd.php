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
    <div class=" flex justify-center flex-col items-center">
        <h1 class="text-center text-4xl m-20">Instructeurs in dienst</h1>
        <span class="text-center mb-20 text-xl">Aantal instructeurs: <?php echo e($count); ?></span>
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
                <?php $__currentLoopData = $instructeurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructeur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="border-b-2 border-x-2 border-gray-500"><?php echo e($instructeur->Voornaam); ?></td>
                    <td class="border-b-2 border-x-2 border-gray-500"><?php echo e($instructeur->Tussenvoegsel); ?></td>
                    <td class="border-b-2 border-x-2 border-gray-500"><?php echo e($instructeur->Achternaam); ?></td>
                    <td class="border-b-2 border-x-2 border-gray-500"><?php echo e($instructeur->Mobiel); ?></td>
                    <td class="border-b-2 border-x-2 border-gray-500"><?php echo e($instructeur->DatumInDienst); ?></td>
                    <td class="border-b-2 border-x-2 border-gray-500"><?php echo e($instructeur->AantalSterren); ?></td>
                    <td class="border-b-2 border-x-2 border-gray-500"><a href="<?php echo e(route('instructeur.show', ['instructeur' => $instructeur->id])); ?>"><i class="fa-solid fa-car-on"></i></a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
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
<?php endif; ?><?php /**PATH C:\wamp64\www\BEJ2\resources\views/instructeur/index.blade.php ENDPATH**/ ?>