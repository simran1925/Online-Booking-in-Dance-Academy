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
                  <a href="about">Home</a>
                  <span>/ /</span>
               </li>
               <li> AdminLog in</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
        <!--contact -->
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Admin Log in</h3>
            <div class="agile-info-para">
               <div class=" contact-wls-detail">
                  <div class="contact-form pb-lg-3 pb-2">
                     <form method="post" action="admincheck.php">
                        <div class="row agile-wls-contact-mid mb-lg-4 mb-3">
                         
                           <div class="col-lg-12 col-md-4 form-group contact-forms">
                              <input type="email" class="form-control" name="e" placeholder="Email">
                           </div>
                           <div class="col-lg-12 col-md-4 form-group contact-forms">
                              <input type="password" class="form-control" name="p" placeholder="password">
                           </div>
                        </div>
                       
                        <button type="submit" class="btn sent-butnn btn-lg ">Log In</button>
                     </form>
                  </div>
    
    </div>
</div>
</div>
</section>
<?php include "footer.php";?>