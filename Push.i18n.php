<?php

/**
 * Internationalization file for the Push extension.
 *
 * @file Push.i18n.php
 * @ingroup Push
 *
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */

$messages = array();

/** English
 * @author Jeroen De Dauw
 */
$messages['en'] = array(
	'push-desc' => 'Lightweight extension to push content to other wikis',

	'right-push' => 'Authorization to use push functionality.',
	'right-bulkpush' => 'Authorization to use bulk push functionality (ie Special:Push).',
	'right-pushadmin' => 'Authorization to modify push targets and push settings.',

	'push-err-captacha' => 'Could not push to $1 due to captcha.',
	'push-err-captcha-page' => 'Could not push page $1 to all targets due to CAPTCHA.',
	'push-err-authentication' => 'Authentication at $1 failed. $2',

	// Tab
	'push-tab-text' => 'Push',
	'push-button-text' => 'Push',
	'push-tab-desc' => 'This tab allows you to push the current revision of this page to one or more other wikis.',
	'push-button-pushing' => 'Pushing',
	'push-button-pushing-files' => 'Pushing files',
	'push-button-completed' => 'Push completed',
	'push-button-failed' => 'Push failed',
	'push-tab-title' => 'Push $1',
	'push-targets' => 'Push targets',
	'push-add-target' => 'Add target',
	'push-import-revision-message' => 'Pushed from $1 by $2.',
	'push-tab-no-targets' => 'There are no targets to push to. Please add some to your LocalSettings.php file.',
	'push-tab-push-to' => 'Push to $1',
	'push-remote-pages' => 'Remote pages',
	'push-remote-page-link' => '$1 on $2',
	'push-remote-page-link-full' => 'View $1 on $2',
	'push-targets-total' => 'There are a total of $1 {{PLURAL:$1|target|targets}}.',
	'push-button-all' => 'Push all',
	'push-tab-last-edit' => 'Last edit by $1 on $2 at $3.',
	'push-tab-not-created' => 'This page does not exist yet.',
	'push-tab-push-options' => 'Push options:',
	'push-tab-inc-templates' => 'Include templates',
	'push-tab-used-templates' => '(Used {{PLURAL:$2|template|templates}}: $1)',
	'push-tab-no-used-templates' => '(No templates are used on this page.)',
	'push-tab-inc-files' => 'Include files',
	'push-tab-err-fileinfo' => 'Could not obtain which files are used on this page. None have been pushed.',
	'push-tab-err-filepush-unknown' => 'File push failed for an unknown reason.', 
	'push-tab-err-filepush' => 'File push failed: $1',	

	// Special page
	'special-push' => 'Push pages',
	'push-special-description' => 'This page enables you to push content of one or more pages to one or more MediaWiki wikis.

To push pages, enter the titles in the text box below, one title per line and hit push all. This can take a while to complete.',
	'push-special-pushing-desc' => 'Pushing $2 {{PLURAL:$2|page|pages}} to $1...',
	'push-special-button-text' => 'Push pages',
	'push-special-target-is' => 'Target wiki: $1',
	'push-special-select-targets' => 'Target wikis:',
	'push-special-item-pushing' => '$1: Pushing',
	'push-special-item-completed' => '$1: Push completed',
	'push-special-item-failed' => '$1: Push failed: $2',
	'push-special-push-done' => 'Push completed',
	'push-special-err-token-failed' => 'Could not obtain an edit token on the target wiki.',
	'push-special-err-pageget-failed' => 'Could not obtain local page content.',
	'push-special-err-push-failed' => 'Target wiki refused the pushed page.',
	'push-special-inc-files' => 'Include files',
	'push-special-err-imginfo-failed' => 'Could not determine if any files needed to be pushed.',
	'push-special-obtaining-fileinfo' => '$1: Obtaining file information...',
	'push-special-pushing-file' => '$1: Pushing file $2...',
	'push-special-return' => 'Push more pages',
);

/** Message documentation (Message documentation)
 * @author Jeroen De Dauw
 * @author Nike
 */
$messages['qqq'] = array(
	'push-err-authentication' => '$1: wiki name, $2: optional detailed error message',
	'push-remote-page-link' => '$1: page name, $2: wiki name',
	'push-remote-page-link-full' => '$1: page name, $2: wiki name',
);

/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'push-desc' => 'Невялікае пашырэньне для распаўсюджваньня зьместу ў іншыя вікі',
	'right-push' => 'выкарыстаньне распаўсюджваньня',
	'right-bulkpush' => 'выкарыстаньне групавога распаўсюджваньня',
	'right-pushadmin' => 'зьмена мэтаў і наладаў распаўсюджваньня',
	'push-err-captacha' => 'Немагчыма распаўсюдзіць у $1 з-за captcha.',
	'push-err-captcha-page' => 'Немагчыма распаўсюдзіць старонку $1 на ўсе мэты з-за captcha.',
	'push-err-authentication' => 'Аўтэнтыфікацыя на $1 не атрымалася. $2',
	'push-tab-text' => 'Распаўсюдзіць',
	'push-button-text' => 'Распаўсюдзіць',
	'push-tab-desc' => 'Гэтая закладка дазваляе Вам распаўсюджваць цяперашнюю вэрсію гэтай старонкі ў іншыя вікі.',
	'push-button-pushing' => 'Распаўсюджваньне',
	'push-button-completed' => 'Распаўсюджваньне скончанае',
	'push-button-failed' => 'Памылка распаўсюджваньня',
	'push-tab-title' => 'Распаўсюджваньне $1',
	'push-targets' => 'Мэты распаўсюджваньня',
	'push-add-target' => 'Дадаць мэту',
	'push-import-revision-message' => 'Распаўсюджаная з $1 $2. $3',
	'push-import-revision-comment' => 'Апошні камэнтар: $1',
	'push-tab-no-targets' => 'Няма мэтаў для распаўсюджаньня. Калі ласка, дадайце некаторыя ў Ваш файл LocalSettings.php.',
	'push-tab-push-to' => 'Распаўсюдзіць у $1',
	'push-remote-pages' => 'Аддаленыя старонкі',
);

/** Breton (Brezhoneg)
 * @author Y-M D
 */
$messages['br'] = array(
	'push-tab-text' => 'Bountañ',
	'push-button-text' => 'Bountañ',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'push-desc' => 'Ermöglicht den einfachen Transfer von Inhalten eines Wikis in ein anderes',
	'right-push' => 'Seiten in andere Wikis transferieren',
	'right-bulkpush' => 'Seiten gesammelt in andere Wikis transferieren',
	'right-pushadmin' => 'Transfereinstellungen und -ziele ändern',
	'push-err-captacha' => 'Transfer nach $1 aufgrund eines CAPTCHAs nicht möglich.',
	'push-err-captcha-page' => 'Seite $1 konnte aufgrund von CAPTCHAs zu keinem der Ziele transferiert werden.',
	'push-err-authentication' => 'Authentifizierung auf $1 ist fehlgeschlagen. $2',
	'push-tab-text' => 'Transferieren',
	'push-button-text' => 'Transferieren',
	'push-tab-desc' => 'Dieser Reiter ermöglicht den Transfer des aktuellen Seiteninhalts in ein oder mehrere andere Wikis.',
	'push-button-pushing' => 'Transferiere',
	'push-button-pushing-files' => 'Transferiere Dateien',
	'push-button-completed' => 'Transfer abgeschlossen',
	'push-button-failed' => 'Transfer fehlgeschlagen',
	'push-tab-title' => 'Transferiere $1',
	'push-targets' => 'Transferziele',
	'push-add-target' => 'Transferziel hinzufügen',
	'push-import-revision-message' => 'Transferiert von $1 durch Benutzer $2. $3',
	'push-import-revision-comment' => 'Letzter Kommentar: $1',
	'push-tab-no-targets' => 'Es sind keine Transferziele vorhanden. Es müssen welche in der Datei LocalSettings.php definiert werden.',
	'push-tab-push-to' => 'Transferiere nach $1',
	'push-remote-pages' => 'Entfernte Seiten',
	'push-remote-page-link' => 'Seite $1 auf Wiki $2',
	'push-remote-page-link-full' => 'Seite $1 auf Wiki $2 ansehen',
	'push-targets-total' => 'Es {{PLURAL:$1|ist|sind}} insgesamt $1 {{PLURAL:$1|Transferziel|Transferziele}} vorhanden.',
	'push-button-all' => 'Alle transferieren',
	'push-tab-last-edit' => 'Letzte Bearbeitung durch Benutzer $1 am $2 um $3 Uhr.',
	'push-tab-not-created' => 'Diese Seite ist nicht vorhanden.',
	'push-tab-push-options' => 'Transferoptionen:',
	'push-tab-inc-templates' => 'Vorlagen einbeziehen',
	'push-tab-used-templates' => '({{PLURAL:$2|Vorlage|Vorlagen}} eingesetzt: $1)',
	'push-tab-no-used-templates' => '(Auf dieser Seite werden keine Vorlagen eingesetzt.)',
	'push-tab-inc-files' => 'Dateien einbeziehen',
	'push-tab-err-fileinfo' => 'Es konnte nicht ermittelt werden, welche Dateien auf dieser Seite eingebunden sind. Es wurde keine transferiert.',
	'special-push' => 'Seiten transferieren',
	'push-special-description' => 'Diese Spezialseite ermöglicht es den Inhalt einer oder mehrerer Seiten zu einem oder mehreren anderen Wikis zu transferieren.

Um Seiten zu transferieren, sind deren Titel im Eingabefeld unten anzugeben (ein Titel pro Zeile). Klicke danach auf „{{int:push-special-button-text}}“. Es kann etwas dauern, bis der Transfer abgeschlossen ist.',
	'push-special-pushing-desc' => 'Transferiere $2 {{PLURAL:$2|Seite|Seiten}} nach $1 …',
	'push-special-button-text' => 'Seiten transferieren',
	'push-special-target-is' => 'Zielwiki: $1',
	'push-special-select-targets' => 'Zielwikis:',
	'push-special-item-pushing' => '$1: Transferiere …',
	'push-special-item-completed' => '$1: Transfer abgeschlossen',
	'push-special-item-failed' => '$1: Transfer fehlgeschlagen. $2',
	'push-special-push-done' => 'Transfer abgeschlossen',
	'push-special-err-token-failed' => 'Auf dem Zielwiki konnte der Bearbeitungstoken nicht abgerufen werden.',
	'push-special-err-pageget-failed' => 'Auf diesem Wiki konnte der Seiteninhalt nicht abgerufen werden.',
	'push-special-err-push-failed' => 'Das Zielwiki hat die zu transferierende Seite zurückgewiesen.',
	'push-special-inc-files' => 'Dateien einbeziehen',
	'push-special-err-imginfo-failed' => 'Es konnte nicht ermittelt werden, ob auch Dateien transferiert werden müssen.',
	'push-special-obtaining-fileinfo' => '$1: Dateiinformationen werden abrufen …',
	'push-special-pushing-file' => '$1: Transferiere Datei $2 …',
	'push-special-return' => 'Weitere Seiten transferieren',
);

/** Finnish (Suomi)
 * @author Tofu II
 */
$messages['fi'] = array(
	'push-add-target' => 'Lisää kohde',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'push-add-target' => 'Cil přidać',
	'push-import-revision-comment' => 'Posledni komentar: $1',
	'push-remote-pages' => 'Zdalene strony',
	'push-remote-page-link' => '$1 w $2',
	'push-remote-page-link-full' => 'Stronu $1 na $2 sej wobhladać',
	'push-targets-total' => '{{PLURAL:$1|Je $1 strona|Stej $1 stronje|Su $1 strony|Je $1 stronow}}.',
	'push-tab-inc-templates' => 'Předłohi zapřijeć',
	'push-tab-used-templates' => '({{PLURAL:$2|Wužita předłoha|Wužitej předłoze|Wužite předłohi|Wužite předłohi}}: $1)',
	'push-tab-no-used-templates' => '(Na tutej stronje so žane přełohi wužiwaja.)',
	'push-special-target-is' => 'Cilowy wiki: $1',
	'push-special-select-targets' => 'Cilowe wikije:',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'push-desc' => 'Extension simple pro transferer contento a altere wikis',
	'right-push' => 'Autorisation a usar le functionalitate de transferimento.',
	'right-bulkpush' => 'Autorisation a usar le functionalitate de transferimento in massa (i.e. Special:Push).',
	'right-pushadmin' => 'Autorisation a modificar destinationes e configurationes de transferimento.',
	'push-err-captacha' => 'Non poteva transferer a $1 a causa de un problema con le "captcha".',
	'push-err-captcha-page' => 'Non poteva transferer le pagina $1 a tote le destinationes proque un "captcha" esseva incontrate.',
	'push-err-authentication' => 'Authentication a $1 ha fallite. $2',
	'push-tab-text' => 'Transferer',
	'push-button-text' => 'Transferer',
	'push-tab-desc' => 'Iste scheda permitte transferer le version actual de iste pagina a un o plus altere wikis.',
	'push-button-pushing' => 'Transferimento in curso',
	'push-button-completed' => 'Transferimento complete',
	'push-button-failed' => 'Transferimento fallite',
	'push-tab-title' => 'Transfere $1',
	'push-targets' => 'Destinationes de transferimento',
	'push-add-target' => 'Adder destination',
	'push-import-revision-message' => 'Transferite ex $1 per $2. $3',
	'push-import-revision-comment' => 'Ultime commento: $1',
	'push-tab-no-targets' => 'Il non ha destinationes de transferimento. Per favor adde alcunes in tu file LocalSettings.php.',
	'push-tab-push-to' => 'Transferer a $1',
	'push-remote-pages' => 'Paginas remote',
	'push-remote-page-link' => '$1 in $2',
	'push-remote-page-link-full' => 'Vider $1 in $2',
	'push-targets-total' => 'Il ha un total de $1 {{PLURAL:$1|destination|destinationes}}.',
	'push-button-all' => 'Transferer totes',
	'push-tab-last-edit' => 'Ultime modification per $1 le $2 a $3.',
	'push-tab-not-created' => 'Iste pagina non existe ancora.',
	'push-tab-push-options' => 'Optiones de transferimento:',
	'push-tab-inc-templates' => 'Includer patronos',
	'push-tab-used-templates' => '({{PLURAL:$2|Patrono|Patronos}} usate: $1)',
	'push-tab-no-used-templates' => '(Nulle patrono es usate in iste pagina.)',
	'special-push' => 'Transferer paginas',
	'push-special-description' => 'Iste pagina permitte transferer le contento de un o plus paginas a un o plus wikis MediaWiki.

Pro transferer paginas, entra le titulos in le quadro de texto hic infra, un titulo per linea, e preme "Transferer totes". Isto pote prender certe un tempore.',
	'push-special-pushing-desc' => 'Transfere $2 {{PLURAL:$2|pagina|paginas}} a $1...',
	'push-special-button-text' => 'Transferer paginas',
	'push-special-target-is' => 'Wiki de destination: $1',
	'push-special-select-targets' => 'Wikis de destination:',
	'push-special-item-pushing' => '$1: Transferimento in curso',
	'push-special-item-completed' => '$1: Transferimento complete',
	'push-special-item-failed' => '$1: Transferimento fallite: $2',
	'push-special-push-done' => 'Transferimento complete',
	'push-special-err-token-failed' => 'Non poteva obtener un indicio de modification in le wiki de destination.',
	'push-special-err-pageget-failed' => 'Non poteva obtener le contento del pagina local.',
	'push-special-err-push-failed' => 'Le wiki de destination refusava le pagina transferite.',
);

/** Indonesian (Bahasa Indonesia)
 * @author IvanLanin
 */
$messages['id'] = array(
	'push-desc' => 'Ekstensi ringan untuk mendorong konten ke wiki lainnya',
	'right-push' => 'Otorisasi untuk menggunakan fungsi dorong.',
	'right-bulkpush' => 'Otorisasi untuk menggunakan fungsi dorong massal (Special:Push).',
	'right-pushadmin' => 'Otorisasi untuk memodifikasi target dan pengaturan dorong.',
	'push-err-captacha' => 'Tidak dapat mendorong ke $1 karena captcha.',
	'push-err-captcha-page' => 'Tidak dapat mendorong halaman $1 ke semua target karena captcha.',
	'push-err-authentication' => 'Otentikasi pada $1 gagal. $2',
	'push-tab-text' => 'Dorong',
	'push-button-text' => 'Dorong',
	'push-tab-desc' => 'Tab ini mengizinkan Anda untuk mendorong revisi terbaru halaman ini ke satu atau lebih wiki lain.',
	'push-button-pushing' => 'Mendorong',
	'push-button-completed' => 'Pendorongan selesai',
	'push-button-failed' => 'Pendorongan gagal',
	'push-tab-title' => 'Mendorong $1',
	'push-targets' => 'Target pendorongan',
	'push-add-target' => 'Tambahkan target',
	'push-import-revision-message' => 'Didorong dari $1 oleh $2. $3',
	'push-import-revision-comment' => 'Komentar terakhir: $1',
	'push-tab-no-targets' => 'Tidak ada target untuk pendorongan. Harap tambahkan beberapa berkas ke LocalSettings.php Anda.',
	'push-tab-push-to' => 'Dorong ke $1',
	'push-remote-pages' => 'Halaman luar',
	'push-remote-page-link' => '$1 pada $2',
	'push-remote-page-link-full' => 'Lihat $1 pada $2',
	'push-targets-total' => 'Total ada $1 {{PLURAL:$1|target|target}}.',
	'push-button-all' => 'Dorong semua',
	'push-tab-last-edit' => 'Suntingan terakhir oleh $1 pada $2 $3.',
	'push-tab-not-created' => 'Halaman ini belum ada.',
	'push-tab-push-options' => 'Pilihan dorongan:',
	'push-tab-inc-templates' => 'Sertakan templat',
	'push-tab-used-templates' => '({{PLURAL:$2|Templat|Templat}} yang digunakan: $1)',
	'push-tab-no-used-templates' => '(Tidak ada templat yang digunakan pada halaman ini.)',
	'special-push' => 'Dorong halaman',
	'push-special-description' => 'Halaman ini memungkinkan Anda untuk mendorong satu atau lebih halaman ke satu atau lebih wiki MediaWiki.

Untuk mendorong halaman, masukkan judul dalam kotak teks di bawah ini, satu judul per baris, dan tekan dorong semua. Proses ini dapat memakan waktu cukup lama.',
	'push-special-pushing-desc' => 'Mendorong $2 {{PLURAL:$2|halaman|halaman}} ke $1...',
	'push-special-button-text' => 'Dorong halaman',
	'push-special-target-is' => 'Wiki target: $1',
	'push-special-select-targets' => 'Wiki target:',
	'push-special-item-pushing' => '$1: Mendorong',
	'push-special-item-completed' => '$1: Pendorongan selesai',
	'push-special-item-failed' => '$1: Pendorongan gagal: $2',
	'push-special-push-done' => 'Pendorongan selesai',
	'push-special-err-token-failed' => 'Tidak dapat memperoleh token sunting pada wiki target.',
	'push-special-err-pageget-failed' => 'Tidak dapat memperoleh konten halaman lokal.',
	'push-special-err-push-failed' => 'Wiki target menolak laman yang didorong.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'push-desc' => 'Erweiderung déi en einfachen Transfert (Push) vun Inhalt op aner Wikien erméiglecht',
	'right-push' => "Autorisatioun fir d'Push-Fonctionalitéit ze benotzen",
	'right-bulkpush' => 'Autorisatioun fir méi Säite mateneen per Push an aner Wikien ze transferéieren',
	'right-pushadmin' => "Autorisatioun fir d'Zil an d'Astellungen vun der Push-Fonctionalitéit z'änneren.",
	'push-err-captacha' => 'Push op $1 konnt wéint dem Captcha net gemaach ginn.',
	'push-button-completed' => 'Push ofgeschloss',
	'push-import-revision-comment' => 'Lescht Bemierkung: $1',
	'push-remote-page-link' => '$1 op $2',
	'push-remote-page-link-full' => '$1 op $2 weisen',
	'push-button-all' => 'All pushen',
	'push-tab-last-edit' => 'Lescht Ännerung vum $1 de(n) $2 ëm $3 Auer.',
	'push-tab-not-created' => 'Dës Säit gëtt et nach net',
	'special-push' => 'Säite pushen',
	'push-special-button-text' => 'Säite pushen',
	'push-special-select-targets' => 'Zielwikien:',
	'push-special-item-pushing' => '$1: Pushen',
	'push-special-push-done' => 'Push ofgeschloss',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'push-desc' => 'Мал додаток за пренесување на содржини од едно на други викија',
	'right-push' => 'Потврда на сметка за да работи функцијата за пренесување.',
	'right-bulkpush' => 'Потврда на сметка за да работи функцијата за групно пренесување (т.е. Special:Push).',
	'right-pushadmin' => 'Потврда на сметка за измена на одредниците и поставките за пренесување.',
	'push-err-captacha' => 'Не можев да го пренесам $1 поради Captcha.',
	'push-err-captcha-page' => 'Не можев да ја пренесам страницата $1 на сите одредници заради Captcha.',
	'push-err-authentication' => 'Потврдувањето на $1 не успеа. $2',
	'push-tab-text' => 'Пренеси',
	'push-button-text' => 'Пренеси',
	'push-tab-desc' => 'Ова јазиче ви овозможува да ја пренесете тековната ревизија на страницава на едно или повеќе викија',
	'push-button-pushing' => 'Пренесувам',
	'push-button-pushing-files' => 'Пренесувам податотеки',
	'push-button-completed' => 'Преносот заврши',
	'push-button-failed' => 'Преносот не успеа',
	'push-tab-title' => 'Пренесување на $1',
	'push-targets' => 'Одредници за преносот',
	'push-add-target' => 'Додај одредница',
	'push-import-revision-message' => 'Пренесено од $1. Пренел: $2. $3',
	'push-import-revision-comment' => 'Последен коментар: $1',
	'push-tab-no-targets' => 'Нема одредници во кои би се извршил преносот. Додајте места во вашата податотека LocalSettings.php.',
	'push-tab-push-to' => 'Пренеси во $1',
	'push-remote-pages' => 'Далечински страници',
	'push-remote-page-link' => '$1 на $2',
	'push-remote-page-link-full' => 'Преглед на $1 на $2',
	'push-targets-total' => 'Има вкупно $1 {{PLURAL:$1|одредница|одредници}}.',
	'push-button-all' => 'Пренеси сè',
	'push-tab-last-edit' => 'Последна измена од $1 на $2 во $3 ч.',
	'push-tab-not-created' => 'Оваа страница сè уште не постои.',
	'push-tab-push-options' => 'Поставки за преносот:',
	'push-tab-inc-templates' => 'Вклучи шаблони',
	'push-tab-used-templates' => '({{PLURAL:$2|Шаблон|Шаблони}} во употреба: $1)',
	'push-tab-no-used-templates' => '(На страницава не се користат шаблони.)',
	'push-tab-inc-files' => 'Вклучи податотеки',
	'special-push' => 'Пренесување страници',
	'push-special-description' => 'Оваа страница ви овозможува да пренесете содржини од една или повеќе страници од едно вики во едно или повеќе викија што работат на МедијаВики.

За да пренесете, внесете ги насловите во полето подолу, по едно во секој ред, па стиснете на „Пренеси сè“. Ова може да потрае.',
	'push-special-pushing-desc' => 'Пренесувам $2 {{PLURAL:$2|страница|страници}} во $1...',
	'push-special-button-text' => 'Пренеси',
	'push-special-target-is' => 'Целно вики: $1',
	'push-special-select-targets' => 'Целни викија:',
	'push-special-item-pushing' => '$1: Преместување',
	'push-special-item-completed' => '$1: Преносот заврши',
	'push-special-item-failed' => '$1: Преносот не успеа: $2',
	'push-special-push-done' => 'Преносот заврши',
	'push-special-err-token-failed' => 'Не можев да го добијам жетонот на уредувањето на целното вики.',
	'push-special-err-pageget-failed' => 'Не можев да ја добијам содржината на локалната страница.',
	'push-special-err-push-failed' => 'Целното вики ја одби пренесената страница.',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'push-desc' => "Lichtgewichtuitbreiding om inhoud naar andere wiki's te sturen",
	'right-push' => "Mag inhoud naar andere wiki's versturen.",
	'right-bulkpush' => "Mag en masse inhoud naar andere wiki's versturen.",
	'right-pushadmin' => "Mag doelwiki's en instellingen voor het versturen van inhoud aanpassen.",
	'push-err-captacha' => 'Het was niet mogelijk inhoud te verzenden naar $1 omdat de andere wiki een captchaoplossing heeft gevraagd.',
	'push-err-captcha-page' => "Het was niet mogelijk de pagina $1 naar alle doelwiki's te verzenden omdat er om een captchaoplossing is gevraagd.",
	'push-err-authentication' => 'Het aanmelden bij $1 is mislukt. $2',
	'push-tab-text' => 'Verzenden',
	'push-button-text' => 'Verzenden',
	'push-tab-desc' => "Via dit tabblad kunt u de inhoud van de huidige versie van deze pagina naar een of meer andere wiki's verzenden.",
	'push-button-pushing' => 'Bezig met verzenden',
	'push-button-completed' => 'Het verzenden is voltooid',
	'push-button-failed' => 'Het verzenden is mislukt',
	'push-tab-title' => 'Bezig met het verzenden van $1',
	'push-targets' => "Doelwiki's",
	'push-add-target' => 'Doelwiki toevoegen',
	'push-import-revision-message' => 'Verzonden vanuit $1 door $2. $3',
	'push-import-revision-comment' => 'Laatste opmerking: $1',
	'push-tab-no-targets' => "Er zijn geen beschikbare doelwiki's. Voeg deze eerst toe aan uw LocalSettings.php-bestand.",
	'push-tab-push-to' => 'Verzenden naar $1',
	'push-remote-pages' => "Pagina's in andere wiki's",
	'push-remote-page-link' => '$1 op $2',
	'push-remote-page-link-full' => '$1 op $2 bekijken',
	'push-targets-total' => "Er {{PLURAL:$1|is één doelwiki|zijn $1 doelwiki's}}.",
	'push-button-all' => 'Alles verzenden',
	'push-tab-last-edit' => 'Laatste bewerking door $1 op $2 om $3.',
	'push-tab-not-created' => 'Deze pagina bestaat nog niet.',
	'push-tab-push-options' => 'Verzendinstellingen:',
	'push-tab-inc-templates' => 'Sjablonen ook verzenden',
	'push-tab-used-templates' => '{{PLURAL:$2|Gebruikt sjabloon|Gebruikte sjablonen}}: $1',
	'push-tab-no-used-templates' => 'Er worden geen sjablonen gebruikt op deze pagina.',
	'special-push' => "Pagina's verzenden",
	'push-special-description' => "Via deze pagina kunt u de inhoud van een of meer pagina's naar een of meer MediaWiki-wiki's verzenden.

Voer paginanamen in het onderstaande invoerveld in om pagina's te kunnen verzenden.
Voer iedere paginanaam in op een nieuwe regel en klik op \"Alles verzenden\".
Het verzenden kan enige tijd kosten.",
	'push-special-pushing-desc' => "Bezig met het verzenden van {{PLURAL:$2|één pagina|$2 pagina's}} naar $1...",
	'push-special-button-text' => "Pagina's verzenden",
	'push-special-target-is' => 'Doelwiki: $1',
	'push-special-select-targets' => "Doelwiki's:",
	'push-special-item-pushing' => '$1: bezig met verzenden',
	'push-special-item-completed' => '$1: het verzenden is voltooid',
	'push-special-item-failed' => '$1: het verzenden is mislukt: $2',
	'push-special-push-done' => 'Het verzenden is afgerond',
	'push-special-err-token-failed' => 'Het was niet mogelijk een bewerkingstoken te verkrijgen van de doelwiki.',
	'push-special-err-pageget-failed' => 'Het was niet mogelijk de inhoud van de lokale pagina te verkrijgen.',
	'push-special-err-push-failed' => 'De doelwiki heeft de verzonden pagina niet geaccepteerd.',
);

/** Russian (Русский)
 * @author DCamer
 * @author Lockal
 */
$messages['ru'] = array(
	'push-desc' => 'Небольшое расширение для помещения содержимого в другие вики',
	'right-push' => 'Авторизуйтесь чтобы использовать эту функцию.',
	'right-bulkpush' => 'Авторизуйтесь чтобы использовать эту объёмную функцию (например, Служебная:Push)',
	'right-pushadmin' => 'Авторизуйтесь чтобы изменять настройки и направления размещения.',
	'push-err-captacha' => 'Не удалось разместить на $1 из-за капчи.',
	'push-tab-text' => 'Разместить',
	'push-button-text' => 'Поместить',
	'push-tab-desc' => 'Эта вкладка позволяет разместить текущею версию этой страницы на одну или нескольких других вики.',
	'push-button-pushing' => 'Размещение',
	'push-button-completed' => 'Размещение завершено',
	'push-button-failed' => 'Размещение не удалось',
	'push-tab-title' => 'Размещение $1',
	'push-targets' => 'Направление размещения',
	'push-add-target' => 'Добавить направление',
	'push-import-revision-message' => 'Импортировать от $1 до $2. $3',
	'push-import-revision-comment' => 'Последний комментарий: $1',
	'push-tab-no-targets' => 'Отсутствует направления размещения. Пожалуйста, добавьте их в файл LocalSettings.php.',
	'push-tab-push-to' => 'Размещение на $1',
	'push-remote-pages' => 'Удалённые страницы',
	'push-remote-page-link' => '$1 на $2',
	'push-remote-page-link-full' => 'Просмотреть $1 на $2',
	'push-targets-total' => 'Всего $1 {{PLURAL:$1|направление|направления}}.',
	'push-button-all' => 'Разместить все',
	'special-push' => 'Разместить страницы',
	'push-special-description' => 'Эта страница позволяет разместить содержимое одной или нескольких страниц на одну или несколько других вики-сайтов на движке MediaWiki.

Для того, чтобы разместить страницы, введите названия в текстовом поле ниже, один заголовок на строку, и нажмите «Разместить все». Это может занять некоторое время.',
	'push-special-pushing-desc' => 'Размещение $2 {{PLURAL:$2|страницы|страниц}} на $1...',
	'push-special-button-text' => 'Разместить страницы',
	'push-special-target-is' => 'Целевой вики-сайт: $1',
	'push-special-select-targets' => 'Целевые вики-сайты:',
	'push-special-item-pushing' => '$1: Размещение',
	'push-special-item-completed' => '$1: Размещение завершено',
	'push-special-item-failed' => '$1: Размещение не удалось: $2',
	'push-special-push-done' => 'Размещение завершено',
	'push-special-err-token-failed' => 'Не удалось получить маркер редактирование на целевом вики-сайте.',
	'push-special-err-pageget-failed' => 'Не удалось получить локальное содержимое страницы.',
	'push-special-err-push-failed' => 'Целевой вики-сайт отказался разместить страницу.',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'push-import-revision-comment' => 'చివరి వ్యాఖ్య: $1',
	'push-special-target-is' => 'లక్ష్యిత వికీ: $1',
	'push-special-select-targets' => 'లక్ష్యిత వికీలు:',
);

