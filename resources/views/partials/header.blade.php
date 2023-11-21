<header>
    <h1>Pizzeria</h1>
    <nav>
        <li><a href="{{ route('pizza') }}" class="{{ $request->routesIs('pizza') ? 'active' : '' }}">Home</a>
        </li>
        <li><a href="{{ route('pizza.pizzas') }}" class="{{ $request->routesIs('pizza.*') ? 'active' : '' }}">Pizzas</a>
        </li>
        <li><a href="{{ route('conocenos') }}" class="{{ $request->routesIs('conocenos') ? 'active' : '' }}">Conocenos</a>
        </li>
    </nav>
</header>