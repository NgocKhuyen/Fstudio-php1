<?php
    include_once 'pdo.php';
    function check_login($email, $pass) {
        $sql = "SELECT * FROM KhachHang WHERE email = ? AND matkhau = ?";
        return pdo_query_one($sql, $email, $pass);
    }
