<?php include 'function/cat_function/cat_edit_fun.php'; ?>
<?php include 'function/cat_function/cat_update_fun.php'; ?>

<h3>This is Category Create</h3>

<div class="container border p-5">
    <form action="" method="POST" enctype="multipart/form-data">

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="<?php @$editCat['name']?>">
    </div>

    <div class="mb-3">
        <label for="formFile" class="form-label">Image</label>
        <input class="form-control" type="file" id="formFile" name="priceImage" value="<?php @$editCat['image']?>">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Price</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="price" value="<?php @$editCat['price']?>">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Description</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="description" value="<?php @$editCat['description']?>">
    </div>

    <button type="Submit" name="cat_edit" class="btn btn-primary">Update</button>

    </form>
</div>