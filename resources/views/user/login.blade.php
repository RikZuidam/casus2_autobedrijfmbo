<x-layout>
    <br><br><br>
    <x-card>
        <main>
            <header class="text-center">
                <h2>Login</h2>
            </header>
            <br>
            <div class="form">
                <form action="/loginSubmit" method="post">
                    @csrf

                    <div>
                        <label for="email">Email :</label>
                        <br>
                        <input type="email" name="email" class="w-100" value="{{old('email')}}">
                        @error('email')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <br>
                    <div>
                        <label for="password">Password :</label>
                        <br>
                        <input type="password" name="password" class="w-100" value="">
                        @error('password')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <br><br>
                    <input type="submit" value="Login" class="w-100">
                </form>
            </div>
        </main>
    </x-card>
</x-layout>