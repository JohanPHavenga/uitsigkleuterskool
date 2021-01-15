<div class="template-content" style="margin-bottom: 656px;">

    <!-- Main -->
    <div class="template-content-section template-main">

        <!-- Feature -->
        <div class="template-component-feature template-component-feature-style-1 template-component-feature-position-left template-component-feature-size-medium" style="display: block;">

            <!-- Layout 33x33x33 -->
            <ul class="template-layout-33x33x33 template-clear-fix">

                <!-- Left column -->
                <li class="template-layout-column-left" style="visibility: visible;">
                    <div class="template-icon-feature template-icon-feature-name-envelope-alt template-icon-feature-size-medium"></div>
                    <h5>Posadres</h5>
                    <p>
                        17 Mountain View Rylaan<br>
                        Ridgeworth<br>
                        Kaapstad<br>
                        7530
                    </p>
                </li>

                <!-- Center column -->
                <li class="template-layout-column-center" style="visibility: visible;">
                    <div class="template-icon-feature template-icon-feature-name-mobile-alt template-icon-feature-size-medium"></div>
                    <h5>Telefoon &amp; Epos</h5>
                    <p>
                        Tel no: 021 919 6237<br>
                        <a href="mailto:bestuurshoof@uitsigkleuterskool.co.za?subject=Web-kontak">bestuurshoof@uitsigkleuterskool.co.za</a>			
                    </p>
                </li>

                <!-- Right column -->
                <li class="template-layout-column-right template-margin-bottom-5" style="visibility: visible;">
                    <div class="template-icon-feature template-icon-feature-name-clock-alt template-icon-feature-size-medium"></div>
                    <h5>Besigheidsure</h5>
                    <p>
                        Maandag – Vrydag<br>
                        6.30 am – 6.00 pm<br>
                        Gesluit naweke en vakansie dae 					
                    </p>
                </li>

            </ul>

        </div>

        <!-- Contact form -->
        <div class="template-component-contact-form">

            <?php
            if (validation_errors()) {
                ?>
                <!-- Notice -->
                <div class="template-component-notice template-component-notice-style-2" style="margin-bottom: 20px;">
                    <!-- Content -->
                    <div class="template-component-notice-content">
                        <!-- Left column -->
                        <div class="template-component-notice-content-left">
                            <!-- Icon -->
                            <div class="template-icon-feature template-icon-feature-size-medium template-icon-feature-name-bell-alt"></div>
                        </div>
                        <!-- Right column -->
                        <div class="template-component-notice-content-right">
                            <!-- Header -->
                            <h6>Probleem met die vorm</h6>
                            <!-- Text -->
                            <?= validation_errors(); ?>
                            <!-- Close link -->
                            <a href="#">Maak toe</a>
                        </div>		
                    </div>
                </div>
                <?php
            }

            $attributes = array('class' => 'contact_form', 'role' => 'form');
            echo form_open($form_url, $attributes);
            ?>
            <!-- Layout 50x50 -->
            <div class="template-layout-50x50 template-clear-fix">

                <!-- Left column -->
                <div class="template-layout-column-left" style="visibility: visible;">
                    <div class="template-form-line template-state-block">
                        <?php
                        echo form_label('Naam *', 'contact-form-name');
                        echo form_input([
                            'name' => 'contact-form-name',
                            'id' => 'contact-form-name',
                            'value' => set_value('contact-form-name'),
//                            'required' => '',
                        ]);
                        ?>
                    </div>
                    <div class="template-form-line template-state-block">
                        <?php
                        echo form_label('Epos adres *', 'contact-form-email');
                        echo form_input([
                            'name' => 'contact-form-email',
                            'id' => 'contact-form-email',
                            'value' => set_value('contact-form-email'),
//                            'required' => '',
                        ]);
                        ?>
                    </div>
                    <div class="template-form-line template-state-block">
                        <?php
                        echo form_label('Onderwerp *', 'contact-form-subject');
                        echo form_input([
                            'name' => 'contact-form-subject',
                            'id' => 'contact-form-subject',
                            'value' => set_value('contact-form-subject'),
//                            'required' => '',
                        ]);
                        ?>
                    </div>
                </div>

                <!-- Right column -->
                <div class="template-layout-column-right" style="visibility: visible;">
                    <div class="template-form-line template-state-block">
                        <label for="contact-form-message">Boodskap *</label>
                        <?php
                        echo form_label('Boodskap *', 'contact-form-message');
                        echo form_textarea([
                            'name' => 'contact-form-message',
                            'id' => 'contact-form-message',
                            'value' => set_value('contact-form-message'),
//                            'required' => '',
                            'rows' => 1,
                            'cols' => 1,
                        ]);
                        ?>
                    </div>

                    <div class="form-group g-recaptcha" style="margin-top:10px;" data-sitekey="6LdIPrsZAAAAAMyeulsuWHYDbW1IZrD5OIbnt-5j"></div>
                </div>

            </div>
            <div class="template-form-line template-form-line-submit template-align-center">
                <div class="template-state-block">
                    <!-- Submit button -->
                    <?php
                    $data = array(
                        'id' => 'contact-form-submit',
                        'type' => 'submit',
                        'content' => 'Stuur boodskap',
                        'class' => 'template-component-button template-component-button-style-1',
                        'name' => 'contact-form-submit',
                    );
                    echo form_button($data);
                    ?>
                </div>
            </div>
            <?php
            echo form_close();
            ?>

        </div>

    </div>
    <div class="template-content-section template-padding-top-reset template-padding-bottom-reset">       
        <?php
        $address = "Uitsig Kleuterskool & Dagsorgsentrum, 17 Mountain View Rd, Ridgeworth, Cape Town, 7530";
        $address_nospaces= url_title($address);
//        $address_nospaces = str_replace(" ", "+", $address);
        ?>
        <iframe
            width="100%"
            height="450"
            frameborder="0" style="border:0; margin-bottom: 10px;"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBhcAaop4Xvi-H3DS9q0U2yHAdG7KNoHvw&q=<?= $address_nospaces; ?>" allowfullscreen>
        </iframe>

        <!-- Google map -->
        <!--<div class="template-component-google-map" id="template-component-google-map-1"></div>-->

    </div>

</div>