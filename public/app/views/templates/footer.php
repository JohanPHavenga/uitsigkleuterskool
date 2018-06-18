        </div>
        <!-- end .template-content -->

        <!-- Footer -->
        <div class="template-footer">


            <!-- Bottom footer -->
            <div class="template-footer-bottom">
                <div class="template-align-center template-main">
                    <div class="template-component-social-icon template-component-social-icon-style-1 template-clear-fix template-margin-bottom-2">
                        <ul>
                            <!--<li><a href="#" class="template-component-social-icon-googleplus"></a></li>-->
                            <li><a href="https://www.facebook.com/pages/Uitsig-Kleuter-Skool/144051775738478?ref=br_rs" target="_blank" class="template-component-social-icon-facebook"></a></li>
                            <!--<li><a href="#" class="template-component-social-icon-instagram"></a></li>-->
                        </ul>
                    </div>
                    <div>
                        <ul class="footer-menu template-clear-fix">  
                        <?php
                        // FOOTER MENU RENDER
                        foreach ($menu_array as $menu_item):
                            echo "<li>";
                                echo "<a href='". base_url($menu_item['url'])."'>$menu_item[text]</a>";   
                                if ($menu_item !== end($menu_array)) { echo '|'; }
                            echo "</li>";
                        endforeach;
                        ?>
                        </ul>
                    </div>
                    <div>
                        &copy;&nbsp;<?=date("Y");?> <a href="<?= base_url(); ?>">Uitsig Kleuterskool en Dagsorgsentrum</a> 
                        <!--by <a href="">JohanPHavenga</a>-->
                    </div>
                </div>
            </div>

        </div>

        <!-- Go to top button -->
        <a href="#go-to-top" class="template-component-go-to-top"></a>
        
        <script type="text/javascript" src="<?= base_url('assets/script/jquery-ui.min.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/jquery.vide.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/superfish.min.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/jquery.easing.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/jquery.blockUI.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/jquery.qtip.min.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/jquery.actual.min.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/jquery.jplayer.min.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/jquery.scrollTo.min.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/jquery.waypoints.min.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/jquery.countdown.min.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/jplayer.playlist.min.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/jquery.zaccordion.min.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/jquery.flexslider-min.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/jquery.supersized.min.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/jquery.nivo.slider.pack.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/jquery.touchSwipe.min.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/jquery.infieldlabel.min.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/jquery.carouFredSel.packed.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/jquery.fancybox.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/jquery.fancybox-media.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/jquery.fancybox-buttons.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/jquery.windowDimensionListener.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/jquery.responsiveElement.js');?>"></script>

        <script type="text/javascript" src="<?= base_url('assets/script/revslider/jquery.themepunch.revolution.min.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/revslider/jquery.themepunch.tools.min.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/revslider/extensions/revolution.extension.actions.min.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/revslider/extensions/revolution.extension.carousel.min.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/revslider/extensions/revolution.extension.kenburn.min.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/revslider/extensions/revolution.extension.layeranimation.min.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/revslider/extensions/revolution.extension.migration.min.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/revslider/extensions/revolution.extension.navigation.min.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/revslider/extensions/revolution.extension.parallax.min.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/revslider/extensions/revolution.extension.slideanims.min.js');?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/script/revslider/extensions/revolution.extension.video.min.js');?>"></script>

        <script type="text/javascript" src="<?= base_url('assets/script/sticky.min.js');?>"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>  

        <script type="text/javascript" src="<?= base_url('assets/script/jquery.template.component.js');?>"></script>

        <script type="text/javascript" src="<?= base_url('assets/script/public.js');?>"></script>

    </body>
</html>