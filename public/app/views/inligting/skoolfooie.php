<!-- Section -->
<div class="template-content-section template-padding-top-reset template-padding-bottom-5 template-main">

    <!-- Header and subheader -->
    <div class="template-component-header-subheader">
        <h2>Skoolfooie</h2>
        <h6>Skoolfooie vir <?= $web_data['general']['jaar']; ?></h6>
        <div></div>
    </div> 
    <ul class="template-layout-66x33 template-clear-fix">
        <li class="template-layout-column-left" style="visibility: visible;">
            <h4>Registrasiefooi</h4>
            <p>Die volle registrasie bedrag is betaalbaar by plasing en aanvaarding van nuwe kleuters. 
                Die helfte van die bedrag sal as deposito beskou word en afgetrek word van die eerste maand (Januarie) se skoolfooi. 
                In die geval van kansellasie word GEEN terugbetaling gedoen nie.</p>
            <div class="template-component-vertical-grid template-margin-top-3">
                <ul>
                    <li class="template-component-vertical-grid-line-1n">
                        <div>Registrasiefooi<br>(<strong><?= $web_data['general']['jaar']; ?></strong>)</div>
                        <div><?= fdisplayCurrency($web_data['financial']['registrasie_fooi']); ?></div>
                    </li>
                </ul>
            </div>
            <h4>Skoolfooie</h4>
            <p><strong>Skoolfooie vir <?= $web_data['general']['jaar']; ?></strong></p>
            
            <div class="template-component-list template-component-list-style-5">
                <ul>
                    <li>Fooie is vooruitbetaalbaar voor of op die 6de van elke maand.</li>
                    <li>U sal &lsquo;n maandelikse rekeningstaat per e-pos ontvang.</li>
                    <li>Neem asseblief kennis dat tariewe betaalbaar is oor <strong>11 maande,</strong> vanaf 1 Januarie tot en met 1 November.</li>
                    <li>&lsquo;n Kalendermaand sal vereis word vir kennisgewing, indien u kleuter die skool verlaat.</li>
                    <li>Fooie kan per EFT of debietorder betaal word.</li>
                    <li>Bewys van betaling per e-pos na: <a href="mailto:kleuterskool@uitsigkerk.co.za">kleuterskool@uitsigkerk.co.za</a></li>
                    <li>Indien skoolgelde nie aan die einde van elke kwartaal op datum betaal is, of alternatiewe re&euml;lings getref is nie, sal u kleuter onder geen omstandighede die daaropvolgende kwartaal die kleuterskool kan bywoon nie.</li>
                    <li>Agterstallige fooie sal opgevolg word en afbetalingsooreenkomste sal in plek gestel word indien re&euml;lings getref word.</li>
                </ul>
            </div>
            <div class="template-component-vertical-grid template-margin-top-3">
                <ul>
                    <li class="template-component-vertical-grid-line-1n">
                        <div><strong>Halfdag</strong><br>06:30 - 12:30</div>
                        <div><?= fdisplayCurrency($web_data['financial']['half_dag_fooi']); ?></div>
                    </li>
                    <li class="template-component-vertical-grid-line-2n">
                        <div><strong>Voldag</strong><br>06:30 - 18:00</div>
                        <div><?= fdisplayCurrency($web_data['financial']['vol_dag_fooi']); ?></div>
                    </li>
                </ul>
            </div>
            <h4>Bankbesonderhede</h4>
            <p>Gebruik asb die familiekode wat voorsien word sodra 'n plek aan kleuter toegeken word as <u>verwysing</u>.</p>
            <div class="template-component-vertical-grid template-margin-top-3">
                <ul>
                    <li class="template-component-vertical-grid-line-1n">
                        <div><strong>Rekeninghouer</strong></div>
                        <div>NGK Bellville-Uitsig</div>
                    </li>
                    <li class="template-component-vertical-grid-line-2n">
                        <div><strong>Bank</strong></div>
                        <div>ABSA</div>
                    </li>
                    <li class="template-component-vertical-grid-line-1n">
                        <div><strong>Tipe rekening</strong></div>
                        <div>Tjek</div>
                    </li>
                    <li class="template-component-vertical-grid-line-2n">
                        <div><strong>Rekeningnommer</strong></div>
                        <div>1450580909</div>
                    </li>
                </ul>
            </div>
        </li>
        <li class="template-layout-column-right" style="visibility: visible;">
            <?= $info_menu; ?>
        </li>
    </ul>

</div>


