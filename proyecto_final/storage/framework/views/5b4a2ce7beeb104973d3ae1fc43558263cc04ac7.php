<?php if (isset($component)) { $__componentOriginal64adf8a93055680cfe70ba3a9e6cdd6e9c151bcd = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayouts::class, []); ?>
<?php $component->withName('app-layouts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => 'ENTRADA DE LÍQUIDOS']); ?>
    <div class="container py-3">
        <form method="POST" action="<?php echo e(route('fluids.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="hora" class="form-label">Hora</label>
                <input name="input" type="number" class="form-control" id="hora">
            </div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Hora</th>
                    <?php $__currentLoopData = $fluids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fluid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <th scope="col"><?php echo e($fluid->hour); ?></th>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Entrada</th>
                    <?php $__currentLoopData = $fluids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fluid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($fluid->input); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            </tbody>
        </table>
        <a href="<?php echo e(route('pdf')); ?>" class="mt-1 btn btn-danger">Generar PDF</a>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal64adf8a93055680cfe70ba3a9e6cdd6e9c151bcd)): ?>
<?php $component = $__componentOriginal64adf8a93055680cfe70ba3a9e6cdd6e9c151bcd; ?>
<?php unset($__componentOriginal64adf8a93055680cfe70ba3a9e6cdd6e9c151bcd); ?>
<?php endif; ?><?php /**PATH C:\Users\tatis\Desktop\Proyecto_Web\proyecto_final\resources\views/fluids/index.blade.php ENDPATH**/ ?>