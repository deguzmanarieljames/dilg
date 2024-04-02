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
    <h3 class="text-center">INVENTORY CUSTODIAN SLIP</h3>
    <div class="table-wrapper">
        <table class="custom-table">
            <thead>
                <tr>
                    <th>Entity</th>
                    <th>Particulars</th>
                    <th>Employee Fullname</th>
                    <th>Image Verification</th>
                    <th>Created At</th>
                    <th>Classification</th>
                    <th>Code</th>
                    <th>Article</th>
                    <th>Model No</th>
                    <th>Serial No</th>
                    <th>Full Description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $record): ?>
                    <tr class="record-details">
                        <td><?= $record['entityname'] ?></td>
                        <td><?= $record['particulars'] ?></td>
                        <td><?= $record['empfullname'] ?></td>
                        <td><?= $record['imageverification'] ?></td>
                        <td><?= $record['created_at'] ?></td>
                        <td><?= $record['classification'] ?></td>
                        <td><?= $record['code'] ?></td>
                        <td><?= $record['article'] ?></td>
                        <td><?= $record['modelno'] ?></td>
                        <td><?= $record['serialno'] ?></td>
                        <td><?= $record['fulldescription'] ?></td>
                        <!-- Add more fields as needed -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>