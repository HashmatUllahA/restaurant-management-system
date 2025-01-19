<?php if (isset($component)) { $__componentOriginal1d8b09f516a2bd0a7b1a06bc4b7eb9ee = $component; } ?>
<?php $component = App\View\Components\Userlayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('userlayout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Userlayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> userhome <?php $__env->endSlot(); ?>
     <?php $__env->slot('pagework', null, []); ?> 
         <?php $__env->slot('main', null, []); ?> 
            <div class="main">


                <section class="home-banner">
                    <div class="banner-bg text-center" style="background-image: url(<?php echo e(url('frontend/assets/User/banner-1.jpg')); ?>)">
                        <div class="container">
                            <div class="position-r">
                                <label class="banner-sub-head wow" data-animation-in="fadeInUp">Welcome To</label>
                                <h2 class="banner-head wow" data-animation-in="fadeInUp">The <span>khyber pinda Restaurano</span></h2>
                                <p class="banner-desc wow" data-animation-in="fadeInUp">WE HAVE THE GLORY BEGINING IN RESTAURANT BUSINESS</p>
                            </div>
                        </div>
                    </div>
                    <div class="banner-bg text-center" style="background-image: url(<?php echo e(url('frontend/assets/User/banner-2.jpg')); ?>)">
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
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Laravel')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
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
                            <?php if($datamenu->isEmpty()): ?>
                                <tr>
                                    <td colspan="5">No records available</td>
                                </tr>
                            <?php else: ?>
                                <?php $__currentLoopData = $datamenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="menu-box wow fadeInUp">
                                            <a href="menu" class="iteam-name"><?php echo e($data->foodname); ?></a>
                                            <span class="iteam-price">$<?php echo e($data->explanation); ?></span>
                                            <p class="iteam-desc"> <?php echo e($data->foodprice); ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                            
                            
                            
                            
                            
                        </div>
                    </div>
                </section>


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

                <section class="team ptb-100">
                    <div class="container">
                        <div class="section-headding text-center">
                            <h2 class="head-title wow fadeInUp">Our Team</h2>
                            <h3 class="head-sub-title wow fadeInUp">meet with our cook</h3>
                        </div>
                        <div class="team-slider wow fadeInUp">
                            <?php if($ourteam->isEmpty()): ?>
                                <div>No records available</div>
                            <?php else: ?>
                                <?php $__currentLoopData = $ourteam; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teamMember): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="team-box text-center">
                                        <div class="team-box-inner">
                                            <div class="team-img">
                                                <a href="ourteam">
                                                    <img style="max-width: 300px; max-height: 400px;" name="memberimage" src="<?php echo e(asset('storage/' . $teamMember->memberimage)); ?>" alt="<?php echo e($teamMember->membername); ?>">
                                                </a>
                                            </div>
                                            <div class="team-desc">
                                                <a href="ourteam" name="membername" class="members-name"><?php echo e($teamMember->membername); ?></a>
                                                <span name="members-des" class="members-des"><?php echo e($teamMember->membersdes); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
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
         <?php $__env->endSlot(); ?>


     <?php $__env->endSlot(); ?>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1d8b09f516a2bd0a7b1a06bc4b7eb9ee)): ?>
<?php $component = $__componentOriginal1d8b09f516a2bd0a7b1a06bc4b7eb9ee; ?>
<?php unset($__componentOriginal1d8b09f516a2bd0a7b1a06bc4b7eb9ee); ?>
<?php endif; ?>
<?php /**PATH J:\kpr\resources\views/User/userhome.blade.php ENDPATH**/ ?>