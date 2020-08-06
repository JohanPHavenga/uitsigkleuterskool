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
                    <h5>Postal Address</h5>
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
                        Phone: 021 919 6237<br>
                        Fax: 021 919 6237<br>
                        <a href="mailto:kleuterskool@uitsigkerk.co.za">kleuterskool@uitsigkerk.co.za</a>			
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
                echo "<div class='alert alert-danger' role='alert'><strong><i class='fa fa-exclamation-circle'></i> Probleem met die vorm:</strong>";
                echo validation_errors();
                echo "</div>";
            }
            ?>

            <?php
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
//                        'required' => '',
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
//                        'required' => '',
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
//                        'required' => '',
                        ]);
                        ?>
                    </div>
                </div>

                <!-- Right column -->
                <div class="template-layout-column-right" style="visibility: visible;">

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
                    <!--<input class="template-component-button template-component-button-style-1" value="Stuur boodskap" name="contact-form-submit" id="contact-form-submit" type="submit">-->
                </div>
            </div>
            <?php
            echo form_close();
            ?>

            <div class="row">
                <div class="form-group col-md-3">
                    <?php
                    echo form_label('Name *', 'user_name');
                    echo form_input([
                        'name' => 'user_name',
                        'id' => 'user_name',
                        'value' => set_value('user_name'),
                        'class' => 'form-control required',
                        'placeholder' => 'Enter your Name',
                        'required' => '',
                    ]);
                    ?>
                </div>
                <div class="form-group col-md-4">
                    <?php
                    echo form_label('Surname *', 'user_surname');
                    echo form_input([
                        'name' => 'user_surname',
                        'id' => 'user_surname',
                        'value' => set_value('user_surname'),
                        'class' => 'form-control required',
                        'placeholder' => 'Enter your Surname',
                        'required' => '',
                    ]);
                    ?>
                </div>
                <div class="form-group col-md-5">
                    <?php
                    echo form_label('Email *', 'user_email');
                    echo form_input([
                        'name' => 'user_email',
                        'id' => 'user_email',
                        'type' => 'email',
                        'value' => set_value('user_email'),
                        'class' => 'form-control required',
                        'placeholder' => 'Enter your Email',
                        'required' => '',
                    ]);
                    ?>
                </div>
            </div>
            <div class="form-group">
                <?php
                echo form_label('Comment *', 'user_message');
                echo form_textarea([
                    'name' => 'user_message',
                    'id' => 'user_message',
                    'value' => set_value('user_message'),
                    'class' => 'form-control required',
                    'placeholder' => 'Enter your Comment',
                    'required' => '',
                    'rows' => 5,
                ]);
                ?>
            </div>
            <div class="form-group g-recaptcha" data-sitekey="6LcxdoYUAAAAAADszn1zvLq3C9UFfwnafqzMWYoV"></div>
            <?php
            $data = array(
                'id' => 'form-submit',
                'type' => 'submit',
                'content' => '<i class="fa fa-paper-plane"></i>&nbsp;Send',
                'class' => 'btn',
            );
            echo form_button($data);
            $data = array(
                'id' => 'form-clear',
                'type' => 'reset',
                'content' => '<i class="fa fa-eraser"></i>&nbsp;Clear',
                'class' => 'btn btn-light',
            );
            echo form_button($data);
            echo form_close();
            ?>

            <form>

                <!-- Layout 50x50 -->
                <div class="template-layout-50x50 template-clear-fix">

                    <!-- Left column -->
                    <div class="template-layout-column-left" style="visibility: visible;">

                        <!-- Name -->
                        <div class="template-form-line template-state-block">
                            <label for="contact-form-name">Jou naam *</label>
                            <input name="contact-form-name" id="contact-form-name" type="text">
                        </div>

                        <!-- E-mail -->
                        <div class="template-form-line template-state-block">
                            <label for="contact-form-email">Jou epos adres *</label>
                            <input name="contact-form-email" id="contact-form-email" type="text">
                        </div>

                        <!-- Subject -->
                        <div class="template-form-line template-state-block">
                            <label for="contact-form-subject">Onderwerp</label>
                            <input name="contact-form-subject" id="contact-form-subject" type="text">
                        </div>

                    </div>

                    <!-- Right column -->
                    <div class="template-layout-column-right" style="visibility: visible;">
                        <div class="template-form-line template-state-block">
                            <label for="contact-form-message">Boodskap *</label>
                            <textarea rows="1" cols="1" name="contact-form-message" id="contact-form-message"></textarea>
                        </div>
                    </div>

                </div>

                <div class="template-form-line template-form-line-submit template-align-center">

                    <div class="template-state-block">

                        <!-- Submit button -->
                        <input class="template-component-button template-component-button-style-1" value="Stuur boodskap" name="contact-form-submit" id="contact-form-submit" type="submit">

                    </div>

                </div>

            </form>

        </div>

    </div>

    <div class="template-content-section template-padding-top-reset template-padding-bottom-reset">
        <?php
        // need to register google API key for site
        //$img_url = "https://maps.googleapis.com/mps/api/staticmap?center=". urlencode($edition_data['edition_address']) . "," . urlencode($edition_data['town_name']) ."&zoom=13&size=161x1920&maptype=roadmap&key=AIzaSyBERO5xjCtTOmjQ_zSSUvlp5YN_l-4yKQw";
        ?>

        <!-- Google map -->
        <div class="template-component-google-map" id="template-component-google-map-1"></div>

    </div>

</div>