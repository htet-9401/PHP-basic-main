<?php
    if(isset($_POST['cat_edit'])){
        $id = $_REQUEST['action'];
        $name = $_POST['name'];
        $imgName = $_FILES['priceImage'];

        // $folder2 = "./photo/".$img;
        // $img = "photo/".$img;

        $price = $_POST['price'];
        $description = $_POST['description'];

        $updateCat = mysqli_query($connection,
        "UPDATE category SET name='".$name."' ,image = '".$imgName."', price = '".$price."', description = '".$description."'");
        if($updateCat){
            // move_uploaded_file($_FILES['image']['tmp_name'], $folder2);
            echo "<script>window.location.href=index.php?page=category-list</script>";
        }
    }
?>