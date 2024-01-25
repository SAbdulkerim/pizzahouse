
@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1> Create a New Pizza </h1>
    <form action="/pizzas" method="POST" >
            @csrf
            <label for="name"> Your name:</label>
            <input type="text" id="name" name="name">
            <label for="type">Choose pizza type:</label>
            <select name="type" id="type">
                <option value="margarite">Margarite</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="veg supreme">Veg Supreme</option>
                <option value="volcano">Volcano</option>
            </select>
            <label for="base"> choose base type</label>
              <select name="base" id="base">
                <option value="cheesy">cheesy</option>
                <option value="garlic">Hawaiian</option>
                <option value="thin">thin</option>
                <option value="thick">thick</option>
            </select>
            <fieldset>
                <label for="">Extra toppings:</label>
                <input type="checkbox" name="toppings[]"  value="mushrooms" id="">Mushrooms<br/>
                <input type="checkbox" name="toppings[]"  value="peppers" id="">Peppers<br/>
                <input type="checkbox" name="toppings[]"  value="garlic" id="">Garlic<br/>
                <input type="checkbox" name="toppings[]"  value="olives" id="">Olives<br/>
                
            </fieldset>
            <input type="submit" value="Order Pizza">
    </form>
</div>

@endsection