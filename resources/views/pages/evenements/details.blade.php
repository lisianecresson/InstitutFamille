@extends ('app')

@section ('content')
<div id="content">
	<div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ route('accueil') }}">Accueil</a>
                        </li>
                        <li><a href="{{ route('page',['page' =>'les-evenements']) }}">Evenements</a></li>
                        <li>{{ $evenement->titre}}</li>
                    </ul>
                </div>
                
                @include('partials.sidebar')

                <div class="col-md-9">
                    <div class="box" id="text-page">
                        <h1>{{ $evenement->titre }}</h1>
                        <div class="text-justify ">{!! $evenement->texte !!}</div>
                        
                        @if($evenement->dateFin == null)
                        Le {{$evenement->dateDebut->format('d F Y') }}
                        @else
                        Du {{$evenement->dateDebut->formatLocalized('d F Y') }} au {{$evenement->dateFin->formatLocalized('d F Y')}}
                        @endif
                    </div>


                </div>
                <!-- /.col-md-9 -->

                

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
</div>
@endsection