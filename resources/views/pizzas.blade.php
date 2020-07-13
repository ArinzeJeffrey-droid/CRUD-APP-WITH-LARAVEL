@extends('layouts.layout')
@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Pizza List<br>
                </div>
                <p>{{$name}}</p>
                @foreach($pizzas as $pizza)
                    <div>
                        {{$pizza->name}} - {{$pizza->type}} - {{$pizza->type}}
                    </div>
                @endforeach
                {{-- @for($i = 0; $i < 5; $i++)
                    <p>The value of i is {{$i}}</p>
                @endfor --}}
            </div>
        </div>
@endsection
