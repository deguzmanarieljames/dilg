<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REPORT ON THE PHYSICAL COUNT OF SEMI-EXPENDABLE PROPERTY (High Valued)</title>
  <style>
   body {
  font-family: Arial;
}

.title {
  text-align: center;
  font-size: 11px;
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
  height: 50px;
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
  font-size: 9px;
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
  <p style="text-align: right; margin-right: 30px; font-size: 11;"><i>Annex A.8</i></p>
  <br>
  <div class="container">
    <div class="title">REPORT ON THE PHYSICAL COUNT OF SEMI-EXPENDABLE PROPERTY (High Valued)	
      <br>
      FURNITURES AND FIXTURES			
      <br>
      (Type of Semi-Expendable  Property)									

      <br>				
</div>
    <p style="text-align: center; margin-center: 30px; font-size: 11;">as at DILG ORIENTAL MINDORO - October 20, 2023										
</p>
     
    <div class="info">
      <p class="left"><u>(Php 5000.00 and above)</u></p>
      <p class="left">Fund Cluster: <u>01101101 - REGULAR AGENCY BUDGET</u></p>
      <p class="left">For which <u><b>Maria Victoria J. Del Rosario, Provincial Director</b>, of <b>DILG Oriental Mindoro</b></u> is accountable, having assumed such accountability on <b><u>April 7, 2021.</u></b> </p>
      						

    </div>
  </div>

<br>
<table>
<thead>
    <tr>
        <th rowspan="2"><b>Article</b></th>
        <th rowspan="2"><b>Description</b></th>
        <th rowspan="2"><b>Semi-Expendable Property No.</b></th>
        <th rowspan="2"><b>Unit Measures</b></th>
        <th rowspan="2"><b>Unit Value</b></th>
        <th rowspan="2"><b>Date Acquired</b></th>
        <th colspan="1"><b>Balance Per</b></th>
        <th colspan="1"><b>Onhand Per</b></th>
        <th colspan="2"><b>Shortage/Overage</b></th>
        <th rowspan="2"><b>Remarks</b></th>
    </tr>
    <tr>
        <th><b>Quantity</b></th>
        <th><b>Quantity</b></th>
        <th><b>Quantity</b></th>
        <th><b>Value</b></th>
    </tr>
</thead>
<tbody>
    <?php foreach ($data as $record): ?>
    <tr>
      <td><?= $record['article'] ?></td>
      <td><?= $record['fulldescription'] ?></td>
      <td><?= $record['propertynumber'] ?></td>
      <td><?= $record['rec_unit'] ?></td>
      <td><?= $record['rec_unitcost'] ?></td>
      <td><?= $record['issue_date'] ?></td>
      <td><?= $record['balancequantity'] ?></td>
      <td><?= $record['reg_returned_qty'] ?></td>
      <td><?= $record['balancequantity'] ?></td>
      <td><?= $record['reg_returned_qty'] ?></td>
      <td><?= $record['remarks'] ?></td>
    </tr>
    <?php endforeach; ?>


  



    <tr>
      <th colspan="4">
      Certified Correct by:
      <br>
      <br>
      <br>
      <b><u>RONEL O. CACHO / GENRIEL V. DEL MUNDO</u></b>	
      <br>
      <br>
      <br>
      <b><u>JESTINE MARIE O. YLAGAN/ SARAH MAE T. JADIA</u></b>	
      <br>
      <br>
      Signature over Printed Name of	
      <br>
      <br>
      Inventory Committee Chair and	
      <br>
      <br>
      Members

        </th>
      <th colspan="4">
      Approved by:
      <br>
      <br>
      <br>
      <b><u>MARIA VICTORIA J. DEL ROSARIO</u></b>	
      <br>
      <br>
      Signature over Printed Name of Head of	
      <br>
      <br>
      Agency/Entity or Authorized Representative		

      <th colspan="4">
      Witness by:
      <br>
      <br>
      <br>
      <b><u>VIRGINIA BARREDA</u></b>	
      <br>
      <br>
      Signature over Printed Name of COA		
      <br>
      <br>
      Representative		
        

      </th>
    </tr>
    
            
  </tbody>
</table>

</body>
</html>