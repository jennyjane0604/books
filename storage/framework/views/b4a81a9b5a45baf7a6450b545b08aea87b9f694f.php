<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title_text'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            height: 100vh;
            width: 100%;
        }

        nav {
            padding-left: 2rem;


        }

        nav td {
            text-align: center;
            width: 200px;
        }

        nav td a {
            display: inline-block;
            width: 200px;
        }

        nav td:hover {
            background-color: #636b6f;
        }

        nav td:hover a {
            color: #fff;
            text-decoration: none;
        }

        .pagination {
            justify-content: center;

        }

        table#messagestable tr.table-head {
            background-color: #1b1e21;
            color: #fff;
        }

        table#messagestable tr:not(.table-head):hover {
            background-color: #00f;
            color: #fff;
        }

    </style>
</head>
<body>
    <section>
        <nav>
            <table>
               <tr>
                  <td>
                     <a href="<?php echo e(url('/')); ?>">Home</a>
                  </td>
                  <td>
                     <a href="<?php echo e(url('/create')); ?>">Add</a>
                  </td>
                  <td>
                    <a href="<?php echo e(url('/edit')); ?>">Update</a>
                 </td>
                 <td>
                    <a href="<?php echo e(url('/list')); ?>">List</a>
                 </td>
                 <td>
                    <a href="<?php echo e(url('/destroy')); ?>">Delete</a>
                 </td>
               </tr>
            </table>
        </nav>
        <section>
            <?php echo $__env->yieldContent('pageContent'); ?>
        </section>
    </section>
</body>
</html>
<?php /**PATH I:\dev\laravel\myproject\resources\views/message/messageLayout.blade.php ENDPATH**/ ?>