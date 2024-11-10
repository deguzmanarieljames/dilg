<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record Details</title>

    <style>
        .container {
    text-align: center;
}

.table-wrapper {
    overflow-x: auto;
}

.custom-table {
    width: 100%;
    border-collapse: collapse;
}

.custom-table th,
.custom-table td {
    border: 1px solid #ccc;
    padding: 8px;
    font-size: 14px;
}

.custom-table th {
    background-color: #f2f2f2;
}
    </style>

</head>
<body>
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
    <h3 class="text-center">Request PPE Records</h3>
        <div class="table-wrapper">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th>Employee Name</th>
                        <th>Particulars</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $record): ?>
                        <tr class="record-details">
                            <td><?= $record['empfullname'] ?></td>
                            <td><?= $record['particulars'] ?></td>
                            <td><?= $record['description'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
</div>

</body>
</html>