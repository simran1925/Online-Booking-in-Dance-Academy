<?php include "header1.php";?>
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
               <li>Registration</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
        <!--contact -->
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Register</h3>
            <div class="agile-info-para">
               <div class=" contact-wls-detail">
                  <div class="contact-form pb-lg-3 pb-2">
                     <form method="post" action="insert_register.php">
                        <div class="row agile-wls-contact-mid mb-lg-4 mb-3">
                           <div class="col-lg-12 col-md-4 form-group contact-forms">
                              <input type="text" class="form-control" name="n" placeholder="Name" required>
                           </div>
                           <div class="col-lg-12 col-md-4 form-group contact-forms">
                              <input type="email" class="form-control" name="e" placeholder="Email" required>
                           </div>
                           <div class="col-lg-12 col-md-4 form-group contact-forms">
                              <input type="password" class="form-control" name="p" placeholder="Password" required>
                           </div>
                           <div class="col-lg-12 col-md-4 form-group contact-forms">
                              <input type="text" class="form-control" name="c" placeholder="Contact No." required>
                           </div>
                           <div class="col-lg-12 col-md-4 form-group contact-forms">
                              <textarea class="form-control" name="m" placeholder="Address"></textarea>
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