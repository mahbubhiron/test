<?php 
$conn= new mysqli("localhost","root","","db_ttms");
if($conn->connect_error){
	die('faild to connect'.$conn->connect_error);
}
if(isset($_POST['query'])){
	$inpText=$_POST['query'];
	$query="select package_name from tbl_package where package_name like '%$inpText%' ";
	$result= $conn->query($query);
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			// echo "<a href='#' class='list-group-item list-group-item-action border-1' style='margin-right:100px;'>".$row['package_name']."</a>";
			echo "<a href='#'>".$row['package_name']."</a>";
		}
	}else{
		echo "<a href='#'>No record</a>";
	}
}

 ?>