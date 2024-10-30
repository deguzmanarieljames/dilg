<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SEMI-EXPENDABLE PROPERTY CARD</title>
  <style>
   body {
  font-family: Arial;
}

.title {
  text-align: center;
  font-size: 13px;
  margin-bottom: 20px;
  font-weight: bold; 
}

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  border: 1px solid black;
  padding: 7px;
  text-align: center;
  height: 20px;
  font-family: Arial; 
  font-size: 9px;
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
}

.info p.right {
  text-align: right;
  float: right;
}

.info p.center {
  text-align: center;
  clear: both;
}

  </style>
</head>
<body>
<?php foreach ($data as $record): ?>
  <p style="text-align: right; margin-right: 30px; font-size: 11;"><i>Annex A.1</i></p>
  <br>
  <div class="container">
    <div class="title">SEMI-EXPENDABLE PROPERTY CARD</div>
    <div class="info">
      <p class="left">Entity Name: <u style="color: blue"><?= $record['entityname'] ?></u></p>
  
    </div>
  </div>
<br>
<table>

<thead>

<tr>
                    <th colspan="8" style="font-size: 9px;"><b>Semi-expendable Property:<u style="color: blue"><?= $record['classification'] ?></u>						
</b></th>
                    <th colspan="3" style="font-size: 9px;"><b>Semi-expendable Property Number: <u style="color: blue"><?= $record['propertynumber'] ?></u></b></th>
                </tr>

                <tr>
                    <th colspan="8" style="font-size: 9px;"><b>Description: <u style="color: blue"><?= $record['fulldescription'] ?></u>						
</b></th>
                    <th colspan="1" style="font-size: 9px;"></th>
                    <th colspan="1" style="font-size: 9px;"></th>
                    <th colspan="1" style="font-size: 9px;"></th>
                  
                </tr>

                <tr>
                <th rowspan="2"><b>Date</b></th>
                    <th rowspan="2"><b>Reference</b></th>

                    <th colspan="3"><b>Receipt</b></th>
                    <th colspan="3"><b>Issue/Transfer/Disposal</b></th>
                    <th colspan="1"><b>Balance</b></th>

                    <th rowspan="2"><b>Amounts</b></th>
                    <th rowspan="2"><b>Remarks</b></th>
                </tr>
                   
                    
                
                <tr>
                    <th><b>Quantity</b></th>
                    <th><b>Unit Cost</b></th>
                    <th><b>Total Cost</b></th>
                    <th><b>Item No.</b></th>
                    <th><b>Quantity</b></th>
                    <th><b>Office/Officer</b></th>
                    <th><b>Quantity</b></th>
                </tr>
               

            </thead>

  <tbody>
    <tr>
      <td style="color: blue"><?= $record['propertydate'] ?></td>
      <td style="color: blue"><?= $record['icsnumber'] ?></td>
      <td style="color: blue"><?= $record['rec_quantity'] ?></td>
      <td style="color: blue"><?= $record['rec_unitcost'] ?></td>
      <td style="color: blue"><?= $record['rec_totalcost'] ?></td>
      <td style="color: blue"><?= $record['propertynumber'] ?></td>
      <td style="color: blue"><?= $record['issue_quantity'] ?></td>
      <td style="color: blue"><?= $record['issue_officeofficer'] ?></td>
      <td style="color: blue"><?= $record['balancequantity'] ?></td>
      <td style="color: blue"><?= $record['balanceamount'] ?></td>
      <td style="color: blue"><?= $record['remarks'] ?></td>
    </tr>



      

            
  </tbody>
</table>
<?php endforeach; ?>
</body>
</html>
