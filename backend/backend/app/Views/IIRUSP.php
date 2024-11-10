<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INVENTORY AND INSPECTION REPORT OF UNSERVICEABLE SEMI-EXPENDABLE PROPERTY</title>
  <style>
   body {
  font-family: Arial;
}

.title {
  text-align: center;
  font-size: 13px;
  margin-bottom: 20px;
  font-weight: bold; /* Baguhin ang font-weight sa normal */
}

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  border: 1px solid black;
  padding: 8px;
  text-align: center;
  height: 80px;
  font-family: Arial; /* Ibalik sa Arial ang font-family */
}

th {
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

  </style>
</head>
<body>
  <p style="text-align: right; margin-right: 30px; font-size: 11;"><i>Annex A.10</i></p>
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
    <div class="title">INVENTORY AND INSPECTION REPORT OF UNSERVICEABLE SEMI-EXPENDABLE PROPERTY</div>
    <p style="text-align: center; margin-center: 30px; font-size: 11;">As at October 20, 2023</p>
     
    <div class="info">
      <p class="left">Entity Name: <u>DILG Oriental Mindoro</u></p>
      <p class="left">Fund Cluster: <u>01101101 - REGULAR AGENCY BUDGET</u></p>
    </div>
    <br>
    <div class="info">
      <p class="center"><u><b>MARIA VICTORIA J. DEL ROSARIO</u><br><i>(Name of Accountable Officer)</i></p>
     
    </div>
  </div>

<br>
<table>
<thead>

<tr>
                    <th colspan="9" style="font-size: 18px;"><b>Inventory Inspection and Disposal</b></th>
                    <th colspan="8" style="font-size: 18px;"><b>Inspection and Disposal</b></th>
                </tr>
                <tr>
                    <th rowspan="2"><b>Date Aquired</b></th>
                    <th rowspan="2"><b>Particulars/ Articles</b></th>
                    <th rowspan="2"><b>Semi-Expendable Property No.</b></th>
                    <th rowspan="2"><b>Quantity</b></th>
                    <th rowspan="2"><b>Unit Cost</b></th>
                    <th rowspan="2"><b>Total Cost</b></th>
                    <th rowspan="2"><b>Accumulated Impairment</b></th>
                    <th rowspan="2"><b>Carrying Amount</b></th>
                    <th rowspan="2"><b>Remarks</b></th>

                    <th colspan="5"><b>Disposal</b></th>

                    <th rowspan="2"><b>Appraised Value</b></th>

                    <th colspan="2"><b>Record of Sales</b></th>

                  
                </tr>
                <tr>
                    <th><b>Sale</b></th>
                    <th><b>Transfer</b></th>
                    <th><b>Destruction</b></th>
                    <th><b>Others(Specify)</b></th>
                    <th><b>Total</b></th>
                    <th><b>QR No.</b></th>
                    <th><b>Amount</b></th>
                </tr>
               

            </thead>

  <tbody>

    <tr>
      <td>(1)</td>
      <td>(2)</td>
      <td>(3)</td>
      <td>(4)</td>
      <td>(5)</td>
      <td>(6)</td>
      <td>(8)</td>
      <td>(9)</td>
      <td>(10)</td>
      <td>(11)</td>
      <td>(12)</td>
      <td>(13)</td>
      <td>(14)</td>
      <td>(15)</td>
      <td>(16)</td>
      <td>(17)</td>
      <td>(18)</td>
    </tr>


    <?php foreach ($data as $record): ?>
    <tr>
      <td><?= $record['issue_date'] ?></td>
      <td><?= $record['particulars'] ?></td>
      <td><?= $record['propertynumber'] ?></td>
      <td><?= $record['rec_quantity'] ?></td>
      <td><?= $record['rec_unitcost'] ?></td>
      <td><?= $record['rec_totalcost'] ?></td>
      <td><?= $record['accimploss'] ?></td>
      <td><?= $record['rec_totalcost'] - $record['accimploss']?></td>
      <td><?= $record['remarks'] ?></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <?php endforeach; ?>



    <tr>
<th colspan="9">I HEREBY  request   inspection and disposition, pursuant to Section 79 of P.D No. 1445, of the property enumerated above.
<br>
<br>
Requested by:
<br>
<br>
<b><u>MARIA VICTORIA J. DEL ROSARIO	</u></b>	
<br>
<i>(Signature over Printed Name of Accountable Officer)</i>
<br>
<br>
<br>
<b><u>Provincial Director</u></b>
<br>
(Designation of Accountable Officer)		

  </th>
<th colspan="5">I CERTIFY that I have inspected each and every article enumerated in this report, and that the disposition made thereof was, in my judgement, the best for the public interest.

<br>
<br>
<br>
_______________________________________________________
 (Signature over Printed Name of Accountable Officer)			





</th>
<th colspan="3">I CERTIFY that I have witnessed the disposition of the articles enumerated on this report this _____ day of ____________, _______.

<br>
<br>
__________________________
(Accountable Officer)		

</th>
</tr>
    
            
  </tbody>
</table>

</body>
</html>
