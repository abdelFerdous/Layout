<?php
$title = "ex1";
include("header.php") ?>
    <h3>Write a simple PHP script to print your information (Name and your groupid). </h3>
<?php
//opening tag
echo "Ferdous Abdel <br>";
echo "BBCAP22";

/*
for($c=0 ; $c<10 ;$c++){
    //testing forLoop
    echo "$c \t";

}*/

?> 
    <h3>Write PHP code to display the following message.</h3>  
    <?php
     echo "Hello world my name is \"David\"";
    echo "<h3>Date</h3>";
     echo date("m . d . Y");
    ?> 
    <h3>3.1 Variable in php</h3>
    <?php
    $title1 = "php is intresting";
    echo "<h4>" . $title1 . "</h4>";
    ?>
    <h3>3.5 Table and Variables</h3>
    <?php
    $g1 = 5;
    $g2 = 4;
    $g3 = 5;
    echo "
    <table>
    <tr>
    <th>S.N</th><th>Name</th><th>Grade</th>
    </tr> 
    <tr>
    <td>1</td><td>ferdous</td><td>$g1</td>
    </tr>
    <tr>
    <td>2</td><td>meow</td><td>$g2</td>
    </tr>
    <tr>
    <td>3</td><td>ayoo</td><td>$g3</td>
    </tr>
    </table>
    "
    ?>

<?php include("footer.php") ?>   

