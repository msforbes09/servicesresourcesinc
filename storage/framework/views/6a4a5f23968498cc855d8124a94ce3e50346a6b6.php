<section class="mbr-gallery mbr-section mbr-section-nopadding mbr-slider-carousel" id="gallery4-15" data-filter="true" style="background-color: rgb(238, 244, 249); padding-top: 2rem; padding-bottom: 0rem;">
    <!-- Filter -->
    <div class="mbr-gallery-filter container gallery-filter-active tab-menu">
        <ul>
            <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="mbr-gallery-filter-all <?php echo e($key == 0 ? 'active' : ''); ?>" href="#panel-<?php echo e($menu->tag); ?>"><?php echo e($menu->name); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</section>

<section class="mbr-section mbr-section-md-padding mbr-footer footer2 mbr-parallax-background" style="background-image: url(<?php echo e(url('assets/images/background/mbr-5-2000x1333.jpg')); ?>); padding-top: 90px; padding-bottom: 90px;">
    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(0, 0, 0);"></div>
    <div class="container" id="default">
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p>
                   <strong>Contacts</strong><br>
                    <?php echo $branches[0]->phones; ?>
                    <br><br>
                    <strong>Email</strong><br>
                    <?php echo $branches[0]->emails; ?>
                </p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p class="mbr-contacts__text"><strong>Address</strong></p>
                <p><?php echo $branches[0]->address; ?></p>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="mbr-map"><iframe frameborder="0" style="border:0" src="<?php echo e($branches[0]->src_map); ?>" allowfullscreen=""></iframe></div>
            </div>
        </div>
    </div>
    <div class="container" id="branches">
        <div class="row">
            <div class="tabbable">
                <div class="tab-content">
                    <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tab-pane fade" id="panel-<?php echo e($branch->tag); ?>">
                            <div class="mbr-footer-content col-xs-12 col-md-3">
                                <p>
                                    <strong>Contacts</strong><br>
                                    <?php echo $branch->phones; ?>
                                    <br><br>
                                    <strong>Email</strong><br>
                                    <?php echo $branch->emails; ?>
                                </p>
                            </div>
                            <div class="mbr-footer-content col-xs-12 col-md-3">
                                <p class="mbr-contacts__text"><strong>Address</strong></p>
                                <p><?php echo $branch->address; ?></p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="mbr-map"><iframe frameborder="0" style="border:0" src="<?php echo e($branch->src_map); ?>" allowfullscreen=""></iframe></div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                </div>
            </div>
        </div>
    </div>
</section>