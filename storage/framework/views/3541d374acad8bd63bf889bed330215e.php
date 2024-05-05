
<?php $__env->startSection('content'); ?>
<h2 style="margin-left: 10px;" class="fw-bold"><?php echo e($pageTitle); ?></h2>

<!-- <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Akmal Dwi Utomo</h5>
                    <p class="card-text">1204210054</p>
                    <p class="card-text">Surabaya, Indonesia</p>
                    <p class="card-text">Surabaya, Indonesia</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div> -->
<div class="container ">
    <div class="row ">
        <div class="col ">
            <div class="card roundeed-lg " style="color :white; background-color: #37517e">
                <div class="card-body d-flex justify-content-center align-items-center">
                    <div class="text-center">
                        <h4>
                        PROFILE
                        </h4>
                        <hr>
                        <img src="<?php echo e(Vite::asset('resources/images/profile.png')); ?>" alt="" style="width: 250px;">
                    </div>

                </div>
                <div class="text-center">
                    <h3>Febryan Dava Putra Atallah</h3>
                </div>
                <div class="container mt-2">
                    <div class="row">
                        <div class="col">
                            <div class="rounded text-center  bg-primary text-white" style="margin-left: 3rem;">Free Fire</div>
                        </div>
                        <div class="col">
                            <div class="rounded  text-center  bg-primary text-white" style="margin-right: 3rem;">Mobile Legends</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="rounded mt-2  text-center  bg-primary text-white" style="margin-right: 8rem; margin-left: 8rem;">PUBG Mobile</div>
                    </div>

                </div>
                <div class="container mt-3 text-center">
                    <a style="text-decoration:none; color:white;" >Free Fire</a>
                    <div class="progress mx-5 ">
                        <div class="progress-bar " role="progressbar" style="width: 85%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="container mt-3 text-center">
                    <a style="text-decoration:none; color:white;" >Mobile Legends</a>
                    <div class="progress mx-5 ">
                        <div class="progress-bar " role="progressbar" style="width: 95%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="container mt-3 mb-4 text-center">
                    <a style="text-decoration:none; color:white;" >PUBG Mobile</a>
                    <div class="progress mx-5 ">
                        <div class="progress-bar " role="progressbar" style="width: 75%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card " style="color :white; background-color: #37517e">
                <div class="card-body ">
                    <div>
                        <h3>
                            BIO
                        </h3>
                    </div>
                    <div>
                    <p>Halo! Saya Atallah dengan NIM 1204220087, seorang pemain game ngetroll yang berfokus pada permainan mobile. Saya telah mengabdikan waktu dan energi saya untuk menjadi ahli dalam tiga game populer: Free Fire, PUBG Mobile, dan Mobile Legends.</p>
                        </>
                    </div>
                </div>
            </div>
            <div class="card mt-4" style="color :white; background-color: #37517e">
                <div class="card-body ">
                    <div>
                        <h3>
                            HOBI
                        </h3>
                    </div>
                    <div>
                        1.Mancing <br>
                        2.Montage <br>
                        3.Recal Recal <br>
                        4.Kemenangan
                    </div>
                </div>
            </div>
            <div class="card  mt-4" style="color :white; background-color: #37517e">
                <div class="card-body ">
                    <div>
                        <h3>
                            Fav Hero
                        </h3>
                    </div>
                    <div>
                    1.ular <br>
                        2.cacing <br>
                        3.naga <br>
                        4.neymar bogor
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card " style="color :white; background-color: #37517e">
                <div class="card-body text-center ">
                <h3>
                        Fav Gradient
                        </h3>

                </div>
                <div class="container text-center">
                    <img src="<?php echo e(Vite::asset('resources/images/atas.png')); ?>" alt="" style="width: 350px;">
                    <img class="mt-3" src="<?php echo e(Vite::asset('resources/images/tengah.png')); ?>" alt="" style="width: 340px; height:100px;">
                    <img  class="mt-3 mb-3" src="<?php echo e(Vite::asset('resources/images/bawah.png')); ?>" alt="" style="width: 330px; height:264px;">
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\utspf\resources\views/home.blade.php ENDPATH**/ ?>