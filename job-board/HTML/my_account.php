<?php session_start() ?>

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

				<form method="post" class="login" action="login_process.php">

					
					<p class="form-row form-row-wide">
						<label for="username">Username or Email Address:</label>
						<input type="text" class="input-text" name="user_name" id="username" value="" />
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

					<form method="post" class="register" action="reg_process.php">

                        <p class="form-row d-flex form-row-wide">
                            <input type="button" value="Candidate" class="type_reg candidate_reg active">
                            <input type="button" value="Employer" class="type_reg employer_reg">
                            <input type="hidden"  name="type_register" id="reg_type" value="1" />
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
 <?php
if (isset($_SESSION['reg']) && $_SESSION['reg'] == 1) {
    ?>
    <script>
        $(document).ready(function executeExample() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'success',
                title: 'Đăng ký thành công'
            })
        });
    </script>
    <?php
} elseif (isset($_SESSION['reg']) && $_SESSION['reg'] == 2) {
    ?>
    <script>
        $(document).ready(function executeExample() {
            Swal.fire({
                icon: 'error',
                title: 'Đăng ký không thành công, email hoặc tên đăng nhập đã được sử dụng!',
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            })
        });

    </script>
    <?php
}
unset($_SESSION['reg']);
 if (isset($_SESSION['login_success']) && $_SESSION['login_success'] == 1) {
     ?>
     <script>
         $(document).ready(function executeExample() {
             const Toast = Swal.mixin({
                 toast: true,
                 position: 'top-end',
                 showConfirmButton: false,
                 timer: 3000,
                 timerProgressBar: true,
                 didOpen: (toast) => {
                     toast.addEventListener('mouseenter', Swal.stopTimer)
                     toast.addEventListener('mouseleave', Swal.resumeTimer)
                 }
             })
             Toast.fire({
                 icon: 'success',
                 title: 'Đăng nhập thành công'
             })
         });
     </script>
     <?php
 } elseif (isset($_SESSION['login_success']) && $_SESSION['login_success'] == 0) {
     ?>
     <script>
         $(document).ready(function executeExample() {
             Swal.fire({
                 icon: 'error',
                 title: 'Đăng nhập không thành công! Tài khoản hoặc mật khẩu không đúng!',
                 showClass: {
                     popup: 'animate__animated animate__fadeInDown'
                 },
                 hideClass: {
                     popup: 'animate__animated animate__fadeOutUp'
                 }
             })
         });

     </script>
     <?php
 }
 unset($_SESSION['login_success']);
?>

</body>
</html>