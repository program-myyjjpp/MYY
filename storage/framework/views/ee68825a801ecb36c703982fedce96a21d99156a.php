<div class="accordion_area pt-90 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text_center mb-50">
                    <div class="section_main_title">
                        <h2><?php echo e($information->faq[0]['title']); ?></h2>
                    </div>
                    <div class="em_bar">
                        <div class="em_bar_bg"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="panel-group default symb" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading mb-3">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#ac1">
                                    <i class="fa fa-check-circle"></i>
                                    <?php echo e($information->faq[1]['name']); ?>

                                </a>
                            </h4>
                        </div>
                        <div id="ac1" class="panel-collapse in">
                            <div class="panel-body pl-4 pr-4">
                                <p>
                                    <?php echo e($information->faq[1]['text']); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading mb-3">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#ac2">
                                    <i class="fa fa-check-circle"></i>
                                    <?php echo e($information->faq[2]['name']); ?>

                                </a>
                            </h4>
                        </div>
                        <div id="ac2" class="panel-collapse collapse">
                            <div class="panel-body pl-4 pr-4">
                                <p>
                                    <?php echo e($information->faq[2]['text']); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading mb-3">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#ac3">
                                    <i class="fa fa-check-circle"></i>
                                    <?php echo e($information->faq[3]['name']); ?>

                                </a>
                            </h4>
                        </div>
                        <div id="ac3" class="panel-collapse collapse">
                            <div class="panel-body pl-4 pr-4">
                                <p>
                                    <?php echo e($information->faq[3]['text']); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="panel-group default symb" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading mb-3">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#ac4">
                                    <i class="fa fa-check-circle"></i>
                                    <?php echo e($information->faq[4]['name']); ?>

                                </a>
                            </h4>
                        </div>
                        <div id="ac4" class="panel-collapse in">
                            <div class="panel-body pl-4 pr-4">
                                <p>
                                    <?php echo e($information->faq[4]['text']); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading mb-3">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#ac5">
                                    <i class="fa fa-check-circle"></i>
                                    <?php echo e($information->faq[5]['name']); ?>

                                </a>
                            </h4>
                        </div>
                        <div id="ac5" class="panel-collapse collapse">
                            <div class="panel-body pl-4 pr-4">
                                <p>
                                    <?php echo e($information->faq[5]['text']); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading mb-3">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#ac6">
                                    <i class="fa fa-check-circle"></i>
                                    <?php echo e($information->faq[6]['name']); ?>

                                </a>
                            </h4>
                        </div>
                        <div id="ac6" class="panel-collapse collapse">
                            <div class="panel-body pl-4 pr-4">
                                <p>
                                    <?php echo e($information->faq[6]['text']); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/EServer/www/www.demo.com/resources/views/faq/1.blade.php ENDPATH**/ ?>