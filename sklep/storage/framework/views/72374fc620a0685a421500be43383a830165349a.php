

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2 class="text-center">Twój Koszyk</h2>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php if($koszyk->isEmpty()): ?>
        <p class="text-center mt-4">Twój koszyk jest pusty.</p>
    <?php else: ?>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Produkt</th>
                    <th>Cena</th>
                    <th>Ilość</th>
                    <th>Łączna Cena</th>
                    <th>Akcje</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $koszyk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->produkt->nazwa); ?></td>
                        <td><?php echo e(number_format($item->produkt->cena, 2)); ?> zł</td>
                        <td><?php echo e($item->ilosc); ?></td>
                        <td><?php echo e(number_format($item->produkt->cena * $item->ilosc, 2)); ?> zł</td>
                        <td>
                            <form action="<?php echo e(route('koszyk.usun', $item->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Usuń</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <form action="<?php echo e(route('koszyk.zamow')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-success">Złóż zamówienie</button>
        </form>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sklep\resources\views/koszyk/index.blade.php ENDPATH**/ ?>