<?php
    include_once '../model_DAO/product.php';
    include_once '../model_DAO/category.php';
    extract($_REQUEST);
    if(isset($act)) {
        switch($act) {
            case 'list':
                $count_product = count_product();
                $number_page = ceil($count_product / 5);
                if(!isset($page)) $page = 1;
                $product_page = product_page($page);
                include_once 'view/template_header.php';
                include_once 'view/page_product_list.php';
                include_once 'view/template_footer.php';
                break;
            case 'add':
                $dsdm = category_list();
                if(isset($addProduct_submit)) {
                    product_add($name, $category, $price, $sale, $description, $_FILES['image']['name'], $quantity, $hot, $status);
                    move_uploaded_file($_FILES['image']['tmp_name'], '../content/img/' . $_FILES['image']['name']);
                    header('Location: ?mod=product&act=list');
                }
                include_once 'view/template_header.php';
                include_once 'view/page_product_add.php';
                include_once 'view/template_footer.php';
                break;
            case 'edit':
                $dsdm = category_list();
                $sp = product_one($id);
                if(isset($editProduct_submit)) {
                    if($_FILES['image']['name'] != null) {
                        product_edit($id,$name, $category, $price, $sale, $description, $_FILES['image']['name'], $quantity, $hot, $status);
                        move_uploaded_file($_FILES['image']['tmp_name'], '../content/img/' . $_FILES['image']['name']);
                        header('Location: ?mod=product&act=list');
                    } else {
                        product_edit($id,$name, $category, $price, $sale, $description, $sp['HinhAnh'], $quantity, $hot, $status);
                        header('Location: ?mod=product&act=list');
                    }
                }
                include_once 'view/template_header.php';
                include_once 'view/page_product_edit.php';
                include_once 'view/template_footer.php';
                break;

            case 'delete':
                product_delete($id);
                header('Location: ?mod=product&act=list');
                break;
                
        }
    }



?>