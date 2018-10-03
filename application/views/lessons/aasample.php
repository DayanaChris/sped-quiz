<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SPEDEMY.com</title>
    <link rel="stylesheet" href="http://localhost/ciblog/assets/css/style.css">
    <link rel="stylesheet" href="http://localhost/ciblog/assets/css/app.css">
    <link rel="stylesheet" href="http://localhost/ciblog/assets/css/animate.css">


    <!-- <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script> -->
    <!-- Fonts -->
      <link rel="dns-prefetch" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">


            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>


      <style>
      .modal-full {
          min-width: 100%;
          margin: 0;
      }

      .modal-full .modal-content {
          min-height: 100vh;
      }

   </style>

 </head>
 <body class="run-animation">
   <a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal">Launch modal</a>

   <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
       <div class="modal-dialog modal-full" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title">Modal</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">×</span>
                   </button>
               </div>
               <div class="modal-body p-4" id="result">
                       <p>The grid inside the modal is responsive too..</p>
                       <div class="row">
                           <div class="col-sm-6 col-lg-3">
                               Content
                           </div>
                           <div class="col-sm-6 col-lg-3">
                               Content
                           </div>
                           <div class="col-sm-6 col-lg-3">
                               Content
                           </div>
                           <div class="col-sm-6 col-lg-3">
                               Content
                           </div>
                           <div class="col-sm-6 col-lg-3">
                               Content
                           </div>
                           <div class="col-sm-6 col-lg-3">
                               Content
                           </div>
                           <div class="col-sm-6 col-lg-3">
                               Content
                           </div>
                           <div class="col-sm-6 col-lg-3">
                               Content
                           </div>
                       </div>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
               </div>
           </div>
       </div>
   </div>




       <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
       <script src="<?php echo base_url(); ?>assets/js/animate.js"></script>


   </body>
 </html>
