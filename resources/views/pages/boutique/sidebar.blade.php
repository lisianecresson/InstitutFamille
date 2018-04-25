<div class="col-md-3 boutique__sidebar">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                    
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Categories</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <li>
                                    <div class="text-uppercase boutique__sidebar-sousTitre">Publications</div>
                                    <ul>
                                        @if($page == 'livre')
                                        <li class="boutique__sidebar-lienActif"><a href="{{ route('livres') }}">Livres <span class="badge pull-right">{{ $nombreLivre }}</span></a> 
                                        </li>
                                        @else
                                        <li><a href="{{ route('livres') }}">Livres <span class="badge pull-right">{{ $nombreLivre }}</span></a> 
                                        </li>
                                        @endif
                                        @if($page == 'memoire')
                                        <li class="boutique__sidebar-lienActif"><a href="{{ route('memoires') }}">Mémoire d'étudiant <span class="badge pull-right">{{ $nombreMemoire }}</span></a> 
                                        </li>
                                        @else
                                        <li><a href="{{ route('memoires') }}">Mémoire d'étudiant <span class="badge pull-right">{{ $nombreMemoire }}</span></a>
                                        </li>
                                        @endif
                                    </ul>
                                </li>

                                <li>
                                    <div class="text-uppercase boutique__sidebar-sousTitre">Multimédia </div>
                                    <ul>
                                        @if($page =='dvd')
                                        <li class="boutique__sidebar-lienActif"><a href="{{ route('dvds') }}">DVD <span class="badge pull-right">{{ $nombreDvd }}</span></a></li>
                                        @else
                                        <li><a href="{{ route('dvds') }}">DVD <span class="badge pull-right">{{ $nombreDvd }}</span></a></li>
                                        @endif
                                        @if($page=='vod')
                                        <li class="boutique__sidebar-lienActif"><a href="{{ route('vods') }}">VOD <span class="badge pull-right">{{ $nombreVod }}</span></a></li>
                                        @else
                                        <li><a href="{{ route('vods') }}">VOD <span class="badge pull-right">{{ $nombreVod }}</span></a></li>
                                        @endif
                                    </ul>
                                </li>

                            </ul>

                        </div>
                    </div>











                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Brands <a class="btn btn-xs btn-danger pull-right" href="#"><i class="fa fa-times-circle"></i> Clear</a></h3>
                        </div>

                        <div class="panel-body">

                            <form>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Armani (10)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Versace (12)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Carlo Bruni (15)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Jack Honey (14)
                                        </label>
                                    </div>
                                </div>

                                <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>

                            </form>

                        </div>
                    </div>

                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Colours <a class="btn btn-xs btn-danger pull-right" href="#"><i class="fa fa-times-circle"></i> Clear</a></h3>
                        </div>

                        <div class="panel-body">

                            <form>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> <span class="colour white"></span> White (14)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> <span class="colour blue"></span> Blue (10)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> <span class="colour green"></span> Green (20)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> <span class="colour yellow"></span> Yellow (13)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> <span class="colour red"></span> Red (10)
                                        </label>
                                    </div>
                                </div>

                                <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>

                            </form>

                        </div>
                    </div>

                    <!-- *** MENUS AND FILTERS END *** -->

                    <div class="banner">
                        <a href="#">
                            <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>