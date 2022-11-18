<?php
/**
 * Template Name: Blog Index
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header(); 
?>
<div class="container-fluid">
    <div class="row about-header">
        <div class="col-12 col-lg-6 about-header-img">
            <img class="w-100" src="<?php bloginfo('template_directory');?>/images/about/about-header.png" alt="About">
        </div>
        <div class="col-12 col-lg-6 about-header-text">
            <div class="bg">
                <img src="<?php bloginfo('template_directory');?>/images/about/about-header-bg.png" alt="About">
            </div>
            <div class="content">
                <div class="subtitle">
                    Achieve Your Dream Home at
                </div>
                <h class="title">
                    BRAVA Homes
                </h>
                <div class="text">
                    Brava means well done for your achievements in life. It is a reward for someone who already achieves
                    a
                    certain level of success in life.
                </div>
            </div>
        </div>
    </div>

</div>
<div class="designed">
    <div class="bg">
        <img src="<?php bloginfo('template_directory');?>/images/about/thomas-bg.png" alt="About">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <img class="w-100 thomas" src="<?php bloginfo('template_directory');?>/images/about/thomas.png"
                    alt="Thomas Elliot">
            </div>
            <div class="col-12 col-lg-6 designed-text">
                <div class="bg-text">
                    <img class="w-100 thomas" src="<?php bloginfo('template_directory');?>/images/about/box-thomas.png">
                </div>
                <div class="content">
                    <div class="title">
                        Masterfully <br> Designed by <br> Thomas Elliott
                    </div>
                    <div class="text">
                        Providing spacious living arrangement, tranquility in green urban open spaces and elegance, to
                        add
                        to the beauty pleasure created by a master architect Tom Elliott. We align our design to create
                        not
                        only 'accrssible luxury' homes of good quality, but also functional and sustainable. value for
                        money, and yet proud to own and show for the owners.
                    </div>
                    <div class="quotes">
                        “I designed Brava when home becomes more important than ever, especially at this time where our
                        home
                        is not only a place for work and school but also a place for the entire family to rest and
                        relax”
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=" gallery">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="title">
                    Gallery
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et erat porta, imperdiet lectus
                    finibus,
                    rhoncus nunc. Nam vitae dignissim ex. Pellentesque et felis ac metus interdum maximus id id
                    augue.
                </div>
            </div>
        </div>
    </div>
    <div class="images">
        <div class="col-6 col-lg-3">
            <img src="" alt="">
        </div>
    </div>
</div>
<div class="video">
    <div class="container">
        <div class="title">
            Video
        </div>
        <div class="video-content">

        </div>
    </div>
</div>
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
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
                    fermentum nisl blandit. Fusce elementum nec mi sit amet maximus. In et turpis non justo maximus
                    pharetra.
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();