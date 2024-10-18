<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders</title>
    <link rel="stylesheet" href="{{ asset('css/indexStyle.css') }}">
</head>

<body>
    <header>List of Orders</header>
    <main class="content">
        @foreach ($pizzas as $pizza)
            <div class="card">
                <div class="card-content">

                    <h2>{{ $pizza->name }}</h2>
                    <ul>
                        <p><strong>Type:</strong> {{ $pizza->type }}</p>
                        <p><strong>Extra Ingredient:</strong> {{ $pizza->ingredients }}</p>
                        <p><strong>Size:</strong>{{ $pizza->size }}</p>
                </div>
                <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div id="buttons">
                        <a id="edit" href="{{ route('pizzas.edit', $pizza->id) }}"><button type="button">EDIT</button></a>
                        
                        <button type="submit">DELETE</button>
                    </div>
                </form>
                </ul>
            </div>
        @endforeach
    </main>

    <footer>
        <a href="{{ route('pizzas.create') }}">Ir a pedir</a>
        <p>Pizzería Di Cappo</p>
    </footer>

</body>

</html>
