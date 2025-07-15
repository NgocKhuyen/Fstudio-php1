<div class="p-5">
    <p class="text-center">QUẢN LÝ SẢN PHẨM</p>
    <a href="?mod=product&act=add" class="btn btn-primary">Thêm sản phẩm</a>    
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Giá khuyến mãi</th>
                <th>Hình ảnh</th>
                <th>Danh mục</th>
                <th>Số lượng</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Áo sơ mi</td>
                <td>300000 đ</td>
                <td>250000 đ</td>
                <td><img src="../content/img/nam_sm_1.jpeg" width="60px" alt=""></td>
                <td>Thời trang nam</td>
                <td>1</td>
                <td>Đang hoạt động</td>
                <td>
                    <a href="?mod=product&act=edit&id=" class="btn btn-success">Sửa</a>
                    <a href="?mod=product&act=delete&id=" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- danh sách sản phẩm có phân trang -->
    <nav aria-label="Page navigation example" class="d-flex justify-content-center">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="?mod=product&act=list&page="></a></li>
        </ul>
    </nav>


</div>