<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <h2><?php echo e($pageTitle); ?></h2>

        <div class="card">
            <div class="card-header">
                <a href="<?php echo e(route('barang.create')); ?>" class="btn btn-primary btn-sm"><i class="bi bi-plus-circle"></i>
                    Tambah</a>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Harga Barang</th>
                                <th>Deskripsi Barang</th>
                                <th>Satuan Barang</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($no++); ?></td>
                                    <td><?php echo e($barang->kode_barang); ?></td>
                                    <td><?php echo e($barang->nama_barang); ?></td>
                                    <td><?php echo e($barang->harga_barang); ?></td>
                                    <td><?php echo e($barang->deskripsi_barang); ?></td>
                                    <td><?php echo e($barang->satuan->nama_satuan); ?></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="<?php echo e(route('barang.show', ['barang' => $barang->id])); ?>"
                                                class="btn btn-outline-dark btn-sm me-2"><i
                                                    class="bi-person-lines-fill"></i></a>
                                            <a href="<?php echo e(route('barang.edit', ['barang' => $barang->id])); ?>"
                                                class="btn btn-outline-dark btn-sm me-2"><i
                                                    class="bi-pencil-square"></i></a>

                                            <div>
                                                <form action="<?php echo e(route('barang.destroy', ['barang' => $barang->id])); ?>"
                                                    method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('delete'); ?>
                                                    <button type="submit" class="btn btn-outline-dark btn-sm me-2"
                                                        onclick="return confirm('Apakah anda yakin mengahpus data ini?')"><i
                                                            class="bi-trash"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </blockquote>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UTS_PF\resources\views/barang/index.blade.php ENDPATH**/ ?>