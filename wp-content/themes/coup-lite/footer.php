<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coup
 */

?>
<style>
    p{
        padding: 0;
        margin: 0;
        color: #d1d1d1;
    }
    @font-face {
        font-family: "HKGrotesk";
        src: url("HKGrotesk-Regular.otf");
    }
    body{
        margin: 0;
        padding: 0;
    }
    footer{
        font-family: "HKGrotesk";
        color: antiquewhite;
        box-sizing: border-box;
        margin-top: 200px;
        background-color: #222222;
    }
    .footer-titre{
        font-size: 13px;
        font-weight: 900;
        color: rgba(255, 255, 255, 0.884);
        padding-bottom: 10px;
        padding-top: 15px;
    }
    .footer-info-txt{
        padding: 0;
        margin: 0;
        margin-top: 5px;
        font-size: 12px;
        font-weight: 500;
    }
    .logo{
        margin-top: 15px;
        width: 60px;
        height: 60px;
        opacity: 0.7;
    }
    .footer-ico{
        cursor: pointer;
        width: 20px;
        height: 20px;
        margin-top: 5px;
        margin-right: 20px;
        opacity: 0.5;
        transition: 0.5s;
    }
    .footer-ico:hover{
        opacity: 1;
        transition: 0.5s;
    }
    .footer-cont-info{
        width: 100%;
        /* padding-top: 20px;
        padding-bottom: 20px; */
        border: 1px solid #222222;
        display: flex;
    }
    .footer-info-un{
        text-align: center;
        border: 1px solid #222222;
        width: 33%;

    }
    .footer-info-deux{
        text-align: center;
        border: 1px solid #222222;
        width: 33%;

    }
    .footer-info-trois{
        text-align: center;
        border: 1px solid #222222;
        width: 33%;

    }

    .footer-info-trois img:hover{
        width: 20px;
        height: 20px;
        opacity: 1;
        transition: 0.5s;
    }
    .savoir-plus{
        cursor: pointer;
        font-size: 13px;
        font-weight: 900;
        color: rgba(255, 255, 255, 0.884);
        padding-bottom: 10px;
        padding-top: 15px;
        opacity: 0.5;
        transition: 0.5s;
        padding-right: 20px;
    }
    .savoir-plus:hover{
        opacity: 1;
        transition: 0.5s;
    }

    .footer-cont-partenaires{
        border: 1px dotted #666666;
        height: 50px;
    }
    .footer-cont-partenaires img{
        width: 50px;
    }
    .footer-cont-copy{
        padding-top: 5px;
        padding-bottom: 5px;
        text-align: center;
        background-color: #000000;
    }
    .footer-cont-copy p{
        font-size: 10px;
    }
</style>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	<section class="footer-cont-all">
            <div class="footer-map">
                <iframe src="https://www.google.com/maps/embed?pb" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        <div class="footer-cont-info">
            <div class="footer-info-un">
                <img class="logo" src="logo.jpg" alt="logo">
                <p class="footer-info-txt">Avenue Paul Pastur 11,</p>
                <p class="footer-info-txt">6032 Charleroi.</p>
                <p class="footer-info-txt">GPS: Place des Essarts.</p>
                <img class="footer-ico" src="facebook.svg" alt="Social">
                <img class="footer-ico" src="twitter.svg" alt="Social">
                <img class="footer-ico" src="instagram.svg" alt="Social">
                <img class="footer-ico" src="pinterest.svg" alt="Social">
            </div>
            <div class="footer-info-deux">
                <p class="footer-titre">Accessibilité:</p>
                <p class="footer-info-txt">GPS : place des Essarts</p>
                <p class="footer-info-txt">Bruxelles : A54 et Ring 9, sortie "Porte de la Villette".</p>
                <p class="footer-info-txt">Mons ou Namur : E42, prendre le périphérique R3, sortie 5. </p>
                <p class="savoir-plus">En savoir plus...</p>
                <img class="footer-ico" src="handicap-wc.svg" alt="acces">
                <img class="footer-ico"  src="handicap-park.svg" alt="acces">
                <img class="footer-ico" src="handicap-asc.svg" alt="acces">
                <img class="footer-ico" src="cctv.svg" alt="Social">
                <img class="footer-ico" src="no-smoking-sign.svg" alt="Social">
            </div>
            <div class="footer-info-trois">
                <p class="footer-titre">Info pratique:</p>
                <p class="footer-info-txt">7,00 euros pour les visiteurs individuels </p>
                <p class="footer-info-txt">5,00 euros pour les seniors et les groupes à partir de 10 personnes</p>
                <p class="footer-info-txt">4,00 euros pour les étudiants et les demandeurs d'emploi</p>
                <p class="savoir-plus">En savoir plus...</p>
            </div>
        </div>
        <div class="footer-cont-partenaires">
            <!-- <img src="handicap-wc.svg" alt="Partenaires">
            <img src="" alt="Partenaires">
            <img src="" alt="Partenaires">
            <img src="" alt="Partenaires">
            <img src="" alt="Partenaires">
            <img src="" alt="Partenaires">
            <img src="" alt="Partenaires">
            <img src="" alt="Partenaires">
            <img src="" alt="Partenaires">
            <img src="" alt="Partenaires">
            <img src="" alt="Partenaires">
            <img src="" alt="Partenaires">
            <img src="" alt="Partenaires">
            <img src="" alt="Partenaires">
            <img src="" alt="Partenaires">
            <img src="" alt="Partenaires">
            <img src="" alt="Partenaires">
            <img src="" alt="Partenaires">
            <img src="" alt="Partenaires">
            <img src="" alt="Partenaires">
            <img src="" alt="Partenaires">
            <img src="" alt="Partenaires"> -->
        </div>
        <div class="footer-cont-copy">
            <p>COPYRIGHT © 2012 • DESIGNED BY WWW.MUSEEPHOTO.BE • ALL RIGHTS RESERVED</p>
        </div>
    </section>

		<?php
		if ( is_active_sidebar( 'sidebar-2' ) or is_active_sidebar( 'sidebar-3' ) ) { ?>

			<div class="footer-widget-holder container">
				<?php coup_footer_widgets(); ?>
			</div>

		<?php

		} ?>


		<div class="site-info">
			<a href="<?php echo 'https://wordpress.org/'; ?>">
				<?php echo esc_html__('Proudly powered by WordPress', 'coup'); ?>
			</a>
			<span class="sep"><?php echo esc_html__(' - ', 'coup'); ?></span>
			<a href="<?php echo 'https://themeskingdom.com/'; ?>" target="_blank">
				<?php echo esc_html__('Theme: Coup Lite by Themes Kingdom', 'coup'); ?>
			</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<span class="overlay"></span>
<button class="back-to-top hide"><i class="icon-top"></i></button>
<?php wp_footer(); ?>

</body>
</html>
