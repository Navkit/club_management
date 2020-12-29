@extends('layouts.master')

@section('content')
    مرحبا بك يا {{Auth()->user()->name}}
@endsection

@section('scripts')
@endsection
