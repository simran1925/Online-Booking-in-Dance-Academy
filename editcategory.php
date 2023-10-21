<?php
$id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","","dance_academy");
$query="select * from `category` where id='$id'";
$result=mysqli_query($con,$query);
$arr=mysqli_fetch_array($result);
?>
<?php include "adminheader.php";?>
<!-- banner -->
      <div class="inner_page-banner one-img">
      </div>
      <!--//banner -->
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>
                  <a href="index.html">Home</a>
                  <span>/ /</span>
               </li>
               <li>Category</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
        <!--contact -->
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Edit Category</h3>
            <div class="agile-info-para">
               <div class=" contact-wls-detail">
                  <div class="contact-form pb-lg-3 pb-2">
                     <form method="post" action="updatecategory.php">
                        <div class="row agile-wls-contact-mid mb-lg-4 mb-3">
                         
                           <div class="col-lg-12 col-md-4 form-group contact-forms">
                              <input type="hidden" value="<?php echo $arr['id'];?>" class="form-control" name="id" placeholder="Category">
                              <input type="text" value="<?php echo $arr['category'];?>" class="form-control" name="c" placeholder="Category">
                           </div>
                           
                        </div>
                       
                        <button type="submit" class="btn sent-butnn btn-lg ">Send</button>
                     </form>
                  </div>
    
    </div>
</div>
</div>
</section>
<?php include "footer.php";?>