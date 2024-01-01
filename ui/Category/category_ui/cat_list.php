<?php 
    include 'function/cat_function/cat_list_fun.php';
?>

<h3>This is category List</h3>
<div class="container">
<table class="table table-dark table-hover">
<thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach($category_list as $key=>$category){
    ?>
    <tr>
        <td><?php echo $category["name"]?></td>
        
        <td><img src="<?php echo $category['image']?>" class="rounded" alt="..." width="200" height="200"></td>
        <td><?php echo $category["price"]?></td>
        <td><?php echo $category["description"]?></td>
        <td>
          <a href="index.php?page=category-edit&action=<?php echo $category['id'];?>">
            <button type="button" class="btn btn-primary">Edit</button>
          </a>
          <input type="hidden" name="id" value="<?php echo $category['id']; ?>">
          <button type="submit" class="btn btn-danger">Delete</button>
        </td>
    </tr>
    <?php }?>
  </tbody>
</table>
</div>
