<?php if (isset($component)) { $__componentOriginal1d8b09f516a2bd0a7b1a06bc4b7eb9ee = $component; } ?>
<?php $component = App\View\Components\Userlayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('userlayout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Userlayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> Gallery <?php $__env->endSlot(); ?>
     <?php $__env->slot('pagework', null, []); ?> 
         <?php $__env->slot('main', null, []); ?> 
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
                                    <?php $__currentLoopData = $gallerydata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="gallery-img">
                                            <a href="<?php echo e(asset('storage/' . $data->foodimage)); ?>" data-fancybox="gallery" data-caption="<?php echo e($data->foodtime); ?>">
                                                <img style=" max-width: 300px; max-height: 300px; min-width: 300px; min-height: 300px;" src="<?php echo e(asset('storage/' . $data->foodimage)); ?>" alt="<?php echo e($data->foodtime); ?>">
                                            </a>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <div class="clear-fix"></div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="dinner">
                                    <?php $__currentLoopData = $gallerydata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($data->foodtime == 'Dinner'): ?>
                                            <div class="gallery-img">
                                                <a href="<?php echo e(asset('storage/' . $data->foodimage)); ?>" data-fancybox="gallery" data-caption="<?php echo e($data->foodtime); ?>">
                                                    <img style=" max-width: 300px; max-height: 300px; min-width: 300px; min-height: 300px;" src="<?php echo e(asset('storage/public' . $data->foodimage)); ?>" alt="<?php echo e($data->foodtime); ?>">
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <div class="clear-fix"></div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="breakfast">
                                    <?php $__currentLoopData = $gallerydata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($data->foodtime == 'Breakfast'): ?>
                                            <div class="gallery-img">
                                                <a href="<?php echo e(asset('storage/' . $data->foodimage)); ?>" data-fancybox="gallery" data-caption="<?php echo e($data->foodtime); ?>">
                                                    <img style=" max-width: 300px; max-height: 300px; min-width: 300px; min-height: 300px;" src="<?php echo e(asset('storage/' . $data->foodimage)); ?>" alt="<?php echo e($data->foodtime); ?>">
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <div class="clear-fix"></div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="lunch">
                                    <?php $__currentLoopData = $gallerydata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($data->foodtime == 'Lunch'): ?>
                                            <div  class="gallery-img ">
                                                <a href="<?php echo e(asset('storage/' . $data->foodimage)); ?>" data-fancybox="gallery" data-caption="<?php echo e($data->foodtime); ?>">
                                                    <img style=" max-width: 300px; max-height: 300px; min-width: 300px; min-height: 300px;" src="<?php echo e(asset('storage/' . $data->foodimage)); ?>" alt="<?php echo e($data->foodtime); ?>">
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <div class="clear-fix"></div>
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
<?php /**PATH J:\kpr\resources\views/User/gallery.blade.php ENDPATH**/ ?>