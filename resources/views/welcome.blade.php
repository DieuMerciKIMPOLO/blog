@inject('date', 'App\Utilities\Date')
@extends('layouts.master',['title'=>'Home'])
{{--we can use @push for @stack--}}
@section('content')
{{$name."   ".$firstName."  ".$date->isWeedEnd()}}
@endsection