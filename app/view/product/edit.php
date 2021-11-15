
  <div class="container mt-2" style="width: 30%">
      <form method="post">

          <input type="text" name="id" value="<?php echo $product['id'] ?>" hidden><br><br>
          <label>Ten san pham</label><br>
          <input type="text" name="name" value="<?php echo $product['name'] ?>"><br><br>
          <label>Gia san pham</label><br>
          <input type="text" name="price" value="<?php echo $product['price'] ?>"><br><br>
          <label>Mo to san pham</label><br>
          <textarea name="description"><?php echo $product['description'] ?></textarea><br><br>
          <label>So luong san pham</label><br>
          <input type="text" name="amount" value="<?php echo $product['amount'] ?>"><br><br>
          <label>Ten loai san pham</label><br>
          <input type="text" name="category" value="<?php echo $product['category'] ?>"><br><br>
          <label>ngay thang</label><br>
          <input type="text" name="date" value="<?php echo $product['date'] ?>"><br><br>

          <button class="btn btn-primary" type="submit" name="upload">Update</button>
          <a type="button" class="btn btn-danger" href="index.php?page=product-list">Back</a>
      </form>
  </div>


