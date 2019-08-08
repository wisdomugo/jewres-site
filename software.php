<?php require_once("includes/header.php");
$pagename = "Software Development - Mobile and Web"; ?>
<main>


    <section class="section-base">
        <div class="container">

          <div class="row">
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="solutions.php">Solutions</a></li>
                <li><a href="#"><?php echo $pagename ?></a></li>
            </ol>
          </div>

            <div class="row row-fit-lg" data-anima="fade-bottom" data-time="1000">
                <div class="col-lg-6">
                      <hr class="space-sm" />    <hr class="space-sm" />
                    <a class="img-box btn-video lightbox" data-lightbox-anima="fade-top" href="">
                        <img src="http://via.placeholder.com/800x530" alt="">
                    </a>
                </div>
                <div class="col-lg-6">
                      <hr class="space" />    <hr class="space" />
                       <hr class="space-sm" />
                    <div class="title">
                        <h2>Software Development</h2>
                        <p>Web, Mobile Apps</p>
                    </div>
                    <p>
                        We design and develop websites for clients, enterprise web applications for B2B and B2C business interactions.

                    </p>

                </div>
            </div>

            <div class="row row-fit-lg" data-anima="fade-bottom" data-time="1000">
              <div class="col-lg-12">
                <p>

                </p>
              </div>
            </div>
        </div>
    </section>

    <section class="section-base colored-sec">
        <div class="container">
            <div class="row" data-anima="fade-bottom" data-time="1000">
              <div class="col-lg-6">
                  <div class="title">
                      <h2>Feel free,<br />Consult us on that project / idea</h2>
                      <p>Contact us now</p>
                  </div>
                  <p>

                  </p>
                  <a href="#" class="btn-text active">24hrs maximum response</a>
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



</main>
<?php require_once("includes/footer.php"); ?>
