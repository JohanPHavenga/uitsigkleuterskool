
<div class="template-content-section template-padding-top-reset template-padding-bottom-5 template-main">
    <!-- Widgets list -->
    <ul class="template-widget-list">	
        <li>
            <h6>
                <span>Inligting Menu</span>
                <span></span>
            </h6>
            <div>
                <div class="template-widget-menu">
                    <ul>
                        <?php
                        foreach ($inligting_menu as $col):
                            foreach ($col as $item):
                                echo "<li><a href='" . $item['url'] . "'>" . $item['text'] . "</a></li>";
                            endforeach;
                        endforeach;
                        ?>
                    </ul>
                </div>
            </div>
        </li>
    </ul>	
</div>