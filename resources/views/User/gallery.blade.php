<x-userlayout>
    <x-slot name="title">Gallery</x-slot>
    <x-slot name="pagework">
        <x-slot name="main">
            <div class="main">
                <section class="sub-page-banner position-r" style="background-image: url(http://themes.templatescoder.com/restaurano/html/demo/1-0/images/gallery-bg.jpg)">
                    <div class="container">
                        <div class="sub-page text-center position-r">
                            <h1 class="sub-page-title wow fadeInUp">Our Gallery</h1>
                            <p class="sub-page-des wow fadeInUp">Our restaurant's website has a special section called the "Gallery." It's like a photo album that shows off our restaurant. In the Gallery, you can see pictures of the delicious food we serve. The pictures make the food look really good, with lots of colors and details. </p>
                        </div>
                    </div>
                </section>

                <div class="images-gallery ptb-100">
                    <div class="container">
                        <ul id="tabs" class="nav nav-tabs filters-isotope text-center wow fadeInUp pb-50" role="tablist">
                            <li role="presentation"><a href="#all" class="button active" role="tab" data-toggle="tab">See All</a></li>
                            <li role="presentation"><a href="#dinner" class="button" role="tab" data-toggle="tab">Dinner</a></li>
                            <li role="presentation"><a href="#breakfast" class="button" role="tab" data-toggle="tab">Breakfast</a></li>
                            <li role="presentation"><a href="#lunch" class="button" role="tab" data-toggle="tab">Lunch</a></li>
                        </ul>
                        <div class="wow fadeInUp">
                            <div class="gallery-box tab-content">
                                <div role="tabpanel" class="tab-pane fade in active show" id="all">
                                    @foreach ($gallerydata as $data)
                                        <div class="gallery-img">
                                            <a href="{{ asset('storage/' . $data->foodimage) }}" data-fancybox="gallery" data-caption="{{ $data->foodtime }}">
                                                <img style=" max-width: 300px; max-height: 300px; min-width: 300px; min-height: 300px;" src="{{ asset('storage/' . $data->foodimage) }}" alt="{{ $data->foodtime }}">
                                            </a>
                                        </div>
                                    @endforeach
                                    <div class="clear-fix"></div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="dinner">
                                    @foreach ($gallerydata as $data)
                                        @if ($data->foodtime == 'Dinner')
                                            <div class="gallery-img">
                                                <a href="{{ asset('storage/' . $data->foodimage) }}" data-fancybox="gallery" data-caption="{{ $data->foodtime }}">
                                                    <img style=" max-width: 300px; max-height: 300px; min-width: 300px; min-height: 300px;" src="{{ asset('storage/public' . $data->foodimage) }}" alt="{{ $data->foodtime }}">
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="clear-fix"></div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="breakfast">
                                    @foreach ($gallerydata as $data)
                                        @if ($data->foodtime == 'Breakfast')
                                            <div class="gallery-img">
                                                <a href="{{ asset('storage/' . $data->foodimage) }}" data-fancybox="gallery" data-caption="{{ $data->foodtime }}">
                                                    <img style=" max-width: 300px; max-height: 300px; min-width: 300px; min-height: 300px;" src="{{ asset('storage/' . $data->foodimage) }}" alt="{{ $data->foodtime }}">
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="clear-fix"></div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="lunch">
                                    @foreach ($gallerydata as $data)
                                        @if ($data->foodtime == 'Lunch')
                                            <div  class="gallery-img ">
                                                <a href="{{ asset('storage/' . $data->foodimage) }}" data-fancybox="gallery" data-caption="{{ $data->foodtime }}">
                                                    <img style=" max-width: 300px; max-height: 300px; min-width: 300px; min-height: 300px;" src="{{ asset('storage/' . $data->foodimage) }}" alt="{{ $data->foodtime }}">
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="clear-fix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </x-slot>
    </x-slot>


</x-userlayout>
