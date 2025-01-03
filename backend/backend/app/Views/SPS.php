<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Inventory Sticker</title>
</head>
<body style="font-family: Calibri; font-size: 10px; line-height: 1.5; color: #333; background-color: #f9f9f9; padding: 20px; margin: 0;">
    <?php foreach ($data as $index => $record): ?>
        <?php if ($index % 2 == 0): ?>
            <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
        <?php endif; ?>

        <!-- Applying dynamic styles from Vue editor -->
        <div style="
            border: 1px solid #ccc;
            padding: <?= isset($containerStyles['padding']) ? $containerStyles['padding'] : '20px' ?>;
            background-color: <?= isset($containerStyles['backgroundColor']) ? $containerStyles['backgroundColor'] : '#fff' ?>;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: <?= isset($containerStyles['width']) ? $containerStyles['width'] : '40%' ?>;
            height: <?= isset($containerStyles['height']) ? $containerStyles['height'] : 'auto' ?>;
            background-image: <?= isset($containerStyles['backgroundImage']) ? $containerStyles['backgroundImage'] : 'none' ?>;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;">
            
            <div style="text-align: center; margin-bottom: 20px;">
                <p>Republic of the Philippines
                    <br>
                    <b>Department of the Interior and Local Government</b>
                    <br>
                    MIMAROPA Region
                    <br>
                    <i style="color: red;"><b>PROPERTY INVENTORY STICKER</b></i>
                </p>
            </div>
            <div style="margin-bottom: 20px;">
                <p>Property No./Description : <b style="color: blue;">MDO - LT - 2022-02</b>
                    <br>
                    <b style="color: blue;"><?= $record['fulldescription'] ?></b>
                    __________________________________________________
                    <br>
                    Serial No.: <b style="color: blue;"><?= $record['serialno'] ?></b><img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?= $record['propertynumber'] ?>" alt="" style="width: 20%; height: auto; float: right;">
                    <br>
                    Model No.: <b style="color: blue;"><?= $record['modelno'] ?></b>
                    <br>
                    Acquisition Date/Cost: <b style="color: blue;"><?= $record['propertydate'] ?> <?= $record['rec_unitcost'] ?></b>
                    <br>
                    Person Accountable: <b style="color: blue;"><?= $record['acc_officer'] ?></b>
                    <br>
                    Remarks: <b style="color: blue;"><?= $record['remarks'] ?></b>
                </p>
            </div>
            <div style="text-align: center; font-size: 14px; margin-top: 20px; border-top: 1px solid #ccc; padding-top: 10px;">
                <p><b>Issued by the Property Inventory Unit</b>
                    <br>
                    DILG Regional Office IV-B
                    <br>
                    City of Calapan, Oriental Mindoro
                </p>
            </div>
        </div>

        <br><br><br><br><br>

        <?php if ($index % 2 == 1): ?>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</body>
</html>
