<section class="row" style="margin: 0; height: 85vh;">
    <section class="col-sm-1"></section>
    <section class="col-sm-10">
        <table class="table" id="messagestable">
            <thead>
                <tr class="table-head">
                    <th>Book No.</th>
                    <th>Book Title</th>
                    <th>Book Author</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $allBooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($book->isbn); ?></td>
                    <td><?php echo e($book->bookTitle); ?></td>
                    <td><?php echo e($book->bookAuthor); ?></td>
                <td style="width:9em;"><a href="<?php echo e(url('/books/edit/'.encrypt($book->isbn))); ?>"><img src="<?php echo e(asset('icons/icons8-edit-file-80.png')); ?>" title="Edit" alt="Edit" style="height:30%; width:30%;"></a></td>
                    <td style="width:9m;"><a href=""><img src="<?php echo e(asset('icons/icons8-delete-file-80.png')); ?>" title="Delete" alt="Delete" style="height:30%; width:30%;"></a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </section>
    <section class="col-sm-1"></section>
</section>
<section class="row" style="margin:0;">
    <section class="col-sm-12" style="display:flex; justify-content:center;">
        <?php echo e($allBooks->links()); ?>

    </section>
</section>

<?php /**PATH I:\dev\laravel\myproject\resources\views/books/booksBrowser.blade.php ENDPATH**/ ?>