<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>

</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
              <h1>PRODUCT MANAGEMENT</h1>
                <h2> </h2>
                <form action="/save" method="post">
                    <div class="form-group">
                        <label for="ProductName">Product Name:</label>
                        <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
                        <input type="text" class="form-control" name="ProductName" placeholder="Enter Product Name"
                            value="<?= isset($pro['ProductName']) ? $pro['ProductName'] : '' ?>">
                    </div>

                    <div class="form-group">
                    <label for="ProductDescription">Description:</label>
                    <select class="form-control" name="ProductDescription">
                        <option value="Breakfast" <?= (isset($pro['ProductDescription']) && $pro['ProductDescription'] === 'Breakfast') ? 'selected' : '' ?>>Breakfast</option>
                        <option value="Lunch" <?= (isset($pro['ProductDescription']) && $pro['ProductDescription'] === 'Lunch') ? 'selected' : '' ?>>Lunch</option>
                        <option value="Dinner" <?= (isset($pro['ProductDescription']) && $pro['ProductDescription'] === 'Dinner') ? 'selected' : '' ?>>Dinner</option>
                    </select>
                    </div>


                    <div class="form-group">
                        <label for="ProductCategory">Category:</label>
                        <input type="text" class="form-control" name="ProductCategory" placeholder="Enter Category"
                            value="<?= isset($pro['ProductCategory']) ? $pro['ProductCategory'] : '' ?>">
                    </div>

                    <div class="form-group">
                        <label for="ProductQuantity">Quantity:</label>
                        <input type="text" class="form-control" name="ProductQuantity" placeholder="Enter Quantity"
                            value="<?= isset($pro['ProductQuantity']) ? $pro['ProductQuantity'] : '' ?>">
                    </div>

                    <div class="form-group">
                        <label for="ProductPrice">Price:</label>
                        <input type="text" class="form-control" name="ProductPrice" placeholder="Enter Price"
                            value="<?= isset($pro['ProductPrice']) ? $pro['ProductPrice'] : '' ?>">
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            <div class="col-md-6">
                 <h2></h2>
                 <ul>
                     <?php foreach ($product as $pr): ?>
                         <li>
                             <strong>Product Name:</strong> <?= $pr['ProductName'] ?><br>
                             <strong>Product Description:</strong> <?= $pr['ProductDescription'] ?><br>
                             <strong>Product Category:</strong> <?= $pr['ProductCategory'] ?><br>
                             <strong>Product Quantity:</strong> <?= $pr['ProductQuantity'] ?><br>
                             <strong>Product Price:</strong> <?= $pr['ProductPrice'] ?><br>
                             <a href="/delete/<?= $pr['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                             <a href="/edit/<?= $pr['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                         </li>
                     <?php endforeach ?>
                 </ul>
             </div>
         </div>
     </div>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </body>
 </html>
