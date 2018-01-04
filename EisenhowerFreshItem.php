<div id="<?=$task['Id'] ?>" data-color="<?=$color ?>" class="item w-100 border-bottom clearfix pt-3 py-2" draggable="true">
	<form>
		<textarea type="text" rows="1" maxlength="120" autocorrect="off" autocapitalize="off" spellcheck="false" class="float-left task-edit autosize font-weight-bold pl-0 col-9 col-sm-10 col-lg-9 border-0 pb-2"><?=$task['Description'] ?></textarea>
	</form>
	<div class="col-2 col-lg-3 float-right text-right pr-0">
	
		<div class="btn-group" style="position-relative" data-color="<?=$color ?>">
			<button type="button" class="bg-white <?=$color ?>-text btn btn-sm btn-link btn-outer border-0 dropdown-toggle px-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="fa fa-ellipsis-v"></span>
							  </button>
		
			<div class="dropdown-menu pull-dropdown-right">
				<a class="dropdown-item" data-action="finish" href="javascript:void(0);">Finish</a>
				<a class="dropdown-item" data-action="focus" href="javascript:void(0);">Focus Mode</a>
				<a class="dropdown-item" data-action="delegate" href="javascript:void(0);">Delegate</a>
				<a class="dropdown-item" data-action="delete" href="javascript:void(0);">Delete</a>
			</div>
		</div>

		<button class="<?=$color ?>-text btn btn-link btn-outer btn-sm px-1 border-0"><span class="fa fa-check" data-action="finish"></span></button>
	</div>
</div>