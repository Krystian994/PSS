

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2 class="text-center">Panel Administratora</h2>

    <h4 class="mt-4">Lista użytkowników:</h4>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <table class="table table-bordered mt-3">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Email</th>
                <th>Rola</th>
                <th>Data rejestracji</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user->id); ?></td>
                    <td><?php echo e($user->imie); ?></td>
                    <td><?php echo e($user->nazwisko); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td>
                        <form action="<?php echo e(route('zmienRole', $user->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PATCH'); ?>
                            <select name="rola" class="form-select" onchange="this.form.submit()">
                                <option value="uzytkownik" <?php echo e($user->rola == 'uzytkownik' ? 'selected' : ''); ?>>Użytkownik</option>
                                <option value="moderator" <?php echo e($user->rola == 'moderator' ? 'selected' : ''); ?>>Moderator</option>
                                <option value="admin" <?php echo e($user->rola == 'admin' ? 'selected' : ''); ?>>Admin</option>
                            </select>
                        </form>
                    </td>
                    <td><?php echo e($user->data_rejestracji); ?></td>
                    <td>
                        <?php if(auth()->user()->id !== $user->id): ?> 
                            <form action="<?php echo e(route('usunUzytkownika', $user->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Czy na pewno chcesz usunąć tego użytkownika?')">
                                    Usuń
                                </button>
                            </form>
                        <?php else: ?>
                            <span class="text-muted">Nie możesz usunąć siebie</span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sklep\resources\views/admin/panel.blade.php ENDPATH**/ ?>