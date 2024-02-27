<?php
include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles21.css">
</head>

<body>
    <div class="product-list">
        <?php foreach($currentPageItems as $product) : ?>
            <div class="product">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name'] ?>">
                <h2><?php echo $product['name'] ?></h2>
                <p><?php echo $product['price'] ?></p>
                <p><?php echo $product['description'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="pagination">
        <?php if($currentPage > 1): ?>
            <a href="?page=<?php echo $currentPage - 1?>">Previous</a>
        <?php endif;?>

        <?php for($i = 1; $i <= $totalPages; $i++) :?>
            <?php if($i == $currentPage): ?>
                <span class="active"><?php echo $i; ?></span>
            <?php else:?>
                <a href="?page=<?php echo $i?>"><?php echo $i?></a>
            <?php endif;?>
        <?php endfor;?>

        <?php if($currentPage < $totalPages):?>
            <a href="?page=<?php echo $currentPage + 1?>">Next</a>
        <?php endif;?>
    </div>
</body>

</html>