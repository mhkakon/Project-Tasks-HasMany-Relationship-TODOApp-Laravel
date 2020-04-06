





<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="/">Project</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                

                @auth
                     
                    <li class="nav-item">
                        <a class="nav-link" href="/project/create">New project</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/home">Logout</a>
                    </li>
                    
                @endauth

                @guest

                     <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>


                     <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                @endguest
                    
                    
                    
                    

                </ul>
            </div>
            </div>
        </nav>