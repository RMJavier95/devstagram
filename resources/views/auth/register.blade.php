@extends('layouts.app')

@section('titulo')
    Registro
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12">
            <img src="{{asset('img/registrar.jpg')}}" alt="Imagen registro de usuarios">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="/register" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Tu nombre"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500
                            
                        @enderror"
                        value={{ old('name') }}
                    />
                    @error('name')
                        <p class="text-red-500 my-2 rounded-lg text-sm p-2 text-left font-bold">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="user" class="mb-2 block uppercase text-gray-500 font-bold">
                        Usuario
                    </label>
                    <input
                        id="user"
                        name="user"
                        type="text"
                        placeholder="Tu usuario"
                        class="border p-3 w-full rounded-lg"
                    />
                    @error('user')
                        <p class="text-red-500 my-2 rounded-lg text-sm p-2 text-left font-bold">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Tu email"
                        class="border p-3 w-full rounded-lg"
                    />
                    @error('email')
                        <p class="text-red-500 my-2 rounded-lg text-sm p-2 text-left font-bold">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Contraseña
                    </label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Tu contraseña"
                        class="border p-3 w-full rounded-lg"
                    />
                    @error('password')
                        <p class="text-red-500 my-2 rounded-lg text-sm p-2 text-left font-bold">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Repetir Contraseña
                    </label>
                    <input
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        placeholder="Repite contraseña"
                        class="border p-3 w-full rounded-lg"
                    />
                    @error('password')
                        <p class="text-red-500 my-2 rounded-lg text-sm p-2 text-left font-bold">{{ $message }}</p>
                    @enderror
                </div>
                <input
                    type="submit"
                    value="Crear cuenta"
                    class="bg-red-800 hover:bg-red-900 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                />
            </form>
        </div>

    </div>
@endsection
