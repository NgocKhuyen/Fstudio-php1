<?php
    include_once 'pdo.php';
    function product_hot() {
        $sql = "SELECT * FROM SanPham WHERE Hot = 1 LIMIT 4";
        return pdo_query($sql);
    }

    function product_list() {
        $sql = "SELECT * FROM SanPham";
        return pdo_query($sql);
    }

    function product_search($keyword) {
        $sql = "SELECT * FROM SanPham WHERE TenSanPham LIKE '%$keyword%' ";
        return pdo_query($sql);
    }

    function product_category_order_filter($id, $min_price, $max_price, $order) {
        $sql = "SELECT * FROM SanPham 
                WHERE MaDanhMuc = ? 
                AND GiaKhuyenMai > ? 
                AND GiaKhuyenMai < ? 
                ORDER BY GiaKhuyenMai $order";
        return pdo_query($sql, $id, $min_price, $max_price);
    }

    function product_one($id) {
        $sql = "SELECT * FROM SanPham WHERE MaSanPham = ?";
        return pdo_query_one($sql, $id);
    }
?>