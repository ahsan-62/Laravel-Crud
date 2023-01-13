@extends('master')

@section('title', 'category-Edit-page')
@section('content')

    <div class="row">

        <div class="col-8 m-auto">
            @if (Session('status'))
                <div class="bg-danger">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('category.update', ['category' => $category->id]) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="category-name" class="form-label">Category Name</label>
                    <input type="text" value="{{ $category->name }}"
                        class="form-control @error('category_name') is-invalid

                    @enderror"
                        value="{{ old('category_name') }}" id="category-name" name="category_name"
                        placeholder="Enter Category Name">
                    @error('category_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value=""
                        @if ($category->is_active) checked @endif name="is_active" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Active/Inactive
                    </label>
                </div>
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>

@endsection
