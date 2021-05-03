<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="col-md-4 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<div class="clearfix"></div>
						<!-- <div class="flex-viewport" style="overflow: hidden; position: relative;"> -->
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
						<!-- </div> -->
						<!-- <ol class="flex-control-nav flex-control-thumbs">
							<li><img src="https://trekkersshoes.com/assets/img/produk-detail/Trekekrs-Produk-2020-07-16-28ad9fe5b20c67108899bc875db2255d.jpg" class="" draggable="false"></li>
							<li><img src="https://trekkersshoes.com/assets/img/produk-detail/Trekekrs-Produk-2020-07-16-7ec485e75c7b5de5feb5790262f02b1c.jpg" draggable="false" class=""></li>
							<li><img src="https://trekkersshoes.com/assets/img/produk-detail/Trekekrs-Produk-2020-07-16-8a0961ce069f7c224af25fe29515bbc0.jpg" draggable="false" class=""></li>
							<li><img src="https://trekkersshoes.com/assets/img/produk-detail/Trekekrs-Produk-2020-07-16-cc79b670bfd6457cc12402af0c55c0c4.jpg" draggable="false" class=""></li>
							<li><img src="https://trekkersshoes.com/assets/img/produk-detail/Trekekrs-Produk-2020-07-16-5101c3660e0c4c6d098e843c6fb18282.jpg" draggable="false" class=""></li>
							<li><img src="https://trekkersshoes.com/assets/img/produk-detail/Trekekrs-Produk-2020-07-16-44b18e15629373088b220adfa7b0519c.jpg" draggable="false" class=""></li>
							<li><img src="https://trekkersshoes.com/assets/img/produk-detail/Trekekrs-Produk-2020-07-16-5a3a361548cd7cdf1dd791fc671be61a.jpg" draggable="false" class=""></li>
							<li><img src="https://trekkersshoes.com/assets/img/produk-detail/Trekekrs-Produk-2020-07-16-1ad2570db8b5903f60dbf1d2ee6cd2cc.jpg" draggable="false" class="flex-active"></li>
						</ol> -->
						<ul class="flex-direction-nav">
							<li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li>
							<li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div>
								

			<div class="col-md-8 single-right-left simpleCart_shelfItem">
				<h3><?= $detail['nama_sepatu'] ?></h3>
				    <div class="rating1">
						<ul class="stars">
														
						</ul>
					</div>				
				
				<!--<form action="https://trekkersshoes.com/produk/detail/U0wtVkVOVVM=/view/MA==" method="post">-->
				<!--<form action="#">-->
					<div class="color-quality">
						<div class="color-quality-right">
						    <div id="loadingmessage" style="display:none">
                				<img src="https://trekkersshoes.com/assets/img/progress.gif" style="margin-left:20%;">
                			</div>
							<h5>Warna :</h5>

							<div class="result"></div>
							<?php foreach ($warna as $row):?>
							<input type="radio" name="warna" value="<?= $row->nama_warna?>"<?= $row->nama_warna == $detail['nama_warna'] ? 'checked':'' ?> onclick="MyAlert()">
							<span class="span"><?= strtoupper($row->nama_warna) ?></span><br>
							<?php endforeach?>
							<!-- <input type="radio" name="warna" value="ABU MUDA / PUTIH" onclick="MyAlert()">
							<span class="span">ABU MUDA / PUTIH</span><br> -->
																	
						
						</div>
					<br>
					</div>
				<!--</form>-->
				<!-- <form action="https://trekkersshoes.com/tambahkan-keranjang" method="post" onsubmit="$('#loader').show();">
				    <input type="hidden" id="cek-warna" name="warna_barang" required="" value="">
					<div class="color-quality">
						<div class="color-quality-right">
							<h5>Ukuran :</h5>
							<label class="dropdown">
							<select name="ukuran" id="ukuran" onchange="changeValue(this.value)" required="">
								<option value="">- Pilih -</option>
								<option name="size" value="37">37</option><option name="size" value="38">38</option><option name="size" value="39">39</option><option name="size" value="40">40</option>							</select>
							</label>
							<strong>
								<div id="hasil"></div>
								<div id="hasil2"></div>
							</strong>
							<textarea id="temp" hidden=""></textarea>
							
						</div>
					</div>
					<br>
										
					<br>
					<div class="color-quality">
						<div class="color-quality-right">
						
						</div>
					</div>
					<br>
					
					
				</form> -->
				
				<input type="hidden" name="cek_style" id="cek-style" value="SL-VENUS">
				<input type="hidden" name="cek_jns" id="cek-jns-stok" value="0">
				<input type="hidden" name="status_fav" id="cek-status-fav" value="1">
				<input type="hidden" name="cek_warna" id="cek-warna" value="">
				<input type="hidden" name="usr_fav" id="cek-user" value="">
				<input type="hidden" name="jns_mbr" id="cek-jns-mbr" value="">
				</a>
											
				<!--<ul class="social-nav model-3d-0 footer-social social single_page">-->
				<!--    <li class="share">Bagikan : </li>-->
				<!--	<li>-->
				<!--		<a href="http://www.facebook.com/sharer.php?u=https://trekkersshoes.com/produk/detail/U0wtVkVOVVM=/view/MA==" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Bagikan di Facebook" class="facebook">-->
				<!--			<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>-->
				<!--			<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>-->
				<!--		</a>-->
				<!--	</li>-->
				<!--	<li>-->
				<!--		<a href="http://twitter.com/share?text=https://trekkersshoes.com/produk/detail/U0wtVkVOVVM=/view/MA==" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Bagikan di Twitter" class="twitter">-->
				<!--			<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>-->
				<!--			<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>-->
				<!--		</a>-->
				<!--	</li>-->
				<!--	<li>-->
				<!--		<a href="https://wa.me/?text=https://trekkersshoes.com/produk/detail/U0wtVkVOVVM=/view/MA==" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Bagikan di WhatAapp" class="whatsapp">-->
				<!--		<div class="front"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>-->
				<!--			<div class="back"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>-->
				<!--		</a>-->
				<!--	</li>-->
					
				<!--</ul>-->

			</div>
			<div class="clearfix"> </div>
			</div>
			
			<!--//tabs-->

			<!-- /new_arrivals -->

			<!--//new_arrivals-->


		</div>
	</div>