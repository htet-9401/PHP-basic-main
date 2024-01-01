<?php
    if(isset($_REQUEST['action'])){
        $id = $_REQUEST['action'];
        $editCategory = mysqli_query($connection,"SELECT * FROM category WHERE id='".$id."'");
        $editCat = mysqli_fetch_assoc($editCategory);
    }
?>