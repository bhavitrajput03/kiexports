@include('admin.Adminlayout.header')
@include('admin.Adminlayout.leftbar')
        <div class="page-wrapper">
           <div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Table basic</h3>
                    </div>
                </div>

                <div class="row">
                    <!-- column -->
                    <div class="card p-5">
                        <div class="col-md-6">
                            <form action="{{route('productstore')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="title" 
                                        aria-describedby="emailHelp" value="">
                                        
                                </div>
                                <div class="mb-3 mt-5">
                                    <label for="exampleInputEmail1" class="form-label">Product Image</label> <br>
                                    <input type='file' id="file-input" name="file" />
                                    <div id='img_contain'>
                                        <img id="image-preview" align='middle' src="https://colabrio.ams3.cdn.digitaloceanspaces.com/ohio-demo-21/placeholder.png" alt="your image" title='' />
                                    </div>
                                </div>
                                <div class="mb-3 form-check">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            @include('admin.Adminlayout.footer')
        </div>

        <script type="text/javascript">
            
        </script>
    
    
