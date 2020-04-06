
@extends('layouts.master')


@section('title')
    Form
@endsection


@section('content')

<form  class="add-spacing" method="POST" action="/registration">

    {{csrf_field()}}


                <div class="form-group">
                <label for="email">Name:</label>
                <input type="text" class="form-control" name="name">
                </div>


                <div class="form-group">
                <label for="email">Age:</label>
                <input type="text" class="form-control" name="age">
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
                <input type="text" class="form-control" name="department">
                </div>



                <button type="submit" class="btn btn-primary">Submit</button>
                </form>

@endsection
