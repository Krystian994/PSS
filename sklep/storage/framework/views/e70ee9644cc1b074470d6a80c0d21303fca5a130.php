

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2 class="text-center">Panel Moderatora</h2>

    <h4>Dodaj nowy produkt:</h4>
    <form action="<?php echo e(route('dodajProdukt')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label>Nazwa:</label>
            <input type="text" name="nazwa" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kategoria:</label>
            <select name="kategoria" class="form-control">
                <option value="ubrania">Ubrania</option>
                <option value="buty">Buty</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Typ:</label>
            <input type="text" name="typ" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Rozmiar:</label>
            <input type="text" name="rozmiar" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kolor:</label>
            <input type="text" name="kolor" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Cena:</label>
            <input type="number" step="0.01" name="cena" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Opis:</label>
            <textarea name="opis" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Ilość:</label>
            <input type="number" name="ilosc" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Dodaj produkt</button>
    </form>

    <h4 class="mt-4">Lista produktów:</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Nazwa</th>
                <th>Kategoria</th>
                <th>Typ</th>
                <th>Cena</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $produkty; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produkt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($produkt->nazwa); ?></td>
                    <td><?php echo e(ucfirst($produkt->kategoria)); ?></td>
                    <td><?php echo e($produkt->typ); ?></td>
                    <td><?php echo e($produkt->cena); ?> zł</td>
                    <td>
                        <form action="<?php echo e(route('usunProdukt', $produkt->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Usuń</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sklep\resources\views/moderator/panel.blade.php ENDPATH**/ ?>