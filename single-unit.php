<?php
/**
 * Template Name: Blog Index
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header();

for ($x = 0; $x <= 6; $x++) {
    ${'type'.$x} = get_field('types_'.$x);
}
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
            <div class="col-12 col-lg-5">
                <div class="title">
                    <?php echo get_field('title') ?>
                </div>

            </div>
            <div class="col-12 col-lg-7">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <div class="name">Types</div>
                    <?php for ($x = 1; $x < 7; $x++) {
                    ?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?php echo $x === 1 ? 'active' : '' ?>" id="types-<?php echo $x ?>-tab"
                            data-bs-toggle="pill" data-bs-target="#types-<?php echo $x ?>" type="button" role="tab"
                            aria-controls="types-<?php echo $x ?>"
                            aria-selected="true"><?php echo  ${'type'.$x}['title_type'] ?></button>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <?php for ($x = 1; $x < 7; $x++) {
                    ?>
            <div class="tab-pane fade show tab-<?php echo $x ?>  <?php echo $x === 1 ? 'active' : '' ?>"
                id="types-<?php echo $x ?>" role="tabpanel" aria-labelledby="types-<?php echo $x ?>-tab" tabindex="0">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="row">
                            <div class="col-12 type">
                                <div class="subtitle">Type</div>
                                <div class="title">
                                    <?php echo  ${'type'.$x}['title_type'] ?>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="subtitle">Land</div>
                                <div class="title">
                                    <?php echo  ${'type'.$x}['land'] ?> m&sup2;
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="subtitle">Building</div>
                                <div class="title">
                                    <?php echo  ${'type'.$x}['building'] ?> m&sup2;
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="images-unit">
                            <?php if(${'type'.$x}['images']['image_1']) { ?>
                            <div class="item">
                                <img class="w-100" src="<?php echo ${'type'.$x}['images']['image_1'] ?>" alt="">
                            </div>
                            <?php } ?>

                            <?php if(${'type'.$x}['images']['image_2']) { ?>
                            <div class="item">
                                <img class="w-100" src="<?php echo ${'type'.$x}['images']['image_2'] ?>" alt="">
                            </div>
                            <?php } ?>
                            <?php if(${'type'.$x}['images']['image_3']) { ?>
                            <div class="item">
                                <img class="w-100" src="<?php echo ${'type'.$x}['images']['image_3'] ?>" alt="">
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

</div>

<div class="testimony">
    <div class="bg">
        <img src="<?php bloginfo('template_directory');?>/images/unit/testimony-bg.png" alt="Background">
    </div>
    <div class="container-fluid">
        <div class="items">
            <div class="item-img">
                <div class="ratio">
                    <img class="w-100" src="<?php echo get_field('gallery')['image_1'] ?>" alt="">
                </div>
            </div>
            <div class="item-img">
                <div class="ratio">
                    <img class="w-100" src="<?php echo get_field('gallery')['image_2'] ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    What They Say About BRAVA
                </div>
            </div>
        </div>
        <div class="row ms-3">
            <div class="col-12 col-lg-6 item-container">
                <div class="item">
                    <div class="img">
                        <img src="<?php echo get_field('testimony_1')['image'] ?>" alt="">
                    </div>
                    <div class="text">
                        <?php echo get_field('testimony_1')['testimony_text'] ?>
                    </div>
                    <div class="name">
                        <?php echo get_field('testimony_1')['name'] ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 item-container">
                <div class="item">
                    <div class="img">
                        <img src="<?php echo get_field('testimony_2')['image'] ?>" alt="">
                    </div>
                    <div class="text">
                        <?php echo get_field('testimony_2')['testimony_text'] ?>
                    </div>
                    <div class="name">
                        <?php echo get_field('testimony_2')['name'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact">
    <div class="graphics">
        <img src="<?php bloginfo('template_directory');?>/images/graphics/end-page.png" alt="Explore">
    </div>
    <div class="container">
        <div class="row ">
            <div class="col-12 col-lg-6">
                <div class="contact-text">
                    <div class="subtitle">
                        Inquiries
                    </div>
                    <div class="title">
                        Begin Your Elevated Lifestyle Now
                    </div>
                    <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed condimentum elit a quam
                        scelerisque,
                        non
                        fermentum nisl blandit. Fusce elementum nec mi sit amet maximus. In et turpis non justo
                        maximus
                        pharetra.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.images-unit').slick({
            infinite: true,
        });

        $('.items').slick();
    });

    $('button[data-bs-toggle="pill"]').on('shown.bs.tab', function (e) {
        $('.images-unit').slick('setPosition');
    })
</script>
<?php
get_footer();