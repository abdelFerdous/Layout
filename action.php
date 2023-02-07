<?php include("header.php");
$fname=$_POST['fname'];
$lname = $_POST['lname'];
$color = $_POST['color'];
$bday = $_POST['bday'];
$color = $_POST['color'];

echo "
<table>
<tr>
<th>First Name    </th><th>Last Name      </th><th>BirthDay     </th>
</tr> 
<tr>
<td>$fname     </td><td>$lname    </td><td>$bday    </td>
</tr>
</table>
"

?>
<?php include("footer.php") ?>