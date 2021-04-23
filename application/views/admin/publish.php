<style>
        .box {
            background-color: none;
            width: auto;
            border: 1px solid lightgrey;
            padding: 10px;
            margin-bottom: 10px;
        }
        .dot_black {
            background-color: #000000;
            
            width: 100%;
        }
        .center{
            background-color: #828080;
            border-radius: 10px 10px 0 0;
            padding: 5px;
            color: white;
            text-align: center;
        }

        #addForm:hover{
            background: #75a4fa;
            border-color: #75a4fa
        }
</style>
<script src="<?= base_url('assets/admin/ckeditor/ckeditor.js') ?>"></script>
<h1><img src="<?= base_url('assets/img/admin/shop-cart-add-icon.png') ?>" class="header-img" style="margin-top:-3px;">Publish product</h1>
<hr>
<?php
$timeNow = time();
if (validation_errors()) {
    ?>
    <hr>
    <div class="alert alert-danger"><?= validation_errors() ?></div>
    <hr>
    <?php
}
if ($this->session->flashdata('result_publish')) {
    ?>
    <hr>
    <div class="alert alert-success"><?= $this->session->flashdata('result_publish') ?></div>
    <hr>
    <?php
}
?>
<form method="POST" action="" enctype="multipart/form-data">
    <div class="form-group"> 
        <label>Nama Sepatu</label>
        <input type="text" name="nama_sepatu" value="" class="form-control" required>
    </div>
    <div class="form-group for-shop">
        <label>Kategori</label>
        <select class="selectpicker form-control" name="kategori" required>
        <option disabled="disabled" selected="selected" value="00">-- PILIH KATEGORI --</option>
            <?php foreach ($kategori as $row) { ?>
                <option value="<?= $row->kode_kategori ?>"><?= ucfirst($row->nama_kategori) ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group for-shop">
        <label>Model</label>
        <select class="selectpicker form-control" name="model" required>
        <option disabled="disabled" selected="selected" value="00">-- PILIH MODEL --</option>
            <?php foreach ($model as $row) { ?>
                <option value="<?= $row->kode_model ?>"><?= $row->nama_model ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group for-shop">
        <label>Status Barang</label>
        <select class="selectpicker" name="status" required>
            <option value="1" <?= isset($_POST['in_slider']) && $_POST['in_slider'] == 1 ? 'selected' : '' ?>>Produk Baru</option>
            <option value="0" <?= isset($_POST['in_slider']) && $_POST['in_slider'] == 0 || !isset($_POST['in_slider']) ? 'selected' : '' ?>>Produk Lama</option>
        </select>
    </div>
    
    <div class="center"><h4>Unggah Gambar</h4></div>
    <div class="box" id="box">
        <div class="form form-horizontal">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="col-md-4 control-label">Tampak Kanan</label>
                    <div class="col-md-4">
                        <input type="file" name="tampak_kanan[]" id="tampak_kanan[]" class="form-control custom-file-input" onchange="preview()" required>
                        <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
                    </div>
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/img/admin/no-image.png') ?>" class="img-thumbnail img-preview" style="width: 100px; height:auto">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label class="col-md-4 control-label">Tampak Kiri</label>
                    <div class="col-md-4">
                        <input type="file" name="gambar" id="gambar1" class="form-control custom-file-input" onchange="preview()" required>
                        <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
                    </div>
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/img/admin/no-image.png') ?>" class="img-thumbnail img-preview" style="width: 100px; height:auto">
                    </div>
                </div>
                
                
                <div class="form-group col-md-6">
                    <label class="col-md-4 control-label">Tampak Depan</label>
                    <div class="col-md-4">
                        <input type="file" name="gambar" id="gambar1" class="form-control custom-file-input" onchange="preview()" required>
                        <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
                    </div>
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/img/admin/no-image.png') ?>" class="img-thumbnail img-preview" style="width: 100px; height:auto">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label class="col-md-4 control-label">Tampak Belakang</label>
                    <div class="col-md-4">
                        <input type="file" name="gambar" id="gambar1" class="form-control custom-file-input" onchange="preview()" required>
                        <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
                    </div>
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/img/admin/no-image.png') ?>" class="img-thumbnail img-preview" style="width: 100px; height:auto">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group for-shop">
            <label>Kategori Warna</label>
            <select class="selectpicker form-control" name="kategori_warna[]" required>
            <option disabled="disabled" selected="selected" value="00">-- PILIH WARNA --</option>
                <?php foreach ($kategori_warna as $row) { ?>
                    <option <?= isset($_POST['kategori_warna[]']) && $_POST['kategori_warna[]'] == $row ? 'selected=""' : '' ?> value="<?= $row->kode_warna ?>"><?= ucfirst($row->kategori) ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group for-shop"> 
            <label>Nama Warna</label>
            <input type="text" name="nama_warna[]" value="" class="form-control" required>
        </div>
    </div>
    <button type="button" style="margin-bottom: 10px" class="btn btn-success" id="addForm">Tambah gambar dengan warna lain</button>
    <button type="button" style="margin-bottom: 10px; display: none" class="btn btn-danger" id="resetForm">Reset</button>
    <div id="show-form">
    <!-- Form upload gambar dengan warna lain -->
    </div>
    <button type="submit" name="submit" class="btn btn-lg btn-default" style="margin-top: 10px">Publish</button>
    <?php if ($this->uri->segment(3) !== null) { ?>
        <a href="<?= base_url('admin/products') ?>" class="btn btn-lg btn-default">Cancel</a>
    <?php } ?>
</form>
        <?php
        $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
        ?>

<!-- Javascript Upload Images From Other Color -->
<script>

// var select = document.getElementById('kategori_warna');

// var options = <?php echo json_encode($age); ?>;
//     for(var i = 0; i < options.length; i++) {
//         var opt = options[i];
//         select.innerHTML += "<option value=\"" + opt + "\">" + opt + "</option>";
//     }

$(document).ready(function(){
  $("#addForm").click(function(){
      $('#resetForm').show();

    var x = '<div class="center"><h4>Unggah Gambar</h4></div>'+
            '<div class="box" id="box">'+
                '<div class="form form-horizontal">'+
                    '<div class="form-row">'+
                        '<div class="form-group col-md-6">'+
                            '<label class="col-md-4 control-label">Tampak Kanan</label>'+
                            '<div class="col-md-4">'+
                                '<input type="file" name="tampak_kanan[]" id="tampak_kanan[]" class="form-control custom-file-input" onchange="preview()" required>'+
                                '<small class="form-text text-danger"><?= form_error('gambar'); ?></small>'+
                            '</div>'+
                            '<div class="col-md-4">'+
                                '<img src="<?= base_url('assets/img/admin/no-image.png') ?>" class="img-thumbnail img-preview" style="width: 100px; height:auto">'+
                            '</div>'+
                        '</div>'+
                        '<div class="form-group col-md-6">'+
                            '<label class="col-md-4 control-label">Tampak Kiri</label>'+
                            '<div class="col-md-4">'+
                                '<input type="file" name="gambar" id="gambar1" class="form-control custom-file-input" onchange="preview()" required>'+
                                '<small class="form-text text-danger"><?= form_error('gambar'); ?></small>'+
                            '</div>'+
                            '<div class="col-md-4">'+
                                '<img src="<?= base_url('assets/img/admin/no-image.png') ?>" class="img-thumbnail img-preview" style="width: 100px; height:auto">'+
                            '</div>'+
                        '</div>'+
                        '<div class="form-group col-md-6">'+
                            '<label class="col-md-4 control-label">Tampak Depan</label>'+
                            '<div class="col-md-4">'+
                                '<input type="file" name="gambar" id="gambar1" class="form-control custom-file-input" onchange="preview()" required>'+
                                '<small class="form-text text-danger"><?= form_error('gambar'); ?></small>'+
                            '</div>'+
                            '<div class="col-md-4">'+
                                '<img src="<?= base_url('assets/img/admin/no-image.png') ?>" class="img-thumbnail img-preview" style="width: 100px; height:auto">'+
                            '</div>'+
                        '</div>'+
                        '<div class="form-group col-md-6">'+
                            '<label class="col-md-4 control-label">Tampak Belakang</label>'+
                            '<div class="col-md-4">'+
                                '<input type="file" name="gambar" id="gambar1" class="form-control custom-file-input" onchange="preview()" required>'+
                                '<small class="form-text text-danger"><?= form_error('gambar'); ?></small>'+
                            '</div>'+
                            '<div class="col-md-4">'+
                                '<img src="<?= base_url('assets/img/admin/no-image.png') ?>" class="img-thumbnail img-preview" style="width: 100px; height:auto">'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '<div class="form-group for-shop">'+
                    '<label>Kategori Warna</label>'+
                    '<select class="form-control" name="kategori_warna[]" required>'+
                        '<option disabled="disabled" selected="selected" value="00">-- PILIH WARNA --</option>'+
                        '<?php foreach ($kategori_warna as $row) { ?>'+
                            '<option <?= isset($_POST['kategori_warna[]']) && $_POST['kategori_warna[]'] == $row ? 'selected=""' : '' ?> value="<?= $row->kode_warna ?>"><?= ucfirst($row->kategori) ?></option>'+
                        '<?php } ?>'+
                    '</select>'+
                '</div>'+
                '<div class="form-group for-shop">'+
                    '<label>Nama Warna</label>'+
                    '<input type="text" name="nama_warna[]" value="" class="form-control" required>'+
                '</div>'+
            '</div>';

    $("#show-form").append(x);
  });

  $("#resetForm").click(function(){
		$("#show-form").html(""); // Kita kosongkan isi dari div insert-form
        document.getElementById("resetForm").style.display = "none";
    });
});

</script>
<!-- End Javascript Upload Images From Other Color -->