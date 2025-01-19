<?php if (isset($component)) { $__componentOriginal1d8b09f516a2bd0a7b1a06bc4b7eb9ee = $component; } ?>
<?php $component = App\View\Components\Userlayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('userlayout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Userlayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> Contect kpr <?php $__env->endSlot(); ?>
     <?php $__env->slot('pagework', null, []); ?> 
         <?php $__env->slot('main', null, []); ?> 
            <div class="main">
                <section class="sub-page-banner position-r" style="background-image: url(http://themes.templatescoder.com/restaurano/html/demo/1-0/images/team-bg.jpg)">
                    <div class="container">
                        <div class="sub-page text-center position-r">
                            <h1 class="sub-page-title wow fadeInUp">Contact us</h1>
                            <p class="sub-page-des wow fadeInUp">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                        </div>
                    </div>
                </section>

                <div class="contact-part ptb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="contact-box bg-color text-center">
                                    <span class="contact-icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                    <div class="contact-des">
                                        <label class="contact-device">Phone</label>
                                        <ul>
                                            <li>
                                                <a href="tel:0502384001">UAE: 0502384001</a>
                                            </li>
                                            <li>
                                                <a href="tel:0504140699">UAE: 0504140699</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="contact-box adress bg-color text-center">
                                    <span class="contact-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                    <div class="contact-des">
                                        <label class="contact-device">Address</label>
                                        <ul>
                                            <li>Icad, Mussafah, Abu Dhabi</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="contact-box bg-color text-center">
                                    <span class="contact-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    <div class="contact-des">
                                        <label class="contact-device">Email</label>
                                        <ul>
                                            
                                            <li>
                                                <a href="mailto:Sales@example.com">khyberpinda@gmial.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-map pb-100">
                    <div class="container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3635.1164536729425!2d54.48850247535433!3d24.342435778271128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjTCsDIwJzMyLjgiTiA1NMKwMjknMjcuOSJF!5e0!3m2!1sen!2s!4v1692693380621!5m2!1sen!2s" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        
                </div>
                <?php if(session('success')): ?>
                <div>
                    You are contact is submitted successfully!
                </div>
            <?php endif; ?>

                <section class="contact-page pb-100">
                    <div class="container">
                        <div class="position-r">
                            <div class="section-headding text-center">
                                <h2 class="head-title wow fadeInUp">Contact Us</h2>
                            </div>
                            <form id="contactForm" class="wow fadeInUp" action="<?php echo e(route('storecontect')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name*" required="">
                                          </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control" placeholder="Email*" required="">
                                          </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="Subject" class="form-control" placeholder="Subject*" required="">
                                          </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phoneno" class="form-control" placeholder="Phone Nomber*" required="">
                                          </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" placeholder="Massege"></textarea>
                                          </div>
                                    </div>
                                    <div class="text-center form-btn w-100">
                                        <button  type="submit" id="submitFormButton" class="button">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>


         <?php $__env->endSlot(); ?>
     <?php $__env->endSlot(); ?>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1d8b09f516a2bd0a7b1a06bc4b7eb9ee)): ?>
<?php $component = $__componentOriginal1d8b09f516a2bd0a7b1a06bc4b7eb9ee; ?>
<?php unset($__componentOriginal1d8b09f516a2bd0a7b1a06bc4b7eb9ee); ?>
<?php endif; ?>
<?php /**PATH J:\kpr\resources\views/User/contect.blade.php ENDPATH**/ ?>