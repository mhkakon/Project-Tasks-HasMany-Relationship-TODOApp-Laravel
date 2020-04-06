
@extends('layouts.master')


@section('title')
    Update {{$project->title}}
@endsection


@section('content')

<form  class="add-spacing" method="POST" action="/project/{{$project->id}}">

    @method('PUT')

    {{csrf_field()}}


                <div class="form-group">
                <label for="email">Title:</label>
                <input type="text" value="{{$project->title}}" class="form-control" name="title">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>

                </form>

@endsection
