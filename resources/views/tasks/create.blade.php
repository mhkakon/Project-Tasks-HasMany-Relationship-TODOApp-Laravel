
@extends('layouts.master')


@section('title')
    Create a Task
@endsection


@section('content')

<form  class="add-spacing" method="POST" action="/task/{{$project->id}}">

    {{csrf_field()}}


                <div class="form-group">
                <label for="email">Task Name:</label>
                <input type="text" class="form-control" name="taskname">
                </div>

                

                <button type="submit" class="btn btn-primary">Create</button>

                </form>

@endsection
