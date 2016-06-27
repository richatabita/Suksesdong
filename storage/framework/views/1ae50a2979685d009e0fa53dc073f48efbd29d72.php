<?php $__env->startSection('content'); ?>



<div class="section">
  <form action="<?php echo e(url('/page/update', $editpage->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <div class="row">
          <div class="input-field col s12">
            <input type="text" class="validate" name="title" value="<?php echo e($editpage->title); ?>">
            <label for="title">Title</label>
          </div>
    </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="description"><?php echo e($editpage->description); ?></textarea>
          <label for="textarea1">Isi</label>
        </div>
      </div>

       

      <button type="submit" class="btn btn-flat pink accent-3 waves-effect waves-light white-text right">Submit <i class="material-icons right">send</i></button>
  </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>