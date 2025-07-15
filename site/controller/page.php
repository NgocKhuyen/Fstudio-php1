<?php
    include_once '../model_DAO/category.php';
    include_once '../model_DAO/product.php';
    extract($_REQUEST);
    if(isset($act)) {
        switch($act) {
            case 'home':
                $dsdm = category_list();
                $sp_hot = product_hot();
                $dssp = product_list();
                include_once 'view/template_header.php';
                include_once 'view/page_home.php';
                include_once 'view/template_footer.php';
                break;
            case 'search':
                $data_search = product_search($keyword);
                include_once 'view/template_header.php';
                include_once 'view/page_search.php';
                include_once 'view/template_footer.php';
                break;
        }
        
    }

?>