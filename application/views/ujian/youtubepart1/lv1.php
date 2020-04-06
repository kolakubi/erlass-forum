<div class="container" style="padding: 60px 5px">

    <div class="well text-center">
    
        <h1>Test Untuk Membuka Pelatihan <br>Video Mengajar Youtube Part 1</h1>
        
        <div class="card">
            <div class="card-header">
                <p>Syarat dan ketentuan</p>
            </div>
            <div class="card-body">
                <p>Pada pelatihan ini anda diwajibkan memiliki akun youtube, karena selanjutnya anda akan mengupload video melalui youtube</p>
                <p>Jika anda belum memiliki akun Youtube, silakan klik link berikut <a href="#">Cara Membuat Akun Youtube</a></p>
            </div>
        </div>
        <br>
        <h3>Materi Test</h3>
        <p>Buatlah 1 video youtube dengan memperkenalkan diri anda</p>
        <p>lalu masukkan link video ke kolom di bawah</p>
    </div>

    <?php echo form_open('posting/simpanpost') ?>

        <!-- judul -->
        <div class="pesan-error-form user">
            <span><?php echo form_error('Judul') ?></span>
        </div>

        <div class="form-group">
            link Video
            <input type="text" class="form-control" rows="3" name="judul">
        </div>

        <!-- isi post -->
        <div class="pesan-error-form user">
            <span><?php echo form_error('isipost') ?></span>
        </div>

        <div class="form-group">
            isi post
            <textarea class="form-control" rows="3" name="isipost" id="isipost"></textarea>
        </div>

        <!-- button -->
        <button type="submit" class="btn btn-primary">Submit</button>
        <a type="submit" class="btn btn-danger" href="<?php base_url() ?>forum">Batal</a>

    <?php echo form_close() ?>

</div> <!-- end of container -->