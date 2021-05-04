<style>
	.space {
		height: 450px;
	}
</style>
<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="col-md-4 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<div class="clearfix"></div>
							<ul class="slides" style="width: 2000%; transition-duration: 0.6s; transform: translate3d(-3331.2px, 0px, 0px);">
								<li data-thumb="<?= base_url('assets/img/sepatu/'.$detail['nama_kategori'].'/'.$detail['id_sepatu'].' - '.$detail['nama_sepatu'].'/'. $detail['gambar1']) ?>" class="clone" aria-hidden="true" style="width: 416.4px; float: left; display: block;">
									<div class="thumb-image"> <img src="<?= base_url('assets/img/sepatu/'.$detail['nama_kategori'].'/'.$detail['id_sepatu'].' - '.$detail['nama_sepatu'].'/'. $detail['gambar1']) ?>" data-imagezoom="true" class="img-responsive" draggable="false"></div>
								</li>
								<li data-thumb="<?= base_url('assets/img/sepatu/'.$detail['nama_kategori'].'/'.$detail['id_sepatu'].' - '.$detail['nama_sepatu'].'/'. $detail['gambar2']) ?>" style="width: 416.4px; float: left; display: block;" class="">
									<div class="thumb-image"> <img src="<?= base_url('assets/img/sepatu/'.$detail['nama_kategori'].'/'.$detail['id_sepatu'].' - '.$detail['nama_sepatu'].'/'. $detail['gambar2']) ?>" data-imagezoom="true" class="img-responsive" draggable="false"></div>
								</li>
								<li data-thumb="<?= base_url('assets/img/sepatu/'.$detail['nama_kategori'].'/'.$detail['id_sepatu'].' - '.$detail['nama_sepatu'].'/'. $detail['gambar3']) ?>" style="width: 416.4px; float: left; display: block;" class="">
									<div class="thumb-image"> <img src="<?= base_url('assets/img/sepatu/'.$detail['nama_kategori'].'/'.$detail['id_sepatu'].' - '.$detail['nama_sepatu'].'/'. $detail['gambar3']) ?>" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
								</li>
								<?php if ($detail['gambar4'] != null) :?>
								<li data-thumb="<?= base_url('assets/img/sepatu/'.$detail['nama_kategori'].'/'.$detail['id_sepatu'].' - '.$detail['nama_sepatu'].'/'. $detail['gambar4']) ?>" style="width: 416.4px; float: left; display: block;" class="">
									<div class="thumb-image"> <img src="<?= base_url('assets/img/sepatu/'.$detail['nama_kategori'].'/'.$detail['id_sepatu'].' - '.$detail['nama_sepatu'].'/'. $detail['gambar4']) ?>" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
								</li>
								<?php endif ?>
							</ul>
						<ul class="flex-direction-nav">
							<li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li>
							<li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
						</ul>
					</div>
				</div>
				<div class="space" style="display: none">
				</div>
			</div>
			<div class="col-md-8 single-right-left simpleCart_shelfItem">
				<h3><?= $detail['nama_sepatu'] ?></h3>
				    <div class="rating1">
						<ul class="stars">
														
						</ul>
					</div>				
					<div class="color-quality">
						<div class="color-quality-right">
						    <div id="loadingmessage" style="display:none">
                				<img src="<?= base_url('assets/img/tenor.gif'); ?>" style="margin-left:20%;">
                			</div>
							<h5>Warna :</h5>

							<div class="result"></div>
							<?php foreach ($warna as $row):?>
							<input type="radio" name="warna" value="<?= $row->id_gambar?>"<?= $row->nama_warna == $detail['nama_warna'] ? 'checked':'' ?> onclick="MyAlert()">
							<span class="span"><?= strtoupper($row->nama_warna) ?></span><br>
							<?php endforeach?>						
						</div>
					<br>
					</div>
				<input type="hidden" name="cek_style" id="cek-style" value="SL-VENUS">
				<input type="hidden" name="cek_jns" id="cek-jns-stok" value="0">
				<input type="hidden" name="status_fav" id="cek-status-fav" value="1">
				<input type="hidden" name="cek_warna" id="cek-warna" value="">
				<input type="hidden" name="usr_fav" id="cek-user" value="">
				<input type="hidden" name="jns_mbr" id="cek-jns-mbr" value="">
				</a>
			</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<script>
		function MyAlert(){
			$('#loadingmessage').show('slow');
			setTimeout(function(){ 
			var warna = $('input[type="radio"]:checked').val();
	
            $.ajax({
                url: "<?= base_url('produk/requestColor') ?>",
                type: "POST",
                data: {'warna': warna},
                success: function (data) {
					$('#loadingmessage').hide();
					// $('.space').attr("style","display: block");
					$('.mid_slider_w3lsagile').hide();
					$('.footer_agileinfo_w3').hide();
					$('.images_3_of_2').html(data);
					// $('.space').attr("style","display: none");
					$('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					});
					$('.mid_slider_w3lsagile').show();
					$('.footer_agileinfo_w3').show();
                }
            });
			
			}, 1000);
			
		}
	</script>