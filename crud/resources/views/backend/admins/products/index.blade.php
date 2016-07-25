@extends('layouts.generals.main_template')

@section('page_title')
    Productos
@endsection

@section('title')
    Productos
@endsection

@section('button_delete')
@endsection

@section('buttons')
@endsection

@section('body_page')
    @include('backend.admins.products.partials.table')
@endsection