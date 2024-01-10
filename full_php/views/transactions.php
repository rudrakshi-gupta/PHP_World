<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Table</title>
    <!-- <link rel="stylesheet" href=" (string)dirname(__DIR__).'/views/style.css' "> -->
    <style>
        table{
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }
        table tr th, table tr td{
            padding: 5px;
            border: 1px #eee solid;
        }
        tfoot tr th, tfoot tr td{
            font-size: 20px;
        }
        tfoot tr th{
            text-align: right;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Check #</th>
                <th>Description</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($transactions)): ?>
                <?php foreach ($transactions as $transaction): ?>
                    <tr>
                        <td><?= (string)date('M j, Y',strtotime($transaction[0])) ?></td>
                        <td><?= $transaction[1] ?></td>
                        <td><?= $transaction[2] ?></td>
                        <?php if ($transaction[3][0] == "-"): ?>
                            <td style="color:red"><?= $transaction[3] ?></td>
                        <?php else: ?>
                            <td style="color:green"><?= $transaction[3] ?></td>
                        <?php endif ?>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">Total Income :</th>
                <td><?= "$".$values[0] ?? 0 ?></td> <!-- not set then 0 -->
            </tr>
            <tr>
                <th colspan="3">Total Expense :</th>
                <td><?= "-$".$values[1] ?? 0 ?></td>
            </tr>
            <tr>
                <th colspan="3">Net Income :</th>
                <td><?= "$".$values[2] ?? 0 ?></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>