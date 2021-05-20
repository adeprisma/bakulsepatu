<div class="ads-grid_shop">

	<!---728x90--->
<div class="left-ads-display col-md-12">
	<div class="wrapper_top_shop">
		<div class="clearfix"></div>
		<div class="product-sec1">
		<?php foreach ($katalog as $row) :?>
		<div class="col-md-3 product-men">
			<div class="product-shoe-info shoe">
				<div class="men-pro-item">
					<div class="men-thumb-item">
						<img src="<?= base_url('assets/img/sepatu/'.$row['nama_kategori'].'/'.$row['id_sepatu'].' - '.$row['nama_sepatu'].'/'. $row['gambar1']) ?>" alt="">
						<div class="men-cart-pro">
							<div class="inner-men-cart-pro">
								<a href="<?= base_url('produk/detail/'.$row['id_sepatu']); ?>" class="link-product-add-cart">Detail</a>
							</div>
						</div>
						<?php if ($row['status'] == 1) {?>
						<span class="product-new-top">Produk Baru</span>
						<?php }?>																
						<span class="product-rating-top">
							<ul class="stars"></ul>
						</span>
					</div>
					<div class="item-info-product">
						<h4>
							<a href="<?= base_url('produk/detail/'.$row['id_sepatu']); ?>"><?= $row['nama_sepatu'] ?></a>
						</h4>
						<div class="info-product-price">
							<div class="grid_meta">
								<div class="product_price">
									<div class="grid-price">
										<span class="money">Rp.&nbsp;<?= number_format($row['harga'])?> (Disc. 30%) menjadi <?php $disc = $row['harga'] * 30 / 100; $hargafix = $row['harga'] - $disc; echo 'Rp. '.number_format($hargafix); ?></span>
									</div>
								</div>
							</div>
						</div>
							<!-- <div class="shoe single-item hvr-outline-out">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="shoe_item" value="Bella Toes">
									<input type="hidden" name="amount" value="675.00">
									<a href="https://trekkersshoes.com/produk/detail/U0wtVkVOVVM=/view/MA==">
										<button type="button" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
									</a>
								</form>
							</div> -->
						
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach ?>												
		<div class="clearfix"></div>
		<div class="col-md-12 text-center">
			<!-- <ul class="pagination">
				<ul class="setPaginate"> <li><a>1</a></li><li><a class="current_page" href="https://trekkersshoes.com/produk/wanita/page/2">2</a></li><li><a class="current_page" href="https://trekkersshoes.com/produk/wanita/page/3">3</a></li><li><a class="current_page" href="https://trekkersshoes.com/produk/wanita/page/4">4</a></li><li><a class="current_page" href="https://trekkersshoes.com/produk/wanita/page/5">5</a></li><li><a class="current_page" href="https://trekkersshoes.com/produk/wanita/page/2">Next</a> </li></ul>
			</ul> --> <?= $pagination ?>
		</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
		<div class="clearfix"></div>
</div>