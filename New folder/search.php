<html>
    <head>
        <title> search</title>
</head>
<body center >
    <h1>search</h1>
    <div class ="container">
        <form action ="" method ="POST">
            <input type ="text" name ="Roll" placeholder ="Roll No." />
            <input type ="submit" name ="search" value =" search by">
</form>
<table style="font-family: 'Arial'; font-size:medium;width:434px">
    
    
    
                    <tr><td class="style1">Roll No. </td>
    <td class="style2">
        <span id="lblControlNo"></span>
                    </td>
    
    
    </tr>
     <tr style="text-align: left;vertical-align:center"><td class="style3">Cadidate Name</td>
         <td class="style2">
                    <span id="lblDesig"></span>
                    </td></tr>
                     </td><td>Father Name </td><td>
                    <span id="lblFatherName"></span>
                    </td></tr>
                    </td><td>Date Of Birth :</td><td>
                    <span id="lblDOB"></span>
                    </td></tr>
     <tr style="text-align: left;vertical-align:center"><td class="style3">Post</td>
         <td class="style2">
                    <span id="lblREGR"></span>
                    </td></tr>
                    <span id="Label1"></span>
                                      
     <tr style="text-align: left;vertical-align:center"><td class="style3">Posting Place</td>
         <td class="style2">
                    <span id="lblDOE"></span>
                    </td></tr>
     <tr style="text-align: left;vertical-align:center"><td class="style3">Training 
         Centre</td><td class="style2">
                    <span id="lblCamNo"></span>
                    </td></tr>
    <td style="text-align: left;vertical-align:center" class="style3">
             Training Session </td><td class="style2">
                    <span id="lblFullName"></span>
                    </td></tr><br>

                    <?php
                    $connection= mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,'result');

                    if(isset($_POST['search']))
                    {
                        $id=$_POST['Roll'];
                        $query = "SELECT * FROM 'info' where Roll='$Roll'";
                        $query_run = mysqli_query($connection,$query);

                        while($row =mysqli_fetch_array($query_run))
                        {
                            ?>
                            <tr>
                                <td> <?php echo $row['Candidate Name']; ?> </td>
                                <td> <?php echo $row['Date Of Birth']; ?> </td>
                                <td> <?php echo $row['Father Name']; ?> </td>
                                <td> <?php echo $row['POST']; ?> </td>
                                <td> <?php echo $row['Posting Place']; ?> </td>
                                <td> <?php echo $row['Traning Centre']; ?> </td>
                                <td> <?php echo $row['Traning Session']; ?> </td>
                            </tr>
                            <?php

                        }
                    }
                    ?>
     
        
      </table>
    </body>
</html>    

     

