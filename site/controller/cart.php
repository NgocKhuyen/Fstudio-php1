<?php
    include_once '../model_DAO/product.php';
    extract($_REQUEST);
    if(isset($act)) {
        switch($act) {
            case 'list':
                include_once 'view/template_header.php';
                include_once 'view/page_cart.php';
                include_once 'view/template_footer.php';
                break;
            case 'add':
                $sp = product_one($id);
                if(isset($_SESSION['cart'][$id])) {
                    $_SESSION['cart'][$id]['SL'] += 1;
                } else {
                    $_SESSION['cart'][$id] = array(
                        'MaSanPham' => $sp['MaSanPham'],
                        'TenSanPham' => $sp['TenSanPham'],
                        'HinhAnh' => $sp['HinhAnh'],
                        'Gia' => $sp['Gia'],
                        'GiaKhuyenMai' => $sp['GiaKhuyenMai'],
                        'SL' => 1
                    );
                }
                include_once 'view/template_header.php';
                include_once 'view/page_cart.php';
                include_once 'view/template_footer.php';
                break;
            case 'delete':
                unset($_SESSION['cart'][$id]);
                header('Location: ?mod=cart&act=list');
                break;
            case 'increase': 
                $_SESSION['cart'][$id]['SL'] += 1;
                header('Location: ?mod=cart&act=list');
                break;
            case 'decrease': 
                if($_SESSION['cart'][$id]['SL'] > 1) {
                    $_SESSION['cart'][$id]['SL'] -= 1;
                } else {
                    unset($_SESSION['cart'][$id]);
                }
                header('Location: ?mod=cart&act=list');
                break;    
        }

    }


?>