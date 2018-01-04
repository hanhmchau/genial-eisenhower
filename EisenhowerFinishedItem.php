<div id="<?php echo $task['Id'] ?>" data-color="<?php echo $color ?>" class="finished item w-100 border-bottom clearfix pt-3 py-2" draggable="true">
	<form>
		<textarea disabled type="text" rows="1" maxlength="120" autocorrect="off" autocapitalize="off" spellcheck="false" class="finished float-left autosize font-weight-bold pl-0 col-9 col-sm-10 col-lg-9 border-0 pb-2"><?php echo $task['Description'] ?></textarea>
	</form>
	<div class="col-2 col-lg-3 float-right text-right pr-0">
		<button class="<?php echo $color ?>-text btn btn-link btn-sm px-2 cursor-pointer border-0"><span data-action="delete" class="fa fa-trash-o"></span></button>
		<button class="<?php echo $color ?>-text btn btn-link btn-sm px-1 btn-outer border-0"><span data-action="restore" class="fa fa-undo"></span></button>
	</div>
</div>