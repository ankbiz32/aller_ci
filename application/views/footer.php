
   <section class="contact pt-0" id="contact">
        <?php if($this->uri->segment(1)=='contact'){ ?>
                <img src="./assets/patterns/wave2.png" alt="p" class="pattern1">
                <div class="clients-container main-contact">
                        <div class="clients py-5 align-items-start text-sm-center">

                            <!-- <img src="./assets/patterns/wave_white.png" alt="p" class="pattern6"> -->
                            <div class="email">
                                <div class="mb-2 d-flex align-items-center justify-content-sm-center">
                                    <span class="material-icons">location_on</span> <strong>&nbsp; ADDRESS</strong>
                                </div>
                                <p>
                                    <?=nl2br($web->address_line1)?>
                                </p>
                            </div>

                            <div class="phone my-5 my-sm-0">
                                <div class="mb-2 d-flex align-items-center justify-content-sm-center">
                                    <span class="material-icons">email</span><strong>&nbsp; E-MAIL</strong>
                                </div>
                                <p>
                                <?=$web->email?>
                                </p>
                            </div>

                            <div class="address">
                                <div class="mb-2 d-flex align-items-center justify-content-sm-center">
                                    <span class="material-icons">phone</span>
                                    <strong>&nbsp; CONTACT NO.</strong>
                                </div>
                                <p>
                                    
                                <?=$web->phone1?> <br> 
                                <?=$web->phone2?>
                                </p>
                            </div>

                        </div>
                </div>
        <?php } else{ ?>
                <img src="<?=base_url()?>assets/patterns/wave2.png" alt="p" class="pattern1">
                <div class="clients-container">
                        <div class="clients">
                            <marquee behavior="" direction=""  onmouseover="this.stop();" onmouseout="this.start();" class="py-5 ">
                            <?php foreach($clients as $cl){?>
                                <img src="<?=base_url()?>assets/clients/<?=$cl->img_src?>" alt="" class="">
                            <?php }?>
                            </marquee>
                        </div>
                </div>
        <?php } ?>
    
        <div class="form-container ml-sm-5 ml-0 bg-contact pb-5">
           <div class="container">
                <div class="row main-row flex-wrap-reverse">
                    <div class="col-md-7">
                        <h1 class="lato mb-5 text-black">Start a new project</h1>
                        <form class="" action="<?=base_url('Home/enquiry')?>" method="POST">
                            <div class="row justify-content-between flex-sm-nowrap">
                                
                                <!-- For security -->
                                <input name="email" type="hidden"> 
                                <input name="token" id="token" type="hidden"> 
                                <!-- / For security  -->

                                <div class="col-md-6 mb-sm-0 mb-4 float-group">
                                    <input name="name" type="text" class="" id="name" required>
                                    <label for="name">Name *</label>
                                </div>
                                <div class="col-md-6 float-group">
                                    <input name="some_info_for_sending_this_msg" type="email" id="email" required>
                                    <label for="email">Email *</label>
                                </div>
                            </div>
                            <div class="row mt-4 mb-5">
                                <div class="col float-group">
                                    <textarea name="message" id="message" rows="5" required maxlength='300' required></textarea>
                                    <label for="message">Enter your message here *</label>
                                <small class="d-block text-right mt-1"><small>** Max. 300 characters</small></small>
                                </div>
                            </div>
                            <button href="" class="btn bg-blue text-white js-tilt">
                                <span class="d-inline-flex">Submit <i class="material-icons ml-2">arrow_right_alt</i> </span>
                            </button>
                        </form>
                    </div>
                    <div class="col-md-5 text-sm-right text-center">
                        <img src="<?=base_url()?>assets/brand/tree.png" class="w-100" alt="tree">
                    </div>
                </div>
           </div>
       </div>
   </section>

   <footer class="bg-blue pt-5 pb-3">
       <div class="container">
        <div class="row flex-sm-nowrap align-items-center">
            <div class="col-sm-3     text-sm-left text-center">
                <a href="" class="bg-light d-inline-block py-2 px-5 footer-logo">
                    <img src="<?=base_url()?>assets/brand/logo_new.png" height="65" alt="Logo">
                </a>
            </div>
            <div class="col-sm-9 text-sm-right text-center mt-sm-0 mt-4">
                <div class="links mt-2">
                    <a href="<?=base_url()?>" class="mr-4 mb-3 d-inline-block text-white">Home</a>
                    <a href="<?=base_url('about-us')?>" class="mr-4 mb-3 d-inline-block text-white">About</a>
                    <a href="<?=base_url('services')?>" class="mr-4 mb-3 d-inline-block text-white">Services</a>
                    <a href="<?=base_url('trainings')?>" class="mr-4 mb-3 d-inline-block text-white">Trainings</a>
                    <!-- <a href="<?=base_url('blog')?>" class="mr-4 mb-3 d-inline-block text-white">Blogs</a> -->
                    <a href="<?=base_url('portfolio')?>" class="mr-4 mb-3 d-inline-block text-white">Portfolio</a>
                    <a href="<?=base_url('contact')?>" class="mr-4 mb-3 d-inline-block text-white">Contact us</a>
                    <a href="<?=base_url('privacy-policy')?>" class="text-white">Privacy Policy</a>
                </div>
            </div>
        </div>

        <hr class="mt-4 mb-4 bg-light">

        <div class="row mb-1 flex-sm-nowrap flex-wrap align-items-center text-white mt-0">
            <div class="col-sm-8">
                <p class="mb-0 text-sm-left text-center">&copy; <?=date('Y')?> ALLER TECHNOLOGIES - All rights reserved</p>
            </div>
            <div class="col-sm-4 text-sm-right text-center mt-sm-0 mt-4">
                    <a href="<?=$web->fblink?>" target="_blank" class="">
                        <img src="<?=base_url()?>assets/facebook-w.svg" height="20" alt="Fb">
                    </a>
                    <a href="<?=$web->twitterlink?>" target="_blank" class="mx-3">
                        <img src="<?=base_url()?>assets/twitter-w.svg" height="20" alt="twitter">
                    </a>
                    <a href="<?=$web->linkedinlink?>" target="_blank" class="">
                        <img src="<?=base_url()?>assets/linkedin-w.svg" height="20" alt="LinkedIn">
                    </a>
            </div>
        </div>
       </div>
   </footer>

   <div class="float-whatsapp">
        <a target="_blank" href="https://wa.me/919765718881?text=Hello%2C%0AI%20need%20to%20enquire%20about%20your%20services.">
            <img src="<?=base_url()?>assets/whatsapp.svg" alt="">
        </a>
   </div>

    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/owl.carousel.js"></script>
    <script src="<?=base_url()?>assets/js/tilt.jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/float_label.js"></script>
    <script src="<?=base_url()?>assets/js/spotlight.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="<?=base_url()?>assets/js/app.js"></script>
    
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('<?=RECAPTCHA_SITE_KEY?>', {action: 'homepage'}).then(function(token) {
                document.getElementById("token").value = token;
            });
        });
        
        var base_url = '<?=base_url()?>';
        $(document).ready(function(){
            const Toast = Swal.mixin({
                showConfirmButton: false,
                timer: 10000
            });

            <?php if($this->session->flashdata('success') || $message = $this->session->flashdata('failed')):
                $class = $this->session->flashdata('success') ? 'success' : 'error';
            ?>
                
                Toast.fire({
                    icon: '<?=$class?>',
                    text: '<?= $this->session->flashdata('success'); ?>
                            <?= $this->session->flashdata('failed'); ?>'
                });
            <?php 
                endif;
            ?>
        });
    </script>
    
</body>
</html>






