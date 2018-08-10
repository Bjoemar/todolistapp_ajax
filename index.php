<?php require_once "templates.php" ?>

<?php function getTitle() {
	echo "TODOLISTAPP";
} ?>


<?php function getContent(){?>

	<div class="todo-holder">
	<h1>To do list App</h1>


		<div id="task" class="input-group mb-3">
	    <input type="text" class="form-control" placeholder="Your task" name="to-do-task" id="taskid">
	    	<div class="input-group-append">
	     <button id="addtsk" class="btn btn-primary">Add Task</button>
	    </div>
  </div>




	<div id="tasklist">

		<?php $json_string = file_get_contents('task.json');
			$tasks = json_decode($json_string, true); ?>

		<?php foreach ($tasks as $key => $task) {

			if($tasks[$key]['status'] == 'ongreen' ) {?>

		<div class="my-listholder">
			<input class ="task-list ongreen" type="text" name="my_list_task" id = <?php echo $key; ?> value= <?php echo $task['task']; ?> >
		
			<button id= <?php echo "rev" .$key?> class="revr">Remove</button><br>
		</div>


			<?php } else { ?>

			<div class="my-listholder">
			<input class ="task-list " type="text" name="my_list_task" id = <?php echo $key; ?> value= <?php echo $task['task']; ?> >
			<button  class="doneg">Done</button>
			<button id= <?php echo "rev" .$key?> class="revr">Remove</button><br>
		</div>





			<?php }





			?>

		






		<?php } ?>
	</div>

	<div class="donetask">
		<hr>
		<h1>DONE TASK</h1>
		<div class="donetask-holder">
			<?php 
			$json_string = file_get_contents('donetask.json');
			$done_tasks = json_decode($json_string, true);?>

			<?php 

			foreach ($done_tasks as $done) {?>
				
			<h2 class="done_design"><?php echo $done['status'] = 'ongreen'; ?></h2>

			<?php } ?>
		</div>
	</div>

		
		

	</div>

	<script type="text/javascript" src="assets/js/script.js">
</script>

<?php } ?>

	

























