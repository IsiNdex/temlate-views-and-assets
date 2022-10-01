<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/navbar'); ?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>BİZİMLƏ ƏLAQƏ</h4>
                <h2>GƏLİN ƏLAQƏDƏ QALAQ!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->


    <section class="contact-us">
      <div class="container">
        <div class="row">
        
          <div class="col-lg-12">
            <div class="down-contact">
              <div class="row">
                <div class="col-lg-8">
                  <div class="sidebar-item contact-form">
                    <div class="sidebar-heading">
                      <h2>TƏKLİF VƏ İRADLARINIZI BİZƏ BİLDİRİN</h2>
                    </div>
                    <div class="content">
                      <form id="contact" action="" method="post">
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Ad" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="email" type="text" id="email" placeholder="Email" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-12 col-sm-12">
                            <fieldset>
                              <input name="subject" type="text" id="subject" placeholder="Mövzu">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="message" rows="6" id="message" placeholder="Mesaj" required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-button">Mesaj Göndər</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="sidebar-item contact-information">
                    <div class="sidebar-heading">
                      <h2>Kontakt informasiyası</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li>
                          <h5>(+994 077)327-06-07</h5>
                          <span>TELEFON</span>
                        </li>
                        <li>
                          <h5>DevNews@gmail.com</h5>
                          <span>EMAIL</span>
                        </li>
                        <li>
                          <h5>Cəfərcabbarlı küç.
                          	<br>Caspian Plaza</h5>
                          <span>ADRES</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-12">
            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2888.6908095090607!2d49.82649351528211!3d40.38534027936879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d9be60052ab%3A0xd7852fa710c6b11a!2sCaspian%20Plaza!5e1!3m2!1saz!2s!4v1664610004007!5m2!1saz!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          
        </div>
      </div>
    </section>

    
    <?php $this->load->view('user/includes/footer'); ?>
    <?php $this->load->view('user/includes/footerStyle'); ?>