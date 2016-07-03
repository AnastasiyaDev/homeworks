<?php
require_once '/home/asya/tester/homeworks/vendor/autoload.php';
$faker = Faker\Factory::create();
?>
<html>
    <head>
		<meta charset="UTF-8" />
		<title></title>
	</head>

 	<body>

		<ul>
		<?php for ($i=0; $i < 10; $i++): ?>
		<li>
			<contact firstName="<?php echo $faker->firstName ?>" lastName="<?php echo $faker->lastName ?>" email="<?php echo $faker->email ?>"/>
		    <phone number="<?php echo $faker->phoneNumber ?>"/>
		<?php if ($faker->boolean(25)): ?>
		    <birth date="<?php echo $faker->dateTimeThisCentury->format('Y-m-d') ?>" place="<?php echo $faker->city ?>"/>
		<?php endif; ?>
		    <address>
		      <street><?php echo $faker->streetAddress ?></street>
		      <city><?php echo $faker->city ?></city>
		      <postcode><?php echo $faker->postcode ?></postcode>
		      <state><?php echo $faker->state ?></state>
		    </address>
		  </contact>
		<?php endfor; ?>
		</li>
		</ul>
  
 	</body>
 </html>