<?php $__env->startSection('title', 'Contact'); ?>
<?php $__env->startSection('content'); ?>

<header class="header valign bg-img parallaxie" data-scroll-index="0" data-overlay-dark="4" data-background="img/1200x800.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left caption">
                <hr class="line line-hr-primary animate-box" data-animate-effect="fadeInLeft">
                <h5 class="animate-box" data-animate-effect="fadeInLeft">Quem é a</h5>
                <h1 class="animate-box" data-animate-effect="fadeInLeft">Dra. Patrícia Brandt Schefer</h1>
                <a href="dra-patricia.html" data-scroll-nav="1" class="btn fl-btn animate-box" data-animate-effect="fadeInLeft">Saiba mais</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="arrow bounce text-center">
                    <a href="index.html#about" class=""> <i class="ti-angle-double-down"></i> </a>
                </div>
            </div>
        </div>
    </div>
</header>

<?php echo $__env->make('layouts.contact-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/resources/views/contact/index.blade.php ENDPATH**/ ?>