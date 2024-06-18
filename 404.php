<?php include_once('header-simple.php'); ?>

<section class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 pull-left">
                <div class="simple-mage">
                    <img src="images/404.png" alt="" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 list-style pull-left">
                <h5 class="btn btn-sm color-white px-3 hvr-fade btn-orange">error</h5>
                <h2>404 Not found</h2>
                <div class="simnple-content">
                    <p>Sorry the page you are looking for cannot be found on our server.</p>
                    <ul class="d-flex list-none error-404">
                        <li>
                            <a href="javascript:void(0)" class="btn btn-orange px-3 hvr-fade" onclick="goBack()"><i class="fa-solid fa-arrow-left-long"></i> Go Back </a>
                        </li>
                        <li>
                            <a href="./" class="btn btn-orange px-3 hvr-fade"><i class="fa fa-home"></i> Take me home </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include_once('footer.php');
