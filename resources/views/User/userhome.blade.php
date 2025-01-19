<x-userlayout>
    <x-slot name="title">userhome</x-slot>
    <x-slot name="pagework">
        <x-slot name="main">
            <div class="main">


                <section class="home-banner">
                    <div class="banner-bg text-center" style="background-image: url({{ url('frontend/assets/User/banner-1.jpg') }})">
                        <div class="container">
                            <div class="position-r">
                                <label class="banner-sub-head wow" data-animation-in="fadeInUp">Welcome To</label>
                                <h2 class="banner-head wow" data-animation-in="fadeInUp">The <span>khyber pinda Restaurano</span></h2>
                                <p class="banner-desc wow" data-animation-in="fadeInUp">WE HAVE THE GLORY BEGINING IN RESTAURANT BUSINESS</p>
                            </div>
                        </div>
                    </div>
                    <div class="banner-bg text-center" style="background-image: url({{ url('frontend/assets/User/banner-2.jpg') }})">
                        <div class="container">
                            <div class="position-r">
                                <label class="banner-sub-head wow" data-animation-in="fadeInUp">Welcome To</label>
                                <h2 class="banner-head wow" data-animation-in="fadeInUp">The <span>khyber pinda Restaurano</span></h2>
                                <p class="banner-desc wow" data-animation-in="fadeInUp">WE HAVE THE GLORY BEGINING IN RESTAURANT BUSINESS</p>
                            </div>
                        </div>
                    </div>
                </section>
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
                <section class="discover ptb-100">
                    <div class="container">
                        <div class="section-headding text-center">
                            <h1 class="head-title wow fadeInUp">Discover</h1>
                            <h3 class="head-sub-title wow fadeInUp">Most famous restaurant</h3>
                        </div>
                        <div class="row wow fadeInUp">
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="discover-box text-center plr-15">
                                    <img src="http://themes.templatescoder.com/restaurano/html/demo/1-0/images/Breakfast.png" class="discover-img transition" alt="Breakfast">
                                    <label class="discover-title">Breakfast</label>
                                    <p class="discover-desc">Given that it is the first meal of the day, it ought to be loaded with all the nutrients your body needs. In terms of breakfast options, khyber Pinda Resturent  offers a vast range. There are some best breakfast restaurants in Dubai and when someone mentions Dubai best breakfast, your heart begins to get fond of some. </p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="discover-box text-center plr-15">
                                    <img src="http://themes.templatescoder.com/restaurano/html/demo/1-0/images/Lunch.png" class="discover-img transition" alt="Lunch">
                                    <label class="discover-title">Lunch</label>
                                    <p class="discover-desc">Lunch at Khyber Pinda Restaurant offers a moment of culinary delight. With a menu ranging from fresh salads to savory main courses, we invite you to savor a midday break filled with quality flavors and nourishing choices. </p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="discover-box text-center plr-15">
                                    <img src="http://themes.templatescoder.com/restaurano/html/demo/1-0/images/Dinner.png" class="discover-img transition" alt="Dinner">
                                    <label class="discover-title">Dinner</label>
                                    <p class="discover-desc">Join us for a tasty dinner at Khyber Pinda Restaurant. Our menu celebrates delicious flavors and traditions. From appetizers that excite your taste buds to main courses that take you on a flavor journey. Our menu is designed for your comfort and adventure. Come enjoy an evening of tasty food, good company, and happy moments. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="our-story text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 position-i">
                                <img src="http://themes.templatescoder.com/restaurano/html/demo/1-0/images/our-story.jpg" class="our-story-img wow fadeInLeft" alt="our story">
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <div class="our-story-content wow fadeInRight">
                                    <div class="section-headding">
                                        <h2 class="head-title">Our Story</h2>
                                        <h3 class="head-sub-title">The perfect the life and food.</h3>
                                    </div>

                                    <p class="ourstory-desc">At [Khyber Pinda Restaurant], 'Our Story' embodies our profound love for culinary delights and the joy of communal dining. It encapsulates our origins, principles, and a myriad of flavors that have shaped us. The evolution of our humble beginnings into the present day is a testament to our unwavering dedication to exquisite flavors, unparalleled quality, and the creation of unforgettable experiences. What was once a modest start has now blossomed into a heritage of taste, ingenuity, and heartfelt hospitality.</p>
                                    <a href="about" class="button">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="our-menu ptb-100">
                    <div class="container">
                        <div class="section-headding text-center">
                            <h2 class="head-title wow fadeInUp">Our Menu</h2>
                            <h3 class="head-sub-title wow fadeInUp">Explore Our Foods</h3>
                        </div>

                        <div class="row">
                            @if ($datamenu->isEmpty())
                                <tr>
                                    <td colspan="5">No records available</td>
                                </tr>
                            @else
                                @foreach ($datamenu as $data)

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="menu-box wow fadeInUp">
                                            <a href="menu" class="iteam-name">{{ $data->foodname }}</a>
                                            <span class="iteam-price">${{ $data->explanation }}</span>
                                            <p class="iteam-desc"> {{ $data->foodprice }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                            {{-- <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="menu-box wow fadeInUp">
                                    <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/menu.html" class="iteam-name">Green Goodness Spaghetti</a>
                                    <span class="iteam-price">$65.77</span>
                                    <p class="iteam-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor go incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div> --}}
                            {{-- <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="menu-box wow fadeInUp">
                                    <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/menu.html" class="iteam-name">
                                    </a>
                                    <span class="iteam-price">$110.00</span>
                                    <p class="iteam-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor go incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div> --}}
                            {{-- <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="menu-box wow fadeInUp">
                                    <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/menu.html" class="iteam-name">Paleo Stuffed Cabbage</a>
                                    <span class="iteam-price">$26.20</span>
                                    <p class="iteam-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor go incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div> --}}
                            {{-- <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="menu-box wow fadeInUp">
                                    <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/menu.html" class="iteam-name">Sesame chicken spinach salad</a>
                                    <span class="iteam-price">$75.88</span>
                                    <p class="iteam-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor go incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div> --}}
                            {{-- <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="menu-box wow fadeInUp">
                                    <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/menu.html" class="iteam-name">Bhuna Masala Chicken Wings</a>
                                    <span class="iteam-price">$335</span>
                                    <p class="iteam-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor go incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </section>


				<section class="quick-reservation parallex-bg position-r ptb-100" style="background-image: url(http://themes.templatescoder.com/restaurano/html/demo/1-0/images/restaurant.jpg)">
                    <div class="container">
                        @if(session('success'))
                        <script>
                            alert('Order submitted successfully!');
                        </script>
                    @endif
                        <div class="position-r">
                            <div class="section-headding text-center">
                                <h2 class="head-title wow fadeInUp">Quick Order</h2>
                                <h3 class="head-sub-title wow fadeInUp">Order For Your Comfort!</h3>
                            </div>
                            <form class="wow fadeInUp" method="POST" action="{{ route('submitorder') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label class="text-white" for="">Enter your full Name*</label>
                                            <input type="text" class="form-control" name="name" placeholder="Name*" required="">
                                          </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label class="text-white" for="">Email*</label>
                                            <input type="text" class="form-control" name="email" placeholder="Email*" required="">
                                          </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label class="text-white" for="">Phone Nomber*</label>
                                            <input type="text" class="form-control" name="mobilenumber" placeholder="Phone Nomber*" required="">
                                          </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label class="text-white" for="">Enter you Full Address*</label>

                                            <input type="text" class="form-control" name="Address" placeholder="Enter you Full Address" required="">
                                          </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label class="text-white" for="">Enter everything you want*</label>
                                            <input type="text" class="form-control" name="fooditeams" placeholder="Enter everything you want here*" required="">
                                          </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label class="text-white" for="">Any Message <span class="text-muted">(Optional)</span></label>
                                            <input type="message" class="form-control" name="message" placeholder="Message" required="">
                                          </div>
                                    </div>
                                    <div class="text-center form-btn w-100">
                                        <button class="button" type="submit">Order Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>

                <section class="team ptb-100">
                    <div class="container">
                        <div class="section-headding text-center">
                            <h2 class="head-title wow fadeInUp">Our Team</h2>
                            <h3 class="head-sub-title wow fadeInUp">meet with our cook</h3>
                        </div>
                        <div class="team-slider wow fadeInUp">
                            @if ($ourteam->isEmpty())
                                <div>No records available</div>
                            @else
                                @foreach ($ourteam as $teamMember)
                                    <div class="team-box text-center">
                                        <div class="team-box-inner">
                                            <div class="team-img">
                                                <a href="ourteam">
                                                    <img style="max-width: 300px; max-height: 400px;" name="memberimage" src="{{ asset('storage/' . $teamMember->memberimage) }}" alt="{{ $teamMember->membername }}">
                                                </a>
                                            </div>
                                            <div class="team-desc">
                                                <a href="ourteam" name="membername" class="members-name">{{ $teamMember->membername }}</a>
                                                <span name="members-des" class="members-des">{{ $teamMember->membersdes }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </section>


                {{-- <section class="blog bg-color ptb-100">
                    <div class="container">
                        <div class="section-headding text-center">
                            <h2 class="head-title wow fadeInUp">Our Blog</h2>
                            <h3 class="head-sub-title wow fadeInUp">meet with our cook</h3>
                        </div>
                        <div class="blog-slider wow fadeInUp">
                            <div class="blog-slider-inner">
                                <div class="row">
                                    <div class="colxl-6 col-lg-6 col-md-6">
                                        <div class="blog-box flex-center display-flex">
                                            <div class="blog-box-img">
                                                <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/blog-detail.html"><img src="http://themes.templatescoder.com/restaurano/html/demo/1-0/images/blog-1.jpg" alt="How To Cook The Spicy Chinese"></a>
                                            </div>
                                            <div class="blog-box-des">
                                                <span class="blog-date">12 june 2019</span>
                                                <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/blog-detail.html" class="blog-title">How To Cook The Spicy Chinese Noodle For Cold Weather</a>
                                                <p class="blog-des">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem sunt explicabo.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="colxl-6 col-lg-6 col-md-6">
                                        <div class="blog-box flex-center display-flex">
                                            <div class="blog-box-img">
                                                <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/blog-detail.html"><img src="http://themes.templatescoder.com/restaurano/html/demo/1-0/images/blog-2.jpg" alt="How To Cook The Spicy Chinese"></a>
                                            </div>
                                            <div class="blog-box-des">
                                                <span class="blog-date">12 june 2019</span>
                                                <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/blog-detail.html" class="blog-title">How To Cook The Spicy Chinese Noodle For Cold Weather</a>
                                                <p class="blog-des">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem sunt explicabo.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="colxl-6 col-lg-6 col-md-6">
                                        <div class="blog-box flex-center display-flex">
                                            <div class="blog-box-img">
                                                <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/blog-detail.html"><img src="http://themes.templatescoder.com/restaurano/html/demo/1-0/images/blog-3.jpg" alt="How To Cook The Spicy Chinese"></a>
                                            </div>
                                            <div class="blog-box-des">
                                                <span class="blog-date">12 june 2019</span>
                                                <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/blog-detail.html" class="blog-title">How To Cook The Spicy Chinese Noodle For Cold Weather</a>
                                                <p class="blog-des">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem sunt explicabo.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="colxl-6 col-lg-6 col-md-6">
                                        <div class="blog-box flex-center display-flex">
                                            <div class="blog-box-img">
                                                <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/blog-detail.html"><img src="http://themes.templatescoder.com/restaurano/html/demo/1-0/images/blog-4.jpg" alt="How To Cook The Spicy Chinese"></a>
                                            </div>
                                            <div class="blog-box-des">
                                                <span class="blog-date">12 june 2019</span>
                                                <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/blog-detail.html" class="blog-title">How To Cook The Spicy Chinese Noodle For Cold Weather</a>
                                                <p class="blog-des">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem sunt explicabo.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-slider-inner">
                                <div class="row">
                                    <div class="colxl-6 col-lg-6 col-md-6">
                                        <div class="blog-box flex-center display-flex">
                                            <div class="blog-box-img">
                                                <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/blog-detail.html"><img src="http://themes.templatescoder.com/restaurano/html/demo/1-0/images/blog-1.jpg" alt="How To Cook The Spicy Chinese"></a>
                                            </div>
                                            <div class="blog-box-des">
                                                <span class="blog-date">12 june 2019</span>
                                                <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/blog-detail.html" class="blog-title">How To Cook The Spicy Chinese Noodle For Cold Weather</a>
                                                <p class="blog-des">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem sunt explicabo.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="colxl-6 col-lg-6 col-md-6">
                                        <div class="blog-box flex-center display-flex">
                                            <div class="blog-box-img">
                                                <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/blog-detail.html"><img src="http://themes.templatescoder.com/restaurano/html/demo/1-0/images/blog-2.jpg" alt="How To Cook The Spicy Chinese"></a>
                                            </div>
                                            <div class="blog-box-des">
                                                <span class="blog-date">12 june 2019</span>
                                                <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/blog-detail.html" class="blog-title">How To Cook The Spicy Chinese Noodle For Cold Weather</a>
                                                <p class="blog-des">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem sunt explicabo.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="colxl-6 col-lg-6 col-md-6">
                                        <div class="blog-box flex-center display-flex">
                                            <div class="blog-box-img">
                                                <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/blog-detail.html"><img src="http://themes.templatescoder.com/restaurano/html/demo/1-0/images/blog-3.jpg" alt="How To Cook The Spicy Chinese"></a>
                                            </div>
                                            <div class="blog-box-des">
                                                <span class="blog-date">12 june 2019</span>
                                                <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/blog-detail.html" class="blog-title">How To Cook The Spicy Chinese Noodle For Cold Weather</a>
                                                <p class="blog-des">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem sunt explicabo.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="colxl-6 col-lg-6 col-md-6">
                                        <div class="blog-box flex-center display-flex">
                                            <div class="blog-box-img">
                                                <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/blog-detail.html"><img src="http://themes.templatescoder.com/restaurano/html/demo/1-0/images/blog-4.jpg" alt="How To Cook The Spicy Chinese"></a>
                                            </div>
                                            <div class="blog-box-des">
                                                <span class="blog-date">12 june 2019</span>
                                                <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/blog-detail.html" class="blog-title">How To Cook The Spicy Chinese Noodle For Cold Weather</a>
                                                <p class="blog-des">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem sunt explicabo.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-slider-inner">
                                <div class="row">
                                    <div class="colxl-6 col-lg-6 col-md-6">
                                        <div class="blog-box flex-center display-flex">
                                            <div class="blog-box-img">
                                                <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/blog-detail.html"><img src="http://themes.templatescoder.com/restaurano/html/demo/1-0/images/blog-1.jpg" alt="How To Cook The Spicy Chinese"></a>
                                            </div>
                                            <div class="blog-box-des">
                                                <span class="blog-date">12 june 2019</span>
                                                <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/blog-detail.html" class="blog-title">How To Cook The Spicy Chinese Noodle For Cold Weather</a>
                                                <p class="blog-des">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem sunt explicabo.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="colxl-6 col-lg-6 col-md-6">
                                        <div class="blog-box flex-center display-flex">
                                            <div class="blog-box-img">
                                                <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/blog-detail.html"><img src="http://themes.templatescoder.com/restaurano/html/demo/1-0/images/blog-2.jpg" alt="How To Cook The Spicy Chinese"></a>
                                            </div>
                                            <div class="blog-box-des">
                                                <span class="blog-date">12 june 2019</span>
                                                <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/blog-detail.html" class="blog-title">How To Cook The Spicy Chinese Noodle For Cold Weather</a>
                                                <p class="blog-des">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem sunt explicabo.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="colxl-6 col-lg-6 col-md-6">
                                        <div class="blog-box flex-center display-flex">
                                            <div class="blog-box-img">
                                                <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/blog-detail.html"><img src="http://themes.templatescoder.com/restaurano/html/demo/1-0/images/blog-3.jpg" alt="How To Cook The Spicy Chinese"></a>
                                            </div>
                                            <div class="blog-box-des">
                                                <span class="blog-date">12 june 2019</span>
                                                <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/blog-detail.html" class="blog-title">How To Cook The Spicy Chinese Noodle For Cold Weather</a>
                                                <p class="blog-des">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem sunt explicabo.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="colxl-6 col-lg-6 col-md-6">
                                        <div class="blog-box flex-center display-flex">
                                            <div class="blog-box-img">
                                                <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/blog-detail.html"><img src="http://themes.templatescoder.com/restaurano/html/demo/1-0/images/blog-4.jpg" alt="How To Cook The Spicy Chinese"></a>
                                            </div>
                                            <div class="blog-box-des">
                                                <span class="blog-date">12 june 2019</span>
                                                <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/blog-detail.html" class="blog-title">How To Cook The Spicy Chinese Noodle For Cold Weather</a>
                                                <p class="blog-des">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem sunt explicabo.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}

                <div class="testimoniyal pt-100">
                    <div class="container">
                        <div class="wow fadeInUp">
                            <div class="testimoniyal -inner display-flex flex-center">
                                <div class="image-slider">
                                    <div class="testimoniyal-img">
                                        <img src="http://themes.templatescoder.com/restaurano/html/demo/1-0/images/testimoniyal-1.jpg" alt="john Doe">
                                    </div>
                                    <div class="testimoniyal-img">
                                        <img src="http://themes.templatescoder.com/restaurano/html/demo/1-0/images/testimoniyal-2.jpg" alt="john Doe">
                                    </div>
                                    <div class="testimoniyal-img">
                                        <img src="http://themes.templatescoder.com/restaurano/html/demo/1-0/images/testimoniyal-3.jpg" alt="john Doe">
                                    </div>
                                </div>
                                <div class="tet-slider text-center">
                                    <div class="testimoniyal-text">
                                        <span class="quote-test"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                                        <p class="testimoniyal-des">Welcome to our exquisite restaurant, where culinary delights await to tantalize your taste buds. Embark on a culinary journey like no other, where you'll experience a symphony of flavors that will leave you craving for more. At our restaurant, we pride ourselves on three key aspects that set us apart. </p>
                                        <label class="testimoniyal-name">KHYBER PANDA RESTAURANT</label>
                                    </div>
                                    <div class="testimoniyal-text">
                                        <span class="quote-test"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                                        <p class="testimoniyal-des"> Our dedication to crafting delicious and delectable dishes using only the finest and freshest ingredients is unparalleled. Our skilled chefs bring their passion to every plate, creating mouthwatering masterpieces that showcase both creativity and traditional flavors. </p>
                                        <label class="testimoniyal-name">KHYBER PANDA RESTAURANT</label>
                                    </div>
                                    <div class="testimoniyal-text">
                                        <span class="quote-test"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                                        <p class="testimoniyal-des">We offer a cozy and inviting ambiance that transforms dining into an unforgettable experience. With warm lighting, comfortable seating, and attentive service, you'll feel right at home as you savor each bite in an environment designed to soothe your senses. </p>
                                        <label class="testimoniyal-name">KHYBER PANDA RESTAURANT</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </x-slot>


    </x-slot>


</x-userlayout>
