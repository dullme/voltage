<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Voltage</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>

<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" width="200" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Phones, PC & More <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">For Business</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<div class="container">
    <div id="carouselExampleControls" class="carousel slide banner" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://www-file.huawei.com/-/media/corporate/images/home/big-banner/2018-1/hbanner-allflash-storage-pc.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://www-file.huawei.com/-/media/corporate/images/home/big-banner/2018-1/hero_banner_mate20pro_pc.jpg" alt="Second slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="slick-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="slick-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>