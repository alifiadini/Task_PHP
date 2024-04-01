<html>
<div style="height: 650px">
        <!-- Halaman Depan -->

    <?php
    $hal = isset($_GET['hal']) ? $_GET['hal'] : '';
    
    if (!empty($hal) && isset($menu_bawah[$hal])) {
        include_once $menu_bawah[$hal];
    } else {
        include_once "home.php";
    }
    ?>
    </div>

</html>