@extends('layouts.master')


@section('title')
    {{$project->title}}
@endsection


@section('content')

    

    <div style="margin-top: 200px">
    
        

        <div class="jumbotron">
            <h1 class="display-4">{{$project->title}}<a href="/task/{{$project->id}}/create" class="btn btn-secondary" style="margin-bottom:10px; margin-left:20px;">Add task</a></h1>
            <hr class="my-4">
            <p class="lead">
            
                    @foreach($project->tasks as $task)
                        <li>{{$task->taskname}}</li>
                        <hr class="my-4">
                    @endforeach
            
            </p>

        
            

            <!-- <a href="/task/{{$project->id}}/create" class="btn btn-secondary" style="margin-bottom:10px">Add task</a> -->
            
        </div>


    @if(Auth::check())
        @if(auth()->user()->id == $project->user_id)
            <a href="/project/{{$project->id}}/edit" class="btn btn-secondary">Edit</a>


        @endif

    @endif

        
    
    </div>
    




@endsection