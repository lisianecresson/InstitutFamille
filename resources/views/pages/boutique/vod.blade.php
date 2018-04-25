@extends ('pages.boutique')

@section ('categorie')
<div class="col-md-9">
                    <div class="box">
                        <h1>VOD</h1>
                        @if($vods->toArray() != null)
                        <p>!! ATTENTION !! Vidéo à consulter en ligne uniquement !!! (Ceci n'est pas un DVD que vous allez recevoir) ! Vente de VOD de colloques, séminaires, congrés, DVD, interventions... disponibles à la demande pour une durée de 48 heures à partir de la validation de la commande.</p>
                        @else
                        <p>Il n'y a pas d'article pour le moment.</p>
                        @endif
                    </div>
                    @if($vods->toArray() != null)
                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 products-showing">
                                Voir <strong>12</strong> sur <strong>25</strong> produits
                            </div>

                            <div class="col-sm-12 col-md-8  products-number-sort">
                                <div class="row">
                                    <form class="form-inline">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-number">
                                                <strong>Show</strong>  <a href="#" class="btn btn-default btn-sm btn-primary">12</a>  <a href="#" class="btn btn-default btn-sm">24</a>  <a href="#" class="btn btn-default btn-sm">All</a> products
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-sort-by">
                                                <strong>Sort by</strong>
                                                <select name="sort-by" class="form-control">
                                                    <option>Price</option>
                                                    <option>Name</option>
                                                    <option>Sales first</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row products">
                        
                        @foreach($vods as $vod)
                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="{{ route('vod', [$vod->slug]) }}">
                                                <img class="boutique__categorie-image" src="{{ asset($vod->image) }}" alt="" class="{{ $vod->titre }}">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="">
                                                <img class="boutique__categorie-image" src="{{ asset($vod->image) }}" alt="" class="{{ $vod->titre }}">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('vod', [$vod->slug]) }}" class="invisible">
                                    <img src="{{ asset($vod->image) }}" alt="{{ $vod->titre }}" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="{{ route('vod', [$vod->slug]) }}">{{ $vod->titre }}</a></h3>
                                    <p class="price">{{ $vod->prix }} €</p>
                                    <p class="buttons">
                                        <a href="{{ route('vod', [$vod->slug]) }}" class="btn btn-default">Vois détails</a>
                                        <a href="{{ route('vod', [$vod->slug]) }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>
                        @endforeach
                        
                        <!-- /.col-md-4 -->
                    </div>
                    <!-- /.products -->

                    <div class="pages">

                        <p class="loadMore">
                            <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>
                        </p>

                        <ul class="pagination">
                            <li><a href="#">&laquo;</a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li><a href="#">&raquo;</a>
                            </li>
                        </ul>
                    </div>
                    @endif

                </div>
                <!-- /.col-md-9 -->
            </div>

@endsection