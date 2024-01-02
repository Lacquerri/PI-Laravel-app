<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Studenci</title>
    </head>
    <body>
    <h1>Studenci</h1>
    <table border = "1">
    <tr>
    <th>ID</th>
    <th>Imie</th>
    <th>Nazwisko</th>
    <th>Ocena</th>
    <th>Edytuj</th>
    <th>Usuń</th>
    </tr>
    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($student->id); ?></td>
        <td><?php echo e($student->Imie); ?></td>
        <td><?php echo e($student->Nazwisko); ?></td>
        <td><?php echo e($student->Ocena); ?></td>
        <td><a href="<?php echo e(route('student.update',['student' => $student])); ?>">Edytuj</a></td>
        <td><form method="post" action="<?php echo e(route('student.delete',['student' => $student])); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <input type="submit" value="Usuń" />
        </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    </table>
    </body>
</html>
<?php /**PATH C:\Users\i9\Desktop\PI-Laravel-app\laravel_pi\resources\views/student.blade.php ENDPATH**/ ?>