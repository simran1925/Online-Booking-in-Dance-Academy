
<?php
 include"config.php";
$query="select subcategory.*,category.category from subcategory INNER JOIN category ON subcategory.cid=category.id";
$result=mysqli_query($con,$query);
?>
<?php include"adminheader.php";?>
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
               <li>Sub Category</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
        <!--contact -->
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Sub Category</h3>
            <div class="agile-info-para">
               <div class=" contact-wls-detail">
                  <div class="contact-form pb-lg-3 pb-2">
                   <table class="table table-bordered">
   <tr>
<th>did</th>
   <th>category</th>
    
   <th>dance_style</th>
   <th>type</th>
   <th>cost</th>
   <th>image</th>
   <th>description</th>
   <th>edit</th>
   <th>delete</th>
</tr>
<?php $i=1;


while ($arr=mysqli_fetch_array($result)){
   ?>

<tr><td><?php echo $i;?></td>
   <td><?php echo $arr['category'];?>
   <td><?php echo $arr['dance_style'];?>
      <td><?php echo $arr['type'];?>
      <td><?php echo $arr['cost'];?>
       <td><img src="upload/<?php echo $arr['image'];?>" height="150" width="150">
        <td><?php echo $arr['description'];?>
         
   </td> 
      
   
   <td><a href="editsubcategory.php?id=<?php echo $arr['did'];?>" class="btn btn-primary">Edit</td>
   
   


   <td>
      <a href="deletesubcategory.php?id=<?php echo $arr['did'];?>" class="btn btn-primary">Delete</td>
   
   </td>
   
</tr>
<?php $i++;
}?>
</table>

                  </div>
    
    </div>
</div>
</div>
</section>
<?php include"footer.php";?>