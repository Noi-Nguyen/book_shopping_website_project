<?php
ob_start();
session_start();
include './admin/includes/connect.php';
include 'display/header.php';
?>

<?php
if (isset($_REQUEST['page'])) {
    $page = $_REQUEST['page'];
    switch ($page) {
        case "news":
            include 'display/news.php';
            break;
        case "news-detail":
            include 'display/news-detail.php';
            break;
        case "product";
            include 'display/product.php';
            break;
        case "product-detail";
            include 'display/product-detail.php';
            break;
        case "addcart";
            include 'display/addcart.php';
            break;
        case "cart";
            include 'display/cart.php';
            break;
        case "delcart";
            include 'display/delcart.php';
            break;
        case "register";
            include 'display/register.php';
            break;
        case "contact";
            include 'display/contact.php';
            break;
        case "order";
            include 'display/order.php';
            break;
        case "login";
            include 'display/login.php';
            break;

        case "logout";
            include 'display/logout.php';
            break;
        case 'orderhistory';
            include "display/orderhistory.php";
            break;
        case 'a';
            include "display/a.php";
            break;
        case "personal";
            include 'display/personal.php';
            break;
        case "edit-personal";
            include 'display/edit-personal.php';
            break;
        case "loginout";
            include 'display/loginout.php';
            break;
    }
} else {
    include 'display/center.php';
}
?>


<?php
include 'display/footer.php';
ob_end_flush();
?>