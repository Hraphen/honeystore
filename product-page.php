<?php
    if(isset($_GET['ID'])) {
        require "header.php";
        include_once 'includes/dbh.inc.php';
        $ID = mysqli_real_escape_string($conn, $_GET['ID']);
        $sql = "SELECT * FROM product WHERE id_product='$ID';";    
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $product_id = $row['id_product'];
        $product_name = $row['product_name'];
        $product_image = $row['product_image'];
        $product_price = $row['product_price'];
        $product_quantity = $row['product_quantity'];
        $product_description = $row['product_description'];
    }
    
   
?>
    <div class="item-display section-title">
        <h1 class="title"><?php echo $product_name; ?></h1>
        <div class="subsection product-container">
            <div class="product-display">
                <?php echo 'Product id: '.$product_id.'<br>'; 
                echo '<img class="product-image" src="data:image/jpeg;base64,'.base64_encode($product_image) .'" />';
                ?>
            </div>
            <div class="product-info">
                <?php echo '<h2>'.$product_name.'</h2>' ?>
                <?php echo '<p>Price: '.$product_price.' &#x20AC  ('.$product_quantity.' items remaining in stock)</p>' ?>
                <?php echo '<div class="product-description"><p>'.$product_description.'</p></div>' ?>
                <div class="product-options">
                    <button formaction="includes/productbuy.inc.php" class="button-buy tertiary display-inline-block" type="submit" name="buy-product">Buy</button>
                    <a href="store.php"><p class="button button-buy tertiary display-inline-block">Go back</p></a>
                </div>
            </div>
            
        </div>
    </div>
</div>
<?php
	require "footer.php";
?>