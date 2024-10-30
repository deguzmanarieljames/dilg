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
            margin-bottom: 20px;
        }

        /* This container class will have styles passed from Vue */
        .container {
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

        .details, .property-info p {
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

        <!-- Applying dynamic styles from Vue editor -->
        <div class="container" style="
            width: <?= isset($containerStyles['width']) ? $containerStyles['width'] : '90%' ?>;
            height: <?= isset($containerStyles['height']) ? $containerStyles['height'] : 'auto' ?>;
            padding: <?= isset($containerStyles['padding']) ? $containerStyles['padding'] : '10px' ?>;
            background-color: <?= isset($containerStyles['backgroundColor']) ? $containerStyles['backgroundColor'] : '#fff' ?>;
            background-image: <?= isset($containerStyles['backgroundImage']) ? $containerStyles['backgroundImage'] : 'none' ?>;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        ">
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
                    Serial No.: <b style="color: blue;"><?= $record['serialno'] ?></b><img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?= $record['propertynumber'] ?>" alt="" style="width: 20%; height: auto; float: right;">
                    <br>
                    Model No.: <b style="color: blue;"><?= $record['modelno'] ?></b>
                    

                    Acquisition Date/Cost: <b style="color: blue;"><?= $record['propertydate'] ?> <?= $record['rec_unitcost'] ?></b>
                    <br>
                    Person Accountable: <b style="color: blue;"><?= $record['acc_officer'] ?></b>
                    <br>
                    Remarks: <b style="color: blue;"><?= $record['issue_officeofficer'] ?></b>
                </p>
            </div>
            <div class="note">
                <p><b>Issued by the Property Inventory Unit</b>
                    <br>
                    DILG Regional Office IV-B
                    <br>
                    City of Calapan, Oriental Mindoro
                </p>
            </div>
        </div>

        <?php if ($index % 2 == 1): ?>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</body>
</html>
