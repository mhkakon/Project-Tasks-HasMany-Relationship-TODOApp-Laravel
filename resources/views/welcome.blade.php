@extends('layouts.master')

@section('title')
    Homepage
@endsection


@section('content')

        <h1 class="add-spacing text-center lighter">Homepage</h1>



        <div class="jumbotron">

            @foreach($projects as $project)

                <h1 class="display-4 no-decoration"><a href="/project/{{$project->id}}">{{$project->title}}</a></h1>
                    <p class="lead">by {{$project->username}}</p>


            @if(Auth::check())
                @if(auth()->user()->id == $project->user_id)
                    <form action="/project/{{$project->id}}" method="post">

                        @method('DELETE')
                        @csrf 

                        <button class="btn btn-danger" type="submit">Delete</button>
                    
                    
                    </form>

                @endif
                
            @endif

                <hr class="my-4">

            @endforeach
            
        </div>


        

@endsection

