<?php
$title = "variable ex";
include("header.php") ?>
<h2>Simple HTML form</h2>

<form action="action.php" method="post">
    <div class="row">
        <div class="col">
    <input type="text" name="fname" placeholder="First Name" class="form-control" required>
        </div>
         <div class="col">
    <input type="text" name="lname" placeholder="Last Name" class="form-control" required>
         </div>
    </div>
    Date : <input type="date" name="bday"><br>
    Fav Color :<input type="color" name="color"><br>
    <input type="submit" value="Submit">
</form>
<h3>3-Table styled with bootstrap</h3>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First name </th>
      <th scope="col">Last name</th>
      <th scope="col">Domain</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>fred</td>
      <td>abdo</td>
      <td>@hamk.fi</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@hamk.fi</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@hamk.fi</td>
    </tr>
  </tbody>
</table>
<h3>4-String variable/function</h3>
<?php
$first_string = "this is the first string";
$second_string = " and this is the second string";
$joinedString = $first_string + $second_string;
echo $joinedString;

echo "<br>the lenght of joined string :". strlen($joinedString);
?>
<h3>5- function to add numbers</h3>
<?php

    $a=298;
    $b=234;
    $c = 46;
    echo "<br>the sum of $a ,$b and $c is :" . $a + $b +$c;

?>
<h3>6-script to detect the browser</h3>
<?php
echo "the browser used: " . $_SERVER["HTTP_USER_AGENT"];
?>



    


<?php include("footer.php")?>