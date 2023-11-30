<?= $this->extend('template-frontend') ?>
<?= $this->section('content') ?>

<div class="col-sm-4">
  <img class="img-fluid pad" style="width:100%; height:auto;" src="data:image/png;base64,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" alt="">
</div>

<div class="col-sm-8">
  <?php echo form_open() ?>
  <div class="card card-primary card-outline">
    <div class="card-header">
      <h5 class="card-title m-0">Pendaftaran</h5>
    </div>
    <div class="card-body">
      <div class="row">

        <div class="col-sm-12">
          <div class="form-group">
            <label>NISN</label>
            <input name="nisn" class="form-control" placeholder="NISN">
          </div>
        </div>

        <div class="col-sm-6">
          <div class="form-group">
            <label>Nama Lengkap</label>
            <input name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
          </div>
        </div>

        <div class="col-sm-6">
          <div class="form-group">
            <label>Nama Panggilan</label>
            <input name="nama_panggilan" class="form-control" placeholder="Nama Panggilan">
          </div>
        </div>

        <div class="col-sm-12">
          <div class="form-group">
            <label>Tempat Lahir</label>
            <input name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-group">
            <label>Tanggal</label>
            <select name="tanggal" class="form-control">
              <option value="">-- Tanggal --</option>
              <?php
              for ($i = 1; $i <= 31; $i++) { ?>
                <option value="<?= $i ?>"><?= $i ?></option>
              <?php } ?>
            </select>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-group">
            <label>Bulan</label>
            <select name="bulan" class="form-control">
              <option value="">-- Bulan --</option>
              <?php
              for ($i = 1; $i <= 12; $i++) { ?>
                <option value="<?= $i ?>"><?= $i ?></option>
              <?php } ?>
            </select>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-group">
            <label>Tahun</label>
            <select name="tahun" class="form-control">
              <option value="">-- Tahun --</option>
              <?php $now = date('Y');
              for ($i = 1990; $i <= $now; $i++) { ?>
                <option value="<?= $i ?>"><?= $i ?></option>
              <?php } ?>
            </select>
          </div>
        </div>

        <div class="col-md-12 col-sm-12 col-12">
          <button type="submit" class="btn btn-info btn-flat btn-block"><i class="fas fa-save"></i> Daftar</a>
        </div>
      </div>
    </div>
  </div>

  <?php echo form_close() ?>
</div>


<?= $this->endSection() ?>