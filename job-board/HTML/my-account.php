<?php require_once ('head.php')?>


<!-- Header
================================================== -->
<?php require_once ('header.php')?>
<div class="clearfix"></div>


<!-- Titlebar
================================================== -->
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>My Account</h2>
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="#">Home</a></li>
					<li>My Account</li>
				</ul>
			</nav>
		</div>

	</div>
</div>


<!-- Content
================================================== -->

<!-- Container -->
<div class="container">

	<div class="my-account">

		<ul class="tabs-nav">
			<li class=""><a href="#tab1">Login</a></li>
			<li><a href="#tab2">Register</a></li>
		</ul>

		<div class="tabs-container">
			<!-- Login -->
			<div class="tab-content" id="tab1" style="display: none;">

				<h3 class="margin-bottom-10 margin-top-10">Login</h3>

				<form method="post" class="login">

					
					<p class="form-row form-row-wide">
						<label for="username">Username or Email Address:</label>
						<input type="text" class="input-text" name="username" id="username" value="" />
					</p>

					<p class="form-row form-row-wide">
						<label for="password">Password:</label>
						<input class="input-text" type="password" name="password" id="password" />
					</p>

					<p class="form-row">
						<input type="submit" class="button" name="login" value="Login" />

						<label for="rememberme" class="rememberme">
						<input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember Me</label>
					</p>

					<p class="lost_password">
						<a href="#" >Lost Your Password?</a>
					</p>

					
				</form>
			</div>

				<!-- Register -->
				<div class="tab-content" id="tab2" style="display: none;">

					<h3 class="margin-bottom-10 margin-top-10">Register</h3>

					<form method="post" class="register">

                        <p class="form-row d-flex form-row-wide">
                            <input type="button" value="Candidate" class="type_reg candidate_reg">
                            <input type="button" value="Employer" class="type_reg employer_reg">
                            <input type="hidden"  name="type_register" id="reg_email" value="1" />
                        </p>
						
						<p class="form-row form-row-wide">
							<label for="reg_email">User name:</label>
							<input type="text" class="input-text" name="user_name" id="reg_email" value="" />
						</p>

						
						<p class="form-row form-row-wide">
							<label for="reg_password">Email:</label>
							<input type="email" class="input-text" name="email" id="reg_password" />
						</p>

						<p class="form-row">
							<input type="submit" class="button" name="register" value="Register" />
						</p>
						
					</form>
				</div>
		</div>
	</div>
</div>



<!-- Footer
================================================== -->
<div class="margin-top-30"></div>

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