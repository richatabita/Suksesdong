<?php $__env->startSection('content'); ?>



<div class="section">
	<?php foreach($datas as $data): ?>

	<div class="row">
		<div class="col s12">
			<h1><?php echo e($data->title); ?></1>

     <!--        <div class="divider"></div> -->
            <h4><?php echo e($data->description); ?></h4>
                
            <a href="<?php echo e(url('/page/edit', $data->id)); ?>" class=""> <i class="material-icons right">mode_edit</i></a>
            <a href="<?php echo e(url('/page/delete', $data->id)); ?>" onclick="return confirm('are you sure to delete this?')" class=""> <i class="material-icons right">delete</i></a>
		</div>
	</div>
	<?php endforeach; ?>


</div>

<?php echo e($datas->render()); ?>


<div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
    <a href="<?php echo e(url('/page/add')); ?>" class="btn-floating btn-large red">
      <i class="large material-icons">add</i>
    </a>
 </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>