<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
<!DOCTYPE html>
<html lang="zxx">
    <?php session_start(); ?>
   <head>
      <title>Dance Academy</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Sway Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--Slider -->
      <link href="css/lsb.css" rel="stylesheet" type="text/css">
      <!-- //slider-->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Felipa" rel="stylesheet">
   </head>
   <body>
      <div class="header-outs" id="home">
         <div class="header-bar">
            <nav class="navbar navbar-expand-lg navbar-light">
               <div class="hedder-up">
                  <h1><a class="navbar-brand" href="index.html">Be Dance</a></h1>
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                  <ul class="navbar-nav ">
                     
                     <li class="nav-item">
                        <a href="admingallery.php" class="nav-link">Gallery</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="nav-link" href="category.php">Add</a>
                           <a class="nav-link " href="viewcategory.php">View</a>
                        </div>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Subcategory
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="nav-link" href="subcategory.php">Add</a>
                           <a class="nav-link " href="viewsubcategory.php">View</a>
                        </div>
                     </li>
                     <li class="nav-item">
                        <a href="viewcontact.php" class="nav-link">Contact</a>
                     </li>
                     <li class="nav-item">
                        <a href="viewregister.php" class="nav-link">Registered</a>
                     </li>
                    
                     <li class="nav-item">
                        <a href="#" class="nav-link"><?php echo $_SESSION['name'];?></a>
                     </li>
                     <li class="nav-item">
                        <a href="logout.php" class="nav-link">Logout</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!-- //Navigation -->