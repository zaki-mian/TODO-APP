<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top justify-content-between">
    <div class="navbar-brand"><a href="/">TODO</a></div>


    <div class="float-right" id="navbarsExampleDefault">


        <ul class="navbar-nav mr-auto ">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('todo/create') ? 'active' : '' }}"
                    href="{{ url('todo/create') }}">Create</a>
            </li>
        </ul>

    </div>
</nav>
