<!-- Section -->
<div class="template-content-section template-padding-top-reset template-padding-bottom-5 template-main">

    <!-- Header and subheader -->
    <div class="template-component-header-subheader">
        <h2>Algemene Inligting</h2>
        <h6>Al die inligting was jy nodig het oor ons skool</h6>
        <div></div>
    </div>

    
    <div class="template-component-list template-component-list-style-5">	
        <ul>
            <?php
                foreach ($inligting_menu as $col):
                    foreach ($col as $item):
                        echo "<li><a href='".$item['url']."'>".$item['text']."</a></li>";
                    endforeach;
                endforeach;
            ?>
        </ul>
    </div>
</div>
<?php
//wts($inligting_menu);

