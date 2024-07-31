@include('admin.header')

<div class="page-content" style="padding-bottom: 70px;">
    <div class="block-body" style="padding-top:5%">
        <div class="card mb-4 container">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Edit Category</h6>
            </div>
            
            <div class="container">
                <form id="edit-category-form" action="{{ url('edit_c/'.$categeroy->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('POST')
    
                    <div class="form-group">
                        <label for="c_name">Category Name:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $categeroy->name }}" required>
                    </div>

                   

                    <div class="form-group">
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="category_image">Category Image <span class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="file" class="form-control" accept="image/*" id="category_image" name="image[]" required multiple aria-required="true">   
                            </div>
                        </div><br>
                        @if($categeroy->images)
                            <div class="mt-2">
                                @foreach(explode(',', $categeroy->images) as $image)
                                    <img src="{{ asset('images/' . $image) }}" alt="Category Image" width="100">
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <!-- Other fields if needed -->
    
                    <button type="submit" class="btn btn-primary">Update Category</button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('admin.footer')
