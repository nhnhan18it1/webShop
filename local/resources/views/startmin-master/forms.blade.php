@extends('startmin-master.master') @section('title','new product') @section('content')


<!DOCTYPE html>
<html lang="en">

<head>
    <script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->


        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Forms</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Thêm mới sản phẩm
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">

                                    @if (session('thongbao'))
                                    <div class="alert alert-success" role="alert">
                                        <strong>{{ session('thongbao') }}</strong>
                                    </div>
                                    @endif
                                        <form role="form" action="/wshop2/admin/postproduct" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label>Tên sản phẩm</label>
                                                <input name="ProductName" type="text" class="form-control" required="true">
                                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                                            </div>
                                            <div class="form-group">
                                                <label>Mô tả sản phẩm</label>
                                                <textarea id="editor1" name="Description" cols="80" rows="10"></textarea>

                                            </div>


                                            <!-- (3): Code Javascript thay thế textarea có id='editor1' bởi CKEditor -->
                                            <script>
                                                CKEDITOR.replace('editor1');
                                            </script>

                                            <!-- <div class="form-group">
                                                <label>Static Control</label>
                                                <p class="form-control-static">email@example.com</p>
                                            </div> -->
                                            <!-- chon file hinh anh -->
                                            <div class="form-group">
                                                <label>Ảnh sản phẩm</label>
                                                <input name="Img" type="file" required="true" accept="image/png, image/jpeg">
                                            </div>
                                            <!----------------->
                                            <div class="form-group">
                                                <label>Size</label>
                                                <select name="Size" class="form-control">
                                                        <option>S</option>
                                                        <option>M</option>
                                                        <option>L</option>
                                                        <option>XL</option>

                                                    </select>
                                            </div>
                                            <!--------------------->
                                            <div class="form-group">
                                                <label>Số lượng</label>
                                                <input name="Count" class="form-control" type="number" min="0" placeholder="Enter text" required="true">
                                            </div>
                                            <div class="form-group">
                                                <label>Giá</label>
                                                <input name="price" class="form-control" type="number" min="0" placeholder="Enter text" required="true">
                                            </div>


                                            <button type="submit" class="btn btn-default">Submit Button</button>
                                            <button type="reset" class="btn btn-default">Reset Button</button>
                                        </form>
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->

                                    <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->



</body>

</html>
@endsection
