<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';
?>

  <div>

  </div>
<style>

table#database_table {
    font-size:16px;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    border-spacing: 0;
}

#database_table td, #database_table th {
    border: 1px solid #ddd;
    text-align: left;
    padding: 8px;
}

#database_table tr:nth-child(even){background-color: #f2f2f2}

#database_table th {
    padding-top: 11px;
    padding-bottom: 11px;
    background-color: black;
    color: white;
}


</style>


<head>  
           <title>SKYRIDE-TICKET DATABASE</title>  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body >  
                     <h2><center><b><img src="https://img.icons8.com/officel/70/000000/overtime.png"/>&nbsp&nbsp FLIGHT SCHEDULE&nbsp&nbsp<img src="https://img.icons8.com/officel/70/000000/overtime.png"/></center></b></h2>

           <div class="container">  
                <br />  
                     <table id="database_table" class="table table-striped table-bordered">  
                          <thead>  
                            <tr>
  <th>Mumbai </th>
  <th>Pune </th>
  <th>Chennai</th>
  <th>Kolkata</th>
  <th>J&K</th>
  <th>Goa</th>
  <th>Surat </th>
  <th>Karnataka</th>
  <th>Kerala</th>
  <th>Assam</th>
  <th>Hyderabad</th>
  <th>Delhi </th>
  <th>Bangalore</th>
  <th>Shimla</th>

  </tr>  
                          </thead>  
                          <tbody>



<?php


$sql_transactions="SELECT * FROM `traintt`   " ;
$result = $connect->query($sql_transactions);
while($row = $result->fetch_assoc()){

echo'<tr class="class="table table-striped table-bordered"">
        <td>'.$row["Mumbai"].'</td>
        <td>'.$row["Pune"].'</td>
        <td>'.$row["Chennai"].'</td>
        <td>'.$row["Kolkata"].'</td>
        <td>'.$row["J&K"].'</td>
        <td>'.$row["Goa"].'</td>
        <td>'.$row["Surat"].'</td>
        <td>'.$row["Karnataka"].'</td>
        <td>'.$row["Kerala"].'</td>
        <td>'.$row["Assam"].'</td>
        <td>'.$row["Hyderabad"].'</td>
        <td>'.$row["Delhi"].'</td>
        <td>'.$row["Bangalore"].'</td>
        <td>'.$row["Shimla"].'</td>


       
       

';
}
?>
</tbody>
</table>
</div>
 <script>  
 $(document).ready(function() {
    $('#database_table').DataTable( {
        "order": [[ 1, "asc" ]]
    } );
} ); 
 </script>  
<?php include 'footer.php';
?> 
