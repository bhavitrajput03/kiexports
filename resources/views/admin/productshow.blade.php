@include('admin.Adminlayout.header')
@include('admin.Adminlayout.leftbar')
        <div class="page-wrapper">
            <div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Table basic</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="{{route('productcreate')}}"
                            class="btn waves-effect waves-light btn-info pull-right hidden-sm-down"><i
                                class="mdi mdi-plus"></i> Add New</a>
                    </div>
                </div>

                <div class="row">
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Table One Name</h4>
                                <div class="table-responsive">
                                    <table class="table table-borderd">
                                        <thead>
                                            <tr>
                                                <th> <b>#</b> </th>
                                                <th> <b>Product Name</b> </th>
                                                <th> <b>Product Image</b> </th>
                                                <th> <b>Action</b> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Deshmukh</td>
                                                <td>
                                                    <img src="_20170719_163600.JPG" class="tableimg" alt="">
                                                </td>
                                                <td>
                                                    <a href="editproduct.html" class="editbutton">Edit</a>
                                                    <a href="" class="deletebutton">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Deshmukh</td>
                                                <td>
                                                    <img src="_20170719_163600.JPG" class="tableimg" alt="">
                                                </td>
                                                <td>
                                                    <a href="editproduct.html" class="editbutton">Edit</a>
                                                    <a href="" class="deletebutton">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Sanghani</td>
                                                <td>
                                                    <img src="_20170719_163600.JPG" class="tableimg" alt="">
                                                </td>
                                                <td>
                                                    <a href="editproduct.html" class="editbutton">Edit</a>
                                                    <a href="" class="deletebutton">Delete</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.Adminlayout.footer')
        </div>
    
    
