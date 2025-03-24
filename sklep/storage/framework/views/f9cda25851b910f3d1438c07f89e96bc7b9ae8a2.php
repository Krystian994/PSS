

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2 class="text-center">Lista produktów</h2>

    <!-- Formularz wyszukiwania -->
    <form action="<?php echo e(route('listaProduktow')); ?>" method="GET" class="mb-4 d-flex justify-content-center">
        <input type="text" name="search" class="form-control w-50" placeholder="Szukaj produktu..." value="<?php echo e(request('search')); ?>">
        <button type="submit" class="btn btn-primary ms-2">Szukaj</button>
    </form>

    <div class="d-flex justify-content-center mb-4">
        <a href="<?php echo e(route('listaProduktow')); ?>" class="btn btn-dark mx-2">Wszystkie produkty</a>
        <a href="<?php echo e(route('listaProduktow', ['kategoria' => 'ubrania'])); ?>" class="btn btn-primary mx-2">Ubrania</a>
        <a href="<?php echo e(route('listaProduktow', ['kategoria' => 'buty'])); ?>" class="btn btn-success mx-2">Buty</a>
    </div>
    <div class="row">
        <?php $__empty_1 = true; $__currentLoopData = $produkty; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produkt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($produkt->nazwa); ?></h5>
                        <p class="card-text"><strong>Kategoria:</strong> <?php echo e(ucfirst($produkt->kategoria)); ?></p>
                        <p class="card-text"><strong>Typ:</strong> <?php echo e($produkt->typ); ?></p>
                        <p class="card-text"><strong>Rozmiar:</strong> <?php echo e($produkt->rozmiar); ?></p>
                        <p class="card-text"><strong>Kolor:</strong> <?php echo e($produkt->kolor); ?></p>
                        <p class="card-text"><strong>Cena:</strong> <?php echo e(number_format($produkt->cena, 2)); ?> zł</p>
                        <p class="card-text"><strong>Opis:</strong> <?php echo e($produkt->opis); ?></p>
                        <p class="card-text"><strong>Ilość:</strong> <?php echo e($produkt->ilosc); ?></p>

                        <form action="<?php echo e(route('koszyk.dodaj', $produkt->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-warning w-100 mt-2">Dodaj do koszyka</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p class="text-center mt-4">Nie znaleziono produktów.</p>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sklep\resources\views/produkty/lista.blade.php ENDPATH**/ ?>