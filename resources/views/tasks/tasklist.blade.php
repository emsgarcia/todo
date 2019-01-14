<!DOCTYPE html>
<html>
<head>
	<title>
		Todolist app
	</title>

	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<!-- JQUERY -->
	<script
	  src="https://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous"></script>


	<!-- POPPER -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

	<!-- BOOTSTRAP JS -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</head>
<body>

<div class='container my-5 p-5'>
	<div class='row mb-5'>
		<div class='col'>
			<form action='/newtask' class='d-flex align-items-center' method="POST">
				{{ csrf_field() }}
			  <div class="form-group flex-fill">
			    <label for="exampleInputEmail1" class='font-weight-bold'>Task Name:</label>
			    <input type="text" class="form-control" id="newtask" name='newtask'>
			     <!-- <input type="text" class="form-control" id="statustask" name='statustask'> -->
			  </div>
			 
			  <button type="submit" class="btn btn-primary mt-3 ml-5">SUBMIT</button>
			</form>
		</div>
	</div>


	<div class='row'>
		<div class='col'>
			<table class='table borderless'>
				<thead class='bg-dark text-light'>
					<th style='width:40%;'>Task</th>
					<th style='width:30%;'>Created At</th>
					<th style='width:30%;'>Actions</th>

				</thead>
				<tbody>

				@foreach($tasks as $task)
					<tr>
						<td>{{ $task->name }}</td>
						<td>5 mins ago</td>
						<td>
							<button type='button' class='btn btn-danger' onclick="openDeleteModal({{ $task->id }}, '{{ $task->name }}')">Delete</button>
							<button type='button' class='btn btn-primary' onclick="openEditModal({{ $task->id }}, '{{ $task->name }}')" style='padding-left:16px;padding-right:16px;'>Edit</button>
						</td>
					</tr>
				@endforeach

					
				</tbody>
			</table>
		</div>
	</div>


</div>

<!-- DELETE MODAL FORM -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Delete this task?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
	    <form method="POST" id='deleteTask'>
	      	{{ csrf_field() }}
	      	{{ method_field('DELETE') }}
	      	<div class="modal-body">
	        
		        <span id='taskDel'>Do you want to delete this task?</span>

		        

		    </div>
	      	<div class="modal-footer">
	      		<button type='submit' class='btn btn-danger'>Delete</button>
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      	</div>
		</form>
      
    </div>
  </div>
</div>


<!-- EDIT MODAL FORM -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Update This Task?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" id='editTaskForm'>
	      	{{ csrf_field() }}
	      	{{ method_field('PUT') }}
	      	<div class="modal-body">
	        
		       
		        <label>Task:</label>
      			<input type='text' name='editedtask' id='editedtask'></input>
		        

		    </div>
	      	<div class="modal-footer">
	      		<button type='submit' class='btn btn-primary'>SAVE CHANGES</button>
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      	</div>
		</form>
      
    </div>
  </div>
</div>



<script type="text/javascript">
	function openDeleteModal(id, name){
		$('#deleteTask').attr('action','/taskdelete/' + id);
		$('#taskDel').html("Do you want to delete task " + name + "?");
		$('#deleteModal').modal('show');
	}

	function openEditModal(id, name){
		$('#editTaskForm').attr('action', '/taskupdate/' + id);
		$('#editModal').modal('show');
	}

</script>

</body>
</html>

