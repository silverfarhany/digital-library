<?php
require_once('vendor/autoload.php');
$faker = Faker\Factory::create('id_ID');
for($a=0; $a<300; $a++){
	// generate data nama, alamat
	 $faker->name;
	echo "<br>";
    echo $faker->password;
}
?>