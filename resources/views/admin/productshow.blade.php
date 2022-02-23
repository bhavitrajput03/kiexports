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
                                            @foreach($products as $product)
                                            <tr>
                                                <td>1</td>
                                                <td>{{$product->title}}</td>
                                                <td>
                                                    <img src="/public/fruit/{{$product->img}}" class="tableimg" alt="">
                                                </td>
                                                <td>
                                                    <a href="{{route('productedit',[$product->id])}}" class="editbutton">Edit</a>
                                                    <a href="" class="deletebutton">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
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
    
    
