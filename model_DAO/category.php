<?php
    include_once 'pdo.php';
    function category_list() {
        $sql = "SELECT * FROM DanhMuc";
        return pdo_query($sql);
    }

    function category_add($name, $imgae, $status) {
        $sql = "INSERT INTO DanhMuc(TenDanhMuc, HinhAnh, TrangThai) VALUES (?, ?, ?)";
        return pdo_execute($sql, $name, $imgae, $status);
    }

    function get_category_one($id) {
        $sql = "SELECT * FROM DanhMuc WHERE MaDanhMuc = ?";
        return pdo_query_one($sql, $id);
    }

    function category_edit($name, $imgae, $status, $id) {
        $sql = "UPDATE DanhMuc SET TenDanhMuc = ?, HinhAnh = ?, TrangThai = ? WHERE MaDanhMuc = ?";
        return pdo_query_one($sql, $name, $imgae, $status, $id);
    }

    function category_delete($id) {
        $sql = "DELETE FROM DanhMuc WHERE MaDanhMuc = ?";
        return pdo_execute($sql, $id);
    }
?>