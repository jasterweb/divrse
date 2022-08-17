@extends('layouts.landing', ['class' => 'bg-default'])
@section('title', 'Single Blog')

@section('content')
    <div class="header bg-white-2 pt-7">

        <section class="bg-white-2">
            <div class="container">
    
                <div class="row justify-content-between">
    
                    <div class="wrapper col-md-7">
                       
                        <h2 class="post-title">{{ $article->title }}</h2>
                        <p>Posted by {{ $article->user->username }} <i class="fa fa-solid fa-clock mx-2"></i> {{ date('F, d Y', strtotime($article->created_at)) }}</p>
    
                        <div class="post-image mx-auto my-4">
                            <img class="w-100" src="{{$article->getFirstMediaUrl('document')}}">
                        </div>
    
                        <div class="article-desc my-5">
                            <p>{{ strip_tags($article->desc) }}</p>
                        </div>
    
                        <div class="socshare">
                            <h4>Share this information</h4>
                            <ul class="sshare">
                                <li><a class="fb" href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" title="Share on Facebook" target="_blank" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                                <li><a class="tw" href="https://twitter.com/intent/tweet?url={{url()->current()}}&text={{ $article->title }}&via={{ $article->user->username }}" title="Tweet this on Twitter" onclick="window.open(this.href, 'twitter-share','width=580,height=296');return false;"><i class="fab fa-twitter"></i> Twitter</a></li>
                                <li><a class="wa" href="https://api.whatsapp.com/send?text={{ $article->title }} {{url()->current()}}" title="Share on Whatsapp" target="_blank" onclick="window.open(this.href, 'whatsapp-share','width=580,height=500');return false;"><i class="fab fa-whatsapp"></i> Whatsapp</a></li>
                                <li><a class="te" href="https://t.me/share/url?url={{url()->current()}}&text={{ $article->title }}" title="Share on Telegram" target="_blank" onclick="window.open(this.href, 'telegram-share','width=580,height=500');return false;"><i class="fab fa-telegram-plane"></i> Telegram</a></li>
                            </ul>
                        </div>
                        
                    </div>
    
                    <div class="col-md-4">
                        
                    </div>
    
                </div>
    
            
            </div>
        </section>

    </div>

    @include('layouts.footers.footerwide', [
        'title' => 'Diversity won\'t wait',
        'desc' => 'Turn diversity goals into action today',
        'link' => route('get'),
        'cta' => 'Get Started'
    ])
    
@endsection

@section('script')
@endsection


