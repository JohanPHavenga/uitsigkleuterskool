<!-- Section -->
<div class="template-content-section template-padding-top-reset template-padding-bottom-5 template-main">

    <!-- Header and subheader -->
    <div class="template-component-header-subheader">
        <h2>Aansoeke & Plasings</h2>
        <h6>Inligting oor hoe om aansoek te doen vir inskrywing</h6>
        <div></div>
    </div>    

    <ul class="template-layout-66x33 template-clear-fix">
        <li class="template-layout-column-left" style="visibility: visible;">

            <p><strong>Voltooi asseblief die inskrywingsvorm volledig en heg asseblief die volgende dokumente aan.</strong><br>(Let asseblief daarop dat aansoeke nie aanvaar sal word sonder die nodige dokumentasie nie):</p>

            <div class="template-component-list template-component-list-style-5">	
                <ul>
                    <li>Afskrif van kind se geboortesertifikaat.</li>
                    <li>Afskrif van kliniekkaart.</li>
                    <li>Afskrifte van beide ouers se identeitsboekies of -kaarte.</li>
                </ul>
            </div>

            <h5>Plasingskriteria:</h5>

            <div class="template-component-list template-component-list-style-5">
                <ul>
                    <li>Kleuters met boeties of sussies wat tans in Uitsig Kleuterskool is, of voorheen by Uitsig Kleuterskool was.</li>
                    <li>Lidmate van Bellville-Uitsig Gemeente.</li>
                    <li>Huisadres binne die grense van Uitsig Kleuterskool:
                        <div class="template-component-list template-component-list-style-7" style='padding-top: 10px;'>
                            <ul>
                                <li>Durbanweg tot en met Eversdalweg.</li>
                                <li>Eversdalweg tot en met Fairtreesweg.</li>
                                <li>Fairtreesweg tot en met N1.</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <p>Aansoeke wat aan een of meer van bogenoemde kriteria voldoen, sal geplaas word in volgorde waarin aansoeke ontvang is.</p>
            <p>Aansoeke wat aan geen van bogenoemde kriteria voldoen nie, sal geplaas word indien daar nog plek beskikbaar is.</p>

            <div class="template-component-blockquote">
                <p>
                    Aansoeke vir <?= $web_data['aansoeke']['jaar']; ?>: Sluit <?= fdateHuman($web_data['aansoeke']['sluitings_datum']); ?>
                </p>
            </div>

            <p><strong>Die eerste rondte plasings sal teen einde <?= fdateMonthLong($web_data['aansoeke']['sluitings_datum']); ?> afgehandel word. Indien daar nog plekke beskikbaar is, sal 'n tweede rondte plasings gedoen word.</strong></p>

            <h5>Klasindelings:</h5>
            <p>Klasse word jaarliks oor ingedeel. Uitsig Kleuterskool reseveer die reg om klasindelings te doen in oorleg met huidige personeel en met inagneming van kleuters se 
                persoonlikheid en behoeftes. Geen insette van ouers sal klasindelings beinvloed nie.</p>


        </li>
        <li class="template-layout-column-right" style="visibility: visible;">
            <?= $info_menu; ?>
        </li>
    </ul>
</div>