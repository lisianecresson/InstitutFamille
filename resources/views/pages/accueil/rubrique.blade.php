<div class="container">

                <div class="col-md-12" data-animate="fadeInUp">

                    <div id="blog-homepage" class="row">
                        <div class="col-sm-4">
                            <div class="post">
                                <h4 class="text-uppercase hauteur_2"><a href="post.html">{{ $evenement->title }}</a></h4>
                                @php
                                    $tab = json_decode($evenement->extras);
                                @endphp
                                <img class="accueil__rubrique-image" src={{ asset($tab->image) }} alt="{{$evenement->name}}">
                                <hr>
                                <div class="text-justify hauteur">{!! str_limit( $evenement->content , $limit = 300, $end = '...') !!}</div>
                                <p class="read-more"><a href="post.html" class="btn btn-primary">Lire plus...</a>
                                </p>
                                
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="post">
                                <h4 class="text-uppercase hauteur_2"><a href="post.html">{{ $formation->title }}</a></h4>
                                @php
                                    $tab = json_decode($formation->extras);
                                @endphp
                                <img class="accueil__rubrique-image" src={{ asset($tab->image) }} alt="{{$formation->name}}">
                                <hr>
                                <div class="text-justify hauteur">{!! str_limit( $formation->content , $limit = 300, $end = '...') !!}</div>
                                <p class="read-more"><a href="post.html" class="btn btn-primary">Lire plus...</a>
                                </p>
                            </div>

                        </div>

                        <div class="col-sm-4">
                            <div class="post">
                                <h4 class="text-uppercase hauteur_2"><a href="post.html">{{ $boutique->title }}</a></h4>
                                @php
                                    $tab = json_decode($boutique->extras);
                                @endphp
                                <img class="accueil__rubrique-image" src={{ asset($tab->image) }} alt="{{$boutique->name}}">
                                <hr>
                                <div class="text-justify hauteur">{!! str_limit( $boutique->content , $limit = 300, $end = '...') !!}</div>
                                <p class="read-more"><a href="post.html" class="btn btn-primary">Lire plus...</a>
                                </p>
                            </div>

                        </div>

                    </div>
                    <!-- /#blog-homepage -->
                </div>
            </div>
            <!-- /.container -->