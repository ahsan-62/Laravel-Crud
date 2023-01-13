@extends('master')

@section('title', 'Home-Page')

@section('content')
    <div class="col-8-m-auto" style="color: rgb(3, 66, 49)">
        <h1>{{ $page_name }}</h1>
        <p>{{ $name }}</p>


        <table class="table table-hover" style="background: rgb(63, 194, 70)">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">NID Card</th>
                    <th scope="col">Joined Date</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->nidcard->card_number ?? 'Empty' }}</td>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
