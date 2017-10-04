<?php
$date = date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";
$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br><br>";

echo "<br>";
if ($date > $tar && $date+$tar >0){
	echo "The future<br>";
}
else if ($date+$tar == 0){
	echo "Oops<br>";  
}
else{
	echo "The past<br>";
}
echo "<br>";
echo "The positions are:<br>";
echo strpos($date,"/")." ";
echo strrpos($date,"/")."<br>";

echo "<br>";
echo "The word count for \$date is ".str_word_count($date)."<br>";

echo "The string length of \$date is ".strlen($date)."<br>";

echo "<br>";

$HW2 = "Hello my name is moises";
echo ord($HW2)."<br>";

echo "<br>";
echo substr($date,0)."<br>";
echo "<br>";

$dateSpacing = explode("/",$date);
echo $dateSpacing[0]." ";
echo $dateSpacing[1]." ";
echo $dateSpacing[2]."<br>";
echo "<br>";

$year = array("2020", "1992", "2016");
foreach ($year as $y){
	switch ($y % 4) {
		case 0:
			if ((($y % 100) > 0) || (($y % 400) == 0)){
				echo "True ";
			}
			else {
				echo "False ";
			}
	}
};
echo "<br>";
for ($i = 0; $i < sizeof($year); $i ++){
	$y = $year[$i];
	switch ($y % 4) {
		case 0:
			if ((($y % 100) > 0) || (($y % 400) == 0)){
				echo "True ";
			}
			else {
				echo "False ";
			} 
	}
}
?>