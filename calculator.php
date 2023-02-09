<?php include("header.php")?>
<form action="" method="get">
<div class="row">
    <div class="col">
<input type="number" name="firstnumber" placeholder="First Number" step="0.01" class="form-control" required>
    </div>
     <div class="col">
<input type="number" name="secondnumber" placeholder="Second Number" step="0.01" class="form-control" required>
     </div>
    
    <select name="operator">
        <option value="add">Add</option>
        <option value="sub">Substract</option>
        <option value="multiply">Multiply</option>
        <option value="divide">Divide</option>
    </select>        

<input type="submit" name="cal" value="Calculate">
</form>
<?php 
if(isset($_GET["cal"])){
    $num1 = $_GET["firstnumber"];
    $num2 = $_GET["secondnumber"];
    $operator = $_GET["operator"];
    switch($operator){
        case "add":
            echo "addition " . $num1 + $num2;
            break;
        case "sub" :
            echo "substraction " . $num1 - $num2;
            break;
        case "multiply":
            echo "multiply " . $num1 * $num2;
            break;
        case "divide":
            echo "division " . $num1 / $num2;
            break;
        default:
            echo "something is wrong";             

    }

}
?>

<?php include("footer.php")?>