
<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Member</h1>
    </div>


    <div class="col-md-6 offset-md-3">
        
        <?php echo form_open('admin/simpaneditmember') ?>

            <!-- member id -->
            <div class="form-group row">
                <label for="memberid" class="col-sm-3 col-form-label">Member Id</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="memberid" id="memberid" value="<?php echo $member['id_member'] ?>" readonly>
                </div>
                <div class="pesan-error-form user">
                    <span><?php echo form_error('memberid') ?></span>
                </div>
            </div>

            <!-- Nama -->
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $member['nama'] ?>">
                </div>
                <div class="pesan-error-form user">
                    <span><?php echo form_error('nama') ?></span>
                </div>
            </div>

            <!-- No Induk -->
            <div class="form-group row">
                <label for="noinduk" class="col-sm-3 col-form-label">No Induk</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nomorinduk" id="nomorinduk" value="<?php echo $member['no_induk'] ?>">
                </div>
                <div class="pesan-error-form user">
                    <span><?php echo form_error('nomorinduk') ?></span>
                </div>
            </div>

            <!-- Alamat -->
            <div class="form-group row">
                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-9">
                    <textarea type="text" rows=6 class="form-control" name="alamat" id="alamat"><?php echo $member['alamat'] ?></textarea>
                </div>
                <div class="pesan-error-form user">
                    <span><?php echo form_error('alamat') ?></span>
                </div>
            </div>


            <!-- Sekolah -->
            <div class="form-group row">
                <label for="sekolah" class="col-sm-3 col-form-label">Sekolah</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="sekolah" id="sekolah" value="<?php echo $member['sekolah'] ?>">
                </div>
                <div class="pesan-error-form user">
                    <span><?php echo form_error('sekolah') ?></span>
                </div>
            </div>

            <!-- hp -->
            <div class="form-group row">
                <label for="hp" class="col-sm-3 col-form-label">hp</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="hp" id="hp" value="<?php echo $member['hp'] ?>">
                </div>
                <div class="pesan-error-form user">
                    <span><?php echo form_error('hp') ?></span>
                </div>
            </div>

            <!-- email -->
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">email</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" id="email" value="<?php echo $member['email'] ?>">
                </div>
                <div class="pesan-error-form user">
                    <span><?php echo form_error('email') ?></span>
                </div>
            </div>

            <!-- submit -->
            <button type="submit" class="btn btn-primary">Simpan</button>

            <!-- cancel -->
            <a href="<?php echo base_url() ?>admin/member" class="btn btn-danger">Batal</a>

        <?php echo form_close() ?>

    </div> <!-- col-md-6 -->


</div> <!-- end container-fluid -->