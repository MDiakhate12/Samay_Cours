<?php require("partials/header.php"); ?>
<?php require("partials/nav.php"); ?>

<?php include("templates/errors.php"); ?>

<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<div class="login100-pic js-tilt" data-tilt>
				<img src="images/register_icon.png" alt="IMG">
			</div>

			<form method="POST" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" class="login100-form validate-form">
				<span class="login100-form-title">
					Create a new account
				</span>

				<div class="wrap-input100 validate-input" data-validate="Valid username is required">
					<input class="input100" type="text" name="username" placeholder="Username">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
					<input class="input100" type="text" name="email" placeholder="Email">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Password is required">
					<input class="input100" type="password" name="password" placeholder="Password">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Password is required">
					<input class="input100" type="password" name="password_confirm" placeholder="Password Confirmation">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
						<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
				</div>

				<div class="container-login100-form-btn">
					<button type="submit" class="login100-form-btn">
						Register
					</button>
				</div>

				<div class="text-center p-t-136">
					<a class="txt2" href="#">
					Already have an account ?
					<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
					</a>
				</div>
			</form>
		</div>
	</div>
</div>


<?php require("partials/footer.php"); ?>