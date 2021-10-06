<?php 

$ds = DIRECTORY_SEPARATOR;
require_once __DIR__.$ds.'..'.$ds.'database'.$ds.'getdata.php';
require_once '../actions/format.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>PHP Expense Tracker</title>
</head>

<body>
    <div class="container mt-4">
        <a class="navbar-brand">
            <h1>PHP Expense Tracker</h1>
        </a>
        <nav class="navbar navbar-light bg-dark justify-content-between">
            <button class="btn btn-info filter-button">Filter</button>
            <a href="create.php" class="btn btn-success">Add New Expense</a>
            <div class="container mt-4">
                <div class="filter-div-off">
                    <form method="get">
                        <div class="form-group">
                            <label>Enter Title</label>
                            <input class="form-control mr-sm-2" type="text" name='search' placeholder="Search"
                                aria-label="Search">
                        </div>
                        <div class="form-group">
                            <label for="range">Max Amount: <b class="range-output"></b></label>
                            <input id='range' max='10000' min='-10000' class="form-control mr-sm-2 range" type="range"
                                name="amount_range">
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <select name="date_sort"></select>
                        </div>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($expenses as $i => $expense): ?>
                <tr>
                    <th scope="row"><?= ($i + 1) ?></th>
                    <td><?= $expense['title'] ?></td>
                    <td><?= $expense['description'] ?></td>
                    <?php if ((float)$expense['amount'] > 0): ?>
                        <td class="text-success"><?= formatAmount($expense['amount']) ?></td>
                    <?php else: ?>
                        <td class="text-danger"><?= formatAmount($expense['amount']) ?></td>
                    <?php endif ?>
                    <td><?= $expense['date'] ?></td>
                    <td class="buttons">
                        <button class='btn btn-success'>Edit</button>
                        <form action="delete.php" method="POST" class="delete-form">
                            <input type="hidden" name="id" value="<?= $expense['id'] ?>">
                            <button class="btn btn-outline-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <?php if (!$expenses): ?>
        <h2 class="text-center">No Expenses</h2>
        <?php endif ?>
    </div>

    <script src="./script.js"></script>
</body>

</html>