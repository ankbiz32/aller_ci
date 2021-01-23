
   <section class="contact pt-0">
       <?php if($this->uri->segment(1)=='contact'){ ?>
            <img src="./assets/patterns/wave2.png" alt="p" class="pattern1">
            <div class="clients-container main-contact">
                    <div class="clients py-5 align-items-start">

                        <img src="./assets/patterns/wave_white.png" alt="p" class="pattern6">
                        <div class="email">
                            <div class="mb-2 d-flex align-items-center">
                                <span class="material-icons">location_on</span> <strong>&nbsp; ADDRESS</strong>
                            </div>
                            <p>
                                Esha House, Shree Datta Marg, <br>
                                Sudarshan Nagar, <br>
                                Near Golande Ram Temple, <br>
                                Chinchwad, Pune, <br> Maharashtra 411033
                            </p>
                        </div>

                        <div class="phone">
                            <div class="mb-2 d-flex align-items-center">
                                <span class="material-icons">email</span><strong>&nbsp; E-MAIL</strong>
                            </div>
                            <p>
                                info@aller.in
                            </p>
                        </div>

                        <div class="address">
                            <div class="mb-2 d-flex align-items-center">
                                <span class="material-icons">phone</span>
                                <strong>&nbsp; CONTACT NO.</strong>
                            </div>
                            <p>
                                020-27486770 <br> 9765918881
                            </p>
                        </div>

                    </div>
            </div>
       <?php } else{ ?>
            <img src="<?=base_url()?>assets/patterns/wave2.png" alt="p" class="pattern1">
            <div class="clients-container">
                    <div class="clients py-5">
                        <img src="<?=base_url()?>assets/clients/EE.png" height="50" alt="" class="">
                        <img src="<?=base_url()?>assets/clients/hdfc.png" height="50" alt="" class="">
                        <img src="<?=base_url()?>assets/clients/TT.png" height="50" alt="" class="">
                        <img src="<?=base_url()?>assets/clients/uti.png" height="50" alt="" class="">
                        <img src="<?=base_url()?>assets/clients/reli.png" height="50" alt="">
                        <img src="<?=base_url()?>assets/clients/uti.png" height="50" alt="" class="">
                        <img src="<?=base_url()?>assets/clients/img.png" height="50" alt="df" class=" ">
                    </div>
            </div>
        <?php } ?>
    
       <div class="form-container ml-sm-5 ml-0 bg-orange pb-5">
           <div class="container">
                <div class="row main-row flex-wrap-reverse">
                    <div class="col-md-7">
                        <h1 class="lato mb-5 text-black">Start a new project</h1>
                        <form class="" action="#">
                            <div class="row justify-content-between flex-sm-nowrap">
                                <div class="col-md-6 mb-sm-0 mb-4 float-group">
                                    <input name="name" type="text" class="" required>
                                    <label for="pname">Name *</label>
                                </div>
                                <div class="col-md-6 float-group">
                                    <input name="email" type="text" required>
                                    <label for="pname">Email *</label>
                                </div>
                            </div>
                            <div class="row mt-4 mb-5">
                                <div class="col float-group">
                                    <textarea name="message" rows="5"></textarea>
                                    <label for="pname">Enter your message here</label>
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
            <div class="col-sm-4 text-sm-left text-center">
                <a href="" class="bg-light d-inline-block py-2 px-4 footer-logo">
                    <img src="<?=base_url()?>assets/brand/aller_logo.png" height="60" alt="Logo">
                </a>
            </div>
            <div class="col-sm-8 text-sm-right text-center mt-sm-0 mt-4">
                <div class="links mt-2">
                    <a href="" class="mr-4 mb-3 d-inline-block text-white">Home</a>
                    <a href="" class="mr-4 mb-3 d-inline-block text-white">Collaboration</a>
                    <a href="" class="mr-4 mb-3 d-inline-block text-white">Careers</a>
                    <a href="" class="mr-4 mb-3 d-inline-block text-white">Blogs</a>
                    <a href="" class="mr-4 mb-3 d-inline-block text-white">Training</a>
                    <a href="" class="text-white">Contact us</a>
                </div>
            </div>
        </div>

        <hr class="my-sm-5 my-3 bg-light">

        <div class="row flex-sm-nowrap flex-wrap align-items-center text-white mt-sm-0 mt-4">
            <div class="col-sm-8">
                <p class="mb-0 text-sm-left text-center">&copy; ALLER TECHNOLOGIES 2020 - All rights reserved</p>
            </div>
            <div class="col-sm-4 text-sm-right text-center mt-sm-0 mt-3">
                <a href="" class="text-white">Privacy policy</a>
            </div>
        </div>
       </div>
   </footer>
   
    <div id="regModal" class="modal">
        <div class="modal-content">
        <div class="modal-header">
            <h3>Farmer Registration</h3>
            <span class="closeModal">&times;</span>
        </div>
        <div class="modal-body">
            <form action="<?=base_url('Home/FarmerReg')?>" method="post" id="regForm">
                <div class="flexer">
                    <div class="form-group">
                        <input type="text" name="name" id="name" required>
                        <label for="name">Name *</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" x-moz-errormessage="Enter Contact no. here" pattern="[6-9]{1}[0-9]{9}" oninvalid="this.setCustomValidity('')" oninput="this.setCustomValidity('')" maxlength="10" title="You can enter only 10 digits starting with 6,7,8, or 9" id="phone" required>
                        <label for="phone">Contact no. *</label>
                    </div>
                </div>
                <div class="flexer">
                    <div class="innerDiv">
                        <div class="form-group">
                            <input type="text" name="city" required>
                            <label for="city">Village/City *</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="occupation" id="occupation" required>
                            <label for="occupation">Occupation *</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="address" id="address" resize="none" maxlength="250" required></textarea>
                        <label for="address">Address *</label>
                    </div>
                </div>
                <div class="flexer">
                    <div class="form-group">
                        <input type="text" name="capacity" id="capacity" required>
                        <label for="capacity">Capacity of Farming/Produce/Land  *</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="land" id="land" required>
                        <label for="land">Total Agriculture Land *</label>
                    </div>
                </div>
                <div class="flexer">
                    <div class="form-group">
                        <input type="text" name="soil" id="soil" required>
                        <label for="soil">Soil Type  *</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="source" id="source" required>
                        <label for="source">Source of Irrigation *</label>
                    </div>
                </div>
                <div class="flexer">
                    <div class="form-group">
                        <input type="text" name="products" id="products" required>
                        <label for="products">Local Agriculture Products *</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="level" id="level" required>
                        <label for="level">Water Level *</label>
                    </div>
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/owl.carousel.js"></script>
    <script src="<?=base_url()?>assets/js/tilt.jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/float_label.js"></script>
    <script src="<?=base_url()?>assets/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    
    <script>
        var base_url = '<?=base_url()?>';
        $(document).ready(function(){
            const Toast = Swal.mixin({
                showConfirmButton: false,
                timer: 3000
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






