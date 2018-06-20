<!-- Section -->
<div class="template-content-section template-padding-bottom-5">
    <!-- Main -->
    <div class="template-main">
        <!-- Feature -->
        <div class="template-component-feature template-component-feature-style-1 template-component-feature-position-left template-component-feature-size-medium">
            <ul class="template-layout-50x50 template-clear-fix">
                <li class="template-layout-column-left">
                    <div class="template-icon-feature template-icon-feature-name-tick-alt"></div>
                    <h5>Christelike Waardes</h5>
                    <p>Die Kleuterskool is ‘n Christelike kleuterskool en word volgens Christelike beginsels bedryf.</p>
                </li>
                <li class="template-layout-column-right">
                    <div class="template-icon-feature template-icon-feature-name-blocks-alt"></div>
                    <h5>Dissipline</h5>
                    <p>Toepassing van dissipline geskied op ’n positiewe en nie afbrekende manier.</p>	
                </li>	
                <li class="template-layout-column-left">
                    <div class="template-icon-feature template-icon-feature-name-teddy-alt"></div>
                    <h5>Veiligheid</h5>
                    <p>Daar word gepoog om vir kleuters 'n gevoel van geborgenheid te gee. 
                        Tannie tree as plaasvervanger vir ouers op solank kleuters by die skool is. 
                        Sekuriteit en veiligheid van kleuters is van kardinale belang.</p>			
                </li>
                <li class="template-layout-column-right">
                    <div class="template-icon-feature template-icon-feature-name-briefcase-alt"></div>
                    <h5>Professionaliteit en uitmuntende dienslewering</h5>
                    <p>Ten opsigte van skakeling met ouers en die lewer van 'n liefdesdiens met goeie kommunikasie.</p>			
                </li>
                <li class="template-layout-column-left">
                    <div class="template-icon-feature template-icon-feature-name-people-alt"></div>
                    <h5>Respek</h5>
                    <p>Is gerig op die kweek van selfrespek en eiewaarde. •	Wedersydse respek van personeel sowel as kleuters en ouers word verwag.</p>			
                </li>
                <li class="template-layout-column-right">
                    <div class="template-icon-feature template-icon-feature-name-heart-alt"></div>
                    <h5>Eerlikheid, integriteit en lojaliteit</h5>
                    <p>Deur personeel en ouers teenoor skool, kinders, ouers en mede personeel.</p>			
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END waardes -->




<!-- Section -->
<div class="template-content-section template-padding-bottom-5 template-background-image template-background-image-6">
    <!-- Main -->
    <div class="template-main template-section-white">
        <!-- Layout 50x50 -->
        <div class="template-layout-50x50 template-clear-fix">
            <!-- Left column -->
            <div class="template-layout-column-left">
                <h5>Vrae en antwoorde</h5>
                <!-- Accordion -->
                <div class="template-component-accordion">
                    <h6><a href="#">Wat is julle skool tye?</a></h6>
                    <div>
                        <p>
                            Ons is oop vanaf 06:30 - 18:00. Halfdag kinders is by ons tot 12:30.
                        </p>
                    </div>
                    <h6><a href="#">Wat is die skoolgelde?</a></h6>
                    <div>
                        <p>
                            Ons skoolgelde vir <?= $web_data['general']['jaar']; ?> is <b><?= fdisplayCurrency($web_data['financial']['vol_dag_fooi']); ?></b> vir voldag, en <b><?= fdisplayCurrency($web_data['financial']['half_dag_fooi']); ?></b> vir halfdag sorg.
                        </p>
                    </div>
                    <h6><a href="#">Is die skool oop vir skool vakansies?</a></h6>
                    <div>
                        <p>
                            Phasellus consequat est eleifend, leo condimentum nec nllam ut lectus turpis. Nunc sharme nullam an suscipit bibendum sagittis.
                        </p>
                    </div>
                </div>

            </div>

            <!-- Right column -->
            <div class="template-layout-column-right">

                <h5>Interessante feite</h5>

                <!-- Counter list -->
                <div class="template-component-counter-list">
                    <ul class="template-layout-100 template-clear-fix">
                        <li class="template-layout-column-left">
                            <span class="template-component-counter-list-label">Kinders in die skool</span>
                            <span class="template-component-counter-list-counter">
                                <span class="template-component-counter-list-counter-value">160</span>
                                <span class="template-component-counter-list-counter-character">kinders</span>
                            </span>
                            <span class="template-component-counter-list-timeline">
                                <span></span>
                            </span>
                        </li>
                        <li class="template-layout-column-left">
                            <span class="template-component-counter-list-label">Personeel lede</span>
                            <span class="template-component-counter-list-counter">
                                <span class="template-component-counter-list-counter-value">30</span>
                                <span class="template-component-counter-list-counter-character">lede</span>
                            </span>
                            <span class="template-component-counter-list-timeline">
                                <span></span>
                            </span>
                        </li>
                        <li class="template-layout-column-left template-margin-bottom-reset">
                            <span class="template-component-counter-list-label">Hoeveelheid werkdae wat dagsorg toe is per jaar</span>
                            <span class="template-component-counter-list-counter">
                                <span class="template-component-counter-list-counter-value">12</span>
                                <span class="template-component-counter-list-counter-character">dae</span>
                            </span>
                            <span class="template-component-counter-list-timeline">
                                <span></span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END FAQ -->