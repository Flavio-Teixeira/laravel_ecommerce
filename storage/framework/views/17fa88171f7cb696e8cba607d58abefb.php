<?php $__env->startSection('content'); ?>

    <h1>Alterar loja</h1>

    <form action="/admin/stores/update/<?php echo e($store->id); ?>" method="POST">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <div class="form-group">
            <label for="name">Nome loja</label>
            <input type="text" name="name" class="form-control" value="<?php echo e($store->name); ?>">
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <input type="text" name="description" class="form-control" value="<?php echo e($store->description); ?>">
        </div>
        <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="text" name="phone" class="form-control" value="<?php echo e($store->phone); ?>">
        </div>
        <div class="form-group">
            <label for="mobile_phone">Celular</label>
            <input type="text" name="mobile_phone" class="form-control" value="<?php echo e($store->mobile_phone); ?>">
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" class="form-control" value="<?php echo e($store->slug); ?>">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-large btn-success">Atualizar loja</button>
        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/flavio/3437-6262/Projetos/laravel_ecommerce/resources/views/admin/stores/edit.blade.php ENDPATH**/ ?>