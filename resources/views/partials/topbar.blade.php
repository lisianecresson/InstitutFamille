   <!-- *** TOPBAR *** -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="{{ route('accueil') }}">INSTITUT D'ÉTUDES DE LA FAMILLE</a>
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="#" data-toggle="modal" data-target="#login-modal">Se connecter</a>
                    </li>
                    <li><a href="{{ url('/register') }}">S'inscrire</a>
                    </li>
                    @else
                        <li>
                            <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                        </li>
                    @endif
                    <li><a href="{{ route('page',['page' =>'les-activites-des-instituts']) }}">L'institut</a>
                    </li>
                    <li><a href="{{ route('page',['page' =>'les-ressources']) }}">Ressources</a>
                    </li>
                    <li><a href="{{ route('page',['page' =>'pour-nous-contacter']) }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- *** TOP BAR END *** -->