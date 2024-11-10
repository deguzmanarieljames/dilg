<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INVENTORY DISPOSAL REPORT</title>
</head>
<body style="font-family: Arial;">
<?php foreach ($data as $record): ?>
  <p style="text-align: right; margin-right: 30px; font-size: 14px;"><i>Annex A.4</i></p>
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
    <div style="text-align: center; font-size: 20px; margin-bottom: 20px; font-weight: bold;">INVENTORY DISPOSAL REPORT</div>
  
    <div style="font-size: 10px;">
      <p style="text-align: left; float: left; font-size: 14px;">
        Entity Name: <u>DILG Oriental Mindoro</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Fund Cluster: ________________________
      </p>
    </div>
  </div>
  <br>
  <table style="width: 100%; border-collapse: collapse;">
    <thead>
      <tr>
        <th colspan="4" style="border: 1px solid black; padding: 11px; text-align: center; height: 20px; background-color: #fff; font-weight: normal;">
          <b>From Accountable Officer/Agency/Fund Cluster: ________________________</b>
          <br><br>
          <b>To Accountable Officer/Agency/Fund Cluster: ________________________</b>
        </th>
        <th colspan="2" style="border: 1px solid black; padding: 11px; text-align: center; height: 20px; background-color: #fff; font-weight: normal;">
          <b>ITR Number: ______________</b>
          <br><br>
          <b>Date: ______________</b>
        </th>
      </tr>
      <tr>
        <th style="border: 1px solid black; padding: 11px;">Date</th>
        <th style="border: 1px solid black; padding: 11px;">Item No.</th>
        <th style="border: 1px solid black; padding: 11px;">ICS No./Date</th>
        <th style="border: 1px solid black; padding: 11px;">Description</th>
        <th style="border: 1px solid black; padding: 11px;">Amount</th>
        <th style="border: 1px solid black; padding: 11px;">Condition of Inventory</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="border: 1px solid black; padding: 11px; font-size: 12px;"><?= $record['issue_date'] ?></td>
        <td style="border: 1px solid black; padding: 11px; font-size: 12px;"><?= $record['issue_itemno'] ?></td>
        <td style="border: 1px solid black; padding: 11px; font-size: 12px;"><?= $record['icsnumber'] ?></td>
        <td style="border: 1px solid black; padding: 11px; font-size: 12px;"><?= $record['fulldescription'] ?></td>
        <td style="border: 1px solid black; padding: 11px; font-size: 12px;"><?= $record['balanceamount'] ?></td>
        <td style="border: 1px solid black; padding: 11px; font-size: 12px;"><?= $record['remarks'] ?></td>
      </tr>
      <tr>
        <td style="border: 1px solid black; padding: 11px;"></td>
        <td style="border: 1px solid black; padding: 11px;"></td>
        <td style="border: 1px solid black; padding: 11px;"></td>
        <td style="border: 1px solid black; padding: 11px;"></td>
        <td style="border: 1px solid black; padding: 11px;"></td>
        <td style="border: 1px solid black; padding: 11px;"></td>
      </tr>
      <tr>
        <td style="border: 1px solid black; padding: 11px;"></td>
        <td style="border: 1px solid black; padding: 11px;"></td>
        <td style="border: 1px solid black; padding: 11px;"></td>
        <td style="border: 1px solid black; padding: 11px;"></td>
        <td style="border: 1px solid black; padding: 11px;"></td>
        <td style="border: 1px solid black; padding: 11px;"></td>
      </tr>
      <tr>
        <td style="border: 1px solid black; padding: 11px;"></td>
        <td style="border: 1px solid black; padding: 11px;"></td>
        <td style="border: 1px solid black; padding: 11px;"></td>
        <td style="border: 1px solid black; padding: 11px;"></td>
        <td style="border: 1px solid black; padding: 11px;"></td>
        <td style="border: 1px solid black; padding: 11px;"></td>
      </tr>
      <tr style="text-align: left;">
        <th colspan="6" style="border: 1px solid black; padding: 11px;"><b>Reason/s for Transfer:</b>
          <br><br><br><br><br><br><br><br><br>
        </th>
      </tr>
      <tr>
        <th colspan="2" style="border: 1px solid black; padding: 11px; text-align: center;">
          <b>Approved by:</b>
          <br><br>
          Signature: &nbsp; ___________________
          <br><br>
          Printed Name: <u>Ronel Cacho</u>
          <br><br>
          Designation: <u>Provincial Director</u>
          <br><br>
          Date: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___________________
        </th>
        <th colspan="2" style="border: 1px solid black; padding: 11px; text-align: center;">
          <b>Released/Issued by:</b>
          <br><br>
          Signature: &nbsp; ___________________
          <br><br>
          <u>SERVICEABLE - C/O RO CACHO</u>
          <br><br>
          <u>Property Officer</u>
          <br><br>
          _______________________
        </th>
        <th colspan="2" style="border: 1px solid black; padding: 11px; text-align: center;">
          <b>Released/Issued by:</b>
          <br><br>
          Signature: &nbsp; ___________________
          <br><br>
          ____________________________
          <br><br>
          ____________________________
          <br><br>
          ____________________________
        </th>
      </tr>
    </tbody>
  </table>
  <?php endforeach; ?>
</body>
</html>
