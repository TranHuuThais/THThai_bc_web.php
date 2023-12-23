<?php
include_once "../dbconnect.php";
include_once "../functions.php";
$categories = createCategories();




?>
<?php include_once("../view/includes/head.php") ?>
    <div class="container">
    <div class="row">
            <div class="col-8 mx-auto ">
                <h1 class="fs-3 text-warning">Trang thêm danh mục sản phẩm</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên của danh mục sản phẩm">
                    </div>
                    <div class="mb-3">
                        <label for="categoryID" class="form-label">Loại</label>
                        <input type="text" class="form-control" id="categoryID" name="categoryID">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Giá</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Mô tả</label>
                        <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image_upload" class="form-label">Hình ảnh</label>
                        <input type="file" class="form-control" id="image_upload" name="fileToUpload">
                    </div>
                    <div class="mb-3">
                        <label for="view" class="form-label">Lượt xem</label>
                        <input type="text" class="form-control" id="view" name="view">
                    </div>
                    <input class="btn btn-primary" name="submit" type="submit" value="upload" />
                </form>

            </div>
        </div>
</body>

</html>