<?= $this->extend('template-frontend') ?>

<?= $this->section('content') ?>

<div class="col-sm-8">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" height="420px" src="https://png.pngtree.com/png-vector/20230301/ourmid/pngtree-ppdb-logo-design-vector-png-image_6619653.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" height="420px" src="https://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" height="420px" src="https://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-custom-icon" aria-hidden="true">
                <i class="fas fa-chevron-left"></i>
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-custom-icon" aria-hidden="true">
                <i class="fas fa-chevron-right"></i>
            </span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="col-sm-4">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h5 class="card-title m-0">Estimasi Pendaftaran</h5>
        </div>
        <div class="card-body">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-graduation-cap"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Pendaftar</span>
                        <span class="info-box-number">1353</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-12 col-sm-12 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="fa fa-male"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Laki-Laki</span>
                        <span class="info-box-number">762</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-12 col-sm-12 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="fa fa-female"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Perempuan</span>
                        <span class="info-box-number">591</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-md-12 col-sm-12 col-12">
                <a href="<?= base_url('ppdb/pendaftaran') ?>" class="btn btn-info btn-flat btn-block"><i class="fas fa-file-alt"></i> Mendaftar</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>