<div class="col-md-4 offset-md-4 px-5 px-md-4">
	<div id="result-message" class="initially-hidden alert pinkred-background small font-weight-bold text-white alert-dismissable">
		<a href="#" class="pt-0 close" data-dismiss="alert" aria-label="close">&times;</a>
		<span>There is no user record corresponding to this identifier.</span>
	</div>
	<div id="success-message" class="initially-hidden alert green-background small font-weight-bold text-white alert-dismissable">
		<a href="#" class="pt-0 close" data-dismiss="alert" aria-label="close">&times;</a>
		<span>Successfully registered!</span>
	</div>
	<form method="post">
<!--		Email-->
		<div class="input-group">
			<span class="input-group-addon white-background text-muted fa fa-envelope border-right-0" id="basic-addon1"></span>
			<input id="email" type="text" class="border-left-0 form-control form-control-sm" placeholder="E-mail" aria-describedby="basic-addon1"/>
		</div>
		</form>
<!--			Password-->
		<div class="input-group mt-2">
			<span class="input-group-addon white-background text-muted fa fa-key border-right-0" id="basic-addon2"></span>
			<input id="password" type="password" class="border-left-0 border-right-0 form-control form-control-sm" placeholder="Password" aria-describedby="basic-addon2"/>
			<span class="cursor-pointer input-group-addon white-background text-muted fa fa-eye border-left-0" id="eye-toggle"></span>
		</div>
		<div class="col-12 mt-4">
			<div class="row">
<!--			BACK BUTTON-->
				<div class="col-2 px-0 text-left"><button class="btn tealgreen-background darken-on-hover text-white" data-action="back"><span class="fa fa-long-arrow-left"></span></button>
				</div>

<!--			Login/Register Button-->
				<div class="col-10 px-0 text-right"><button class="btn w-100 tealgreen-background darken-on-hover text-white" data-action=""><span id="login-register-button" class="small">Login</span></button>
				</div>
			</div>
		</div>
</div>