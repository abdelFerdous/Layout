<?php $title = "actionFlow";include("header.php");
$fname=$_POST['fname'];
$age = $_POST['age'];
echo $fname . " - " . $age;
if ($age >= 18) {
    echo "you are eligable for voting";
}else{
    echo "you are not eligable for voting";
}
?>
<?php include("footer.php");