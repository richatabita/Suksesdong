<?php $__env->startSection('content'); ?>



  <form action="<?php echo e(url('page/store')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <div class="row">
          <div class="input-field col s12">
            <input type="text" class="validate" name="title">
            <label for="title">Title</label>
          </div>
    </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="description"></textarea>
          <label for="textarea1">Description</label>
        </div>
      </div>
      <button type="submit" class="btn btn-flat pink accent-3 waves-effect waves-light white-text right">Add<i class="material-icons right">send</i></button>
  </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>