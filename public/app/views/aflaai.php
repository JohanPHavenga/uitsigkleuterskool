<!-- Section -->
<div class="template-content-section template-padding-top-reset template-padding-bottom-5 template-main">

    <!-- Header and subheader -->
    <div class="template-component-header-subheader">
        <h2>Dokumente Aflaai</h2>
        <h6>Klik op die skakels hieronder om ons offisiële dokumentasie af te laai</h6>
        <div></div>
    </div>

    <!-- Content -->
    <div class="template-content-layout-column-left">
        <!-- Section -->
        <div data-id="section-1">
            <div class="template-component-list template-component-list-style-1">
                <ul>
                    <?php
                    foreach ($file_arr as $file):
                        echo "<li><a href='./aflaai/download/".$file."'>" . $file . "</a></li>";
                    endforeach;
                    ?>
                </ul>
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="template-content-layout-column-right">
    </div>

</div>
<?php
//wts($file_arr);

