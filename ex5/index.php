<?php 
    include 'db.php';
    $query = "SELECT * FROM tbl_29_books";
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
    <title>Library R.V</title>
</head>
<body>
    <div class="navbar">
        <h1>Library R.V</h1>
    </div>

    <select required name="category" id="category" class="form-control">
        <option value="All Category" selected="selected">All Category</option>
    </select>

    <div class="product-price-box">
        <div class="row">
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <div class="col-sm-6 cart-category">
                    <div class="card">
                        <div class="img-binding">
                            <img src="<?php echo $row['url']; ?>" class="card-img-top">
                            <img src="<?php echo $row['url2']; ?>" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <span class="card-title"><h3><?php echo $row["book_name"]; ?></h3></span>
                            <span class="card-title"><?php echo $row["author"]; ?></span><br>
                            <span class="card-title"><?php echo $row["price"]; ?>$</span><br>
                            <span id="card_category" class="card-title"><?php echo $row["category"]; ?></span><br>
                            <a href="book.php?id=<?php echo $row["id"]; ?>">View</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <script src="getcategory.js"></script>

    <?php 
        mysqli_free_result($result);
        mysqli_close($connection);
    ?>
</body>
</html>
