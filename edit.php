<?php
$id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","","dance_academy");
$query="select * from `category` where id='$id'";
$result=mysqli_query($con,$query);
$arr=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form action="update.php"method="post">
	  <div class="row agile-wls-contact-mid mb-lg-4 mb-3">
                         
	 <div class="col-lg-12 col-md-4 form-group contact-forms">
                              <input type="text" class="form-control" name="c"value="<?php echo $arr['category'];?>placeholder="Category">
                           </div>
                       </div>
                           <button type="submit" class="btn sent-butnn btn-lg ">Send</button>
</div>
</form>
</body>
</html>