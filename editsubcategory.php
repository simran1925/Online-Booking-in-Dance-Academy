<?php
$id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","","dance_academy");
$query="select subcategory.*,category.category from subcategory INNER JOIN category ON subcategory.cid=category.id where subcategory.did='$id'";
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
               <li>subcategory</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
        <!--contact -->
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Edit subcategory</h3>
            <div class="agile-info-para">
               <div class=" contact-wls-detail">
                  <div class="contact-form pb-lg-3 pb-2">
                     <form method="post" action="updatesubcategory.php"  enctype="multipart/form-data">
                        <div class="row agile-wls-contact-mid mb-lg-4 mb-3">
                         
                           <div class="col-lg-6 col-md-4 form-group contact-forms">
                              <select class="form-control" name="cid" placeholder="subcategory">
											<option value="<?php echo $arr['cid'];?>"><?php echo $arr['category'];?></option>
                              			
                              			<?php 

										include "config.php";
                              $con1=mysqli_connect("localhost","root","","dance_academy");
										$query1="select * from `category`";
										$result1=mysqli_query($con1,$query1);
										while ($arr1=mysqli_fetch_array($result1)){
											?>
											<option value="<?php echo $arr1['id'];?>"><?php echo $arr1['category'];?></option>
										<?php }?>
                              </select>
                           </div>
                           <div class="col-lg-6 col-md-4 form-group contact-forms">
                              <input type="hidden" class="form-control"name="id" value="<?php echo $arr['did'];?>" placeholder="dance_style">
                              <input type="text" class="form-control"name="d" value="<?php echo $arr['dance_style'];?>" placeholder="dance_style">
                           </div>
                           <div class="col-lg-6 col-md-4 form-group contact-forms">
                              <input type="text" class="form-control"name="t"value="<?php echo $arr['type'];?>" placeholder="type">
                           </div>
                           <div class="col-lg-6 col-md-4 form-group contact-forms">
                              <input type="text" class="form-control"name="c"value="<?php echo $arr['cost'];?>" placeholder="cost">
                           </div>
                        </div>
                         <div class="col-lg-6 col-md-4 form-group contact-forms">
                              <input type="file" class="form-control"name="i"value="<?php echo $arr['image'];?>" placeholder="choose image">
                           </div>
                        <div class="col-log-6 col-mid-4 form-group contact-forms">
                           <textarea class="form-control"name="de"value="<?php echo $arr['description'];?>" placeholder="description" ></textarea>
                        </div>
                        </div>
                       
                        <button type="submit" class="btn sent-butnn btn-lg ">Submit</button>
                     </form>
                  </div>
    
    </div>
</div>
</div>
</section>
<?php include "footer.php";?>

