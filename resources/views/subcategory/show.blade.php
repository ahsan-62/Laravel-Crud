@extends('master')

@section('title', 'show-Page')

@section('content')

    <div class="row">
        <div class="col-8 m-auto">
            <h1>{{ $subcategory->category->name }}</h1>
            <h1>{{ $subcategory->name }}</h1>
            <p>{{ $subcategory->created_at->format('D d-m-Y H:i A') }}</p>
        </div>

    </div>
@endsection
