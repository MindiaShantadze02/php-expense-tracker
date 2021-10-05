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
        <form class="mt-5">
            <h4 class="text-info">Add New Expense</h4>
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" placeholder="Please enter title">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" placeholder="Please enter description"></textarea>
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" name="price" placeholder="Please enter price">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>