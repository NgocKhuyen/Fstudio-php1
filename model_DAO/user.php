<?php
    include_once 'pdo.php';
    function check_login($email, $pass) {
        $sql = "SELECT * FROM KhachHang WHERE email = ? AND matkhau = ?";
        return pdo_query_one($sql, $email, $pass);
    }

    function user_get_id($id) {
        $sql = "SELECT * FROM KhachHang WHERE MaKhachHang = ?";
        return pdo_query_one($sql, $id);
    }

    function user_register($name, $email, $pass, $address, $phone, $image) {
        $sql = "INSERT INTO KhachHang(Email, MatKhau, HoTen, DiaChi, SDT, Anh) 
                VALUES (?, ?, ?, ?, ?, ?)";
        return pdo_execute($sql, $email, $pass, $name, $address, $phone, $image);
    }

    function user_update($id, $name, $email, $address, $phone, $image) {
        $sql = "UPDATE KhachHang SET Email = ?, HoTen = ?, DiaChi = ?, SDT = ?, Anh = ?
                WHERE MaKhachHang = ?";
        return pdo_execute($sql, $email, $name, $address, $phone, $image, $id);             
    }

?>
