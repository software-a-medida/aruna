<?php

defined('_EXEC') or die;

$this->dependencies->add(['css', '{$path.plugins}owlcarousel/assets/owl.carousel.min.css']);
$this->dependencies->add(['css', '{$path.plugins}owlcarousel/assets/owl.theme.default.min.css']);
$this->dependencies->add(['js', '{$path.plugins}owlcarousel/owl.carousel.min.js']);
$this->dependencies->add(['css', '{$path.plugins}fancybox/source/jquery.fancybox.css']);
$this->dependencies->add(['js', '{$path.plugins}fancybox/source/jquery.fancybox.pack.js']);
$this->dependencies->add(['js', '{$path.js}Index/index.js?v=1.0']);
$this->dependencies->add(['other', '<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLCea8Q6BtcTHwY3YFCiB0EoHE5KnsMUE&callback=map"></script>']);

?>

<main>
    <section id="home" class="pos-relative d-flex align-items-center p-20 p-md-40" style="height:100vh;background-position:center;background-repeat:no-repeat;background-size:cover;background-image:url('{$path.images}home.jpg');">
        <div class="container">
            <div class="row d-flex align-items-center no-gutters">
                <div class="col-md-6 m-b-20 m-b-md-0">
                    <h1 class="text-uppercase text-light font-weight-light"><strong class="font-weight-bold">{$lang.live_in_tulum},</strong><br>{$lang.live_in_armony}</h1>
                    <p class="text-light">{$lang.spacious_and_bright_apartments}</p>
                </div>
                <div class="col-md-6" style="max-height:350px;">
                    <h2 class="text-uppercase text-light m-b-20">{$lang.contact_us}</h2>
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
                    <script>
                      hbspt.forms.create({
                    	region: "na1",
                    	portalId: "7235449",
                    	formId: "e1bd5991-c001-4bc3-9639-7c95a35264eb"
                    });
                    </script>
                </div>
            </div>
        </div>
    </section>
    <section class="p-20 p-md-40" style="background-color:#000;">
        <div class="container">
            <h2 class="d-flex align-items-center justify-content-center text-center text-uppercase text-light">70% {$lang.sold} <span class="m-l-10" style="font-size:14px;">{$lang.last_unities_to_deliver}</span></h2>
        </div>
    </section>
    <section class="p-20 p-md-40">
        <div class="container">
            <div class="row d-flex align-items-center no-gutters">
                <div class="col-12 col-md-4">
                    <h2 class="text-uppercase">{$lang.from}<br><strong style="font-size:40px;">U$D 125.000</strong></h2>
                </div>
                <div class="col-6 col-md-2">
                    <figure class="d-flex align-items-center justify-content-center">
                        <img src="{$path.images}icon-1.png">
                    </figure>
                    <p class="text-center">{$lang.suitable_credit_bank}</p>
                </div>
                <div class="col-6 col-md-2">
                    <figure class="d-flex align-items-center justify-content-center">
                        <img src="{$path.images}icon-2.png">
                    </figure>
                    <p class="text-center">{$lang.regime_of_condominium}</p>
                </div>
                <div class="col-6 col-md-2">
                    <figure class="d-flex align-items-center justify-content-center">
                        <img src="{$path.images}icon-3.png">
                    </figure>
                    <p class="text-center">{$lang.deliver_and_write}</p>
                </div>
                <div class="col-6 col-md-2">
                    <figure class="d-flex align-items-center justify-content-center">
                        <img src="{$path.images}icon-4.png">
                    </figure>
                    <p class="text-center">{$lang.ready_for_rent}</p>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="p-0 p-md-40" style="background-color:#eee">
        <div class="container">
            <div class="row pos-relative p-tb-40 no-gutters">
                <figure class="pos-absolute col-md-7" style="height:-webkit-fill-available;top:0px;left:0px;">
                    <img class="img-cover" src="{$path.images}about.jpg">
                </figure>
                <div class="col-10 offset-1 suffix-1 col-md-7 offset-md-5 suffix-md-0">
                    <div class="content bg-light p-40">
                        <h2 class="m-b-20 text-uppercase">{$lang.in_tulum}</h2>
                        <p class="text-justify">{$lang.the_expectaculars_natural_colors_of_tulum}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="brochure" class="p-20 p-md-40">
        <div class="container">
            <div class="row d-flex align-items-center no-gutters">
                <div class="col-md-8 m-b-20 m-b-md-0">
                    <h2 class="text-uppercase">{$lang.know}<br><strong>{$lang.your_next_property_in_tulum}</strong></h2>
                </div>
                <div class="col-md-4">
                    <a href="{$path.images}brochure_<?php echo Session::get_value('lang'); ?>.pdf" download="Aruna Tulum.pdf" class="btn btn-dark">{$lang.download_brochure}</a>
                </div>
            </div>
        </div>
    </section>
    <section class="p-20 p-md-40" style="background-color:#eee;">
        <div class="container">
            <h2 class="m-b-40 text-center text-uppercase">{$lang.gallery}</h2>
            <div class="row">
                <div class="col-md-4 m-b-20 m-b-md-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img class="img-cover" src="{$path.images}gallery-1.jpg">
                        <a href="{$path.images}gallery-1.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-20 m-b-md-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img class="img-cover" src="{$path.images}gallery-2.jpg">
                        <a href="{$path.images}gallery-2.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-20 m-b-md-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img class="img-cover" src="{$path.images}gallery-3.jpg">
                        <a href="{$path.images}gallery-3.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-20 m-b-md-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img class="img-cover" src="{$path.images}gallery-4.jpg">
                        <a href="{$path.images}gallery-4.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-20 m-b-md-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img class="img-cover" src="{$path.images}gallery-5.jpg">
                        <a href="{$path.images}gallery-5.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-20 m-b-md-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img class="img-cover" src="{$path.images}gallery-6.jpg">
                        <a href="{$path.images}gallery-6.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-20 m-b-md-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img class="img-cover" src="{$path.images}gallery-7.jpg">
                        <a href="{$path.images}gallery-7.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-20 m-b-md-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img class="img-cover" src="{$path.images}gallery-8.jpg">
                        <a href="{$path.images}gallery-8.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-20 m-b-md-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img class="img-cover" src="{$path.images}gallery-9.jpg">
                        <a href="{$path.images}gallery-9.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-20 m-b-md-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img class="img-cover" src="{$path.images}gallery-10.jpg">
                        <a href="{$path.images}gallery-10.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-20 m-b-md-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img class="img-cover" src="{$path.images}gallery-11.jpg">
                        <a href="{$path.images}gallery-11.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-20 m-b-md-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img class="img-cover" src="{$path.images}gallery-12.jpg">
                        <a href="{$path.images}gallery-12.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-20 m-b-md-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img class="img-cover" src="{$path.images}gallery-13.jpg">
                        <a href="{$path.images}gallery-13.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-20 m-b-md-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img class="img-cover" src="{$path.images}gallery-14.jpg">
                        <a href="{$path.images}gallery-14.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-20 m-b-md-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img class="img-cover" src="{$path.images}gallery-15.jpg">
                        <a href="{$path.images}gallery-15.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-20 m-b-md-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img class="img-cover" src="{$path.images}gallery-16.jpg">
                        <a href="{$path.images}gallery-16.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-20 m-b-md-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img class="img-cover" src="{$path.images}gallery-17.jpg">
                        <a href="{$path.images}gallery-17.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-20 m-b-md-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img class="img-cover" src="{$path.images}gallery-18.jpg">
                        <a href="{$path.images}gallery-18.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4">
                    <figure class="pos-relative" style="height:200px;">
                        <img class="img-cover" src="{$path.images}gallery-19.jpg">
                        <a href="{$path.images}gallery-19.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section class="p-20 p-md-40">
        <div class="container">
            <h2 class="m-b-20 m-b-md-40 text-center text-uppercase">{$lang.down_floor}</h2>
            <div class="row d-flex align-items-center">
                <div class="col-md-6 m-b-20 m-b-md-0">
                    <figure>
                        <img class="img-fluid" src="{$path.images}floor_pb.png">
                    </figure>
                </div>
                <div class="col-md-6">
                    <h5 class="m-b-20 text-uppercase"><strong class="m-r-20">PB</strong><span class="m-r-20 text-secondary">1ero</span><span class="m-r-20 text-secondary">2do</span><span class="text-secondary">Roof top</span></h5>
                    <p class="m-b-20 text-justify">{$lang.floor_pb_description}</p>
                    <h5 class="m-b-20 text-uppercase">{$lang.characteristics}</h5>
                    <h6 class="text-uppercase"><strong>+ {$lang.floor_pb_char_1}</strong></h6>
                    <h6 class="text-uppercase"><strong>+ {$lang.floor_pb_char_2}</strong></h6>
                    <h6 class="text-uppercase"><strong>+ {$lang.floor_pb_char_3}</strong></h6>
                </div>
            </div>
        </div>
    </section>
    <section class="p-20 p-md-40">
        <div class="container">
            <h2 class="m-b-20 m-b-md-40 text-center text-uppercase">{$lang.floor_1}</h2>
            <div class="row d-flex align-items-center">
                <div class="col-md-6 m-b-20 m-b-md-0">
                    <figure>
                        <img class="img-fluid" src="{$path.images}floor_1.png">
                    </figure>
                </div>
                <div class="col-md-6">
                    <h5 class="m-b-20 text-uppercase"><span class="m-r-20 text-secondary">PB</span><strong class="m-r-20">1ero</strong><span class="m-r-20 text-secondary">2do</span><span class="text-secondary">Roof top</span></h5>
                    <p class="m-b-20 text-justify">{$lang.floor_1_description}</p>
                    <h5 class="m-b-20 text-uppercase">{$lang.characteristics}</h5>
                    <h6 class="text-uppercase"><strong>+ {$lang.floor_pb_char_1}</strong></h6>
                    <h6 class="text-uppercase"><strong>+ {$lang.floor_pb_char_2}</strong></h6>
                    <h6 class="text-uppercase"><strong>+ {$lang.floor_pb_char_3}</strong></h6>
                </div>
            </div>
        </div>
    </section>
    <section class="p-20 p-md-40">
        <div class="container">
            <h2 class="m-b-20 m-b-md-40 text-center text-uppercase">{$lang.floor_2}</h2>
            <div class="row d-flex align-items-center">
                <div class="col-md-6 m-b-20 m-b-md-0">
                    <figure>
                        <img class="img-fluid" src="{$path.images}floor_2.png">
                    </figure>
                </div>
                <div class="col-md-6">
                    <h5 class="m-b-20 text-uppercase"><span class="m-r-20 text-secondary">PB</span><span class="m-r-20 text-secondary">1ero</span><strong class="m-r-20">2do</strong><span class="text-secondary">Roof top</span></h5>
                    <p class="m-b-20 text-justify">{$lang.floor_2_description}</p>
                    <h5 class="m-b-20 text-uppercase">{$lang.characteristics}</h5>
                    <h6 class="text-uppercase"><strong>+ {$lang.floor_pb_char_1}</strong></h6>
                    <h6 class="text-uppercase"><strong>+ {$lang.floor_pb_char_2}</strong></h6>
                    <h6 class="text-uppercase"><strong>+ {$lang.floor_pb_char_3}</strong></h6>
                </div>
            </div>
        </div>
    </section>
    <section class="p-20 p-md-40">
        <div class="container">
            <h2 class="m-b-20 m-b-md-40 text-center text-uppercase">{$lang.roof_top}</h2>
            <div class="row d-flex align-items-center no-gutters">
                <div class="col-md-6 m-b-20 m-b-md-0">
                    <figure>
                        <img class="img-fluid" src="{$path.images}floor_roof_top.png">
                    </figure>
                </div>
                <div class="col-md-6">
                    <h5 class="m-b-20 text-uppercase"><span class="m-r-20 text-secondary">PB</span><span class="m-r-20 text-secondary">1ero</span><span class="m-r-20 text-secondary">2do</span><strong>Roof top</strong></h5>
                    <p class="m-b-20 text-justify">{$lang.floor_roof_top_description}</p>
                    <h5 class="m-b-20 text-uppercase">{$lang.characteristics}</h5>
                    <h6 class="text-uppercase"><strong>+ {$lang.floor_pb_char_1}</strong></h6>
                    <h6 class="text-uppercase"><strong>+ {$lang.floor_pb_char_2}</strong></h6>
                    <h6 class="text-uppercase"><strong>+ {$lang.floor_pb_char_3}</strong></h6>
                </div>
            </div>
        </div>
    </section>
    <section class="p-20 p-md-40" style="background-color:#000;">
        <div class="container">
            <h2 class="d-flex align-items-center justify-content-center text-uppercase text-center text-light">{$lang.unities_ready_to_sell}</span></h2>
        </div>
    </section>
    <section class="p-20 p-md-40" style="background-color:#eee;">
        <div class="container">
            <div class="row d-flex align-items-center no-gutters">
                <div class="col-md-8 p-r-0 p-r-md-20 m-b-20 m-b-md-0">
                    <h2 class="m-b-20 text-uppercase">{$lang.vactional_rent}</h2>
                    <p class="text-justify">{$lang.for_owners_we_offer}</p>
                </div>
                <div class="col-md-4">
                    <figure>
                        <img src="{$path.images}casa_azul.png" style="width:100%;">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section class="p-20 p-md-0" style="background-color:#508d87;">
        <div class="container">
            <div class="row d-flex align-items-center no-gutters">
                <div class="col-md-4 p-r-0 p-r-md-20 m-b-20 m-b-md-0">
                    <h2 class="m-b-20 text-uppercase text-light">{$lang.location}</h2>
                    <p class="text-justify text-light">{$lang.aruna_in_the_best_location}</p>
                </div>
                <div class="col-md-8">
                    <figure>
                        <img class="img-fluid" src="{$path.images}map.png">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section class="p-20 p-md-40" style="background-color:#eee;">
        <div class="container d-flex align-items-center justify-content-center flex-column">
            <a href="mailto:info@neoterre.mx" class="text-uppercase text-dark"><strong>{$lang.email}: info@neoterre.mx</strong></a>
            <a href="tel:+529842387572" class=" m-b-20 text-uppercase text-dark"><strong>{$lang.phone}: +52 (984) 238 75 72</strong></a>
            <a href="#home" class="btn btn-dark text-uppercase" style="width:100%;max-width:400px;">{$lang.contact_us}</a>
        </div>
    </section>
</main>
