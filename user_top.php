<div class="time_date">
	<p id="datetime"></p>
	<script>
	var dt = new Date();
	document.getElementById("datetime").innerHTML = dt.toLocaleString();
	</script>
</div>
<div class="logo">
	<h3>My<span>Tour</span></h3>
</div>
<div class="header_menu">
	<ul>
		<li>
			<form action="">
				<input type="text" name="search" placeholder="Search by name">
				<button><i class="fas fa-search-plus"></i></button>
				<!-- <i class="fas fa-search-plus"></i>
				<input type="submit" name="submit" value=""> -->
			
			</form>
		</li>
		<li>
			<i class="fas fa-home"></i><a href="?key=<?php echo 1; ?>">Home</a>
		</li>
		<li>
			<i class="fas fa-image"></i><a href="?key=<?php echo 2; ?>">Galary</a>
		</li>
		<li>
			<i class="fab fa-accusoft"></i><a href="?key=<?php echo 3; ?>">Tour-Category</a>
		</li>
		<li>
			<i class="fas fa-address-card"></i><a href="?key=<?php echo 4; ?>">About</a>
		</li>
		<li>
			<i class="fas fa-phone-square"></i><a href="?key=<?php echo 5; ?>">Contact</a>
		</li>
	</ul>
</div>
<div class="login">
	<p><a href="#">Signup</a></p>
</div>
