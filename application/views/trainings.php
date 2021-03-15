
    <div class="sub-header">
        <div class="lg-img d-sm-block d-none" style="background: linear-gradient(rgba(0,0,0,0.2) , rgba(0,0,0,0.2)) , url('assets/banners/services-banner.jpg') no-repeat center; background-size: cover;"></div>
        <div class="container">
            <div class="row align-items-center flex-wrap-reverse">
                <div class="sub-header-content col-sm-6 pl-sm-5 pr-sm-4">
                        <h3 class="lato">Trainings</h3>
                        <p>Jump start your learning curve with our easy to learn training modules.</p>
                </div>
                <div class="sub-header-img col-sm-6 d-sm-none d-block"  style="background: linear-gradient(rgba(0,0,0,0.2) , rgba(0,0,0,0.2)) , url('assets/banners/services-banner.jpg') no-repeat center; background-size: cover;">
                </div>
            </div>
            
        </div>
    </div>

    <section class="all-trainings">
        <img src="<?=base_url()?>assets/patterns/r.png" alt="p" class="pattern1">
        <img src="<?=base_url()?>assets/patterns/r4.png" alt="p" class="pattern2">
        <img src="<?=base_url()?>assets/patterns/wave2.png" alt="p" class="pattern3">
        <div class="container">
        <div class="row justify-content-center">

        
            <?php foreach($trainings as $t){?>
                <div class="col-sm-5 mx-sm-4 pb-4 training">
                    <div class="row mb-4 img-container">
                        <img src="<?=base_url()?>assets/training/<?=$t->img_src?>" alt="">
                    </div>
                    <div class="">
                        <h4 class="lato"><?=$t->name?></h4>
                        <p><?=$t->descr?></p>
                        <div class="row tr-info">
                            <div class="col-sm-7">
                                <em><small>Duration: <?=$t->duration?></small></em>
                            </div>
                            <div class="col-sm-5 text-sm-right mt-sm-0 mt-1">
                            <em><small>Price: ₹<?=$t->price?>/-</small></em>
                            </div>
                        </div>
                        <div class="index border p-3 mt-4">
                            <h6 class="mb-3">What you will learn:</h6>
                            <small>
                                <p class="">
                                    <?=nl2br($t->content)?>
                                </p>
                                <!-- <ol class="pl-3">
                                    <li>Introduction to python</li>
                                    <li>OOPS concepts</li>
                                    <li>Conditions, Loops  & File handling.</li>
                                    <li>Connecting to server.</li>
                                    <li>Live project.</li>
                                </ol> -->
                            </small>
                        </div>
                        <a href="<?=base_url('contact#contact')?>" class="js-tilt cta px-3 py-sm-2 py-2 text-white d-flex justify-content-center align-items-center mt-3">
                            <span class="d-inline-flex">Enquire now<i class="material-icons ml-2">arrow_right_alt</i>
                        </a>
                    </div>
                </div>
            <?php }?>

        </div>
        </div>
    </section>

   <section></section>
  