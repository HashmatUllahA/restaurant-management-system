<x-userlayout>
    <x-slot name="title">book now</x-slot>
    <x-slot name="pagework">
        <x-slot name="main">
            <div class="main">
                <section class="sub-page-banner position-r" style="background-image: url(http://themes.templatescoder.com/restaurano/html/demo/1-0/images/sub-page-bg-1.jpg)">
                    <div class="container">
                        <div class="sub-page text-center position-r">
                            <h1 class="sub-page-title wow fadeInUp">Book Now</h1>
                            <p class="sub-page-des wow fadeInUp">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                        </div>
                    </div>
                </section>

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
                                    <p class="discover-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="discover-box text-center plr-15">
                                    <img src="http://themes.templatescoder.com/restaurano/html/demo/1-0/images/Lunch.png" class="discover-img transition" alt="Lunch">
                                    <label class="discover-title">Lunch</label>
                                    <p class="discover-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="discover-box text-center plr-15">
                                    <img src="http://themes.templatescoder.com/restaurano/html/demo/1-0/images/Dinner.png" class="discover-img transition" alt="Dinner">
                                    <label class="discover-title">Dinner</label>
                                    <p class="discover-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
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
                                        <p class="testimoniyal-des">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                                        <label class="testimoniyal-name">Rushil Arnold</label>
                                    </div>
                                    <div class="testimoniyal-text">
                                        <span class="quote-test"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                                        <p class="testimoniyal-des">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                                        <label class="testimoniyal-name">John Doe</label>
                                    </div>
                                    <div class="testimoniyal-text">
                                        <span class="quote-test"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                                        <p class="testimoniyal-des">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                                        <label class="testimoniyal-name">Rushil Arnold</label>
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
