<?php get_header(); ?>
<style>
    .team-members {
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .team-member {
        text-align: center;
    }

    .team-member img {
        width: 200px;
        height: 200px;
    }

    .caption {
        font-weight: bold;
    }
 </style>   



<div class="wp-block-group alignfull has-global-padding is-layout-constrained wp-block-group-is-layout-constrained">
<div class="wp-block-columns alignwide is-layout-flex wp-container-core-columns-is-layout-2 wp-block-columns-is-layout-flex" style="margin-bottom:var(--wp--preset--spacing--70)">
<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:66%">
<figure class="wp-block-image size-large"><img decoding="async" src="https://st2.depositphotos.com/1930953/8703/i/950/depositphotos_87031426-stock-photo-asian-and-caucasian-businessmen-shaking.jpg" alt="" class="wp-image-12311" style="aspect-ratio:3/2;object-fit:cover"></figure>
</div>
<div class="wp-block-column is-vertically-aligned-bottom is-layout-flow wp-container-core-column-is-layout-4 wp-block-column-is-layout-flow">
<h2 class="wp-block-heading has-large-font-size bold">Hi, we're Heratech.</h2>
<p>From the spark of an idea to the realization of a dream, the journey of Heratech began with a single moment of inspiration and a fierce determination to succeed.</p>
</div>
</div>
</div>

<div class="wp-block-group has-global-padding is-layout-constrained wp-block-group-is-layout-constrained" style="margin-bottom:var(--wp--preset--spacing--70)">
<h2 class="wp-block-heading">Our story</h2>



<p>Every great journey begins with a story. Ours is no different. Established in 2023, we embarked on a mission to provide high-quality services at reasonable prices. What started as a humble beginning has since grown into a thriving enterprise, thanks to the hard work, dedication, and unwavering support of our team and community.</p>



<h2 class="wp-block-heading">Our approach</h2>



<p>Our vision is to stand as the foremost provider of strategic solutions, consistently delivering exceptional and personalized services. Whether you’re starting a new venture, or poised for expansion, our commitment is to collaborate and propel you towards your goals.</p>
</div>

<h2 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--70)">Meet Our Team</h2>
    <div class="team-members">
        <div class="team-member">
            <img src="<?php echo get_template_directory_uri(); ?>/images/kenji.jpg" alt="Kenji">
            <p class="caption">Kenji Fleming</p>
        </div>
        <div class="team-member">
            <img src="<?php echo get_template_directory_uri(); ?>/images/branden.png" alt="Branden">
            <p class="caption">Branden Wheat</p>
        </div>
    </div>
</div>

<?php get_footer(); ?>