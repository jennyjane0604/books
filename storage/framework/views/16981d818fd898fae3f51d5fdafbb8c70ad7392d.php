<?php $__env->startSection('content'); ?>
  <section class="row" style="margin:0;">
      <section class="col-md-2"></section>
      <section class="col-md-8">
    <form action="<?php echo e(url('/books/add')); ?>" method='post' class="form">
        <?php echo e(csrf_field()); ?>

        <section class="form-group">
            <label for="isbn" class="col-form-label" style="font-weight:bold;">ISBN</label>
        <span style="color:#f00;">

        <?php if($errors->has('isbn')): ?>
          <?php $__currentLoopData = $errors->get('isbn'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <?php echo e($message); ?>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        </span>
            <input type="text" name="isbn" id="isbn" class="form-control">
        </section>
        <section class="form-group">
            <label for="isbn" class="col-form-label" style="font-weight:bold;">Book Title</label>

            <span style="color:#f00;">

                <?php if($errors->has('booktitle')): ?>
                  <?php $__currentLoopData = $errors->get('booktitle'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <?php echo e($message); ?>

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </span>

            <input type="text" name="booktitle" id="booktitle" class="form-control">
        </section>
        <section class="form-group">
            <label for="isbn" class="col-form-label" style="font-weight:bold;">Book Author</label>

            <span style="color:#f00;">

                <?php if($errors->has('bookauthor')): ?>
                  <?php $__currentLoopData = $errors->get('bookauthor'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <?php echo e($message); ?>

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </span>

            <input type="text" name="bookauthor" id="bookauthor" class="form-control">
        </section>
        <section class="form-group" style="display:flex; justify-content: center">
            <button type="submit" class="btn btn-primary">Add</button>
            <button type="reset" class="btn btn-danger">Clear</button>
        </section>
    </form>
      </section>
      <section class="col-md-2"></section>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('books.bookmainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH I:\dev\laravel\myproject\resources\views/books/addbook.blade.php ENDPATH**/ ?>