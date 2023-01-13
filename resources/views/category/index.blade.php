@extends('master')

@section('title', 'Category-Create-Page')
@push('admin_style')
@endpush
@section('content')
    <div class="row">

        <div class="col-8 my-4">

            <a href="{{ route('category.create') }}" class="btn btn-success">Create Category</a>
        </div>
        <div class="col-8 m-auto">
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{ $category->id }}</th>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->created_at->diffForHumans() }}</td>
                            <td>
                                <a href="{{ route('category.edit', ['category' => $category->id]) }}"
                                    class="btn btn-warning">Edit</a>
                                <form action="{{ route('category.destroy', ['category' => $category->id]) }}"
                                    method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger show_confirm" data-toggle="tooltip"
                                        title='Delete'>Del</button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>


    </div>
@endsection

@push('admin_script')
    <script>
        $('.show_confirm').click(function(event) {
            let form = $(this).closest('form');
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        });
    </script>
@endpush
