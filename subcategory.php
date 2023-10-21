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
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">subcategory</h3>
            <div class="agile-info-para">
               <div class=" contact-wls-detail">
                  <div class="contact-form pb-lg-3 pb-2">
                     <form method="post" action="subcategorydb.php"  enctype="multipart/form-data">
                        <div class="row agile-wls-contact-mid mb-lg-4 mb-3">
                         
                           <div class="col-lg-6 col-md-4 form-group contact-forms">
                              <select class="form-control" name="ca" placeholder="subcategory">
                              			<option>select category</option>
                              			<?php 

										include "config.php";
										$query="select * from `category`";
										$result=mysqli_query($con,$query);
										while ($arr=mysqli_fetch_array($result)){
											?>
											<option value="<?php echo $arr['id'];?>"><?php echo $arr['category'];?></option>
										<?php }?>
                              </select>
                           </div>

                        <div class="col-lg-6 col-md-4 form-group contact-forms">
                              <input type="text" class="form-control"name="d" placeholder="dance_style" required>
                        </div>
                        <div class="col-lg-6 col-md-4 form-group contact-forms">
                              <input type="text" class="form-control"name="t" placeholder="type" required>
                        </div>
                        <div class="col-lg-6 col-md-4 form-group contact-forms">
                              <input type="text" class="form-control"name="c" placeholder="cost" required>
                        </div>
                        </div>
                         <div class="col-lg-6 col-md-4 form-group contact-forms">
                              <input type="file" class="form-control"name="i" placeholder="choose image" required>
                           </div>
                        <div class="col-log-6 col-mid-4 form-group contact-forms">
                           <textarea class="form-control"name="de" placeholder="description" required ></textarea>
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
