@extends ('app')

@section ('content')
<div id="content">
	<div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ route('accueil') }}">Accueil</a>
                        </li>
                        <li>Notre boutique de livres et de DVD</li>
                    </ul>
                </div>
                
                @include('pages.boutique.sidebar')
                @if($page != 'livre'&& $page != 'memoire' && $page != 'dvd' && $page != 'vod')
                <div class="col-md-9">
                    <div class="box" id="text-page">
                        <h1>{{ $page->name }}</h1>
                        <div class="text-justify ">{!! $page->content !!}</div>
                    </div>
                <img src={{ asset($page->image) }} alt="{{$page->name}}">

                </div>
                @else
                @yield('categorie')
                @endif
                <!-- /.col-md-9 -->

                

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
</div>
@endsection