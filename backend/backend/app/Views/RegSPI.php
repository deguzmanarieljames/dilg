<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTRY OF SEMI-EXPENDABLE PROPERTY ISSUED</title>
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
  font-size: 10px;
}

.info p.right {
  text-align: right;
  float: right;
  font-size: 10px;
}

.info p.center {
  text-align: center;
  clear: both;
}

  </style>
</head>
<body>
  <p style="text-align: right; margin-right: 30px; font-size: 11;"><i>Annex A.4</i></p>
  <div class="center-content" style="text-align: center; font-size: 11px; line-height: 1.4;">
    <img src="http://dilg.test/backend/uploads/dilg-logo.png" alt="DILG Image" style="width: 90px; height: auto; display: block; margin: 0 auto;">
    <p style="margin: 0;">Republic of the Philippines</p>
    <p class="department" style="font-size: 12px; margin: 0;"><b>DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT</b></p>
    <p class="region" style="font-size: 12px; display: block; margin: 0;"><b>MIMAROPA REGION</b></p>
    <p style="margin: 0;">Province of Oriental Mindoro</p>
    <p style="margin: 0;">2nd Floor, Provincial Capitol Complex Camilmil, Calapan City</p>
    <p style="margin: 0;"><a href="mailto:dilgorientalmindoropo2@gmail.com" style="color: blue; text-decoration: underline;">dilgorientalmindoropo2@gmail.com</a></p>
</div>
  <br>
  <div class="container">
    <div class="title">SEMI-EXPENDABLE PROPERTY LEDGER CARD	</div>
  
    <div class="info">
      <p class="left">Entity Name: <u>DILG Oriental Mindoro</u>                              Fund Cluster: ____________________</p>


      <p class="left">Semi-expendable Property:<u><?= $classification ?></u> Sheet No: ____________________</p>

    </div>
  </div>
<br>
<table>
<thead>

                <tr>
                    <th rowspan="2"><b>Date</b></th>

                    <th colspan="2"><b>Reference</b></th>

                    <th rowspan="2"><b>Item Description</b></th>
                    <th rowspan="2"><b>Estimated Useful Life</b></th>

                    <th colspan="2"><b>Issued</b></th>
                    <th colspan="2"><b>Returned</b></th>
                    <th colspan="2"><b>Re-issued</b></th>
                    <th colspan="1"><b>Disposed</b></th>
                    <th colspan="1"><b>Balance</b></th>

                    <th rowspan="2"><b>Amount</b></th>
                    <th rowspan="2"><b>Remarks</b></th>
                    
                </tr>
                <tr>
                    <th><b>ICS/RRSP No.</b></th>
                    <th><b>Semi-expendable Property No.</b></th>
                    <th><b>Quantity</b></th>
                    <th><b>Office/Officer</b></th>
                    <th><b>Quantity</b></th>
                    <th><b>Office/Officer</b></th>
                    <th><b>Quantity</b></th>
                    <th><b>Office/Officer</b></th>
                    <th><b>Quantity</b></th>
                    <th><b>Quantity</b></th>
                  
                </tr>
               

            </thead>

  <tbody>
  <?php foreach ($data as $record): ?>
    <tr>
      <td><?= $record['propertydate'] ?></td>
      <td><?= $record['icsnumber'] ?></td>
      <td><?= $record['propertynumber'] ?></td>
      <td><?= $record['fulldescription'] ?></td>
      <td><?= $record['estimatedlife'] ?></td>
      <td><?= $record['issue_quantity'] ?></td>
      <td><?= $record['issue_officeofficer'] ?></td>
      <td><?= $record['reg_returned_qty'] ?></td>
      <td><?= $record['reg_returned_off'] ?></td>
      <td><?= $record['reg_reissued_qty'] ?></td>
      <td><?= $record['reg_reissued_off'] ?></td>
      <td><?= $record['reg_disposed_qty'] ?></td>
      <td><?= $record['reg_balance_quantity'] ?></td>
      <td><?= $record['reg_amount'] ?></td>
      <td><?= $record['reg_remarks'] ?></td>

    </tr>
<?php endforeach; ?>


       
  </tbody>
</table>
</body>
</html>
