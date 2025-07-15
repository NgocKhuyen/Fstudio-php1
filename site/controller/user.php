<?php
    include_once '../model_DAO/user.php';
    extract($_REQUEST);
    if(isset($act)) {
        switch($act) {
            case 'register':
                if(isset($register_submit)) {
                    if ($pass != $repass) {
                        $error = "Mật khẩu không khớp";
                    } else {
                        user_register($name, $email, $pass,  $address, $phone, $_FILES['image']['name']);
                        move_uploaded_file($_FILES['image']['tmp_name'], '../content/img/' . $_FILES['image']['name']);
                        header('Location: ?mod=user&act=login');
                    }
                }
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
            case 'info':
                $id = $_SESSION['user']['MaKhachHang'];
                $user = user_get_id($id);
                include_once 'view/template_header.php';
                include_once 'view/page_info.php';
                include_once 'view/template_footer.php';
                break;
            case 'edit':
                $id = $_SESSION['user']['MaKhachHang'];
                $user = user_get_id($id);
                if(isset($edit_submit)) {
                    if($_FILES['image']['name'] != null) {
                        user_update($id, $name, $email,$address, $phone, $_FILES['image']['name']);
                        move_uploaded_file($_FILES['image']['tmp_name'], '../content/img/' . $_FILES['image']['name']); 
                        header('Location: ?mod=user&act=info');
                    } else {
                        user_update($id, $name, $email,$address, $phone, $user['Anh']);
                        header('Location: ?mod=user&act=info');
                    }
                }
                $_SESSION['user'] = user_get_id($id);
                include_once 'view/template_header.php';
                include_once 'view/page_user_update.php';
                include_once 'view/template_footer.php';
                break;
            case 'logout':
                unset($_SESSION['user']);
                header('Location: ?mod=page&act=home');
                break;
        }
    }