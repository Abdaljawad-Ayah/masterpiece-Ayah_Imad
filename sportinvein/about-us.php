<?php require 'includes/header.php'; ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="breadcrumb-text">
          <h2>About us</h2>
          <div class="bt-option">
            <a href="./index.php">Home</a>
            <span>About</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Breadcrumb Section End -->

<!-- ChoseUs Section Begin -->
<section class="choseus-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <span>Why chose us?</span>
          <h2>PUSH YOUR LIMITS FORWARD</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="cs-item">
          <span class="flaticon-034-stationary-bike"></span>
          <h4>Modern equipment</h4>
          <p>The equipment ranges from balls, nets, and protective gear like helmets.protective gear or a tool used to
            help the athletes play the sport</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="cs-item">
          <span class="flaticon-033-juice"></span>
          <h4>Healthy nutrition plan</h4>
          <p>A healthy eating plan gives your body the nutrients it needs every day while staying within your daily
            calorie goal for weight loss. </p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="cs-item">
          <span class="flaticon-002-dumbell"></span>
          <h4>Proffesponal training plan</h4>
          <p>The training plan will include all topics, knowledge and skills that you need to be able to do
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="cs-item">
          <span class="flaticon-014-heart-beat"></span>
          <h4>Unique to your needs</h4>
          <p>Our goal</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ChoseUs Section End -->

<!-- About US Section Begin -->
<section class="aboutus-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 p-0">
   
    
        <div class="about-video set-bg" data-setbg="img/Jeremy-Buendia.jpg">
          <a href="https://www.youtube.com/watch?v=fI-XfjQCDwM" class="play-btn video-popup" class="play-btn video-popup"><i class="fa fa-caret-right"></i></a>
        </div>
      </div>
      <div class="col-lg-6 p-0">
        <div class="about-text">
          <div class="section-title">
            <span>About Us</span>
            <h2>What we have done</h2>
          </div>
          <div class="at-desc">
            <p>our main goal is to spread the acknowledg of sport,
              we offer a wikisport plus you can
              reserve appointment with us to track your prograss in any area of sport you choose , therefore we created
              it a website
              that combines all that.
              Our team is highly qualified professional which will help achieve your goal.
            </p>
          </div>
          <div class="about-bar">
            <div class="ab-item">
              <p>Body building</p>
              <div id="bar1" class="barfiller">
                <span class="fill" data-percentage="80"></span>
                <div class="tipWrap">
                  <span class="tip"></span>
                </div>
              </div>
            </div>
            <div class="ab-item">
              <p>Boxing</p>
              <div id="bar2" class="barfiller">
                <span class="fill" data-percentage="85"></span>
                <div class="tipWrap">
                  <span class="tip"></span>
                </div>
              </div>
            </div>
            <div class="ab-item">
              <p>Fitness</p>
              <div id="bar3" class="barfiller">
                <span class="fill" data-percentage="75"></span>
                <div class="tipWrap">
                  <span class="tip"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About US Section End -->

<!-- Team Section Begin -->
<section id="1" class="team-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="team-title">
          <div class="section-title">

            
            <span>Our Team</span>
            <h2>TRAIN WITH EXPERTS</h2>
          </div>
          
          <a href="appointment.php" class="primary-btn btn-normal appoinment-btn">appointment</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="ts-slider owl-carousel">
    <?php 
          include './includes/db.php';
         $query = "SELECT id, trainerName, trainerTitle , trainerImage  FROM trainers ORDER BY id ASC";
         $results = mysqli_query($con, $query) or die ("database error:". mysqli_error($con));
         while($trainer = mysqli_fetch_assoc($results)){
       ?>

        <div class="col-lg-4 ">
        
          <div class="ts-item set-bg" data-setbg="<?php echo $trainer['trainerImage'];?>">
            <div class="ts_text">
              <h4><?php echo $trainer['trainerName'];?></h4>
              <span><?php echo $trainer['trainerTitle'];?></span>
            </div>
          </div>
     

        </div>
<?php }?>
      </div>
    </div>
  </div>



</section>
<!-- Team Section End -->
<!-- Banner Section Begin -->

<!-- Banner Section End -->

<!-- Testimonial Section Begin -->
<section class="testimonial-section spad">
  <div class="container">
  <?php 
     include './includes/db.php';
 
  
  ?>
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <span>Testimonial</span>
          <h2>Our Client Say</h2>
        </div>
      </div>
    </div>
    <div class="ts_slider owl-carousel">
   
      <div class="ts_item">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="ti_pic">
              <img src="img/testimonial/one.jpg" alt="">
            </div>
    

            <div class="ti_text">
              <p>It was a great experience with the most successful Trainers in Jordan<br />I was able to to lose a big mass of fat I Weighted 120 Kg now I'm 75 Kg <br /></p>
              <h5>Marshmello Gomez</h5>
        <div class="tt-rating">
   
         
                <i class="fa fa-star fa-2x" data-index="0"></i>
                <i class="fa fa-star fa-2x" data-index="1"></i>
                <i class="fa fa-star fa-2x" data-index="2"></i>
                <i class="fa fa-star fa-2x" data-index="3"></i>
                <i class="fa fa-star fa-2x" data-index="4"></i>
                
                <br><br>
			          <?php echo round($avg,2) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ts_item">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="ti_pic">
              <img src="img/testimonial/testimonial-2.jpg" alt="">
            </div>
            <div class="ti_text">
              <p>Yes It was a great experience<br />this is my third time experience<br />I feel fit thanks to the coaches</p>
              <h5>Joely John</h5>
              <div class="tt-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Testimonial Section End -->

<!-- Get In Touch Section Begin -->
<div class="gettouch-section">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="gt-text">
          <i class="fa fa-map-marker"></i>
          <p>Amman,
            Jordan</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="gt-text">
          <i class="fa fa-mobile"></i>
          <ul>
            <li>077-668-8860</li>
            <li>077-795-8110</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div class="gt-text email">
          <i class="fa fa-envelope"></i>
          <p>Support.sportinvein@gmail.com</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Get In Touch Section End -->


<?php require 'includes/footer.php'; ?>