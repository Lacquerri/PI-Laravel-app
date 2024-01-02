<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Studenci</title>
    </head>
    <body>
    <h1>Edytuj dane studenta</h1>
    <form method="post" action="<?php echo e(route('student.dbupdate',['student' => $student])); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
        <div>
            <label> Imie </label>
            <input type="text" name="Imie" value="<?php echo e($student->Imie); ?>" />
        </div>
        <div>
            <label> Nazwisko </label>
            <input type="text" name="Nazwisko" value="<?php echo e($student->Nazwisko); ?>" />
        </div>
        <div>
            <label> Ocena </label>
            <input type="name" name="Ocena" value="<?php echo e($student->Ocena); ?>" />
        </div>
        <div>
        <input type="submit" value="Zapisz" />
        </div>
    </form>
    <a href="<?php echo e(route('student.read')); ?>">Powrót</a>
    </body>
</html>
<?php /**PATH C:\Users\i9\Desktop\PI-Laravel-app\laravel_pi\resources\views/update.blade.php ENDPATH**/ ?>