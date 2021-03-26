    <div class="sub-header">
        <div class="lg-img d-sm-block d-none" style="background: linear-gradient(rgba(0,0,0,0.2) , rgba(0,0,0,0.2)) , url('<?=base_url()?>assets/banners/services-banner.jpg') no-repeat center; background-size: cover;"></div>
        <div class="container">
            <div class="row align-items-center flex-wrap-reverse">
                <div class="sub-header-content col-sm-6 pl-sm-5 pr-sm-4">
                        <h4 class="lato"><?=$project->title?></h4>
                        <p>Project details</p>
                </div>
                <div class="sub-header-img col-sm-6 d-sm-none d-block"  style="background: linear-gradient(rgba(0,0,0,0.2) , rgba(0,0,0,0.2)) , url('<?=base_url()?>assets/banners/services-banner.jpg') no-repeat center; background-size: cover;">
                </div>
            </div>
        </div>
    </div>

    
    <section class="this_project wow fadeInUp mb-5" data-wow-delay="0.6s">
        <div class="container mb-5">
            <div class="row">
                <div class="col-sm-8">
                    <img src="<?=base_url()?>assets/patterns/r7.png" alt="p" class="patternR">
                    <img src="<?=base_url()?>assets/patterns/r6.png" alt="p" class="patternL2">
                    <img src="<?=base_url('assets/portfolio/').$project->img_src1?>" class="w-100 spotlight" alt="">
                </div>
                <div class="col-sm-8 offset-sm-2 my-4">
                    <img src="<?=base_url()?>assets/patterns/wave2.png" alt="p" class="waveR">
                    <img src="<?=base_url()?>assets/patterns/t2.png" alt="p" class="cubeL">
                    <img src="<?=base_url()?>assets/patterns/r7.png" alt="p" class="patternR2">
                    <img src="<?=base_url('assets/portfolio/').$project->img_src2?>" class="w-100 spotlight" alt="">
                </div>
                <div class="col-sm-8 mb-5 offset-sm-4">
                    <img src="<?=base_url()?>assets/patterns/r6.png" alt="p" class="patternL">
                    <img src="<?=base_url('assets/portfolio/').$project->img_src3?>" class="w-100 spotlight" alt="">
                </div>
            </div>
                <?php if($project->full_descr!=null){?>
                <h5 class="mt-5">Details of this project: </h5>
                <div class="row">
                    <div class="col-sm-10">
                        <?=$project->full_descr?>
                    </div>
                </div>
                <?php }?>
                
                <div class="mt-5"></div>
                <a href="javascript:;" onclick="window.history.back()" class="btn js-tilt btn-sm btn-outline-secondary see-details">
                    <span class="d-inline-flex">
                    ← Go back 
                    </span>
                </a>
        </div>
    </section>
