<style>
        .box {
            background-color: none;
            width: auto;
            border: 1px solid lightgrey;
            padding: 10px;
        }
</style>
<script src="<?= base_url('assets/admin/ckeditor/ckeditor.js') ?>"></script>
<h1><img src="<?= base_url('assets/img/admin/shop-cart-add-icon.png') ?>" class="header-img" style="margin-top:-3px;"> Publish product</h1>
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
        <input type="text" name="title[]" value="" class="form-control">
    </div>
    <div class="form-group for-shop">
        <label>Kategori</label>
        <select class="selectpicker form-control show-tick show-menu-arrow" name="shop_categorie">
            <?php foreach ($shop_categories as $key_cat => $shop_categorie) { ?>
                <option <?= isset($_POST['shop_categorie']) && $_POST['shop_categorie'] == $key_cat ? 'selected=""' : '' ?> value="<?= $key_cat ?>">
                    <?php
                    foreach ($shop_categorie['info'] as $nameAbbr) {
                        if ($nameAbbr['abbr'] == $this->config->item('language_abbr')) {
                            echo $nameAbbr['name'];
                        }
                    }
                    ?>
                </option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group for-shop">
        <label>Model</label>
        <select class="selectpicker form-control show-tick show-menu-arrow" name="shop_categorie">
            <?php foreach ($shop_categories as $key_cat => $shop_categorie) { ?>
                <option <?= isset($_POST['shop_categorie']) && $_POST['shop_categorie'] == $key_cat ? 'selected=""' : '' ?> value="<?= $key_cat ?>">
                    <?php
                    foreach ($shop_categorie['info'] as $nameAbbr) {
                        if ($nameAbbr['abbr'] == $this->config->item('language_abbr')) {
                            echo $nameAbbr['name'];
                        }
                    }
                    ?>
                </option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group for-shop">
        <label>Status Barang</label>
        <select class="selectpicker" name="in_slider">
            <option value="1" <?= isset($_POST['in_slider']) && $_POST['in_slider'] == 1 ? 'selected' : '' ?>>Produk Baru</option>
            <option value="0" <?= isset($_POST['in_slider']) && $_POST['in_slider'] == 0 || !isset($_POST['in_slider']) ? 'selected' : '' ?>>Produk Lama</option>
        </select>
    </div>
    <!-- <div class="form-group for-shop">
        <label>Price</label>
        <input type="text" name="price[]" placeholder="without currency at the end" value="" class="form-control">
    </div>
    <div class="form-group for-shop">
        <label>Old Price</label>
        <input type="text" name="old_price[]" placeholder="without currency at the end" value="" class="form-control">
    </div> -->
    <div class="box">
        <label>Unggah Gambar</label>
        <div class="form-group for-shop">
            <label>Kategori Warna</label>
            <select class="selectpicker form-control show-tick show-menu-arrow" name="shop_categorie">
                <?php foreach ($shop_categories as $key_cat => $shop_categorie) { ?>
                    <option <?= isset($_POST['shop_categorie']) && $_POST['shop_categorie'] == $key_cat ? 'selected=""' : '' ?> value="<?= $key_cat ?>">
                        <?php
                        foreach ($shop_categorie['info'] as $nameAbbr) {
                            if ($nameAbbr['abbr'] == $this->config->item('language_abbr')) {
                                echo $nameAbbr['name'];
                            }
                        }
                        ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group"> 
            <label>Nama Warna</label>
            <input type="text" name="title[]" value="" class="form-control">
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="file" name="gambar" id="gambar1" class="form-control custom-file-input" onchange="preview()">
                <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
            </div>
            <div class="col-md-2">
                <img src="<?= base_url('assets/img/admin/no-image.png') ?>" class="img-thumbnail img-preview" style="width: 300px; height:auto">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="file" name="gambar" id="gambar1" class="form-control custom-file-input" onchange="preview()">
                <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
            </div>
            <div class="col-md-2">
                <img src="<?= base_url('assets/img/admin/no-image.png') ?>" class="img-thumbnail img-preview" style="width: 300px; height:auto">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="file" name="gambar" id="gambar1" class="form-control custom-file-input" onchange="preview()">
                <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
            </div>
            <div class="col-md-2">
                <img src="<?= base_url('assets/img/admin/no-image.png') ?>" class="img-thumbnail img-preview" style="width: 300px; height:auto">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="file" name="gambar" id="gambar1" class="form-control custom-file-input" onchange="preview()">
                <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
            </div>
            <div class="col-md-2">
                <img src="<?= base_url('assets/img/admin/no-image.png') ?>" class="img-thumbnail img-preview" style="width: 300px; height:auto">
            </div>
        </div>
    </div>
    <div class="form-group for-shop">
        <label>Position</label>
        <input type="text" placeholder="Position number" name="position" value="<?= isset($_POST['position']) ? htmlspecialchars($_POST['position']) : '' ?>" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" rows="50" class="form-control"></textarea>
        <script>
            CKEDITOR.replace('description');
            CKEDITOR.config.entities = false;
        </script>
    </div>
    <button type="submit" name="submit" class="btn btn-lg btn-default btn-publish">Publish</button>
    <?php if ($this->uri->segment(3) !== null) { ?>
        <a href="<?= base_url('admin/products') ?>" class="btn btn-lg btn-default">Cancel</a>
    <?php } ?>
</form>
<!-- Modal Upload More Images -->
<div class="modal fade" id="modalMoreImages" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Upload more images</h4>
            </div>
            <div class="modal-body">
                <form id="uploadImagesForm">
                    <input type="hidden" value="<?= isset($_POST['folder']) ? htmlspecialchars($_POST['folder']) : $timeNow ?>" name="folder">
                    <label for="others">Select images</label>
                    <input type="file" name="others[]" id="others" multiple />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default finish-upload">
                    <span class="finish-text">Finish</span>
                    <img src="<?= base_url('assets/imgs/load.gif') ?>" class="loadUploadOthers" alt="">
                </button>
            </div>
        </div>
    </div>
</div>
<!-- virtualProductsHelp -->
<div class="modal fade" id="virtualProductsHelp" tabindex="-1" role="dialog" aria-labelledby="virtualProductsHelp">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">What are virtual products?</h4>
            </div>
            <div class="modal-body">
                Sometimes we want to sell products that are for electronic use such as books. In the box below, you can enter links to products that can be downloaded after you confirm the order as "Processed" through the "Orders" tab, an email will be sent to the customer entered with the entire text entered in the "virtual products" field.
                We have left only the possibility to add links in this field because sometimes it is necessary that the electronic stuff you provide for downloading will be uploaded to other servers. If you want, you can add your files to "file manager" and take the links to them to add to the "virtual products"
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>