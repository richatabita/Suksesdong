<?php $__env->startSection('content'); ?>



<div class="section">
	
	<div class="row">
		<div class="col s12">
			<h5><?php echo e($tampilkan->judul); ?></h5>

            <div class="divider"></div>
            <p><?php echo $tampilkan->isi; ?></p>
                
		</div>
	</div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>