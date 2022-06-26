<?php if (isset($component)) { $__componentOriginal64adf8a93055680cfe70ba3a9e6cdd6e9c151bcd = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayouts::class, []); ?>
<?php $component->withName('app-layouts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => 'CONROL HEMODINÁMICO']); ?>

    <main>
        <!-- Contenido de la vista -->
        <div class="text-center p-3">
            <img class="img-fluid" src="<?php echo e(asset('img/hospital.jpg')); ?>" alt="SES">
        </div>
    </main>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal64adf8a93055680cfe70ba3a9e6cdd6e9c151bcd)): ?>
<?php $component = $__componentOriginal64adf8a93055680cfe70ba3a9e6cdd6e9c151bcd; ?>
<?php unset($__componentOriginal64adf8a93055680cfe70ba3a9e6cdd6e9c151bcd); ?>
<?php endif; ?><?php /**PATH C:\Users\tatis\Desktop\Proyecto_Web\proyecto_final\resources\views/welcome.blade.php ENDPATH**/ ?>