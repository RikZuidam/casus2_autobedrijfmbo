<x-layout>
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">Navbar</a>
        <a href="/backup">BACK-UP</a>
        <a href="/logout">Logout</a>
    </nav>
    <br>
    <!-- Main/Body -->
    <main class="container-fluid">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div id="cars" class="text-center">
                <header>
                    <h2>Auto's</h2>
                </header>
                <br>
                <body>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Latest Updated</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < count($car); $i++)
                            <tr>
                                <th scope="row">{{ $car[$i]->id }}</th>
                                <td>{{ $car[$i]->name }}</td>
                                <td>{{ $car[$i]->price }}</td>
                                <td>test</td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </body>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div id="cars" class="text-center">
                <header>
                    <h2>Klanten</h2>
                </header>
                <br>
                <body>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < count($customer); $i++)
                            <tr>
                                <th scope="row">{{ $customer[$i]->id }}</th>
                                <td>{{ $customer[$i]->name }}</td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </body>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </main>
    <!-- Footer -->
    <footer></footer>
</x-layout>