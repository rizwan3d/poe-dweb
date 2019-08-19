
    <?php include 'include/header.php'; ?>
     
    <!--==========================
      upload Section
    ============================-->
    <section id="upload">
      <div class="container">

        <header class="section-header">
          <h3>Publish Document</h3>
          <p>Select document and fill the form to publish it on Blockchain.</p>
        </header>

        <div class="wow fadeInUp">
          <div class="form">
            <form action="" method="post" role="form" class="uploadForm" id="uploadForm">
              <div class="form-row">
                <div class="form-group col-lg-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group col-lg-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                    data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message"
                  data-msg="(Optional) I am the original creator of this file & this Blockchain-based PoE is the proof."
                  placeholder="(Optional) I am the original creator of this file & this Blockchain-based PoE is the proof."></textarea>
                <div class="validation"></div>
              </div>
              <div class="form-row">
                <div class="form-group col-lg-6">
                  <input type="file" id="document" class="form-control" accept='*' placeholder="Select file" style="padding-bottom: 44px !important;"/>
                  <div class="validation"></div>
                </div>
                <div class="form-group col-lg-6">
                  <input type="input" id="hash" class="form-control" placeholder="hash" disabled style="padding-bottom: 24px !important;padding-top: 24px !important;"/>
                  <div class="validation"></div>
                </div>
              </div>
          
          <div class="text-center"><button type="submit" title="Publish">Publish</button></div>
          </form>
        </div>
      </div>


    </section><!-- #upload  -->


        <!--==========================
      Qr Section
    ============================-->
    <section id="qr" >
      <div class="container">

        <header class="section-header">
          <h3>PoE Qr Code</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>
        </header>
        <div class="row">
          <div class="col-md-4"></div>        
          <div class="col-md-4"><div id="qrcode"></div></div>
        </div>      
        <div class="row"  style="margin-top: 30px;"> 
          <div class="col-md-1" style="padding-top: 19px;">Link:</div>  
          <div class="col-md-9">
            <h6 style="text-align: center;">
              <a href="" id="vlink"></a>
            </h6> 
          </div>
          <div class="col-md-2" style="text-align: end;">
            <a href="#" id="copyLongUrl" class="btn btn-primary">Copy</a>
            <a href="#" id="shotUrl" class="btn btn-primary">Shot Url</a>
          </div>  

          
       
      </div>


    </section><!-- #upload  -->

    <?php include 'samedata.php'; ?>


    <?php include 'include/footer.php'; ?>

    

  <script src="js/upload.js"></script>
  <script src="lib/qrcode/qrcode.min.js"></script>
