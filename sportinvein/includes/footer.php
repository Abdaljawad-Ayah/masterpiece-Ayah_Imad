 <!-- Footer Section Begin -->
 <center>
 <section class="footer-section">
     <div class="container">
         <div class="row">
             <div class="col-lg-4">
                 <div class="fs-about">
                     <div class="fa-logo">
                         <a href="#"> <img src="img/logo4.png" alt="">
                         </a>
                     </div>
                     <p> Sport In Vein A website provide information about your favorate sport with the ability to book an appointment with us.</p>
                     <div class="fa-social">
                         <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                         <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                         <a href="https://youtube.com/"><i class="fa fa-youtube-play"></i></a>
                         <a href="https://instagram.com/"><i class="fa fa-instagram"></i></a>
                         <a href=""><i class="fa  fa-envelope-o"></i></a>
                         <a href="register.php"><i class="fa fa-sign-in"></i></a>

                     </div>
                 </div>
             </div>
        
            
         </div>

     </div>
 </section>
 </center>
 <!-- Footer Section End -->




 <!-- Search model Begin -->
 <div class="search-model">
     <div class="h-100 d-flex align-items-center justify-content-center">
        
         <div class="search-close-switch">+</div>
         <form class="search-model-form" action="index.php" method="POST">
        
             <input class="input" type="text" id="search-input" placeholder="Search here....." name="search" id="search">

             <button class="searchButton" type="submit" name="submit-search">Search</button>
             <div class="article-container">

<?php 

   if(isset($_POST['submit-search']))
   {

    include './includes/db.php';
     
      $search = mysqli_real_escape_string($con, $_POST['search']);

      $sql = "SELECT * FROM article WHERE a_title LIKE '%" . $search ."%' OR
      a_text LIKE '%" . $search ."%' OR
      a_trainer LIKE '%" . $search ."%' OR
      a_link LIKE '%" . $search ."%'";
      
  


       $result = mysqli_query($con, $sql);
       $queryResult = mysqli_num_rows($result);

       echo "There are ".$queryResult." results! <br>";

       if($queryResult > 0){
            while($row = mysqli_fetch_assoc($result)){
               echo "<div class='article-box'>
               <h3 style='color:white;'>".$row['a_title']."</h3>
               <p>".$row['a_text']."</p>
               <p>" .'Trainer: '.$row['a_trainer']."</p>
               <p>".$row['a_link']."</p> 
               </div>";
            }
       }else{

           echo "There are no results matching your search!";
       }
   }              

//    $sql = "SELECT * FROM article";
//    $result = mysqli_query($con, $sql);

//    $queryResults = mysqli_num_rows($result);

//    if($queryResults > 0){
//       while ($row = mysqli_fetch_assoc($result)) {
//        //  echo "<div class='article-box'>
//        //  <h3>".$row['a_title']."</h3>
//        //  <p>".$row['a_text']."</p>
//        //  <p>".$row['a_trainer']."</p>
//        //  <p>".$row['a_date']."</p>
//        //  </div>";
//       }
//    }
?>
</div>
         </form>
         
         <div id="success__para"></div>
      
     </div>
     <div id="result"></div>
 </div>
 <!-- Search model end -->

 <!-- Js Plugins -->
 <script src="js/jquery-3.3.1.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/jquery.magnific-popup.min.js"></script>
 <script src="js/masonry.pkgd.min.js"></script>
 <script src="js/jquery.barfiller.js"></script>
 <script src="js/jquery.slicknav.js"></script>
 <script src="js/owl.carousel.min.js"></script>
 <script src="js/main.js"></script>
 <script src="custom.js"></script>




 <script type="text/javascript">
// if (window.history.replaceState) {
//     window.replaceState(null, null, window.location.href);
// }
 </script>


<!-- BMR jQuery -->
 <script>
     $(document).ready(function (){
         $('.btn-primary').click(function(e){
             e.preventDefault();
             var dob    = $('#dob').val();
             var feet   = $('#feet').val();
             var inch   = $('#inch').val();
             var gender = $('#gender').val();
             var weight = $('#weight').val();
             $.ajax
             ({
                 type: "POST",
                 url: "bmr-calculator.php",
                 dataType: 'json',
                 header:("Content-type: application/json"),
                 data: {"dob": dob, "feet": feet, "inch":inch, "gender":gender, "weight": weight},
                 success: function (data){
                     $('.result').html(data);
                     $('#bmrForm')[0].reset();
                     console.log(data)
                    }
                });
            });
        });
  


 </script>

 <!-- Searching -->
<script>
    function submitdata(){
        var search = document.getElementById("search");

        $.ajax({
            type: 'post',
            url: 'index.php',
            data : { search : search},

            success: function (response) {
                $('#success__para').html("Your Data Is Submitted");
            }
        });

        return false;
    }
</script>
<script src="rating.js"></script>
 </body>

 </html>
