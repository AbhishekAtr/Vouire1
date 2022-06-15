<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "assets/include/css-url.php"; ?>
</head>

<body class="page">
  <?php include "assets/include/header.php"; ?>
  <!-- Start page-header section -->
  <section class="page-header-section">
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="col-md-6 text-center  title-wrap">
          <h1 class="page-title">Conatct Us</h1>
          <ul class="page-nav">
            <li><a href="index.php">Home - </a></li>
            <li class="active">Contact Us</li>
          </ul>
        </div>
      </div>
    </div>
    <img class="bottom-curve" src="assets/img/page-header-bg-curve.png" alt="" />
  </section>
  <!-- End page-header section -->
  <!-- Start contact section -->
  <section class="contact-section section-gap">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-8">
          <h4 class="text-center">
            Tell us about your Project ideas or <br />
            <span>Just say hello.</span>
          </h4>
          <form class="row contact-form-wrap" id="contactform" method="POST">
            <div class="col-md-6">
              <div class="form-group">
                <input name="name"  class="form-control" type="text" placeholder="Name*" onfocus="this.placeholder=''" onblur="this.placeholder='Name*'" required />
              </div>

            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input name="email"  class="form-control" type="email" placeholder="E-mail*" required />
              </div>

            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input name="phone"  class="form-control" type="text" placeholder="Phone Number*"  onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" minlength="10" maxlength="10" required />
              </div>

            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input name="subject"  class="form-control" type="text" placeholder="Subject*" />
              </div>

            </div>
            <div class="col-md-12">
              <div class="form-group">
                <textarea name="messege"  class="form-control" rows="8" placeholder="Message" onblur="this.placeholder='Message*'"></textarea>
              </div>

            </div>
            <button type="button" class="btn-style mx-auto" onclick="submitForm('contactform')">Send Message</button>
            <div id="msg" class="message"></div>
          </form>
        </div>
      </div>
      <div class="row address-wrap">
        <div class="col-md-4">
          <div class="single-address">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <h4>Working Hours</h4>
            <p>
              (Mon to Sat): 10.00 AM to 07.00 PM <br />
              (Sunday): Holiday
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-address">
            <i class="fa fa-location-arrow" aria-hidden="true"></i>
            <h4>Office Address</h4>
            <p>H. No 70, Comrade Colony, Near Kheri Markanda, Kurukshetra, Haryana – 136118</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="single-address">
            <i class="fa fa-mobile" aria-hidden="true"></i>
            <h4>Contact Details</h4>
            <p>
              Phone : <a href="tel:+91-9354494685">+91-9354494685</a>
              <br />
              Support:
              <a href="mailto:support@vouiber.com">support@vouiber.com</a>
              <a href="mailto:info@vouiber.com">info@vouiber.com</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div id="snackbar">Form Submitted Succefully</div>
  <!-- End contact section -->
  <?php include "assets/include/footer.php"; ?>
  <?php include "assets/include/js-url.php"; ?>
</body>

</html>