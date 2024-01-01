<?php
if(isset($_POST['cat_create'])){
    $name = $_POST['name'];
    $imgName = $_FILES['priceImage']['name'];

    $folder1 = "./photo/".$imgName;
    $imgName = "photo/".$imgName;

    $price = $_POST['price'];
    $description = $_POST['description'];

    $insertCat= mysqli_query($connection, "INSERT INTO category(name,image,price,description) VALUES 
    ('".$name."','".$imgName."', '".$price."', '".$description."')");

    if($insertCat){
        move_uploaded_file($_FILES['priceImage']['tmp_name'], $folder1);
        echo "<script>window.location.href='index.php?page=category-list'</script>";
    }
}
?>