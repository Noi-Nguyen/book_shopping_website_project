<?php
 ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- <link type="text/css" href="./cssjsadmin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="./cssjsadmin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet"> -->
    <!-- <link type="text/css" href="./cssjsadmin/css/theme.css" rel="stylesheet"> -->
    <!-- <link type="text/css" href="./cssjsadmin/icons/font-awesome.css" rel="stylesheet"> -->




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <!-- <link type="text/css" href="./cssjsadmin/css/style.css" rel="stylesheet"> -->
    <style>
        <?php include "./cssjsadmin/css/style.css" ?>
    </style>


</head>
<body>  
    <?php
        // include __DIR__ .'/includes/header.php';        
    ?>
    <?php
        session_start();
        if(!isset($_SESSION['login_us']))
            header("location:login.php");
    ?>

    <div class="ad-container">
            <!-- nav bar -->                
        <?php
            include __DIR__ ."/includes/connect.php";
            include __DIR__ .'/includes/header.php'; 
            include __DIR__ .'/includes/sidebar.php';
        ?>
    </div>
    
    <main class="mt-1 pt-3 ">
        <div class="container-fluid ad-content">
            <?php
                if(isset($_REQUEST['page']))
                {
                   $page=$_REQUEST['page'];
                   switch ($page)
                    {
                        case "danhsachdm":
                            include "cms/danhsachdm.php";
                            break;
                        case "danhsachsp":
                            include "cms/danhsachsp.php";
                            break;
                        case "dsdh":
                            break;
                        case "themdm":
                            include "cms/themdm.php";
                            break;
                        case "suadm":
                            include "cms/suadm.php";
                            break;
                        case "xoadm":
                            include "cms/xoadm.php";
                            break;
                        case "themsp":
                            include 'cms/themsp.php';
                            break;
                        case "xoasp":
                            include "cms/xoasp.php";
                        case "suasp":
                            include "cms/suasp.php";
                            break;
                        case 'order':
                            include "cms/order.php";
                            break;
                        case 'order_dt':
                            include "cms/order_dt.php";
                            break;
                        case 'themtintuc';
                            include "cms/themtintuc.php";
                            break;
                        case 'xoatt';
                            include "cms/xoatintuc.php";
                            break;
                        case 'suatintuc';
                            include "cms/suatintuc.php";
                            break;
                        case 'danhsachtintuc';
                            include "cms/danhsachtintuc.php";
                            break;
                        case 'logout';
                            include "cms/logout.php";
                                break;
                        case 'order';
                            include "cms/order.php";
                            break;
                        case 'orderdt';
                            include "cms/orderdt.php";
                            break;
                        case 'orderkh';
                            include "cms/orderkh.php";
                            break;
                        case 'tinnhan';
                            include "cms/tinnhan.php";
                            break;
						case 'tinnhan1';
                            include "cms/tinnhan1.php";
                            break;
                        case 'thanhvien';
                            include "cms/thanhvien.php";
                            break;
						case 'themkh';
                            include "cms/themkh.php";
                            break;
						case 'suakh';
                            include "cms/suakh.php";
                            break;
						case 'themkh';
                            include "cms/suakh.php";
                            break;
                        case 'xoakh';
                            include "cms/xoakh.php";
                            break;
						case 'Report';
                            include "cms/Report.php";
                            break;                    
                    }
                
                }
                else include "cms/center.php";
            ?>
        </div>
    </main>
        <?php
        include __DIR__.'/includes/footer.php';
        ?>
         


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="./cssjsadmin/scripts//script.js"></script>



   <script src="./cssjsadmin/ckeditor/ckeditor.js" type="text/javascript"></script>
	<!-- <script src="./cssjsadmin/scripts/jquery-1.9.1.min.js" type="text/javascript"></script> -->



   <!--  <script src="./cssjsadmin/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> -->
    
   
   
   
   <!-- <script src="./cssjsadmin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> -->
    
   
   
   <!-- <script src="./cssjsadmin/scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="./cssjsadmin/scripts/flot/jquery.flot.pie.js" type="text/javascript"></script> -->
    
    
    
    <!-- <script src="./cssjsadmin/scripts/common.js" type="text/javascript"></script>
    <script src="./cssjsadmin/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
	<script src="./cssjsadmin/export/tableExport.js" type="text/javascript"></script>
	<script src="./cssjsadmin/export/jquery.base64.js" type="text/javascript"></script> -->
	
    
    
    <!--export pdf -->
	
    
    
    <!-- <script src="./cssjsadmin/export/jspdf/jspdf.js" type="text/javascript"></script>
	<script src="./cssjsadmin/export/jspdf/libs/sprintf.js" type="text/javascript"></script>
	<script src="./cssjsadmin/export/jspdf/libs/base64.js" type="text/javascript"></script> -->
    
	
</body>
</html>


<!-- https://www.egrappler.com/responsive-bootstrap-admin-template-edmin/ -->