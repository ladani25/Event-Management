@include('admin.header')

<div class="page-content" style="padding-bottom: 70px;">
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
        </div>
    </div>
    <div style="padding-left:2%">
        <a href="{{ url('add_event') }}" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50"></span>
            <span class="text">Add Event</span>
        </a>
    </div>
    <div class="table-responsive p-3">
        <h1>Event List</h1>
        <table class="table align-items-center table-flush dataTable" id="dataTable" role="grid"
            aria-describedby="dataTable_info">
            <thead>
                <tr>
                <tr>
                    <th>ID</th>
                    <th>Images</th>
                    <th>Category Name</th>
                    <th>date</th>
                    <th>Time</th>
                    <th>Time_duration</th>
                    <th>Price</th>
                    <th>description</th>
                    <th>terms</th>
                    <th>offer</th>
                    <th>Place</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($event as $event)
                    {{-- @php
                        echo '<pre>';
                            print_r( $event->image);
                            exit();
                    @endphp --}}
                    <tr>
                        <td>{{ $event->id }}</td>
                        <td>
                            @foreach (explode(',', $event->image) as $image)
                                <img src="{{ asset('public/images/' . $image) }}" alt="image"
                                    style="width: 100px; height: auto;">
                            @endforeach
                            {{-- <img src="{{ asset('images/' . $tattoo->tattoo_image) }}" alt="image" style="width: 100px; height: auto;"> --}}
                        </td>
                        <td>
                            @if ($event->category)
                                {{ $event->category->name }}
                            @else
                                No Category
                            @endif
                        </td>
                        <td>{{ $event->date }}</td>
                        <td>{{ $event->time }}</td>
                        <td>{{ $event->time_duration }}</td>
                        <td>{{ $event->price }}</td>
                        <td>{!! $event->description !!}</td>
                        <td>{{ $event->terms }}</td>
                        <td>{{ $event->offer }}</td>
                        <td>{{ $event->place }}</td>
                        <td>
                            <button class="btn btn-primary btn-lg">
                                <a href="{{ url('e_edit/' . $event->id) }}">
                                    <span class="text-white">Edit</span>
                                </a>
                            </button>
                            <button class="btn btn-primary btn-lg" onclick="confirmDelete({{ $event->id }})">
                                <span class="text-white">Delete</span>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('admin.footer')

<script>
    function confirmDelete(id) {
        if (confirm('Are you sure you want to delete this category?')) {
            window.location.href = "{{ url('delete_event') }}/" + id;
        } else {
            // Do nothing if cancel is clicked
        }
    }
</script>
