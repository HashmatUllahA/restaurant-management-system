<?php if (isset($component)) { $__componentOriginal1d8b09f516a2bd0a7b1a06bc4b7eb9ee = $component; } ?>
<?php $component = App\View\Components\Userlayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('userlayout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Userlayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> about pkr <?php $__env->endSlot(); ?>
     <?php $__env->slot('pagework', null, []); ?> 
         <?php $__env->slot('QuickOrder', null, []); ?> 
         <?php $__env->slot('main', null, []); ?> 
            <div class="main">
		<section class="sub-page-banner position-r" style="background-image: url(http://themes.templatescoder.com/restaurano/html/demo/1-0/images/sub-page-bg-1.jpg)">
			<div class="container">
				<div class="sub-page text-center position-r">
					<h1 class="sub-page-title wow fadeInUp">About Us</h1>
					<p class="sub-page-des wow fadeInUp">At Khybar Panda Restaurant, we believe that every dining experience should be a journey – a journey through flavors, cultures, and shared moments. Our restaurant is more than just a place to eat; it's a canvas where culinary artistry meets heartfelt hospitality. With every dish we serve and every smile we share, we strive to create a memorable experience that lingers on your taste buds and in your memories.</p>
				</div>
			</div>
		</section>

		<section class="about-discover bg-color ptb-100 text-center">
			<div class="container">
				<div class="section-headding text-center">
                    <h2 class="head-title wow fadeInUp">Welcome</h2>
                    <h3 class="head-sub-title wow fadeInUp">Discover Our Story</h3>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 wow fadeInUp">
                        <h3 class="history-title">Our Journey</h3>
                        <p class="ourstory-desc">Nestled in the heart of <span class="font-weight-bold">Icad, Mussafah, Abu Dhabi</span>, Khybar Panda Restaurant is a reflection of our passion for exceptional food, warm ambiance, and the joy of bringing people together. From the moment you step through our doors, you become a part of our story, and we're thrilled to share it with you.</p>
                        <p class="ourstory-desc">From our expert chefs who infuse each dish with creativity and precision, to our dedicated service staff who ensure every need is met, our team is the heart and soul of Khybar Panda Restaurant. With a commitment to quality, a flair for innovation, and a passion for serving smiles, we invite you to join us on a journey that's filled with taste, tradition, and a touch of the extraordinary.</p>
                    </div>
                </div>

			</div>
		</section>

		<div class="history-gallery wow fadeInUp">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6">
						<img src="http://themes.templatescoder.com/restaurano/html/demo/1-0/images/history-1.jpg" alt="history">
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6">
						<img src="http://themes.templatescoder.com/restaurano/html/demo/1-0/images/history-2.jpg" alt="history">
					</div>
				</div>
			</div>
		</div>
        

        <section class="quick-reservation parallex-bg position-r ptb-100" style="background-image: url(http://themes.templatescoder.com/restaurano/html/demo/1-0/images/restaurant.jpg)">
            <div class="container">
                <?php if(session('success')): ?>
                <script>
                    alert('Order submitted successfully!');
                </script>
            <?php endif; ?>
                <div class="position-r">
                    <div class="section-headding text-center">
                        <h2 class="head-title wow fadeInUp">Quick Order</h2>
                        <h3 class="head-sub-title wow fadeInUp">Order For Your Comfort!</h3>
                    </div>
                    <form class="wow fadeInUp" method="POST" action="<?php echo e(route('submitorder')); ?>">
                        <?php echo csrf_field(); ?>
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

	<footer class="position-r parallex-bg" style="background-image: url(http://themes.templatescoder.com/restaurano/html/demo/1-0/images/footer-bg.jpg)">
		<div class="container">
			<div class="wow fadeInUp">
				<div class="newsletter position-r">
					<div class="row">
						<div class="col-xl-7 col-lg-7 col-md-7 display-flex flex-center">
							<div class="news-letter w-100">
								<h2 class="newsletter-title">Subscribe to our news letter</h2>
							</div>
						</div>
						<div class="col-xl-5 col-lg-5 col-md-5">
							<div class="news-letter-form">
								<form>
									<div class="form-group">
								    	<input type="text" class="form-control" placeholder="Enter your email address" required="">
							  		</div>
							  		<button><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
             <?php $__env->endSlot(); ?>
             <?php $__env->endSlot(); ?>
         <?php $__env->endSlot(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1d8b09f516a2bd0a7b1a06bc4b7eb9ee)): ?>
<?php $component = $__componentOriginal1d8b09f516a2bd0a7b1a06bc4b7eb9ee; ?>
<?php unset($__componentOriginal1d8b09f516a2bd0a7b1a06bc4b7eb9ee); ?>
<?php endif; ?>
<?php /**PATH J:\kpr\resources\views/User/about.blade.php ENDPATH**/ ?>