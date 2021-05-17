<style>
    .stamp-ladies {
        width: 100px; 
        position: absolute; 
        right: 0px; 
        margin: 30;
    }

    .stamp-men {
        width: 100px; 
        position: absolute; 
        right: 0px; 
        margin-right: 30;
        margin-top: -15;
    }

    .stamp-kids {
        width: 100px; 
        position: absolute; 
        right: 0px; 
        margin-right: 30; 
        margin-top: -15;
    }

    @media (max-width:767.98px){
        .clear {
            height:753;
        }

        .stamp-ladies {
            width: 80px; 
            position: absolute; 
            right: 0px; 
            margin-right: 30;
            margin-top: 15;
        }

        .stamp-men {
            width: 80px; 
            position: absolute; 
            right: 0px; 
            margin-right: 30;
            margin-top: -65;
        }

        .stamp-kids {
            width: 80px; 
            position: absolute; 
            right: 0px; 
            margin-right: 30; 
            margin-top: -55;
        }
    }
</style>
<div class="grids_bottom" style="margin-top:5px;">
    <div class="style-grids">
        <div class="col-md-6 style-grid style-grid-1">
            <img src="assets/img/sepatu1.jpg">
            <div class="style-grid-1-text">
                <h3>ALL ITEMS START FROM 100K IDR</h3>
            </div>
        </div>
    </div>
    <div class="col-md-6 style-grid style-grid-2">
        <div class="style-image-1_info">
            <div class="style-grid-2-text_info">
                <h3>Ladies</h3>
                <p>Temukan koleksi terbaru sneakers dan flat shoes wanita</p>
                <div class="shop-button">
                    <a href="<?= base_url('produk/wanita'); ?>">Lihat Disini</a>
                </div>
                <div class="stamp-ladies"><img src="assets/img/harga-pabrik.png"></div>
            </div>
        </div>
        <div class="style-image-2">
            <img src="assets/img/sl-trevita.jpg">
            <div class="style-grid-2-text">
                <h3>SL-TREVITA</h3>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div><!-- //grids_bottom-->
<!-- /girds_bottom2-->
<div class="grids_sec_2" style="margin-top:5px;margin-bottom:5px;">
    <div class="style-grids_main">
        <div class="col-md-6 grids_sec_2_left">
            <div class="grid_sec_info">
                <div class="style-grid-2-text_info">
                    <h3>Men</h3>
                    <p>Temukan sneakers dan sandal yang tepat untuk melengkapi gaya pria masa kini</p>
                    <div class="shop-button">
                        <a href="<?= base_url('produk/pria'); ?>">Lihat Disini</a>
                    </div>
                    <div class="stamp-men"><img src="assets/img/harga-pabrik.png"></div>
                </div>
            </div>
            <div class="style-image-2">
                <img src="assets/img/ta-aero.jpg">
                <div class="style-grid-2-text">
                    <h3>TA-AERO</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6 grids_sec_2_left">          
              <div class="style-image-2">
                <img src="assets/img/sl-marvel-tkl.jpg">
                <div class="style-grid-2-text">
                    <h3>SL-MARVEL-TKL</h3>
                </div>
            </div>
            <div class="grid_sec_info last">
                <div class="style-grid-2-text_info">
                    <h3>Kids</h3>
                    <p>Jelajahi berbagai macam sepatu anak mulai dari sneakers lampu dan sandal gunung</p>
                    <div class="shop-button two">
                        <a href="<?= base_url('produk/kids'); ?>">Lihat Disini</a>
                    </div>
                    <div class="stamp-kids"><img src="assets/img/harga-pabrik.png"></div>
                </div>
            </div>
        </div>
        <div class="clearfix clear"></div>
    </div>
</div>
<!-- this so absurd man i can't add text animation to the div. How you do it  -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal1" aria-label="Close">
          <span aria-hidden="true" class="ion-ios-close"></span>
        </button>
      </div>
      <div class="row no-gutters">
	      <div class="col-md-6">
		      <div class="modal-body" style="background-image: url(assets/img/bg-1.jpg);">
		      </div>
		    </div>
		    <div class="col-md-6 d-flex">
		      <div class="modal-body1 p-5 d-flex align-items-center">
		      	<div class="text w-100 text-center py-5">
		      		<h2 class="mb-0">ALL PRICES</h2>
		      		<h4 class="mb-4">Start From 100K IDR</h4>
		      		<form action="#" class="code-form">
                <div class="form-group d-flex">
                  <input type="text" class="form-control" placeholder="Enter code">
                </div>
              </form>
		      		<a href="#" class="btn btn-primary d-block py-3">Start Shopping</a>
		      	</div>
		      </div>
		    </div>
	    </div>
    </div>
  </div>
</div>
<!-- End modal -->