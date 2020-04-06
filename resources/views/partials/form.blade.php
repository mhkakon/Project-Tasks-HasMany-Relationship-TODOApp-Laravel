
@extends('layouts.master')


@section('title')
    Form
@endsection


@section('content')

<form  class="add-spacing" method="POST" action="/crud">

    {{csrf_field()}}


                <div class="form-group">
                <label for="email">Name:</label>
                <input type="text" class="form-control" name="name">
                </div>


                <div class="form-group">
                <label for="email">Roll:</label>
                <input type="text" class="form-control" name="roll">
                </div>


                <div class="form-group">
                <label for="email">Department:</label>
                <input type="text" class="form-control" name="department">
                </div>


                <div class="form-group">
                <label for="email">Mobile:</label>
                <input type="text" class="form-control" name="mobile">
                </div>

                <div class="form-group">
                <label for="email">Session:</label>
                <input type="text" class="form-control" name="session">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                </form>

@endsection
