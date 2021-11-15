<div class="container">
    <table border="1px" class="table">
        <thead class="table-dark">
        <h2>Danh sach mat hang </h2>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>price</th>
            <th>description</th>
            <th>quantity</th>
            <th>category</th>
            <th>date</th>
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