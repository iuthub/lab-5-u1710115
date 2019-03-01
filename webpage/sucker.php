<link rel="stylesheet" type="text/css" href="buyagrade.css">
<h1><br>Thanks Sucker!</h1>
<?php 
if (empty($_GET["name"]) || empty($_GET["section"]) || empty($_GET["card_num"]) || empty($_GET["card"])) {
	
	echo "Please fill all required fields!"; 
	echo "<a href='buyagrade.php'>Try again</a>";
		
}else{
	if (isset($_GET["name"]) && isset($_GET["section"]) && isset($_GET["card_num"]) && isset($_GET["card"])) {
         
		$name = $_GET["name"];
		$section = $_GET["section"];
		$card = $_GET["card_num"];		
		$pay = $_GET["card"];
	
		if (is_numeric($name) && is_string($card)) {
			echo "Invalid inputs!<br>";
			echo "<a href='buyagrade.php'>Try again</a>";
		}
		else{
		
		//	  $file = fopen("suckers.txt", "a+") or die("unable to open");
 		
 		    $contents = $name."; ".$section."; ".$card."; ".$pay."<br>";	 
			file_put_contents("suckers.txt", $contents, FILE_APPEND);
			  

			echo "Your information has been recorded: <br>";
			echo "<table>";
			echo "<br><tr><td>Name</td></tr>";
			echo "<td></td><td>".$name."</td></tr>";
			echo "<tr><td>Section</td></tr>";
			echo "<td></td><td>".$section."</td></tr>";
			echo "<tr><td>Credit card</td></tr>";
			echo "<td></td><td>".$card."(".$pay.")</td></tr>";			
	    
			echo "</table>";
			echo "<br><hr><br>Here are all suckers who have submitted: <br><br>";	
			echo "<pre>";
			$file = file_get_contents("suckers.txt");
			echo $file;
			echo "</pre>";

			
			 
		}

}

}



 ?> 
