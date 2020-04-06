
@extends('layouts.master')


@section('title')
    Form
@endsection


@section('content')

<form  class="add-spacing" method="POST" action="/registration/{{$registration->id}}">

    @method('PUT')
    {{csrf_field()}}


                <div class="form-group">
                <label for="email">Name:</label>
                <input type="text" value="{{$registration->name}}" class="form-control" name="name">
                </div>


                <div class="form-group">
                <label for="email">Age:</label>
                <input type="text" value="{{$registration->age}}" class="form-control" name="age">
                </div>


                <div class="form-group">
                
                        <label for="email">Sex:</label>

                        <div class="input-group mb-3">
                            <select class="custom-select" name="sex" id="inputGroupSelect02">
                                <option selected>Choose...</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Complex">Complex</option>
                            </select>
                            </div>     
                </div>



                <div class="form-group">
                <label for="email">Department:</label>
                <input type="text" value="{{$registration->department}}" class="form-control" name="department">
                </div>



                <button type="submit" class="btn btn-primary">Update</button>
                </form>

@endsection
