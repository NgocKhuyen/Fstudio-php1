
    <!-- main -->
    <main class="container">
        <!-- Catagories -->
        <div class="text-center">
            <H4 class="my-3">DANH MỤC SẢN PHẨM</H4>
            <div class="row">
                <?php
                    foreach($dsdm as $dm) { ?>
                        <div class="col-md-4 position-relative">
                            <img class="img-fluid img-thumbnail" src="../content/img/<?=$dm['HinhAnh']?>" height="270px" alt="">
                            <p class="text-danger p-2 bg-white my-2 position-absolute top-50 start-50 fs-6 translate-middle"><?=$dm['TenDanhMuc']?></p>
                        </div>
                    <?php 
                    }
                ?>
            </div>
        </div>
        <!-- sale Products -->
        <div class="text-center mt-5">
            <H4 class="my-3">SẢN PHẨM BÁN CHẠY</H4>
            <div class="row">
                <?php 
                    foreach($sp_hot as $sp) { ?>
                        <div class="col-md-3 ">
                            <div class="shadow pb-3 rounded">
                                <a href="?mod=product&act=detail&id="><img class="img-fluid mb-2 rounded-top" src="../content/img/<?=$sp['HinhAnh']?>" alt=""></a>
                                <p><b><?=$sp['TenSanPham']?></b></p>
                                <span class="text-danger"><?=number_format($sp['GiaKhuyenMai'], 0, ',')?>đ </span> <span> <del> <?=number_format($sp['Gia'], 0, ',')?> đ</del></span>
                                <p></p>
                                <a href="?mod=cart&act=add&id=" class="btn btn-danger">Thuê ngay</a>
                            </div>
                        </div>
                    <?php }
                ?>
            </div>
        </div>
        <!-- All categories -->
        <?php
            foreach($dsdm as $dm) { ?>
                <div class="text-center mt-5">
                    <div class=" d-flex">
                        <h4 class="my-3"><?=$dm['TenDanhMuc']?></h4>
                        <a href="?mod=page&act=category&id=" class="btn btn-outline-dark my-3 ms-auto">Xem thêm</a>
                    </div>
                    <div class="row">
                        <?php $dem = 0; ?>
                        <?php
                            foreach($dssp as $sp) { ?>
                                <?php if ($sp['MaDanhMuc'] == $dm['MaDanhMuc']) { ?>
                                    <div class="col-md-3 ">
                                        <div class="shadow pb-3 rounded">
                                            <a href="?mod=product&act=detail&id=">
                                                <img class="img-fluid mb-2 rounded-top" src="../content/img/<?=$sp['HinhAnh']?>" alt="">
                                            </a>
                                            <p><b><?=$sp['TenSanPham']?></b></p>
                                            <span class="text-danger"><?=number_format($sp['GiaKhuyenMai'], 0, ',')?>đ</span> <span> <del> <?=number_format($sp['Gia'], 0, ',')?>đ</del></span>
                                            <p></p>
                                            <a href="?mod=cart&act=add&id=" class="btn btn-danger">Thuê ngay</a>
                                        </div>
                                    </div>

                                    <?php $dem++ ?>
                                    <?php if($dem == 4) break; ?>

                                <?php } ?>
                            <?php }
                        ?>
                    </div>
                </div>
            <?php }
        ?>
    </main>
    
    <!-- footer -->
    <div class="bg-dark mt-5">
        <div class=" bg-dark p-5 text-center">
            <p for="newsletter1" class="text-white mx-5">Hãy nhập địa chỉ email để nhận được mã giảm giá </p>
            <div class="d-flex justify-content-center">
                <input id="newsletter1" type="text" class="form-control w-25 rounded-0" placeholder="Nhập email của bạn . . .">
                <button class="btn btn-danger bg-opacity-75 rounded-0 " type="button">Đăng ký</button>
              </div>
        </div>
    </div>

   