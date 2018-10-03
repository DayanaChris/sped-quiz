
    <div class="footer">
              <nav class="navbar navbar-expand-md   navbar-laravel navbar-dark " style=" background-color: #78569a;
              position: fixed;
              left: 0;
              bottom: 0;
              width: 100%;
              margin-bottom: 0;
              text-align: center;
              margin-top: 100%;
              " >

              <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentfooter" aria-controls="navbarSupportedContentfooter" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContentfooter">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                        </ul>

                        <ul class="navbar-nav mr-auto" style="font-size: 20px;">
                          <li class="nav-item active"><a class="nav-link" href="<?php echo base_url(); ?>"> <b>Home</b> <span class="sr-only">(current)</span></a> </li>
                          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>about"><b>About</b></a> </li>
                          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>contact"><b>Contact</b></a> </li>

                        </ul>
                    </div>
            </nav>
          </div>

  </div>





  <!-- START OF JS -->
            <!-- <script>
                        CKEDITOR.replace( 'editor1' );
                    </script> -->

                    <script src="<?php echo base_url(); ?>assets/jscolor.js"></script>

                    <script src="<?php echo base_url(); ?>assets/js/app.js"></script>

                    <script src="<?php echo base_url(); ?>assets/js/animate.js"></script>

                    <!--[if lt IE 9]>
                    <script src="../assets/global/plugins/respond.min.js"></script>
                    <script src="../assets/global/plugins/excanvas.min.js"></script>
                    <script src="../assets/global/plugins/ie8.fix.min.js"></script>
                    <![endif]-->
                    <!-- BEGIN CORE PLUGINS -->
                    <script src="<?php echo base_url()?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
                    <script src="<?php echo base_url()?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
                    <script src="<?php echo base_url()?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
                    <script src="<?php echo base_url()?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
                    <script src="<?php echo base_url()?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
                    <script src="<?php echo base_url()?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
                    <!-- END CORE PLUGINS -->
                    <!-- BEGIN PAGE LEVEL PLUGINS -->
                    <script src="<?php echo base_url()?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
                    <script src="<?php echo base_url()?>assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
                    <script src="<?php echo base_url()?>assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
                    <!-- END PAGE LEVEL PLUGINS -->
                    <!-- BEGIN THEME GLOBAL SCRIPTS -->
                    <script src="<?php echo base_url()?>assets/global/scripts/app.min.js" type="text/javascript"></script>
                    <!-- END THEME GLOBAL SCRIPTS -->
                    <!-- BEGIN PAGE LEVEL SCRIPTS -->
                    <script src="<?php echo base_url()?>assets/pages/scripts/login.min.js" type="text/javascript"></script>
                    <!-- END PAGE LEVEL SCRIPTS -->
                    <!-- BEGIN THEME LAYOUT SCRIPTS -->
                    <!-- END THEME LAYOUT SCRIPTS -->


                    <script>
                        $(document).ready(function()
                        {
                            $('#clickmewow').click(function()
                            {
                                $('#radio1003').attr('checked', 'checked');
                            });
                        })
                    </script>

                    <script type="text/javascript">
                      function Confirm(form){
                      alert("Record insert successfully!");
                      form.submit();
                      }
                      </script>
                </body>

            </html>
