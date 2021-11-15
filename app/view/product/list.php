<div class="container">
    <form method="get">
        <input type="text" name="search" > <button type="submit" class="btn btn-primary type="">Search</button>
    </form>
    <a type="button" class="btn btn-primary" style="margin-left: 900px" href="index.php?page=product-create">add new product</a>
</div>

<div class="container">
    <table border="1px" class="table">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>price</th>
            <th>description</th>
            <th>quantity</th>
            <th>category</th>
            <th>date</th>
            <th colspan="3">Action</th>

        </tr>
        </thead>
        <tbody>
        <?php if (isset($products)): ?>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo $product["id"] ?></td>
                    <td><?php echo $product["name"] ?></td>
                    <td><?php echo $product["price"] ?></td>
                    <td><?php echo $product["description"] ?></td>
                    <td><?php echo $product["amount"] ?></td>
                    <td><?php echo $product["category"] ?></td>
                    <td><?php echo $product["date"] ?></td>
                    <td><a type="button" class ="btn btn-danger" onclick="return confirm('Are you sure ?')" href="index.php?page=product-delete&id=<?php echo $product["id"] ?>">Delete</a></td>
                    <td><a type="button" class="btn btn-success" href="index.php?page=product-edit&id=<?php echo $product["id"] ?>">Edit</a></td>
                    <td><a type="button" class="btn btn-info" href="index.php?page=product-detail&id=<?php echo $product["id"] ?>">Detail</a></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="7">Khong co gi hien thi ca</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
