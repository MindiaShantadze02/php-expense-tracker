<?php require_once '../database/database.php' ?>
<?php require_once '../actions/create-expense.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css">
    <title>Create Expense</title>
</head>

<body>
    <div class="container mt-4">
        <h1>PHP Expense Tracker</h1>
        <br>
        <a href="index.php" class="btn btn-info">Go Back</a>
        <form class="mt-5" method="POST">
            <h4 class="text-info">Add New Expense</h4>
            <div class="form-group">
                <label>Title</label>
                <input value='<?= $title ?>' type="text" class="form-control" name="title" placeholder="Please enter title">
                <?php if ($titleError): ?>
                    <p class="text-danger"><?= $titleError ?></p>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label>Amount: <b class="range-output"></b></label>
                <input value="<?= $amount ?>" class="form-control range" type="range" name="amount" min='-10000' max='10000'>
                <?php if ($amountError): ?>
                    <p class="text-danger"><?= $amountError ?></p>
                <?php endif ?>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea value='<?= $description ?>' class="form-control" name="description" placeholder="Please enter description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
        const range = document.querySelector('.range');
        const rangeOutput = document.querySelector('.range-output');

        function showAmount () {
        rangeOutput.innerHTML = `$${range.value}`;
        }   

        document.addEventListener('DOMContentLoaded',showAmount);
        // Changing amount value
        range.addEventListener('click', showAmount);
    </script>
</body>

</html>