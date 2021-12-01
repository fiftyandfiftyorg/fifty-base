
<?php //Footer Variables
$additional_js = get_field('additional_js','options');
$site_logo = get_field('site_logo','options');
$company_email = get_field('company_email','options');
$company_address = get_field('company_address','options');
$company_phone = get_field('company_phone','options');
?>
<footer id="footer" class="footer full-width">
    <div class="footer-container max-width pad-hit">
        <div class="footer-container__left-side">
                <a href="<?php echo get_home_url(); ?>" class="logo">
                    <?php if ($site_logo):?>
                        <img class="logo-image" src="<?php echo $site_logo['url']?>" alt="<?php echo $site_logo['alt']?>"/>
                    <?php else:?>
                        <img class="logo-image" src="<?php echo get_template_directory_uri();?>/assets/img/your-logo.png" alt="Company Logo"/>
                    <?php endif;?>
                </a>
        </div>
        <div class="footer-container__right-side">
            <div class="footer-navigation">
                <?php     
                    wp_nav_menu( array(
                        'theme_location'  => 'main-menu',
                        'container'       => false,
                        'menu_class'      => 'footer-sitemap',
                        'fallback_cb'     => '__return_false',
                        'items_wrap'      => '<ul id="%1$s" class="sitemap-ul">%3$s</ul>',
                        'depth'           => 2
                    ) );
                ?>
            </div>
        </div>
    </div>

    <div id="copyright" class="copyright max-width pad-hit">
        &copy; <?php echo esc_html( date_i18n( __( 'Y', 'total' ) ) ); ?> <?php $blog_title = get_bloginfo( 'name' ); echo $blog_title;?>
    </div>
    <div class="iframe-video-section full-width" style="display:none;">
        <div class="iframe-video max-width" style="overflow:visible;">
            <iframe id="main-vid" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen allowscriptaccess="always"></iframe>
            <div class="vid-close-icon">X</div>
        </div>
    </div>
</footer>

<!-- ATTENTION: below is "backdrop" overlay for video / modal - see JS -->
<div class="form-backdrop"></div>

<!-- ATTENTION: below is for iframe, check JS for how this works-->
<div class="iframe-video-section full-width" style="display:none;">
    <div class="iframe-video max-width" style="overflow:visible;">
        <iframe id="main-vid" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen allowscriptaccess="always"></iframe>
        <div class="vid-close">X</div>
    </div>
</div>

<!-- ATTENTION: below is for the modals - make sure the ID and the href of the modal link that is triggering it match-->
<div id="example-modal" class="modal-window">
    <div class="modal-window-content">
        <h4>Example of Modal</h4>
        <span>Example modal description.</span>
    </div>
    <div class="modal-close">X</div>
</div>

<?php wp_footer(); ?>
<script>
    AOS.init()
</script>
<?php if($additional_js):?>
  <script type="text/javascript">
    <?php echo $additional_js;?>
  </script>
<?php endif;?>

</body>
</html>