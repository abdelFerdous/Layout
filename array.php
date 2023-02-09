<?php $title = "array"; include("header.php")?>
<h2>1.  Write a php script to display courses as list. Use lists</h2>7
<?php
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
for($i=0 ; $i<count($courses) ; $i++){
    echo "<li>" . $courses[$i] . "</li>";
}
?>
<h2>2-Delete an element from the array</h2>
<?php
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[1]);
echo implode("," ,$courses1);
?>
<h2>3-sort array</h2>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
sort($courses3);
echo "ascending order by value : ".implode(",",$courses3)."<br>";
ksort($courses3);
echo "ascending oder by key :".implode(",",$courses3)."<br>";
rsort($courses3);
echo "descending oder by value :".implode(",",$courses3)."<br>";
krsort($courses3);
echo "descending oder by key :".implode(",",$courses3)."<br>";
?>

<h2>4-Change the following array's all values to upper case.</h2>
<?php 
 $courses4=array("php", "html", "javascript", "cms", "project");
 for($i=0 ; $i<count($courses4) ; $i++){
    $courses4[$i] = strtoupper($courses4[$i]);
}
echo implode("," ,$courses4);
?>
<h2>5-List all your favorite colors and their hexadecimal equivalents.</h2>
<?php
$colors = array("green" => "#008000", "purple" => "#800080", "red" => "	#FF0000", "white" => "#FFFFFF");
foreach($colors as $c => $val){
    echo $c . " : " . $val."<br>";

}
?>
<h2>6-PHP script to calculate and display average temperature, five lowest and highest temperatures</h2>
<?php
$temps = array(
    78,
    60,
    62,
    68,
    71,
    68,
    73,
    85,
    66,
    64,
    76,
    63,
    75,
    76,
    73,
    68,
    62,
    73,
    72,
    65,
    74,
    62,
    62,
    65,
    64,
    68,
    73,
    75,
    79,
    73
);


$sum = 0;
for($i=0 ; $i<count($temps) ; $i++){
    $sum += $temps[$i];
}
$avg = $sum / count($temps);
echo "avg temps ".$avg."<br>";

sort($temps);
echo "five lowest temps <br>";
for ($i = 0; $i < 5; $i++) {
    echo "temp" . ($i + 1) . "->" . $temps[$i]."<br>";
}
rsort($temps);
echo "five highest temps <br>";
for ($i = 0; $i < 5; $i++) {
    echo "temp" . ($i + 1) . "->" . $temps[$i]."<br>";
}

 


?>

<?php include("footer.php")?>