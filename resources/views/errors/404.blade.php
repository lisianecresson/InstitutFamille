@extends ('app')

@section ('content')
  <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="{{ route('accueil') }}">Accueil</a>
                        </li>
                        <li>Page non trouvée</li>
                    </ul>


                    <div class="row" id="error-page">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="box">

                                <p class="text-center">
                                    <img src="{{ asset ("img/logo.png") }}" alt="Institut famille logo">
                                </p>

                                <h3>Nous sommes désolés - Page non trouvée</h3>
                                <h4 class="text-muted">Erreur 404 - Page non trouvée</h4>

                                <p class="text-center">Pour continuer, veuillez retourner à la page d'accueil</p>

                                <p class="buttons"><a href="{{ route('accueil') }}" class="btn btn-primary"><i class="fa fa-home"></i> Aller à la page d'accueil</a>
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
@endsection