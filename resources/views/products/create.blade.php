@extends('master')

@section('title', 'category-create-page')
@section('content')

    <div class="row">
        <div class="col-8 m-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Product Add</h4>

                    <form action="" method="post">
                        <div class="mb-3">

                            <label for="" class="form-label">Select Category</label>

                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select a Category</option>
                                <option value="1">One</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Select Sub Category</label>

                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select a Sub Category</option>
                                <option value="1">One</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Title</label>
                            <input type="text" name="name" id="" class="form-control"
                                placeholder="Enter Product Name">
                        </div>


                        <div class="mb-3">
                            <label for="" class="form-label">Price</label>
                            <input type="number" name="price" id="" min="0" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Description</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Image</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>






                </div>
                </form>
            </div>
        </div>
    </div>


@endsection
