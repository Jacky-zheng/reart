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
 * File Name: lt.js
 * 	Lithuanian language file.
 * 
 * File Authors:
 * 		Tauras Paliulis (tauras.paliulis@tauras.com)
 */

var FCKLang =
{
// Language direction : "ltr" (left to right) or "rtl" (right to left).
Dir					: "ltr",

ToolbarCollapse		: "Sutraukti mygtuk? juost?",
ToolbarExpand		: "I?pl?sti mygtuk? juost?",

// Toolbar Items and Context Menu
Save				: "I?saugoti",
NewPage				: "Naujas puslapis",
Preview				: "Per?iūra",
Cut					: "I?kirpti",
Copy				: "Kopijuoti",
Paste				: "?d?ti",
PasteText			: "?d?ti kaip gryn? tekst?",
PasteWord			: "?d?ti i? Word",
Print				: "Spausdinti",
SelectAll			: "Pa?ym?ti visk?",
RemoveFormat		: "Panaikinti format?",
InsertLinkLbl		: "Nuoroda",
InsertLink			: "?terpti/taisyti nuorod?",
RemoveLink			: "Panaikinti nuorod?",
Anchor				: "?terpti/modifikuoti ?ym?",
InsertImageLbl		: "Vaizdas",
InsertImage			: "?terpti/taisyti vaizd?",
InsertFlashLbl		: "Flash",
InsertFlash			: "?terpti/taisyti Flash",
InsertTableLbl		: "Lentel?",
InsertTable			: "?terpti/taisyti lentel?",
InsertLineLbl		: "Linija",
InsertLine			: "?terpti horizontali? linij?",
InsertSpecialCharLbl: "Spec. simbolis",
InsertSpecialChar	: "?terpti special? simbol?",
InsertSmileyLbl		: "Veideliai",
InsertSmiley		: "?terpti veidel?",
About				: "Apie FCKeditor",
Bold				: "Pusjuodis",
Italic				: "Kursyvas",
Underline			: "Pabrauktas",
StrikeThrough		: "Perbrauktas",
Subscript			: "Apatinis indeksas",
Superscript			: "Vir?utinis indeksas",
LeftJustify			: "Lygiuoti kair?",
CenterJustify		: "Centruoti",
RightJustify		: "Lygiuoti de?in?",
BlockJustify		: "Lygiuoti abi puses",
DecreaseIndent		: "Suma?inti ?trauk?",
IncreaseIndent		: "Padidinti ?trauk?",
Undo				: "At?aukti",
Redo				: "Atstatyti",
NumberedListLbl		: "Numeruotas s?ra?as",
NumberedList		: "?terpti/Panaikinti numeruot? s?ra??",
BulletedListLbl		: "Su?enklintas s?ra?as",
BulletedList		: "?terpti/Panaikinti su?enklint? s?ra??",
ShowTableBorders	: "Rodyti lentel?s r?mus",
ShowDetails			: "Rodyti detales",
Style				: "Stilius",
FontFormat			: "?rifto formatas",
Font				: "?riftas",
FontSize			: "?rifto dydis",
TextColor			: "Teksto spalva",
BGColor				: "Fono spalva",
Source				: "?altinis",
Find				: "Rasti",
Replace				: "Pakeisti",
SpellCheck			: "Ra?ybos tikrinimas",
UniversalKeyboard	: "Universali klaviatūra",

Form			: "Forma",
Checkbox		: "?ymimasis langelis",
RadioButton		: "?ymimoji akut?",
TextField		: "Teksto laukas",
Textarea		: "Teksto sritis",
HiddenField		: "Nerodomas laukas",
Button			: "Mygtukas",
SelectionField	: "Atrankos laukas",
ImageButton		: "Vaizdinis mygtukas",

// Context Menu
EditLink			: "Taisyti nuorod?",
InsertRow			: "?terpti eilut?",
DeleteRows			: "?alinti eilutes",
InsertColumn		: "?terpti stulpel?",
DeleteColumns		: "?alinti stulpelius",
InsertCell			: "?terpti langel?",
DeleteCells			: "?alinti langelius",
MergeCells			: "Sujungti langelius",
SplitCell			: "Skaidyti langelius",
CellProperties		: "Langelio savyb?s",
TableProperties		: "Lentel?s savyb?s",
ImageProperties		: "Vaizdo savyb?s",
FlashProperties		: "Flash savyb?s",

AnchorProp			: "?ym?s savyb?s",
ButtonProp			: "Mygtuko savyb?s",
CheckboxProp		: "?ymimojo langelio savyb?s",
HiddenFieldProp		: "Nerodomo lauko savyb?s",
RadioButtonProp		: "?ymimosios akut?s savyb?s",
ImageButtonProp		: "Vaizdinio mygtuko savyb?s",
TextFieldProp		: "Teksto lauko savyb?s",
SelectionFieldProp	: "Atrankos lauko savyb?s",
TextareaProp		: "Teksto srities savyb?s",
FormProp			: "Formos savyb?s",

FontFormats			: "Normalus;Formuotas;Kreipinio;Antra?tinis 1;Antra?tinis 2;Antra?tinis 3;Antra?tinis 4;Antra?tinis 5;Antra?tinis 6",

// Alerts and Messages
ProcessingXHTML		: "Apdorojamas XHTML. Pra?ome palaukti...",
Done				: "Baigta",
PasteWordConfirm	: "?dedamas tekstas yra pana?us ? kopij? i? Word. Ar Jūs norite prie? ?d?jim? i?valyti j??",
NotCompatiblePaste	: "?i komanda yra prieinama tik per Internet Explorer 5.5 ar auk?tesn? versij?. Ar Jūs norite ?terpti be valymo?",
UnknownToolbarItem	: "Ne?inomas mygtuk? juosta elementas \"%1\"",
UnknownCommand		: "Ne?inomas komandos vardas \"%1\"",
NotImplemented		: "Komanda n?ra ?gyvendinta",
UnknownToolbarSet	: "Mygtuk? juostos rinkinys \"%1\" neegzistuoja",
NoActiveX			: "You browser's security settings could limit some features of the editor. You must enable the option \"Run ActiveX controls and plug-ins\". You may experience errors and notice missing features.",	//MISSING

// Dialogs
DlgBtnOK			: "OK",
DlgBtnCancel		: "Nutraukti",
DlgBtnClose			: "U?daryti",
DlgBtnBrowseServer	: "Nar?yti po server?",
DlgAdvancedTag		: "Papildomas",
DlgOpOther			: "&lt;Kita&gt;",
DlgInfoTab			: "Informacija",
DlgAlertUrl			: "Pra?ome ?ra?yti URL",

// General Dialogs Labels
DlgGenNotSet		: "&lt;n?ra nustatyta&gt;",
DlgGenId			: "Id",
DlgGenLangDir		: "Teksto kryptis",
DlgGenLangDirLtr	: "I? kair?s ? de?in? (LTR)",
DlgGenLangDirRtl	: "I? de?in?s ? kair? (RTL)",
DlgGenLangCode		: "Kalbos kodas",
DlgGenAccessKey		: "Prieigos raktas",
DlgGenName			: "Vardas",
DlgGenTabIndex		: "Tabuliavimo indeksas",
DlgGenLongDescr		: "Ilgas apra?ymas URL",
DlgGenClass			: "Stili? lentel?s klas?s",
DlgGenTitle			: "Konsultacin? antra?t?",
DlgGenContType		: "Konsultacinio turinio tipas",
DlgGenLinkCharset	: "Susiet? i?tekli? simboli? lentel?",
DlgGenStyle			: "Stilius",

// Image Dialog
DlgImgTitle			: "Vaizdo savyb?s",
DlgImgInfoTab		: "Vaizdo informacija",
DlgImgBtnUpload		: "Si?sti ? server?",
DlgImgURL			: "URL",
DlgImgUpload		: "Nusi?sti",
DlgImgAlt			: "Alternatyvus Tekstas",
DlgImgWidth			: "Plotis",
DlgImgHeight		: "Auk?tis",
DlgImgLockRatio		: "I?laikyti proporcij?",
DlgBtnResetSize		: "Atstatyti dyd?",
DlgImgBorder		: "R?melis",
DlgImgHSpace		: "Hor.Erdv?",
DlgImgVSpace		: "Vert.Erdv?",
DlgImgAlign			: "Lygiuoti",
DlgImgAlignLeft		: "Kair?",
DlgImgAlignAbsBottom: "Absoliu?i? apa?i?",
DlgImgAlignAbsMiddle: "Absoliut? vidur?",
DlgImgAlignBaseline	: "Apatin? linij?",
DlgImgAlignBottom	: "Apa?i?",
DlgImgAlignMiddle	: "Vidur?",
DlgImgAlignRight	: "De?in?",
DlgImgAlignTextTop	: "Teksto vir?ūn?",
DlgImgAlignTop		: "Vir?ūn?",
DlgImgPreview		: "Per?iūra",
DlgImgAlertUrl		: "Pra?ome ?vesti vaizdo URL",
DlgImgLinkTab		: "Nuoroda",

// Flash Dialog
DlgFlashTitle		: "Flash savyb?s",
DlgFlashChkPlay		: "Automatinis paleidimas",
DlgFlashChkLoop		: "Ciklas",
DlgFlashChkMenu		: "Leisti Flash meniu",
DlgFlashScale		: "Mastelis",
DlgFlashScaleAll	: "Rodyti vis?",
DlgFlashScaleNoBorder	: "Be r?melio",
DlgFlashScaleFit	: "Tikslus atitikimas",

// Link Dialog
DlgLnkWindowTitle	: "Nuoroda",
DlgLnkInfoTab		: "Nuorodos informacija",
DlgLnkTargetTab		: "Paskirtis",

DlgLnkType			: "Nuorodos tipas",
DlgLnkTypeURL		: "URL",
DlgLnkTypeAnchor	: "?ym? ?iame puslapyje",
DlgLnkTypeEMail		: "El.pa?tas",
DlgLnkProto			: "Protokolas",
DlgLnkProtoOther	: "&lt;kitas&gt;",
DlgLnkURL			: "URL",
DlgLnkAnchorSel		: "Pasirinkite ?ym?",
DlgLnkAnchorByName	: "Pagal ?ym?s vard?",
DlgLnkAnchorById	: "Pagal ?ym?s Id",
DlgLnkNoAnchors		: "&lt;?iame dokumente ?ymi? n?ra&gt;",
DlgLnkEMail			: "El.pa?to adresas",
DlgLnkEMailSubject	: "?inut?s tema",
DlgLnkEMailBody		: "?inut?s turinys",
DlgLnkUpload		: "Si?sti",
DlgLnkBtnUpload		: "Si?sti ? server?",

DlgLnkTarget		: "Paskirties vieta",
DlgLnkTargetFrame	: "&lt;kadras&gt;",
DlgLnkTargetPopup	: "&lt;i?skleid?iamas langas&gt;",
DlgLnkTargetBlank	: "Naujas langas (_blank)",
DlgLnkTargetParent	: "Pirminis langas (_parent)",
DlgLnkTargetSelf	: "Tas pats langas (_self)",
DlgLnkTargetTop		: "Svarbiausias langas (_top)",
DlgLnkTargetFrameName	: "Paskirties kadro vardas",
DlgLnkPopWinName	: "Paskirties lango vardas",
DlgLnkPopWinFeat	: "I?skleid?iamo lango savyb?s",
DlgLnkPopResize		: "Kei?iamas dydis",
DlgLnkPopLocation	: "Adreso juosta",
DlgLnkPopMenu		: "Meniu juosta",
DlgLnkPopScroll		: "Slinkties juostos",
DlgLnkPopStatus		: "Būsenos juosta",
DlgLnkPopToolbar	: "Mygtuk? juosta",
DlgLnkPopFullScrn	: "Visas ekranas (IE)",
DlgLnkPopDependent	: "Priklausomas (Netscape)",
DlgLnkPopWidth		: "Plotis",
DlgLnkPopHeight		: "Auk?tis",
DlgLnkPopLeft		: "Kair? pozicija",
DlgLnkPopTop		: "Vir?utin? pozicija",

DlnLnkMsgNoUrl		: "Pra?ome ?vesti nuorodos URL",
DlnLnkMsgNoEMail	: "Pra?ome ?vesti el.pa?to adres?",
DlnLnkMsgNoAnchor	: "Pra?ome pasirinkti ?ym?",

// Color Dialog
DlgColorTitle		: "Pasirinkite spalv?",
DlgColorBtnClear	: "Trinti",
DlgColorHighlight	: "Pary?kinta",
DlgColorSelected	: "Pa?ym?ta",

// Smiley Dialog
DlgSmileyTitle		: "?terpti veidel?",

// Special Character Dialog
DlgSpecialCharTitle	: "Pasirinkite special? simbol?",

// Table Dialog
DlgTableTitle		: "Lentel?s savyb?s",
DlgTableRows		: "Eilut?s",
DlgTableColumns		: "Stulpeliai",
DlgTableBorder		: "R?melio dydis",
DlgTableAlign		: "Lygiuoti",
DlgTableAlignNotSet	: "<Nenustatyta>",
DlgTableAlignLeft	: "Kair?",
DlgTableAlignCenter	: "Centr?",
DlgTableAlignRight	: "De?in?",
DlgTableWidth		: "Plotis",
DlgTableWidthPx		: "ta?kais",
DlgTableWidthPc		: "procentais",
DlgTableHeight		: "Auk?tis",
DlgTableCellSpace	: "Tarpas tarp langeli?",
DlgTableCellPad		: "Trapas nuo langelio r?mo iki teksto",
DlgTableCaption		: "Antra?t?",

// Table Cell Dialog
DlgCellTitle		: "Langelio savyb?s",
DlgCellWidth		: "Plotis",
DlgCellWidthPx		: "ta?kais",
DlgCellWidthPc		: "procentais",
DlgCellHeight		: "Auk?tis",
DlgCellWordWrap		: "Teksto lau?ymas",
DlgCellWordWrapNotSet	: "<Nenustatyta>",
DlgCellWordWrapYes	: "Taip",
DlgCellWordWrapNo	: "Ne",
DlgCellHorAlign		: "Horizontaliai lygiuoti",
DlgCellHorAlignNotSet	: "<Nenustatyta>",
DlgCellHorAlignLeft	: "Kair?",
DlgCellHorAlignCenter	: "Centr?",
DlgCellHorAlignRight: "De?in?",
DlgCellVerAlign		: "Vertikaliai lygiuoti",
DlgCellVerAlignNotSet	: "<Nenustatyta>",
DlgCellVerAlignTop	: "Vir??",
DlgCellVerAlignMiddle	: "Vidur?",
DlgCellVerAlignBottom	: "Apa?i?",
DlgCellVerAlignBaseline	: "Apatin? linij?",
DlgCellRowSpan		: "Eilu?i? apjungimas",
DlgCellCollSpan		: "Stulpeli? apjungimas",
DlgCellBackColor	: "Fono spalva",
DlgCellBorderColor	: "R?melio spalva",
DlgCellBtnSelect	: "Pa?ym?ti...",

// Find Dialog
DlgFindTitle		: "Paie?ka",
DlgFindFindBtn		: "Surasti",
DlgFindNotFoundMsg	: "Nurodytas tekstas nerastas.",

// Replace Dialog
DlgReplaceTitle			: "Pakeisti",
DlgReplaceFindLbl		: "Surasti tekst?:",
DlgReplaceReplaceLbl	: "Pakeisti tekstu:",
DlgReplaceCaseChk		: "Skirti did?i?sias ir ma??sias raides",
DlgReplaceReplaceBtn	: "Pakeisti",
DlgReplaceReplAllBtn	: "Pakeisti visk?",
DlgReplaceWordChk		: "Atitikti piln? ?od?",

// Paste Operations / Dialog
PasteErrorPaste	: "Jūs? nar?ykl?s saugumo nustatymai neleid?ia redaktoriui automati?kai ?vykdyti ?d?jimo operacij?. Tam pra?ome naudoti klaviatūr? (Ctrl+V).",
PasteErrorCut	: "Jūs? nar?ykl?s saugumo nustatymai neleid?ia redaktoriui automati?kai ?vykdyti i?kirpimo operacij?. Tam pra?ome naudoti klaviatūr? (Ctrl+X).",
PasteErrorCopy	: "Jūs? nar?ykl?s saugumo nustatymai neleid?ia redaktoriui automati?kai ?vykdyti kopijavimo operacij?. Tam pra?ome naudoti klaviatūr? (Ctrl+C).",

PasteAsText		: "?d?ti kaip gryn? tekst?",
PasteFromWord	: "?d?ti i? Word",

DlgPasteMsg2	: "?emiau esan?iame ?vedimo lauke ?d?kite tekst?, naudodami klaviatūr? (<STRONG>Ctrl+V</STRONG>) ir spūstelkite mygtuk? <STRONG>OK</STRONG>.",
DlgPasteIgnoreFont		: "Ignoruoti ?rift? nustatymus",
DlgPasteRemoveStyles	: "Pa?alinti stili? nustatymus",
DlgPasteCleanBox		: "Trinti ?vedimo lauk?",


// Color Picker
ColorAutomatic	: "Automatinis",
ColorMoreColors	: "Daugiau spalv?...",

// Document Properties
DocProps		: "Dokumento savyb?s",

// Anchor Dialog
DlgAnchorTitle		: "?ym?s savyb?s",
DlgAnchorName		: "?ym?s vardas",
DlgAnchorErrorName	: "Pra?ome ?vesti ?ym?s vard?",

// Speller Pages Dialog
DlgSpellNotInDic		: "?odyne nerastas",
DlgSpellChangeTo		: "Pakeisti ?",
DlgSpellBtnIgnore		: "Ignoruoti",
DlgSpellBtnIgnoreAll	: "Ignoruoti visus",
DlgSpellBtnReplace		: "Pakeisti",
DlgSpellBtnReplaceAll	: "Pakeisti visus",
DlgSpellBtnUndo			: "At?aukti",
DlgSpellNoSuggestions	: "- N?ra pasiūlym? -",
DlgSpellProgress		: "Vyksta ra?ybos tikrinimas...",
DlgSpellNoMispell		: "Ra?ybos tikrinimas baigtas: Nerasta ra?ybos klaid?",
DlgSpellNoChanges		: "Ra?ybos tikrinimas baigtas: N?ra pakeist? ?od?i?",
DlgSpellOneChange		: "Ra?ybos tikrinimas baigtas: Vienas ?odis pakeistas",
DlgSpellManyChanges		: "Ra?ybos tikrinimas baigtas: Pakeista %1 ?od?i?",

IeSpellDownload			: "Ra?ybos tikrinimas neinstaliuotas. Ar Jūs norite j? dabar atsisi?sti?",

// Button Dialog
DlgButtonText	: "Tekstas (Reik?m?)",
DlgButtonType	: "Tipas",

// Checkbox and Radio Button Dialogs
DlgCheckboxName		: "Vardas",
DlgCheckboxValue	: "Reik?m?",
DlgCheckboxSelected	: "Pa?ym?tas",

// Form Dialog
DlgFormName		: "Vardas",
DlgFormAction	: "Veiksmas",
DlgFormMethod	: "Metodas",

// Select Field Dialog
DlgSelectName		: "Vardas",
DlgSelectValue		: "Reik?m?",
DlgSelectSize		: "Dydis",
DlgSelectLines		: "eilu?i?",
DlgSelectChkMulti	: "Leisti daugeriop? atrank?",
DlgSelectOpAvail	: "Galimos parinktys",
DlgSelectOpText		: "Tekstas",
DlgSelectOpValue	: "Reik?m?",
DlgSelectBtnAdd		: "?traukti",
DlgSelectBtnModify	: "Modifikuoti",
DlgSelectBtnUp		: "Auk?tyn",
DlgSelectBtnDown	: "?emyn",
DlgSelectBtnSetValue : "Laikyti pa?ym?ta reik?me",
DlgSelectBtnDelete	: "Trinti",

// Textarea Dialog
DlgTextareaName	: "Vardas",
DlgTextareaCols	: "Ilgis",
DlgTextareaRows	: "Plotis",

// Text Field Dialog
DlgTextName			: "Vardas",
DlgTextValue		: "Reik?m?",
DlgTextCharWidth	: "Ilgis simboliais",
DlgTextMaxChars		: "Maksimalus simboli? skai?ius",
DlgTextType			: "Tipas",
DlgTextTypeText		: "Tekstas",
DlgTextTypePass		: "Slapta?odis",

// Hidden Field Dialog
DlgHiddenName	: "Vardas",
DlgHiddenValue	: "Reik?m?",

// Bulleted List Dialog
BulletedListProp	: "Su?enklinto s?ra?o savyb?s",
NumberedListProp	: "Numeruoto s?ra?o savyb?s",
DlgLstType			: "Tipas",
DlgLstTypeCircle	: "Apskritimas",
DlgLstTypeDisc		: "Disc",	//MISSING
DlgLstTypeSquare	: "Kvadratas",
DlgLstTypeNumbers	: "Skai?iai (1, 2, 3)",
DlgLstTypeLCase		: "Ma?osios raid?s (a, b, c)",
DlgLstTypeUCase		: "Did?iosios raid?s (A, B, C)",
DlgLstTypeSRoman	: "Rom?n? ma?ieji skai?iai (i, ii, iii)",
DlgLstTypeLRoman	: "Rom?n? didieji skai?iai (I, II, III)",

// Document Properties Dialog
DlgDocGeneralTab	: "Bendros savyb?s",
DlgDocBackTab		: "Fonas",
DlgDocColorsTab		: "Spalvos ir kra?tin?s",
DlgDocMetaTab		: "Meta duomenys",

DlgDocPageTitle		: "Puslapio antra?t?",
DlgDocLangDir		: "Kalbos kryptis",
DlgDocLangDirLTR	: "I? kair?s ? de?in? (LTR)",
DlgDocLangDirRTL	: "I? de?in?s ? kair? (RTL)",
DlgDocLangCode		: "Kalbos kodas",
DlgDocCharSet		: "Simboli? kodavimo lentel?",
DlgDocCharSetOther	: "Kita simboli? kodavimo lentel?",

DlgDocDocType		: "Dokumento tipo antra?t?",
DlgDocDocTypeOther	: "Kita dokumento tipo antra?t?",
DlgDocIncXHTML		: "?traukti XHTML deklaracijas",
DlgDocBgColor		: "Fono spalva",
DlgDocBgImage		: "Fono paveiksl?lio nuoroda (URL)",
DlgDocBgNoScroll	: "Neslenkantis fonas",
DlgDocCText			: "Tekstas",
DlgDocCLink			: "Nuoroda",
DlgDocCVisited		: "Aplankyta nuoroda",
DlgDocCActive		: "Aktyvi nuoroda",
DlgDocMargins		: "Puslapio kra?tin?s",
DlgDocMaTop			: "Vir?uje",
DlgDocMaLeft		: "Kair?je",
DlgDocMaRight		: "De?in?je",
DlgDocMaBottom		: "Apa?ioje",
DlgDocMeIndex		: "Dokumento indeksavimo raktiniai ?od?iai (atskirti kableliais)",
DlgDocMeDescr		: "Dokumento apibūdinimas",
DlgDocMeAuthor		: "Autorius",
DlgDocMeCopy		: "Autorin?s teis?s",
DlgDocPreview		: "Per?iūra",

// Templates Dialog
Templates			: "?ablonai",
DlgTemplatesTitle	: "Turinio ?ablonai",
DlgTemplatesSelMsg	: "Pasirinkite norim? ?ablon?<br>(<b>D?mesio!</b> esamas turinys bus prarastas):",
DlgTemplatesLoading	: "?keliamas ?ablon? s?ra?as. Pra?ome palaukti...",
DlgTemplatesNoTpl	: "(?ablon? s?ra?as tu??ias)",

// About Dialog
DlgAboutAboutTab	: "Apie",
DlgAboutBrowserInfoTab	: "Nar?ykl?s informacija",
DlgAboutVersion		: "versija",
DlgAboutLicense		: "Licencijuota pagal GNU ma?esn?s atsakomyb?s pagrindin?s vie?os licencijos s?lygas",
DlgAboutInfo		: "Papildom? informacij? galima gauti"
}