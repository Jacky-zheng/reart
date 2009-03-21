/*
 * FCKeditor - The text editor for internet
 * Copyright (C) 2003-2005 Frederico Caldeira Knabben
 * 
 * Licensed under the terms of the GNU Lesser General Public License:
 * 		http://www.opensource.org/licenses/lgpl-license.php
 * 
 * For further information visit:
 * 		http://www.fckeditor.net/
 * 
 * "Support Open Source software. What about a donation today?"
 * 
 * File Name: sl.js
 * 	Slovenian language file.
 * 
 * File Authors:
 * 		Boris Volari? (vol@rutka.net)
 */

var FCKLang =
{
// Language direction : "ltr" (left to right) or "rtl" (right to left).
Dir					: "ltr",

ToolbarCollapse		: "Zlo?i orodno vrstico",
ToolbarExpand		: "Raz?iri orodno vrstico",

// Toolbar Items and Context Menu
Save				: "Shrani",
NewPage				: "Nova stran",
Preview				: "Predogled",
Cut					: "Izre?i",
Copy				: "Kopiraj",
Paste				: "Prilepi",
PasteText			: "Prilepi kot golo besedilo",
PasteWord			: "Prilepi iz Worda",
Print				: "Natisni",
SelectAll			: "Izberi vse",
RemoveFormat		: "Odstrani oblikovanje",
InsertLinkLbl		: "Povezava",
InsertLink			: "Vstavi/uredi povezavo",
RemoveLink			: "Odstrani povezavo",
Anchor				: "Vstavi/uredi zaznamek",
InsertImageLbl		: "Slika",
InsertImage			: "Vstavi/uredi sliko",
InsertFlashLbl		: "Flash",
InsertFlash			: "Vstavi/Uredi Flash",
InsertTableLbl		: "Tabela",
InsertTable			: "Vstavi/uredi tabelo",
InsertLineLbl		: "?rta",
InsertLine			: "Vstavi vodoravno ?rto",
InsertSpecialCharLbl: "Posebni znak",
InsertSpecialChar	: "Vstavi posebni znak",
InsertSmileyLbl		: "Sme?ko",
InsertSmiley		: "Vstavi sme?ka",
About				: "O FCKeditorju",
Bold				: "Krepko",
Italic				: "Le?e?e",
Underline			: "Pod?rtano",
StrikeThrough		: "Pre?rtano",
Subscript			: "Podpisano",
Superscript			: "Nadpisano",
LeftJustify			: "Leva poravnava",
CenterJustify		: "Sredinska poravnava",
RightJustify		: "Desna poravnava",
BlockJustify		: "Obojestranska poravnava",
DecreaseIndent		: "Zmanj?aj zamik",
IncreaseIndent		: "Pove?aj zamik",
Undo				: "Razveljavi",
Redo				: "Ponovi",
NumberedListLbl		: "O?tevil?en seznam",
NumberedList		: "Vstavi/odstrani o?tevil?evanje",
BulletedListLbl		: "Ozna?en seznam",
BulletedList		: "Vstavi/odstrani ozna?evanje",
ShowTableBorders	: "Poka?i meje tabele",
ShowDetails			: "Poka?i podrobnosti",
Style				: "Slog",
FontFormat			: "Oblika",
Font				: "Pisava",
FontSize			: "Velikost",
TextColor			: "Barva besedila",
BGColor				: "Barva ozadja",
Source				: "Izvorna koda",
Find				: "Najdi",
Replace				: "Zamenjaj",
SpellCheck			: "Preveri ?rkovanje",
UniversalKeyboard	: "Ve?jezi?na tipkovnica",

Form			: "Obrazec",
Checkbox		: "Potrditveno polje",
RadioButton		: "Izbirno polje",
TextField		: "Vnosno polje",
Textarea		: "Vnosno obmo?je",
HiddenField		: "Skrito polje",
Button			: "Gumb",
SelectionField	: "Spustni seznam",
ImageButton		: "Gumb s sliko",

// Context Menu
EditLink			: "Uredi povezavo",
InsertRow			: "Vstavi vrstico",
DeleteRows			: "Izbri?i vrstice",
InsertColumn		: "Vstavi stolpec",
DeleteColumns		: "Izbri?i stolpce",
InsertCell			: "Vstavi celico",
DeleteCells			: "Izbri?i celice",
MergeCells			: "Zdru?i celice",
SplitCell			: "Razdeli celico",
CellProperties		: "Lastnosti celice",
TableProperties		: "Lastnosti tabele",
ImageProperties		: "Lastnosti slike",
FlashProperties		: "Lastnosti Flash",

AnchorProp			: "Lastnosti zaznamka",
ButtonProp			: "Lastnosti gumba",
CheckboxProp		: "Lastnosti potrditvenega polja",
HiddenFieldProp		: "Lastnosti skritega polja",
RadioButtonProp		: "Lastnosti izbirnega polja",
ImageButtonProp		: "Lastnosti gumba s sliko",
TextFieldProp		: "Lastnosti vnosnega polja",
SelectionFieldProp	: "Lastnosti spustnega seznama",
TextareaProp		: "Lastnosti vnosnega obmo?ja",
FormProp			: "Lastnosti obrazca",

FontFormats			: "Navaden;Oblikovan;Napis;Naslov 1;Naslov 2;Naslov 3;Naslov 4;Naslov 5;Naslov 6",

// Alerts and Messages
ProcessingXHTML		: "Obdelujem XHTML. Prosim po?akajte...",
Done				: "Narejeno",
PasteWordConfirm	: "Izgleda, da ?elite prilepiti besedilo iz Worda. Ali ga ?elite o?istiti, preden ga prilepite?",
NotCompatiblePaste	: "Ta ukaz deluje le v Internet Explorerje razli?ice 5.5 ali vi?je. Ali ?elite prilepiti brez ?i??enja?",
UnknownToolbarItem	: "Neznan element orodne vrstice \"%1\"",
UnknownCommand		: "Neznano ime ukaza \"%1\"",
NotImplemented		: "Ukaz ni izdelan",
UnknownToolbarSet	: "Skupina orodnih vrstic \"%1\" ne obstoja",
NoActiveX			: "You browser's security settings could limit some features of the editor. You must enable the option \"Run ActiveX controls and plug-ins\". You may experience errors and notice missing features.",	//MISSING

// Dialogs
DlgBtnOK			: "V redu",
DlgBtnCancel		: "Prekli?i",
DlgBtnClose			: "Zapri",
DlgBtnBrowseServer	: "Prebrskaj na stre?niku",
DlgAdvancedTag		: "Napredno",
DlgOpOther			: "&lt;Ostalo&gt;",
DlgInfoTab			: "Podatki",
DlgAlertUrl			: "Prosim vpi?i spletni naslov",

// General Dialogs Labels
DlgGenNotSet		: "&lt;ni postavljen&gt;",
DlgGenId			: "Id",
DlgGenLangDir		: "Smer jezika",
DlgGenLangDirLtr	: "Od leve proti desni (LTR)",
DlgGenLangDirRtl	: "Od desne proti levi (RTL)",
DlgGenLangCode		: "Oznaka jezika",
DlgGenAccessKey		: "Vstopno geslo",
DlgGenName			: "Ime",
DlgGenTabIndex		: "?tevilka tabulatorja",
DlgGenLongDescr		: "Dolg opis URL-ja",
DlgGenClass			: "Razred stilne predloge",
DlgGenTitle			: "Predlagani naslov",
DlgGenContType		: "Predlagani tip vsebine (content-type)",
DlgGenLinkCharset	: "Kodna tabela povezanega vira",
DlgGenStyle			: "Slog",

// Image Dialog
DlgImgTitle			: "Lastnosti slike",
DlgImgInfoTab		: "Podatki o sliki",
DlgImgBtnUpload		: "Po?lji na stre?nik",
DlgImgURL			: "URL",
DlgImgUpload		: "Po?lji",
DlgImgAlt			: "Nadomestno besedilo",
DlgImgWidth			: "?irina",
DlgImgHeight		: "Vi?ina",
DlgImgLockRatio		: "Zakleni razmerje",
DlgBtnResetSize		: "Ponastavi velikost",
DlgImgBorder		: "Obroba",
DlgImgHSpace		: "Vodoravni razmik",
DlgImgVSpace		: "Navpi?ni razmik",
DlgImgAlign			: "Poravnava",
DlgImgAlignLeft		: "Levo",
DlgImgAlignAbsBottom: "Popolnoma na dno",
DlgImgAlignAbsMiddle: "Popolnoma v sredino",
DlgImgAlignBaseline	: "Na osnovno ?rto",
DlgImgAlignBottom	: "Na dno",
DlgImgAlignMiddle	: "V sredino",
DlgImgAlignRight	: "Desno",
DlgImgAlignTextTop	: "Besedilo na vrh",
DlgImgAlignTop		: "Na vrh",
DlgImgPreview		: "Predogled",
DlgImgAlertUrl		: "Vnesite URL slike",
DlgImgLinkTab		: "Povezava",

// Flash Dialog
DlgFlashTitle		: "Lastnosti Flash",
DlgFlashChkPlay		: "Samodejno predvajaj",
DlgFlashChkLoop		: "Ponavljanje",
DlgFlashChkMenu		: "Omogo?i Flash Meni",
DlgFlashScale		: "Pove?ava",
DlgFlashScaleAll	: "Poka?i vse",
DlgFlashScaleNoBorder	: "Brez obrobe",
DlgFlashScaleFit	: "Natan?no prileganje",

// Link Dialog
DlgLnkWindowTitle	: "Povezava",
DlgLnkInfoTab		: "Podatki o povezavi",
DlgLnkTargetTab		: "Cilj",

DlgLnkType			: "Vrsta povezave",
DlgLnkTypeURL		: "URL",
DlgLnkTypeAnchor	: "Zaznamek na tej strani",
DlgLnkTypeEMail		: "Elektronski naslov",
DlgLnkProto			: "Protokol",
DlgLnkProtoOther	: "&lt;drugo&gt;",
DlgLnkURL			: "URL",
DlgLnkAnchorSel		: "Izberi zaznamek",
DlgLnkAnchorByName	: "Po imenu zaznamka",
DlgLnkAnchorById	: "Po ID-ju elementa",
DlgLnkNoAnchors		: "&lt;V tem dokumentu ni zaznamkov&gt;",
DlgLnkEMail			: "Elektronski naslov",
DlgLnkEMailSubject	: "Predmet sporo?ila",
DlgLnkEMailBody		: "Vsebina sporo?ila",
DlgLnkUpload		: "Prenesi",
DlgLnkBtnUpload		: "Po?lji na stre?nik",

DlgLnkTarget		: "Cilj",
DlgLnkTargetFrame	: "&lt;okvir&gt;",
DlgLnkTargetPopup	: "&lt;pojavno okno&gt;",
DlgLnkTargetBlank	: "Novo okno (_blank)",
DlgLnkTargetParent	: "Star?evsko okno (_parent)",
DlgLnkTargetSelf	: "Isto okno (_self)",
DlgLnkTargetTop		: "Najvi?je okno (_top)",
DlgLnkTargetFrameName	: "Ime ciljnega okvirja",
DlgLnkPopWinName	: "Ime pojavnega okna",
DlgLnkPopWinFeat	: "Zna?ilnosti pojavnega okna",
DlgLnkPopResize		: "Spremenljive velikosti",
DlgLnkPopLocation	: "Naslovna vrstica",
DlgLnkPopMenu		: "Menijska vrstica",
DlgLnkPopScroll		: "Drsniki",
DlgLnkPopStatus		: "Vrstica stanja",
DlgLnkPopToolbar	: "Orodna vrstica",
DlgLnkPopFullScrn	: "Celozaslonska slika (IE)",
DlgLnkPopDependent	: "Podokno (Netscape)",
DlgLnkPopWidth		: "?irina",
DlgLnkPopHeight		: "Vi?ina",
DlgLnkPopLeft		: "Lega levo",
DlgLnkPopTop		: "Lega na vrhu",

DlnLnkMsgNoUrl		: "Vnesite URL povezave",
DlnLnkMsgNoEMail	: "Vnesite elektronski naslov",
DlnLnkMsgNoAnchor	: "Izberite zaznamek",

// Color Dialog
DlgColorTitle		: "Izberite barvo",
DlgColorBtnClear	: "Po?isti",
DlgColorHighlight	: "Ozna?i",
DlgColorSelected	: "Izbrano",

// Smiley Dialog
DlgSmileyTitle		: "Vstavi sme?ka",

// Special Character Dialog
DlgSpecialCharTitle	: "Izberi posebni znak",

// Table Dialog
DlgTableTitle		: "Lastnosti tabele",
DlgTableRows		: "Vrstice",
DlgTableColumns		: "Stolpci",
DlgTableBorder		: "Velikost obrobe",
DlgTableAlign		: "Poravnava",
DlgTableAlignNotSet	: "<Ni nastavljeno>",
DlgTableAlignLeft	: "Levo",
DlgTableAlignCenter	: "Sredinsko",
DlgTableAlignRight	: "Desno",
DlgTableWidth		: "?irina",
DlgTableWidthPx		: "pik",
DlgTableWidthPc		: "procentov",
DlgTableHeight		: "Vi?ina",
DlgTableCellSpace	: "Razmik med celicami",
DlgTableCellPad		: "Polnilo med celicami",
DlgTableCaption		: "Naslov",

// Table Cell Dialog
DlgCellTitle		: "Lastnosti celice",
DlgCellWidth		: "?irina",
DlgCellWidthPx		: "pik",
DlgCellWidthPc		: "procentov",
DlgCellHeight		: "Vi?ina",
DlgCellWordWrap		: "Pomikanje besedila",
DlgCellWordWrapNotSet	: "<Ni nastavljeno>",
DlgCellWordWrapYes	: "Da",
DlgCellWordWrapNo	: "Ne",
DlgCellHorAlign		: "Vodoravna poravnava",
DlgCellHorAlignNotSet	: "<Ni nastavljeno>",
DlgCellHorAlignLeft	: "Levo",
DlgCellHorAlignCenter	: "Sredinsko",
DlgCellHorAlignRight: "Desno",
DlgCellVerAlign		: "Navpi?na poravnava",
DlgCellVerAlignNotSet	: "<Ni nastavljeno>",
DlgCellVerAlignTop	: "Na vrh",
DlgCellVerAlignMiddle	: "V sredino",
DlgCellVerAlignBottom	: "Na dno",
DlgCellVerAlignBaseline	: "Na osnovno ?rto",
DlgCellRowSpan		: "Spojenih vrstic (row-span)",
DlgCellCollSpan		: "Spojenih stolpcev (col-span)",
DlgCellBackColor	: "Barva ozadja",
DlgCellBorderColor	: "Barva obrobe",
DlgCellBtnSelect	: "Izberi...",

// Find Dialog
DlgFindTitle		: "Najdi",
DlgFindFindBtn		: "Najdi",
DlgFindNotFoundMsg	: "Navedeno besedilo ni bilo najdeno.",

// Replace Dialog
DlgReplaceTitle			: "Zamenjaj",
DlgReplaceFindLbl		: "Najdi:",
DlgReplaceReplaceLbl	: "Zamenjaj z:",
DlgReplaceCaseChk		: "Razlikuj velike in male ?rke",
DlgReplaceReplaceBtn	: "Zamenjaj",
DlgReplaceReplAllBtn	: "Zamenjaj vse",
DlgReplaceWordChk		: "Samo cele besede",

// Paste Operations / Dialog
PasteErrorPaste	: "Varnostne nastavitve brskalnika ne dopu??ajo samodejnega lepljenja. Uporabite kombinacijo tipk na tipkovnici (Ctrl+V).",
PasteErrorCut	: "Varnostne nastavitve brskalnika ne dopu??ajo samodejnega izrezovanja. Uporabite kombinacijo tipk na tipkovnici (Ctrl+X).",
PasteErrorCopy	: "Varnostne nastavitve brskalnika ne dopu??ajo samodejnega kopiranja. Uporabite kombinacijo tipk na tipkovnici (Ctrl+C).",

PasteAsText		: "Prilepi kot golo besedilo",
PasteFromWord	: "Prilepi iz Worda",

DlgPasteMsg2	: "Prosim prilepite v sle?i okvir s pomo?jo tipkovnice (<STRONG>Ctrl+V</STRONG>) in pritisnite <STRONG>V redu</STRONG>.",
DlgPasteIgnoreFont		: "Prezri obliko pisave",
DlgPasteRemoveStyles	: "Odstrani nastavitve stila",
DlgPasteCleanBox		: "Po?isti okvir",


// Color Picker
ColorAutomatic	: "Samodejno",
ColorMoreColors	: "Ve? barv...",

// Document Properties
DocProps		: "Lastnosti dokumenta",

// Anchor Dialog
DlgAnchorTitle		: "Lastnosti zaznamka",
DlgAnchorName		: "Ime zaznamka",
DlgAnchorErrorName	: "Prosim vnesite ime zaznamka",

// Speller Pages Dialog
DlgSpellNotInDic		: "Ni v slovarju",
DlgSpellChangeTo		: "Spremeni v",
DlgSpellBtnIgnore		: "Prezri",
DlgSpellBtnIgnoreAll	: "Prezri vse",
DlgSpellBtnReplace		: "Zamenjaj",
DlgSpellBtnReplaceAll	: "Zamenjaj vse",
DlgSpellBtnUndo			: "Razveljavi",
DlgSpellNoSuggestions	: "- Ni predlogov -",
DlgSpellProgress		: "Preverjanje ?rkovanja se izvaja...",
DlgSpellNoMispell		: "?rkovanje je kon?ano: Brez napak",
DlgSpellNoChanges		: "?rkovanje je kon?ano: Nobena beseda ni bila spremenjena",
DlgSpellOneChange		: "?rkovanje je kon?ano: Spremenjena je bila ena beseda",
DlgSpellManyChanges		: "?rkovanje je kon?ano: Spremenjenih je bilo %1 besed",

IeSpellDownload			: "?rkovalnik ni name??en. Ali ga ?elite prenesti sedaj?",

// Button Dialog
DlgButtonText	: "Besedilo (Vrednost)",
DlgButtonType	: "Tip",

// Checkbox and Radio Button Dialogs
DlgCheckboxName		: "Ime",
DlgCheckboxValue	: "Vrednost",
DlgCheckboxSelected	: "Izbrano",

// Form Dialog
DlgFormName		: "Ime",
DlgFormAction	: "Akcija",
DlgFormMethod	: "Metoda",

// Select Field Dialog
DlgSelectName		: "Ime",
DlgSelectValue		: "Vrednost",
DlgSelectSize		: "Velikost",
DlgSelectLines		: "vrstic",
DlgSelectChkMulti	: "Dovoli izbor ve?ih vrstic",
DlgSelectOpAvail	: "Razpolo?ljive izbire",
DlgSelectOpText		: "Besedilo",
DlgSelectOpValue	: "Vrednost",
DlgSelectBtnAdd		: "Dodaj",
DlgSelectBtnModify	: "Spremeni",
DlgSelectBtnUp		: "Gor",
DlgSelectBtnDown	: "Dol",
DlgSelectBtnSetValue : "Postavi kot privzeto izbiro",
DlgSelectBtnDelete	: "Izbri?i",

// Textarea Dialog
DlgTextareaName	: "Ime",
DlgTextareaCols	: "Stolpcev",
DlgTextareaRows	: "Vrstic",

// Text Field Dialog
DlgTextName			: "Ime",
DlgTextValue		: "Vrednost",
DlgTextCharWidth	: "Dol?ina",
DlgTextMaxChars		: "Najve?je ?tevilo znakov",
DlgTextType			: "Tip",
DlgTextTypeText		: "Besedilo",
DlgTextTypePass		: "Geslo",

// Hidden Field Dialog
DlgHiddenName	: "Ime",
DlgHiddenValue	: "Vrednost",

// Bulleted List Dialog
BulletedListProp	: "Lastnosti ozna?enega seznama",
NumberedListProp	: "Lastnosti o?tevil?enega seznama",
DlgLstType			: "Tip",
DlgLstTypeCircle	: "Pikica",
DlgLstTypeDisc		: "Disc",	//MISSING
DlgLstTypeSquare	: "Kvadratek",
DlgLstTypeNumbers	: "?tevilke (1, 2, 3)",
DlgLstTypeLCase		: "Male ?rke (a, b, c)",
DlgLstTypeUCase		: "Velike ?rke (A, B, C)",
DlgLstTypeSRoman	: "Male rimske ?tevilke (i, ii, iii)",
DlgLstTypeLRoman	: "Velike rimske ?tevilke (I, II, III)",

// Document Properties Dialog
DlgDocGeneralTab	: "Splo?no",
DlgDocBackTab		: "Ozadje",
DlgDocColorsTab		: "Barve in zamiki",
DlgDocMetaTab		: "Meta podatki",

DlgDocPageTitle		: "Naslov strani",
DlgDocLangDir		: "Smer jezika",
DlgDocLangDirLTR	: "Od leve proti desni (LTR)",
DlgDocLangDirRTL	: "Od desne proti levi (RTL)",
DlgDocLangCode		: "Oznaka jezika",
DlgDocCharSet		: "Kodna tabela",
DlgDocCharSetOther	: "Druga kodna tabela",

DlgDocDocType		: "Glava tipa dokumenta",
DlgDocDocTypeOther	: "Druga glava tipa dokumenta",
DlgDocIncXHTML		: "Vstavi XHTML deklaracije",
DlgDocBgColor		: "Barva ozadja",
DlgDocBgImage		: "URL slike za ozadje",
DlgDocBgNoScroll	: "Nepremi?no ozadje",
DlgDocCText			: "Besedilo",
DlgDocCLink			: "Povezava",
DlgDocCVisited		: "Obiskana povezava",
DlgDocCActive		: "Aktivna povezava",
DlgDocMargins		: "Zamiki strani",
DlgDocMaTop			: "Na vrhu",
DlgDocMaLeft		: "Levo",
DlgDocMaRight		: "Desno",
DlgDocMaBottom		: "Spodaj",
DlgDocMeIndex		: "Klju?ne besede (lo?ene z vejicami)",
DlgDocMeDescr		: "Opis strani",
DlgDocMeAuthor		: "Avtor",
DlgDocMeCopy		: "Avtorske pravice",
DlgDocPreview		: "Predogled",

// Templates Dialog
Templates			: "Predloge",
DlgTemplatesTitle	: "Vsebinske predloge",
DlgTemplatesSelMsg	: "Izberite predlogo, ki jo ?elite odpreti v urejevalniku<br>(trenutna vsebina bo izgubljena):",
DlgTemplatesLoading	: "Nalagam seznam predlog. Prosim po?akajte...",
DlgTemplatesNoTpl	: "(Ni pripravljenih predlog)",

// About Dialog
DlgAboutAboutTab	: "Vizitka",
DlgAboutBrowserInfoTab	: "Informacije o brskalniku",
DlgAboutVersion		: "razli?ica",
DlgAboutLicense		: "Pravica za uporabo pod pogoji GNU Lesser General Public License",
DlgAboutInfo		: "Za ve? informacij obi??ite"
}