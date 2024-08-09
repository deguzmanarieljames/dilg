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