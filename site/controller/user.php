<?php
    include_once '../model_DAO/user.php';
    extract($_REQUEST);
    if(isset($act)) {
        switch($act) {
            case 'register':
                include_once 'view/template_header.php';
                include_once 'view/page_register.php';
                include_once 'view/template_footer.php';
                break;
            case 'login':
                if(isset($login_submit)) {
                    $data = check_login($email, $pass);
                    if ($data) {
                        $_SESSION['user'] = $data;
                        header('Location: ?mod=page&act=home');
                    } else {
                        $error = "Đăng nhập thất bại";
                    }
                }
                include_once 'view/template_header.php';
                include_once 'view/page_login.php';
                include_once 'view/template_footer.php';
                break;
        }
    }