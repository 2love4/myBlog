@extends('layout.header')
@section('content')
    {{--<form action="">--}}
        {{--<input type="text" name="arr"/><br/>--}}
        {{--<input type="text" name="password"/><br/>--}}
        {{--<button type="button" value="submit">Submit</button>--}}
        {{--<button type="button" value="reset">Reset</button>--}}
    {{--</form>--}}
    @foreach($list as $list)
        <input type="text" value="{{$list->name}}"><br/>
        <input type="text" value="{{$list->email}}">
    @endforeach
    
@endsection()