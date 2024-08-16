@extends('layout')

@section('title', 'Latest Transactions')

@section('content')
    <div class="pl-40 pr-40">
        <ul>
            @foreach($transactions as $transaction)
                <li class="p-10 hover:bg-indigo-100 flex justify-between">
                    <span>{{$transaction->type}}</span>
                    <span>{{$transaction->amount}}</span>
                    {{$transaction->description}}
                    <span>{{$transaction->date}}</span>

                </li>
            @endforeach

        </ul>
    </div>

@endsection
