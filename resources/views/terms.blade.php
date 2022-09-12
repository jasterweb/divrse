@extends('layouts.landing', ['class' => 'bg-default'])
@section('title', 'Terms of Service')
@section('content')
 
<div class="blank"></div>

    @include('layouts.footers.footer', [
        'title' => 'Get started today.',
        'desc' => 'Finding the right job is life-changing. Let Divrse help you find your next big opportunity.',
        'link' => route('get'),
        'cta' => 'See It in Action'
    ])

@endsection