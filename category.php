
<?php 

require 'database/db_connect.php';

 ?>

<div class="category_container">
		<div class="category_function">
			<h3>Category</h3>
			<ul>
				<?php

				$s="select * from tbl_category";
				$result=mysqli_query($connection,$s);
				$r=mysqli_num_rows($result);
				//echo $r;

				while($data=mysqli_fetch_array($result))
				{
					?>
				<li><a href="?ca_id=<?php echo $data[0] ?>"><?php echo $data[1]; ?></a></li>
			<?php } ?>
			</ul>
		</div>
		<!-- <?php include 'category_description.php'; ?>  -->
		 <?php 
		if (isset($_GET['ca_id'])) {

				$val = $_GET['ca_id'];
				if (!empty($val)) {
				include 'user_subcategory.php';
				}
			}
			if(isset($_GET['subc_id'])){
					$val1= $_GET['subc_id'];
					if(!empty($val1)){
						include 'user_package.php';
					}
				}
				if(isset($_GET['p_id'])){
					$val1= $_GET['p_id'];
					if(!empty($val1)){
						include 'user_view_package.php';
					}
				}
			 else{
				include 'category_description.php';
			}
		 ?>
		 <!-- <?php 
		if (isset($_GET['subc_id'])) {
			// echo "<pre/>";
			// print_r($_GET);

				$val = $_GET['subc_id'];
				if (!empty($val)) {
				include 'user_package.php';
				}
			}
		 ?> -->

	</div>

	