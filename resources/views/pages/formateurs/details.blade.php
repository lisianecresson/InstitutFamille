@extends ('app')

@section ('content')
<div id="content">
	<div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ route('accueil') }}">Accueil</a>
                        </li>
                        <li><a href="{{ route('page',['page' =>'les-formateurs']) }}">Formateurs</a></li>
                        <li>@if($formateur->titre != null)
                            {{ $formateur->titre}}
                            @endif 
                            {{ $formateur->prenom}} {{ $formateur->nom}}
                        </li>
                    </ul>
                </div>
                
                @include('partials.sidebar')

                <div class="col-md-9">
                    <div class="box" id="text-page">
                        <h1>@if($formateur->titre !== null)
                            {{ $formateur->titre}}
                            @endif 
                            {{ $formateur->prenom}} {{ $formateur->nom}}
                        </h1>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="col-md-4">
                                <p class="text-center">
                                    <img src={{ asset("$formateur->image") }} class="img-thumbnail  img-responsive" alt="{{ $formateur->fullName }}">
                                </p>
                                <p class="text-center">
                                    @if($formateur->titre !== null)
                                    {{ $formateur->titre}}
                                    @endif 
                                    {{ $formateur->prenom}} {{ $formateur->nom}}
                                </p>
                            </div>
                            <div class="text-justify ">{!! $formateur->texte !!}</div>
                            
                            <div>
                        </div>
                        
                        
                    </div>


                </div>
                <!-- /.col-md-9 -->

                

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
</div>
@endsection