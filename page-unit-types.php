<?php
/**
 * Template Name: Blog Index
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header(); 
?>
<div class="units-header">
    <div class="row">
        <div class="col-12 col-lg-6 item">
            <div class="img">
                <img class="w-100" src="<?php bloginfo('template_directory');?>/images/units/himalaya.png"
                    alt="Himalaya">
            </div>
            <div class="hover">
                <div class="text">
                    BRAVA <br>
                    Himalaya
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 item">
            <div class="img">
                <img class="w-100" src="<?php bloginfo('template_directory');?>/images/units/diponegoro.png"
                    alt="Diponegoro">
            </div>
            <div class="hover">
                <div class="text">
                    BRAVA <br>
                    Diponegoro
                </div>
            </div>
        </div>
    </div>
</div>
<div class="subsection">
    <div class="bg">
        <img src="<?php bloginfo('template_directory');?>/images/units/bg-subsection.png" alt="Background">
    </div>
    <div class="title">
        A Private Enclave
    </div>
    <div class="text">
        Be the proud owner of this premium cluster in a very artistically done private enclave with an impressive design
        from Tom Elliot and high-quality material selections that compose the state-of-the-art Brava Homes
    </div>
</div>
<div class="image">
    <img src="<?php bloginfo('template_directory');?>/images/units/units-image.png" alt="Brava Homes">
</div>
<?php
get_footer();