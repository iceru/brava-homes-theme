<?php
/**
 * Template Name: Blog Index
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header(); 

?>
<div class="unit-header">
    <div class="bg">
        <img src="<?php echo get_field('header_image') ?>" alt="Background">
    </div>
    <div class="logo">
        <img src="<?php echo get_field('unit_logo') ?>" alt="<?php echo get_field('title') ?>">
    </div>
</div>
<div class="unit-types"
    style="background-color: <?php echo get_field('background_color') === 'orange' ? '#BE5D39' : '#1C3545' ?>">
    <div class="bg">
        <img src="<?php bloginfo('template_directory');?>/images/unit/unit-bg.png" alt="Background">
    </div>
    <div class="container">
        <div class="header row">
            <div class="col-12 col-lg-4">
                <div class="title">
                    <?php echo get_field('title') ?>
                </div>

            </div>
            <div class="col-12 col-lg-8">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <div class="name">Types</div>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="types-1-tab" data-bs-toggle="pill" data-bs-target="#types-1"
                            type="button" role="tab" aria-controls="types-1" aria-selected="true">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Profile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Contact</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="types-1" role="tabpanel" aria-labelledby="types-1-tab"
                tabindex="0">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="row">
                            <div class="col-12 type">
                                <div class="subtitle">Type</div>
                                <div class="title">
                                    C017
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="subtitle">Land</div>
                                <div class="title">
                                    224,6 m&sup2;
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="subtitle">Building</div>
                                <div class="title">
                                    190 m&sup2;
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                tabindex="0">
                ...</div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                tabindex="0">
                ...</div>
        </div>
    </div>

</div>
<?php
get_footer();