<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
        h1{
        text-align: center;
        text-transform: uppercase;
        }
        .contenido{
        font-size: 20px;
        }
        #primero{
        background-color: #ccc;
        }
        #segundo{
        color:#44a359;
        }
        #tercero{
        text-decoration:line-through;
        }
    </style>
    </head>
    <body>
        <ul>
            <p>HORA&nbsp;&nbsp;&nbsp;&nbsp;ENTRADA</p>
            <?php $__currentLoopData = $fluids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fluid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($fluid->input != null): ?>
                    <li><?php echo e($fluid->hour); ?>:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($fluid->input); ?> mg</li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </body>
</html><?php /**PATH C:\Users\tatis\Desktop\Proyecto_Web\proyecto_final\resources\views/Administrador/pdf_vista.blade.php ENDPATH**/ ?>