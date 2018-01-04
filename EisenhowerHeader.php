<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<div class="col-6 title">
	<span class="h5 title font-weight-bold text-uppercase letter-spacing-wide">Eisenhower</span>
	<span class="h6 subtitle ml-2 hidden-sm-down">Matrix</span>
</div>

<div class="col-6 text-right user-details initially-hidden">
	<span class="h6 subtitle mr-2 hidden-sm-down"><?=$_SESSION["user"]?></span>
	<div class="btn-group">
		<button type="button" class="cursor-pointer btn white-background py-0 px-2 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<span class="text-muted h1 fa fa-chevron-circle-down"></span>
  </button>
	
		<div class="dropdown-menu-right dropdown-menu">
<!--
			<a class="dropdown-item" data-action="change-password" href="javascript:void(0);">Change password</a>
			<div class="dropdown-divider"></div>
-->
			<a class="dropdown-item" data-action="sign-out" href="javascript:void(0);">Sign out</a>
		</div>
	</div>
</div>