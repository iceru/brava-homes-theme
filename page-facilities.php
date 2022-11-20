<?php
/**
 * Template Name: Blog Index
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header(); 
?>
<div class="masterplan">
    <img class="w-100" src="<?php bloginfo('template_directory');?>/images/facilities/masterplan.png" alt="Masterplan">
</div>
<div class="lippo position-relative">
    <div class="bg">
        <img class="w-100" src="<?php bloginfo('template_directory');?>/images/facilities/lippo-bg.png"
            alt="Background">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-7 item-text">
                <div class="content">
                    <div class="bg-border">
                        <img class="w-100"
                            src="<?php bloginfo('template_directory');?>/images/facilities/lippo-border.png"
                            alt="Background">
                    </div>
                    <div class="title">
                        At The Heart of Lippo Village Township
                    </div>
                    <div class="text">
                        Located at the center of Lippo Village Central, an established township with comprehensive
                        facilities and amenities. Brava Homes connects you to our city’s primary education, lifestyle,
                        entertainment venues, and health care enclaves.
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <img class="w-100" src="<?php bloginfo('template_directory');?>/images/facilities/lippo-village.png"
                    alt="Lippo Village Township">
            </div>
        </div>
    </div>
</div>
<div class="map">
    <div class="bg">
        <img class="w-100" src="<?php bloginfo('template_directory');?>/images/units/smart-bg.png" alt="Background">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="img">
                    <img class="w-100" src="<?php bloginfo('template_directory');?>/images/facilities/map.png"
                        alt="Brava Homes Map">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="places">
    <div class="row item">
        <div class="col-12 col-lg-6 item-text orange">
            <div class="bg">
                <img class="w-100" src="<?php bloginfo('template_directory');?>/images/facilities/places-bg.png"
                    alt="Background">
            </div>
            <div class="content">
                <div class="title">
                    Indulge in <br>
                    Your Senses
                </div>
                <div class="text">
                    Enjoy your leisurley activities around the Lippo Village Township
                    <ul>
                        <li>Hive @ Himalaya</li>
                        <li>Citywalk Elvee</li>
                        <li>Supermal Karawaci</li>
                        <li>Maxx Box</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 item-img">
            <img class="w-100" src="<?php bloginfo('template_directory');?>/images/facilities/places-1.png"
                alt="Activities">
        </div>
    </div>
    <div class="row item">
        <div class="col-12 col-lg-6 item-img">
            <img class="w-100" src="<?php bloginfo('template_directory');?>/images/facilities/places-2.png"
                alt="Education">
        </div>
        <div class="col-12 col-lg-6 item-text blue">
            <div class="bg">
                <img class="w-100" src="<?php bloginfo('template_directory');?>/images/facilities/places-bg.png"
                    alt="Background">
            </div>
            <div class="content">
                <div class="title">
                    World Class <br> Education
                </div>
                <div class="text">
                    Primely located at the center of quality education for your loved ones.
                    <ul>
                        <li>Sekolah Pelita Harapan</li>
                        <li>Sekolah Dian Harapan</li>
                        <li>Universitas Pelita Harapan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row item">
        <div class="col-12 col-lg-6 item-text orange">
            <div class="bg">
                <img class="w-100" src="<?php bloginfo('template_directory');?>/images/facilities/places-bg.png"
                    alt="Background">
            </div>
            <div class="content">
                <div class="title">
                    10 Minutes Away to
                    Soetta Airport
                </div>
                <div class="text">
                    Never be late for your flights again and enjoy the convenience of being in close proximity to the
                    airport.
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 item-img">
            <img class="w-100" src="<?php bloginfo('template_directory');?>/images/facilities/places-3.png"
                alt="Airport">
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
                        Digital Brochure
                    </div>
                    <div class="title">
                        Find Out About BRAVA on The Go
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
<?php
get_footer();