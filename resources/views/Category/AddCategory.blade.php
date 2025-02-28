
 @extends('./layout_master')

 {{-- section id is yeild name  --}}

 @section('admin')

 <div class="content-page center">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">


 <div class="row">
    <div class="col-lg-6">

        <div class="card">
            <div class="card-body">
                <h3 class="header-title">Add Category</h3>
                
                <form action="#" method="POST" class="parsley-examples">
                    <div class="mb-3">
                        <label for="category" class="form-label">Category Name<span class="text-danger">*</span></label>
                        <input type="text" name="category" parsley-trigger="change" required placeholder="Enter Category name" class="form-control" id="categoryName" />
                    </div>
                    <div class="text-end">
                        <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                        <button type="reset" class="btn btn-secondary waves-effect">Cancel</button>
                    </div>
                </form>
            </div>
        </div> <!-- end card -->
    </div>
    <!-- end col -->

 </div>
        </div>
    </div>
 </div>
@endsection