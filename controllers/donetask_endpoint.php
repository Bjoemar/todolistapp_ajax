
<?php 
	

	$task_to_done = $_GET['my_list_task'];


	$json_string = file_get_contents('../task.json');

	$php_array = json_decode($json_string, true);

	foreach ($php_array as $key => $done_task) {
		if (($done_task['task']) == $task_to_done) {
			$php_array[$key]['status'] = 'ongreen';
			
			
		}
		
	}	

	$open = fopen('../task.json', 'w');

	fwrite($open, json_encode($php_array, JSON_PRETTY_PRINT));

	fclose($open);

 ?>