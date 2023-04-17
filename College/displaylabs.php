<html>
    <head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="displayroom.css">
        <style>
            .delete{
                background-color:red;
                color:white;
                border:0;
                outline:none;
                border-radius:5px;
                height:23px;
                width:80px;
                font-weight:bold;
                cursor:pointer;
            }
            </style>
        </head>
        </html>
<?php
include("connection.php");
error_reporting(0);
$que="delete from labs where id not in(select max(id) from labs group by lab_name,computer_no,problem)";
$da=mysqli_query($conn,$que);
$query="select * from labs ";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total!=0)
{
   
    ?>
    <table border="3" cellpadding="15" cellspacing="0" width="100%" class="table">
        <th>Lab Name</th>
        <th>Computer No</th>
        <th>Problem</th>
        <th>Date and Time</th>
        <th>Status</th>
</tr>
<?php
    while($result=mysqli_fetch_assoc($data))
    {
        echo "<tr>
        <td width=10%><div class='result'>".$result['lab_name']."</td>
        <td width=10%><div class='result'>".$result['computer_no']."</td>
        <td width=10%><div class='result'>".$result['problem']."</td>
        <td width=10%><div class='result'>".$result['date']."</td>
        <td width=10%><a href='deletelabs.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'></a></td></tr>";
        
    
    }
}
else{
    echo "No data found";
}
?>
</table>
<script>
    function checkdelete()
    {
            return confirm('Are you sure want to delete this record?');
    }
</script>
   