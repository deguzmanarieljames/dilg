<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PURCHASE REQUEST/title>
  <style>

.title {
  text-align: center;
  font-size: 14px;
  margin-bottom: 20px;
  font-weight: bold; /* Baguhin ang font-weight sa normal */
}

table {
  width: 70%;
  border-collapse: collapse;
  font-size: 13px; /* Adjust font size as needed */
}

th, td {
  border: 1px solid black;
  padding: 4px 9px; /* Adjust padding for better readability */
  text-align: center;
  overflow: hidden; /* Hide overflowed content */
  
}

td {
    color: blue;
}

th {
  height: 27px; /* Adjust height for header */
  background-color: #fff; /* Baguhin ang kulay ng background sa puti */
  font-weight: normal; /* Baguhin ang font-weight sa normal */
}

/* Ibalik ang border para sa mga thead at tfoot */
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

.left {
margin: 0;
}
  </style>
  
</head>
<body>
<?php foreach ($data as $record): ?>
  <p style="text-align: right; margin-right: 30px; font-size: 11;"><i>Appendix 60</i></p>
  <br>
  
<!-- HEADER HTML -->
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
  <div class="title" style="text-align: center; margin: 0; padding: 0; font-size: 14px;">
   PURCHASE REQUEST
</div>
<br>
<div class="info">
  <p class="left" style="margin: 0;">Entity Name: <u>DILG Oriental Mindoro</u> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fund Cluster: <u>01</u> </p>
</div>
  </div>

<br>
<table style="width: 100%; border-collapse: collapse; font-size: 10px;">
  <thead>
    <tr>
      <th colspan="2" style="text-align: left;">Office/Section:</th>
      <th colspan="2" style="text-align: left;">
          PR No.:<br> 
          Responsibility Center Code : <br> 
          14-001-003-000-17(09)
      </th>
      <th colspan="2" style="text-align: left;">Date:         <p style="display: flex; justify-content: space-between; color: blue;"><?= $record['date_ordered'] ?></p>
      </th>
    </tr>
    <tr>
      <th rowspan="1">Stock/Property No.</th>
      <th rowspan="1">Unit</th>
      <th rowspan="1">Item Description</th>
      <th rowspan="1">Quantity</th>
      <th rowspan="1">Unit Cost</th>
      <th rowspan="1">Total Cost</th>
    </tr>
  </thead>
  <tbody>
    <!-- Blank rows with individual <td> for each column, with a standard black border and smaller size -->
    <tr>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"><?= $record['unit'] ?></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"><?= $record['particulars'] ?></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"><?= $record['quantity'] ?></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"><?= $record['unitcost'] ?></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"><?= $record['totalamount'] ?></td>
    </tr>
    <tr>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
    </tr>
    <tr>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
    </tr>
    <tr>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
    </tr>
    <tr>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
    </tr>
    <tr>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
    </tr>
    <tr>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
    </tr>
    <tr>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
    </tr>
    <tr>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
    </tr>
    <tr>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
    </tr>
    <tr>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"></td>
      <td style="border: 1px solid #333; height: 20px; width: 50px;"><b><?= $record['totalamount'] ?></b></td>
    </tr>
  
    <tr>
      <th colspan="6" style="text-align: left;">Purpose: <br> <br> <br><br> <br></th>
    </tr>
    <!-- Requested by and Approved by -->

    
    <tr>
      <th colspan="3" style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Requested by: <br>
      <p>Signature:</p>
        <p>Printed Name:</p>
        <p>Designation:</p>
    </th>
    <th colspan="3" style="padding: 10px; text-align: center;">
        <p>Approved by:</p><br>
        <p style="margin: 5px 0;"><u>MARIA VICTORIA J. DEL ROSARIO, CSEE</u></p>
        <p style="margin: 5px 0;"><u>Provincial Director</u></p>
      </th>

    </tr>
    
  </tbody>
</table>





<?php endforeach; ?>
</body>
</html>

