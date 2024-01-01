<?php
$viewPage = @$_REQUEST['page'];

switch ($viewPage) {
    //Product Operation Route
    case "product-page";
        $mainPage = "ui/Product/list.php";
        break;
    case "product-create";
        $mainPage = "ui/Product/create.php";
        break;
    case "product-edit";
        $mainPage = "ui/Product/edit.php";
        break;
    case "category-page";
        $mainPage = "ui/Category/categoryListPage.php";
        break;
    case "category-list";
        $mainPage = "ui/Category/category_ui/cat_list.php";
        break;
    case "category-edit";
        $mainPage = "ui/Category/category_ui/cat_edit.php";
        break;
    default:
        $mainPage = "ui/MainUi/bodyPage.php";

}
