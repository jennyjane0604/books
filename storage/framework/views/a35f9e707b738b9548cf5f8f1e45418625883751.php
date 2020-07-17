<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo e(url('/testmatch')); ?>" method="POST">
         <?php echo e(csrf_field()); ?>

         <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php /**PATH I:\dev\laravel\myproject\resources\views/sample1.blade.php ENDPATH**/ ?>