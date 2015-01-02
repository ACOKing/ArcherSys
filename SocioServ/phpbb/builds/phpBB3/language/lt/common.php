<?php
/** 
*
* common.php [Lithuanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group 
* @author 2007-08-28 - Vilius Šumskas
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'TRANSLATION_INFO'	=> 'Vertė <a href="http://www.tekila.lt">Vilius Šumskas</a> &copy; 2003, 2005, 2007',
	'DIRECTION'	=> 'ltr',
	'DATE_FORMAT'	=> '|Y M d|',
	'USER_LANG'	=> 'lt-lt',
	'1_DAY'	=> '1 dienos',
	'1_MONTH'	=> '1 mėnesio',
	'1_YEAR'	=> '1 metų',
	'2_WEEKS'	=> '2 savaičių',
	'3_MONTHS'	=> '3 mėnesių',
	'6_MONTHS'	=> '6 mėnesių',
	'7_DAYS'	=> '7 dienų',
	'ACCOUNT_ALREADY_ACTIVATED'	=> 'Jūsų vartotojo vardas jau aktyvuotas.',
	'ACCOUNT_DEACTIVATED'	=> 'Jūsų vartotojo vardas buvo išjungtas ir tik administratorius gali jį įjungti.',
	'ACCOUNT_NOT_ACTIVATED'	=> 'Jūsų vartotojo vardas dar neaktyvuotas.',
	'ACP'	=> 'Administratoriaus valdymo pultas',
	'ACTIVE'	=> 'aktyvus',
	'ACTIVE_ERROR'	=> 'Šis vartotojo vardas yra neaktyvus. Jeigu turite bėdų aktyvuodami savo vartotojo vardą, kreipkitės į diskusijų lentos administratorių.',
	'ADMINISTRATOR'	=> 'Administratorius',
	'ADMINISTRATORS'	=> 'Administratoriai',
	'AGE'	=> 'Amžius',
	'AIM'	=> 'AIM',
	'ALLOWED'	=> 'leidžiama',
	'ALL_FILES'	=> 'Visi failai',
	'ALL_FORUMS'	=> 'Visi forumai',
	'ALL_MESSAGES'	=> 'Visos žinutės',
	'ALL_POSTS'	=> 'Visi pranešimai',
	'ALL_TIMES'	=> 'Visos datos yra %1$s %2$s',
	'ALL_TOPICS'	=> 'Visos temos',
	'AND'	=> 'ir',
	'ARE_WATCHING_FORUM'	=> 'Jūs užsisakėte gauti perspėjimus apie naujus pranešimus šiame forume.',
	'ARE_WATCHING_TOPIC'	=> 'Jūs užsisakėte gauti perspėjimus apie naujus pranešimus šioje temoje.',
	'ASCENDING'	=> 'Didėjančia tvarka',
	'ATTACHMENTS'	=> 'Prikabinti failai',
	'ATTACHED_IMAGE_NOT_IMAGE'	=> 'Paveikslėlis kurį bandėte prikabinti yra netinkamas.',
	'AUTHOR'	=> 'Autorių',
	'AUTH_NO_PROFILE_CREATED'	=> 'Nepavyko sukurti vartotojo aprašymo.',
	'AVATAR_DISALLOWED_EXTENSION'	=> 'Šis failas negali būti rodomas, kadangi išplėtimas <strong>%s</strong> yra neleistinas.',
	'AVATAR_EMPTY_REMOTE_DATA'	=> 'Šis avataras nebuvo įkeltas, kadangi yra netinkamas arba sugadintas.',
	'AVATAR_EMPTY_FILEUPLOAD'	=> 'Įkelto avataro failas yra tuščias.',
	'AVATAR_INVALID_FILENAME'	=> 'Failo pavadinimas %s yra netinkamas.',
	'AVATAR_NOT_UPLOADED'	=> 'Avataras neįkeltas.',
	'AVATAR_NO_SIZE'	=> 'Nepavyko nustatyti nutolusio avataro pločio ir aukščio. Įveskite juos patys.',
	'AVATAR_PARTIAL_UPLOAD'	=> 'Šis failas buvo tik dalinai įkeltas.',
	'AVATAR_PHP_SIZE_NA'	=> 'Avataro failas per didelis.<br />Nepavyko nustatyti maksimalaus leistino dydžio konfigūraciniame faile php.ini.',
	'AVATAR_PHP_SIZE_OVERRUN'	=> 'Avataro failas per didelis. Maksimalus leistinas įkeliamo failo dydis yra %d MB.<br />Taip nustatyta konfigūraciniame faile php.ini.',
	'AVATAR_URL_INVALID'	=> 'Tokio URL adreso nėra.',
	'AVATAR_URL_NOT_FOUND'	=> 'Tokio failo nėra.',
	'AVATAR_WRONG_FILESIZE'	=> 'Avataro failo dydis turi būti tarp 0 ir %1d %2s.',
	'AVATAR_WRONG_SIZE'	=> 'Avataras yra %5$d pikselių pločio ir %6$d pikselių aukščio. Avatarai turi būti bent %1$d pikselių pločio ir %2$d pikselių aukščio, bet ne didesni nei %3$d pikselių pločio ir %4$d pikselių aukščio.',
	'BACK_TO_TOP'	=> 'Į viršų',
	'BACK_TO_PREV'	=> 'Grįžti į ankstesnį puslapį',
	'BAN_TRIGGERED_BY_EMAIL'	=> 'Jūsų el. pašto adresas blokuojamas.',
	'BAN_TRIGGERED_BY_IP'	=> 'Jūsų IP adresas blokuojamas.',
	'BAN_TRIGGERED_BY_USER'	=> 'Jūsų vartotojo vardas blokuojamas.',
	'BBCODE_GUIDE'	=> 'BBKodo gidas',
	'BCC'	=> 'BCC',
	'BIRTHDAYS'	=> 'Gimtadieniai',
	'BOARD_BAN_PERM'	=> 'Jūs buvote užblokuotas <strong>visam laikui</strong>.<br /><br />Norėdami gauti daugiau informacijos susisiekite su %2$sdiskusijų administratoriumi%3$s.',
	'BOARD_BAN_REASON'	=> 'Blokavimo priežastis: <strong>%s</strong>',
	'BOARD_BAN_TIME'	=> 'Jūs buvote užblokuotas iki <strong>%1$s</strong>.<br /><br />Norėdami gauti daugiau informacijos susisiekite su %2$sdiskusijų administratoriumi%3$s.',
	'BOARD_DISABLE'	=> 'Atsiprašome, tačiau diskusijos laikinai nepasiekiamos.',
	'BOARD_DISABLED'	=> 'Diskusijų lenta laikinai išjungta.',
	'BOARD_UNAVAILABLE'	=> 'Atsiprašome, tačiau diskusijos laikinai nepasiekiamos. Pabandykite jungtis po keletos minučių.',
	'BROWSING_FORUM_GUEST'	=> 'Vartotojai naršantys šį forumą: %1$s ir %2$d svečias',
	'BROWSING_FORUM_GUESTS'	=> 'Vartotojai naršantys šį forumą: %1$s ir %2$d svečių',
	'BYTES'	=> 'Baitų',
	'CANCEL'	=> 'Atšaukti',
	'CHANGE'	=> 'Pakeisti',
	'CHANGE_FONT_SIZE'	=> 'Pakeisti šrifto dydį',
	'CHANGING_PREFERENCES'	=> 'Keičiami diskusijų nustatymai',
	'CHANGING_PROFILE'	=> 'Keičiami aprašo nustatymai',
	'CLICK_VIEW_PRIVMSG'	=> '%sPeržiūrėti asmeninius pranešimus%s',
	'COLLAPSE_VIEW'	=> 'Suskleisti vaizdą',
	'CLOSE_WINDOW'	=> 'Uždaryti langą',
	'COLOUR_SWATCH'	=> 'Spalvų peletė',
	'COMMA_SEPARATOR'	=> ', ',
	'CONFIRM'	=> 'Patvirtinti',
	'CONFIRM_CODE'	=> 'Patvirtinimo kodas',
	'CONFIRM_CODE_EXPLAIN'	=> 'Tiksliai įrašykite paveikslėlyje matomą kodą. Didžiosios ir mažosios raidės nesvarbios. Nulio kode taip pat nėra.',
	'CONFIRM_CODE_WRONG'	=> 'Patvirtinimo kodas kurį įrašėte yra neteisingas.',
	'CONFIRM_OPERATION'	=> 'Ar tikrai norite tęsti operaciją?',
	'CONGRATULATIONS'	=> 'Sveikiname',
	'CONNECTION_FAILED'	=> 'Prisijungti nepavyko.',
	'CONNECTION_SUCCESS'	=> 'Prisijungti pavyko!',
	'COOKIES_DELETED'	=> 'Visi diskusijų sausainėliai sėkmingai ištrinti.',
	'CURRENT_TIME'	=> 'Dabar yra %s',
	'DAY'	=> 'Diena',
	'DAYS'	=> 'Dienų',
	'DELETE'	=> 'Ištrinti',
	'DELETE_ALL'	=> 'Ištrinti visus',
	'DELETE_COOKIES'	=> 'Ištrinti visus diskusijų sausainėlius',
	'DELETE_MARKED'	=> 'Ištrinti pažymėtus',
	'DELETE_POST'	=> 'Ištrinti pranešimą',
	'DELIMITER'	=> 'Skirtukas',
	'DESCENDING'	=> 'Mažėjančia tvarka',
	'DISABLED'	=> 'Išjungta',
	'DISPLAY'	=> 'Rodyti',
	'DISPLAY_GUESTS'	=> 'Rodyti svečius',
	'DISPLAY_MESSAGES'	=> 'Rodyti paskutines žinutes',
	'DISPLAY_POSTS'	=> 'Rodyti paskutinius pranešimus',
	'DISPLAY_TOPICS'	=> 'Rodyti paskutines temas',
	'DOWNLOADED'	=> 'Atsisiųsta',
	'DOWNLOADING_FILE'	=> 'Failas siunčiamas',
	'DOWNLOAD_COUNT'	=> 'Atsisiųsta %d kartą',
	'DOWNLOAD_COUNTS'	=> 'Atsisiųsta %d kartus(ų)',
	'DOWNLOAD_COUNT_NONE'	=> 'Dar neatsisiųsta',
	'VIEWED_COUNT'	=> 'Peržiūrėta %d kartą',
	'VIEWED_COUNTS'	=> 'Peržiūrėta %d kartus(ų)',
	'VIEWED_COUNT_NONE'	=> 'Dar neperžiūrėta',
	'EDIT_POST'	=> 'Redaguoti pranešimą',
	'EMAIL'	=> 'El. paštas',
	'EMAIL_ADDRESS'	=> 'El. pašto adresas',
	'EMAIL_SMTP_ERROR_RESPONSE'	=> 'Siunčiant el. paštą <strong>eilutėje %1$s</strong> iškilo problemų. Priežastis: %2$s.',
	'EMPTY_SUBJECT'	=> 'Kurdami naują temą turite įrašyti jos pavadinimą.',
	'EMPTY_MESSAGE_SUBJECT'	=> 'Rašydami naują žinutę turite nurodyti jos temą.',
	'ENABLED'	=> 'Įjungta',
	'ENCLOSURE'	=> 'Priedas',
	'ERR_CHANGING_DIRECTORY'	=> 'Pakeisti katalogo nepavyko.',
	'ERR_CONNECTING_SERVER'	=> 'Prisijungti prie serverio nepavyko.',
	'ERR_UNABLE_TO_LOGIN'	=> 'Nurodytas vartotojo vardas arba slaptažodis yra neteisingas.',
	'ERR_WRONG_PATH_TO_PHPBB'	=> 'Kelias iki phpBB yra netinkamas.',
	'EXPAND_VIEW'	=> 'Išskleisti vaizdą',
	'EXTENSION'	=> 'Išplėtimas',
	'EXTENSION_DISABLED_AFTER_POSTING'	=> 'Išplėtimas <strong>%s</strong> buvo išjungtas ir daugiau neberodomas.',
	'FAQ'	=> 'DUK',
	'FAQ_EXPLAIN'	=> 'Dažnai užduodami klausimai',
	'FILENAME'	=> 'Failo pavadinimas',
	'FILESIZE'	=> 'Failo dydis',
	'FILEDATE'	=> 'Failo data',
	'FILE_COMMENT'	=> 'Failo aprašymas',
	'FILE_NOT_FOUND'	=> 'Nepavyko rasti nurodyto failo.',
	'FIND_USERNAME'	=> 'Surasti dalyvį',
	'FOLDER'	=> 'Katalogas',
	'FORGOT_PASS'	=> 'Aš pamiršau savo slaptažodį',
	'FORUM'	=> 'Forumas',
	'FORUMS'	=> 'Forumai',
	'FORUMS_MARKED'	=> 'Visi forumai pažymėti kaip perskaityti.',
	'FORUM_CAT'	=> 'Forumo kategorija',
	'FORUM_INDEX'	=> 'Pagrindinis diskusijų puslapis',
	'FORUM_LINK'	=> 'Forumo nuoroda',
	'FORUM_LOCATION'	=> 'Forume',
	'FORUM_LOCKED'	=> 'Forumas užrakintas',
	'FORUM_RULES'	=> 'Forumo taisyklės',
	'FORUM_RULES_LINK'	=> 'Čia galite perskaityti forumo taisykles',
	'FROM'	=> 'iš',
	'FSOCK_DISABLED'	=> 'Operacija neįvykdyta, nes <var>fsockopen</var> funkcija yra išjungta arba nepavyko rasti nurodyto serverio.',
	'FTP_FSOCK_HOST'	=> 'FTP serveris',
	'FTP_FSOCK_HOST_EXPLAIN'	=> 'Jūsų FTP serverio vardas.',
	'FTP_FSOCK_PASSWORD'	=> 'FTP slaptažodis',
	'FTP_FSOCK_PASSWORD_EXPLAIN'	=> 'Jūsų FTP vartotojo vardo slaptažodis.',
	'FTP_FSOCK_PORT'	=> 'FTP portas',
	'FTP_FSOCK_PORT_EXPLAIN'	=> 'Portas naudojamas prisijungimui prie jūsų serverio.',
	'FTP_FSOCK_ROOT_PATH'	=> 'Kelias iki phpBB',
	'FTP_FSOCK_ROOT_PATH_EXPLAIN'	=> 'Failų sistemos kelias iki jūsų phpBB diskusijų lentos.',
	'FTP_FSOCK_TIMEOUT'	=> 'Bandymo prisijungti prie FTP laiko limitas',
	'FTP_FSOCK_TIMEOUT_EXPLAIN'	=> 'Laiko tarpas sekundėmis, kurį sistema lauks atsakymo iš jūsų serverio.',
	'FTP_FSOCK_USERNAME'	=> 'FTP vartotojo vardas',
	'FTP_FSOCK_USERNAME_EXPLAIN'	=> 'Jūsų FTP vartotojo vardas.',
	'FTP_HOST'	=> 'FTP serveris',
	'FTP_HOST_EXPLAIN'	=> 'Jūsų FTP serverio vardas.',
	'FTP_PASSWORD'	=> 'FTP slaptažodis',
	'FTP_PASSWORD_EXPLAIN'	=> 'Jūsų FTP vartotojo vardo slaptažodis.',
	'FTP_PORT'	=> 'FTP portas',
	'FTP_PORT_EXPLAIN'	=> 'Portas naudojamas prisijungimui prie jūsų serverio.',
	'FTP_ROOT_PATH'	=> 'Kelias iki phpBB',
	'FTP_ROOT_PATH_EXPLAIN'	=> 'Failų sistemos kelias iki jūsų phpBB diskusijų lentos.',
	'FTP_TIMEOUT'	=> 'Bandymo prisijungti prie FTP laiko limitas',
	'FTP_TIMEOUT_EXPLAIN'	=> 'Laiko tarpas sekundėmis, kurį sistema lauks atsakymo iš jūsų serverio.',
	'FTP_USERNAME'	=> 'FTP vartotojo vardas',
	'FTP_USERNAME_EXPLAIN'	=> 'Jūsų FTP vartotojo vardas.',
	'GENERAL_ERROR'	=> 'Pagrindinė klaida',
	'GO'	=> 'Pirmyn',
	'GOTO_PAGE'	=> 'Eiti į',
	'GROUP'	=> 'Grupė',
	'GROUPS'	=> 'Grupės',
	'GROUP_ERR_TYPE'	=> 'Nurodėte netinkamą grupės tipą.',
	'GROUP_ERR_USERNAME'	=> 'Jūs neįrašėte grupės pavadinimo.',
	'GROUP_ERR_USER_LONG'	=> 'Grupės pavadinimas negali būti ilgesnis nei 60 simbolių. Nurodytas grupės pavadinimas yra per ilgas.',
	'GUEST'	=> 'Svečias',
	'GUEST_USERS_ONLINE'	=> 'Dabar prisijungę %d svečių(iai)',
	'GUEST_USERS_TOTAL'	=> '%d svečių(iai)',
	'GUEST_USERS_ZERO_ONLINE'	=> 'Dabar prisijungę 0 svečių',
	'GUEST_USERS_ZERO_TOTAL'	=> '0 svečių',
	'GUEST_USER_ONLINE'	=> 'Dabar prisijungęs %d svečias',
	'GUEST_USER_TOTAL'	=> '%d svečias',
	'G_ADMINISTRATORS'	=> 'Administratoriai',
	'G_BOTS'	=> 'Robotai',
	'G_GUESTS'	=> 'Svečiai',
	'G_REGISTERED'	=> 'Užsiregistravę vartotojai',
	'G_REGISTERED_COPPA'	=> 'Užsiregistravę COPPA vartotojai',
	'G_GLOBAL_MODERATORS'	=> 'Globalūs moderatoriai',
	'HIDDEN_USERS_ONLINE'	=> '%d slaptų(i) vartotojų(ai)',
	'HIDDEN_USERS_TOTAL'	=> '%d slaptų(i) ir ',
	'HIDDEN_USERS_ZERO_ONLINE'	=> '0 slaptų vartotojų',
	'HIDDEN_USERS_ZERO_TOTAL'	=> '0 slaptų ir ',
	'HIDDEN_USER_ONLINE'	=> '%d slaptas vartotojas',
	'HIDDEN_USER_TOTAL'	=> '%d slaptas ir ',
	'HIDE_GUESTS'	=> 'Paslėpti svečius',
	'HIDE_ME'	=> 'Paslėpti mano būseną šios sesijos metu',
	'HOURS'	=> 'Valandų',
	'HOME'	=> 'Home',
	'ICQ'	=> 'ICQ',
	'ICQ_STATUS'	=> 'ICQ būsena',
	'IF'	=> 'Jeigu',
	'IMAGE'	=> 'Paveikslėlis',
	'IMAGE_FILETYPE_INVALID'	=> 'Paveikslėlio failo išplėtimas %d tipui %s nepalaikomas.',
	'IMAGE_FILETYPE_MISMATCH'	=> 'Nesutampa paveikslėlio tipas: tikėtasi kad failo išplėtimas bus %1$s, tačiau jis buvo %2$s.',
	'IN'	=> 'in',
	'INDEX'	=> 'Pagrindinis diskusijų puslapis',
	'INFORMATION'	=> 'Informacija',
	'INTERESTS'	=> 'Pomėgiai',
	'INVALID_DIGEST_CHALLENGE'	=> 'Klaida autentifikuojantis.',
	'INVALID_EMAIL_LOG'	=> 'Galbūt <strong>%s</strong> yra neteisingas el. pašto adresas?',
	'IP'	=> 'IP',
	'IP_BLACKLISTED'	=> 'Jūsų IP adresas %1$s buvo užblokuotas, nes patenka į juoduosius sąrašus. Daugiau informacijos rasite <a href="%2$s">%2$s</a> puslapyje.',
	'JABBER'	=> 'Jabber',
	'JOINED'	=> 'Užsiregistravo',
	'JUMP_PAGE'	=> 'Įrašykite puslapio numerį į kurį norite pereiti.',
	'JUMP_TO'	=> 'Pereiti į',
	'JUMP_TO_PAGE'	=> 'Norėdami pereiti į puslapį paspauskite čia…',
	'KB'	=> 'KB',
	'LAST_POST'	=> 'Paskutinis pranešimas',
	'LAST_UPDATED'	=> 'Paskutinį kartą atnaujinta',
	'LAST_VISIT'	=> 'Paskutinis prisijungimas',
	'LDAP_NO_LDAP_EXTENSION'	=> 'Nepavyko rasti LDAP modulio.',
	'LDAP_NO_SERVER_CONNECTION'	=> 'Nepavyko prisijungti prie LDAP serverio.',
	'LEGEND'	=> 'Legenda',
	'LOCATION'	=> 'Miestas',
	'LOCK_POST'	=> 'Užrakinti pranešimą',
	'LOCK_POST_EXPLAIN'	=> 'Neleisti redaguoti',
	'LOCK_TOPIC'	=> 'Užrakinti temą',
	'LOGIN'	=> 'Prisijungti',
	'LOGIN_CHECK_PM'	=> 'Norėdami peržiūrėti asmenines žinutes prisijunkite.',
	'LOGIN_CONFIRMATION'	=> 'Prisijungimo patvirtinimas',
	'LOGIN_CONFIRM_EXPLAIN'	=> 'Po tam tikro maksimalaus bandymų prisijungti kiekio jūs turite įvesti patvirtinimo kodą. Taip daroma norint užtikrinti jūsų vartotojo vardo saugumą. Kodą turėtumėte matyti paveikslėlyje apačioje. Jeigu blogai matote arba dėl kokių nors kitų priežasčių negalite jo perskaityti susisiekite su %sdiskusijų administratoriumi%s.',
	'LOGIN_ERROR_ATTEMPTS'	=> 'Jūs išnaudojote maksimalų bandymų prisijungti kiekį. Be vartotojo vardo bei slaptažodžio dabar turite įrašyti ir patvirtinimo kodą iš paveikslėlio apačioje.',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE'	=> 'Apache serveris jūsų neautentifikavo.',
	'LOGIN_ERROR_PASSWORD'	=> 'Jūs įvedėte neteisingą slaptažodį. Patikrinkite ir pabandykite dar kartą. Jeigu vistiek iškyla kokių nors problemų susisiekite su %sdiskusijų administratoriumi%s.',
	'LOGIN_ERROR_PASSWORD_CONVERT'	=> 'Po diskusijų lentos atnaujinimo darbų jūsų slaptažodis nebuvo perkeltas. %sUžsisakykite naują slaptažodį%s. Jeigu vistiek iškyla kokių nors problemų susisiekite su %sdiskusijų administratoriumi%s.',
	'LOGIN_ERROR_USERNAME'	=> 'Jūs įvedėte neteisingą vartotojo vardą. Patikrinkite ir pabandykite dar kartą. Jeigu vistiek iškyla kokių nors problemų susisiekite su %sdiskusijų administratoriumi%s.',
	'LOGIN_FORUM'	=> 'Norėdami peržiūrėti arba rašyti į šį forumą turite įrašyti jo slaptažodį.',
	'LOGIN_INFO'	=> 'Norėdami prisijungti turite būti užsiregistravę. Registracija užtrunka vos kelias akimirkas tačiau suteikia jums daugiau galimybių. Diskusijų administratorius gali suteikti papildomas teises registruotiems vartotojams. Prieš užsiregistruodami susipažinkite su naudojimosi sąlygomis ir nuostatomis. Naršydami po diskusijas perskaitykite kiekvieno forumo taisykles.',
	'LOGIN_VIEWFORUM'	=> 'Norėdami peržiūrėti šį forumą turite užsiregistruoti ir prisijungti.',
	'LOGIN_EXPLAIN_EDIT'	=> 'Norėdami redaguoti pranešimus šiame forume turite užsiregistruoti ir prisijungti.',
	'LOGIN_EXPLAIN_VIEWONLINE'	=> 'Norėdami peržiūrėti dabar prisijungusių sąrašą turite užsiregistruoti ir prisijungti.',
	'LOGOUT'	=> 'Atsijungti',
	'LOGOUT_USER'	=> 'Atsijungti [ %s ]',
	'LOG_ME_IN'	=> 'Prijungti mane automatiškai kiekvieno apsilankymo metu',
	'MARK'	=> 'Pažymėti',
	'MARK_ALL'	=> 'Pažymėti visus',
	'MARK_FORUMS_READ'	=> 'Pažymėti visus forumus kaip perskaitytus',
	'MB'	=> 'MB',
	'MCP'	=> 'Moderatoriaus valdymo pultas',
	'MEMBERLIST'	=> 'Dalyvių sąrašas',
	'MEMBERLIST_EXPLAIN'	=> 'Peržiūrėti visą dalyvių sąrašą',
	'MERGE'	=> 'Sujungti',
	'MERGE_POSTS'	=> 'Sujungti pranešimus',
	'MERGE_TOPIC'	=> 'Sujungti temas',
	'MESSAGE'	=> 'Žinutė',
	'MESSAGES'	=> 'Žinutės',
	'MESSAGE_BODY'	=> 'Laiško turinys',
	'MINUTES'	=> 'Minučių',
	'MODERATE'	=> 'Moderuoti',
	'MODERATOR'	=> 'Moderatorius',
	'MODERATORS'	=> 'Moderatoriai',
	'MONTH'	=> 'Mėnuo',
	'MOVE'	=> 'Perkelti',
	'MSNM'	=> 'MSNM/WLM',
	'NA'	=> 'n/d',
	'NEWEST_USER'	=> 'Naujausias registruotas vartotojas yra <strong>%s</strong>',
	'NEW_MESSAGE'	=> 'Nauja žinutė',
	'NEW_MESSAGES'	=> 'Naujos žinutės',
	'NEW_PM'	=> '<strong>%d</strong> nauja žinutė',
	'NEW_PMS'	=> '<strong>%d</strong> naujos(ų) žinutės(ių)',
	'NEW_POST'	=> 'Naujas pranešimas',
	'NEW_POSTS'	=> 'Nauji pranešimai',
	'NEXT'	=> 'Kitas',
	'NEXT_STEP'	=> 'Toliau',
	'NEVER'	=> 'Niekada',
	'NO'	=> 'Ne',
	'NOT_ALLOWED_MANAGE_GROUP'	=> 'Jūs neturite teisės keisti šios grupės.',
	'NOT_AUTHORISED'	=> 'Jūs neturite teisės matyti šios srities.',
	'NOT_WATCHING_FORUM'	=> 'Jūs atsisakėte gauti perspėjimus apie naujus pranešimus šiame forume.',
	'NOT_WATCHING_TOPIC'	=> 'Jūs atsisakėte gauti perspėjimus apie naujus pranešimus šioje temoje.',
	'NOTIFY_ADMIN'	=> 'Praneškite apie tai diskusijų administratoriui.',
	'NOTIFY_ADMIN_EMAIL'	=> 'Praneškite apie tai diskusijų administratoriui: <a href="mailto:%1$s">%1$s</a>',
	'NO_ACCESS_ATTACHMENT'	=> 'Jūs neturite teisės peržiūrėti šio failo.',
	'NO_ACTION'	=> 'Nenurodytas veiksmas.',
	'NO_ADMINISTRATORS'	=> 'Ši diskusijų lenta neturi paskirto administratoriaus.',
	'NO_AUTH_ADMIN'	=> 'Priėjimas prie administratoriaus valdymo pulto jums uždraustas, kadangi neturite tam reikalingų teisių.',
	'NO_AUTH_ADMIN_USER_DIFFER'	=> 'Jūs negalite autentifikuotis kaip kitas vartotojas.',
	'NO_AUTH_OPERATION'	=> 'Jūs negalite baigti šios operacijos, nes neturite tam reikalingų teisių.',
	'NO_CONNECT_TO_SMTP_HOST'	=> 'Nepavyko prisijungti prie SMTP serverio : %1$s : %2$s',
	'NO_BIRTHDAYS'	=> 'Šiandien gimtadienių nėra',
	'NO_EMAIL_MESSAGE'	=> 'Laiškas tuščias.',
	'NO_EMAIL_RESPONSE_CODE'	=> 'Nepavyko gauti pašto serverio atsakymo kodo.',
	'NO_EMAIL_SUBJECT'	=> 'Nurodykite laiško temą.',
	'NO_FORUM'	=> 'Forumas, kurį pasirinkote, neegzistuoja.',
	'NO_FORUMS'	=> 'Ši diskusijų lenta neturi forumų.',
	'NO_GROUP'	=> 'Grupė, kurią nurodėte, neegzistuoja.',
	'NO_GROUP_MEMBERS'	=> 'Ši grupė neturi narių.',
	'NO_IPS_DEFINED'	=> 'Aprašytų IP adresų arba internetinių vardų nėra',
	'NO_MEMBERS'	=> 'Diskusijų dalyvių, tenkinančių paieškos kriterijus, nėra.',
	'NO_MESSAGES'	=> 'Žinučių nėra',
	'NO_MODE'	=> 'Nenurodytas režimas.',
	'NO_MODERATORS'	=> 'Ši diskusijų lenta neturi paskirtų moderatorių.',
	'NO_NEW_MESSAGES'	=> 'Naujų žinučių nėra',
	'NO_NEW_PM'	=> '<strong>0</strong> naujų žinučių',
	'NO_NEW_POSTS'	=> 'Naujų pranešimų nėra',
	'NO_ONLINE_USERS'	=> 'Registruotų vartotojų nėra',
	'NO_POSTS'	=> 'Pranešimų nėra',
	'NO_POSTS_TIME_FRAME'	=> 'Pasirinktu laiko periodu pranešimų šioje temoje nėra.',
	'NO_SUBJECT'	=> 'Nenurodyta tema',
	'NO_SUCH_SEARCH_MODULE'	=> 'Nurodytas paieškos mechanizmas neegzistuoja.',
	'NO_SUPPORTED_AUTH_METHODS'	=> 'Nepavyko rasti nei vieno palaikomo autentifikacijos metodo.',
	'NO_TOPIC'	=> 'Tema, kurią nurodėte, neegzistuoja.',
	'NO_TOPICS'	=> 'Šiame forume nėra jokių temų arba pranešimų.',
	'NO_TOPICS_TIME_FRAME'	=> 'Pasirinktu laiko periodu temų šiame forume nėra.',
	'NO_UNREAD_PM'	=> '<strong>0</strong> neperskaitytų žinučių',
	'NO_UPLOAD_FORM_FOUND'	=> 'Įkėlimas pradėtas, tačiau nerasta jokia leistina failų įkėlimo forma.',
	'NO_USER'	=> 'Vartotojas, kurį nurodėte, neegzistuoja.',
	'NO_USERS'	=> 'Vartotojai, kurį nurodėte, neegzistuoja.',
	'NO_USER_SPECIFIED'	=> 'Nenurodėte vartotojo vardo.',
	'OCCUPATION'	=> 'Pareigos',
	'OFFLINE'	=> 'Atsijungęs',
	'ONLINE'	=> 'Prisijungęs',
	'ONLINE_BUDDIES'	=> 'Prisijungę draugai',
	'ONLINE_USERS_TOTAL'	=> 'Iš viso šiuo metu prisijungę <strong>%d</strong> vartotojai :: ',
	'ONLINE_USERS_ZERO_TOTAL'	=> 'Iš viso šiuo metu prisijungę <strong>0</strong> vartotojų :: ',
	'ONLINE_USER_TOTAL'	=> 'Iš viso šiuo metu prisijungęs <strong>%d</strong> vartotojas :: ',
	'OPTIONS'	=> 'Nustatymai',
	'PAGE_OF'	=> 'Puslapis <strong>%1$d</strong> iš <strong>%2$d</strong>',
	'PASSWORD'	=> 'Slaptažodis',
	'PLAY_QUICKTIME_FILE'	=> 'Rodyti Quicktime failą',
	'PM'	=> 'AŽ',
	'POSTING_MESSAGE'	=> 'Rašo pranešimą forume %s',
	'POSTING_PRIVATE_MESSAGE'	=> 'Rašo asmeninę žinutę',
	'POST'	=> 'Standartinė',
	'POST_ANNOUNCEMENT'	=> 'Svarbi!',
	'POST_STICKY'	=> 'Dažna',
	'POSTED'	=> 'Parašytas',
	'POSTED_IN_FORUM'	=> 'forume',
	'POSTED_ON_DATE'	=> '',
	'POSTS'	=> 'Pranešimai',
	'POSTS_UNAPPROVED'	=> 'Šioje temoje yra mažiausiai vienas nepatvirtintas pranešimas.',
	'POST_BY_AUTHOR'	=> '',
	'POST_BY_FOE'	=> 'Šį pranešimą parašė <strong>%1$s</strong>, kuris šiuo metu yra jūsų priešų sąraše. %2$sRodyti šį pranešimą%3$s.',
	'POST_DAY'	=> '%.2f pranešimų per dieną',
	'POST_DETAILS'	=> 'Detalus pranešimo aprašymas',
	'POST_NEW_TOPIC'	=> 'Naujos temos kūrimas',
	'POST_PCT'	=> '%.2f%% visų pranešimų',
	'POST_PCT_ACTIVE'	=> '%.2f%% visų vartotojo pranešimų',
	'POST_PCT_ACTIVE_OWN'	=> '%.2f%% visų tavo pranešimų',
	'POST_REPLY'	=> 'Atsakymo rašymas',
	'POST_REPORTED'	=> 'Perskaityti raportą',
	'POST_SUBJECT'	=> 'Pranešimo tema',
	'POST_TIME'	=> 'Pranešimo datą',
	'POST_TOPIC'	=> 'Naujos temos kūrimas',
	'POST_UNAPPROVED'	=> 'Šis pranešimas laukia patvirtinimo',
	'PREVIEW'	=> 'Peržiūrėti',
	'PREVIOUS'	=> 'Ankstesnis',
	'PREVIOUS_STEP'	=> 'Atgal',
	'PRIVACY'	=> 'Privatumo politika',
	'PRIVATE_MESSAGE'	=> 'Asmeninė žinutė',
	'PRIVATE_MESSAGES'	=> 'Asmeninės žinutės',
	'PRIVATE_MESSAGING'	=> 'Asmeninės žinutės',
	'PROFILE'	=> 'Vartotojo valdymo pultas',
	'READING_FORUM'	=> 'Peržiūri temas forume %s',
	'READING_GLOBAL_ANNOUNCE'	=> 'Skaito labai svarbų pranešimą',
	'READING_LINK'	=> 'Lankosi forumo nuorodoje %s',
	'READING_TOPIC'	=> 'Skaito temą forume %s',
	'READ_PROFILE'	=> 'Aprašymas',
	'REASON'	=> 'Priežastis',
	'RECORD_ONLINE_USERS'	=> 'Daugiausia vartotojų (<strong>%1$s</strong>) buvo %2$s',
	'REDIRECT'	=> 'Nuoroda',
	'REDIRECTS'	=> 'Iš viso apsilankymų',
	'REGISTER'	=> 'Registruotis',
	'REGISTERED_USERS'	=> 'Registruoti vartotojai:',
	'REG_USERS_ONLINE'	=> 'Dabar prisijungę %d registruotų(i) vartotojų(ai) ir ',
	'REG_USERS_TOTAL'	=> '%d registruotų(i), ',
	'REG_USERS_ZERO_ONLINE'	=> 'Dabar prisijungę 0 registruotų vartotojų ir ',
	'REG_USERS_ZERO_TOTAL'	=> '0 registruotų, ',
	'REG_USER_ONLINE'	=> 'Dabar prisijungęs %d registruotas vartotojas ir ',
	'REG_USER_TOTAL'	=> '%d registruotas, ',
	'REMOVE'	=> 'Ištrinti',
	'REMOVE_INSTALL'	=> 'Prieš naudodami šią diskusijų lentą ištrinkite, perkelkite arba pervadinkite diegimo (install) katalogą. Kol šis katalogas egzistuoja, bus pasiekiamas tik administratoriaus valdymo pultas.',
	'REPLIES'	=> 'Atsakymai',
	'REPLY_WITH_QUOTE'	=> 'Atsakyti cituojant',
	'REPLYING_GLOBAL_ANNOUNCE'	=> 'Rašo atsakymą į labai svarbų pranešimą',
	'REPLYING_MESSAGE'	=> 'Rašo atsakymą temoje %s',
	'REPORT_BY'	=> 'Raportas',
	'REPORT_POST'	=> 'Raportuoti apie šį pranešimą',
	'REPORTING_POST'	=> 'Raportuoja pranešimą',
	'RESEND_ACTIVATION'	=> 'El. paštu atsisiųsti aktyvavimo kodą',
	'RESET'	=> 'Iš naujo',
	'RESTORE_PERMISSIONS'	=> 'Susigražinti teises',
	'RETURN_INDEX'	=> '%sGrįžti į pagrindinį puslapį%s',
	'RETURN_FORUM'	=> '%sGrižti į paskutinį aplankytą forumą%s',
	'RETURN_PAGE'	=> '%sGrįžti į praeitą puslapį%s',
	'RETURN_TOPIC'	=> '%sGrįžti į paskutinę aplankytą temą%s',
	'RETURN_TO'	=> 'Grįžti į',
	'RULES_ATTACH_CAN'	=> 'Jūs <strong>galite</strong> prikabinti failus šiame forume',
	'RULES_ATTACH_CANNOT'	=> 'Jūs <strong>negalite</strong> prikabinti failų šiame forume',
	'RULES_DELETE_CAN'	=> 'Jūs <strong>galite</strong> ištrinti savo pranešimus šiame forume',
	'RULES_DELETE_CANNOT'	=> 'Jūs <strong>negalite</strong> trinti savo pranešimų šiame forume',
	'RULES_DOWNLOAD_CAN'	=> 'Jūs <strong>galite</strong> atsisiųsti prikabintus failus šiame forume',
	'RULES_DOWNLOAD_CANNOT'	=> 'Jūs <strong>negalite</strong> atsisiųsti prikabintų failų šiame forume',
	'RULES_EDIT_CAN'	=> 'Jūs <strong>galite</strong> redaguoti savo pranešimus šiame forume',
	'RULES_EDIT_CANNOT'	=> 'Jūs <strong>negalite</strong> redaguoti savo pranešimų šiame forume',
	'RULES_LOCK_CAN'	=> 'Jūs <strong>galite</strong> užrakinti savo temas šiame forume',
	'RULES_LOCK_CANNOT'	=> 'Jūs <strong>negalite</strong> užrakinti savo temų šiame forume',
	'RULES_POST_CAN'	=> 'Jūs <strong>galite</strong> kurti naujas temas šiame forume',
	'RULES_POST_CANNOT'	=> 'Jūs <strong>negalite</strong> kurti naujų temų šiame forume',
	'RULES_REPLY_CAN'	=> 'Jūs <strong>galite</strong> atsakinėti į temas šiame forume',
	'RULES_REPLY_CANNOT'	=> 'Jūs <strong>negalite</strong> atsakinėti į temas šiame forume',
	'RULES_VOTE_CAN'	=> 'Jūs <strong>galite</strong> balsuoti šiame forume',
	'RULES_VOTE_CANNOT'	=> 'Jūs <strong>negalite</strong> balsuoti šiame forume',
	'SEARCH'	=> 'Ieškoti',
	'SEARCH_MINI'	=> 'Paieška…',
	'SEARCH_ADV'	=> 'Išplėstinė paieška',
	'SEARCH_ADV_EXPLAIN'	=> 'Rodyti išplėstinės paieškos nustatymus',
	'SEARCH_KEYWORDS'	=> 'Žodžio paieška',
	'SEARCHING_FORUMS'	=> 'Ieško forumuose',
	'SEARCH_ACTIVE_TOPICS'	=> 'Peržiūrėti aktyvias temas',
	'SEARCH_FOR'	=> 'Ieškoti',
	'SEARCH_FORUM'	=> 'Paieška šiame forume…',
	'SEARCH_NEW'	=> 'Peržiūrėti naujus pranešimus',
	'SEARCH_POSTS_BY'	=> 'Ieškoti pranešimų pagal',
	'SEARCH_SELF'	=> 'Peržiūrėti savo pranešimus',
	'SEARCH_TOPIC'	=> 'Paieška šioje temoje…',
	'SEARCH_UNANSWERED'	=> 'Peržiūrėti neatsakytus pranešimus',
	'SECONDS'	=> 'Sekundžių',
	'SELECT'	=> 'Pasirinkti',
	'SELECT_ALL_CODE'	=> 'Pasirinkti visus',
	'SELECT_DESTINATION_FORUM'	=> 'Pasirinkite forumą į kurį norite įkelti',
	'SELECT_FORUM'	=> 'Pasirinkite forumą',
	'SEND_EMAIL'	=> 'Siųsti laišką',
	'SEND_EMAIL_USER'	=> 'Siųsti laišką vartotojui',
	'SEND_PRIVATE_MESSAGE'	=> 'Siųsti asmeninę žinutę',
	'SETTINGS'	=> 'Nustatymai',
	'SIGNATURE'	=> 'Parašas',
	'SKIP'	=> 'Rodyti turinį',
	'SMTP_NO_AUTH_SUPPORT'	=> 'SMTP serveris nepalaiko autentifikacijos.',
	'SORRY_AUTH_READ'	=> 'Jūs neturite teisės peržiūrėti šio forumo.',
	'SORRY_AUTH_VIEW_ATTACH'	=> 'Jūs neturite teisės atsisiųsti šio failo.',
	'SORT_BY'	=> 'Rušiuoti pagal',
	'SORT_JOINED'	=> 'Registracijos datą',
	'SORT_LOCATION'	=> 'Vietą',
	'SORT_RANK'	=> 'Rangą',
	'SORT_TOPIC_TITLE'	=> 'Temos pavadinimą',
	'SORT_USERNAME'	=> 'Vartotojo vardą',
	'SPLIT_TOPIC'	=> 'Išskirti temą',
	'SQL_ERROR_OCCURRED'	=> 'Įvyko SQL klaida. Jeigu problema pasikartos, susisiekite su %sdiskusijų administratoriumi%s.',
	'STATISTICS'	=> 'Statistika',
	'START_WATCHING_FORUM'	=> 'Užsisakyti forumą',
	'START_WATCHING_TOPIC'	=> 'Užsisakyti temą',
	'STOP_WATCHING_FORUM'	=> 'Atsisakyti forumo',
	'STOP_WATCHING_TOPIC'	=> 'Atsisakyti temos',
	'SUBFORUM'	=> 'Subforumas',
	'SUBFORUMS'	=> 'Subforumai',
	'SUBJECT'	=> 'Pavadinimas',
	'SUBMIT'	=> 'Siųsti',
	'TERMS_USE'	=> 'Naudojimosi sąlygos',
	'TEST_CONNECTION'	=> 'Patikrinti ryšį',
	'THE_TEAM'	=> 'Komanda',
	'TIME'	=> 'Laikas',
	'TOO_LONG_AIM'	=> 'AIM vartotojo vardas yra per ilgas.',
	'TOO_LONG_CONFIRM_CODE'	=> 'Patvirtinimo kodas yra per ilgas.',
	'TOO_LONG_DATEFORMAT'	=> 'Datos formatas yra per ilgas.',
	'TOO_LONG_ICQ'	=> 'ICQ numeris yra per ilgas.',
	'TOO_LONG_INTERESTS'	=> 'Pomėgių aprašymas yra per ilgas.',
	'TOO_LONG_JABBER'	=> 'Jabber vartotojo vardas yra per ilgas.',
	'TOO_LONG_LOCATION'	=> 'Miesto pavadinimas yra per ilgas.',
	'TOO_LONG_MSN'	=> 'MSNM/WLM vartotojo vardas yra per ilgas.',
	'TOO_LONG_NEW_PASSWORD'	=> 'Slaptažodis yra per ilgas.',
	'TOO_LONG_OCCUPATION'	=> 'Pareigų aprašymas yra per ilgas.',
	'TOO_LONG_PASSWORD_CONFIRM'	=> 'Slaptažodžio patvirtinimas yra per ilgas.',
	'TOO_LONG_USER_PASSWORD'	=> 'Slaptažodis yra per ilgas.',
	'TOO_LONG_USERNAME'	=> 'Vartotojo vardas yra per ilgas.',
	'TOO_LONG_EMAIL'	=> 'El. pašto adresas yra per ilgas.',
	'TOO_LONG_EMAIL_CONFIRM'	=> 'El. pašto adreso patvirtinimas yra per ilgas.',
	'TOO_LONG_WEBSITE'	=> 'Jūsų puslapio adresas yra per ilgas.',
	'TOO_LONG_YIM'	=> 'Yahoo! Messenger vartotojo vardas yra per ilgas.',
	'TOO_MANY_VOTE_OPTIONS'	=> 'Jūs bandėte balsuoti iš karto už keletą punktų.',
	'TOO_SHORT_AIM'	=> 'AIM vartotojo vardas yra per trumpas.',
	'TOO_SHORT_CONFIRM_CODE'	=> 'Patvirtinimo kodas yra per trumpas.',
	'TOO_SHORT_DATEFORMAT'	=> 'Datos formatas yra per trumpas.',
	'TOO_SHORT_ICQ'	=> 'ICQ numeris yra per trumpas.',
	'TOO_SHORT_INTERESTS'	=> 'Pomėgių aprašymas yra per trumpas.',
	'TOO_SHORT_JABBER'	=> 'Jabber vartotojo vardas yra per trumpas.',
	'TOO_SHORT_LOCATION'	=> 'Miesto pavadinimas yra per trumpas.',
	'TOO_SHORT_MSN'	=> 'MSNM/WLM vartotojo vardas yra per trumpas.',
	'TOO_SHORT_NEW_PASSWORD'	=> 'Slaptažodis yra per trumpas.',
	'TOO_SHORT_OCCUPATION'	=> 'Pareigų aprašymas yra per trumpas.',
	'TOO_SHORT_PASSWORD_CONFIRM'	=> 'Slaptažodžio patvirtinimas yra per trumpas.',
	'TOO_SHORT_USER_PASSWORD'	=> 'Slaptažodis yra per trumpas.',
	'TOO_SHORT_USERNAME'	=> 'Vartotojo vardas yra per trumpas.',
	'TOO_SHORT_EMAIL'	=> 'El. pašto adresas yra per trumpas.',
	'TOO_SHORT_EMAIL_CONFIRM'	=> 'El. pašto adreso patvirtinimas yra per trumpas.',
	'TOO_SHORT_WEBSITE'	=> 'Jūsų puslapio adresas yra per trumpas.',
	'TOO_SHORT_YIM'	=> 'Yahoo! Messenger vartotojo vardas yra per trumpas.',
	'TOPIC'	=> 'Tema',
	'TOPICS'	=> 'Temos',
	'TOPIC_ICON'	=> 'Temos piktograma',
	'TOPIC_LOCKED'	=> 'Ši tema užrakinta, jūs negalite redaguoti pranmešimų arba atsakinėti į juos.',
	'TOPIC_MOVED'	=> 'Tema perkelta',
	'TOPIC_REVIEW'	=> 'Temos peržiūra',
	'TOPIC_TITLE'	=> 'Temos pavadinimas',
	'TOPIC_UNAPPROVED'	=> 'Ši tema dar nepatvirtinta',
	'TOTAL_ATTACHMENTS'	=> 'Tema turi prikabintų failų',
	'TOTAL_LOG'	=> '1 įrašas',
	'TOTAL_LOGS'	=> '%d įrašai(ų)',
	'TOTAL_NO_PM'	=> 'Iš viso 0 asmeninių žinučių',
	'TOTAL_PM'	=> 'Iš viso 1 asmeninė žinutė',
	'TOTAL_PMS'	=> 'Iš viso %d asmeninės(ių) žinutės(čių)',
	'TOTAL_POSTS'	=> 'Iš viso pranešimų',
	'TOTAL_POSTS_OTHER'	=> 'Iš viso <strong>%d</strong> pranešimai(ų)',
	'TOTAL_POSTS_ZERO'	=> 'Iš viso <strong>0</strong> pranešimų',
	'TOPIC_REPORTED'	=> 'Šioje temoje yra raportuotų pranešimų',
	'TOTAL_TOPICS_OTHER'	=> 'Iš viso <strong>%d</strong> temos(ų)',
	'TOTAL_TOPICS_ZERO'	=> 'Iš viso <strong>0</strong> temų',
	'TOTAL_USERS_OTHER'	=> 'Iš viso <strong>%d</strong> dalyviai(ių)',
	'TOTAL_USERS_ZERO'	=> 'Iš viso <strong>0</strong> dalyvių',
	'TRACKED_PHP_ERROR'	=> 'PHP klaidos: %s',
	'UNABLE_GET_IMAGE_SIZE'	=> 'Nepavyko nustatyti paveikslėlio matmenų.',
	'UNABLE_TO_DELIVER_FILE'	=> 'Failo pristatyti nepavyko.',
	'UNKNOWN_BROWSER'	=> 'Neatpažinta naršyklė',
	'UNMARK_ALL'	=> 'Nepažymėti nieko',
	'UNREAD_MESSAGES'	=> 'Neperskaitytos žinutės',
	'UNREAD_PM'	=> '<strong>%d</strong> neperskaityta žinutė',
	'UNREAD_PMS'	=> '<strong>%d</strong> neperskaitytos(ų) žinutės(čių)',
	'UNWATCHED_FORUMS'	=> 'Jūs atsisakėte gauti perspėjimus apie naujus pranešimus pasirinktuose forumuose.',
	'UNWATCHED_TOPICS'	=> 'Jūs atsisakėte gauti perspėjimus apie naujus pranešimus pasirinktose temose.',
	'UNWATCHED_FORUMS_TOPICS'	=> 'Jūs atsisakėte gauti perspėjimus apie naujus pranešimus pasirinktose temose ir forumuose.',
	'UPDATE'	=> 'Atnaujinti',
	'UPLOAD_IN_PROGRESS'	=> 'Šiuo metu failas siunčiamas.',
	'URL_REDIRECT'	=> 'Jeigu jūsų naršyklė neturi galimybės automatiškai nukreipti į reikiamą puslapį, %spaspauskite ČIA%s.',
	'USERGROUPS'	=> 'Grupės',
	'USERNAME'	=> 'Vartotojo vardas',
	'USERNAMES'	=> 'Vartotojų vardai',
	'USER_AVATAR'	=> 'Vartotojo avataras',
	'USER_CANNOT_READ'	=> 'Jūs negalite skaityti pranešimų šiame forume.',
	'USER_POST'	=> '%d pranešimas',
	'USER_POSTS'	=> '%d pranešimai(ų)',
	'USERS'	=> 'Vartotojai',
	'USE_PERMISSIONS'	=> 'Patikrinti vartotojo teises',
	'VARIANT_DATE_SEPARATOR'	=> ' / ',
	'VIEWED'	=> 'Peržiūrėta',
	'VIEWING_FAQ'	=> 'Skaito DUK',
	'VIEWING_MEMBERS'	=> 'Peržiūri dalyvio detalų aprašymą',
	'VIEWING_ONLINE'	=> 'Žiūri kas prisijungę',
	'VIEWING_MCP'	=> 'Naudojasi moderatoriaus valdymo pultu',
	'VIEWING_MEMBER_PROFILE'	=> 'Peržiūri dalyvio aprašymą',
	'VIEWING_PRIVATE_MESSAGES'	=> 'Skaito asmenines žinutes',
	'VIEWING_REGISTER'	=> 'Registruojasi',
	'VIEWING_UCP'	=> 'Naudojasi vartotojo valdymo pultu',
	'VIEWS'	=> 'Peržiūrėta',
	'VIEW_BOOKMARKS'	=> 'Peržiūrėti žymes',
	'VIEW_FORUM_LOGS'	=> 'Peržiūrėti forumo įvykių registrą',
	'VIEW_LATEST_POST'	=> 'Peržiūrėti naujausius pranešimus',
	'VIEW_NEWEST_POST'	=> 'Peržiūrėti naujausius neskaitytus pranešimus',
	'VIEW_NOTES'	=> 'Rodyti užrašus apie vartotoją',
	'VIEW_ONLINE_TIME'	=> 'pagal pastarosios %d minutės diskusijų aktyvumą',
	'VIEW_ONLINE_TIMES'	=> 'pagal pastarųjų %d minučių diskusijų aktyvumą',
	'VIEW_TOPIC'	=> 'Temos rodymas',
	'VIEW_TOPIC_ANNOUNCEMENT'	=> 'Svabu: ',
	'VIEW_TOPIC_GLOBAL'	=> 'Labai svarbu: ',
	'VIEW_TOPIC_LOCKED'	=> 'Užrakinta: ',
	'VIEW_TOPIC_LOGS'	=> 'Peržiūrėti temos įvykių registrą',
	'VIEW_TOPIC_MOVED'	=> 'Perkelta: ',
	'VIEW_TOPIC_POLL'	=> 'Balsavimas: ',
	'VIEW_TOPIC_STICKY'	=> 'Dažna tema: ',
	'VISIT_WEBSITE'	=> 'Apsilankyti puslapyje',
	'WARNINGS'	=> 'Perspėjimai',
	'WARN_USER'	=> 'Perspėti vartotoją',
	'WELCOME_SUBJECT'	=> 'Sveiki atvykę į %s diskusijas',
	'WEBSITE'	=> 'Puslapis',
	'WHOIS'	=> 'Informacija apie IP adresą',
	'WHO_IS_ONLINE'	=> 'Dabar prisijungę',
	'WRONG_PASSWORD'	=> 'Jūs įvedėte neteisingą slaptažodį.',
	'WRONG_DATA_ICQ'	=> 'Jūs įvedėte neteisingą ICQ numerį.',
	'WRONG_DATA_JABBER'	=> 'Jūs įvedėte neteisingą Jabber vartotojo vardą.',
	'WRONG_DATA_LANG'	=> 'Kalba, kurią pasirinkote, yra netinkama.',
	'WRONG_DATA_WEBSITE'	=> 'Puslapio adresas (įskaitant protokolą) turi egzistuoti. Pavyzdžiui http://www.example.com/.',
	'WROTE'	=> 'rašė',
	'YEAR'	=> 'Metai',
	'YEAR_MONTH_DAY'	=> '(YYYY-MM-DD)',
	'YES'	=> 'Taip',
	'YIM'	=> 'YIM',
	'YOU_LAST_VISIT'	=> 'Paskutinis prisijungimas: %s',
	'YOU_NEW_PM'	=> 'Jūs gavote naują asmeninę žinutę.',
	'YOU_NEW_PMS'	=> 'Jūs gavote kelias naujas asmenines žinutes.',
	'YOU_NO_NEW_PM'	=> 'Jūs neturite naujų pranešimų.',

	'datetime'	=> array(
		'TODAY'	=> 'šiandien',
		'TOMORROW'	=> 'rytoj',
		'YESTERDAY'	=> 'vakar',
		'Sunday'	=> 'Sekmadienis',
		'Monday'	=> 'Pirmadienis',
		'Tuesday'	=> 'Antradienis',
		'Wednesday'	=> 'Trečiadienis',
		'Thursday'	=> 'Ketvirtadienis',
		'Friday'	=> 'Penktadienis',
		'Saturday'	=> 'Šeštadienis',
		'Sun'	=> 'Sek',
		'Mon'	=> 'Pir',
		'Tue'	=> 'Ant',
		'Wed'	=> 'Tre',
		'Thu'	=> 'Ket',
		'Fri'	=> 'Pen',
		'Sat'	=> 'Šeš',
		'January'	=> 'Sausis',
		'February'	=> 'Vasaris',
		'March'	=> 'Kovas',
		'April'	=> 'Balandis',
		'May'	=> 'Gegužė',
		'June'	=> 'Birželis',
		'July'	=> 'Liepa',
		'August'	=> 'Rugpjūtis',
		'September'	=> 'Rugsėjis',
		'October'	=> 'Spalis',
		'November'	=> 'Lapkritis',
		'December'	=> 'Gruodis',
		'Jan'	=> 'Sau',
		'Feb'	=> 'Vas',
		'Mar'	=> 'Kov',
		'Apr'	=> 'Bal',
		'May_short'	=> 'Geg',
		'Jun'	=> 'Bir',
		'Jul'	=> 'Lie',
		'Aug'	=> 'Rgp',
		'Sep'	=> 'Rgs',
		'Oct'	=> 'Spa',
		'Nov'	=> 'Lap',
		'Dec'	=> 'Gru',
	),


	'tz'	=> array(
		'-12'	=> 'UTC - 12 valandų',
		'-11'	=> 'UTC - 11 valandų',
		'-10'	=> 'UTC - 10 valandų',
		'-9.5'	=> 'UTC - 9:30 valandos',
		'-9'	=> 'UTC - 9 valandos',
		'-8'	=> 'UTC - 8 valandos',
		'-7'	=> 'UTC - 7 valandos',
		'-6'	=> 'UTC - 6 valandos',
		'-5'	=> 'UTC - 5 valandos',
		'-4'	=> 'UTC - 4 valandos',
		'-3.5'	=> 'UTC - 3:30 valandos',
		'-3'	=> 'UTC - 3 valandos',
		'-2'	=> 'UTC - 2 valandos',
		'-1'	=> 'UTC - 1 valanda',
		'0'	=> 'UTC',
		'1'	=> 'UTC + 1 valanda',
		'2'	=> 'UTC + 2 valandos',
		'3'	=> 'UTC + 3 valandos',
		'3.5'	=> 'UTC + 3:30 valandos',
		'4'	=> 'UTC + 4 valandos',
		'4.5'	=> 'UTC + 4:30 valandos',
		'5'	=> 'UTC + 5 valandos',
		'5.5'	=> 'UTC + 5:30 valandos',
		'5.75'	=> 'UTC + 5:45 valandos',
		'6'	=> 'UTC + 6 valandos',
		'6.5'	=> 'UTC + 6:30 valandos',
		'7'	=> 'UTC + 7 valandos',
		'8'	=> 'UTC + 8 valandos',
		'8.75'	=> 'UTC + 8:45 valandos',
		'9'	=> 'UTC + 9 valandos',
		'9.5'	=> 'UTC + 9:30 valandos',
		'10'	=> 'UTC + 10 valandų',
		'10.5'	=> 'UTC + 10:30 valandų',
		'11'	=> 'UTC + 11 valandų',
		'11.5'	=> 'UTC + 11:30 valandų',
		'12'	=> 'UTC + 12 valandų',
		'12.75'	=> 'UTC + 12:45 valandų',
		'13'	=> 'UTC + 13 valandų',
		'14'	=> 'UTC + 14 valandų',
		'dst'	=> '[ <abbr title="Daylight Saving Time (Vasaros laikas)">DST</abbr> ]',
	),


	'tz_zones'	=> array(
		'-12'	=> '[UTC - 12] Beikerio sala',
		'-11'	=> '[UTC - 11] Niue, Samoa',
		'-10'	=> '[UTC - 10] Havajų-Aleutų salos, Kuko salos',
		'-9.5'	=> '[UTC - 9:30] Markizų salos',
		'-9'	=> '[UTC - 9] Aliaska, Gambjė salos',
		'-8'	=> '[UTC - 8] Ramiojo vandenyno standartinis laikas',
		'-7'	=> '[UTC - 7] Kalnų standartinis laikas',
		'-6'	=> '[UTC - 6] Centrinis standartinis laikas',
		'-5'	=> '[UTC - 5] Rytų standartinis laikas',
		'-4'	=> '[UTC - 4] Atlanto standartinis laikas',
		'-3.5'	=> '[UTC - 3:30] Niufaundlandas',
		'-3'	=> '[UTC - 3] Amazonija, Centrinė Grenlandija',
		'-2'	=> '[UTC - 2] Fernando de Noronha, Puetų Džordžija ir Pietų Sendvičo salos',
		'-1'	=> '[UTC - 1] Azorai, Žaliasis Kyšulys, Rytų Grenlandija',
		'0'	=> '[UTC] Vakarų Europa, Grinvičas',
		'1'	=> '[UTC + 1] Centrinė Europa, Vakarų Afrika',
		'2'	=> '[UTC + 2] Rytų Europa, Centrinė Afrika',
		'3'	=> '[UTC + 3] Maskva, Rytų Afrika',
		'3.5'	=> '[UTC + 3:30] Iranas',
		'4'	=> '[UTC + 4] Golfas, Samara',
		'4.5'	=> '[UTC + 4:30] Afganistanas',
		'5'	=> '[UTC + 5] Pakistanas, Jakaterinburgas',
		'5.5'	=> '[UTC + 5:30] Indija, Šri Langa',
		'5.75'	=> '[UTC + 5:45] Nepalas',
		'6'	=> '[UTC + 6] Bangladešas, Butanas, Novosibirskas',
		'6.5'	=> '[UTC + 6:30] Kokoso salos, Birma',
		'7'	=> '[UTC + 7] Indokinija, Krasnojarskas',
		'8'	=> '[UTC + 8] Kinija, Vakarų Australija, Irkutskas',
		'8.75'	=> '[UTC + 8:45] Pietryčių Vakarinė Australija',
		'9'	=> '[UTC + 9] Japonija, Korėja, Čita',
		'9.5'	=> '[UTC + 9:30] Centrinė Australija',
		'10'	=> '[UTC + 10] Rytų Australija, Vladivostokas',
		'10.5'	=> '[UTC + 10:30] Lordo Hovo sala',
		'11'	=> '[UTC + 11] Saliamono salos, Madaganas',
		'11.5'	=> '[UTC + 11:30] Norfolko sala',
		'12'	=> '[UTC + 12] Naujoji Zelandija, Fidžis, Kamčatka',
		'12.75'	=> '[UTC + 12:45] Čathamo salos',
		'13'	=> '[UTC + 13] Tonga, Fynikso salos',
		'14'	=> '[UTC + 14] Linijinės salos',
	),


	'dateformats'	=> array(
		'd M Y, H:i'	=> '01 Sau 2007, 13:37',
		'd M Y H:i'	=> '01 Sau 2007 13:37',
		'M jS, \'y, H:i'	=> 'Sau 1st, \'07, 13:37',
		'D M d, Y g:i a'	=> 'Pir Sau 01, 2007 1:37 pm',
		'F jS, Y, g:i a'	=> 'Sausio 1st, 2007, 1:37 pm',
		'|d M Y|, H:i'	=> 'Šiandien, 13:37 / 01 Sau 2007, 13:37',
		'|F jS, Y|, g:i a'	=> 'Šiandien, 1:37 pm / Sausio 1st, 2007, 1:37 pm',
	),

	'default_dateformat'	=> '|Y M d| H:i',
));

?>