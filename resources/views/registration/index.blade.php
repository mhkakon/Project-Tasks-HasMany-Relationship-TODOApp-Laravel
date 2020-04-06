@extends('layouts.master')


@section('title')
    All registerd users
@endsection


@section('content')

                <h3 class="text-style add-spacing">Registerd Users </h3>

                <table class="table table-bordered table-hover add-spacing">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Department</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    
                    </thead>

                @foreach($alldata as $registration)
                   
                    <tbody>
                        <tr>
                            <td>{{$registration->name}}</td>
                            <td>{{$registration->age}}</td>
                            <td>{{$registration->sex}}</td>
                            <td>{{$registration->department}}</td>
                            
                            <td>
                                <button class="btn btn-link"><a href="/registration/{{$registration->id}}/edit">Edit</a></button>
                            
                            </td>


                            <td>
                                <form action="registration/{{$registration->id}}" method="post">
                                    
                                    @method('DELETE')
                                    @csrf

                                    
                                    <button class="btn btn-link" type="submit">Delete</button>
                                
                                </form>
                            
                            </td>

                        </tr>

                    </tbody>

                @endforeach
                
                </table>
        
@endsection