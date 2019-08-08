<?php require_once("includes/header.php"); ?>


<section class="section-base">
  <hr class="space" />   <hr class="space" />
    <div class="container">
        <div class="row align-items-center" data-anima="fade-bottom" data-time="1000">

            <div class="col-lg-6">
                <img src="http://via.placeholder.com/654x456" alt="" />
            </div>
            <div class="col-lg-6">
                <div class="title">
                    <h2>Software Development</h2>
                    <p>WEB, MOBILE APPS</p>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                    Utenim ad minim veniam quis nostrud exercitation ullamco.
                </p>
                <a href="#" class="btn btn-xs">Learn more</a>
            </div>
        </div>
        <hr class="space-sm" />
        <hr class="space visible-md" />
        <div class="row align-items-center" data-anima="fade-bottom" data-time="1000">
            <div class="col-lg-6">
                <div class="title">
                    <h2>Embedded Systems</h2>
                    <p>HARDWARE, CHIPS PROGRAMMING</p>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                    Utenim ad minim veniam quis nostrud exercitation ullamco.
                </p>
                <a href="#" class="btn btn-border btn-xs">Learn more</a>
            </div>
            <div class="col-lg-6">
                <img src="http://via.placeholder.com/590x411" alt="" />
            </div>
        </div>
        <div class="row align-items-center" data-anima="fade-bottom" data-time="1000">
            <div class="col-lg-6">
                <img src="http://via.placeholder.com/654x456" alt="" />
            </div>
            <div class="col-lg-6">
                <div class="title">
                    <h2>Telematics</h2>
                    <p>CCTV, TRACKING, MONITORING, IOT</p>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                    Utenim ad minim veniam quis nostrud exercitation ullamco.
                </p>
                <a href="#" class="btn btn-xs">Learn more</a>
            </div>
        </div>
        <hr class="space-sm" />
        <hr class="space visible-md" />
        <div class="row align-items-center" data-anima="fade-bottom" data-time="1000">
            <div class="col-lg-6">
                <div class="title">
                    <h2>ICT Consultancy & Educational Services</h2>
                    <p>EDUCATION, CONSULTANCY, INTERNSHIP</p>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                    Utenim ad minim veniam quis nostrud exercitation ullamco.
                </p>
                <a href="#" class="btn btn-border btn-xs">Learn more</a>
            </div>
            <div class="col-lg-6">
                <img src="http://via.placeholder.com/590x411" alt="" />
            </div>
        </div>
        <hr class="space-sm" />
        <hr class="space visible-md" />
        <div class="row align-items-center" data-anima="fade-bottom" data-time="1000">
            <div class="col-lg-6">
                <img src="http://via.placeholder.com/654x456" alt="" />
            </div>
            <div class="col-lg-6">
                <div class="title">
                  <h2>RENEWABLE ENERGY</h2>
                  <p>Solar / Inverter Energy Systems</p>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                    Utenim ad minim veniam quis nostrud exercitation ullamco.
                </p>
                <a href="#" class="btn btn-xs">Learn more</a>
            </div>
        </div>

    </div>
</section>


<section class="section-base colored-sec">
  <hr class="space" /><hr class="space" />
  <div class="container">
    <div class="row" data-anima="fade-bottom" data-time="1000">
      <div class="col-lg-6">
        <div class="title">
          <h2>Request a free<br />consultation with us</h2>
          <p>Contact us now</p>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
        </p>
        <a href="#" class="btn-text active">You accept our policy</a>
      </div>
      <div class="col-lg-6">
        <form id="UCiFI" action="thtmekit/scripts/php/contact-form.php" class="form-box form-ajax form-ajax-wp" method="post" data-email="">
          <div class="row">
            <div class="col-lg-6">
              <input id="Name" name="Name" placeholder="Name" type="text" class="input-text" required="">
            </div>
            <div class="col-lg-6">
              <input id="Email" name="Email" placeholder="Email" type="email" class="input-text" required="">
            </div>
          </div>
          <hr class="space-xs" />
          <textarea id="Message" name="Message" placeholder="Message" class="input-textarea" required=""></textarea>
          <button class="btn btn-xs" type="submit">Send message</button>
          <div class="success-box">
            <div class="alert alert-success">
              Congratulations. Your message has been sent successfully.
            </div>
          </div>
          <div class="error-box">
            <div class="alert alert-warning">
              Error, please retry. Your message has not been sent.
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<?php require_once("includes/footer.php"); ?>
