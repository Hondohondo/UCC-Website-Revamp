@extends('layouts.app')

@section('title', 'UCC Homepage')

@section('content')
    @include('components.hero')
    @include('components.testimonials')
    @include('components.clients')
    @include('components.newsletter')
@endsection
