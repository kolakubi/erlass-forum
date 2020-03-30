<div class="container" style="padding-bottom: 60px">

    <div class="well text-center">
    
        <h1>Test Membuka Penulis Pemula LV 2</h1>
        <h3>Syarat dan Ketentuan</h3>
        <ul>
            - Tulisan harus asli karya sendiri<br>
            - tidak boleh mengandung unsur sara dan pornografi<br>
            - harus mengikuti tema yang ada<br>
            - tidak boleh mengandung unsur adu domba<br>
            - ...<br>
        </ul>
        <br>
        <h3>Tema</h3>
        <p>Utarkan pendapat anda tentang Virus Corona</p>
    </div>

    <?php echo form_open('posting/simpanpost') ?>

        <!-- judul -->
        <div class="pesan-error-form user">
            <span><?php echo form_error('Judul') ?></span>
        </div>

        <div class="form-group">
            Judul
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