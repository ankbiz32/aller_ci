<div class="sub-header">
        <div class="lg-img d-sm-block d-none" style="background: linear-gradient(rgba(0,0,0,0.2) , rgba(0,0,0,0.2)) , url('<?=base_url()?>assets/banners/services-banner.jpg') no-repeat center; background-size: cover;"></div>
        <div class="container">
            <div class="row align-items-center flex-wrap-reverse">
                <div class="sub-header-content col-sm-6 pl-sm-5 pr-sm-4">
                        <h4 class="lato">Portfolio</h4>
                        <p>Browse from some of our bespoke work & see how we work.</p>
                </div>
                <div class="sub-header-img col-sm-6 d-sm-none d-block"  style="background: linear-gradient(rgba(0,0,0,0.2) , rgba(0,0,0,0.2)) , url('assets/banners/services-banner.jpg') no-repeat center; background-size: cover;">
                </div>
            </div>
        </div>
    </div>


    <section class="all_projects wow fadeInUp mb-5" data-wow-delay="0.6s">
        <div class="container mb-5">
            <div class="row">
                <?php $z=1; foreach($portfolio as $d){?>
                <div class="col-sm-11 project_item">
                    <?php if($z%2 == 1){?>
                        <img src="<?=base_url()?>assets/patterns/r7.png" alt="p" class="patternR">
                        <img src="<?=base_url()?>assets/patterns/wave2.png" alt="p" class="waveR">
                    <?php } else{?>
                        <img src="<?=base_url()?>assets/patterns/r6.png" alt="p" class="patternL">
                        <img src="<?=base_url()?>assets/patterns/wave2.png" alt="p" class="waveL">
                    <?php }?>
                    <div class="row align-items-center">
                        <div class="col-sm-6 content">
                            <h3 class="lato"><?=$d->title?></h3>
                            <small class=""><?=$d->short_descr?></small>
                                <br>
                                <br>
                                <a href="<?=base_url('portfolio/').$d->id?>" class="btn js-tilt btn-sm btn-outline-secondary see-details">
                                    <span class="d-inline-flex">
                                        See details <i class="material-icons ml-2">arrow_right_alt</i>
                                    </span>
                                </a>
                        </div>
                        <div class="col-sm-6 p-0 image">
                            <div class="owl-carousel owl-theme spotlight-group">
                                    <img class="item spotlight" src="<?=base_url('assets/portfolio/').$d->img_src1?>" alt="">
                                    <img class="item spotlight" src="<?=base_url('assets/portfolio/').$d->img_src2?>" alt="">
                                    <img class="item spotlight" src="<?=base_url('assets/portfolio/').$d->img_src3?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <?php $z++; }?>
            </div>
        </div>
    </section>
