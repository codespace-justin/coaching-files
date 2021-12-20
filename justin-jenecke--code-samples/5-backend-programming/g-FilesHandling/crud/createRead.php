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

		/*$data = file_get_contents('members.json');// open the json file
		$data = json_decode($data);// decodes the json file
		
		// Data in out POST
		// Stored in an associative array
		$input = [
			'firstname' => $_POST['firstname'],
			'lastname' => $_POST['lastname'],
			'priority' => $_POST['priority'],
			'completed' => $_POST['completed'],
		];

		// Convert input assoc array into JSON and save to $data variable
		$data = json_encode($input, JSON_PRETTY_PRINT);// Second parameter tidily displays the json content

		// Creates and stores json into json file type
		file_put_contents('members.json', $data);*/

		$data = file_get_contents('members.json');// open the json file
		$data = json_decode($data, true);// decodes the json file	

		// Data in out POST
		// Stored in an associative array
		$input = array(
			'firstname' => $_POST['firstname'],
			'lastname' => $_POST['lastname'],
			'priority' => $_POST['priority'],
			'completed' => $_POST['completed'],
		);
 
		// Append the input to our array
		//$data[] += $input;

		array_push($data, $input);

		echo $data;

		// Encode back to json
		$data = json_encode($data, JSON_PRETTY_PRINT);// Second parameter tidily displays the json content
		file_put_contents('members.json', $data);// Creates and stores json into json file type
 
	}
?>
<!-- End of PHP Section -->