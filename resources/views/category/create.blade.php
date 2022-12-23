@extends('master')

@section('title', 'category-create-page')
@section('content')

    <div class="row">

        <div class="col-8 m-auto">
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="category-name" class="form-label">Category Name</label>
                    <input type="text" class="form-control" id="category-name" name="category_name"
                        placeholder="Enter Category Name">
                </div>
                <div class="mb-3">
                    <label for="category-Slug" class="form-label">Category Slug</label>
                    <input type="text" class="form-control" id="category-Slug" name="category_slug"
                        placeholder="Enter Category Slug">
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" name="is_active" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Active/Inactive
                    </label>
                </div>
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>

@endsection
