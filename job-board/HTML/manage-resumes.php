<?php session_start() ?>
<?php require_once ('connection.php')?>
<?php require_once ('function.php')?>
<?php require_once('head.php') ?>


<!-- Header
================================================== -->
<?php
if (checkLogged() == 1) {
    require_once('header_2.php');
} else {
    require_once('header.php');
}
?>
<div class="clearfix"></div>


<!-- Titlebar
================================================== -->
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>Manage Resumes</h2>
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="#">Home</a></li>
					<li>Candidate Dashboard</li>
				</ul>
			</nav>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	
	<!-- Table -->
	<div class="sixteen columns">

		<p class="margin-bottom-25">Your resume can be viewed, edited or removed below.</p>

		<table class="manage-table resumes responsive-table">

			<tr>
				<th><i class="fa fa-user"></i> Name</th>
				<th><i class="fa fa-file-text"></i> Title</th>
				<th><i class="fa fa-map-marker"></i> Location</th>
				<th><i class="fa fa-calendar"></i> Date Posted</th>
				<th></th>
			</tr>

			<!-- Item #1 -->
			<tr>
				<td class="title"><a href="#">John Doe</a></td>
				<td>Front End Web Developer</td>
				<td>New York</td>
				<td>September 30, 2015</td>
				<td class="action">
					<a href="#"><i class="fa fa-pencil"></i> Edit</a>
					<a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
					<a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
				</td>
			</tr>

			<!-- Item #1 -->
			<tr>
				<td class="title"><a href="#">John Doe</a></td>
				<td>Logo Designer</td>
				<td>New York</td>
				<td>August 12, 2015</td>
				<td class="action">
					<a href="#"><i class="fa fa-pencil"></i> Edit</a>
					<a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
					<a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
				</td>
			</tr>	

		</table>

		<br>

		<a href="#" class="button">Add Resume</a>

	</div>

</div>


<!-- Footer
================================================== -->
<div class="margin-top-60"></div>

    <?php require_once ('footer.php')?>
    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<?php require_once ('script_tag.php')?>



</body>
</html>