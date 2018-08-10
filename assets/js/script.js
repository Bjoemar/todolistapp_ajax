let num =0; 










$('#addtsk').click(()=>{
	thetask = $('#taskid').val();
	num++
	let input = ('<input  type="text" class="task-list" name="to-do-task" id="'+ num +'" value="'+thetask+'">');
	let button_done = ('<button  class="doneg"> Done</button>');
	let input2 = ('<input type="text" name="key" value= "'+num+'" ')
	let button_remove = ('<button  class="revr"> Remove</button>');



	$('#tasklist').append('<div>' + input + button_done + button_remove +'</div>')
	$('#taskid').val('');
	$.get('controllers/task_add_endpoint.php?to-do-task='+thetask);
	
})


$(document).on("click" ,".revr",function(){

torev = $(this).prev().prev().val();
$(this).parent().remove();
// $(this).parent().remove();

$.get('remove_endpoint.php?my_list_task='+torev);

}) 


	$('.doneg1').hide();



$(document).on("click" ,".doneg",function(){


	task_to_done = $(this).prev().val();
	$(this).prev().css('background','lightgreen');
	$(this).hide();
	$.get('controllers/donetask_endpoint.php?my_list_task='+task_to_done);
	// donetask = $(this).prev().val();
	// done = ('<h2 class="done_design">'+donetask+'</h2>')
	// $(this).parent().remove();
	// $('.donetask-holder').append(done)
	// $.get('controllers/donetask_endpoint.php?my_list_task='+donetask);
	// $.get('remove_endpoint.php?my_list_task='+donetask);

}) 



