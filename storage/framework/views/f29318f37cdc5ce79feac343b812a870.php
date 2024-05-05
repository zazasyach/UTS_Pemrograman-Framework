<nav class="navbar navbar-expand-md navbar-dark   mb-5" style="background-color: #37517e" >
    <div class="container">
        <a class="navbar-brand fw-bold fs-5" href="<?php echo e(route('welcome')); ?>">TOKO ENTE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link fs-5" aria-current="page" href="<?php echo e(route('home')); ?>">Home</a>
                <a class="nav-link fs-5 " href="<?php echo e(route('barang.index')); ?>">Barang</a>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\UTS_PF\resources\views/layout/nav.blade.php ENDPATH**/ ?>