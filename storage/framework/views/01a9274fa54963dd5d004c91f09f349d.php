<?php if (isset($component)) { $__componentOriginal1d8b09f516a2bd0a7b1a06bc4b7eb9ee = $component; } ?>
<?php $component = App\View\Components\Userlayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('userlayout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Userlayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?>  <?php $__env->endSlot(); ?>
     <?php $__env->slot('pagework', null, []); ?> 
         <?php $__env->slot('main', null, []); ?> 
            <div class="main">
                <section class="sub-page-banner position-r" style="background-image: url(http://themes.templatescoder.com/restaurano/html/demo/1-0/images/sub-page-bg-1.jpg)">
                    <div class="container">
                        <div class="sub-page text-center position-r">
                            <h1 class="sub-page-title wow fadeInUp">Our Menu</h1>
                            <p class="sub-page-des wow fadeInUp">At <b><u>Khyber Panda Restaurant</u></b>, we take immense pride in presenting a menu that's not just a collection of dishes, but a testament to our commitment to quality and artistry. Each item on our menu is painstakingly crafted by hand, infused with the dedication of our skilled chefs. From the selection of the freshest ingredients to the careful preparation, every dish showcases the care and attention that goes into creating a culinary experience. </p>
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

                <section class="delicious parallex-bg position-r ptb-100" style="background-image: url(http://themes.templatescoder.com/restaurano/html/demo/1-0/images/vintage.jpg);">
                    <div class="container">
                        <div class="section-headding text-center">
                            <h1 class="head-title wow fadeInUp">Delicious</h1>
                            <h3 class="head-sub-title wow fadeInUp">Four Course Tasting Menu</h3>
                        </div>
                        <div class="menu-tabbing position-r">
                            <ul id="myTabs" class="nav nav-pills nav-justified wow fadeInUp" role="tablist" data-tabs="tabs">
                                <li><a href="#all_items" class="active" data-toggle="tab">All items</a></li>
                                <li><a href="#breakfast" data-toggle="tab">Breakfast</a></li>
                                <li><a href="#lunch" data-toggle="tab">Lunch</a></li>
                                <li><a href="#dinner" data-toggle="tab">Dinner</a></li>
                            </ul>
                            <div class="tab-content wow fadeInUp">
                                <div role="tabpanel" class="tab-pane fade in active show" id="all_items">
                                    <div class="row">
                                        <?php $__currentLoopData = $allmenudeta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="menu-box">
                                                    <a href="#" class="iteam-name"><?php echo e($item->foodname); ?></a>
                                                    <span class="iteam-price">$<?php echo e($item->foodprice); ?></span>
                                                    <p class="iteam-desc"><?php echo e($item->explanation); ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="breakfast">
                                    <div class="row">
                                        <?php $__currentLoopData = $allmenudeta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($item->eatedtime === 'Breakfast'): ?>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="menu-box">
                                                        <a href="#" class="iteam-name"><?php echo e($item->foodname); ?></a>
                                                        <span class="iteam-price">$<?php echo e($item->foodprice); ?></span>
                                                        <p class="iteam-desc"><?php echo e($item->explanation); ?></p>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="lunch">
                                    <div class="row">
                                        <?php $__currentLoopData = $allmenudeta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($item->eatedtime === 'Lunch'): ?>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="menu-box">
                                                        <a href="#" class="iteam-name"><?php echo e($item->foodname); ?></a>
                                                        <span class="iteam-price">$<?php echo e($item->foodprice); ?></span>
                                                        <p class="iteam-desc"><?php echo e($item->explanation); ?></p>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="dinner">
                                    <div class="row">
                                        <?php $__currentLoopData = $allmenudeta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($item->eatedtime === 'Dinner'): ?>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="menu-box">
                                                        <a href="#" class="iteam-name"><?php echo e($item->foodname); ?></a>
                                                        <span class="iteam-price">$<?php echo e($item->foodprice); ?></span>
                                                        <p class="iteam-desc"><?php echo e($item->explanation); ?></p>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
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
<?php /**PATH J:\kpr\resources\views/User/menu.blade.php ENDPATH**/ ?>