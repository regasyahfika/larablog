@extends('user.app')

@section('title', 'Larablog')


@section('main-content')
    <div class="col-md-9 technology-left">
        <div class="tech-no">
            <div class="clearfix"></div>

         @foreach ($posts as $post)
            <div class="wthree">
                 <div class="col-md-6 wthree-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                    <div class="tch-img">
                            <a href="singlepage.html"><img src="{{ Storage::disk('local')->url($post->image) }}" class="img-responsive" alt=""></a>
                        </div>
                 </div>
                     
                 <div class="col-md-6 wthree-right wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                        <h3><a href="{{ route('post', $post->slug) }}">{{ $post->judul }}</a></h3>
                        <h6>BY <a href="singlepage.html">ADAM ROSE </a>{{ $post->created_at->format('d M Y') }}</h6>
                            <p>{!! htmlspecialchars_decode(substr($post->konten, 0,200)) !!}</p>
                            <div class="bht1">
                                <a href="">Read More</a>
                            </div>
                            <div class="soci">
                                <ul>
                                    
                                    <li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
                                    <li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                    
                 </div>
                    <div class="clearfix"></div>
            </div>
         @endforeach
            <nav class="paging">
                <ul class="pagination pagination-lg">
                    {{ $posts->links() }}
                </ul>
            </nav>
        </div>
    </div>

@endsection
