@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="post">
        @csrf
        <label for = "name">Your Name:</label>
        <input type="text" name="name" id ="name">
        <label for="type">Choose Pizza Type:</label>
        <select name="type" id="type">
            <option value ="margarita">Margarita</option>
            <option value ="hawaiin">Hawaiin</option>
            <option value ="veg supreme">Veg Supreme</option>
            <option value ="volcano">Volcano</option>
        </select>
        <label for="base">Choose Base Type:</label>
        <select name="base" id="base">
            <option value ="cheesy crust">cheesy crust</option>
            <option value ="garlic crust">Garlic Crust</option>
            <option value ="thin & crispy">Thin & Crispy</option>
            <option value ="thick">Thick</option>
        </select>
        <fieldset>
            <label>Extra Toppings</label>
            <input type="checkbox" name="toppings[]" value ="mushrooms">Mushrooms<br>
            <input type="checkbox" name="toppings[]" value ="peppers">Pepper<br>
            <input type="checkbox" name="toppings[]" value ="garlic">Garlic<br>
            <input type="checkbox" name="toppings[]" value ="olives">Olives<br>
        </fieldset>
        <input type="submit" value="order pizza">
    </form>
</div>
@endsection
