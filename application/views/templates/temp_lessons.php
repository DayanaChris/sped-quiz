
<html>
<!-- MODERNAPP.CO CHATBOT SCRIPT -->
<!-- <script type="text/javascript" src="https://embed.modernapp.co/chat?code=3e79f97a386fb57c27bd29b039985a48"></script> -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SPEDEMY</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/app.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">


    <!-- Fonts -->
      <link rel="dns-prefetch" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">


      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


 <style>

             body {

                 font-family: "Lato", sans-serif;
                 background-repeat: repeat;
                 font-family: 'Raleway', sans-serif;
                 font-weight: 100;
                 height: 100vh;
                 margin: 0;
             }
            .learn_alphabets{background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/sub_menu/bg_alphabet.jpg");}
            .learn_numbers{background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/sub_menu/bg_numbers.jpg");}
            .learn_shapes{  background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/sub_menu/bg_shapes.jpg");}
            .learn_colors{background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/sub_menu/bg_colors.jpg");  }
            .learn_action_words{background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/sub_menu/bg_action_words.jpg"); }
            .learn_facial_expressions{background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/sub_menu/bg_facial_expressions.jpg")}
            .main_menu_bg{background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/blue.png")}

            img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            }
            img.center {
            display: block;
            margin: 0 auto;
            }
            .log{
                margin-top: 5%;
                width:70%;
            }
           .back{
            width: 15%;
            padding: 10px;
            margin-top: 0px;
            margin-bottom: 20px;
            border: 0;
            background: transparent;
            }

            .marg0{
                margin-top:2%;
                margin-left:25%;

            }
            .marg1{
                margin-left: 17%;
                margin-bottom: 2%;
            }
            .marg2{
                margin-left: 25%;
                margin-bottom: 2%;
            }
            .marg3{
                margin-left: 28%;
            }
            .marg4{
                margin-left: 3%;
            }



            /*  vowel margin*/
            .marg_vowel0{
                margin-top:2%;
                margin-left:25%;

            }
            .marg_vowel1{
                margin-left: 20%;
                margin-bottom: 2%;
            }
            .marg_vowel2{
                margin-left: 25%;
                margin-bottom: 2%;
            }
            .marg_vowel3{
                margin-left: 28%;
            }
            .marg_vowel4{
                margin-left: 3%;
            }
            /* hover */
            .zoom:hover {
                -ms-transform: scale(1.3); /* IE 9 */
                -webkit-transform: scale(1.3); /* Safari 3-8 */
                transform: scale(1.3);
            }

             @media screen and (max-width: 576px) {

                .btn{
                    width: 90%;
                }
                .pad{
                    padding-bottom: 50px;
                }
                .log{
                    margin-top: 5%;
                    width:100%;
                }
                .back{
                margin-top: 0%;
                width:50%;
                }
                /*  alphabets*/
                .marg_vowel0{
                    margin-left:20%;
                    margin-top: 15%;

                }

                .marg_vowel1,.marg_vowel3,.marg_vowel4,.marg_vowel2{
                    margin-left:8%;
                }
            }


             @media screen and (max-width: 767px) {
            .btn{ width: 80%; }
            .pad{ padding-bottom: 50px;}
            .log{ margin-top: 5%;
                    width:100%;             }
            .back{margin-top: 5%;
                width:30%;                  }

                .marg_vowel0{
                    margin-top: 15%;

                    margin-left:20%;

                }
                .marg_vowel1,.marg_vowel3,.marg_vowel4,.marg_vowel2{
                    margin-left:8%;
                }
            }

            @media screen and (max-height: 767px) {
            .btn{ width: 90%; }
            .pad{ padding-bottom: 50px;         }
            .log{
                margin-top: 5%;
                width:70%;
            }
            .back{
            margin-top: 0%;
            width:40%;
            }


            }

            @media screen and (max-width:992px){
            .btn{
                width: 80%;
            }
                .pad{
                padding-bottom: 50px;
            }
            .back{
                margin-top: 5%;
                width:20%;
            }
            }

                /* galaxy s5
                @media screen and (min-height:992px){
                .btn{
                    width: 100%;
                }
                .log{
                        margin-top: 5%;
                        width:100%;
                } .pad{

                    padding-top: 10px;

                    padding-bottom: 150px;
                }
                .backsmall{
                    width:75%;
                }
                }  */


                @media screen and (max-width:1200px){
                .btn{
                    width: 80%;
                }
                    .pad{
                    padding-bottom: 50px;
                }
                .back{
                    margin-top: 5%;
                    width:20%;
                }
                }


                @media screen and (min-height:1200px){
                .btn{
                    width: 100%;
                }
                .log{
                        margin-top: 5%;
                        width:100%;
                } .pad{

                    padding-top: 150px;

                    padding-bottom: 150px;
                }
                .back{
                    width:35%;
                }
                }

 </style>

 </head>
