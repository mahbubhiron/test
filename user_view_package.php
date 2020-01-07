
<?php
require 'database/db_connect.php';

?>

<div class="subcategory_container">
	<div classp_id="subcategory_content">
		<h3>View Package</h3>
	</div>
	<div class="row">
		  <table>
	  <?php 

	 $s="select * from tbl_package,tbl_category,tbl_subcategory where tbl_package.category=tbl_category.category_id and tbl_package.subcategory=tbl_subcategory.subcategory_id and tbl_package.package_id='" . $_GET["p_id"] ."'";
		if($result=mysqli_query($connection,$s)){
			echo "no pblm";
		}
		else{
			die('error'.mysqli_error($connection));
		}
		$r=mysqli_num_rows($result);
		$data=mysqli_fetch_array($result);
		 ?>
		  	<tr>
		  		<td>Package Name :</td>
		  		<td><?php echo $data[1]; ?></td>
		  	</tr>
		  	<tr>
		  		<td><img src="admin/<?php echo $data[5]; ?>" alt=""></td>
		  		<td><img src="admin/<?php echo $data[5]; ?>" alt=""></td>
		  		<td><img src="admin/<?php echo $data[7]; ?>" alt=""></td>
		  	</tr>
		  	<tr>
		  		<td>Category :</td>
		  		<td><?php echo $data['category_name']; ?></td>
		  	</tr>
		  	<tr>
		  		<td>SubCategory :</td>
		  		<td><?php echo $data['subcategory_name']; ?></td>
		  	</tr>
		  	<tr>
		  		<td>Package Price :</td>
		  		<td><?php echo $data[4]; ?></td>
		  	</tr>
		  	<tr>
		  		<td>Hotel One :</td>
		  		<td><?php echo $data[8]; ?></td>
		  	</tr>
		  	<tr>
		  		<td><img src="admin/image/6.jpg" alt=""></td>
		  		<td><img src="admin/image/6.jpg" alt=""></td>
		  		<td><img src="admin/image/6.jpg" alt=""></td>
		  	</tr>
		  	<tr>
		  		<td>Hotel One Link :</td>
		  		<td><a href="<?php echo $data[12]; ?>">Click here to see hotel view</a></td>
		  	</tr>
		  	<tr>
		  		<td>Hotel Two :</td>
		  		<td><?php echo $data[13]; ?></td>
		  	</tr>
		  	<tr>
		  		<td><img src="admin/image/6.jpg" alt=""></td>
		  		<td><img src="admin/image/6.jpg" alt=""></td>
		  		<td><img src="admin/image/6.jpg" alt=""></td>
		  	</tr>
		  	<tr>
		  		<td>Hotel Two Link :</td>
		  		<td><a href="<?php echo $data[17]; ?>">Click here to see hotel view</a></td>
		  	</tr>
		  	<tr>
		  		<td>Hotel Three :</td>
		  		<td><?php echo $data[18]; ?></td>
		  	</tr>
		  	<tr>
		  		<td><img src="admin/image/6.jpg" alt=""></td>
		  		<td><img src="admin/image/6.jpg" alt=""></td>
		  		<td><img src="admin/image/6.jpg" alt=""></td>
		  	</tr>
		  	<tr>
		  		<td>Hotel Three Link :</td>
		  		<td><a href="<?php echo $data[22]; ?>">Click here to see hotel view</a></td>
		  	</tr>
		  	<tr>
		  		<td colspan="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum vitae animi quidem, harum hic culpa optio, sequi modi pariatur.</td>
		  	</tr>
		  	<tr>
		  		<td>
		  			<a href="?key2=<?php echo 16; ?>">
		  				<input type="submit" name="btn" value="Confirm Tour!">
		  			</a>
		  		</td>
		  		<td>
		  			
		  		</td>
		  		<td>
		  			<a href="#">
		  				<input type="submit" name="btn" value="Cancel Tour!">
		  			</a>
		  		</td>
		  	</tr>
		  </table>
	</div>
</div>