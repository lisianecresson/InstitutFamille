@extends ('app')

@section ('content')
<div id="content">
	<div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ route('accueil') }}">Accueil</a>
                        </li>
                        <li>{{ $page->name }}</li>
                    </ul>
                </div>

                

                <div class="col-md-9">
					<div class="box" id="text-page">
                    	<h1>{{ $page->name }}</h1>
                        <div class="text-justify ">{!! $page->content !!}</div>
                    </div>


                </div>
                <!-- /.col-md-9 -->
                @include('partials.sidebar')
                
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
</div>
@endsection