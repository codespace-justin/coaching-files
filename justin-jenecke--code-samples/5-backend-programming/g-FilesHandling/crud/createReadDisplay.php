<!-- Creating a simple form -->
<form method="POST">
	<p>
		<label for="firstname">Firstname</label>
		<input type="text" id="firstname" name="firstname">
	</p>
	<p>
		<label for="lastname">Lastname</label>
		<input type="text" id="lastname" name="lastname">
	</p>
	<p>
		<label for="priority">Priority</label>
		<input type="text" id="priority" name="priority">
	</p>
	<p>
		<label for="completed">Status</label>
		<input type="text" id="completed" name="completed">
	</p>
	<input type="submit" name="save" value="Save">
</form>
<!-- End of form -->


<!-- PHP Code Below -->
<?php

	// Run if statement only when user submits form
	if(isset($_POST['save'])){

		// Creates and stores json into json file type
		//file_put_contents('members.json', $data);*/

		$data = file_get_contents('members.json');// open the json file
		$data = json_decode($data, true);// decodes the json file	


		$input = [
			'firstname' => $_POST['firstname'],
			'lastname' => $_POST['lastname'],
			'priority' => $_POST['priority'],
			'completed' => $_POST['completed'],
        ];

		array_push($data, $input);

		echo $data;

		// Encode back to json
		$data = json_encode($data, JSON_PRETTY_PRINT);// Second parameter tidily displays the json content
		file_put_contents('members.json', $data);// Creates and stores json into json file type
 
	}
?>
<!-- End of PHP Section -->

<br>
<br>

<!-- HTML Table -->
<table>
	<thead>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Priority</th>
		<th>Completed</th>
	</thead>
	
	<!-- Table Body Displayed using PHP -->
	<tbody>
        
	<?php
		
		$data = file_get_contents('members.json');// Fetch data from json
		
		$data = json_decode($data);// Decode into php array

		// Displaying the Values of each property by targeting their Key name
		foreach($data as $row){
			echo "
				<tr>
					<td>".$row->firstname."</td>
					<td>".$row->lastname."</td>
					<td>".$row->priority."</td>
					<td>".$row->completed."</td>
				</tr>
			";
		}
	?>

	</tbody>
	<!-- End of Table Body -->
</table>
<!-- End of HTML Table -->
