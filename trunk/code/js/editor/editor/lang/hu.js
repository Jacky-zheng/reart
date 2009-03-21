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
 * File Name: hu.js
 * 	Hungarian language file.
 * 
 * File Authors:
 * 		Varga Zsolt (meridian@netteszt.hu)
 */

var FCKLang =
{
// Language direction : "ltr" (left to right) or "rtl" (right to left).
Dir					: "ltr",

ToolbarCollapse		: "Egyszer? eszk?ztár",
ToolbarExpand		: "B?vített eszk?ztár",

// Toolbar Items and Context Menu
Save				: "Mentés",
NewPage				: "új oldal",
Preview				: "El?nézet",
Cut					: "Kivágás",
Copy				: "Másolás",
Paste				: "Beillesztés",
PasteText			: "Beillesztés formázatlan sz?vegként",
PasteWord			: "Beillesztés Wordb?l",
Print				: "Nyomtatás",
SelectAll			: "Minden kijel?lése",
RemoveFormat		: "Formázás t?rlése",
InsertLinkLbl		: "Hivatkozás",
InsertLink			: "Hivatkozás beillesztése/módosítása",
RemoveLink			: "Hivatkozás t?rlése",
Anchor				: "Horgony beillesztése/szerkesztése",
InsertImageLbl		: "Kép",
InsertImage			: "Kép beillesztése/módosítása",
InsertFlashLbl		: "Flash",
InsertFlash			: "Flash beillesztése, módosítása",
InsertTableLbl		: "Táblázat",
InsertTable			: "Táblázat beillesztése/módosítása",
InsertLineLbl		: "Vonal",
InsertLine			: "Elválasztóvonal beillesztése",
InsertSpecialCharLbl: "Speciális karakter",
InsertSpecialChar	: "Speciális karakter beillesztése",
InsertSmileyLbl		: "Hangulatjelek",
InsertSmiley		: "Hangulatjelek beillesztése",
About				: "FCKeditor névjegy",
Bold				: "Félk?vér",
Italic				: "D?lt",
Underline			: "Aláhúzott",
StrikeThrough		: "áthúzott",
Subscript			: "Alsó index",
Superscript			: "Fels? index",
LeftJustify			: "Balra",
CenterJustify		: "K?zépre",
RightJustify		: "Jobbra",
BlockJustify		: "Sorkizárt",
DecreaseIndent		: "Behúzás cs?kkentése",
IncreaseIndent		: "Behúzás n?velése",
Undo				: "Visszavonás",
Redo				: "Ismétlés",
NumberedListLbl		: "Számozás",
NumberedList		: "Számozás beillesztése/t?rlése",
BulletedListLbl		: "Felsorolás",
BulletedList		: "Felsorolás beillesztése/t?rlése",
ShowTableBorders	: "Táblázat szegély mutatása",
ShowDetails			: "Részletek mutatása",
Style				: "Stílus",
FontFormat			: "Formátum",
Font				: "Bet?tipus",
FontSize			: "Méret",
TextColor			: "Bet?szín",
BGColor				: "Háttérszín",
Source				: "Forráskód",
Find				: "Keresés",
Replace				: "Csere",
SpellCheck			: "Helyesírásellen?rzés",
UniversalKeyboard	: "általános billenty?zet",

Form			: "?rlap",
Checkbox		: "Jel?l?négyzet",
RadioButton		: "Választógomb",
TextField		: "Sz?vegmez?",
Textarea		: "Sz?vegterület",
HiddenField		: "Rejtettmez?",
Button			: "Gomb",
SelectionField	: "Választómez?",
ImageButton		: "Képgomb",

// Context Menu
EditLink			: "Hivatkozás módosítása",
InsertRow			: "Sor beszúrása",
DeleteRows			: "Sor(ok) t?rlése",
InsertColumn		: "Oszlop beszúrása",
DeleteColumns		: "Oszlop(ok) t?rlése",
InsertCell			: "Cella beszúrása",
DeleteCells			: "Cellák t?rlése",
MergeCells			: "Cellák egyesítése",
SplitCell			: "Cellák szétválasztása",
CellProperties		: "Cellák tulajdonsága",
TableProperties		: "Táblázat tulajdonsága",
ImageProperties		: "Kép tulajdonsága",
FlashProperties		: "Flash tulajdonsága",

AnchorProp			: "Horgony(ok) tulajdonsága(i)",
ButtonProp			: "Gomb(ok) tulajdonsága(i) ",
CheckboxProp		: "Jel?l?négyzet(ek) tulajdonsága(i)",
HiddenFieldProp		: "Rejtettmez?(k) tulajdonsága(i)",
RadioButtonProp		: "Választógomb(ok) tulajdonsága(i)",
ImageButtonProp		: "Képgomb(ok) tulajdonsága(i)",
TextFieldProp		: "Sz?vegmez?(k) tulajdonsága(i)",
SelectionFieldProp	: "Választómez?(k) tulajdonsága(i)",
TextareaProp		: "Sz?vegterület(ek) tulajdonsága(i)",
FormProp			: "?rlap(ok) tulajdonsága(i)",

FontFormats			: "Normál;Formázott;Címsor;Fejléc 1;Fejléc 2;Fejléc 3;Fejléc 4;Fejléc 5;Fejléc 6;Bekezdés (DIV)",

// Alerts and Messages
ProcessingXHTML		: "XHTML feldolgozása. Kérem várjon...",
Done				: "Kész",
PasteWordConfirm	: "A sz?veg amit be szeretnél illeszteni úgy néz ki Word-b?l van másolva. Do you want to clean it before pasting?",
NotCompatiblePaste	: "Ez a parancs csak Internet Explorer 5.5 verziótól használható (Firefox rulez). Do you want to paste without cleaning?",
UnknownToolbarItem	: "Ismeretlen eszk?ztár elem \"%1\"",
UnknownCommand		: "Ismeretlen parancs \"%1\"",
NotImplemented		: "A parancs nincs beágyazva",
UnknownToolbarSet	: "Eszk?zkészlet beállítás \"%1\" nem létezik",
NoActiveX			: "A b?ngész?d biztonsági beállításai limitálják a szerkeszt? lehet?ségeit. Engedélyezned kell ezt az opciót: \"Run ActiveX controls and plug-ins\". Kitapasztalhatod a hibákat és feljegyezheted a hiányzó képességeket.",

// Dialogs
DlgBtnOK			: "OK",
DlgBtnCancel		: "Mégsem",
DlgBtnClose			: "Bezárás",
DlgBtnBrowseServer	: "Szerver tallózása",
DlgAdvancedTag		: "Haladó",
DlgOpOther			: "Egyéb",
DlgInfoTab			: "Információ",
DlgAlertUrl			: "Illeszd be a hivatkozást",

// General Dialogs Labels
DlgGenNotSet		: "&lt;nincs beállítva&gt;",
DlgGenId			: "Azonosító",
DlgGenLangDir		: "Nyelv útmutató",
DlgGenLangDirLtr	: "Balról jobbra",
DlgGenLangDirRtl	: "Jobbról balra",
DlgGenLangCode		: "Nyelv kód",
DlgGenAccessKey		: "Elérési kulcs",
DlgGenName			: "Név",
DlgGenTabIndex		: "Tabulátor index",
DlgGenLongDescr		: "Hosszú URL",
DlgGenClass			: "Stíluskészlet",
DlgGenTitle			: "Advisory Title",
DlgGenContType		: "Advisory Content Type",
DlgGenLinkCharset	: "Hivatkozott kódlap készlet",
DlgGenStyle			: "Stílus",

// Image Dialog
DlgImgTitle			: "Kép tulajdonsága",
DlgImgInfoTab		: "Kép információ",
DlgImgBtnUpload		: "Küldés a szervernek",
DlgImgURL			: "URL",
DlgImgUpload		: "Felt?ltés",
DlgImgAlt			: "Buborék sz?veg",
DlgImgWidth			: "Szélesség",
DlgImgHeight		: "Magasság",
DlgImgLockRatio		: "Arány megtartása",
DlgBtnResetSize		: "Eredeti méret",
DlgImgBorder		: "Keret",
DlgImgHSpace		: "Vízsz. táv",
DlgImgVSpace		: "Függ. táv",
DlgImgAlign			: "Igazítás",
DlgImgAlignLeft		: "Bal",
DlgImgAlignAbsBottom: "Legaljára",
DlgImgAlignAbsMiddle: "K?zepére",
DlgImgAlignBaseline	: "Baseline",
DlgImgAlignBottom	: "Aljára",
DlgImgAlignMiddle	: "K?zépre",
DlgImgAlignRight	: "Jobbra",
DlgImgAlignTextTop	: "Sz?veg tetjére",
DlgImgAlignTop		: "Tetejére",
DlgImgPreview		: "El?nézet",
DlgImgAlertUrl		: "T?ltse ki a kép URL-ét",
DlgImgLinkTab		: "Hivatkozás",

// Flash Dialog
DlgFlashTitle		: "Flash tulajdonsága",
DlgFlashChkPlay		: "Automata lejátszás",
DlgFlashChkLoop		: "Folyamatosan",
DlgFlashChkMenu		: "Flash menü engedélyezése",
DlgFlashScale		: "Méretezés",
DlgFlashScaleAll	: "Mindent mutat",
DlgFlashScaleNoBorder	: "Keret nélkül",
DlgFlashScaleFit	: "Teljes kit?ltés",

// Link Dialog
DlgLnkWindowTitle	: "Hivatkozás",
DlgLnkInfoTab		: "Hivatkozás információ",
DlgLnkTargetTab		: "Cél",

DlgLnkType			: "Hivatkozás tipusa",
DlgLnkTypeURL		: "URL",
DlgLnkTypeAnchor	: "Horgony az oldalon",
DlgLnkTypeEMail		: "E-Mail",
DlgLnkProto			: "Protokoll",
DlgLnkProtoOther	: "&lt;más&gt;",
DlgLnkURL			: "URL",
DlgLnkAnchorSel		: "Horgony választása",
DlgLnkAnchorByName	: "Horgony név szerint",
DlgLnkAnchorById	: "Azonosító szerint el?sorban ",
DlgLnkNoAnchors		: "&lt;Nincs horgony a dokumentumban&gt;",
DlgLnkEMail			: "E-Mail cím",
DlgLnkEMailSubject	: "üzenet tárgya",
DlgLnkEMailBody		: "üzenet",
DlgLnkUpload		: "Felt?ltés",
DlgLnkBtnUpload		: "Küldés a szerverhez",

DlgLnkTarget		: "Cél",
DlgLnkTargetFrame	: "&lt;keret&gt;",
DlgLnkTargetPopup	: "&lt;felugró ablak&gt;",
DlgLnkTargetBlank	: "új ablak (_blank)",
DlgLnkTargetParent	: "Szül? ablak (_parent)",
DlgLnkTargetSelf	: "Azonos ablak (_self)",
DlgLnkTargetTop		: "Legfels? ablak (_top)",
DlgLnkTargetFrameName	: "Cél frame neve",
DlgLnkPopWinName	: "Felugró ablak neve",
DlgLnkPopWinFeat	: "Felugró ablak jellemz?i",
DlgLnkPopResize		: "Méretezhet?",
DlgLnkPopLocation	: "Location Bar",
DlgLnkPopMenu		: "Menü sor",
DlgLnkPopScroll		: "G?rdít?sáv",
DlgLnkPopStatus		: "állapotsor",
DlgLnkPopToolbar	: "Eszk?ztár",
DlgLnkPopFullScrn	: "Teljes képerny? (IE)",
DlgLnkPopDependent	: "Netscape sajátosság",
DlgLnkPopWidth		: "Szélesség",
DlgLnkPopHeight		: "Magasság",
DlgLnkPopLeft		: "Bal pozíció",
DlgLnkPopTop		: "Fels? pozíció",

DlnLnkMsgNoUrl		: "Adja meg a hivatkozás URL-ét",
DlnLnkMsgNoEMail	: "Adja meg az e-mail címet",
DlnLnkMsgNoAnchor	: "Válasszon egy horgonyt",

// Color Dialog
DlgColorTitle		: "Szinválasztás",
DlgColorBtnClear	: "T?rlés",
DlgColorHighlight	: "Világos rész",
DlgColorSelected	: "Választott",

// Smiley Dialog
DlgSmileyTitle		: "Hangulatjel beszúrása",

// Special Character Dialog
DlgSpecialCharTitle	: "Speciális karakter választása",

// Table Dialog
DlgTableTitle		: "Táblázat tulajdonságai",
DlgTableRows		: "Sorok",
DlgTableColumns		: "Oszlopok",
DlgTableBorder		: "Szegélyméret",
DlgTableAlign		: "Igazítás",
DlgTableAlignNotSet	: "<Nincs beállítva>",
DlgTableAlignLeft	: "Bal",
DlgTableAlignCenter	: "K?zép",
DlgTableAlignRight	: "Jobb",
DlgTableWidth		: "Szélesség",
DlgTableWidthPx		: "képpontok",
DlgTableWidthPc		: "százalék",
DlgTableHeight		: "Magasság",
DlgTableCellSpace	: "Cell spacing",
DlgTableCellPad		: "Cell padding",
DlgTableCaption		: "Felirat",

// Table Cell Dialog
DlgCellTitle		: "Cella tulajdonságai",
DlgCellWidth		: "Szélesség",
DlgCellWidthPx		: "képpontok",
DlgCellWidthPc		: "százalék",
DlgCellHeight		: "Height",
DlgCellWordWrap		: "Sort?rés",
DlgCellWordWrapNotSet	: "&lt;Nincs beállítva&gt;",
DlgCellWordWrapYes	: "Igen",
DlgCellWordWrapNo	: "Nem",
DlgCellHorAlign		: "Vízszintes igazítás",
DlgCellHorAlignNotSet	: "&lt;Nincs beállítva&gt;",
DlgCellHorAlignLeft	: "Bal",
DlgCellHorAlignCenter	: "K?zép",
DlgCellHorAlignRight: "Jobb",
DlgCellVerAlign		: "Függ?leges igazítás",
DlgCellVerAlignNotSet	: "&lt;Nincs beállítva&gt;",
DlgCellVerAlignTop	: "Tetejére",
DlgCellVerAlignMiddle	: "K?zépre",
DlgCellVerAlignBottom	: "Aljára",
DlgCellVerAlignBaseline	: "Egyvonalba",
DlgCellRowSpan		: "Sorok egyesítése",
DlgCellCollSpan		: "Oszlopok egyesítése",
DlgCellBackColor	: "Háttérszín",
DlgCellBorderColor	: "Szegélyszín",
DlgCellBtnSelect	: "Kiválasztás...",

// Find Dialog
DlgFindTitle		: "Keresés",
DlgFindFindBtn		: "Keresés",
DlgFindNotFoundMsg	: "A keresett sz?veg nem található.",

// Replace Dialog
DlgReplaceTitle			: "Csere",
DlgReplaceFindLbl		: "Keresend?:",
DlgReplaceReplaceLbl	: "Cserélend?:",
DlgReplaceCaseChk		: "Találatok",
DlgReplaceReplaceBtn	: "Csere",
DlgReplaceReplAllBtn	: "?sszes cseréje",
DlgReplaceWordChk		: "Egész dokumentumban",

// Paste Operations / Dialog
PasteErrorPaste	: "A b?ngész? biztonsági beállításai nem engedélyezik a szerkeszt?nek, hogy végrehatjsa a beillesztés m?veletet.Használja az alábbi billenty?zetkombinációt (Ctrl+V).",
PasteErrorCut	: "A b?ngész? biztonsági beállításai nem engedélyezik a szerkeszt?nek, hogy végrehatjsa a kivágás m?veletet.Használja az alábbi billenty?zetkombinációt (Ctrl+X).",
PasteErrorCopy	: "A b?ngész? biztonsági beállításai nem engedélyezik a szerkeszt?nek, hogy végrehatjsa a másolás m?veletet.Használja az alábbi billenty?zetkombinációt (Ctrl+X).",

PasteAsText		: "Beillesztés formázatlan sz?vegként",
PasteFromWord	: "Beillesztés Wordb?l",

DlgPasteMsg2	: "Másold be az alábbi mez?be a k?vetkez? billenty?k használatával (<STRONG>Ctrl+V</STRONG>) és nyomj <STRONG>OK</STRONG>.",
DlgPasteIgnoreFont		: "Bet? formázások megszüntetése",
DlgPasteRemoveStyles	: "Stíluslapok eltávolítása",
DlgPasteCleanBox		: "Mez? tartalmának t?rlése",


// Color Picker
ColorAutomatic	: "Automatikus",
ColorMoreColors	: "T?bb szín...",

// Document Properties
DocProps		: "Dokumentum tulajdonsága",

// Anchor Dialog
DlgAnchorTitle		: "Horgony tulajdonsága",
DlgAnchorName		: "Horgony neve",
DlgAnchorErrorName	: "Kérem adja meg a horgony nevét",

// Speller Pages Dialog
DlgSpellNotInDic		: "Nincs a k?nyvtárban",
DlgSpellChangeTo		: "átváltás",
DlgSpellBtnIgnore		: "Kihagyja",
DlgSpellBtnIgnoreAll	: "?sszeset kihagyja",
DlgSpellBtnReplace		: "Csere",
DlgSpellBtnReplaceAll	: "?sszes cseréje",
DlgSpellBtnUndo			: "Visszavonás",
DlgSpellNoSuggestions	: "Nincs feltevés",
DlgSpellProgress		: "Helyesírásellen?rzés folyamatban...",
DlgSpellNoMispell		: "Helyesírásellen?rzés kész: Nem találtam hibát",
DlgSpellNoChanges		: "Helyesírásellen?rzés kész: Nincs változtatott szó",
DlgSpellOneChange		: "Helyesírásellen?rzés kész: Egy szó cserélve",
DlgSpellManyChanges		: "Helyesírásellen?rzés kész: %1 szó cserélve",

IeSpellDownload			: "A helyesírásellen?rz? nincs telepítve. Szeretné let?lteni most?",

// Button Dialog
DlgButtonText	: "Sz?veg (érték)",
DlgButtonType	: "Típus",

// Checkbox and Radio Button Dialogs
DlgCheckboxName		: "Név",
DlgCheckboxValue	: "érték",
DlgCheckboxSelected	: "Választott",

// Form Dialog
DlgFormName		: "Név",
DlgFormAction	: "Esemény",
DlgFormMethod	: "Metódus",

// Select Field Dialog
DlgSelectName		: "Név",
DlgSelectValue		: "érték",
DlgSelectSize		: "Méret",
DlgSelectLines		: "sorok",
DlgSelectChkMulti	: "Engedi a t?bbsz?r?s kiválasztást",
DlgSelectOpAvail	: "Elérhet? opciók",
DlgSelectOpText		: "Sz?veg",
DlgSelectOpValue	: "érték",
DlgSelectBtnAdd		: "B?vít",
DlgSelectBtnModify	: "Módosít",
DlgSelectBtnUp		: "Fel",
DlgSelectBtnDown	: "Le",
DlgSelectBtnSetValue : "Beállítja a kiválasztott értéket",
DlgSelectBtnDelete	: "T?r?l",

// Textarea Dialog
DlgTextareaName	: "Név",
DlgTextareaCols	: "Oszlopok",
DlgTextareaRows	: "Sorok",

// Text Field Dialog
DlgTextName			: "Név",
DlgTextValue		: "érték",
DlgTextCharWidth	: "Karakter szélesség",
DlgTextMaxChars		: "Maximum karakterek",
DlgTextType			: "Típus",
DlgTextTypeText		: "Sz?veg",
DlgTextTypePass		: "Jelszó",

// Hidden Field Dialog
DlgHiddenName	: "Név",
DlgHiddenValue	: "érték",

// Bulleted List Dialog
BulletedListProp	: "Felsorolás tulajdonságai",
NumberedListProp	: "Számozás tulajdonságai",
DlgLstType			: "Típus",
DlgLstTypeCircle	: "Ciklus",
DlgLstTypeDisc		: "Lemez",
DlgLstTypeSquare	: "Négyzet",
DlgLstTypeNumbers	: "Számok (1, 2, 3)",
DlgLstTypeLCase		: "Kisbet?s (a, b, c)",
DlgLstTypeUCase		: "Nagybet?s (a, b, c)",
DlgLstTypeSRoman	: "Kis római számok (i, ii, iii)",
DlgLstTypeLRoman	: "Nagy római számok (I, II, III)",

// Document Properties Dialog
DlgDocGeneralTab	: "általános",
DlgDocBackTab		: "Háttér",
DlgDocColorsTab		: "Színek és margók",
DlgDocMetaTab		: "Meta adatok",

DlgDocPageTitle		: "Oldalcím",
DlgDocLangDir		: "Nyelv utasítás",
DlgDocLangDirLTR	: "Balról jobbra (LTR)",
DlgDocLangDirRTL	: "Jobbról balra (RTL)",
DlgDocLangCode		: "Nyelv kód",
DlgDocCharSet		: "Karakterkódolás",
DlgDocCharSetOther	: "Más karakterkódolás",

DlgDocDocType		: "Dokumentum címsor típus",
DlgDocDocTypeOther	: "Más dokumentum címsor típus",
DlgDocIncXHTML		: "XHTML elemeket tartalmaz",
DlgDocBgColor		: "Háttérszín",
DlgDocBgImage		: "Háttérkép cím",
DlgDocBgNoScroll	: "Nem g?rdíthet? háttér",
DlgDocCText			: "Sz?veg",
DlgDocCLink			: "Cím",
DlgDocCVisited		: "Látogatott cím",
DlgDocCActive		: "Aktív cím",
DlgDocMargins		: "Oldal margók",
DlgDocMaTop			: "Fels?",
DlgDocMaLeft		: "Bal",
DlgDocMaRight		: "Jobb",
DlgDocMaBottom		: "Felül",
DlgDocMeIndex		: "Dokumentum keres?szavak (vessz?vel elválasztva)",
DlgDocMeDescr		: "Dokumentum leírás",
DlgDocMeAuthor		: "Szerz?",
DlgDocMeCopy		: "Szerz?i jog",
DlgDocPreview		: "El?nézet",

// Templates Dialog
Templates			: "Sablonok",
DlgTemplatesTitle	: "Elérhet? sablonok",
DlgTemplatesSelMsg	: "Válaszd ki melyik sablon nyíljon meg a szerkeszt?ben<br>(a jelenlegi tartalom elveszik):",
DlgTemplatesLoading	: "Sablon lista bet?ltése. Kis türelmet...",
DlgTemplatesNoTpl	: "(Nincs sablon megadva)",

// About Dialog
DlgAboutAboutTab	: "About",
DlgAboutBrowserInfoTab	: "B?ngész? információ",
DlgAboutVersion		: "verzió",
DlgAboutLicense		: "GNU Lesser General Public License szabadalom alá tartozik",
DlgAboutInfo		: "További információkért menjen"
}