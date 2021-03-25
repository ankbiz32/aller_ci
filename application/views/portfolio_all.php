<div class="sub-header">
        <div class="lg-img d-sm-block d-none" style="background: linear-gradient(rgba(0,0,0,0.2) , rgba(0,0,0,0.2)) , url('assets/banners/services-banner.jpg') no-repeat center; background-size: cover;"></div>
        <div class="container">
            <div class="row align-items-center flex-wrap-reverse">
                <div class="sub-header-content col-sm-6 pl-sm-5 pr-sm-4">
                        <h4 class="lato">Portfolio</h4>
                        <p></p>
                </div>
                <div class="sub-header-img col-sm-6 d-sm-none d-block"  style="background: linear-gradient(rgba(0,0,0,0.2) , rgba(0,0,0,0.2)) , url('assets/banners/services-banner.jpg') no-repeat center; background-size: cover;">
                </div>
            </div>
        </div>
    </div>


    <section class="all_projects wow fadeInUp mb-5" data-wow-delay="0.6s">
        <div class="container mb-5">
            <div class="row">
                <?php foreach($portfolio as $d){?>
                <div class="col-sm-10 project_item">
                    <div class="row align-items-center">
                        <div class="col-sm-7 content">
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
                        <div class="col-sm-5 p-0 image">
                            <div class="owl-carousel owl-theme ">
                                <div class="item row ">
                                    <img class="" src="<?=base_url('assets/portfolio/').$d->img_src1?>" alt="">
                                </div>
                                <div class="item row ">
                                    <img class="" src="<?=base_url('assets/portfolio/').$d->img_src2?>" alt="">
                                </div>
                                <div class="item row ">
                                    <img class="" src="<?=base_url('assets/portfolio/').$d->img_src3?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>

                <!-- <div class="col-sm-10 project_item">
                    <div class="row align-items-center">
                        <div class="col-sm-7 content">
                            <h3 class="lato">Lorem ipsum dolor sit amet consectetur.</h3>
                            <small class="">Creative website development for a young and dynamic IT services firm with core competency in Software Services, Web Solutions, Systems Integration and IT Enabled Services.</small>
                                <br>
                                <br>
                                <a href="<?=base_url('about-us')?>" class="btn js-tilt btn-sm btn-outline-secondary see-details">
                                    <span class="d-inline-flex">
                                        See details <i class="material-icons ml-2">arrow_right_alt</i>
                                    </span>
                                </a>
                        </div>
                        <div class="col-sm-5 p-0 image">
                            <div class="owl-carousel owl-theme ">
                                <div class="item row ">
                                    <img class="" src="<?=base_url('assets/portfolio/n1.jpg')?>" alt="">
                                </div>
                                <div class="item row ">
                                    <img class="" src="<?=base_url('assets/portfolio/n2.jpg')?>" alt="">
                                </div>
                                <div class="item row ">
                                    <img class="" src="<?=base_url('assets/portfolio/n3.jpg')?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
