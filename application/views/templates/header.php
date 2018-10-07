<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <!-- BEGIN MODERNAPP.CO CHATBOT SCRIPT -->
    <script type="text/javascript" src="https://embed.modernapp.co/chat?code=3e79f97a386fb57c27bd29b039985a48" ></script>
    <!-- END MODERNAPP.CO CHATBOT SCRIPT -->



    <head>
        <meta charset="utf-8" />
        <title>SPEDEMY</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for " name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('/assets/global/plugins/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url()?>assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url()?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url()?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url()?>assets/pages/css/login-2.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />


        <!-- <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css"> -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/app.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">


       </head>

   <style>

              .tally_bg{ background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/tally/back1jpg.jpg"); }


              .about_bg{   background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Contactpage/backg1png.png"); }
              .category_menu_bg{background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/blue.png"); }

               body {
                   /* background-image: url("https://images.pexels.com/photos/35807/rose-red-rose-romantic-rose-bloom.jpg?auto=compress&cs=tinysrgb&h=350"); */
                   font-family: "Lato", sans-serif;
                   background-repeat: no-repeat;
                   /* background-color: ; */
                   color: #fff;
                   font-family: 'Raleway', sans-serif;
                   font-weight: 100;
                   height: 100vh;
                   margin: 0;
               }

               h2 {
            text-shadow: 2px 2px #757474;
                  }

                  .btn{
                     width: 100px;
                     margin-top: 0px;
                     padding:10px;
                     padding-right: 2%;
                     padding-bottom:0;

                     border: 0;
                     background: transparent;
                 }


              .containers{
                  width: 95%;
                  overflow:hidden;
                  /* background: skyblue; */
                  margin: 20px auto;
                  margin-bottom: 100px;
                  padding: 20px 0px;
                  /* padding-bottom: 60px; */
                  padding-left: 5px;

              }
              .containers ul{
                  /* margin: 0px ; */
                  padding: 0px;
              }

              .containers ul li{
                  list-style: none;
                  float: left;
                  width: 27%; /* width sa box sa lesson */
                  height: 180px;
                  margin: 2px 20px 30px 50px ;
                  box-sizing:border-box;
                  /* border:2px solid white; */
              }
              .containers ul li hover{
                 opacity: 0.9;

              }

              @media screen and (max-width:1250px){
                  .containers{
                      /* margin-bottom: 200px; */

                  }
                  .containers ul li{
                      list-style: none;
                  float: left;
                  width: 40%; /* width sa box sa lesson */
                  height: 180px;
                  margin: 2px 20px 30px 50px ;
                  box-sizing:border-box;
                  /* border:2px solid white; */
                  }

                  h2{
                      text-align: center;
                  }
              }
               .wrapper {
                   position: relative;
                   overflow: hidden;
                   }

                   .wrapper:after {
                   content: '';
                   display: block;
                   padding-top: 100%;
                   }

                   .wrapper img {
                   width: auto;
                   height: 100%;
                   max-width: none;
                   position: absolute;
                   left: 50%;
                   top: 0;
                   transform: translateX(-50%);
                   }

                   #shad {
                  opacity: 90;
                  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
              /* transition: opacity 0.3s ease-in-out; */
              }

              /* Scale up the box */
              .box:hover {
              transform: scale(1.2, 1.2);
              display:block;
              }

              /* Fade in the pseudo-element with the bigger shadow */
              .box:hover:after {
              opacity: 1;
              }


              @media screen and (max-width:992px){
                  .containers ul li{

                      text-align: center;
                      width: 50%;
                      /* margin: 20px;  */
                  /* margin: 0px 20px 0px 20px ; */
                  margin: 2px 0px 30px 0px ;
                  }


                    /* Scale up the box */
                    .box:hover {
                  transform: scale(1.03, 1.03);
                  display:block;
                  }

                  /* Fade in the pseudo-element with the bigger shadow */
                  .box:hover:after {
                  opacity: 1;
                  }
                  h2{
                      text-align: center;
                  }



              }
              @media screen and (max-width: 600px) {
                  .containers ul li{
                      width: 90%;
                  }
                  h2{
                      text-align: center;
                  }
              }


   </style>














      <!-- Flash messages -->

          <!-- if user is  registered then it will flash an alert success -->
           <?php if($this->session->flashdata('user_registered')): ?>
             <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
           <?php endif; ?>

           <?php if($this->session->flashdata('post_created')): ?>
             <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
           <?php endif; ?>

           <?php if($this->session->flashdata('post_updated')): ?>
             <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
           <?php endif; ?>

           <?php if($this->session->flashdata('category_created')): ?>
             <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
           <?php endif; ?>

           <?php if($this->session->flashdata('post_deleted')): ?>
             <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
           <?php endif; ?>

           <?php if($this->session->flashdata('login_failed')): ?>
             <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
           <?php endif; ?>

           <?php if($this->session->flashdata('user_loggedin')): ?>
             <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
           <?php endif; ?>

            <?php if($this->session->flashdata('user_loggedout')): ?>
             <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
           <?php endif; ?>

           <?php if($this->session->flashdata('category_deleted')): ?>
             <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
           <?php endif; ?>
