<div class="row">
    <div class="col-md-12">
        <div id="social_footer">
               <?php if ( $social_flag <> 1 ):?>

            <ul>

                 <?php if (!empty($fb_page)):?>                                              
                    <li>
                        <a target="_blank" href="<?php echo FunctionsV3::prettyUrl($fb_page)?>"><i class="icon-facebook"></i></a>
                    </li>
                <?php endif;?>

                 <?php if (!empty($twitter_page)):?>
                    <li>
                        <a target="_blank" href="<?php echo FunctionsV3::prettyUrl($twitter_page)?>"><i class="icon-twitter"></i></a>
                    </li>
                <?php endif;?>

                <?php if (!empty($google_page)):?>
                <li>
                    <a target="_blank" href="<?php echo FunctionsV3::prettyUrl($google_page)?>"><i class="icon-google"></i></a>
                </li>
                <?php endif;?>

                <?php if (!empty($intagram_page)):?>                        
                <li>
                    <a target="_blank" href="<?php echo FunctionsV3::prettyUrl($intagram_page)?>"><i class="icon-instagram"></i></a>
                </li>
                <?php endif;?>

                <li>
                    <a href="#0"><i class="icon-pinterest"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="icon-vimeo"></i></a>
                </li>
                 <?php if (!empty($youtube_url)):?>
                <li>
                    <a target="_blank" href="<?php echo FunctionsV3::prettyUrl($youtube_url)?>"><i class="icon-youtube-play"></i>
                    </a>
                </li>
                <?php endif;?>

            </ul>

            <?php endif;?>
            <p>
                © Quick Food <?php echo date("Y"); ?>
            </p>
        </div>
    </div>
</div><!-- End row -->