<?php
include("connection.php");
?>
<DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collape;
    width: 100%;
}
td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 10px;
}
tr:nth-child(even) {
    background-color: #dddddd;
    
}
</style>
</head>
<body>
<h2>HTML Table</h2>
<table>
<tr>
<th>Company</th>
<th>Contact</th>
<th>Country</th>
</tr>
<?php
    $query="select Company,Contact,Country from newtable";
    $result=mysqli_query($con,$query);
    while ($fetch=mysqli_fetch_object($result)) 
{
        
?>
    <tr>
        <td><?php echo $fetch->Company; ?></td>
        <td><?php echo $fetch->Contact; ?></td>
        <td><?php echo $fetch->Country; ?></td>
    </tr>
    <?php
}
    ?>

</table>
</body>
</html>