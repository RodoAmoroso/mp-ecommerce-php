<?php

require 'head.php';
require 'classes/MPConfig.php';

$MPConfig = new MPConfig;
$payment = $MPConfig->create_payment([
    'product'=>$_POST['title'],
    'quantity'=>(int) $_POST['unit'],
    'price'=>(int) ($_POST['price'])
]);
?>

<div class="stack">

    <div class="as-search-wrapper" role="main">
        <div class="as-navtuck-wrapper">
            <div class="as-l-fullwidth  as-navtuck" data-events="event52">
                <div>
                    <div class="pd-billboard pd-category-header">
                        <div class="pd-l-plate-scale">
                            <div class="pd-billboard-background">
                                <img src="./assets/music-audio-alp-201709" alt="" width="1440" height="320" data-scale-params-2="wid=2880&amp;hei=640&amp;fmt=jpeg&amp;qlt=95&amp;op_usm=0.5,0.5&amp;.v=1503948581306" class="pd-billboard-hero ir">
                            </div>
                            <div class="pd-billboard-info">
                                <h1 class="pd-billboard-header pd-util-compact-small-18">Tienda e-commerce</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="as-search-results as-filter-open as-category-landing as-desktop" id="as-search-results">

            <div id="accessories-tab" class="as-accessories-details">
                <div class="as-accessories" id="as-accessories">
                    <div class="as-accessories-header">
                        <div class="as-search-results-count">
                            <span class="as-search-results-value"></span>
                        </div>
                    </div>
                    <div class="as-searchnav-placeholder" style="height: 77px;">
                        <div class="row as-search-navbar" id="as-search-navbar" style="width: auto;">
                            <div class="as-accessories-filter-tile column large-6 small-3">

                                <button class="as-filter-button" aria-expanded="true" aria-controls="as-search-filters" type="button">
                                    <h2 class=" as-filter-button-text">
                                        Smartphones
                                    </h2>
                                </button>


                            </div>

                        </div>
                    </div>
                    <div class="as-accessories-results  as-search-desktop">
                        <div class="width:60%">
                            <div class="as-producttile-tilehero with-paddlenav " style="float:left;">
                                <div class="as-dummy-container as-dummy-img">

                                    <img src="./assets/wireless-headphones" class="ir ir item-image as-producttile-image  " style="max-width: 70%;max-height: 70%;"alt="" width="445" height="445">
                                </div>
                                <div class="images mini-gallery gal5 ">


                                    <div class="as-isdesktop with-paddlenav with-paddlenav-onhover">
                                        <div class="clearfix image-list xs-no-js as-util-relatedlink relatedlink" data-relatedlink="6|Powerbeats3 Wireless Earphones - Neighborhood Collection - Brick Red|MPXP2">
                                            <div class="as-tilegallery-element as-image-selected">
                                                <div class=""></div>
                                                <img src="./assets/003.jpg" class="ir ir item-image as-producttile-image" alt="" width="445" height="445" style="content:-webkit-image-set(url(<?php echo $_POST['img'] ?>) 2x);">
                                            </div>

                                        </div>


                                    </div>



                                </div>

                            </div>
                            <div class="as-producttile-info" style="float:left;min-height: 168px;">
                                <div class="as-producttile-titlepricewraper" style="min-height: 128px;">
                                    <div class="as-producttile-title">
                                        <h3 class="as-producttile-name">
                                            <p class="as-producttile-tilelink">
                                                <span data-ase-truncate="2"><?php echo $_POST['title'] ?></span>
                                            </p>

                                        </h3>
                                    </div>
                                    <h3 >
                                        <?php echo "$" . $_POST['price'] ?>
                                    </h3>
                                    <h4>
                                        <?php echo "Cantidad:" . $_POST['unit'] ?>
                                    </h4>
                                </div>
                                <form action="<?=$payment->init_point?>">
                                    <button type="submit" class="mercadopago-button" formmethod="post">Pagar la Compra</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div role="alert" class="as-loader-text ally" aria-live="assertive"></div>
    <div class="as-footnotes">
        <div class="as-footnotes-content">
            <div class="as-footnotes-sosumi">
                Todos los derechos reservados Tienda Tecno 2019
            </div>
        </div>
    </div>

</div>

<div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> <svg class="mp-spinner" viewBox="25 25 50 50"> <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle> </svg> </div><div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> <svg class="mp-spinner" viewBox="25 25 50 50"> <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle> </svg> </div><div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> <svg class="mp-spinner" viewBox="25 25 50 50"> <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle> </svg> </div><div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> <svg class="mp-spinner" viewBox="25 25 50 50"> <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle> </svg> </div><div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> <svg class="mp-spinner" viewBox="25 25 50 50"> <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle> </svg> </div><div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> <svg class="mp-spinner" viewBox="25 25 50 50"> <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle> </svg> </div><div id="ac-gn-viewport-emitter"> </div>



<script src="https://www.mercadopago.com/v2/security.js" view="item"></script>
<?php require 'footer.php' ?>