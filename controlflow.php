<?php $title = "controlFlow ex" ;include("header.php") ?>
<h2>1-write the following moth</h2>
<?php
$month = date('F');
if ($month == "August") {
    echo "it's August so it's holidays";
} else {
    echo "it is " . $month . " so no holidays";
}
?>
<h2>2-red color</h2>
<?php
$color = "red";
if ($color == "red") {
    echo "the color is red";
} else {
    echo "the color isn't red";
}
?>
<h2>3-Grading</h2>
<?php
$grade;
if ($grade > 80) {
    echo "excellent";
} elseif ($grade <= 80 && $grade >70){
    echo "great";
} elseif ($grade <= 70 && $grade > 60) {
    echo "good";
} elseif ($grade <= 60 && $grade > 50) {
    echo"Pass";
}elseif($grade <= 50){
    echo "fail";
}
?>
<h2>4-voting system</h2>
 
<form action="actionFlow.php" method="post">
<div class="row">
    <div class="col">
<input type="text" name="fname" placeholder="First Name" class="form-control" required>
    </div>
     <div class="col">
<input type="text" name="age" placeholder="age" class="form-control" required>
     </div>
<input type="submit" value="Submit">
</form>
<h2>5-Browser name</h2>
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
switch(strpos($user_agent , $browserName)){
    case ($browserName == 'Chrome'):
        echo "you are using Chrome";
        break;
    default:
        echo "you are not using Chrome";
        break;    
}

?>



<?php include("footer.php") ?>