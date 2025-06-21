@extends('layouts.layout')
@section('bodyContent')
@include('partials.banner')

{{-- @include('partials.breadcrumb', ['breadcrumbTitle' => 'About District']) --}}
@include('components.about.aboutSection')
 
                  

@endsection