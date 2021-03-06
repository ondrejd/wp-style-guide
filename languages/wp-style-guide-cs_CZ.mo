��    �      �  �         �  �   �  �   [  j    �  �  h  O  9  �  8   �  :   +     f  	   w     �     �     �     �     �  ;   �     �     �  
   �  5        <     E     T     ]     f     o     u     �  %   �  	   �     �  "   �     �               !     *     =  
   C     N     Z     y     �     �  m   �  -     2   5  5   h     �     �     �     �  -   �       *   :  "   e  �   �     N       `   %   �      �      �   &   �      !  &   !  &   D!     k!     �!     �!  !   �!     �!     �!     �!  g   �!  *   L"  )   w"  
   �"     �"  '   �"  D   �"     #     ;#     M#  2   ]#     �#     �#  W   �#     $     $  
   *$    5$  $   P%     u%     �%  C   �%     �%     �%     �%     �%     &     &     -&     4&     E&     U&     Z&  
   `&     k&     s&     &     �&     �&  6   �&     �&     �&     '     '     )'  (   H'  T   q'     �'  Z   �'     @(     O(     [(     i(     p(     �(     �(     �(     �(     �(     �(     �(  	   �(     �(     )     )  N   ')     v)     �)     �)     �)     �)  	   �)     �)     �)  
   �)  )   �)  .   �)  )   ,*  1   V*     �*     �*     �*  "   �*     �*     �*     �*     �*  u   �*     a+     o+  H   +     �+     �+     �+     �+     �+     ,     *,     J,     i,     ~,     �,  �  �,  �   S/  �   �/  �  �0  *  |2  �  �6  �  m8  9   =  <   >=     {=     �=     �=     �=     �=     �=     �=  ;   �=  
   >  
   ">     ->  >   :>     y>  %   �>     �>     �>     �>     �>     �>     �>  .   �>     %?     ,?  /   >?     n?     �?  	   �?  
   �?     �?     �?     �?     �?  *   �?     �?     @     @  �   $@  8   �@  ;   �@  :   $A     _A      pA     �A     �A  9   �A     �A  5   
B  )   @B  �   jB     IC     eC  #   �C     �C     �C  *   �C     	D     (D  &   GD     nD     �D     �D      �D     �D     �D     �D  f   �D  *   [E  )   �E     �E     �E  +   �E  @   �E     ?F     WF     dF  7   sF     �F     �F     �F     VG     lG     �G  K  �G  '   �H     I  	   I  H   "I     kI     �I     �I     �I     �I     �I     �I     �I     �I     �I     �I     J     J     J     .J     4J  '   =J  W   eJ  *   �J     �J     �J     K  &   *K  (   QK  c   zK  -   �K  a   L     nL     �L     �L  
   �L     �L     �L     �L     �L     �L     M     /M     6M  	   GM     QM     aM  
   zM  ]   �M     �M     �M     N  	   N     (N     -N     5N     JN     ON  ?   ^N  B   �N  9   �N  A   O  &   ]O     �O     �O      �O     �O     �O  
   �O     �O  �   �O     sP     �P  ^   �P     �P  #   Q     &Q  	   .Q  *   8Q  2   cQ     �Q  .   �Q  	   �Q     �Q     �Q     ,             �   n   z       =   c   ^           �   f   �   |   0           Y   t           E           �   a          /           G       �      ~   �      �       l           �   {   u   -   �   W   _      �       e       �       Q       �   �   �   $   �                  #       �          x           [   V   �   ]                N      �   B   :   j       �   �   .       �          L       I   R       v   �                   9   d   7      �   *   1      )   H   p   +   �      M   J   �   k   ;   �             m   r   h           �   	   �   �         �      q   \   }           �   s       �       (   F   A   !           w       �           b   �   �   S   �   >   3   �                  �   4   �      P   @   8   D   T         �       �      ?   X   �      O   <       6   
       2   i   '          &   �       �   U       �       "   K          g   �   5   �   �           %   �   Z   o   `   y   C        <b>Identifier</b> could be derrived from plugin's name and can NOT contains spaces, tabs and other control or special characters. <b>Usefull links</b><p><a href="%s" target="blank">Options</a> where you can change code templates.</p><p><a href="%s" target="blank">Examples</a> of generated code with this plugin.</p> <p>In <b>WordPress</b> are <a href="%s" target="blank">jQuery UI</a> stylesheets <b>not included</b> so we need to include it. This can be done pretty easily either by using some of exising <abbr title="Content Delivery Network">CDN</abbr> or using your own copy of <b>jQuery UI</b> bundled with your plugin.</p><p>For more details se next tabs of this help.</p> <p>Include needed stylesheets from some <abbr title="Content Delivery Network">CDN</abbr> (there are plenty of them):</p><pre><code class="language-php">/** @link http://snippets.webaware.com.au/snippets/load-a-nice-jquery-ui-theme-in-wordpress/ */
function load_jquery_ui() {
	global $wp_scripts;
	// tell WordPress to load jQuery UI tabs
	wp_enqueue_script('jquery-ui-tabs');
	// get registered script object for jquery-ui
	$ui = $wp_scripts->query('jquery-ui-core');
	// tell WordPress to load the Smoothness theme from Google CDN
	$protocol = is_ssl() ? 'https' : 'http';
	$url = "$protocol://ajax.googleapis.com/ajax/libs/jqueryui/{$ui->ver}/themes/smoothness/jquery-ui.min.css";
	wp_enqueue_style('jquery-ui-smoothness', $url, false, null);
}
// If you need to load it in WordPress administration do this:
add_action( 'admin_enqueue_scripts', 'load_jquery_ui' );
// Otherwise (for front-end) do this:
add_action( 'wp_enqueue_scripts', 'load_jquery_ui' );</code></pre> <p>On this page are shown all available wizards. The main are wizards for <b>plugins</b> and <b>themes</b>. These two wizards help you to start new plugin/theme projects quickly and easily. An advantage is the same structure accross your projects.</p><p>Other wizards generating code snippets for various parts of development of WordPress plugins or themes.<p> <p>Place your own jQuery UI stylesheet (and images) within your plugin (for example we are using <code>js</code> and <code>css</code> sub-folders) and load it using script like this:<p><pre><code class="language-php">function load_jquery_ui() {
	// Our CSS styles for jQuery UI (in `my_plugin/css` dir)
	wp_register_style( 'my-jqueryui-css', plugins_url( 'css/jquery-ui.css', __FILE__ ), false );
	wp_enqueue_style( 'my-jqueryui-css' );
	// Our JavaScript with jQuery UI as dependency:
	wp_register_script(
		'my-jqueryui-js',
		plugins_url( 'js/myscript.js', __FILE__ ),
		array(
			'jquery', 'jquery-ui-core', 'jquery-ui-position', 'jquery-ui-accordion', 'jquery-ui-tabs',
			'jquery-ui-dialog', 'jquery-ui-slider', 'jquery-ui-datepicker', 'jquery-ui-progressbar',
			'jquery-ui-button'
		),
		false,
		true
	);
	wp_enqueue_script( 'my-jqueryui-js' );
}

// If you need to load it in WordPress administration do this:
add_action( 'admin_enqueue_scripts', 'load_jquery_ui' );
// Otherwise (for front-end) do this:
add_action( 'wp_enqueue_scripts', 'load_jquery_ui' );</code></pre> <strong>Alert:</strong> Sample ui-state-error style.</p> <strong>Hey!</strong> Sample ui-state-highlight style.</p> A button element Accordion Author Author: Autocomplete Back to top Blocks Both descriptions are used in <code>readme.txt</code> file. Button Buttons Change Log Change log is a part of <code>readme.txt</code> file. Checkbox Checkbox Array Choice 1 Choice 2 Choice 3 Class Color Helper Classes Color: Comma separated list of contributors. Contents: Contributors Create new WordPress theme&hellip; Current version: Custom license Custom license: Custom:  Date Time Elements Date: Datepicker Description Developer Resources: Dashicons Dialog Dialog Title Donate Link Either select or enter name of license and its URL. You can also select no license but it is not recommended. Elements with this class uses the base color. Elements with this class uses the highlight color. Elements with this class uses the notification color. Email Enter URI of author's homepage Enter URI of license Enter author's name Enter author's name and valid homepage's URL. Enter change log of your plugin Enter comma separated list of contributors Enter comma separated list of tags Enter current version of the plugin, minimal required <b>WordPress</b> version, maximal version of <b>WordPress</b> on which was plugin tested and plugin's version which is considered to be stable. Enter donate link Enter frequently asked questions Enter full description of your plugin Enter identifier of your plugin Enter license's name Enter list of tags separated by comma. Enter name of your plugin Enter plugin installation instructions Enter short description of your plugin Enter upgrade notice Enter wizard FAQ Fieldset and <br />HTML5 Elements Fieldset and HTML5 Elements First First no icons For example: <code>Mozilla Public License 2.0</code> and <code>https://www.mozilla.org/MPL/2.0/</code>. For example: <code>joed,jimb,janed</code>. For example: <code>red,black,blue</code>. Form table Forms Framework Icons (content color preview) Frequently asked questions are part of <code>readme.txt</code> file. Frequently asked questions: Full description: Generate plugin Generate quickly your new WordPress plugin&hellip; Generate theme Helper Classes Here is minor excerpt with the form table as is used in <b>WordPress</b> options pages. Highlight / Error Horizontal Slider Identifier If you creating date time inputs for form for editing <em>custom-</em>post type you can use <b>WordPress</b> function <a href="touch_time" target="blank"><code></code></a> (<b>Warning:</b> This function can be used only on <code>post.php</code> or <code>post-new.php</code> pages!): Include license in a standalone file Inline Dialog Installation Installation instructions are part of <code>readme.txt</code> file. Installation instructions: Legend License Licenses List of Contents Local Date and Time: Month: Multi-datepicker Multiple Select Name Name: No license Number: Open Dialog Options Other Elements Other plugin options Otherwise there are simple date time inputs available: Overlay and Shadow Classes Own jQuery UI Pattern Library Plugin Wizard Plugin contains administration Plugin has dependency to other plugin(s) Plugin has options (will be included new options page into WordPress administration) Plugin has own database tables Plugin will be localized (create <code>languages</code> folder with <code>POT</code> file) Primary Button Progressbar Radio Buttons Range: Required at least: Search Second Second no icons Secondary Button Select a programming language Select element Selected license Selected: Short description: Single datepicker Sliders Some valid versions as an example: <b>3.4.0</b>, <b>4.4</b>, <b>1.2.1</b> etc. Stable tag: Submit Input Table of Contents Tabs Tags Telephone Tested up to: Text Text input Text with this class uses the base color. Text with this class uses the highlight color. Text with this class uses the icon color. Text with this class uses the notification color. Theme Wizard Third Third no icons This will create output like this: Time: URI: URL Upgrade notice Upgrade notice is a part of <code>readme.txt</code> file. When starting new plugin this field will be probably empty. Usefull links Using jQuery UI Valid URL of link with donation page. Leave blank if you don't have one. Version Vertical Sliders (equalizer) Week: Wizards Wizards - Plugin Wizard Wizards - Theme Wizard WordPress Admin Pattern Library WordPress Database Description jQuery UI Components jQuery UI from CDN select license Project-Id-Version: wp-style-guide
POT-Creation-Date: 2016-03-26 18:25+0100
PO-Revision-Date: 2016-03-26 18:37+0100
Last-Translator: 
Language-Team: Ondřej Doněk <ondrejd@gmail.com>
Language: cs_CZ
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
X-Generator: Poedit 1.7.5
X-Poedit-Basepath: ..
Plural-Forms: nplurals=2; plural=(n != 1);
X-Poedit-KeywordsList: __;_e;_x;esc_html_e
X-Poedit-SourceCharset: UTF-8
X-Poedit-SearchPath-0: src
X-Poedit-SearchPath-1: .
X-Poedit-SearchPathExcluded-0: vendor
X-Poedit-SearchPathExcluded-1: test
X-Poedit-SearchPathExcluded-2: languages
X-Poedit-SearchPathExcluded-3: css
X-Poedit-SearchPathExcluded-4: js
 <b>Identifikátor</b> by měl být odvozen od názvu pluginu a nesmí obsahovat mezery, tabelátory a jiné kontrolní či speciální znaky. <b>Užitečné odkazy</b><p><a href="%s" target="blank">Nastavení</a>, kde můžete změnit šablony generovaných kódů.</p><p><a href="%s" target="blank">Příklady</a> kódů vygenerovaných tímto pluginem.</p> <p>CSS styly <a href="%s" target="blank">jQuery UI</a> nejsou standartní součástí distribuce <b>WordPress</b> a proto je musíme načíst sami. Toho můžeme dosáhnout buď použitím některé z existujících serverů <abbr title="Content Delivery Network">CDN</abbr> nebo nakopírováním vlastní kopie tématu vzhledu pro <b>jQuery UI</b>.</p><p>Více detailů o obou způsobech se dozvíte na ostatních záložkách této nápovědy.</p> <p>V tomto případě musíme zajistit načtení potřebých souborů se styly z nějakého <abbr title="Content Delivery Network">CDN</abbr> serveru (pomocí vyhledávače jich naleznete mnoho):</p><pre><code class="language-php">/** @link http://snippets.webaware.com.au/snippets/load-a-nice-jquery-ui-theme-in-wordpress/ */
function load_jquery_ui() {
	global $wp_scripts;
	// Načteme jQuery UI komponentu záložky
	wp_enqueue_script('jquery-ui-tabs');
	// Potřebujeme pro zjištění verze jQuery UI Core
	$ui = $wp_scripts->query('jquery-ui-core');
	// Načteme téma vzhledu `Smoothness` z Google CDN
	$protocol = is_ssl() ? 'https' : 'http';
	$url = "$protocol://ajax.googleapis.com/ajax/libs/jqueryui/{$ui->ver}/themes/smoothness/jquery-ui.min.css";
	wp_enqueue_style('jquery-ui-smoothness', $url, false, null);
}
// Pokud chceme načíst naše skripty a styly v administraci, uděláme toto:
add_action( 'admin_enqueue_scripts', 'load_jquery_ui' );
// Na veřejných částech webu toto:
add_action( 'wp_enqueue_scripts', 'load_jquery_ui' );</code></pre> <p>Na této stránce jsou vypsány všechny existující průvodci. Hlavní jsou průvodci pro vytvoření <b>pluginů</b> a <b>témat vzhledu</b>. Tyto dva průvodci vám pomohou rychle a snadno zahájit nový projekt pluginu či tématu vzhledu. Výhodou je stejná struktura u všech vašich projektů.</p><p>Ostatní průvodci slouží ke generování útržků kódu pro nejrůznější části vývoje <b>WordPress</b> pluginů či témat vzhledu. <p>Uložte vlastní téma vzhledu pro jQuery UI do složky vašeho pluginu (nejlépe jednoduše do <code>css</code> či <code>js</code> podsložek) a poté uvnitř vašeho pluginu jeho načtení zajistíte následujícím způsobem:<p><pre><code class="language-php">function load_jquery_ui() {
	// Naše CSS styly pro jQuery UI (ve složce `muj_plugin/css`)
	wp_register_style( 'my-jqueryui-css', plugins_url( 'css/jquery-ui.css', __FILE__ ), false );
	wp_enqueue_style( 'my-jqueryui-css' );
	// Náš JavaScript soubor s načtenými závislostmi na jQuery UI:
	wp_register_script(
		'my-jqueryui-js',
		plugins_url( 'js/myscript.js', __FILE__ ),
		array(
			'jquery', 'jquery-ui-core', 'jquery-ui-position', 'jquery-ui-accordion', 'jquery-ui-tabs',
			'jquery-ui-dialog', 'jquery-ui-slider', 'jquery-ui-datepicker', 'jquery-ui-progressbar',
			'jquery-ui-button'
		),
		false,
		true
	);
	wp_enqueue_script( 'my-jqueryui-js' );
}

// Pokud chceme načíst naše skripty a styly v administraci, uděláme toto:
add_action( 'admin_enqueue_scripts', 'load_jquery_ui' );
// Na veřejných částech webu toto:
add_action( 'wp_enqueue_scripts', 'load_jquery_ui' );</code></pre> <strong>Pozor:</strong> Ukázka stylu ui-state-error.</p> <strong>Ahoj!</strong> Ukázka stylu ui-state-highlight.</p> Nějaké tlačítko Akordeon Autor Autor: Autokompletace Zpátky na začátek Blokové elementy Oba popisy jsou použity v souboru <code>readme.txt</code>. Tlačítko Tlačítka Seznam změn Seznam změn je součástí soubororu <code>readme.txt</code>. Zaškrtávací výběr Vícenásobný zaškrtávací výběr Volba 1 Volba 2 Volba 3 CSS třída Pomocné CSS třídy Barva: Čárkami oddělený seznam přispěvovatelů. Obsah: Přispěvovatelé Vytvořit nové WordPress téma vzhledu&hellip; Stávající verze: Vlastní licence Vlastní: Vlastní:  Datum a čas Datum: Výběr data Popis Zdroje pro vývojáře: Třídy s ikonkami Dialog Název dialogu Odkaz pro donátory Buďto vyberte jednu z předpřipravených licencí nebo zadejte název a URL jiné. Licenci nemusíte uvádět, ale je lepší ji uvést. Elementy s touto třídou používají základní barvu. Elementy s touto třídou používají zvýrazněnou barvu. Elementy s touto třídou používají barvu upozornění. Emailová adresa Zadejte adresu autorovy stránky Vložte URL licence Zadejte jméno autora Vložte jméno autora a platnou URL adresu jeho stránek. Zadejte seznam změn Vložte čárkami oddělený seznam přispěvovatelů Vložte čárkami oddělený seznam tagů Vložte aktuální verzi pluginu, minimální vyžadovanou verzi systému <b>WordPress</b>, maximální verzi systému <b>WordPress</b>, na které byl plugin testován, a verzi pluginu, která je považována za stabilní. Vložte odkaz pro donátory Vložte často kladené dotazy Vložte plný popis vašeho pluginu Vložte identifikátor pluginu Vložte název licence Vložte čárkami oddělený seznam tagů. Vložte název vašeho pluginu Vložte instalační instrukce Vložte krátký popis vašeho pluginu Vložte poznámku k upgradu Spustit průvodce FAQ HTML5 <br >a formulářové pole HTML5 a formulářové pole První První bez ikon Na příklad: <code>Mozilla Public License 2.0</code> a <code>https://www.mozilla.org/MPL/2.0/</code>. Například: <code>joed,jimb,janed</code>. Například: <code>red,black,blue</code>. Tabulkový formulář Formuláře Vestavěné ikony (náhled v barvě obsahu) Často kladené dotazy je sekce souboru <code>readme.txt</code>. Často kladené dotazy: Plný popis: Generuj plugin Rychle vygenerovat váš nový WordPress plugin&hellip; Generuj téma vzhledu Pomocné CSS třídy Níže je drobná ukázka z formulářové tabulky obdobné, jako jsou ty použité ve stránkách nastavení <b>WordPress</b>. Zvýraznění / Chyba Horizontální posuvník Identifikátor Pokud vytváříte vstupní pole data a času pro příspěvek (či vlastní typ příspěvku) můžete použít <b>WordPress</b> funkci  <a href="touch_time" target="blank"><code></code></a> (<b>Pozor:</b> Tato funkce může být použita pouze na stránkách <code>post.php</code> nebo <code>post-new.php</code> v administraci!): Přidat licenci jako samostatný soubor Vepsaný dialog Instalace Instalační instrukce jsou součástí souboru <code>readme.txt</code>. Instalační instrukce: Legenda Licence Licence Obsah Místní datum a čas: Měsíc: Mnohonásobný výběr data Vícenásobný výběr Název Název: Žádná licence Číslo: Otevřít dialog Volby Ostatní Ostatní volby pro generování pluginu Nebo můžete použít jednoduché vstupní pole data a času, jak je ukázáno níže: CSS třídy pro překryvné prvky a stíny Vlastní jQuery UI Knihovna vzorů Průvodce vytvořením pluginu Plugin obsahuje administrační část Plugin je závislý na jiných pluginech Plugin obsahuje uživatelské volby (vygeneruje stránku s volbami v rámci administrace WordPress) Plugin obsahuje vlastní databázové tabulky Plugin bude lokalizován (vytvoří adresář <code>languages</code> s <code>POT</code> souborem) Důležité tlačítko Ukazatel vývoje Radio výběr Rozpětí: Minimální vyžadovaná verze: Vyhledávání Druhá Druhá bez ikon Méně důležité tlačítko Vyberte programovací jazyk Vyběr Vybraná licence Vybraná: Krátký popis: Jednoduchý výběr data Posuvníky Několik platných označení verzí pro ukázku: <b>3.4.0</b>, <b>4.4</b>, <b>1.2.1</b> atd. Stabilní verze: Tlačítko pro odeslání Přehled obsahu Záložky Tagy Telefon Testováno do verze: Text Textový vstup Textový obsah elementů s touto třídou má základní barvu. Textový obsah elementů s touto třídou má zvýrazněnou barvu. Textový obsah elementů s touto třídou má barvu ikon. Textový obsah elementů s touto třídou má barvu upozornění. Průvodce vytvořením tématu vzhledu Třetí Třetí bez ikon Toto vytvoří podobný výstup: Čas: URL: URL adresa Poznámka k upgradu Poznámka k upgradu je součástí souboru <code>readme.txt</code>. Při vytváření nového pluginu bude toto pole nejspíše prázdné. Užitečné odkazy Používáme jQuery UI Vložte platnou URL adresu stránky pro donátory. Pokud žádnou nemáte, ponechte prázdné. Verze Vertikální posuvník (ekvalizér) Týden: Průvodci Průvodci - Průvodce vytvořením pluginu Průvodci - Průvodce vytvořením tématu vzhledu WordPress - Knihovna vzorů Popis databáze použité v systému WordPress jQuery UI jQuery UI z CDN vyber licenci 