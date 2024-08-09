<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Inventory Sticker</title>
    <style>
        body {
            font-family: Calibri;
            font-size: 10px;
            line-height: 1.5;
            color: #333;
            background-color: #f9f9f9;
            padding: 20px;
            margin: 0;
        }

        .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px; /* Add space between rows */
        }

        .container {
            width: 47%; /* Two containers per row with some space between */
            border: 1px solid #ccc;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .property-info {
            margin-bottom: 20px;
        }

        .property-info p {
            margin: 0;
        }

        .details {
            margin-bottom: 20px;
        }

        .details p {
            margin: 0;
        }

        .note {
            text-align: center;
            font-size: 14px;
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <?php foreach ($data as $index => $record): ?>
        <?php if ($index % 2 == 0): ?>
            <div class="row">
        <?php endif; ?>

        <div class="container">
            <div class="header">
                <p>Republic of the Philippines
                    <br>
                    <b>Department of the Interior and Local Government</b>
                    <br>
                    MIMAROPA Region
                    <br>
                    <i style="color: red;"><b>PROPERTY INVENTORY STICKER</b></i>
                </p>
            </div>
            <div class="property-info">
                <p>Property No./Description : <b style="color: blue;">MDO - LT - 2022-02</b>
                    <br>
                    <b style="color: blue;"><?= $record['fulldescription'] ?></b>
                    __________________________________________________
                    <br>
                    Model No.: <b style="color: blue;"><?= $record['modelno'] ?></b>
                    <br>
                    Serial No.: <b style="color: blue;"><?= $record['serialno'] ?></b><img :src="generateQRCodeUrl(selectedInfo.id)" alt="" style="width: 20%; height: auto; float: right;">
                    <br>
                    Acquisition Date/Cost: <b style="color: blue;"><?= $record['propertydate'] ?> <?= $record['rec_unitcost'] ?></b>
                    <br>
                    Person Accountable: <b style="color: blue;"><?= $record['acc_officer'] ?></b>
                    <br>
                    Remarks: <b style="color: blue;"><?= $record['issue_officeofficer'] ?></b>
                </p>
                <br>
                <div style="text-align: center; white-space: pre;">
                    <pre>__________________  _________________________</pre>
                    <pre>COA Representative  Authorized Representative</pre>
                </div>
            </div>
            <div class="note">
                <p style="text-align: center; color: red;"><b>NOTE: PLEASE DO NOT REMOVE</b></p>
            </div>
        </div>

        <?php if ($index % 2 == 1 || $index == count($data) - 1): ?>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</body>
</html>
