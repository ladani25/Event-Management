@include('admin.header')
<style>
    #editorTerms,
    #editorDescription {
        border: 1px solid #ced4da;
        border-radius: .25rem;
        padding: 10px;
        min-height: 200px;
        margin-top: 10px;
        resize: vertical;
        overflow: auto;
        box-shadow: inset 0 0 10px silver;
    }

    .toolbar {
        margin-bottom: 10px;
        text-align: center;
        padding: 5px;
        margin: 5px;
    }

    .toolbar a {
        margin-right: 5px;
        cursor: pointer;
        color: black;
        padding: 5px;
    }

    .toolbar a:hover {
        text-decoration: none;
    }

    textarea#outputTerms,
    textarea#outputDescription {
        display: none;
        width: 99.7%;
        height: 100px;
    }
</style>

<div class="page-content" style="padding-bottom: 70px;">
    <div>
        <div class="block-body" style="padding-top:5%">
            <div class="card mb-4 container">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Add Event</h6>
                </div>
                <div class="card-body container">
                    <form class="form-valide" action="{{ url('get_event') }}" method="POST" enctype="multipart/form-data"
                        novalidate="novalidate">
                        @csrf

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="event_name">Event Name <span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="event_name" name="name"
                                    placeholder="Enter Event Name.." required>
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="category_id">Category Name<span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <select name="categeroy_id" id="category_id" class="form-control" required>
                                    @foreach ($categeroy as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="image">Event Image <span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="file" class="form-control" accept="image/*" id="image"
                                    name="image[]" required>
                            </div>
                        </div><br>


                        <div class="form-group row">
                            <label class="col-lg-4 col-for m-label" for="thumbnail">Thumbnail <span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="file" class="form-control" accept="image/*" id="thumbnail"
                                    name="thumbnail" required>
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="date">Date <span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="time">Time <span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="time" class="form-control" id="time" name="time" required>
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="time_duration">Time Duration <span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="time" class="form-control" id="time_duration" name="time_duration"
                                    required>
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="price">Price <span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="price" name="price"
                                    placeholder="Enter Price.." required>
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="lang">Language <span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="lang" name="lang"
                                    placeholder="Enter Language.." required>
                            </div>
                        </div><br>
                        <!-- Description -->
                        <div class="form-group">
                            <label>Description</label>
                            <div class="toolbar" id="editControlsDescription">
                                <a data-role="undo" href="javascript:void(0)"><i class="fa fa-undo"></i></a>
                                <a data-role="redo" href="javascript:void(0)"><i class="fa fa-repeat"></i></a>
                                <a data-role="bold" href="javascript:void(0)"><i class="fa fa-bold"></i></a>
                                <a data-role="italic" href="javascript:void(0)"><i class="fa fa-italic"></i></a>
                                <a data-role="underline" href="javascript:void(0)"><i
                                        class="fa fa-underline"></i></a>
                                <a data-role="strikeThrough" href="javascript:void(0)"><i
                                        class="fa fa-strikethrough"></i></a>
                            </div>
                            <div id="editorDescription" contenteditable="true">
                                <h1>This is a title!</h1>
                                <p>This is just some example text to start us off</p>
                            </div>
                            <textarea id="outputDescription" name="description" style="display:none;"></textarea>
                        </div>


                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="place">Place <span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="place" name="place"
                                    placeholder="Enter Place.." required>
                            </div>
                        </div><br>

                        {{-- <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="lat">Latitude <span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="lat" name="lat"
                                    placeholder="Enter Latitude.." required>
                            </div>
                        </div><br> --}}

                        {{-- <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="lon">Longitude <span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="lon" name="lon"
                                    placeholder="Enter Longitude.." required>
                            </div>
                        </div><br> --}}
                        <!-- Terms -->
                        <div class="form-group">
                            <label>Terms</label>
                            <div class="toolbar" id="editControlsTerms">
                                <a data-role="undo" href="javascript:void(0)"><i class="fa fa-undo"></i></a>
                                <a data-role="redo" href="javascript:void(0)"><i class="fa fa-repeat"></i></a>
                                <a data-role="bold" href="javascript:void(0)"><i class="fa fa-bold"></i></a>
                                <a data-role="italic" href="javascript:void(0)"><i class="fa fa-italic"></i></a>
                                <a data-role="underline" href="javascript:void(0)"><i
                                        class="fa fa-underline"></i></a>
                                <a data-role="strikeThrough" href="javascript:void(0)"><i
                                        class="fa fa-strikethrough"></i></a>
                            </div>
                            <div id="editorTerms" contenteditable="true">
                                <h1>This is a title!</h1>
                                <p>This is just some example text to start us off</p>
                            </div>
                            <textarea id="outputTerms" name="terms" style="display:none;"></textarea>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="offer">Offer <span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="offer" name="offer"
                                    placeholder="Enter offer.." required>
                            </div>
                        </div><br>





                        <div class="row pt-3 border-top">
                            <div class="col-lg-8"></div>
                            <div class="col-lg-4">
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary" style="width: 100%;"
                                            name="submit">Add Evenet </button>
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

<!-- Add this script to handle the copying of content -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const editors = [{
                editor: document.getElementById('editorTerms'),
                output: document.getElementById('outputTerms')
            },
            {
                editor: document.getElementById('editorDescription'),
                output: document.getElementById('outputDescription')
            }
        ];
        const buttons = document.querySelectorAll('.toolbar a');

        // Add event listeners to toolbar buttons to apply formatting
        buttons.forEach(button => {
            button.addEventListener('click', function() {
                const command = this.getAttribute('data-role');
                document.execCommand(command, false, null);
            });
        });

        // Update the hidden textarea whenever the content of the editor changes
        function updateOutput(editor, output) {
            output.value = editor.innerHTML;
        }

        editors.forEach(({
            editor,
            output
        }) => {
            editor.addEventListener('input', function() {
                updateOutput(editor, output);
            });
        });

        // Update the hidden textarea before the form is submitted
        document.querySelector('form').addEventListener('submit', function() {
            editors.forEach(({
                editor,
                output
            }) => {
                updateOutput(editor, output);
            });
        });
    });
</script>
