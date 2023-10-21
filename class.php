  
  <?php include "header.php";?>
 <!-- banner -->
      <div class="inner_page-banner one-img">
      </div>
      <!--//banner -->
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>
                  <a href="dashboard.php">Home</a>
                  <span>/ /</span>
               </li>
               <li>Class</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--Dance class-->
      <section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Dance Class</h3>
            <div class="row abt-inner-agile">
               <?php 

                              include "config.php";
                              $query="select * from `subcategory`";
                              $result=mysqli_query($con,$query);
                              while ($arr=mysqli_fetch_array($result)){
                                 ?>
               <div class="col-lg-4 col-md-4 col-sm-4 ser-inner-img">
                  <img src="upload/<?php echo $arr['image'];?>" alt="" class="img-fluid">
                  <div class="w3l-ser-sub-txt mt-lg-4 mt-3">
                     <p class="mt-3col-lg-4 col-md-4 col-sm-4 ser-inner-img"><h4><?php echo $arr['dance_style'];?></h4></p>
                    
                    <h4> <span class="mt-3 display-8">Fees: <span class="text-dark"width=></span><?php echo $arr['cost'];?>
                     <a href="booking.php?id=<?php echo $arr['did'];?>" class="btn btn-primary">Book</a></span></h4>
                     <p><?php echo $arr['description'];?></p>
                  </div>
               </div>
            <?php }?>
            </div>
             </div>
      </section>
      <!--//Dance class-->
      <?php include "footer.php";?>