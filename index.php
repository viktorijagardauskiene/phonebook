<?php

// Prijungiam failą saugantį duomenų bazės prisijungimo duomenis ir galbūt kitus parametrus
include 'config.php';

// Create connection
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db);

// Check connection
if (!$conn) {
	// jei prisijungti nepavyko
	alert(FALSE, mysqli_connect_error());
    die();
} else {
	// jei prisijungi pavyko
	mysqli_set_charset($conn, "utf8");
}
 

$names = ["Vaida", "Petras", "Jonas", "Monika", "Viktorija", "Eimantas", "Juozas", "Kazys", "Algis", "Ona", "Marija", "Povilas", "Paulius", "Marius", "Jolanta", "Renata"];

$name = null;
$number = null;

for ($i=0; $i <= 999; $i++) { 
	$number = $i;

$sql = "INSERT INTO phonebook (name, prefix, number) VALUES ('$name', '37', '$number')";
$name = $names[rand(0, count($names)-1)];
mysqli_query($conn, $sql);
}



// atsijungiame
mysqli_close($conn);