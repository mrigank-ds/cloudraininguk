<?php /* Template Name: Home Page Template */ ?>

<?php
get_header();
?>
<!-- Code for banner section -->
<?php
if (have_rows('home_page_banner')):
    the_row();
    $banner_title = get_sub_field("banner_title");
    $banner_description = get_sub_field("banner_description");
    $banner_cta_text = get_sub_field("banner_cta_text");
    $banner_cta_link = get_sub_field("banner_cta_link");
    $banner_image = get_sub_field("banner_image");
    ?>
    <div class="heroWrapTop" style="background-image: url('<?php echo $banner_image ?>');">
        <section>
            <div class="Container">
                <div class="HeroBanner">
                    <div class="content">
                        <?php if ($banner_title) { ?>
                            <?php echo '<h1>' . esc_html($banner_title) . '</h1>'; ?>
                        <?php } ?>
                        <?php if ($banner_description) { ?>
                            <?php echo '<h3>' . esc_html($banner_description) . '</h3>'; ?>
                        <?php } ?>
                        <?php if ($banner_cta_text && $banner_cta_link) { ?>
                            <?php echo '<a class="secondaryBtn" href="' . esc_url($banner_cta_link) . '">' . esc_html($banner_cta_text) . '</a>'; ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
endif;
?>
<!-- Code for banner section - ends -->

<!-- Slider section -->
<section>
<div class="container">
        <div class="getInTouch">
            <div class="contactFormRight workForm">
                <?php echo do_shortcode('[metaslider id="45"]'); ?>
            </div>
        </div>
    </div>
</section>
<!-- Slider Section -->

<!-- Our Mission Section -->
<?php
if (have_rows('our_mission')):
    the_row();
    $mission_title = get_sub_field('mission_title');
    $mission_text = get_sub_field('mission_text');
    $background_image = get_sub_field('background_image');
    ?>
    <?php if ($mission_title && $mission_text && $background_image) { ?>
    <section class="locationBg" style="background-image: url('<?php echo $background_image ?>');" >
        <div class="container">
            
                <div class="ourMission" id="our-mission">
                    <?php echo '<h2>' . esc_html($mission_title) . '</h2>' ?>
                    <?php echo '<p>' . $mission_text . '</p>'; ?>
                </div>
            
        </div>
    </section>
    <?php } ?>
    <?php
    endif;
?>
<!-- Contact Us Form section -->
<section>
    <div class="container">
        <div class="getInTouch">
            <div class="touchLeft">
                <h2 id="contact-us">Contact Us</h2>
            </div>
            <div class="contactFormRight workForm">
                <?php echo do_shortcode('[contact-form-7 id="a1ab22a" title="Contact form 1"]'); ?>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us Form section ends -->


<?php
get_footer();
?>