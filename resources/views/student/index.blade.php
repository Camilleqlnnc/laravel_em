@extends('layouts.admin')
@section('nav')
    @parent
    <a href="{{url('student/create')}}">Ajouter un étudiant</a>
@stop
@section('content')
    <div class="col-lg-12">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Name</th>
                    <th>Notes</th>
                    <th>Images</th>
                    <th>Bio</th>
                    <th>Published at</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>edit</th>
                    <th>delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($students as $student)
                    <td>
                        <a href="{{url('student/'.$student->id)}}">{{$student->firstname}}</a>
                    </td>
                    <td>
                        <a href="{{url('student/'.$student->id)}}">{{$student->name}}</a>
                    </td>
                    <td>
                        {!!$student->note!!}
                    </td>

                    {!! Form::open(['url'=>'student/'.$student->id,'method'=>'DELETE'])!!}
                    <td>
                        <div>
                            {!! Form::submit('delete', ['class'=>'btn btn-warning btn-confirm'])!!}
                        </div>
                    </td>
                    {!! Form::close() !!}
                    <td>
                        {!!$student->bio!!}
                    </td>
                    <td>
                        {{$student->published_at}}
                    </td>
                    <td>
                        {{$student->type}}
                    </td>
                    <td>
                        {{$student->status}}
                    </td>
                    <td>
                        <a href="{{url('student/'.$student->id.'/edit')}}" class="btn btn-success">edit</a>
                    </td>
                    {!! Form::open(['url'=>'student/'.$student->id,'method'=>'DELETE' ]) !!}
                    <td>
                       <div class="form-group">
                            {!! Form::submit('delete', ['class'=>'btn btn-warning btn-confirm']) !!}
                        </div>
                    </td>
                    {!! Form::close() !!}
                </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
@stop

