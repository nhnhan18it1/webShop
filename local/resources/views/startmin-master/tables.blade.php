@extends('startmin-master.master') @section('title','home') @section('content')


<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        #myInput {
            background-image: url('/css/searchicon.png');
            /* Add a search icon to input */
            background-position: 10px 12px;
            /* Position the search icon */
            background-repeat: no-repeat;
            /* Do not repeat the icon image */
            width: 100%;
            /* Full-width */
            font-size: 16px;
            /* Increase font-size */
            padding: 12px 20px 12px 40px;
            /* Add some padding */
            border: 1px solid #ddd;
            /* Add a grey border */
            margin-bottom: 12px;
            /* Add some space below the input */
        }

        #myTable {
            border-collapse: collapse;
            /* Collapse borders */
            width: 100%;
            /* Full-width */
            border: 1px solid #ddd;
            /* Add a grey border */
            font-size: 18px;
            /* Increase font-size */
        }

        #myTable th,
        #myTable td {
            text-align: left;
            /* Left-align text */
            padding: 12px;
            /* Add padding */
        }

        #myTable tr {
            /* Add a bottom border to all table rows */
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header,
        #myTable tr:hover {
            /* Add a grey background color to the table header and on hover */
            background-color: #f1f1f1;
        }
    </style>
    <script>
        function myFunction() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->


        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tables</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Danh sách sản phẩm
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
                                    <table id="myTable">
                                        <tr class="header">
                                            <th style="width:20%;">Tên sản phẩm</th>
                                            <th style="width:20%; max-height: 75px;">Mô tả</th>
                                            <th style="width:20%;">Hình ảnh</th>
                                            <th style="width:10%;">Size</th>
                                            <th style="width:10%;">số lượng</th>
                                            <th style="width:10%;">Giá</th>
                                        </tr>

                                        @foreach ($product as $item)
                                            <tr>
                                            <td>{{$item->ProductName}}</td>
                                            <td>{!!$item->Description!!}</td>
                                            <td><img style="width: 75px;height: 75px;" src="{{$item->Img}}" alt=""></td>
                                            <td>{{$item->Size}}</td>
                                            <td>{{$item->Count}}</td>
                                            <td>{{$item->price}}$</td>
                                            </tr>
                                            @endforeach
                                    </table>
                                </div>
                                <ul class="pagination">
                                    {!! $product->links() !!}
                                </ul>
                                <!-- /.table-responsive -->
                                {{--
                                <div class="well">
                                    <h4>DataTables Usage Information</h4>
                                    <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons
                                        in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                    <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                                </div> --}}
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>

</body>

</html>
@endsection
