
            <div class="container">
                <div class="col-md-12">
                    <div id="main-slider">
                        @foreach($sliders as $slider)
                            <div class="item">
                                <a href="#" class="accueil__slide-lien">
                                    <img class="accueil__slide-image" src="{{ asset($slider->image) }}" alt="{{ ($slider->conference->titre) }}">
                                    <div class="accueil__slide-titre">
                                    <h2 class=" text-uppercase text-center">{{ ($slider->conference->titre) }}</h2>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <!-- /#main-slider -->
                </div>
            </div>