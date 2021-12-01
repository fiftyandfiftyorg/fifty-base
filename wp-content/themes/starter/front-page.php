<?php 
get_header(); ?>
<?php if(has_post_thumbnail()):?>
    <!--<div class="cms-banner fadein">
        <img class="cb-background" src="<?php //the_post_thumbnail_url();?>"/>                 
    </div>-->
<?php endif;?>
<section id="main-block" class="fadein general-section">
    <div class="cms-content-container max-width pad-hit">
            <?php the_content();?>
            <!-- Global Elements -->
            <h1>Header 1 Title</h1>
            <h2>Header 2 Title</h2>
            <h3>Header 3 Title</h3>
            <h4>Header 4 Title</h4>
            <h5>Header 5 Title</h5>
            <h6>Header 6 Title</h6>
            <div class="spacer-50"></div>
            <span>Span text - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam congue imperdiet erat quis dignissim. Donec facilisis diam id auctor facilisis. Duis fermentum, urna maximus maximus vulputate, tortor dolor tincidunt dui, vitae facilisis nunc nunc sed ligula. Duis lobortis purus justo, eu tincidunt mi lacinia sit amet.</span>
            <div class="spacer-50"></div>
            <p>Paragraph text - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam congue imperdiet erat quis dignissim. Donec facilisis diam id auctor facilisis. Duis fermentum, urna maximus maximus vulputate, tortor dolor tincidunt dui, vitae facilisis nunc nunc sed ligula. Duis lobortis purus justo, eu tincidunt mi lacinia sit amet.</p>
            <div class="spacer-50"></div>
            <button>Default Button</button>
            <div class="spacer-50"></div>
            <ul>
                <li>Unordered list item 1</li>
                <li>Unordered list item 2</li>
                <li>Unordered list item 3</li>
                <li>Unordered list item 4</li>
                <li>Unordered list item 5</li>
            </ul>
            <div class="spacer-50"></div>
            <ol>
                <li>Ordered list item 1</li>
                <li>Ordered list item 2</li>
                <li>Ordered list item 3</li>
                <li>Ordered list item 4</li>
                <li>Ordered list item 5</li>
            </ol>
            <div class="spacer-50"></div>
            <table>
                <thead>
                    <tr>
                        <td>Table Head Title 1</td>
                        <td>Table Head Title 2</td>
                        <td>Table Head Title 3</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Table Body Title 1</td>
                        <td>Table Body Title 2</td>
                        <td>Table Body Title 3</td>
                    </tr>
                    <tr>
                        <td>Table Body Title 1</td>
                        <td>Table Body Title 2</td>
                        <td>Table Body Title 3</td>
                    </tr>
                    <tr>
                        <td>Table Body Title 1</td>
                        <td>Table Body Title 2</td>
                        <td>Table Body Title 3</td>
                    </tr>
                </tbody>
            </table>

            
            <div class="spacer-100"></div>

            <!-- Modal Link Example - Modal Window is on Footer -->
            <a class="modal-link" href="#example-modal" data-attribute="modal">Show Me More in Modal!</a>
            
            <div class="spacer-100"></div>

            <!--Youtube Link Example-->
            <a class="video-link" href="#" data-video="u-DJygg3PD8">Show Me A Youtube Video</a>
            
            <div class="spacer-100"></div>

            <!-- One Column Example -->
            <h2>One Column Example</h2>
            <div class="spacer-50"></div>
            <div class="one-column">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut semper elit. Suspendisse libero magna, condimentum non 
                    molestie at, auctor ut tellus. Ut velit diam, feugiat non nisi at, aliquet sodales felis. Nulla finibus bibendum diam, vitae 
                    volutpat dolor rhoncus vel. Nullam varius fermentum massa, quis vulputate lectus cursus id. Cras eu lacus interdum, viverra 
                    justo ut, maximus nulla. Suspendisse potenti. Proin maximus augue pulvinar erat vehicula interdum. Sed faucibus, odio nec 
                    pulvinar euismod, augue enim pretium lacus, luctus volutpat odio neque a nisi. In ac diam accumsan, tincidunt sapien in, 
                    semper lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris condimentum 
                    malesuada viverra. Vestibulum eros ante, molestie id nunc sed, volutpat porta arcu. Aliquam semper leo id justo porttitor, 
                    eget tincidunt neque maximus.
                </p>
            </div>

            <div class="spacer-50"></div>
            <!-- Two Column Example -->
            <h2>Two Column Example</h2>
            <div class="spacer-50"></div>
            <div class="two-column">
                    <div class="two-column__left" data-aos="fade-right" data-aos-anchor-placement="top-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut semper elit. Suspendisse libero magna, condimentum non 
                            molestie at, auctor ut tellus. Ut velit diam, feugiat non nisi at, aliquet sodales felis. Nulla finibus bibendum diam, vitae 
                            volutpat dolor rhoncus vel. Nullam varius fermentum massa, quis vulputate lectus cursus id. Cras eu lacus interdum, viverra 
                            justo ut, maximus nulla. Suspendisse potenti. Proin maximus augue pulvinar erat vehicula interdum. Sed faucibus, odio nec 
                            pulvinar euismod, augue enim pretium lacus, luctus volutpat odio neque a nisi. In ac diam accumsan, tincidunt sapien in, 
                            semper lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris condimentum 
                            malesuada viverra. Vestibulum eros ante, molestie id nunc sed, volutpat porta arcu. Aliquam semper leo id justo porttitor, 
                            eget tincidunt neque maximus.
                        </p>
                    </div>
                    <div class="two-column__left" data-aos="fade-left" data-aos-anchor-placement="top-center">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/your-logo.png" alt="Two Column Image"/>
                    </div>
            </div>

            <div class="spacer-100"></div>
    </div>
</section>
<?php get_footer(); ?>