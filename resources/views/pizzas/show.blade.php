
@extends('layouts.app')

@section('content')
    <div class="wrapper pizza-details"></div>
        <h1> order for {{ $pizza->name }}</h1>
        <p class="type"> name - {{ $pizza->name}} </p>
        <p class="type"> Type - {{ $pizza->type}} </p>
        <p class="base"> base  - {{ $pizza->base}} </p>
        <p class="toppings">Extra toppings:</p>
        <ul>
            @foreach ($pizza->toppings as $topping)
                <li>{{ $topping}} </li>
            @endforeach
        </ul>

        {{-- <form action="/pizzas/{{$pizza->id}}" method="POST"> --}}
            {{-- this is using route name --}}
        <form action=" {{ route('pizzas.destroy', $pizza->id) }} " method="POST">    
            @csrf
            @method('DELETE')
            <button>Complete Order</button>
        </form>
    </div>

    <a href="/pizzas" class="back"> <-back to all pizzas </a>
@endsection