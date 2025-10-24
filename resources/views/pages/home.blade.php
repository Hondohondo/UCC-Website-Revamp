@extends('layouts.app')

@section('title', 'UCC Homepage')

@section('content')
    @include('components.hero')
    @include('components.partners')
    @include('components.services')
    @include('components.extra')


    @include('components.testimonials')
    @include('components.featured-in')
    @include('components.newsletter')
{{--    @include('components.cards')--}}
{{--    @include('components.gallery')--}}
{{--    @include('components.cta')--}}
{{--    @include('components.z-pattern')--}}
{{--    @include('components.circle')--}}
@endsection

