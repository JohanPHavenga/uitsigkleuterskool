<div class="template-content" style="margin-bottom: 656px;">
    <!-- Main -->
    <div class="template-content-section template-main">
        <div class="template-component-notice template-component-notice-style-1">
            <!-- Content -->
            <div class="template-component-notice-content">
                <!-- Left column -->
                <div class="template-component-notice-content-left">
                    <!-- Icon -->
                    <div class="template-icon-feature template-icon-feature-size-medium template-icon-feature-name-tick-alt"></div>
                </div>
                <!-- Right column -->
                <div class="template-component-notice-content-right">
                    <!-- Header -->
                    <h6><?= $this->session->flashdata('alert'); ?></h6>
                    <p><?= $this->session->flashdata('confirm_msg'); ?></p>
                    <!-- Text -->
                    <a href="">

                    </a>
                    <!-- Close link -->
                </div>		
            </div>
        </div>

        <div class="template-content-section template-padding-top-reset template-padding-bottom-reset" style="margin-top: 20px;">
            <a href="<?= $this->session->flashdata('confirm_btn_url'); ?>" class="template-component-button template-component-button-style-1"><?= $this->session->flashdata('confirm_btn_txt'); ?><i></i></a>
        </div>

    </div>
</div>