<?php 
    $conn = mysqli_connect("localhost:3308", "root", "", "wad_project3");
    $result = mysqli_query($conn, "SELECT * FROM students");
    //var_dump(mysqli_fetch_object($result));

   // $data = mysqli_fetch_object($result);
?>

<!DOCTYPE html>
<html lang="en">
<style>
table {
  width: 100%;
  border: 1px solid black;
  text-align: center;
}

th, td {
  border: 1px solid black;
  padding: 8px;
}

</style> 
<body>
    <h1>Ini Adalah Halaman Index Data</h1>
<table style="width:100%"; >
  <tr>
    <th>Nomor</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Alamat</th>
  </tr>
 
 <?php while( $data = mysqli_fetch_object($result)){
    ?>
    <tr>
    <td><?php echo $data->id ?></td>
    <td><?php echo $data->nim ?></td>
    <td><?php echo $data->name ?></td>
    <td><?php echo $data->address ?></td>
  </tr>
  <?php
 }
  ?>
</table>
    
</body>
</html>
