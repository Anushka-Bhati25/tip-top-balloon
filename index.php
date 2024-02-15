<?php
// Include the header file
include('header.php');
?>
<!-- popup section start -->

<!-- <div id="popup">
  <div class="popup-content">
    <div class="popup-header">
      <h2 >Tip Top Balloon</h2>
      <button class="popup-close">&times;</button>
    </div>
    <div class="popup-body">
      <img src="./images/banner.jpg" alt="Popup Image" class="popup-image">
    </div>
  </div>
</div> -->

<!-- popup section end -->

<!-- slider section -->
<section class=" slider_section position-relative">
  <div class="slider_number-container ">
    <div class="number-box">
      <span>
        01
      </span>
      <hr>
      <span>
        02
      </span>
    </div>
  </div>

  <div class="process_form_class" style=" display: block; position: absolute; top: 50%; right: 10%; transform: translateY(-50%); z-index: 2; padding: 10px; background-color: rgba(255, 255, 255, 0.8); border-radius:30px; border:2px solid #0d1193; max-width: 330px;">
    <h2 class="title" style="background-color:white; border-radius:30px; color:#1914ad; margin-top: 0; align-items: center; text-align: center; font-weight: bold !important;">
      Make an Appointment</h2>
    <form action="process_form_banner.php" method="post" class="text-center">
      <div class="form-group">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
      </div>
      <div class="form-group">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="phone_number" placeholder="Phone Number" name="phone_number" required>
      </div>
      <div class="form-group">
        <textarea class="form-control" rows="3" id="message" placeholder="Message" name="message" required></textarea>
      </div>
      <button type="submit" onclick="showPopup()" class="btn rounded" style="background-color: red ; color:aliceblue;">Book Now</button>
    </form>
  </div>

  <div class="container">
    <div class="row">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="col-lg-12 col-md-8">
              <div class="detail_box">
                <h2><span class="head-z">Welcome to</span></h2><br>
                <h1><span id="head-c" class="head-b">
                    Tip Top Balloon</span></h1>

                <!-- <ul class="un-oder-list">
                    <li><h5 class="d-inline fw-bolder">Tip Top Balloon :- </h5><span>Where Every Celebration Sparkles with Magic and Detail!</span></li>
                    <li><h5 class="d-inline ">Transforming Moments into Memories :- </h5><span>Tip Top Balloon, Your Premier Decoration Specialists</span></li>
                    <li><h5 class="d-inline ">Elevate Your Occasions with Tip Top Balloon :-</h5><span>  Creativity at Its Finest</li></span>
                  </ul> -->
                <!-- <div> -->
                <!-- <a href="">Browse Services</a> -->
                <!-- </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="carousel-item">
            <div class="col-lg-12 col-md-8">
              <div class="detail_box">
                <h2>Welcome to</h2>
                <h1>
                  Tip Top Balloon</h1>
                  <ul class="un-oder-list">
                  <li>
                      <h5 class="d-inline">Tip Top Balloon :- </h5><span> Gurugram's Go-To Choice for Magical Balloon Decorations</span>
                    </li>

                    <li>
                      <h5 class="d-inline">Celebrations Redefined :- </h5><span>Tip Top Balloon, Your Event Management Experts</span>
                    </li>
                    <li>
                      <h5 class="d-inline">Unique Themes, Irresistible Offers :- </h5><span>Tip Top Balloon Sets the Stage for Your Celebrations</span>
                    </li>
                  </ul> -->
    <!-- <a href="">Explore Services</a> -->
    <!-- </div>
              </div>
            </div>
          </div> -->

    <!-- <div class="carousel-item">
            <div class="col-lg-12 col-md-8">
              <div class="detail_box">
                <h2>Welcome to</h2>
                <h1>
                  Tip Top Balloon</h1>
                  <ul class="un-oder-list">
                    <li>
                      <h5 class="d-inline">Turning Dreams into Reality :- </h5><span>Tip Top Balloon, Your Event Styling Experts</span>
                    </li>
                    <li>
                      <h5 class="d-inline">Experience the Extraordinary:- </h5><span>Tip Top Balloon, Gurugram's Event Maestros</span>
                    </li>
                    <li>
                      <h5 class="d-inline">Captivating Themes, Attractive Offers :-</h5><span>Tip Top Balloon Puts the 'Special' in Your Special Day</span>
                    </li>
                  </ul>
                <div>
                  <a href="">Explore Our Services</a>
                </div>
              </div>
            </div>
          </div> -->


    <!-- </div> -->
    <!-- <div class="carousel_btn-container mt-4">
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div> -->

</section>
<!-- end slider section -->
</div>
<!-- about section -->
<section class="about_section ">

  <!-- <div class="container">
    <div class="row">
      <div class="col-md-5 col-xl-5">
        <div class="detail_box">
          <div class="heading_container justify-content-end">
            <h2 class=" pr-5" >About <span id="head-c">Tip Top </span> Balloon</h2>
          </div>
          <p class="text-start text-left">At Tip Top Balloon, we're passionate about transforming ordinary events into extraordinary experiences. With our extensive expertise and creative flair, we specialize in crafting mesmerizing balloon arrangements that add a touch of magic to every celebration.
            Whether it's a birthday bash, wedding reception, corporate event, or any special occasion, we bring innovation and imagination to every project. Our commitment is to go beyond expectations, offering personalized and unforgettable balloon decorations that turn moments into cherished memories.</p>
            
          </div>
      </div>-->
  <!-- img div  -->
  <!-- <div class="col-md-6 col-xl-7">
        <div class="img-box">
          <img src="images/gallery/officeparty.jpg" alt="" width="auto" height="400px" class="shadow-risen p-3 bg-dark" />
        </div>
      </div>
    </div>
  </div> -->
  <div class="container-fluid my-5">
    <div class="row">
      <div class="col-md-6 abt-bannier">
        <!-- <div class="img-box">
          <img src="images/gallery/officeparty.jpg" alt="" width="800px" height="800px" class="shadow-risen p-3 bg-dark" />
        </div>    -->
      </div>
      <div class="col-md-5 offset-md-1">
        <div class="abt-data">
          <h2 class="mt-5">About <span id="head-c">Tip Top </span> Balloon</h2><br>
          <h1 class="my-4">One of the <span id="head-c">BEST </span>party decoration<br> By Our Professionals In Gurgaon</h1>
          <p class="mb-5">At Tip Top Balloon, we're passionate about transforming ordinary events into extraordinary experiences. With our extensive expertise and creative flair, we specialize in crafting mesmerizing balloon arrangements that add a touch of magic to every celebration.
            Whether it's a birthday bash, wedding reception, corporate event, or any special occasion, we bring innovation and imagination to every project. Our commitment is to go beyond expectations, offering personalized and unforgettable balloon decorations that turn moments into cherished memories.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end about section -->







<!-- Modification area-->


<div class="container" id="Services">
  <h2 class="text-center" style="color: red; font-weight: bold;">Our Featured Products</h2>
  <div class="row">
    <!-- item 1 -->
    <div class="col-md-3 mt-3">
      <div class="card shadow">
        <div class="geeks">
          <img src="images/service-img/01birthday.jpg" class="img-fluid shadow" alt="First Night Surprise Room Decor Image" style="width: 100%; height: 300px;">
        </div>
      </div><br>

      <div class="card mt-2 p-3 text-center card-data">
        <h3 class="hedd">Birthday Decoration</h3>
        <p>With our colorful birthday decorations, you may completely change your party! We have everything you need for a spectacular party, including vibrant balloons and festive banners.</p>
        <a onclick="gtag_call_conversion();" href="tel:+91 8504962589" style="display: inline-block; background-color:red ; border-radius: 8px; padding: 8px 16px; color: white; text-decoration: none;">Call Now</a>
      </div>
    </div>
    <!-- item 2 -->
    <div class="col-md-3 mt-3">
      <div class="card shadow">
        <div class="geeks">
          <img src="images/service-img/02marrige.jpg" class="img-fluid shadow" alt="First Night Surprise Room Decor Image" style="width: 100%; height: 300px; ">
        </div>
      </div>
      <br>
      <div class="card p-3 text-center card-data">
        <h3>Marriage Decoration</h3>
        <p>Enhance your memorable day with our fine marriage décor services. Use our skilled touch to transform spaces for once-in-a-lifetime experiences and enduring memories. Reserve now.</p>
        <a onclick="gtag_call_conversion();" href="tel:+91 8504962589" style="display: inline-block; background-color:red ; border-radius: 8px; padding: 8px 16px; color: white; text-decoration: none;">Call Now</a>
      </div>
    </div>
    <!-- item 3 -->
    <div class="col-md-3 mt-3">
      <div class="card shadow">
        <div class="geeks">
          <img src="images/service-img/03.jpg" class="img-fluid shadow" alt="First Night Surprise Room Decor Image" style="width: 100%; height: 300px;">
        </div>
      </div>
      <br>
      <div class="card p-3 text-center card-data">
        <h3>Baby Shower</h3>
        <p>Decorate your baby shower with style and charm. Our services make
          your special day happier and cozier. Explore delightful themes and easily make enduring memories.Help us to make your day more special for you . Reserve now</p>
        <a onclick="gtag_call_conversion();" href="tel:+91 8504962589" style="display: inline-block; background-color:red ; border-radius: 8px; padding: 8px 16px; color: white; text-decoration: none;">Call Now</a>
      </div>
    </div>
    <!-- item 4 -->
    <div class="col-md-3 mt-3">
      <div class="card shadow">
        <div class="geeks">
          <img src="images/service-img/04firstNight.jpg" class="img-fluid shadow" alt="First Night Surprise Room Decor Image" style="width: 100%; height: 300px;">
        </div>
      </div><br>
      <div class="card p-3 text-center card-data">
        <h3>First Night Surprise Room Decor</h3>
        <p>With our surprise room decor service, you can make your first night into an unforgettable experience. Make love and joy-filled, life-lasting memories..</p>
        <a onclick="gtag_call_conversion();" href="tel:+91 8504962589" style="display: inline-block; background-color:red ; border-radius: 8px; padding: 8px 16px; color: white; text-decoration: none;">Call Now</a>
      </div>
    </div>
  </div><br><br>
  <div class="baby-shower-section">
    <hr class="border border-danger border-2 opacity-50">
    <h2 class="text-center" style="color: red; font-weight: bold;">Baby Shower Decoration</h2>
    <div class="row">
      <!-- item 5 -->
      <div class="col-md-3 mt-3">
        <div class="card shadow">
          <div class="geeks">
            <img src="images/service-img/12ringdecoration.webp" class="img-fluid shadow" alt="First Night Surprise Room Decor Image" style="width: 100%; height: 300px;">
          </div>
        </div><br>
        <div class="card p-3 text-center card-data">
          <h3>Ring Decorate Oh Baby</h3>
          <p>"Ring Decorate, Oh Baby!" With our adorable decorations, you can create a whimsical atmosphere that is ideal for stylishly and lovingly welcoming your little one.
          </p>
          <a onclick="gtag_call_conversion();" href="tel:+91 8504962589" style="display: inline-block; background-color:red ; border-radius: 8px; padding: 8px 16px; color: white; text-decoration: none;">Call Now</a>
        </div>
      </div>

      <!-- item 6 -->
      <div class="col-md-3 mt-3">
        <div class="card shadow">
          <div class="geeks">
            <img src="images/service-img/23ohbaby.jpg" class="img-fluid shadow" alt="First Night Surprise Room Decor Image" style="width: 100%; height: 300px;">
          </div>
        </div><br>
        <div class="card p-3 text-center card-data">
          <h3>Oh Baby U Shape Decoration</h3>
          <p>"Create a stylish 'Oh Baby' U-shape decoration that adds a trendy and festive touch to your party ambiance with flair and charm."
          </p>
          <a onclick="gtag_call_conversion();" href="tel:+91 8504962589" style="display: inline-block; background-color:red ; border-radius: 8px; padding: 8px 16px; color: white; text-decoration: none;">Call Now</a>
        </div>
      </div>

      <!-- item 7 -->
      <div class="col-md-3 mt-3">
        <div class="card shadow">
          <div class="geeks">
            <img src="images/service-img/18birthday.jpg" class="img-fluid shadow" alt="First Night Surprise Room Decor Image" style="width: 100%; height: 300px;">
          </div>
        </div><br>
        <div class="card p-3 text-center card-data">
          <h3>Birthday Decoration For Boy Baby</h3>
          <p>Use our adorable decorations to make your boy baby's birthday truly memorable. Using colorful themes and lively hues, plan an unforgettable, joyous celebration.
          </p>
          <a onclick="gtag_call_conversion();" href="tel:+91 8504962589" style="display: inline-block; background-color:red ; border-radius: 8px; padding: 8px 16px; color: white; text-decoration: none;">Call Now</a>
        </div>
      </div>

      <!-- item 8 -->
      <div class="col-md-3 mt-3">
        <div class="card shadow">
          <div class="geeks">
            <img src="images/service-img/06partydecoratin.jpg" class="img-fluid shadow" alt="First Night Surprise Room Decor Image" style="width: 100%; height: 300px;">
          </div>
        </div><br>
        <div class="card p-3 text-center card-data">
          <h3>Party Home Decoration</h3>
          <p>With our eye-catching decorations, your party will be filled with vivid colors and a festive vibe. Make any area into a vibrant center for celebrations!.</p>
          <br>
          <a onclick="gtag_call_conversion();" href="tel:+91 8504962589" style="display: inline-block; background-color:red ; border-radius: 8px; padding: 8px 16px; color: white; text-decoration: none;">Call Now</a>
        </div>
      </div>


    </div>
  </div><br><br>
  <hr class="border border-danger border-2 opacity-50">


  <h2 class="text-center" style="color: red; font-weight: bold;">Anniversary Decoration</h2>
  <div style="justify-content: center;display: flex;padding: 5px 0 5px 0px;">
    <div class="separator_keep"><span></span></div>
  </div>
  <div class="row">
    <!-- item 9 -->
    <div class="col-md-3 mt-3">
      <div class="card shadow">
        <div class="geeks">
          <img src="images/service-img/09room.jpg" class="img-fluid shadow" alt="First Night Surprise Room Decor Image" style="width: 100%; height: 300px;">
        </div>
      </div><br>
      <div class="card p-3 text-center card-data">
        <h3>Room Decoration</h3>
        <p>Our gorgeous room decorations will turn your area into a stylish and cozy retreat. Enhance your environment and savor customized design.
        </p>
        <br>
        <a onclick="gtag_call_conversion();" href="tel:+91 8504962589" style="display: inline-block; background-color:red; border-radius: 8px; padding: 8px 16px; color: white; text-decoration: none;">Call Now</a>
      </div>
    </div>
    <!-- item 10 -->
    <div class="col-md-3 mt-3">
      <div class="card shadow">
        <div class="geeks">
          <img src="images/service-img/20annviversaryring.jpg" class="img-fluid shadow" alt="First Night Surprise Room Decor Image" style="width: 100%; height: 300px;">
        </div>
      </div><br>
      <div class="card p-3 text-center card-data">
        <h3>Anniversary Ring Decor</h3>
        <p>Add some flair to your anniversary celebration by using our beautiful ring décor. Tasteful décor can heighten the romance and create an unforgettable, love-filled milestone.
        </p>
        <a onclick="gtag_call_conversion();" href="tel:+91 8504962589" style="display: inline-block; background-color:red ; border-radius: 8px; padding: 8px 16px; color: white; text-decoration: none;">Call Now</a>
      </div>
    </div>
    <!-- item 11 -->
    <div class="col-md-3 mt-3">
      <div class="card shadow">
        <div class="geeks">
          <img src="images/service-img/11betterTogether.webp" class="img-fluid shadow" alt="First Night Surprise Room Decor Image" style="width: 100%; height: 300px;">
        </div>
      </div><br>
      <div class="card p-3 text-center card-data">
        <h3>Better Together Decor</h3>
        <p>Use our "Better Together" décor theme to foster a sense of unity. Enhance areas with coziness, charm, and unique details for special occasions.</p>
        <br>
        <a onclick="gtag_call_conversion();" href="tel:+91 8504962589" style="display: inline-block; background-color:red ; border-radius: 8px; padding: 8px 16px; color: white; text-decoration: none;">Call Now</a>
      </div>
    </div>
    <!-- item 12 -->
    <div class="col-md-3 mt-3">
      <div class="card shadow">
        <div class="geeks">
          <img src="images/service-img/05bridge.jpg" class="img-fluid shadow" alt="First Night Surprise Room Decor Image" style="width: 100%; height: 300px;">
        </div>
      </div><br>
      <div class="card p-3 text-center card-data">
        <h3>Bridge To Be Decoration</h3>
        <p>Transform your experience as a bridge-to-be with magical décor. Transform the ordinary into atmosphere for an exciting journey ahead..</p>
        <a onclick="gtag_call_conversion();" href="tel:+91 8504962589" style="display: inline-block; background-color:red ; border-radius: 8px; padding: 8px 16px; color: white; text-decoration: none;">Call Now</a>
      </div>
    </div>
  </div>
</div>

<br>

<!-- Modification area ends-->

<!-- why section -->
<section class="why_section layout_padding">
  <!-- <div class="section_number">
    02
  </div> -->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Why Choose
          <span id="head-c">Tip Top </span>Balloon
        </h2>
        <p>Experience the difference with
          Tip Top Balloon. Our dedication to excellence and creativity sets us apart. With a legacy of crafting mesmerizing balloon designs that transcend ordinary decor, we bring over [insert years of experience] years of expertise to every event. Trust us to transform your celebrations into unforgettable experiences.</p>
        <div>
          <a href="about.php">Discover More</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- end why section -->
<?php
// Include the header file
include('gallerys.php');
?>
<!-- gallery section -->

<!-- end gallery section -->



<!-- client section -->

<section class="client_section layout_padding">
  <div class="container">
    <div class="heading_container justify-content-center">
      <h2>Hear from Our <span id="head-c">Customers</span></h2>
      <!-- <div class="section_number">04</div>-->
    </div>
  </div>
  <?php
  // Include the header file
  include('Client.php');
  ?>

</section>



<!-- end client section -->

<!-- arrange section -->

<section class="arrange_section">
  <div class="container">
    <div class="detail_box">
      <h2>Our Spectacular Balloon Arrangements</h2>
      <p>Experience the artistry of
        Tip Top Balloon. Our balloon arrangements redefine event decor, drawing inspiration from creativity and precision. Each arrangement tells a unique story, adding color, joy, and elegance to your celebrations.</p>
    </div>
  </div>
</section>




<!-- end arrange section -->

<!-- contact section -->

<section class="contact_section layout_padding">
  <!-- <div class="section_number">
    05
  </div> -->
  <div class="container ">
    <div class="heading_container justify-content-center">
      <h2 class="">
        Contact Us
      </h2>
    </div>

  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <form action="">
          <div>
            <input type="text" placeholder="Name" />
          </div>
          <div>
            <input type="email" placeholder="Email" />
          </div>
          <div>
            <input type="text" placeholder="Pone Number" />
          </div>
          <div>
            <input type="text" class="message-box" placeholder="Message" />
          </div>
          <div class="d-flex  mt-4 ">
            <button>
              SEND
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- end contact section -->

<!-- map section -->

<div id="map-container-google-3" class="z-depth-1-half map-container-3"> <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d449170.52731443197!2d77.051849!3d28.414889!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d187206d14acd%3A0xbd97a9ff56a1679!2sIslampur%20Village%2C%20Sector%2038%2C%20Gurugram%2C%20Haryana%20122022%2C%20India!5e0!3m2!1sen!2sus!4v1705662824541!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>


<!-- end map section -->










<?php
// Include the header file
include('footer.php');
?>