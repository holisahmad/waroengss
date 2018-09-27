@extends('admin::layouts.master')
@section('title', 'Daftar Menu Waroeng SS')
@section('judul', 'Daftar Menu')
@section('subjudul', 'Waroeng SS')

@section('content')

<ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="{{ url('admin') }}">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">Master</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">Admin {{ $subcrumb }}</span>
        </li>
    </ul>
    <!-- END PAGE BREADCRUMB -->
    <!-- BEGIN PAGE BASE CONTENT -->
    <div class="note note-info">
        <p> A black page template with a minimal dependency assets to use as a base for any custom page you create </p>
    </div>

@endsection
