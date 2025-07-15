<?php
    extract($_REQUEST);
    
    if(isset($mod)) {
        switch($mod) {
            case 'category': 
                include_once 'controller/category.php';
                break;
        }
    }



?>
