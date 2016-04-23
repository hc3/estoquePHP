<?php $__env->startSection('conteudo'); ?>

<div class="alert alert-success">
<strong>Sucesso!</strong> O Produto <?php echo e($nome); ?> foi adicionado com sucesso
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>