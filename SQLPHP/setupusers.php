<?php



	require('config.php');
	require('db.php');

	// Create Query
	$query = 'SELECT * FROM library';   // changed this here

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	var_dump($posts);                       // added this here
	//var_dump($posts);

	// Free Result
	mysqli_free_result($result);

	// Close Connection
	mysqli_close($conn);
	
	
	
	 var_dump ($posts);
?>

 
 