<?php
    include_once 'pdo.php';
    function feedback_list($id) {
        $sql = "SELECT * FROM BinhLuan bl 
                INNER JOIN KhachHang kh ON bl.MaKhachHang =  kh.MaKhachHang 
                WHERE bl.MaSanPham = ? 
                ORDER BY bl.MaBinhLuan DESC";
        return pdo_query($sql, $id);
    }

    function feedback_add($id_KhachHang, $feedback, $id_SanPham) {
        $sql = "INSERT INTO BinhLuan(NoiDung, MaKhachHang, MaSanPham) 
                VALUES (?, ?, ?)";
        return pdo_execute($sql, $feedback, $id_KhachHang, $id_SanPham);
    }
?>