<div class="container" style="padding: 60px 5px">

    <div class="well text-center">
    
        <h1>Pelatihan <?php echo $kategori['namakategori'] ?></h1>
        <h3>Syarat dan Ketentuan</h3>
        <ul>
            - Tulisan harus asli karya sendiri<br>
            - tidak boleh mengandung unsur sara dan pornografi<br>
            - harus mengikuti tema yang ada<br>
            - tidak boleh mengandung unsur adu domba<br>
            - ...<br>
        </ul>
        <br>

        <div class="card card-body bg-light mb-4">
            <h3>Tema</h3>
            <p>Budaya dan Masyarakat Bineka Tunggal Ika</p>
        </div>
        
    </div>

    <?php echo form_open('posting/simpanpost') ?>

        <!-- judul -->
        <div class="pesan-error-form user">
            <span><?php echo form_error('Judul') ?></span>
        </div>

        <div class="form-group">
            <strong>Judul</strong>
            <input type="text" class="form-control" rows="3" name="judul">
        </div>

        <!-- Konten -->
        <div class="pesan-error-form user">
            <span><?php echo form_error('isipost') ?></span>
        </div>

        <div class="form-group">
            <strong>Konten</strong>
            <textarea class="form-control" rows="3" name="isipost" id="isipost"></textarea>
        </div>

        <!-- button -->
        <button type="submit" class="btn btn-primary">Submit</button>
        <a type="submit" class="btn btn-danger" href="<?php base_url() ?>forum">Batal</a>

    <?php echo form_close() ?>

</div> <!-- end of container -->