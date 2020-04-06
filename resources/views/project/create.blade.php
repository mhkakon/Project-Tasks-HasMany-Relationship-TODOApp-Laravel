
@extends('layouts.master')


@section('title')
    Create a Project
@endsection


@section('content')

<form  class="add-spacing" method="POST" action="/project">

    {{csrf_field()}}


                <div class="form-group">
                <label for="email">Title:</label>
                <input type="text" class="form-control" name="title">
                </div>

                <button type="submit" class="btn btn-primary">Create</button>

                </form>

@endsection
