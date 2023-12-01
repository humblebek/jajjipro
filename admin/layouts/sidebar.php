<section id="sidebar">
	<a href="#" class="brand">
		<i class='bx bxs-smile'></i>
		<span class="text">AdminHub</span>
	</a>
	<ul class="side-menu top">
		<li class="active">
			<a href="?page=main">
				<i class='bx bxs-dashboard'></i>
				<span class="text">Dashboard</span>
			</a>
		</li>
		<li>
			<a href="?page=groups/index">
				<i class='bx bxs-shopping-bag-alt'></i>
				<span class="text">Groups</span>
			</a>
		</li>
		<li>
			<a href="?page=teachers/index">
				<i class='bx bxs-group'></i>
				<span class="text">Teachers</span>
			</a>
		</li>
		<li>
			<a href="?page=articles/index">
				<i class='bx bxs-card'></i>
				<span class="text">Articles</span>
			</a>
		</li>
		<li>
			<a href="?page=achievments/index">
				<i class='bx bxs-award'></i>
				<span class="text">Achievments</span>
			</a>
		</li>
		<li>
			<a href="?page=bookClass/index">
				<i class='bx bxs-award'></i>
				<span class="text">Book a class</span>
			</a>
		</li>

		<?php
		if ($_SESSION['admin_type'] ==1) { 
			echo "<li>
			<a href='log/register.php'>
				<i class='bx bx-plus'></i>
				<span class='text'>Add admin</span>
		</li>";
			} 

		?>

		</li>
	</ul>
	<ul class="side-menu">
		<li style="margin-bottom: 25px;">
			<a href="log/login.php">
				<i class='bx bx-log-in' style="color: green;"></i>
				<span style="color: green;" class="text">login</span>
			</a>
		</li>
		<li>
			<a href="log/logout.php" class="logout">
				<i class='bx bx-log-out'></i>
				<span class="text">Logout</span>
			</a>
		</li>
	</ul>
</section>