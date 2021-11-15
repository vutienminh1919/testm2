
<div class="card" style="width: 18rem;">
    <?php if (isset($product)):?>
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title" ><?php echo $product["name"];?></h5>
        <p class="card-text"><?php echo $product["description"];?></p>
        <a href="index.php" class="btn btn-primary">back</a>
    </div>
    <?php endif;?>
</div>