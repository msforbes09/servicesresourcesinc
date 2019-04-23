<section class="mbr-cards mbr-section mbr-section-nopadding" id="features7-c" style="background-color: rgb(255, 255, 255);">
    <div class="mbr-cards-row row">

        <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 80px; padding-bottom: 80px;">
                <div class="container">
                    <div class="card cart-block">
                        <div class="card-img iconbox">
                            <i class="fa <?php echo e($card->icon); ?>" style="color:#fff; font-size: 54px; margin-top: 20%;"></i>
                        </div>
                        <div class="card-block">
                            <h4 class="card-title"><?php echo e($card->title); ?></h4>
                            <p class="card-text"><?php echo e($card->text); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</section>