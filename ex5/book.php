<?php 
    include 'db.php';
    $id = $_GET['id'];

    $query = "SELECT * FROM tbl_29_books WHERE id = $id";
    $result = mysqli_query($connection , $query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="my-style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Book View</title>
</head>
<body>
    <div class="navbar">
        <h1>Library R.V</h1>
    </div>
    <?php
        $book = mysqli_fetch_assoc($result);
    ?>
    <h2><?php echo $book["category"]; ?></h2>
    <div class="row">
        <div class="col-sm-6 cart-category">
            <img src="<?php echo $book['url']; ?>" >
            <img src="<?php echo $book['url2']; ?>" >
            <div class="info">
                <span class="card-title"><h3><?php echo $book["book_name"]; ?></h3></span>
                <span class="card-title"><?php echo $book["author"]; ?></span><br>
                <span class="card-title"><?php echo $book["price"]; ?>$</span><br>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    mysqli_close($connection);
?>
