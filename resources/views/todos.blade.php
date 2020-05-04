@extends('layouts.app')

@section('content')
<div class="w-screen">
    <div class="flex justify-center items-center">   
        @if(count($errors))
            @foreach($errors->all() as $error)
                <p class="mr-64 text-sm text-red-600">
                    *{{$error}}*
                </p>
            @endforeach
        @endif
    </div>
</div>

<form action="/todos" method="post" class="w-full flex justify-center items-center">
    <label class="w-48 text-gray-800 font-bold md:text-right mb-1 pr-4">
        Enter To-Do:
    </label>

    <div class="w-2/6">
        {{csrf_field()}}
        {{ method_field('POST') }}
        <input class="bg-gray-200 appearance-none border border-gray-400 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" name="todo" placeholder="Enter To-Do">
    </div>

    <button type="submit" class="w-40 m-5 shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" >
        Add To-Do
    </button>
</form>

<div class="mx-40 w-4/6 my-20">
    @foreach($todos as $todo)
    <div class="flex justify-end items-center">
        <p class="">{{$todo->todo}}</p>
         
        <a type="button" href = "{{route('todo.delete', ['todo' => $todo])}}" class="m-5 shadow bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-3 rounded" >
            Delete
        </a>

        <a type="button" href = "{{route('todo.edit', ['todo' => $todo])}}" class="m-5 shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-3 rounded" >
            update
        </a>

        <br>
    </div>
    @endforeach
</div>
@endsection
