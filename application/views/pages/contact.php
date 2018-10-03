
<?php
  $this->load->view('templates/header');
  $this->load->view('templates/nav');  ?>



<body class="about_bg">



  <div class="container" style="padding-top: 70px;">

  <div class="portlet   bordered" >
      <div class="portlet-title" >
        <div class="card" >
           <div class="card-header" style="text-align: center; background:#FF83C9;padding: 40px">  <h1> <b> CONTACT US </b></h1></div>
        </div>



      </div>

      <div class="container" style=" margin-top: 0%;margin-bottom: 2%;color: black; font-size: 20px;" id="shad">
                          <div class="card">

                                  <div class="container col-md-8 col-md-offset-2">
                                          <div class=" container">

                                              <form class="form-horizontal" method="post">

                                                  <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                                                  <fieldset>
                                                      <legend class="text-center" style="font-size: 20px;">Send Us your Enquiry</legend>
                                                           <div class="form-group">
                                                            <label for="usr" >Name:</label>
                                                            <input type="text" class="form-control" id="name" name="name">
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="email">Email:</label>
                                                            <input type="text" class="form-control" id="email" name="email">
                                                          </div>
                                                          <div class="form-group">
                                                          <label for="message">Message</label>
                                                          <textarea class="form-control" rows="3" id="enq_message" name="enq_message"></textarea>
                                                          <span class="help-block">Feel free to ask us any question.</span>

                                                      </div>
                                                      <div class="form-group">
                                                          <div class="col-lg-10 col-lg-offset-2">
                                                              <button class="btn btn-default" style="font-size: 20px;">Cancel</button>
                                                              <button type="submit" class="btn btn-primary " style="font-size: 20px;">Submit</button>
                                                          </div>
                                                      </div>
                                                  </fieldset>
                                              </form>

                                          </div>
                                      </div>
                          </div>
      </div>



                            <div class="card" style="padding: 40px">
                                    <div class="container content center  " style="max-width:1000px"  >  <h3  >
                                                    <p class="text-justify" style=" color:#5A2971;"> <b> CONTACT US INFO </b></p></h3>
                                    </div>
                            </div>


  </div>
</div>


<?php  $this->load->view('templates/footer'); ?>
