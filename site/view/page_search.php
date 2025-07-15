<div class="container">
    <div class="text-center mt-5">
        <div class="d-flex">
            <h4 class="my-3">Kết quả tìm kiếm từ khóa: <?=$keyword?></h4>
        </div>
        <div class="row my-3">
            <?php 
                foreach($data_search as $sp) : ?>
                    <div class="col-md-3 mb-3">
                        <div class="shadow pb-3 rounded">
                            <img class="img-fluid mb-2 rounded-top" src="./content/img/<?=$sp['HinhAnh']?>" alt="">
                            <p><b><?=$sp['TenSanPham']?></b></p>
                             <span class="text-danger"><?=number_format($sp['GiaKhuyenMai'], 0, ',')?>đ</span> <span> <del> <?=number_format($sp['Gia'], 0, ',')?>đ</del></span>
                            <p></p>
                            <a href="?mod=cart&act=add&id=" class="btn btn-danger">Mua ngay</a>
                        </div>
                    </div>
                <?php endforeach; ?>
        </div>
    </div>
</div>
