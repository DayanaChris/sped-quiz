
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SPEDEMY.com</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/app.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">


    <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
    <!-- Fonts -->
      <link rel="dns-prefetch" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">


      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>

             .btn{
                width: 15%;
                margin-top: 0px;
                padding:10px;
                border: 0;
                background: transparent;
            }

             body {
                 font-family: "Lato", sans-serif;
                 background-color: #E40078;
                 background-repeat: repeat;
                 font-weight: 100;
                 height: 100vh;
                 margin: 0;
             }

             .contA {
                 background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Alphabet/A/board.png");
                 height: 600px;
                 max-width:80%;
                 background-repeat: no-repeat;
                margin-bottom: 10px;
             }

             .contC {
                 background-image: url("<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Alphabet/C/board.png");
                 height: auto;
                 max-width:80%;
                 background-repeat: no-repeat;
                margin-top: 10px;
             }
             .letter{ width:13%; padding-right: 0%;  }
                .lettersmall{ width:12%;   padding-right: 0%; }

                .color{ width: 13%;  }
                .number{width: 12%; }
                .number1margin{margin-left: 25%}
                .number2margin{margin-left: 45%}

                .shape0margin{margin-left: 25%}
                .shape1margin{margin-left: 20%}
                .shape2margin{margin-left: 10%}

                .letterA{width: 100%;  }



           .back{
            width: 15%;
            padding: 10px;
            margin-top: 0px;
            margin-bottom: 10px;
            border: 0;
            background: transparent;
            }
            .marg0{ margin-top:2%; margin-left:12%; }
            .marg1{ margin-left: 20%; }
            .margine2{ margin-left: 15%; }
            .marg3{  margin-left: 9%; }
            .marg4{ margin-left: 0.5%; }

            /* hover */
            .zoom:hover {
                -ms-transform: scale(1.3); /* IE 9 */
                -webkit-transform: scale(1.3); /* Safari 3-8 */
                transform: scale(1.3);
            }
             @media  screen and (max-width: 576px) {

                .btn{ width: 20%; }
                .letter,.lettersmall{  width: 30%; }
                .margine2{  margin-left:0%;  }
                .marg0,.marg1,.marg3,.marg4{ margin-left:0%;  }

                .back{
                margin-top: 0%;
                width:50%;
                }
                .zoom:hover {
                -ms-transform: scale(1.1); /* IE 9 */
                -webkit-transform: scale(1.1); /* Safari 3-8 */
                transform: scale(1.1);
                }

                .color2margin{  margin-left:50%; }
                .number{width: 27%; }
                .number1margin{margin-left: 0%}
                .number2margin{margin-left: 0%}


            }

             @media  screen and (min-height: 1200px) {
                .btn{
                    width: 20%;
                }
                .letter,.lettersmall{
                    width: 30%;
                }
                .margine2{
                    margin-left:0%;
                }
                .marg0,.marg1,.marg3,.marg4{
                    margin-left:0%;
                }

                .back{
                margin-top: 0%;
                width:50%;
                }
                .zoom:hover {
                -ms-transform: scale(1.1); /* IE 9 */
                -webkit-transform: scale(1.1); /* Safari 3-8 */
                transform: scale(1.1);
                }
                .color{
                    width: 30%;
                }

                .color2margin{
                    margin-left:20%;
                }
                .number{width: 27%; }
                .number1margin{margin-left: 0%}
                .number2margin{margin-left: 0%}
            }
            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img {
                width: 30%;
                margin: auto;
            }


            .centered {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
            .container {
                position: relative;
                text-align: center;
                color: #A20000;
            }




 </style>

 </head>

 <body class="run-animation">

        <div class="container-fluid" >
            <br>
            <div id="myCarousel" class="carousel slide"  >
              <!-- Indicators -->
              <ol class="carousel-indicators" >
                <li data-target="#myCarousel"   class="active"></li>
                <li data-target="#myCarousel"></li>
                <li data-target="#myCarousel"  ></li>
                <li data-target="#myCarousel"  ></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner  " role="listbox" >

                <div class="item active " >
                        <div class="container">
                                <img  src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Alphabet/A/head.png" style="width:80%; margin-top:2%">

                                <div class="centered">
                                        <h1 class="font-weight-bold"> <big> What starts with letter </big><big><big> A?</big></big></h1>
                                </div>
                        </div>
                        <div class="container">
                                <div class="row">
                                        <div class="col-sm-4  " style="margin-top:10%; margin-bottom:5%">   <img class="zoom letterA " src="SPEDEMY/Lessons/Alphabet/A/choice.png"  alt="Letter A"  ></div>
                                        <div class="col-sm-4  " style="margin-top:10%">   <img class=" zoom letterA " src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Alphabet/A/choice.png"  alt="Letter A"  ></div>
                                        <div class="col-sm-4  " style="margin-top:10%">   <img class="zoom letterA " src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Alphabet/A/choice.png"  alt="Letter A"  ></div>
                                </div>
                        </div>
                </div>
                <div class="item  ">
                        <div class="container">
                                <img  src="SPEDEMY/Lessons/Alphabet/A/head.png" style="width:80%; margin-top:2%">
                                <div class="centered">
                                        <h1 class="font-weight-bold"> <big> What starts with letter </big><big><big> A?</big></big></h1>
                                </div>
                        </div>
                        <div class="container">
                                <div class="row">
                                        <div class="col-sm-4  " style="margin-top:10%">   <img class="zoom letterA   " src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Alphabet/A/choice.png"  alt="Letter A"  ></div>
                                        <div class="col-sm-4  " style="margin-top:10%">   <img class="zoom letterA " src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Alphabet/A/choice.png"  alt="Letter A"  ></div>
                                        <div class="col-sm-4  " style="margin-top:10%">   <img class="zoom letterA " src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Alphabet/A/choice.png"  alt="Letter A"  ></div>
                                </div>
                        </div>
                </div>
              </div>


              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">

                <span class=" " aria-hidden="true"><img class="  card-img-top img-fluid zoom btn center back   " style=" width: 100%; margin-top:100%" src="<?php echo site_url(); ?>assets/images/SPEDEMY/Lessons/Alphabet/btn_right.png"   /> </span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

 </body>
 </html>
