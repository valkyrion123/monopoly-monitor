<div data-role='page' id='login' data-theme='b'>
	<div data-role='header' data-position='fixed'>
		<h2>Monopoly</h2>
		<!-- <a href="#main-menu" data-icon='home' data-role='button' data-transition='slide'>Home</a> -->
	</div>
	<div data-role='content' class='ui-content'>
		<h2 align='center'>Login</h2>
	</div>
	<div data-role="main" class="ui-content">	
		<form>
			<div class="ui-field-contain">
				<label for="name">Name:</label>
				<input type="text" name="name" id="login-name">
				<label for="password">Password:</label>
				<input type="password" name="pass" id="login-pass" placeholder="">
			</div>
			<small>
			<a href="#register">Do not have an account?</a>
			<br>
			<br>
			<a href="#">Forgot password?</a>
			</small>
		</form>
		 <input class='login-submit' type="submit" data-inline="true" value="Login">
	</div>
	<div data-role='footer' data-position="fixed">
		<h1>&copy; Stoopid Inhooman 2016</h1>
	</div>
</div>