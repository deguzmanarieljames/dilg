<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RECEIPT OF RETURNED SEMI-EXPANDABLE PROPERTY</title>
  <style>
   body {
  font-family: Arial;
}

.title {
  text-align: center;
  font-size: 20px;
  margin-bottom: 20px;
  font-weight: bold; 
}

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  border: 1px solid black;
  padding: 11px;
  text-align: center;
  height: 20px;
  font-family: Arial; 
  font-size: 14px;
}

th {
  background-color: #fff; 
  font-weight: normal; 
}

thead th, tfoot th {
  border: 1px solid black;
}

.info {
  font-size: 10px;
}

.info p {
  margin: 5px 0;
}

.info p.left {
  text-align: left;
  float: left;
  font-size: 14px;
}

.info p.right {
  text-align: right;
  float: right;
  font-size: 14px;
}

.info p.center {
  text-align: center;
  clear: both;
}

  </style>
</head>
<body>
<?php foreach ($data as $record): ?>
  <p style="text-align: right; margin-right: 30px; font-size: 14;"><i>Annex A.6</i></p>
  <br>
  <div class="container">

  
<table>
<thead>
    <tr>
    <th colspan="6"><br><div class="title">RECEIPT OF RETURNED SEMI-EXPANDABLE PROPERTY</div><br><br></th>
    </tr>
    <tr>
        <th rowspan="2" colspan="4"><b>Entity Name: </b><b style="color: blue;"><?= $record['entityname'] ?></b>
   
    </th>
        <th rowspan="1" colspan="2"><b>Date: ______________</b>
   
        <tr>
                    <th colspan="2"><b>RRSP No. ______________</b></th>
                </tr>
                <tr><th rowspan="1" colspan="6"><b>This is to acknowledge receipt of the returned Semi-expendable Property</b></tr>
    </th>

    </tr>

    <tr>
        <th rowspan="1" colspan="2"><b>Item Description</b></th>
        <th rowspan="1"><b>Quantity</b></th>
        <th rowspan="1"><b>ICS No.</b></th>
        <th rowspan="1"><b>End-User</b></th>
        <th rowspan="1"><b>Remarks</b></th>
    
    </tr>
</thead>
<tbody>
    <tr>
        <td colspan="2" style="color: blue;"><?= $record['fulldescription'] ?></td>
        <td style="color: blue;"><?= $record['issue_quantity'] ?></td>
        <td style="color: blue;"><?= $record['icsnumber'] ?></td>
        <td style="color: blue;"><?= $record['acc_officer'] ?></td>
        <td style="color: blue;"><?= $record['remarks'] ?></td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
   



<tr>
    <td colspan="3">
        Returned by:<br><br><br><b><u><?= $record['acc_officer'] ?></u></b><br>End User<br><br>______________<br>Date
    </td>
    <td colspan="3">
        Received by:<br><br><br><b><u><?= $record['property_officer'] ?></u></b><br>Head Property and/or Supply Division/Unit<br><br>______________<br>Date
    </td>


</tr>
</tbody>

</table>
<?php endforeach; ?>
</body>
</html>
