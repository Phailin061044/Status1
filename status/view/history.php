

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>history</title>
<title>history</title>
<center><h1>ประวัติการใช้งาน</h1></center>

<link rel="stylesheet" href="css/bootstrap.min.css?v=9999">
    <link rel="stylesheet" href="css/font-awesome.min.css?v=9999">
    <link rel="stylesheet" href="css/aos.css?v=9999">
    <link rel="stylesheet" href="css/iframe.css?v=9999" />
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-gymso-style.css?v=9999">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Prompt&display=swap">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<?php include 'header.php' ?>

<head>
<title>history</title>

      <form class="container" role="search">
        <input class="form-control me-2" type="input" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
    </div>
  </div>


<h1>ประวัติการใช้งาน</h1>
<style>

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}

h1 {
   text-align: center;

}

input {

}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>



<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">ลำดับ
      </th>
      <th class="th-sm">ชื่อจริง
      </th>
      <th class="th-sm">นามสกุล
      </th>
      <th class="th-sm">หมู่เรียน
      </th>
      <th class="th-sm">เบอร์โทร
      </th>
      <th class="th-sm">เวลาเบิกกุญแจ
      </th>
      <th class="th-sm">ห้องเรียน
      </th>
      <th class="th-sm">เวลาเบิกกุญแจ
      </th>
      <th class="th-sm">เวลาเบิกกุญแจ
      </th>
    </tr>
  </thead>
<table>
<?php 
foreach ($users as $user1){
?>
    <tr>
    <td><?php echo $user1['number_id'];?></td>
        <td><?php echo $user1['fname'];?></td>
        <td><?php echo $user1['ltname'];?></td>
        <td><?php echo $user1['study_group'];?></td>       
        <td><?php echo $user1['tell'];?></td>
        <td><?php echo $user1['time_open'];?></td>
        <td><?php echo $user1['room'];?></td>
        <td><?php echo $user1['teacher'];?></td>
        <td><?php echo $user1['name_close'];?></td>
        <td><?php echo $user1['time_close	'];?></td>
        <td><a href="edit_form.php?id= <?php echo $row['number_id']; ?>" class="btn btn-warning">Edit</a></td></td>
    </tr>
    <?php }?>
</tbody>
</table>

</body>
</html>
<?php include 'footer.php' ?>

</body>
</html>
