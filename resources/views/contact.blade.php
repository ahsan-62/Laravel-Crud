@extends('master')

@section('content')
    <h1> Hi contact Page</h1>




    {{-- @for ($index = 0; $index < 4; $index++)
        {{ $mobile[$index] }}</h1>
        <br>
    @endfor --}}


    {{-- @if ($mobile <= 10)
        <h1>Your Account is Low.... Please recharge your AC.</h1>
    @else
        <h1>You are alright dude...</h1>
    @endif


    @switch($color)
        @case('blue')
            <p>Blue color Available</p>
        @break

        @case('red')
            <p>Red is available</p>
        @break

        @default
            <p>Nothing is available</p>
    @endswitch

    @foreach ($products as $key => $ahsan)
        <ol class="">

            <p>product:{{ $key }}</p>
            <li>{{ $ahsan['color'] }} </li>
            <li>{{ $ahsan['size'] }} </li>
            <li>{{ $ahsan['price'] }} </li>

        </ol>
    @endforeach --}}
@endsection
