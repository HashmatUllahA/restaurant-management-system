<x-userlayout>
    <x-slot name="title">our team pkr</x-slot>
    <x-slot name="pagework">
        <x-slot name="main">
            <div class="main">
                <section class="sub-page-banner position-r" style="background-image: url(http://themes.templatescoder.com/restaurano/html/demo/1-0/images/team-bg.jpg)">
                    <div class="container">
                        <div class="sub-page text-center position-r">
                            <h1 class="sub-page-title wow fadeInUp">Our Team</h1>
                            <p class="sub-page-des wow fadeInUp">Welcome to Khybar Panda Restaurant, where our team embodies the culinary spirit that defines our establishment. With a harmony of talents ranging from our skilled chefs, creative mixologists, attentive service staff, and dedicated management, we unite to curate an exceptional dining experience. Every plate we serve reflects the passion and expertise of our team, ensuring that your visit is a memorable journey into the heart of our flavors and hospitality. </p>
                        </div>
                    </div>
                </section>

                <div class="team-list team-page pt-100">
                    <div class="container">
                        <div class="row">
                            @if ($ourteam->isEmpty())
                                <div>No records available</div>
                            @else
                                @foreach ($ourteam as $teamMember)
                                    <div class="col-xl-3 col-lg-3 col-md-4">
                                        <div class="team-box text-center">
                                            <div class="team-box-inner">
                                                <div class="team-img">
                                                    <img style="max-width: 300px; max-height: 400px;" name="memberimage" src="{{ asset('storage/' . $teamMember->memberimage) }}" alt="{{ $teamMember->membername }}">

                                                    {{-- <a href="javascript:void(0)"><img src="http://themes.templatescoder.com/restaurano/html/demo/1-0/images/team-1.jpg" alt="Jamie Oliver"></a> --}}
                                                </div>
                                                <div class="team-desc">
                                                    <a href="javascript:void(0)" class="members-name">{{ $teamMember->membername }}</a>
                                                    <span class="members-des">{{ $teamMember->membersdes }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

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

            </div>
        </x-slot>
    </x-slot>


</x-userlayout>
