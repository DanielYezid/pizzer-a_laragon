@extends('layout')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order</title>
    <link rel="stylesheet" href="{{ asset('css/createStyle.css') }}">
</head>

<body>
    <!-- It is never too late to be what you might have been. - George Eliot -->
    <header>
        <h1>Make your pizza</h1>
    </header>

    <main class="content">
        <form action="{{ route('pizzas.store') }}" method="POST">
            @csrf
            <!-- Nombre de la Pizza -->
            <label for="name">Select your pizza:</label>
            <select name="name" id="name" required>
                <option value="">-- Select one pizza --</option>
                <option value="Margarita">Margarita</option>
                <option value="Pepperoni">Pepperoni</option>
                <option value="Four_cheese">Four Cheese</option>
                <option value="Vegetarian">Vegetarian</option>
            </select>
            <br><br>

            <!-- Tipo de pizza -->
            <label for="type">Type of Pizza:</label>
            <select name="type" id="type" required>
                <option value="">-- Selecciona a type --</option>
                <option value="Normal">Normal</option>
                <option value="Gluten_free">Gluten Free</option>
            </select>
            <br><br>

            <!-- Ingrediente extra -->
            <label for="ingredients">Select an extra ingredien:</label>
            <select name="ingredients" id="ingredients" size="5" required>
                <option value="Jam">Jam</option>
                <option value="Mushrooms">Mushrooms</option>
                <option value="Olives">Olives</option>
                <option value="Pineapple">Pineapple</option>
                <option value="Extra_cheese">Extra Cheese</option>
            </select>
            <br><br>

            <!-- Tamaño de la pizza -->
            <label for="size">Tamaño:</label>
            <select name="size" id="size" required>
                <option value="">-- Selecciona el tamaño --</option>
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
            </select>
            <br><br>

            <button type="submit">Make order</button>
        </form>
    </main>


    <footer>
        <a href="{{ route('pizzas.index') }}"> Back to the list</a>
        <p>Pizzería Di Cappo</p>
    </footer>
</body>

</html>
