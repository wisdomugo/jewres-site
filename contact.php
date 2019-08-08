<?php require_once("includes/header.php");?>
<main>
    <!--<section class="section-base section-full-width no-padding">
        <div class="container">
            <div class="google-map" data-marker="media/marker.png" data-zoom="12" data-coords="51.5156177,-0.0919983"></div>
        </div>
    </section>-->
    <section class="section-base section-color colored-sec">
        <div class="container">
          <hr class="space" />
            <div class="row">

                <div class="col-lg-8">
                    <div class="title">
                        <h2>Write us</h2>
                        <p>Contact us from here</p>
                    </div>
                    <form action="themekit/scripts/contact-form/contact-form.php" class="form-box form-ajax" method="post" data-email="example@domain.com">
                        <div class="row">
                            <div class="col-lg-6">
                                <input id="name" name="name" placeholder="Name" type="text" class="input-text plain-sec" required>
                            </div>
                            <div class="col-lg-6">
                                <input id="email" name="email" placeholder="Email" type="email" class="input-text plain-sec" required>
                            </div>
                        </div>
                        <textarea id="messagge" name="messagge" class="input-textarea plain-sec" placeholder="Write something ..." required></textarea>
                        <div class="form-checkbox">
                            <input type="checkbox" id="check" name="check" value="check" required>
                            <label for="check">You accept the terms of service and the privacy policy</label>
                        </div>
                        <button class="btn btn-xs" type="submit">Send message</button>
                        <div class="success-box">
                            <div class="alert alert-success">Congratulations. Your message has been sent successfully</div>
                        </div>
                        <div class="error-box">
                            <div class="alert alert-warning">Error, please retry. Your message has not been sent</div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <hr class="space visible-md" />
                    <div class="boxed-area">
                        <h3>Contacts</h3>
                        <p>
                            Here is our location:<br>
                            <b>Block 4 Industrial Cluster, Poly Road Naze,
                               Owerri, Imo State Nigeria</b>
                        </p>
                        <ul class="text-list text-list-line">
                            <li><b>Email</b><hr /><p>info@jewres.com</p></li>
                            <li><b>Phone</b><hr /><p>+234(0)9033156076</p></li>
                        </ul>
                        <hr class="space-sm" />
                        <div class="icon-links icon-social icon-links-grid social-colors">
                            <a class="facebook"><i class="icon-facebook"></i></a>
                            <a class="twitter"><i class="icon-twitter"></i></a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
<?php require_once("includes/footer.php");?>
