<section class="row" style="margin: 0; height: 85vh;">
    <section class="col-sm-1"></section>
    <section class="col-sm-10">
        <table class="table" id="messagestable">
            <thead>
                <tr class="table-head">
                    <th>Message No.</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Guest Name</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $allMessages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($message->id); ?></td>
                    <td><?php echo e(date('M d, Y',strtotime($message->date_received))); ?></td>
                    <td><?php echo e(date('h:i:sa',strtotime($message->date_received))); ?></td>
                    <td><?php echo e($message->guestname); ?></td>
                    <td><?php echo e($message->message); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </section>
    <section class="col-sm-1"></section>
</section>
<section class="row" style="margin:0;">
    <section class="col-sm-12" >
        <?php echo e($allMessages->links()); ?>

    </section>
</section>

<?php /**PATH I:\dev\laravel\myproject\resources\views/message/messageBrowser.blade.php ENDPATH**/ ?>