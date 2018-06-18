<!-- Section -->
<div class="template-content-section template-padding-top-reset template-padding-bottom-5 template-main">

    <!-- Header and subheader -->
    <div class="template-component-header-subheader">
        <h2>Klasse Oorsig</h2>
        <h6>Ons kleuterskool is ingedeel in 12 klasse</h6>
        <div></div>
    </div>

    <!-- Layout 50x50 -->
    <div class="template-layout-50x50 template-clear-fix">

        <!-- Left column -->
        <div class="template-layout-column-left">
            <h4>In al ons klasse is daar 'n assistent om die klas tannie uit te help met haar pligte.</h4>
        </div>

        <!-- Right column -->
        <div class="template-layout-column-right">
            <p>Ons neem peuters vanaf 18 maande in, wat gedurende die jaar 2 jaar oud word. Daar is vier klasse vir 2-3 jarige kleuters en vier klasse vir 3-4 jariges. In die 4-5 jarige ouderdomsgroep is tans drie klasse.</p>
        </div>				

    </div>

    <!-- Class -->
    <div class="template-component-class template-clear-fix">
        <ul class="template-layout-50x50">
            <?php
                $template_column_counter=1;
                $n=1;
                foreach ($klas_data as $klas) {
                    if ($template_column_counter==2) { $template_column="right"; $template_column_counter=0; } else {  $template_column="left"; }
                    if ($n==5) { $n=1; }
                    ?>
                    <li class="template-layout-column-<?=$template_column;?>">
                        <div class="template-layout-flex-50x50">
                            <div>
                                <h5><b><?=$klas['naam'];?></b> klas</h5>
                                <span><?=$klas['tannie'];?></span>
                                <div class="template-layout-flex-50x50">
                                    <div>
                                        <span><?=$klas['ouderdom'];?></span>
                                        <span>jariges</span>
                                    </div>
                                    <div>
                                        <span><?=$klas['klas_grote'];?></span>
                                        <span>Klas grote</span>
                                    </div>
                                </div>
                            </div>
                            <div class="template-component-class-background-<?=$n;?>">
                                <!--<a href="#" class="template-component-button template-component-button-style-1">Click here<i></i></a>-->
                            </div>	
                        </div>
                    </li>
                    <?php
                    $template_column_counter++;
                    $n++;
                }
            ?>
            								
        </ul>
    </div>
    
    <?php
//        wts($klas_data);
    ?>

</div>
