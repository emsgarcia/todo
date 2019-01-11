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
			<form class='d-flex align-items-center'>
			  <div class="form-group flex-fill">
			    <label for="exampleInputEmail1" class='font-weight-bold'>Task Name:</label>
			    <input type="text" class="form-control" id="newtask" name='newtask'>
			  </div>
			 
			  <button type="submit" class="btn btn-primary mt-3 ml-5">Submit</button>
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
					<tr>
						<td>Sample Task 1</td>
						<td>5 mins ago</td>
						<td>
							<button type='button' class='btn btn-danger' onclick="openDeleteModal()">Delete</button>
							<button type='button' class='btn btn-primary' onclick="openEditModal()">Edit</button>
						</td>
					</tr>

					<tr>
						<td>Sample Task 2</td>
						<td>5 mins ago</td>
						<td>
							<button type='button' class='btn btn-danger' onclick="openDeleteModal()" data-toggle='modal'>Delete</button>
							<button type='button' class='btn btn-primary' onclick="openEditModal()" data-toggle='modal'>Edit</button>
						</td>
					</tr>

					<tr>
						<td>Sample Task 3</td>
						<td>5 mins ago</td>
						<td>
							<button type='button' class='btn btn-danger' onclick="openDeleteModal()" data-toggle='modal'>Delete</button>
							<button type='button' class='btn btn-primary' onclick="openEditModal()" data-toggle='modal'>Edit</button>
						</td>
					</tr>
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
      <div class="modal-body">
        Do you want to delete this task?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
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
      <div class="modal-body">
      	<form>
      		<label>Task:</label>
      		<input type='text' name'editedtask'></input>
      		<button type="submit" class="btn btn-primary">Save changes</button>
      	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
	function openDeleteModal(){
		$('#deleteModal').modal('show');
	}

	function openEditModal(){
		$('#editModal').modal('show');
	}
</script>

</body>
</html>

