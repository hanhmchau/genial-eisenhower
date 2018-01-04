<div class="col-12 text-right h-25">
	<button class="close-modal mt-4 mr-0 bg-faded btn"><span class="h5">x</span></button>
</div>

<div data-id="<?=$id ?>" class="item overlay-content text-center w-100 p-0">
	<div class="overlay-title h3 font-weight-bold"><?=$title ?></div>
	<div class="overlay-message h5 mt-4 text-muted">Choose Focus Mode Time</div>
	<button class="btn cursor-pointer btn-num mr-2 bg-faded" data-value="-5">-</button>
	<div class="overlay-timer mt-3 h2 d-inline-block">25:00</div>
	<button class="btn cursor-pointer btn-num ml-2 bg-faded" data-value="5">+</button>
	<br>
	<button class="btn cursor-pointer tealgreen-background darken-on-hover overlay-timer-start text-white h5 m-3">Start timer</button>
	<div class="overlay-button-pair">
		<button class="btn cursor-pointer darken-on-hover tealgreen-background text-white h5 m-3 overlay-timer-reset">Reset timer</button>
		<button class="btn cursor-pointer darken-on-hover tealgreen-background text-white h5 m-3" data-action="finish">Finish task</button>
	</div>
</div>