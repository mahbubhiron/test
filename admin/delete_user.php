
<?php 
require '../database/db_connect.php';
$sql="select * from tbl_user";
if(mysqli_query($connection,$sql)){
	$resource_id=mysqli_query($connection,$sql);
}else{
	die('not view'.mysqli_error($connection));
}

if(isset($_POST['btn'])){
	$u_id=$_POST['user'];
	$sql="delete from tbl_user where user_id=$u_id ";
	if(mysqli_query($connection,$sql)){
		echo "<script>alert('user info delete');</script>";
	}else{
		die('data not delte! something wrong'.mysql_error($connection));
	}
}

?>

<div id="admin_content1">
	<div class="add_user_header">
		<h4>Delete User</h4>
	</div>
	<div id="add_user">
		<form action="" method="post">
			<fieldset>
				<table>
					<tr>
						<td>Select User :</td>
						<td>
						<select name="user" id="">
							<option value="select">--Select--</option>
							<?php while($row=mysqli_fetch_assoc($resource_id)){ ?>
									<option value="<?php echo $row['user_id']; ?> "><?php echo $row['user_id']; ?></option>
								<?php } ?>
						</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="btn" value="Delete"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>
</div>
