<?php

/* AppBundle:Prinkino:nuovocliente.html.twig */
class __TwigTemplate_f54513c544c086be889ac10f79925a7773cf8726cf97fcc0e65f0981beb8e3be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Prinkino:nuovocliente.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf9853d85973425d369a25e746fcfd201d7a7039599b6497958aea1a676d85d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf9853d85973425d369a25e746fcfd201d7a7039599b6497958aea1a676d85d9->enter($__internal_cf9853d85973425d369a25e746fcfd201d7a7039599b6497958aea1a676d85d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:nuovocliente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf9853d85973425d369a25e746fcfd201d7a7039599b6497958aea1a676d85d9->leave($__internal_cf9853d85973425d369a25e746fcfd201d7a7039599b6497958aea1a676d85d9_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe78cff9f9adc5456a5e3ca238df00effd63750823649cfbfa2b49d5a348285d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe78cff9f9adc5456a5e3ca238df00effd63750823649cfbfa2b49d5a348285d->enter($__internal_fe78cff9f9adc5456a5e3ca238df00effd63750823649cfbfa2b49d5a348285d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inserimento Nuovo Cliente";
        
        $__internal_fe78cff9f9adc5456a5e3ca238df00effd63750823649cfbfa2b49d5a348285d->leave($__internal_fe78cff9f9adc5456a5e3ca238df00effd63750823649cfbfa2b49d5a348285d_prof);

    }

    // line 6
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_1cadd5cf6040dddcc938ca0e037980e300e32e2add758e61a5afbc3c7763fb50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cadd5cf6040dddcc938ca0e037980e300e32e2add758e61a5afbc3c7763fb50->enter($__internal_1cadd5cf6040dddcc938ca0e037980e300e32e2add758e61a5afbc3c7763fb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 7
        echo "
   <section class=\"top\">
        <h4>Inserimento nuovo cliente</h4>
   </section>
    <section class=\"form\"> 
\t<table>
            <form method=\"post\" action=\"riepilogo\">
                <tbody>
                    <tr valign=\"top\">
                        <td height=\"260\" width=\"285\">\t\t\t\t\t\t\t
                            <div class=\"field-box\">
                                <label>Nome del cliente:</label>
                                <input id=\"name\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" name =\"nome\">
                            </div>
                            <div class=\"field-box\">
                                <label>Cognome del cliente:</label>
                                <input id=\"name\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" name =\"cognome\">
                            </div>
                            <div class=\"field-box\">
                                <label>Via:</label>
                                <input id=\"via\" value=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" name =\"via\">
                            </div>
                            <div class=\"field-box\">
                                <label>Citta':</label>
                                <input id=\"indirizzo_citta\" value=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" name =\"citta\">
                            </div>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class=\"field-box\">
                                                <label>CAP:</label>
                                                <input id=\"indirizzo_cap\" value=\"\" class=\"span6\" style=\"width:110px\" type=\"text\" name =\"cap\">
                                            </div>
                                        </td>
                                        <td>
                                        </td>
                                        <td> 
                                            <div class=\"field-box\">
                                                <label>Numero civico:</label>
                                                <input id=\"indirizzo_provincia\" value=\"\" class=\"span6\" style=\"width:110px\" type=\"text\" name =\"numero\">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class=\"field-box\" align=\"left\">
                                <label>Nazione:</label>
                                <div style=\"width: 254px\" id=\"s2id_selectCountry1470146739\" class=\"select2-container select2\">    
                                    <select style=\"width: 254px;\" class=\"select2\" id=\"selectCountry1470146739\" name=\"nazione\">
                                        <option value=\"Afghanistan\">Afghanistan</option>
                                        <option value=\"Albania\">Albania</option>
                                        <option value=\"Algeria\">Algeria</option>
                                        <option value=\"Andorra\">Andorra</option>
                                        <option value=\"Angola\">Angola</option>
                                        <option value=\"Anguilla\">Anguilla</option>
                                        <option value=\"Antartide\">Antartide</option>
                                        <option value=\"Antigua e Barbuda\">Antigua e Barbuda</option>
                                        <option value=\"Antille Olandesi\">Antille Olandesi</option>
                                        <option value=\"Arabia Saudita\">Arabia Saudita</option>
                                        <option value=\"Argentina\">Argentina</option>
                                        <option value=\"Armenia\">Armenia</option>
                                        <option value=\"Aruba\">Aruba</option>
                                        <option value=\"Australia\">Australia</option>
                                        <option value=\"Austria\">Austria</option>
                                        <option value=\"Azerbaigian\">Azerbaigian</option>
                                        <option value=\"Bahamas\">Bahamas</option>
                                        <option value=\"Bahrain\">Bahrain</option>
                                        <option value=\"Bangladesh\">Bangladesh</option>
                                        <option value=\"Barbados\">Barbados</option>
                                        <option value=\"Belgio\">Belgio</option>
                                        <option value=\"Belize\">Belize</option>
                                        <option value=\"Benin\">Benin</option>
                                        <option value=\"Bermuda\">Bermuda</option>
                                        <option value=\"Bhutan\">Bhutan</option>
                                        <option value=\"Bielorussia\">Bielorussia</option>
                                        <option value=\"Bolivia\">Bolivia</option>
                                        <option value=\"Bosnia ed Erzegovina\">Bosnia ed Erzegovina</option>
                                        <option value=\"Botswana\">Botswana</option>
                                        <option value=\"Brasile\">Brasile</option>
                                        <option value=\"Brunei\">Brunei</option>
                                        <option value=\"Bulgaria\">Bulgaria</option>
                                        <option value=\"Burkina Faso\">Burkina Faso</option>
                                        <option value=\"Burundi\">Burundi</option>
                                        <option value=\"Cambogia\">Cambogia</option>
                                        <option value=\"Camerun\">Camerun</option>
                                        <option value=\"Canada\">Canada</option>
                                        <option value=\"Capo Verde\">Capo Verde</option>
                                        <option value=\"Ciad\">Ciad</option>
                                        <option value=\"Cile\">Cile</option>
                                        <option value=\"Cina\">Cina</option>
                                        <option value=\"Cipro\">Cipro</option>
                                        <option value=\"Città del Vaticano\">Città del Vaticano</option>
                                        <option value=\"Colombia\">Colombia</option>
                                        <option value=\"Comore\">Comore</option>
                                        <option value=\"Corea del Nord\">Corea del Nord</option>
                                        <option value=\"Corea del Sud\">Corea del Sud</option>
                                        <option value=\"Costa Rica\">Costa Rica</option>
                                        <option value=\"Costa d'Avorio\">Costa d'Avorio</option>
                                        <option value=\"Croazia\">Croazia</option>
                                        <option value=\"Cuba\">Cuba</option>
                                        <option value=\"Danimarca\">Danimarca</option>
                                        <option value=\"Dominica\">Dominica</option>
                                        <option value=\"Ecuador\">Ecuador</option>
                                        <option value=\"Egitto\">Egitto</option>
                                        <option value=\"El Salvador\">El Salvador</option>
                                        <option value=\"Emirati Arabi Uniti\">Emirati Arabi Uniti</option>
                                        <option value=\"Eritrea\">Eritrea</option>
                                        <option value=\"Estonia\">Estonia</option>
                                        <option value=\"Etiopia\">Etiopia</option>
                                        <option value=\"Fiji\">Fiji</option>
                                        <option value=\"Filippine\">Filippine</option>
                                        <option value=\"Finlandia\">Finlandia</option>
                                        <option value=\"Francia\">Francia</option>
                                        <option value=\"Gabon\">Gabon</option>
                                        <option value=\"Gambia\">Gambia</option>
                                        <option value=\"Georgia\">Georgia</option>
                                        <option value=\"Georgia del Sud e isole Sandwich meridionali\">Georgia del Sud e isole Sandwich meridionali</option>
                                        <option value=\"Germania\">Germania</option>
                                        <option value=\"Ghana\">Ghana</option>
                                        <option value=\"Giamaica\">Giamaica</option>
                                        <option value=\"Giappone\">Giappone</option>
                                        <option value=\"Gibilterra\">Gibilterra</option>
                                        <option value=\"Gibuti\">Gibuti</option>
                                        <option value=\"Giordania\">Giordania</option>
                                        <option value=\"Grecia\">Grecia</option>
                                        <option value=\"Grenada\">Grenada</option>
                                        <option value=\"Groenlandia\">Groenlandia</option>
                                        <option value=\"Guadalupa\">Guadalupa</option>
                                        <option value=\"Guam\">Guam</option>
                                        <option value=\"Guatemala\">Guatemala</option>
                                        <option value=\"Guinea\">Guinea</option>
                                        <option value=\"Guinea Equatoriale\">Guinea Equatoriale</option>
                                        <option value=\"Guinea-Bissau\">Guinea-Bissau</option>
                                        <option value=\"Guyana\">Guyana</option>
                                        <option value=\"Guyana Francese\">Guyana Francese</option>
                                        <option value=\"Haiti\">Haiti</option>
                                        <option value=\"Heard Island e McDonald Islands\">Heard Island e McDonald Islands</option>
                                        <option value=\"Honduras\">Honduras</option>
                                        <option value=\"Hong Kong\">Hong Kong</option>
                                        <option value=\"India\">India</option>
                                        <option value=\"Indonesia\">Indonesia</option>
                                        <option value=\"Iran\">Iran</option>
                                        <option value=\"Iraq\">Iraq</option>
                                        <option value=\"Irlanda\">Irlanda</option>
                                        <option value=\"Islanda\">Islanda</option>
                                        <option value=\"Isola Bouvet\">Isola Bouvet</option>
                                        <option value=\"Isola Christmas\">Isola Christmas</option>
                                        <option value=\"Isola Norfolk\">Isola Norfolk</option>
                                        <option value=\"Isole Canarie (Spagna)\">Isole Canarie (Spagna)</option>
                                        <option value=\"Isole Cayman\">Isole Cayman</option>
                                        <option value=\"Isole Cocos e Keeling\">Isole Cocos e Keeling</option>
                                        <option value=\"Isole Cook\">Isole Cook</option>
                                        <option value=\"Isole Falkland\">Isole Falkland</option>
                                        <option value=\"Isole Fær Øer\">Isole Fær Øer</option>
                                        <option value=\"Isole Marianne Settentrionali\">Isole Marianne Settentrionali</option>
                                        <option value=\"Isole Marshall\">Isole Marshall</option>
                                        <option value=\"Isole Minori Esterne degli Stati Uniti d'America\">Isole Minori Esterne degli Stati Uniti d'America 
                                        </option>
                                        <option value=\"Isole Pitcairn\">Isole Pitcairn</option>
                                        <option value=\"Isole Salomone\">Isole Salomone</option>
                                        <option value=\"Isole Vergini Americane\">Isole Vergini Americane</option>
                                        <option value=\"Isole Vergini Britanniche\">Isole Vergini Britanniche</option>
                                        <option value=\"Isole Åland\">Isole Åland</option>
                                        <option value=\"Israele\">Israele</option>
                                        <option value=\"Italia\" selected=\"\">Italia</option>
                                        <option value=\"Jersey - Channel Islands\">Jersey - Channel Islands</option>
                                        <option value=\"Kazakistan\">Kazakistan</option>
                                        <option value=\"Kenia\">Kenia</option>
                                        <option value=\"Kirghizistan\">Kirghizistan</option>
                                        <option value=\"Kiribati\">Kiribati</option>
                                        <option value=\"Kosovo\">Kosovo</option>
                                        <option value=\"Kuwait\">Kuwait</option>
                                        <option value=\"Laos\">Laos</option>
                                        <option value=\"Lesotho\">Lesotho</option>
                                        <option value=\"Lettonia\">Lettonia</option>
                                        <option value=\"Libano\">Libano</option>
                                        <option value=\"Liberia\">Liberia</option>
                                        <option value=\"Libia\">Libia</option>
                                        <option value=\"Liechtenstein\">Liechtenstein</option>
                                        <option value=\"Lituania\">Lituania</option>
                                        <option value=\"Lussemburgo\">Lussemburgo</option>
                                        <option value=\"Macao\">Macao</option>
                                        <option value=\"Macedonia\">Macedonia</option>
                                        <option value=\"Madagascar\">Madagascar</option>
                                        <option value=\"Malawi\">Malawi</option>
                                        <option value=\"Malaysia\">Malaysia</option>
                                        <option value=\"Maldive\">Maldive</option>
                                        <option value=\"Mali\">Mali</option>
                                        <option value=\"Malta\">Malta</option>
                                        <option value=\"Marocco\">Marocco</option>
                                        <option value=\"Martinica\">Martinica</option>
                                        <option value=\"Mauritania\">Mauritania</option>
                                        <option value=\"Mauritius\">Mauritius</option>
                                        <option value=\"Mayotte\">Mayotte</option>
                                        <option value=\"Messico\">Messico</option>
                                        <option value=\"Micronesia\">Micronesia</option>
                                        <option value=\"Moldavia\">Moldavia</option>
                                        <option value=\"Monaco\">Monaco</option>
                                        <option value=\"Mongolia\">Mongolia</option>
                                        <option value=\"Montenegro\">Montenegro</option>
                                        <option value=\"Montserrat\">Montserrat</option>
                                        <option value=\"Mozambico\">Mozambico</option>
                                        <option value=\"Myanmar\">Myanmar</option>
                                        <option value=\"Namibia\">Namibia</option>
                                        <option value=\"Nauru\">Nauru</option>
                                        <option value=\"Nepal\">Nepal</option>
                                        <option value=\"Nicaragua\">Nicaragua</option>
                                        <option value=\"Niger\">Niger</option>
                                        <option value=\"Nigeria\">Nigeria</option>
                                        <option value=\"Niue\">Niue</option>
                                        <option value=\"Norvegia\">Norvegia</option>
                                        <option value=\"Nuova Caledonia\">Nuova Caledonia</option>
                                        <option value=\"Nuova Zelanda\">Nuova Zelanda</option>
                                        <option value=\"Oman\">Oman</option>
                                        <option value=\"Paesi Bassi\">Paesi Bassi</option>
                                        <option value=\"Pakistan\">Pakistan</option>
                                        <option value=\"Palau\">Palau</option>
                                        <option value=\"Panama\">Panama</option>
                                        <option value=\"Papua Nuova Guinea\">Papua Nuova Guinea</option>
                                        <option value=\"Paraguay\">Paraguay</option>
                                        <option value=\"Perù\">Perù</option>
                                        <option value=\"Polinesia Francese\">Polinesia Francese</option>
                                        <option value=\"Polonia\">Polonia</option>
                                        <option value=\"Porto Rico\">Porto Rico</option>
                                        <option value=\"Portogallo\">Portogallo</option>
                                        <option value=\"Qatar\">Qatar</option>
                                        <option value=\"Regno Unito\">Regno Unito</option>
                                        <option value=\"Repubblica Ceca\">Repubblica Ceca</option>
                                        <option value=\"Repubblica Centrafricana\">Repubblica Centrafricana</option>
                                        <option value=\"Repubblica Democratica del Congo\">Repubblica Democratica del Congo</option>
                                        <option value=\"Repubblica Dominicana\">Repubblica Dominicana</option>
                                        <option value=\"Repubblica del Congo\">Repubblica del Congo</option>
                                        <option value=\"Riunione\">Riunione</option>
                                        <option value=\"Romania\">Romania</option>
                                        <option value=\"Ruanda\">Ruanda</option>
                                        <option value=\"Russia\">Russia</option>
                                        <option value=\"Sahara Occidentale\">Sahara Occidentale</option>
                                        <option value=\"Saint Barthelemy\">Saint Barthelemy</option>
                                        <option value=\"Saint Kitts e Nevis\">Saint Kitts e Nevis</option>
                                        <option value=\"Saint Pierre e Miquelon\">Saint Pierre e Miquelon</option>
                                        <option value=\"Saint Vincent e Grenadine\">Saint Vincent e Grenadine</option>
                                        <option value=\"Samoa\">Samoa</option>
                                        <option value=\"Samoa Americane\">Samoa Americane</option>
                                        <option value=\"San Marino\">San Marino</option>
                                        <option value=\"Sant'Elena\">Sant'Elena</option>
                                        <option value=\"Santa Lucia\">Santa Lucia</option>
                                        <option value=\"Senegal\">Senegal</option>
                                        <option value=\"Serbia\">Serbia</option>
                                        <option value=\"Seychelles\">Seychelles</option>
                                        <option value=\"Sierra Leone\">Sierra Leone</option>
                                        <option value=\"Singapore\">Singapore</option>
                                        <option value=\"Siria\">Siria</option>
                                        <option value=\"Slovacchia\">Slovacchia</option>
                                        <option value=\"Slovenia\">Slovenia</option>
                                        <option value=\"Somalia\">Somalia</option>
                                        <option value=\"Spagna\">Spagna</option>
                                        <option value=\"Sri Lanka\">Sri Lanka</option>
                                        <option value=\"Stati Uniti\">Stati Uniti</option>
                                        <option value=\"Sudafrica\">Sudafrica</option>
                                        <option value=\"Sud Sudan\">Sud Sudan</option>
                                        <option value=\"Sudan\">Sudan</option>
                                        <option value=\"Suriname\">Suriname</option>
                                        <option value=\"Svalbard e Jan Mayen\">Svalbard e Jan Mayen</option>
                                        <option value=\"Svezia\">Svezia</option>
                                        <option value=\"Svizzera\">Svizzera</option>
                                        <option value=\"Swaziland\">Swaziland</option>
                                        <option value=\"São Tomé e Príncipe\">São Tomé e Príncipe</option>
                                        <option value=\"Tagikistan\">Tagikistan</option>
                                        <option value=\"Taiwan\">Taiwan</option>
                                        <option value=\"Tanzania\">Tanzania</option>
                                        <option value=\"Terre australi e antartiche francesi\">Terre australi e antartiche francesi</option>
                                        <option value=\"Territori Palestinesi\">Territori Palestinesi</option>
                                        <option value=\"Territorio Britannico dell'Oceano Indiano\">Territorio Britannico dell'Oceano Indiano</option>
                                        <option value=\"Thailandia\">Thailandia</option>
                                        <option value=\"Timor Est\">Timor Est</option>
                                        <option value=\"Togo\">Togo</option>
                                        <option value=\"Tokelau\">Tokelau</option>
                                        <option value=\"Tonga\">Tonga</option>
                                        <option value=\"Trinidad e Tobago\">Trinidad e Tobago</option>
                                        <option value=\"Tunisia\">Tunisia</option>
                                        <option value=\"Turchia\">Turchia</option>
                                        <option value=\"Turkmenistan\">Turkmenistan</option>
                                        <option value=\"Turks e Caicos\">Turks e Caicos</option>
                                        <option value=\"Tuvalu\">Tuvalu</option>
                                        <option value=\"Ucraina\">Ucraina</option>
                                        <option value=\"Uganda\">Uganda</option>
                                        <option value=\"Ungheria\">Ungheria</option>
                                        <option value=\"Uruguay\">Uruguay</option>
                                        <option value=\"Uzbekistan\">Uzbekistan</option>
                                        <option value=\"Vanuatu\">Vanuatu</option>
                                        <option value=\"Venezuela\">Venezuela</option>
                                        <option value=\"Vietnam\">Vietnam</option>
                                        <option value=\"Wallis e Futuna\">Wallis e Futuna</option>
                                        <option value=\"Yemen\">Yemen</option>
                                        <option value=\"Zambia\">Zambia</option>
                                        <option value=\"Zimbabwe\">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class=\"field-box\" style=\"margin-top: 10px;\">
                                    <label>Username:</label>
                                    <input id=\"mail\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" name =\"username\">
                                </div>
                            </td>
                            <td height=\"260\" width=\"285\">
                                <div class=\"field-box\">
                                    <label>Codice fiscale:</label>
                                    <input id=\"cf\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" name =\"codice fiscale\">
                                </div>
                                <div class=\"field-box\">
                                    <label>Mail:</label>
                                    <input id=\"mail\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" name =\"mail\">
                                </div>
                                <div class=\"field-box\">
                                    <label>Data Nascita:</label>
                                    <input id=\"mail\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"date\" name =\"data nascita\">
                                </div>
                                <div class=\"field-box\">
                                    <label>Telefono:</label>
                                    <input id=\"tel\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" name =\"telefono\">
                                </div>
                                <div class=\"field-box\">
                                    <label>Fax:</label>
                                    <input id=\"fax\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" name =\"fax\">
                                </div>
                            </td>
                            <td height=\"260\" width=\"285\">
                                <label>Note:</label>
                                <textarea id=\"extra\" name=\"note\" placeholder=\"Inserisci delle note extra.\" class=\"span8\" rows=\"4\" style=\"margin: 0px 0px 10px; height: 86px; width: 297px; position:static; resize:none;\"></textarea>
                            </td>\t\t\t\t\t\t\t
                        </tr> 
                    </tbody>
                </table>
                <input type= \"submit\" class=\"btn-flat primary\">
            </form>
\t</section>
";
        
        $__internal_1cadd5cf6040dddcc938ca0e037980e300e32e2add758e61a5afbc3c7763fb50->leave($__internal_1cadd5cf6040dddcc938ca0e037980e300e32e2add758e61a5afbc3c7763fb50_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:nuovocliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"::base.html.twig\" %}

{% block title %}Inserimento Nuovo Cliente{% endblock %}

{% block corpo %}

   <section class=\"top\">
        <h4>Inserimento nuovo cliente</h4>
   </section>
    <section class=\"form\"> 
\t<table>
            <form method=\"post\" action=\"riepilogo\">
                <tbody>
                    <tr valign=\"top\">
                        <td height=\"260\" width=\"285\">\t\t\t\t\t\t\t
                            <div class=\"field-box\">
                                <label>Nome del cliente:</label>
                                <input id=\"name\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" name =\"nome\">
                            </div>
                            <div class=\"field-box\">
                                <label>Cognome del cliente:</label>
                                <input id=\"name\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" name =\"cognome\">
                            </div>
                            <div class=\"field-box\">
                                <label>Via:</label>
                                <input id=\"via\" value=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" name =\"via\">
                            </div>
                            <div class=\"field-box\">
                                <label>Citta':</label>
                                <input id=\"indirizzo_citta\" value=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" name =\"citta\">
                            </div>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class=\"field-box\">
                                                <label>CAP:</label>
                                                <input id=\"indirizzo_cap\" value=\"\" class=\"span6\" style=\"width:110px\" type=\"text\" name =\"cap\">
                                            </div>
                                        </td>
                                        <td>
                                        </td>
                                        <td> 
                                            <div class=\"field-box\">
                                                <label>Numero civico:</label>
                                                <input id=\"indirizzo_provincia\" value=\"\" class=\"span6\" style=\"width:110px\" type=\"text\" name =\"numero\">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class=\"field-box\" align=\"left\">
                                <label>Nazione:</label>
                                <div style=\"width: 254px\" id=\"s2id_selectCountry1470146739\" class=\"select2-container select2\">    
                                    <select style=\"width: 254px;\" class=\"select2\" id=\"selectCountry1470146739\" name=\"nazione\">
                                        <option value=\"Afghanistan\">Afghanistan</option>
                                        <option value=\"Albania\">Albania</option>
                                        <option value=\"Algeria\">Algeria</option>
                                        <option value=\"Andorra\">Andorra</option>
                                        <option value=\"Angola\">Angola</option>
                                        <option value=\"Anguilla\">Anguilla</option>
                                        <option value=\"Antartide\">Antartide</option>
                                        <option value=\"Antigua e Barbuda\">Antigua e Barbuda</option>
                                        <option value=\"Antille Olandesi\">Antille Olandesi</option>
                                        <option value=\"Arabia Saudita\">Arabia Saudita</option>
                                        <option value=\"Argentina\">Argentina</option>
                                        <option value=\"Armenia\">Armenia</option>
                                        <option value=\"Aruba\">Aruba</option>
                                        <option value=\"Australia\">Australia</option>
                                        <option value=\"Austria\">Austria</option>
                                        <option value=\"Azerbaigian\">Azerbaigian</option>
                                        <option value=\"Bahamas\">Bahamas</option>
                                        <option value=\"Bahrain\">Bahrain</option>
                                        <option value=\"Bangladesh\">Bangladesh</option>
                                        <option value=\"Barbados\">Barbados</option>
                                        <option value=\"Belgio\">Belgio</option>
                                        <option value=\"Belize\">Belize</option>
                                        <option value=\"Benin\">Benin</option>
                                        <option value=\"Bermuda\">Bermuda</option>
                                        <option value=\"Bhutan\">Bhutan</option>
                                        <option value=\"Bielorussia\">Bielorussia</option>
                                        <option value=\"Bolivia\">Bolivia</option>
                                        <option value=\"Bosnia ed Erzegovina\">Bosnia ed Erzegovina</option>
                                        <option value=\"Botswana\">Botswana</option>
                                        <option value=\"Brasile\">Brasile</option>
                                        <option value=\"Brunei\">Brunei</option>
                                        <option value=\"Bulgaria\">Bulgaria</option>
                                        <option value=\"Burkina Faso\">Burkina Faso</option>
                                        <option value=\"Burundi\">Burundi</option>
                                        <option value=\"Cambogia\">Cambogia</option>
                                        <option value=\"Camerun\">Camerun</option>
                                        <option value=\"Canada\">Canada</option>
                                        <option value=\"Capo Verde\">Capo Verde</option>
                                        <option value=\"Ciad\">Ciad</option>
                                        <option value=\"Cile\">Cile</option>
                                        <option value=\"Cina\">Cina</option>
                                        <option value=\"Cipro\">Cipro</option>
                                        <option value=\"Città del Vaticano\">Città del Vaticano</option>
                                        <option value=\"Colombia\">Colombia</option>
                                        <option value=\"Comore\">Comore</option>
                                        <option value=\"Corea del Nord\">Corea del Nord</option>
                                        <option value=\"Corea del Sud\">Corea del Sud</option>
                                        <option value=\"Costa Rica\">Costa Rica</option>
                                        <option value=\"Costa d'Avorio\">Costa d'Avorio</option>
                                        <option value=\"Croazia\">Croazia</option>
                                        <option value=\"Cuba\">Cuba</option>
                                        <option value=\"Danimarca\">Danimarca</option>
                                        <option value=\"Dominica\">Dominica</option>
                                        <option value=\"Ecuador\">Ecuador</option>
                                        <option value=\"Egitto\">Egitto</option>
                                        <option value=\"El Salvador\">El Salvador</option>
                                        <option value=\"Emirati Arabi Uniti\">Emirati Arabi Uniti</option>
                                        <option value=\"Eritrea\">Eritrea</option>
                                        <option value=\"Estonia\">Estonia</option>
                                        <option value=\"Etiopia\">Etiopia</option>
                                        <option value=\"Fiji\">Fiji</option>
                                        <option value=\"Filippine\">Filippine</option>
                                        <option value=\"Finlandia\">Finlandia</option>
                                        <option value=\"Francia\">Francia</option>
                                        <option value=\"Gabon\">Gabon</option>
                                        <option value=\"Gambia\">Gambia</option>
                                        <option value=\"Georgia\">Georgia</option>
                                        <option value=\"Georgia del Sud e isole Sandwich meridionali\">Georgia del Sud e isole Sandwich meridionali</option>
                                        <option value=\"Germania\">Germania</option>
                                        <option value=\"Ghana\">Ghana</option>
                                        <option value=\"Giamaica\">Giamaica</option>
                                        <option value=\"Giappone\">Giappone</option>
                                        <option value=\"Gibilterra\">Gibilterra</option>
                                        <option value=\"Gibuti\">Gibuti</option>
                                        <option value=\"Giordania\">Giordania</option>
                                        <option value=\"Grecia\">Grecia</option>
                                        <option value=\"Grenada\">Grenada</option>
                                        <option value=\"Groenlandia\">Groenlandia</option>
                                        <option value=\"Guadalupa\">Guadalupa</option>
                                        <option value=\"Guam\">Guam</option>
                                        <option value=\"Guatemala\">Guatemala</option>
                                        <option value=\"Guinea\">Guinea</option>
                                        <option value=\"Guinea Equatoriale\">Guinea Equatoriale</option>
                                        <option value=\"Guinea-Bissau\">Guinea-Bissau</option>
                                        <option value=\"Guyana\">Guyana</option>
                                        <option value=\"Guyana Francese\">Guyana Francese</option>
                                        <option value=\"Haiti\">Haiti</option>
                                        <option value=\"Heard Island e McDonald Islands\">Heard Island e McDonald Islands</option>
                                        <option value=\"Honduras\">Honduras</option>
                                        <option value=\"Hong Kong\">Hong Kong</option>
                                        <option value=\"India\">India</option>
                                        <option value=\"Indonesia\">Indonesia</option>
                                        <option value=\"Iran\">Iran</option>
                                        <option value=\"Iraq\">Iraq</option>
                                        <option value=\"Irlanda\">Irlanda</option>
                                        <option value=\"Islanda\">Islanda</option>
                                        <option value=\"Isola Bouvet\">Isola Bouvet</option>
                                        <option value=\"Isola Christmas\">Isola Christmas</option>
                                        <option value=\"Isola Norfolk\">Isola Norfolk</option>
                                        <option value=\"Isole Canarie (Spagna)\">Isole Canarie (Spagna)</option>
                                        <option value=\"Isole Cayman\">Isole Cayman</option>
                                        <option value=\"Isole Cocos e Keeling\">Isole Cocos e Keeling</option>
                                        <option value=\"Isole Cook\">Isole Cook</option>
                                        <option value=\"Isole Falkland\">Isole Falkland</option>
                                        <option value=\"Isole Fær Øer\">Isole Fær Øer</option>
                                        <option value=\"Isole Marianne Settentrionali\">Isole Marianne Settentrionali</option>
                                        <option value=\"Isole Marshall\">Isole Marshall</option>
                                        <option value=\"Isole Minori Esterne degli Stati Uniti d'America\">Isole Minori Esterne degli Stati Uniti d'America 
                                        </option>
                                        <option value=\"Isole Pitcairn\">Isole Pitcairn</option>
                                        <option value=\"Isole Salomone\">Isole Salomone</option>
                                        <option value=\"Isole Vergini Americane\">Isole Vergini Americane</option>
                                        <option value=\"Isole Vergini Britanniche\">Isole Vergini Britanniche</option>
                                        <option value=\"Isole Åland\">Isole Åland</option>
                                        <option value=\"Israele\">Israele</option>
                                        <option value=\"Italia\" selected=\"\">Italia</option>
                                        <option value=\"Jersey - Channel Islands\">Jersey - Channel Islands</option>
                                        <option value=\"Kazakistan\">Kazakistan</option>
                                        <option value=\"Kenia\">Kenia</option>
                                        <option value=\"Kirghizistan\">Kirghizistan</option>
                                        <option value=\"Kiribati\">Kiribati</option>
                                        <option value=\"Kosovo\">Kosovo</option>
                                        <option value=\"Kuwait\">Kuwait</option>
                                        <option value=\"Laos\">Laos</option>
                                        <option value=\"Lesotho\">Lesotho</option>
                                        <option value=\"Lettonia\">Lettonia</option>
                                        <option value=\"Libano\">Libano</option>
                                        <option value=\"Liberia\">Liberia</option>
                                        <option value=\"Libia\">Libia</option>
                                        <option value=\"Liechtenstein\">Liechtenstein</option>
                                        <option value=\"Lituania\">Lituania</option>
                                        <option value=\"Lussemburgo\">Lussemburgo</option>
                                        <option value=\"Macao\">Macao</option>
                                        <option value=\"Macedonia\">Macedonia</option>
                                        <option value=\"Madagascar\">Madagascar</option>
                                        <option value=\"Malawi\">Malawi</option>
                                        <option value=\"Malaysia\">Malaysia</option>
                                        <option value=\"Maldive\">Maldive</option>
                                        <option value=\"Mali\">Mali</option>
                                        <option value=\"Malta\">Malta</option>
                                        <option value=\"Marocco\">Marocco</option>
                                        <option value=\"Martinica\">Martinica</option>
                                        <option value=\"Mauritania\">Mauritania</option>
                                        <option value=\"Mauritius\">Mauritius</option>
                                        <option value=\"Mayotte\">Mayotte</option>
                                        <option value=\"Messico\">Messico</option>
                                        <option value=\"Micronesia\">Micronesia</option>
                                        <option value=\"Moldavia\">Moldavia</option>
                                        <option value=\"Monaco\">Monaco</option>
                                        <option value=\"Mongolia\">Mongolia</option>
                                        <option value=\"Montenegro\">Montenegro</option>
                                        <option value=\"Montserrat\">Montserrat</option>
                                        <option value=\"Mozambico\">Mozambico</option>
                                        <option value=\"Myanmar\">Myanmar</option>
                                        <option value=\"Namibia\">Namibia</option>
                                        <option value=\"Nauru\">Nauru</option>
                                        <option value=\"Nepal\">Nepal</option>
                                        <option value=\"Nicaragua\">Nicaragua</option>
                                        <option value=\"Niger\">Niger</option>
                                        <option value=\"Nigeria\">Nigeria</option>
                                        <option value=\"Niue\">Niue</option>
                                        <option value=\"Norvegia\">Norvegia</option>
                                        <option value=\"Nuova Caledonia\">Nuova Caledonia</option>
                                        <option value=\"Nuova Zelanda\">Nuova Zelanda</option>
                                        <option value=\"Oman\">Oman</option>
                                        <option value=\"Paesi Bassi\">Paesi Bassi</option>
                                        <option value=\"Pakistan\">Pakistan</option>
                                        <option value=\"Palau\">Palau</option>
                                        <option value=\"Panama\">Panama</option>
                                        <option value=\"Papua Nuova Guinea\">Papua Nuova Guinea</option>
                                        <option value=\"Paraguay\">Paraguay</option>
                                        <option value=\"Perù\">Perù</option>
                                        <option value=\"Polinesia Francese\">Polinesia Francese</option>
                                        <option value=\"Polonia\">Polonia</option>
                                        <option value=\"Porto Rico\">Porto Rico</option>
                                        <option value=\"Portogallo\">Portogallo</option>
                                        <option value=\"Qatar\">Qatar</option>
                                        <option value=\"Regno Unito\">Regno Unito</option>
                                        <option value=\"Repubblica Ceca\">Repubblica Ceca</option>
                                        <option value=\"Repubblica Centrafricana\">Repubblica Centrafricana</option>
                                        <option value=\"Repubblica Democratica del Congo\">Repubblica Democratica del Congo</option>
                                        <option value=\"Repubblica Dominicana\">Repubblica Dominicana</option>
                                        <option value=\"Repubblica del Congo\">Repubblica del Congo</option>
                                        <option value=\"Riunione\">Riunione</option>
                                        <option value=\"Romania\">Romania</option>
                                        <option value=\"Ruanda\">Ruanda</option>
                                        <option value=\"Russia\">Russia</option>
                                        <option value=\"Sahara Occidentale\">Sahara Occidentale</option>
                                        <option value=\"Saint Barthelemy\">Saint Barthelemy</option>
                                        <option value=\"Saint Kitts e Nevis\">Saint Kitts e Nevis</option>
                                        <option value=\"Saint Pierre e Miquelon\">Saint Pierre e Miquelon</option>
                                        <option value=\"Saint Vincent e Grenadine\">Saint Vincent e Grenadine</option>
                                        <option value=\"Samoa\">Samoa</option>
                                        <option value=\"Samoa Americane\">Samoa Americane</option>
                                        <option value=\"San Marino\">San Marino</option>
                                        <option value=\"Sant'Elena\">Sant'Elena</option>
                                        <option value=\"Santa Lucia\">Santa Lucia</option>
                                        <option value=\"Senegal\">Senegal</option>
                                        <option value=\"Serbia\">Serbia</option>
                                        <option value=\"Seychelles\">Seychelles</option>
                                        <option value=\"Sierra Leone\">Sierra Leone</option>
                                        <option value=\"Singapore\">Singapore</option>
                                        <option value=\"Siria\">Siria</option>
                                        <option value=\"Slovacchia\">Slovacchia</option>
                                        <option value=\"Slovenia\">Slovenia</option>
                                        <option value=\"Somalia\">Somalia</option>
                                        <option value=\"Spagna\">Spagna</option>
                                        <option value=\"Sri Lanka\">Sri Lanka</option>
                                        <option value=\"Stati Uniti\">Stati Uniti</option>
                                        <option value=\"Sudafrica\">Sudafrica</option>
                                        <option value=\"Sud Sudan\">Sud Sudan</option>
                                        <option value=\"Sudan\">Sudan</option>
                                        <option value=\"Suriname\">Suriname</option>
                                        <option value=\"Svalbard e Jan Mayen\">Svalbard e Jan Mayen</option>
                                        <option value=\"Svezia\">Svezia</option>
                                        <option value=\"Svizzera\">Svizzera</option>
                                        <option value=\"Swaziland\">Swaziland</option>
                                        <option value=\"São Tomé e Príncipe\">São Tomé e Príncipe</option>
                                        <option value=\"Tagikistan\">Tagikistan</option>
                                        <option value=\"Taiwan\">Taiwan</option>
                                        <option value=\"Tanzania\">Tanzania</option>
                                        <option value=\"Terre australi e antartiche francesi\">Terre australi e antartiche francesi</option>
                                        <option value=\"Territori Palestinesi\">Territori Palestinesi</option>
                                        <option value=\"Territorio Britannico dell'Oceano Indiano\">Territorio Britannico dell'Oceano Indiano</option>
                                        <option value=\"Thailandia\">Thailandia</option>
                                        <option value=\"Timor Est\">Timor Est</option>
                                        <option value=\"Togo\">Togo</option>
                                        <option value=\"Tokelau\">Tokelau</option>
                                        <option value=\"Tonga\">Tonga</option>
                                        <option value=\"Trinidad e Tobago\">Trinidad e Tobago</option>
                                        <option value=\"Tunisia\">Tunisia</option>
                                        <option value=\"Turchia\">Turchia</option>
                                        <option value=\"Turkmenistan\">Turkmenistan</option>
                                        <option value=\"Turks e Caicos\">Turks e Caicos</option>
                                        <option value=\"Tuvalu\">Tuvalu</option>
                                        <option value=\"Ucraina\">Ucraina</option>
                                        <option value=\"Uganda\">Uganda</option>
                                        <option value=\"Ungheria\">Ungheria</option>
                                        <option value=\"Uruguay\">Uruguay</option>
                                        <option value=\"Uzbekistan\">Uzbekistan</option>
                                        <option value=\"Vanuatu\">Vanuatu</option>
                                        <option value=\"Venezuela\">Venezuela</option>
                                        <option value=\"Vietnam\">Vietnam</option>
                                        <option value=\"Wallis e Futuna\">Wallis e Futuna</option>
                                        <option value=\"Yemen\">Yemen</option>
                                        <option value=\"Zambia\">Zambia</option>
                                        <option value=\"Zimbabwe\">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class=\"field-box\" style=\"margin-top: 10px;\">
                                    <label>Username:</label>
                                    <input id=\"mail\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" name =\"username\">
                                </div>
                            </td>
                            <td height=\"260\" width=\"285\">
                                <div class=\"field-box\">
                                    <label>Codice fiscale:</label>
                                    <input id=\"cf\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" name =\"codice fiscale\">
                                </div>
                                <div class=\"field-box\">
                                    <label>Mail:</label>
                                    <input id=\"mail\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" name =\"mail\">
                                </div>
                                <div class=\"field-box\">
                                    <label>Data Nascita:</label>
                                    <input id=\"mail\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"date\" name =\"data nascita\">
                                </div>
                                <div class=\"field-box\">
                                    <label>Telefono:</label>
                                    <input id=\"tel\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" name =\"telefono\">
                                </div>
                                <div class=\"field-box\">
                                    <label>Fax:</label>
                                    <input id=\"fax\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" name =\"fax\">
                                </div>
                            </td>
                            <td height=\"260\" width=\"285\">
                                <label>Note:</label>
                                <textarea id=\"extra\" name=\"note\" placeholder=\"Inserisci delle note extra.\" class=\"span8\" rows=\"4\" style=\"margin: 0px 0px 10px; height: 86px; width: 297px; position:static; resize:none;\"></textarea>
                            </td>\t\t\t\t\t\t\t
                        </tr> 
                    </tbody>
                </table>
                <input type= \"submit\" class=\"btn-flat primary\">
            </form>
\t</section>
{% endblock %}

", "AppBundle:Prinkino:nuovocliente.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Prinkino/nuovocliente.html.twig");
    }
}
