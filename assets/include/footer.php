<!-- Start footer section -->
<footer class="footer-section">
  <div class="container">
    <div class="row footer-widget-wrap">
      <div class="col-md-3 footer-widget-col footer-left">
        <a href="#">
          <img src="assets/img/logo_v.png" alt="" />
        </a>
        <p>We have developed creative expertise in our work.
        </p>
        <ul class="social-links">
          <li>
            <a href="https://www.facebook.com" target="_blank"><i class="icofont-facebook"></i></a>
          </li>
          <li>
            <a href="https://twitter.com" target="_blank"><i class="icofont-twitter"></i></a>
          </li>
          <li>
            <a href="https://www.linkedin.com" target="_blank"><i class="icofont-linkedin"></i></a>
          </li>
        </ul>
      </div>
      <div class="col-md-3 footer-widget-col footer-bottom">
        <h4 class="widget-title">Services</h4>
        <ul>
          <li><a href="#">Website Development</a></li>
          <li><a href="#">Digital Marketing</a></li>
          <li><a href="#">Content Marketing</a></li>
          <li><a href="#">Guest Posting</a></li>
        </ul>
      </div>
      <div class="col-md-3 footer-widget-col footer-bottom">
        <h4 class="widget-title">Our Link</h4>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="service.php">Services</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
      <div class="col-md-3 footer-widget-col footer-right">
        <h4 class="widget-title">Location</h4>
        <ul class="a_foot_address">
          <li>
            <i class="fa fa-map-marker"></i>
            <a
              href="https://www.google.com/maps/place/UE+Developer+%7C+Web+Designing+%7C+SEO+SMO+%7C+Logo+Designing+Company+in+Delhi+%7C+Software+company/@28.5039605,77.2993206,17z/data=!3m1!4b1!4m5!3m4!1s0x390ce7219c47a1a9:0x124d590007009be2!8m2!3d28.5039605!4d77.3015146" target="_blank">
              <p>H. No 70, Comrade Colony, Near Kheri Markanda, Kurukshetra, Haryana – 136118 </p>
            </a>
          </li>
          <li>
            <i class="fa fa-phone"></i>
            <a href="tel:+91-9650780630"><p>+91-9354494685</p></a>
          </li>
          <li>
            <i class="fa fa-envelope"></i>
            <p> <a href="mailto:support@vouiber.com">support@vouiber.com</a>  <a href="mailto:info@vouiber.com">info@vouiber.com</a> </p>
          </li>
        </ul>
      </div>
    </div>
    <p class="copyright-txt text-center">@2022 All Copyrights Reserved.</p>
  </div>
</footer>
<!-- End footer section -->
<!-- Scroll Top -->
<div class="scroll-top">
  <i class="icofont-rounded-up"></i>
</div>

<div id="snackbar">Form Submitted Succefully</div>







<!-- enquirymodal -->
<div class="">
    <!-- The Modal -->
    <div class="modal" id="myModalEnquiry">
      <div class="modal-dialog a_dialog">
        <div class="modal-content a_content_model">
          <!-- Modal Header -->
          <div class="modal-header a_header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <div class="enquiry_img">
                  <img src="assets/img/enquiry.png">
                </div>
              </div>

              <div class="col-md-6">
                <div class="a_enquiry_form">
                  <h2>Enquiry Now</h2>
                  <form class="row contact-form-wrap" id="inquiry" method="POST">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input name="name"  class="form-control" type="text" placeholder="Name*" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                      <input name="email"  class="form-control" type="email" placeholder="E-mail*" required />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input name="phone" class="form-control" type="text" placeholder="Phone Number*" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" minlength="10" maxlength="10" required>
                      </div>
                    </div>
                    <!-- <div class="col-md-12">
                      <div class="form-group">
                        <input name="subject"  class="form-control" type="text" placeholder="Subject*" required>
                      </div>
                    </div> -->
                    <div class="col-md-12">
                      <div class="form-group">
                      <textarea name="messege"  class="form-control" rows="1" placeholder="Message"
                        placeholder='Message*'"></textarea>
                      </div>
      
                    </div>
                    <div class=" col-md-12">
                        <button type="button" class="btn-style" href="#" onclick="submitInq('inquiry')">Send Message</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
<!-- enquirymodal -->