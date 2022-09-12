@extends('layouts.landing', ['class' => 'bg-default'])
@section('title', 'Compliance')
@section('content')
<div class="blank"></div>
    @include('layouts.footers.ctafoot', [
        'title' => 'Get started today.',
        'desc' => 'Finding the right job is life-changing. Let Divrse help you find your next big opportunity.',
        'link' => route('get'),
        'cta' => 'See It in Action'
    ])
    
    @include('layouts.footers.footer')

@endsection