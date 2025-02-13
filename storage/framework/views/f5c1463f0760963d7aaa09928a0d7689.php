<?php $__env->startSection('content'); ?>

    <a href="/admin/stores/create" class="btn btn-sm btn-success">Criar loja</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Loja</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($store->id); ?></td>
                    <td><?php echo e($store->name); ?></td>
                    <td>
                        <a href="/admin/stores/<?php echo e($store->id); ?>/edit" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/admin/stores/destroy/<?php echo e($store->id); ?>" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <?php echo e($stores->links('pagination::bootstrap-5')); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/flavio/3437-6262/Projetos/laravel_ecommerce/resources/views/admin/stores/index.blade.php ENDPATH**/ ?>