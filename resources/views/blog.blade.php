@extends('layouts.landing', ['class' => 'bg-default'])
@section('title', 'Blog')

@section('content')
    <div class="header bg-primary pb-2 pt-8 ">
        <div class="container">
            <div class="header-body mt-4 mb-4">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12">
                        <h1 class="titlesect text-white text-center">Our Latest Blog</h1>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <section class="bg-white-2">
        <div class="container">
            <div class="posthome">
               
                    @forelse ($articles as $article)
                    <div class="feeditem">
                        <div class="feedwrap">
                        <img src="{{$article->getFirstMediaUrl('document')}}">
                        <div class="feedcontent">
                            <span>December 11, 2021</span>
                            <h2>{{$article->title}}</h2>
                            <a href="{{route('article.show',$article)}}" class="btn btn-danger">Read More</a>
                        </div>
                        </div>
                    </div>
                    @empty
                
                    @endforelse
                
            </div>

            <div class="d-flex justify-content-center">
                {{$articles->links()}}
                </div>
        
        </div>
    </section>

    @include('layouts.footers.footer', [
        'title' => 'Diversity won\'t wait',
        'desc' => 'Turn diversity goals into action today',
        'link' => route('get'),
        'cta' => 'Get Started'
    ])
    
@endsection

@section('script')
@endsection


