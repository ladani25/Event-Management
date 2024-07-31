@include('admin.header')

<div class="page-content" style="padding-bottom: 70px;">
    <div>
        <div class="block-body" style="padding-top:5%">
            <div class="card mb-4 container">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Add Category</h6>
                </div>
                <div class="card-body container">
                    <form class="form-valide" action="{{ url('get_categeroy') }}" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                        @csrf
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="category_name">Category Name <span class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="category_name" name="name" placeholder="Enter Category Name.." required="true" aria-required="true">
                            </div>
                        </div><br>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="category_image">Category Image <span class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="file" class="form-control" accept="image/*" id="category_image" name="image[]" required multiple aria-required="true">   
                            </div>
                        </div>

                        <div class="row pt-3 border-top">
                            <div class="col-lg-8"></div>
                            <div class="col-lg-4">
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary" style="width: 100%;" name="submit">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.footer')
