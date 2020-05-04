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

<form action="{{route('todo.update', ['todo' => $todo])}}" method="post" class="w-screen flex justify-center items-center">
    {{csrf_field()}}
    {{ method_field('PUT') }}
    
    <label class="w-48 text-gray-800 font-bold md:text-right mb-1 pr-4">
        Update To-Do:
    </label>

    <div class="w-2/6">
        <input value="{{$todo->todo}}" class="bg-gray-200 appearance-none border border-gray-400 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" name="todo" placeholder="Enter To-Do">
    </div>

    <button type="submit" class="w-40 m-5 shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" >
        Update To-Do
    </button>
</form>
@endsection
