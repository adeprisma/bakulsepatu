<div class="ads-grid_shop">

	<!---728x90--->
<div class="left-ads-display col-md-12">
	<div class="wrapper_top_shop">
		<div class="clearfix"></div>
		<div class="product-sec1">
		<?php foreach ($pria as $row) :?>
		<div class="col-md-3 product-men">
			<div class="product-shoe-info shoe">
				<div class="men-pro-item">
					<div class="men-thumb-item">
						<img src="<?= base_url('assets/img/sepatu/pria/'. $row['gambar1']) ?>" alt="">
						<div class="men-cart-pro">
							<div class="inner-men-cart-pro">
								<a href="https://bakulsepatu.com/produk/detail/" class="link-product-add-cart">Detail</a>
							</div>
						</div>
						<span class="product-new-top">Produk Baru</span>																
						<span class="product-rating-top">
							<ul class="stars"></ul>
						</span>
					</div>
					<div class="item-info-product">
						<h4>
							<a href="https://bakulsepatu.com/produk/detail/"><?= $row['nama_sepatu'] ?></a>
						</h4>
						<!-- <div class="info-product-price">
							<div class="grid_meta">
								<div class="product_price">
									<div class="grid-price ">
										
										<span class="money ">Rp.&nbsp;155,500</span>    																		<span class="money ">Rp.&nbsp;</span>
									</div>
								</div>
							</div>
							<div class="shoe single-item hvr-outline-out">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="shoe_item" value="Bella Toes">
									<input type="hidden" name="amount" value="675.00">
									<a href="https://trekkersshoes.com/produk/detail/U0wtVkVOVVM=/view/MA==">
										<button type="button" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
									</a>
								</form>
							</div>
						</div> -->
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach ?>												
		<div class="clearfix"></div>
		<div class="col-lg-12">
			<ul class="pagination">
				<ul class="setPaginate"> 
					<li><a>1</a></li>
					<li><a class="current_page" href="http://bakulsepatu.com/produk/pria/page/2">2</a></li>
					<li><a class="current_page" href="http://bakulsepatu.com/produk/pria/page/3">3</a></li>
					<li><a class="current_page" href="http://bakulsepatu.com/produk/pria/page/4">4</a></li>
					<li><a class="current_page" href="http://bakulsepatu.com/produk/pria/page/5">5</a></li>
					<li><a class="current_page" href="http://bakulsepatu.com/produk/pria/page/2">Next</a> </li></ul>
			</ul>
		</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
		<div class="clearfix"></div>
</div>