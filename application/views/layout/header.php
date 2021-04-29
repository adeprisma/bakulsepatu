<html>

<head>
    <title>Bakul Sepatu</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/img/favicon.ico') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- custom-theme -->
   
    <link rel="stylesheet" href="<?= base_url('assets/css/pagination.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/form-elements.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/shop.css') ?>" media="screen" property="">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" media="all">
    <link rel="stylesheet" href="<?= base_url('assets/css/style7.css') ?>" media="all">
    <link rel="stylesheet" href="<?= base_url('assets/css/floating-wpp.css') ?>" media="all"> 
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/lembar.css') ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <script>
        function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }
        function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }        
    </script>
</head>
<body>
<?= $html ?>
<div class="header_agileits">
    <?= $logo ?>
    <div class="overlay overlay-contentpush">
        <button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>
        <nav>
            <ul>
                <li><a href="<?= base_url() ?>">Home</a></li>
                <li><a href="produk/produkbaru">New Arrivals</a></li>
                <li><a href="<?= base_url('produk/wanita') ?>">Ladies</a></li>
                <li><a href="<?= base_url('produk/pria') ?>">Men</a></li>
                <li><a href="<?= base_url('produk/kids') ?>">Kids</a></li>
            </ul>
        </nav>
    </div>
    <div class="mobile-nav-button">
        <button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
    </div>
</div>
<div style="height:80;background-color: #080808;width:100%;position:fixed;z-index:10"></div>
