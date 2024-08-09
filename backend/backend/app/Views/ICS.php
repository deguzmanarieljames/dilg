<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inventory Custodian Slip</title>
<style>
    body {
        font-family: Arial;
    }
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }
    .title {
        text-align: center;
        font-size: 23px;
        font-weight: bold;
        margin-bottom: 20px;
    }
    .info {
        margin-bottom: 8px;
    }
    .table-container {
        overflow-x: auto;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        font-size: 10px;
    }

    th, td {
        border: 0.5px solid #000;
        padding: 7px;         
	text-align: center;
        height: 32px;
    }

    th:first-child {
        font-weight: normal; 
    }

    th {
        background-color: #f2f2f2;
    }

    .signature {
        margin-top: 20px;
    }

    .signature td {
        border: 0.5px solid #000;
        padding: 8px;
    }

    .received-box {
        display: flex;
        justify-content: space-between;
    }
</style>
</head>
<body>
<p style="text-align: right; margin-right: 30px;"><i>Annex A.3</i></p>
<div class="container">
    <div class="title">Inventory Custodian Slip</div>
    <div class="info">
        <p>Entity Name: <u>DILG Oriental Mindoro</u></p>
        <p>Fund Cluster: <u>01  SPHV-2023-10-087</u></p>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th rowspan="2">Quantity</th>
                    <th rowspan="2">Unit</th>
                    <th colspan="2">Amount</th>
                    <th rowspan="2">Description</th>
                    <th rowspan="2">Item No.</th>
                    <th rowspan="2">Estimated Useful Life</th>
                </tr>
                <tr>
                    <th>Unit Cost</th>
                    <th>Total Cost</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $record): ?>
                <tr>
                    <td><?= $record['rec_quantity'] ?></td>
                    <td><?= $record['rec_unit'] ?></td>
                    <td><?= $record['rec_unitcost'] ?></td>
                    <td><?= $record['rec_totalcost'] ?></td>
                    <td><?= $record['fulldescription'] ?></td>
                    <td><?= $record['propertynumber'] ?></td>
                    <td><?= $record['estimatedlife'] ?></td>
                </tr>
            <?php endforeach; ?>
                
                <tr>
                    <td></td>
                    <td></td> 
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                
                <!-- End of blank rows -->
                <tr class="received-box">
                 
                    <td colspan="4">
                        Received from:<br><br><br><b><u><?= $record['issued_officer'] ?></u></b><br>Signature Over Printed Name<br><br><u><b><?= $record['issued_offposition'] ?></b></u><br>Position/Office<br><br><b><u><?= $record['issued_date'] ?></u></b><br>Date
                    </td>
                    <td colspan="5">
                        Received by:<br><br><br><b><u><?= $record['acc_officer'] ?></u></b><br>Signature Over Printed Name<br><br><u><b><?= $record['acc_empposition'] ?></b></u><br>Position/Office<br><br><b><u><?= $record['acc_date'] ?></u></b><br>Date
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>