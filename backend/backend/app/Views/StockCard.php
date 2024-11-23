<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>STOCK CARD</title>
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
      border: 0.5px solid black;
      padding: 2px 4px;
      text-align: center;
      overflow: hidden;
      font-size: 13px;
   }
   
   td {
    color: blue;
   }

   th {
      height: 27px;
      background-color: #fff;
      font-weight: normal;
   }

   .small-font th, td {
      font-size: 10px;
   }

   .left-align {
      text-align: left;
      padding-left: 4px;
      font-size: 10px;
   }

   .multiline {
      white-space: pre-wrap;
      line-height: 1;
   }

   .italic-header {
      font-style: italic;
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

   tbody td, th{
      height: 18px;
   }
  </style>
</head>
<body>
<?php foreach ($data as $record): ?>
  <p style="text-align: right; margin-right: 30px; font-size: 11px;"><i>Appendix 58</i></p>
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
    <div class="title">STOCK CARD</div>

    <div class="info">
      <p><b>Entity Name: <u>DILG MIMAROPA</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fund Cluster: <u>01</u></p></b>
    </div>
  </div>

<table>
<thead>
    <tr>
        <td colspan="5" class="left-align">Item: <?= $record['item'] ?></td>
        <td colspan="2" class="left-align">Stock No.: <?= $record['item_code'] ?></td>
    </tr>
    <tr>
        <td colspan="5" class="left-align">Description: <?= $record['description'] ?></td>
        <td colspan="2" class="left-align">Re-order Point: 0</td>
    </tr>    
    <tr>
        <td colspan="5" class="left-align">Unit of Measurement: <?= $record['unit_measurement'] ?></td>
        <td colspan="2"></td>
    </tr>     
    <tr class="small-font">
        <th rowspan="2"><b>Date</b></th>
        <th rowspan="2"><b>Reference</b></th>
        <th colspan="1" class="italic-header"><b><i>Receipt</i></b></th>
        <th colspan="2" class="italic-header"><b><i>Issue</i></b></th>
        <th colspan="1" class="italic-header"><b><i>Balance</i></b></th>
        <th rowspan="2" class="multiline"><b>No. of Days to<br>Consume</b></th>
    </tr>
    <tr class="small-font">
        <th><b>Qty.</b></th>
        <th><b>Quantity</b></th>
        <th><b>Office</b></th>
        <th><b>Qty.</b></th>
    </tr>
</thead>
<tbody>

    <tr class="small-font">
        <td><?= $record['date'] ?></td>
        <td><?= $record['date'] ?></td>
        <td><?= $record['rec_quantity'] ?></td>
        <td><?= $record['issue_quantity'] ?></td>
        <td>LGCDD</td>
        <td><?= $record['bal_quantity'] ?></td>
        <td><?= $record['no_days'] ?></td>
    </tr>

    <tr class="small-font">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr class="small-font">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr class="small-font">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr class="small-font">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr class="small-font">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr class="small-font">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr class="small-font">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr class="small-font">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr class="small-font">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr class="small-font">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    
    
    
</tbody>
</table>
<?php endforeach; ?>
</body>
</html>