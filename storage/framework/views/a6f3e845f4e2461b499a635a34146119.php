<?php $__env->startSection('title','Home'); ?>
<?php $__env->startSection('content'); ?>

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 px-0" style="margin-bottom: 90px;">
        <div class="row mx-0 align-items-center">
            <div class="col-lg-6 px-md-5 text-center text-lg-left">
                <h1 class="display-2 text-uppercase mb-3"><?php echo e(get_setting('home_page_title')); ?>.</h1>
                <h3><?php echo e(get_setting('home_page_sub_title')); ?></h3>
                <br>
                <br>
                <br>
                <br>
                <p class="text-dark mb-4"><?php echo get_setting('hero_description'); ?></p>

                <a href="" class="btn btn-dark text-uppercase mt-1 py-3 px-5">Learn More</a>
            </div>
            <div class="col-lg-6 px-0 text-right">
                <img class="img-fluid mt-5 mt-lg-0" src="<?php echo e(get_setting('hero_image') ? asset(get_setting('hero_image')) : asset('images/default.jpg')); ?>" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid mb-4 mb-lg-0" src="<?php echo e(asset(get_setting('about_image') ?? 'images/default.jpg')); ?>" alt="">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-4 text-uppercase mb-4"><?php echo e(get_setting('about_title')); ?></h1>
                    <p class="mb-4"><?php echo get_setting('about_description'); ?></p>
                    <a href="<?php echo e(get_setting('about_link')); ?>" class="btn btn-primary text-uppercase py-3 px-5">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid py-5" id="service">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Our services (সেবা সমুহ)</h1>
            <div class="row">
                <?php $__currentLoopData = \App\Models\Service::where('status',1)->latest()->limit(8)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 mb-2">
                        <div class="service-item rounded p-5 mb-4">
                            <div class="" style="width: 80px;height: 80px;border-radius: 50px;overflow: hidden;">
                                <img style="width: 100%;height: 100%;" src="<?php echo e(asset($service->image)); ?>" alt="">
                            </div>

                            <a href="<?php echo e(route('single-service',$service->slug)); ?>"><h5 class="text-uppercase mb-4" style="color: #686A6F;"> <?php echo e($service->title); ?><span class="d-block text-body"></span></h5></a>
                            <small class="m-0"><?php echo Str::limit($service->description,80); ?></small>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Portfolio Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5"> Gallery (প্রোগ্রামের ছবি )</h1>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-dark text-uppercase py-2 px-4 active" data-filter="*">
                            <i class="fa fa-star text-primary mr-2"></i>All
                        </li>
                        <li class="btn btn-outline-dark text-uppercase py-2 px-4" data-filter=".first">
                            <i class="fa fa-laptop-code text-primary mr-2"></i>Design
                        </li>
                        <li class="btn btn-outline-dark text-uppercase py-2 px-4" data-filter=".second">
                            <i class="fa fa-mobile-alt text-primary mr-2"></i>Development
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="<?php echo e(asset('/')); ?>assets/frontend/img/portfolio-1.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="<?php echo e(asset('/')); ?>assets/frontend/img/portfolio-1.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="<?php echo e(asset('/')); ?>assets/frontend/img/portfolio-2.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="<?php echo e(asset('/')); ?>assets/frontend/img/portfolio-2.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="<?php echo e(asset('/')); ?>assets/frontend/img/portfolio-3.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="<?php echo e(asset('/')); ?>assets/frontend/img/portfolio-3.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="<?php echo e(asset('/')); ?>assets/frontend/img/portfolio-4.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="<?php echo e(asset('/')); ?>assets/frontend/img/portfolio-4.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="<?php echo e(asset('/')); ?>assets/frontend/img/portfolio-5.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="<?php echo e(asset('/')); ?>assets/frontend/img/portfolio-3.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="<?php echo e(asset('/')); ?>assets/frontend/img/portfolio-6.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="<?php echo e(asset('/')); ?>assets/frontend/img/portfolio-4.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5 px-0">
        <div class="row mt-5 mx-0">
            <div class="col-12 px-0" style="height: 500px;">
                <div class="position-relative h-100">
                    <?php echo get_setting('contract_map'); ?>

                </div>
            </div>
        </div>
        <div class="row mx-0 justify-content-center" style="margin-top: -200px;">
            <div class="col-lg-6 col-md-8 col-sm-10 px-0">
                <div class="contact-form bg-white rounded p-5">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="control-group">
                                    <input type="text" class="form-control bg-light border-0 p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="control-group">
                                    <input type="email" class="form-control bg-light border-0 p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control bg-light border-0 p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control bg-light border-0 py-3 px-4" rows="5" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary text-uppercase py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php\Banglasoft\basic\htdocs\Therapylabonline\resources\views/frontend/pages/home/home.blade.php ENDPATH**/ ?>