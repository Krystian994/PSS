<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Pasek nawigacyjny -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3 text-light" href="<?php echo e(url('/')); ?>">
                Glance
            </a>

            <div class="d-flex align-items-center">
                <?php if(auth()->guard()->check()): ?>
                    <?php if(Auth::user()->rola === 'admin'): ?>
                        <a href="<?php echo e(route('panelAdmin')); ?>" class="btn btn-warning me-3">Panel Admina</a>
                    <?php elseif(Auth::user()->rola === 'moderator'): ?>
                        <a href="<?php echo e(route('panelModerator')); ?>" class="btn btn-primary me-3">Panel Moderatora</a>
                    <?php endif; ?>

                    <!-- Przycisk Koszyk -->
                    <a href="<?php echo e(route('koszyk')); ?>" class="btn btn-success me-3">
                        Koszyk 🛒
                    </a>

                    <span class="text-light me-3">Witaj, <?php echo e(Auth::user()->imie); ?>!</span>
                    <a href="<?php echo e(url('/logout')); ?>" class="btn btn-outline-light">Wyloguj się</a>
                <?php else: ?>
                    <a href="<?php echo e(url('/logowanie')); ?>" class="btn btn-outline-primary me-2">Zaloguj się</a>
                    <a href="<?php echo e(url('/registerShow')); ?>" class="btn btn-outline-success">Zarejestruj się</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\sklep\resources\views/layouts/main.blade.php ENDPATH**/ ?>