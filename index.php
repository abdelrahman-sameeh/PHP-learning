
<?php 

// Challenge 1


// Output Needed
// "Asia/Riyadh"
// "Wed, 09 Nov 22 - 07:11:22 PM"
// "Wednesday, 09 November 2022 - 07:11:22 PM" 


date_default_timezone_set("Asia/Riyadh");
$d = date_create();

echo date_format($d, "D, d M y - h:i:s A") . "<br>";

echo date_format($d, "l, d F Y - h:i:s A") . "<br>";




?>


<?php 
// Challenge 2

$date = "2005-10-02";

// Output Needed
// "Africa/Cairo"
// "2005, October, Sunday '02nd' 15:15:15"

date_default_timezone_set("Africa/Cairo");

echo date_default_timezone_get() . "<br>";

$date = date_create($date);

$date->modify("+15 hour +15 minutes +15 seconds");

echo date_format($date, "Y, F, l 'dS' H:i:s") . "<br>";


?>


<?php 
// Challenge 3

$date = "1990-10-01";

// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"

$timestamp = strtotime($date);

$days = round($timestamp / 60 / 60 / 24, 1);
$years = round($timestamp / 60 / 60 / 24 / 365, 1);


echo "From Epoch Time Till {$date} Is Approximately {$days} Days<br>";
echo "From Epoch Time Till {$date} Is Approximately {$years} Years<br>";

?>


<?php 
// Challenge 4


$date = "1990-10-01";

// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7578 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20 Years"

$epoch_time = date_create("1-1-1970");
$date = date_create($date);

$diff = date_diff($date, $epoch_time);

echo "From Epoch Time Till 1990-10-01 Is Approximately {$diff->days} Days<br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately {$diff->y} Years<br>";


?>



<?php 
// Challenge 5

// With time() Function
echo time() . "<br>"; // 1668020233

// Output Needed With Other Ways
// 1668020233
// 1668020233
// 1668020233

echo strtotime("now") . "<br>";

echo mktime(2, 8, 0, 10, 13, 2025) . "<br>";

$d= date_create();
echo $d->getTimestamp() . "<br>";


?>






<?php 

// For me


// $ageInSeconds = strtotime("now") - strtotime("2002-01-01");
// $years = floor($ageInSeconds / (60 * 60 * 24 * 365));
// $months = floor(($ageInSeconds - ($years * 60 * 60 * 24 * 365)) / (60 * 60 * 24 * 30));

// echo "Years: $years, Months: $months <br>";



// $now = date_create();
// $birth = date_create("1-1-2002");
// $diff = date_diff($now, $birth);

// echo $diff->y . " years, " . $diff->m . " months, " . $diff->d . " days";


// echo "---------------------------------------- <br>";

// date_default_timezone_set("utc");

// $d= date_create();

// echo "UTC: " . $d->format("Y F d ___ H:i") . "<br>";

// $d->setTimezone(new DateTimeZone("Africa/Cairo"));

// echo "Cairo: " . $d->format("Y F d ___ H:i") . "<br>";



?>







