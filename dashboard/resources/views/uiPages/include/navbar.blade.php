<header class="header-area header-sticky">

<div class="container">

    <div class="row">

        <div class="col-12">

            <nav class="main-nav">

                <!-- ***** Logo Start ***** -->

                <a href="{{route('home')}}" class="logo">

                    <img src="assets/images/templatemo-eduwell.png" alt="Zhelhire Logo">



                </a>

                <!-- ***** Logo End ***** -->

                <!-- ***** Menu Start ***** -->

                <ul class="nav">

                    <li ><a href="{{ route('home') }}" class="active">Home</a></li>

                    <li ><a href="{{ route('services') }}">Services</a></li>

                    <li ><a href="{{ route('viewCourses') }}">Courses</a></li>

                    <li class="has-sub">

                        <a href="javascript:void(0)">Pages</a>

                        <ul class="sub-menu">

                            <li><a href="{{ route('home') }}">Home</a></li>

                            <li><a href="{{ route('about') }}">About Us</a></li>

                            <li><a href="{{ route('services') }}">Our Services</a></li>

                            <li><a href="{{ route('contact') }}">Contact Us</a></li>

                        </ul>

                    </li>

                    <li ><a href="{{ route('home') }}#testimonials">Testimonials</a>

                    </li>

                    <li ><a href="{{ route('home') }}#contact-section">Contact Us</a>
                    <li class=""><a href="{{ route('login') }}">Login</a>

                    </li>



                    </li>



                </ul>



                <a class='menu-trigger'>

                    <span>Menu</span>

                </a>

                <!-- ***** Menu End ***** -->

            </nav>

        </div>

    </div>

</div>

</header>