<?php include 'function/cat_function/cat_create_fun.php'; ?>

<h3>This is Category Create</h3>

<div class="container border p-5">
    <form action="" method="POST" enctype="multipart/form-data">

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
    </div>

    <div class="mb-3">
        <label for="formFile" class="form-label">Image</label>
        <input class="form-control" type="file" id="formFile" name="priceImage">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Price</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="price">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Description</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="description">
    </div>

    <button type="Submit" name="cat_create" class="btn btn-primary">Create</button>

    </form>
</div>