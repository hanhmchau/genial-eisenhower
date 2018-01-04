<?php
session_start();
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Eisenhower Matrix</title>
	<!-- Bootstrap -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
	<!--<script src="https://npmcdn.com/bootstrap@4.0.0-alpha.5/dist/js/bootstrap.min.js"></script>-->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body {
			font-family: "wf_SegoeUILight", "wf_SegoeUI", "Segoe UI Light", "Segoe WP Light", "Segoe UI", "Segoe", "Segoe WP", "Tahoma", "Verdana", "Arial", "sans-serif";
		}
		
		.letter-spacing-wide {
			letter-spacing: 3px;
		}
		
		.letter-spacing-ultra-wide {
			letter-spacing: 8px;
		}
		
		.first-row {
			box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);
		}
		
		.blue {
			border-color: rgb(35, 203, 255);
		}
		
		.blue-text {
			color: rgb(35, 203, 255);
		}
		
		.blue-background {
			background-color: rgb(35, 203, 255);
		}
		
		.green {
			border-color: rgb(152, 205, 96);
		}
		
		.green-text {
			color: rgb(152, 205, 96);
		}
		
		.green-background {
			background-color: rgb(152, 205, 96);
		}
		
		.orange {
			border-color: rgb(255, 154, 30);
		}
		
		.orange-text {
			color: rgb(255, 154, 30);
		}
		
		.orange-background {
			background-color: rgb(255, 154, 30);
		}
		
		.red {
			border-color: rgb(255, 101, 37);
		}
		
		.red-text {
			color: rgb(255, 101, 37);
		}
		
		.red-background {
			background-color: rgb(255, 101, 37);
		}
		
		.tealgreen-background {
			background-color: rgb(114, 200, 144);
		}
		
		.darken-on-hover:hover {
			box-shadow: inset 0 0 0 99999px rgba(128, 128, 128, 0.25);
		}
		
		.white-background {
			background-color: white;
		}
		
		.section {
			min-height: 58vh;
			border-radius: 1%;
			border-style: solid;
			border-width: 1px 1px 1px 10px;
		}
		
		textarea {
			font-family: "wf_SegoeUILight", "wf_SegoeUI", "Segoe UI Light", "Segoe WP Light", "Segoe UI", "Segoe", "Segoe WP", "Tahoma", "Verdana", "Arial", "sans-serif";
			border-radius: 0px;
			transition: all ease-in-out 0.5s;
			resize: none;
			overflow: hidden;
		}
		
		textarea:focus::-webkit-input-placeholder {
			font-size: 10px;
			transform: translateY(-130%);
			transition: all ease-in-out 0.5s;
		}
		
		input[type=text]:focus,
		input[type=password]:focus {
			outline: 0px !important;
		}
		
		input[type=text]::-webkit-input-placeholder,
		input[type=password]::-webkit-input-placeholder {
			font-size: 13px;
			color: silver;
		}
		
		.border-bottom {
			border-width: 0px 0px 1px 0px;
			border-style: solid;
			border-color: rgba(0, 0, 0, 0.15);
		}
		
		.cursor-pointer {
			cursor: pointer;
		}
		
		.btn-outer {
			cursor: pointer;
			padding: 0px 10%;
		}
		
		.dropdown-toggle::after {
			display: none;
		}
		
		.dropdown-menu {
			padding: .5rem;
		}
		
		.pull-dropdown-right {
			transform: translateX(-80%);
		}
		
		.item-list {
			overflow-Y: overlay;
			height: 40vh;
			overflow-X: visible;
		}
		
		.btn-toggle {
			font-size: small;
		}
		
		.btn-toggle:hover {
			background-color: #E8E8E8;
		}
		
		.finished {
			background: #ffffff !important;
			color: silver;
		}
		
		.border-0:focus {
			outline: none;
		}
		
		a:hover {
			text-decoration: none;
		}
		
		.hide-show-toggle {
			/*			display: none;*/
		}
		
		.initially-hidden {
			display: none;
		}
		
		textarea.finished {
			text-decoration: line-through;
		}
		
		::-webkit-scrollbar {
			width: 10px;
		}
		
		::-webkit-scrollbar-track {
			border-radius: 10px;
		}
		
		::-webkit-scrollbar-thumb {
			background-color: lightgray;
			border-radius: 10px;
		}
		
		::-webkit-scrollbar-thumb::hover {
			background-color: silver;
		}
		
		div::-webkit-scrollbar-thumb {
			background-color: whitesmoke;
		}
		
		div::-webkit-scrollbar-thumb:hover {
			background-color: gainsboro;
		}
		
		#focus {
			display: none;
			height: 100vh;
			position: fixed;
			left: 0px;
			top: 0px;
			z-index: 1;
			background-color: white;
			background-color: rgba(255, 255, 255, 0.97);
			/* White w/opacity */
			overflow: hidden;
			/* Disable horizontal scroll */
			transition: 0.5s;
			/* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal) */
		}
		
		.close-modal {
			border-radius: 50%;
			cursor: pointer;
		}
		
		.close-modal:hover {
			background-color: gainsboro;
		}
		
		.overlay-content {
			height: 75vh;
		}
		
		.overlay-timer {
			border-radius: 50%;
			padding-top: 9vh;
			width: 25vh;
			color: rgb(114, 200, 144);
			height: 25vh;
			border: 0.1rem solid rgb(114, 200, 144);
		}
		
		#login {
			/*			height: 100vh;*/
		}
		
		.curved-shadow {
			background-color: white;
			position: relative;
			box-shadow: 20px 20px 40px -20px lightgray;
		}
		
		.curved-shadow:before,
		.curved-shadow:after {
			z-index: -1;
			position: absolute;
			content: "";
			bottom: 15px;
			left: 10px;
			width: 50%;
			top: 80%;
			background: lightgray;
			box-shadow: 0 20px 40px 0px lightgray;
			transform: rotate(-8deg);
		}
		
		.curved-shadow:after {
			transform: rotate(8deg);
			right: 10px;
			left: auto;
		}
		
		.btn-log-in {
			border-radius: 50px;
			cursor: pointer;
		}
		
		.text-black,
		.text-black:hover,
		.text-black:focus,
		.text-black:active {
			color: black;
		}
		
		.btn-register {
			background-color: white;
			border: 2px solid #eee;
			color: dimgray;
		}
		
		.form-control:focus {
			border: 1px solid rgba(0, 0, 0, .15);
		}
		
		.pinkred-background {
			background-color: #ff3860;
		}
	</style>
</head>

<body>
	<div id="header" class="container-fluid row first-row p-4 m-0">
		<?php
		include "EisenhowerHeader.php";
		?>
	</div>

	<div id="login" class="container-fluid pt-md-5 pt-3 px-0 m-0 text-center">
	</div>

	<div id="app">
	</div>
	
	<div id="footer">
		
	</div>
</body>
<script>
	let data;
	let finished;
	const TEXT = {
		blue: "Do first",
		green: "Schedule",
		orange: "Delegate",
		red: "Don't do"
	}
	const MAX_LENGTH = 50;

	function generateLinker() {
		for ( let color in TEXT ) {
			if ( TEXT.hasOwnProperty( color ) ) {
				$( "#linker" )[ 0 ].innerHTML += "<a href='#" + color + "' class=\"text-white w-50 " + color + "-background py-2 font-weight-bold text-center float-left\">" + TEXT[ color ] + "</a>";
			}
		}
	}

	window.onload = function () {
		//		generateLinker();
		//		resizeTextarea();
		$.ajax( {
			url: "EisenhowerPersistent.php",
			type: "POST",
			data: {},
			error: function () {},
			success: function ( response ) {
				if (response!=0){
					loginSuccessful();
				}
				else {
					$("#login").load("EisenhowerLogo.php");					
				}
			}
		} );

	};

	function autoresize( textarea ) {
		let el = textarea;
		setTimeout( function () {
			el.style.cssText = 'height:auto; padding-bottom:10px';
			el.style.height = el.scrollHeight + "px";
		}, 0 );
	}

	$( window ).resize( function () {
		resizeTextarea();
	} );

	function resizeTextarea() {
		$( ".autosize" ).each( function ( index ) {
			autoresize( this );
		} );
	}

	$( "#app" ).on( "keydown", ".autosize", function () {
		autoresize( this );
	} );

	$( "#app" ).on( "click", ".btn-toggle", function ( event ) {
		var color = this.dataset.color;
		$( ".hide-show-toggle[data-color=" + color + "]" ).toggle();
		resizeTextarea();
		var state;

		if ( this.innerHTML.startsWith( "Show" ) ) {
			this.innerHTML = this.innerHTML.replace( "Show", "Hide" );
			state = "Shown";
		} else {
			this.innerHTML = this.innerHTML.replace( "Hide", "Show" );
			state = "Hidden";
		}

		$.ajax( {
			url: "EisenhowerCookie.php",
			type: "POST",
			data: {
				"color": color,
				"state": state
			},
			error: function () {},
			success: function ( response ) {}
		} );
	} );

	$( "#app" ).on( "keypress", ".task-edit", function ( e ) {
		if ( e.which == 13 && !e.shiftKey ) {
			var target = e.target;
			var id = target.closest( ".item" ).id;

			if ( target.value === "" ) {
				return;
			}
			var value = target.value;

			$.ajax( {
				url: 'EisenhowerAjax.php',
				type: 'POST',
				data: {
					id: id,
					description: value,
					edit: 1
				},
				error: function () {},
				success: function ( response ) {}
			} );

			e.preventDefault();
			target.blur();
			return false;
		}
	} );

	$( "#app" ).on( "keypress", ".new-task", function ( e ) {
		if ( e.which == 13 && !e.shiftKey ) {
			var target = e.target;

			if ( target.value === "" ) {
				return;
			}
			var value = target.value;
			var color = target.closest( ".quadrant" ).id;

			$.ajax( {
				url: 'EisenhowerAjax.php',
				type: 'POST',
				data: {
					description: value,
					color: color,
					insert: 1
				},
				error: function () {},
				success: function ( response ) {
					$( "#field" ).load( "EisenhowerGetData.php", function () {
						resizeTextarea();
						$( "#new-" + color ).focus();
					} );
				},
			} );

			e.preventDefault();
			target.value = "";
			target.focus();
			return false;
		}
	} );


	$( '#app' ).on( 'show.bs.dropdown', ".btn-group", function ( event ) {
		let target = $( event.target );
		let top = target.offset().top + target.height() - $( window ).scrollTop();
		let left = target.offset().left + target.width() - $( window ).scrollLeft();
		target.find( ".dropdown-menu" ).css( {
			"position": "fixed",
			"top": top + "px",
			"left": left + "px"
		} );
	} );

	$( "#app,#header" ).on( "click", "[data-action]", function ( event ) {
		let action = event.target.dataset.action;
		switch ( action ) {
			case "finish":
				finish( event.target );
				break;
			case "delete":
				remove( event.target );
				break;
			case "restore":
				restore( event.target );
				break;
			case "delegate":
				sendMail();
				break;
			case "focus":
				focus( event.target );
				break;
			case "sign-out": signOut();
				break;
		}
	} );
	
	function signOut(){
		$.ajax( {
			url: "EisenhowerSignout.php",
			type: "POST",
			data: {},
			error: function () {},
			success: function ( response ) {
//				alert(response);
				$("#login").load("EisenhowerLogo.php",function(){
					$("#login").show();
				});
				$("#app").hide();
				$( ".user-details" ).hide();				
			}
		} );		
	}

	function finish( target ) {
		var id = target.closest( ".item" ).id;
		if ( id.length == 0 ) {
			id = target.closest( ".item" ).dataset.id;
		}

		$.ajax( {
			url: "EisenhowerAjax.php",
			type: "POST",
			data: {
				id: id,
				finish: 1
			},
			error: function () {},
			success: function ( response ) {
				$( "#field" ).load( "EisenhowerGetData.php", resizeTextarea );
				closeModal();
			}
		} );
	}

	function remove( target ) {
		var id = target.closest( ".item" ).id;
		$.ajax( {
			url: 'EisenhowerAjax.php',
			type: 'POST',
			data: {
				id: id,
				delete: 1
			},
			error: function () {},
			success: function ( response ) {
				$( "#field" ).load( "EisenhowerGetData.php", resizeTextarea );
			},
		} );
	}

	function restore( target ) {
		var id = target.closest( ".item" ).id;
		$.ajax( {
			url: 'EisenhowerAjax.php',
			type: 'POST',
			data: {
				id: id,
				restore: 1
			},
			error: function () {},
			success: function ( response ) {
				$( "#field" ).load( "EisenhowerGetData.php", resizeTextarea );
			},
		} );
	}


	function sendMail() {
		window.location.href = 'mailto:?subject=Can you take over here&body=Please assist me with this task.%0A%0A%0A';
	}

	function focus( target ) {
		var id = target.closest( ".item" ).id;
		var desc = $( "#" + id ).find( "textarea" )[ 0 ].value;
		$.ajax( {
			url: 'EisenhowerPomodoro.php',
			type: 'POST',
			data: {
				"id": id,
				"description": desc
			},
			error: function ( response ) {},
			success: function ( response ) {
				$( "#focus" ).empty();
				$( "#focus" ).append( response );
				$( "#focus" ).show();
				$( ".overlay-button-pair" ).hide();
			}
		} );
	}

	var timer;
	var originalTime;
	var seconds;

	$( "#app" ).on( "click", ".close-modal", closeModal );

	function closeModal() {
		clearInterval( timer );
		$( "#focus" ).hide();
	}

	$( "#app" ).on( "click", ".btn-num", function ( event ) {
		var value = parseInt( event.target.dataset.value );
		var current = $( ".overlay-timer" ).text();
		current = parseInt( current.substr( 0, current.indexOf( ":" ) ) );
		var newValue = current + value;

		if ( newValue >= 0 && newValue <= 60 ) {
			$( ".overlay-timer" ).text( newValue + ":00" );
		}
	} );

	$( "#app" ).on( "click", ".overlay-timer-start", function ( event ) {
		var current = $( ".overlay-timer" ).text();
		current = parseInt( current.substr( 0, current.indexOf( ":" ) ) );

		seconds = current * 60;
		originalTime = seconds;

		timer = setInterval( function () {
			seconds -= 1;
			var minute = Math.floor( seconds / 60 );
			var second = ( seconds ) % 60;

			if ( seconds <= 0 ) {
				clearInterval( timer );
			} else {
				$( ".overlay-timer" ).text( minute + ":" + second );
			}
		}, 1000 );

		$( ".overlay-button-pair" ).show();
		$( event.target ).hide();
	} );

	$( "#app" ).on( "click", ".overlay-timer-reset", function ( event ) {
		clearInterval( timer );
		$( ".overlay-button-pair" ).hide();
		$( ".overlay-timer-start" ).show();
		var minute = Math.floor( originalTime / 60 );
		$( ".overlay-timer" ).text( minute + ":00" );
	} );


	$( "#app" ).on( "dragstart", ".item", function ( event ) {
		event.originalEvent.dataTransfer.setData( "item", event.target.id );
	} );

	$( "#app" ).on( "dragover", ".quadrant", function ( event ) {
		event.preventDefault();
	} );

	$( "#app" ).on( "drop", ".quadrant", function ( event ) {
		event.preventDefault();
		var id = event.originalEvent.dataTransfer.getData( "item" );
		var color = this.id;
		$.ajax( {
			url: 'EisenhowerAjax.php',
			type: 'POST',
			data: {
				"id": id,
				"newColor": color,
				"recolor": 1
			},
			error: function ( response ) {},
			success: function ( response ) {
				$( "#field" ).load( "EisenhowerGetData.php", resizeTextarea );
			}
		} );
	} );

	$( "#login" ).on( "click", ".btn", function ( event ) {
		action = this.dataset.action;
		switch ( action.toLowerCase() ) {
			case "login-mode":
				registerOrLogin( "Login" );
				break;
			case "register-mode":
				registerOrLogin( "Register" );
				break;
			case "back":
				backToLoginRegisterChoice();
				break;
			case "login":
				login();
				break;
			case "register":
				register();
				break;
		}
	} );

	function login() {
		$( "#result-message" ).hide();
		let email = $( "#email" )[ 0 ].value;
		let password = $( "#password" )[ 0 ].value;
		$.ajax( {
			url: "EisenhowerLogin.php",
			type: "POST",
			data: {
				email: email,
				password: password,
				login: 1
			},
			error: function () {},
			success: function ( response ) {
//				alert(response);
				if ( response ) {
					loginSuccessful();
				} else {
					$( "#result-message" ).children( "span" )[ 0 ].innerHTML = "Incorrect login credentials.";
					$( "#result-message" ).show();
				}
			}
		} );
	}

	function loginSuccessful() {
		$( "#login" ).hide();
		$("#app").show();
		$( "#app" ).load( "EisenhowerApp.php", function () {
			generateLinker();
			resizeTextarea();
		} );
		$( "#header" ).load( "EisenhowerHeader.php", function () {
			$( ".user-details" ).show();
		} );

	}

	function validateEmail( mail ) {
		if ( /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test( mail ) ) {
			return ( true )
		}
		return ( false );
	}

	function validatePassword( password ) {
		var decimal = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,}$/;
		if ( password.match( decimal ) ) {
			return true;
		}
		return false;

	}

	function validateRegister( email, password ) {
		let errorMessage = "";
		if ( !validateEmail( email ) ) {
			errorMessage += "<div class='py-1'>- Please enter a valid email.</div>";
		}
		if ( !validatePassword( password ) ) {
			errorMessage += "<div class='py-1'>- Password (minimum 8 characters) must contain at least one lowercase letter, one uppercase letter, one numeric digit, one special character.</div>";
		}
		return errorMessage;
	}

	function register() {
		$( "#result-message" ).hide();
		let email = $( "#email" )[ 0 ].value;
		let password = $( "#password" )[ 0 ].value;

		let mes = validateRegister( email, password );
		if ( mes !== "" ) {
			$( "#result-message" ).children( "span" )[ 0 ].innerHTML = mes;
			$( "#result-message" ).show();
			return;
		}

		$.ajax( {
			url: "EisenhowerRegister.php",
			type: "POST",
			data: {
				email: email,
				password: password,
				register: 1
			},
			error: function () {},
			success: function ( response ) {
				if ( response != 0 ) {
					$( "#success-message" ).show();
					setTimeout(login,1000);
				} else {
					$( "#result-message" ).children( "span" )[ 0 ].innerHTML = "This email is already in use.";
					$( "#result-message" ).show();
				}
			}
		} );
	}

	$( "#login" ).on( "click", "[data-dismiss='alert']", function ( event ) {
		event.preventDefault();
		$( event.target.parentNode ).hide();
		return false;
	} )

	function registerOrLogin( mode ) {
		$( "#register-login-field" ).load( "EisenhowerRegisterLoginView.php", function () {
			$( "#login-register-button" )[ 0 ].innerHTML = mode;
			$( "#login-register-button" )[ 0 ].dataset.action = mode.toLowerCase();
			$( "#login-register-button" )[ 0 ].parentNode.dataset.action = mode.toLowerCase();
			if ( mode == "Login" ) {
				$( "#eye-toggle" ).hide();
				$( "#password" ).removeClass( "border-right-0" );
			} else {
				$( "#eye-toggle" ).show();
				$( "#password" ).addClass( "border-right-0" );
			}
		} );
	}

	$( "#login" ).on( "click", "#eye-toggle", function () {
		if ( $( "#password" )[ 0 ].type == "text" ) {
			$( "#password" )[ 0 ].type = "password";
		} else {
			$( "#password" )[ 0 ].type = "text";
		}
	} );

	function backToLoginRegisterChoice() {
		$( "#register-login-field" ).load( "EisenhowerRegisterLoginChoice.php" );
	}
</script>

</html>