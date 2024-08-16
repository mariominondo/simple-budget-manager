@extends('layout')

@section('title', 'Latest Transactions')

@section('content')
    <div class="pl-40 pr-40">
        <ul>
            @for($i = 0; $i < 10; $i++)
                <li class="p-10 hover:bg-indigo-100">blabla</li>
            @endfor
        </ul>
    </div>

@endsection
