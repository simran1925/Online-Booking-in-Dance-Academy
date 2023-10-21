<?php
$id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","","dance_academy");
$query="select * from `book` where id='$id'";
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
<form action="updatebook.php"method="post">
	  <div class="row agile-wls-contact-mid mb-lg-4 mb-3">
                         
	 <div class="col-lg-12 col-md-4 form-group contact-forms">
	 	 
	 	                    <input type="hidden" value="<?php echo $arr['id'];?>" class="form-control" name="id" placeholder="book">
	 	                </div>
                              <input type="text" class="form-control" name="n"value="<?php echo $arr['name'];?>"placeholder="name">
                           </div>
                           <input type="text" class="form-control" name="e"value="<?php echo $arr['email'];?>"placeholder="email">
                           </div>
                           <input type="text" class="form-control" name="p"value="<?php echo $arr['phone'];?>"placeholder="phone">
                           </div>
                           <input type="text" class="form-control" name="a"value="<?php echo $arr['address'];?>"placeholder="address">
                           </div>
                           <input type="text" class="form-control" name="d"value="<?php echo $arr['duration'];?>"placeholder="duration">
                           </div>
                           <input type="text" class="form-control" name="s"value="<?php echo $arr['subcategory_id'];?>"placeholder="subcategory_id">
                           </div>
                            <input type="text" class="form-control" name="st"value="<?php echo $arr['status'];?>"placeholder="status">
                           </div>
                       </div>
                           <button type="submit" class="btn sent-butnn btn-lg ">Send</button>
</div>
</form>
</body>