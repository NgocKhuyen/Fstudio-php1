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
?>