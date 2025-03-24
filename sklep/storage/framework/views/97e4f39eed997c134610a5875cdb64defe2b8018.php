

<?php $__env->startSection('content'); ?>
<div class="container mt-5 d-flex justify-content-center">
    <div class="card p-4 shadow-lg" style="width: 400px;">
        <h3 class="text-center">Rejestracja</h3>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('register')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label>Imię:</label>
                <input type="text" name="imie" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Nazwisko:</label>
                <input type="text" name="nazwisko" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Hasło:</label>
                <input type="password" name="haslo" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Potwierdź hasło:</label>
                <input type="password" name="haslo_confirmation" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success w-100">Zarejestruj się</button>
        </form>

        <div class="mt-3 text-center">
            <a href="<?php echo e(route('login')); ?>">Masz już konto? Zaloguj się</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sklep\resources\views/auth/register.blade.php ENDPATH**/ ?>