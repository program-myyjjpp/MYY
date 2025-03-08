<div class="team_area pt-80 pb-75" style="background-image: url(<?php echo e(asset('assets/images/team-bg2.jpg')); ?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text_center mb-50 mt-3">
                    <div class="section_sub_title uppercase mb-3">
                        <h6>TEAM MEMBER</h6>
                    </div>
                    <div class="section_main_title">
                        <h2><?php echo e($information->team[0]['title']); ?></h2>
                    </div>
                    <div class="em_bar">
                        <div class="em_bar_bg"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php for($i=1; $i<=4; $i++): ?>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single_team mb-4">
                        <div class="single_team_thumb">
                            <img class="lozad" data-src="<?php echo e(asset($information->team[$i]['image'])); ?>"
                                 alt="<?php echo e($information->team[$i]['name']); ?>"/>
                            <div class="single_team_icon">
                                <a href="">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="">
                                    <i class="bi bi-twitter-x"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </div>
                        </div>
                        <div class="single_team_content">
                            <h4><?php echo e($information->team[$i]['name']); ?></h4>
                            <span
                                style="display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;"><?php echo e($information->team[$i]['text']); ?></span>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/team/1.blade.php ENDPATH**/ ?>