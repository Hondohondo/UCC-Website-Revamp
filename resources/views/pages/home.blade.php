@extends('layouts.app')

@section('title', 'UCC Homepage')

@section('content')
    @include('components.hero')
    @include('components.partners')
    @include('components.services')
    @include('components.extra')


    @include('components.testimonials')
    @include('components.clients')
    @include('components.newsletter')
@endsection

