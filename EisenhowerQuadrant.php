<div id="<?=$color ?>" class="quadrant col-12 col-lg-5 px-0 px-md-3 mb-3 mt-md-1 mb-md-4">
	<div class="section <?=$color ?> py-4 pl-4 pr-2">
		<!--    		section title-->
		<span class="section-title font-weight-bold">
			<?=$names["$color"] ?>
		</span>
		<span class="badge badge-pill badge-default">
			<?=sizeof($freshResults["$color"]) ?>
		</span>
		<div class="mt-4 border-bottom mr-4">
			<form>
				<textarea id="new-<?=$color ?>" type="text" maxlength="120" rows="1" autocorrect="off" autocapitalize="off" spellcheck="false" class="new-task font-weight-bold pl-0 pt-3 pb-1 w-100 border-0" placeholder="Create new task ..."></textarea>
			</form>
		</div>

		<div data-color="<?=$color ?>" id="<?=$color ?>-items" class="item-list">
			<div data-color="<?=$color ?>" id="<?=$color ?>-fresh" class="pr-4">
				<!--one item-->
				<?php
				foreach ( $freshResults[ "$color" ] as $task ) {
					include "EisenhowerFreshItem.php";
				}
				?>
			</div>

			<div id="<?=$color ?>-finished" data-color="<?=$color ?>" class="pr-4 hide-show-toggle <?=$finishedState["$color"] ?>">
				<?php
				foreach ( $finishedResults[ "$color" ] as $task ) {
					include "EisenhowerFinishedItem.php";
				}
				?>
			</div>
		</div>
		
		<button id="<?=$color ?>-toggle" data-color="<?=$color ?>" class="<?=$visi["$color"] ?> btn btn-toggle btn-sm mt-3"><?php echo $finishedToggleAction["$color"] ?> <?=sizeof($finishedResults["$color"]) ?> finished <?=$tasksOrTask["$color"] ?></button>
	</div>
</div>