<?php
/**
 *
 * @package Heratech
 */

?>
<style>
   footer {
            background-color: #11181f; 
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .site-footer__inner {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .site-footer__col-one {
            margin-bottom: 20px;
            margin-right: 20px;
        }

        .site-footer__col-one a {
            color: white;
            text-decoration: none;
        }

        .site-footer__col-one a:hover {
            text-decoration: underline;
              }

        .site-footer__col-two-three-group {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .site-footer__col-two,
        .site-footer__col-three {
            margin: 0 20px;
        }
        .nav-list ul {
            list-style-type: none;
            padding: 0;
        }
        .nav-list ul li a {
            margin-bottom: 10px;
            color: white;
        }
        .social-icons-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .social-icons-list li {
            display: inline-block;
            margin-right: 10px;
        }

        .social-icons-list a {
            color: white;
            text-decoration: none;
            font-size: 20px;
        }

        .credit {
           text-align: center;
           margin-top: 20px;
        }

        .credit p {
          font-size: 14px;
          color: #999;
        }
  
</style>
<footer id="colophon" class="site-footer">
    
<div class="site-footer__inner container container--narrow">

<div class="group">

  <div class="site-footer__col-one">
    <h1 class=""><a href="<?php echo site_url() ?>"><strong>Heratech</strong></a></h1>
    <p><a class="site-footer__link" href="#">contacthera@gmail.com</a></p>
  </div>

  <div class="site-footer__col-two-three-group">
    <div class="site-footer__col-two">
      <h3 class="headline headline--small">Explore</h3>
      <nav class="nav-list">
        <ul>
          <li><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
          <li><a href="<?php echo site_url('/contact-us') ?>">Contact</a></li>
          <li><a href="<?php echo site_url('/services') ?>">Services</a></li>
        </ul>
      </nav>
    </div>

    <div class="site-footer__col-three">
    <h3 class="headline headline--small">Connect With Us!</h3>
    <nav>
      <ul class="min-list social-icons-list group">
        <li><a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        <li><a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      </ul>
    </nav>
  </div>

  </div>
</div>
</div>
        <div class="credit">
            <p>&copy; <?php echo date('Y'); ?> Heratech</p>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>