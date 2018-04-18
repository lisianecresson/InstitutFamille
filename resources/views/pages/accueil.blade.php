@extends ('app')

@section ('content')
<div id="content" class='accueil'>
	@include('pages.accueil.slider')
	@include('pages.accueil.contenu')
	@include('pages.accueil.rubrique')
</div>
@endsection