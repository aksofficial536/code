<html>
    <head>
        <title> Search</title>
</head>
<body center>
    <h1> Search </h1>

    <div class ="container">
        <form action ="" method = "POST">
            <input type ="text" name ="Roll" placeholder ="Roll no." /><br>
            
            <input type ="submit" name = "Check Result" value = "Check Result">
            
        </form>
<table>
<br>
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'result');

if(isset($_POST['Check Result']))
{
    $Roll =$_POST['Roll'];

    $query = "SELECT * FROM `info` WHERE 1";
    $query_run =mysql_query($connection.$query);

    while($row = mysqli_fetch_array($query_run))
    {
        ?>
        <tr>
            <td> <?php echo $row['Roll'];?> </td>
            <td> <?php echo $row['Candidate Name'];?> </td>
            <td> <?php echo $row['Father Name'];?> </td>
            <td> <?php echo $row['Date OF Birth'];?> </td>
            <td> <?php echo $row['Post'];?> </td>
            <td> <?php echo $row['Posting Place'];?> </td>
            <td> <?php echo $row['Training Centre'];?> </td>
            <td> <?php echo $row['Training Session'];?> </td>
        </tr>    
        <?php
    }
}
?>
</table>
</div>
</body>
</html>

