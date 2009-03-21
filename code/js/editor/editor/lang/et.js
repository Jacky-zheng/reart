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
 * File Name: et.js
 * 	Estonian language file.
 * 
 * File Authors:
 * 		Kristjan Kivikangur (kristjan@ttrk.ee)
 */

var FCKLang =
{
// Language direction : "ltr" (left to right) or "rtl" (right to left).
Dir					: "ltr",

ToolbarCollapse		: "Voldi t??riistariba",
ToolbarExpand		: "Laienda t??riistariba",

// Toolbar Items and Context Menu
Save				: "Salvesta",
NewPage				: "Uus leht",
Preview				: "Eelvaade",
Cut					: "L?ika",
Copy				: "Kopeeri",
Paste				: "Kleebi",
PasteText			: "Kleebi tavalise tekstina",
PasteWord			: "Kleebi Wordist",
Print				: "Prindi",
SelectAll			: "Vali k?ik",
RemoveFormat		: "Eemalda vorming",
InsertLinkLbl		: "Link",
InsertLink			: "Sisesta/Muuda link",
RemoveLink			: "Eemalda link",
Anchor				: "Insert/Edit Anchor",	//MISSING
InsertImageLbl		: "Pilt",
InsertImage			: "Sisesta/Muuda pilt",
InsertFlashLbl		: "Flash",	//MISSING
InsertFlash			: "Insert/Edit Flash",	//MISSING
InsertTableLbl		: "Tabel",
InsertTable			: "Sisesta/Muuda tabel",
InsertLineLbl		: "Joon",
InsertLine			: "Sisesta horisontaaljoon",
InsertSpecialCharLbl: "Erim?rgid",
InsertSpecialChar	: "Sisesta erim?rk",
InsertSmileyLbl		: "Smiley",
InsertSmiley		: "Sisesta Smiley",
About				: "FCKeditor kohta",
Bold				: "Paks",
Italic				: "Kursiiv",
Underline			: "Allajoonitud",
StrikeThrough		: "L?bijoonitud",
Subscript			: "Allindeks",
Superscript			: "ülaindeks",
LeftJustify			: "Vasakjoondus",
CenterJustify		: "Keskjoondus",
RightJustify		: "Paremjoondus",
BlockJustify		: "R??pjoondus",
DecreaseIndent		: "V?henda taanet",
IncreaseIndent		: "Suurenda taanet",
Undo				: "V?ta tagasi",
Redo				: "Tee uuesti",
NumberedListLbl		: "Nummerdatud loetelu",
NumberedList		: "Sisesta/Eemalda nummerdatud loetelu",
BulletedListLbl		: "T?pitud loetelu",
BulletedList		: "Sisesta/Eemalda t?pitud loetelu",
ShowTableBorders	: "N?ita tabeli jooni",
ShowDetails			: "N?ita üksikasju",
Style				: "Laad",
FontFormat			: "Vorming",
Font				: "Font",
FontSize			: "Suurus",
TextColor			: "Teksti v?rv",
BGColor				: "Tausta v?rv",
Source				: "L?htekood",
Find				: "Otsi",
Replace				: "Asenda",
SpellCheck			: "Check Spell",	//MISSING
UniversalKeyboard	: "Universal Keyboard",	//MISSING

Form			: "Form",	//MISSING
Checkbox		: "Checkbox",	//MISSING
RadioButton		: "Radio Button",	//MISSING
TextField		: "Text Field",	//MISSING
Textarea		: "Textarea",	//MISSING
HiddenField		: "Hidden Field",	//MISSING
Button			: "Button",	//MISSING
SelectionField	: "Selection Field",	//MISSING
ImageButton		: "Image Button",	//MISSING

// Context Menu
EditLink			: "Muuda linki",
InsertRow			: "Lisa rida",
DeleteRows			: "Eemalda ridu",
InsertColumn		: "Lisa veerg",
DeleteColumns		: "Eemalda veerud",
InsertCell			: "Lisa lahter",
DeleteCells			: "Eemalda lahtrid",
MergeCells			: "ühenda lahtrid",
SplitCell			: "Lahuta lahtrid",
CellProperties		: "Lahtri atribuudid",
TableProperties		: "Tabeli atribuudid",
ImageProperties		: "Pildi  atribuudid",
FlashProperties		: "Flash Properties",	//MISSING

AnchorProp			: "Anchor Properties",	//MISSING
ButtonProp			: "Button Properties",	//MISSING
CheckboxProp		: "Checkbox Properties",	//MISSING
HiddenFieldProp		: "Hidden Field Properties",	//MISSING
RadioButtonProp		: "Radio Button Properties",	//MISSING
ImageButtonProp		: "Image Button Properties",	//MISSING
TextFieldProp		: "Text Field Properties",	//MISSING
SelectionFieldProp	: "Selection Field Properties",	//MISSING
TextareaProp		: "Textarea Properties",	//MISSING
FormProp			: "Form Properties",	//MISSING

FontFormats			: "Tavaline;Vormindatud;Aadress;Pealkiri 1;Pealkiri 2;Pealkiri 3;Pealkiri 4;Pealkiri 5;Pealkiri 6",

// Alerts and Messages
ProcessingXHTML		: "T??tlen XHTML. Palun oota...",
Done				: "Tehtud",
PasteWordConfirm	: "Tekst, mida soovid lisada paistab p?rinevat Wordist. Kas soovid seda enne kleepimist puhastada?",
NotCompatiblePaste	: "See k?sk on saadaval ainult Internet Explorer versioon 5.5 v?i rohkem puhul. Kas soovid kleepida ilma puhastamata?",
UnknownToolbarItem	: "Tundmatu t??riistariba üksus \"%1\"",
UnknownCommand		: "Tundmatu k?sunimi \"%1\"",
NotImplemented		: "K?sku ei t?idetud",
UnknownToolbarSet	: "T??riistariba \"%1\" ei eksisteeri",
NoActiveX			: "You browser's security settings could limit some features of the editor. You must enable the option \"Run ActiveX controls and plug-ins\". You may experience errors and notice missing features.",	//MISSING

// Dialogs
DlgBtnOK			: "OK",
DlgBtnCancel		: "Loobu",
DlgBtnClose			: "Sule",
DlgBtnBrowseServer	: "Browse Server",	//MISSING
DlgAdvancedTag		: "T?psemalt",
DlgOpOther			: "&lt;Other&gt;",	//MISSING
DlgInfoTab			: "Info",	//MISSING
DlgAlertUrl			: "Please insert the URL",	//MISSING

// General Dialogs Labels
DlgGenNotSet		: "&lt;m??ramata&gt;",
DlgGenId			: "Id",
DlgGenLangDir		: "Keele suund",
DlgGenLangDirLtr	: "Vasakult paremale (LTR)",
DlgGenLangDirRtl	: "Paremalt vasakule (RTL)",
DlgGenLangCode		: "Keele kood",
DlgGenAccessKey		: "Juurdep??su v?ti",
DlgGenName			: "Nimi",
DlgGenTabIndex		: "Tab Index",
DlgGenLongDescr		: "Pikk kirjeldus URL",
DlgGenClass			: "Stiilistiku klassid",
DlgGenTitle			: "Advisory Title",
DlgGenContType		: "Advisory Content Type",
DlgGenLinkCharset	: "Linked Resource Charset",
DlgGenStyle			: "Laad",

// Image Dialog
DlgImgTitle			: "Pildi atribuudid",
DlgImgInfoTab		: "Pildi info",
DlgImgBtnUpload		: "Saada serverile",
DlgImgURL			: "URL",
DlgImgUpload		: "Lae üles",
DlgImgAlt			: "Alternatiivne tekst",
DlgImgWidth			: "Laius",
DlgImgHeight		: "K?rgus",
DlgImgLockRatio		: "Lukusta kuvasuhe",
DlgBtnResetSize		: "L?htesta suurus",
DlgImgBorder		: "Joon",
DlgImgHSpace		: "HSpace",
DlgImgVSpace		: "VSpace",
DlgImgAlign			: "Joondus",
DlgImgAlignLeft		: "Vasak",
DlgImgAlignAbsBottom: "Abs alla",
DlgImgAlignAbsMiddle: "Abs keskele",
DlgImgAlignBaseline	: "Baasjoonele",
DlgImgAlignBottom	: "Alla",
DlgImgAlignMiddle	: "Keskele",
DlgImgAlignRight	: "Paremale",
DlgImgAlignTextTop	: "Teksti üles",
DlgImgAlignTop		: "üles",
DlgImgPreview		: "Eelvaade",
DlgImgAlertUrl		: "Palun kirjuta pildi URL",
DlgImgLinkTab		: "Link",	//MISSING

// Flash Dialog
DlgFlashTitle		: "Flash Properties",	//MISSING
DlgFlashChkPlay		: "Auto Play",	//MISSING
DlgFlashChkLoop		: "Loop",	//MISSING
DlgFlashChkMenu		: "Enable Flash Menu",	//MISSING
DlgFlashScale		: "Scale",	//MISSING
DlgFlashScaleAll	: "Show all",	//MISSING
DlgFlashScaleNoBorder	: "No Border",	//MISSING
DlgFlashScaleFit	: "Exact Fit",	//MISSING

// Link Dialog
DlgLnkWindowTitle	: "Link",
DlgLnkInfoTab		: "Lingi info",
DlgLnkTargetTab		: "Sihtkoht",

DlgLnkType			: "Lingi tüüp",
DlgLnkTypeURL		: "URL",
DlgLnkTypeAnchor	: "Ankur sellel lehel",
DlgLnkTypeEMail		: "E-Post",
DlgLnkProto			: "Protokoll",
DlgLnkProtoOther	: "&lt;muu&gt;",
DlgLnkURL			: "URL",
DlgLnkAnchorSel		: "Vali ankur",
DlgLnkAnchorByName	: "Ankru nime j?rgi",
DlgLnkAnchorById	: "Elemendi Id j?rgi",
DlgLnkNoAnchors		: "&lt;Selles dokumendis ei ole ankruid&gt;",
DlgLnkEMail			: "E-Posti aadress",
DlgLnkEMailSubject	: "S?numi teema",
DlgLnkEMailBody		: "S?numi tekst",
DlgLnkUpload		: "Lae üles",
DlgLnkBtnUpload		: "Saada serverile",

DlgLnkTarget		: "Sihtkoht",
DlgLnkTargetFrame	: "&lt;raam&gt;",
DlgLnkTargetPopup	: "&lt;hüpikaken&gt;",
DlgLnkTargetBlank	: "Uus aken (_blank)",
DlgLnkTargetParent	: "Vanem aken (_parent)",
DlgLnkTargetSelf	: "Sama aken (_self)",
DlgLnkTargetTop		: "Pealmine aken (_top)",
DlgLnkTargetFrameName	: "Target Frame Name",	//MISSING
DlgLnkPopWinName	: "Hüpikakna nimi",
DlgLnkPopWinFeat	: "Hüpikakna omadused",
DlgLnkPopResize		: "Suurendatav",
DlgLnkPopLocation	: "Aadressiriba",
DlgLnkPopMenu		: "Menüüriba",
DlgLnkPopScroll		: "Kerimisribad",
DlgLnkPopStatus		: "Olekuriba",
DlgLnkPopToolbar	: "T??riistariba",
DlgLnkPopFullScrn	: "T?isekraan (IE)",
DlgLnkPopDependent	: "S?ltuv (Netscape)",
DlgLnkPopWidth		: "Laius",
DlgLnkPopHeight		: "K?rgus",
DlgLnkPopLeft		: "Vasak asukoht",
DlgLnkPopTop		: "ülemine asukoht",

DlnLnkMsgNoUrl		: "Palun kirjuta lingi URL",
DlnLnkMsgNoEMail	: "Palun kirjuta E-Posti aadress",
DlnLnkMsgNoAnchor	: "Palun vali ankur",

// Color Dialog
DlgColorTitle		: "Vali v?rv",
DlgColorBtnClear	: "Tühjenda",
DlgColorHighlight	: "M?rgi",
DlgColorSelected	: "Valitud",

// Smiley Dialog
DlgSmileyTitle		: "Sisesta Smiley",

// Special Character Dialog
DlgSpecialCharTitle	: "Vali erim?rk",

// Table Dialog
DlgTableTitle		: "Tabeli atribuudid",
DlgTableRows		: "Read",
DlgTableColumns		: "Veerud",
DlgTableBorder		: "Joone suurus",
DlgTableAlign		: "Joondus",
DlgTableAlignNotSet	: "<M??ramata>",
DlgTableAlignLeft	: "Vasak",
DlgTableAlignCenter	: "Kesk",
DlgTableAlignRight	: "Parem",
DlgTableWidth		: "Laius",
DlgTableWidthPx		: "pikslit",
DlgTableWidthPc		: "protsenti",
DlgTableHeight		: "K?rgus",
DlgTableCellSpace	: "Lahtri vahe",
DlgTableCellPad		: "Lahtri t?idis",
DlgTableCaption		: "Seletiitel",

// Table Cell Dialog
DlgCellTitle		: "Lahtri atribuudid",
DlgCellWidth		: "Laius",
DlgCellWidthPx		: "pikslit",
DlgCellWidthPc		: "protsenti",
DlgCellHeight		: "K?rgus",
DlgCellWordWrap		: "Murra ridu",
DlgCellWordWrapNotSet	: "<M??ramata>",
DlgCellWordWrapYes	: "Jah",
DlgCellWordWrapNo	: "Ei",
DlgCellHorAlign		: "Horisontaaljoondus",
DlgCellHorAlignNotSet	: "<M??ramata>",
DlgCellHorAlignLeft	: "Vasak",
DlgCellHorAlignCenter	: "Kesk",
DlgCellHorAlignRight: "Parem",
DlgCellVerAlign		: "Vertikaaljoondus",
DlgCellVerAlignNotSet	: "<M??ramata>",
DlgCellVerAlignTop	: "üles",
DlgCellVerAlignMiddle	: "Keskele",
DlgCellVerAlignBottom	: "Alla",
DlgCellVerAlignBaseline	: "Baasjoonele",
DlgCellRowSpan		: "Reaulatus",
DlgCellCollSpan		: "Veeruulatus",
DlgCellBackColor	: "Tausta v?rv",
DlgCellBorderColor	: "Joone v?rv",
DlgCellBtnSelect	: "Vali...",

// Find Dialog
DlgFindTitle		: "Otsi",
DlgFindFindBtn		: "Otsi",
DlgFindNotFoundMsg	: "Valitud teksti ei leitud.",

// Replace Dialog
DlgReplaceTitle			: "Asenda",
DlgReplaceFindLbl		: "Leia mida:",
DlgReplaceReplaceLbl	: "Asenda millega:",
DlgReplaceCaseChk		: "Erista suurt?hti",
DlgReplaceReplaceBtn	: "Asenda",
DlgReplaceReplAllBtn	: "Asenda k?ik",
DlgReplaceWordChk		: "Otsi terveid s?nu",

// Paste Operations / Dialog
PasteErrorPaste	: "Sinu brauseri turvaseaded ei luba redaktoril automaatselt kleepida. Palun kasutage selleks klaviatuuri (Ctrl+V).",
PasteErrorCut	: "Sinu brauseri turvaseaded ei luba redaktoril automaatselt l?igata. Palun kasutage selleks klaviatuuri (Ctrl+X).",
PasteErrorCopy	: "Sinu brauseri turvaseaded ei luba redaktoril automaatselt kopeerida. Palun kasutage selleks klaviatuuri (Ctrl+C).",

PasteAsText		: "Kleebi tavalise tekstina",
PasteFromWord	: "Kleebi Wordist",

DlgPasteMsg2	: "Please paste inside the following box using the keyboard (<STRONG>Ctrl+V</STRONG>) and hit <STRONG>OK</STRONG>.",	//MISSING
DlgPasteIgnoreFont		: "Ignore Font Face definitions",	//MISSING
DlgPasteRemoveStyles	: "Remove Styles definitions",	//MISSING
DlgPasteCleanBox		: "Clean Up Box",	//MISSING


// Color Picker
ColorAutomatic	: "Automaatne",
ColorMoreColors	: "Rohkem v?rve...",

// Document Properties
DocProps		: "Document Properties",	//MISSING

// Anchor Dialog
DlgAnchorTitle		: "Anchor Properties",	//MISSING
DlgAnchorName		: "Anchor Name",	//MISSING
DlgAnchorErrorName	: "Please type the anchor name",	//MISSING

// Speller Pages Dialog
DlgSpellNotInDic		: "Not in dictionary",	//MISSING
DlgSpellChangeTo		: "Change to",	//MISSING
DlgSpellBtnIgnore		: "Ignore",	//MISSING
DlgSpellBtnIgnoreAll	: "Ignore All",	//MISSING
DlgSpellBtnReplace		: "Replace",	//MISSING
DlgSpellBtnReplaceAll	: "Replace All",	//MISSING
DlgSpellBtnUndo			: "Undo",	//MISSING
DlgSpellNoSuggestions	: "- No suggestions -",	//MISSING
DlgSpellProgress		: "Spell check in progress...",	//MISSING
DlgSpellNoMispell		: "Spell check complete: No misspellings found",	//MISSING
DlgSpellNoChanges		: "Spell check complete: No words changed",	//MISSING
DlgSpellOneChange		: "Spell check complete: One word changed",	//MISSING
DlgSpellManyChanges		: "Spell check complete: %1 words changed",	//MISSING

IeSpellDownload			: "Spell checker not installed. Do you want to download it now?",	//MISSING

// Button Dialog
DlgButtonText	: "Text (Value)",	//MISSING
DlgButtonType	: "Type",	//MISSING

// Checkbox and Radio Button Dialogs
DlgCheckboxName		: "Name",	//MISSING
DlgCheckboxValue	: "Value",	//MISSING
DlgCheckboxSelected	: "Selected",	//MISSING

// Form Dialog
DlgFormName		: "Name",	//MISSING
DlgFormAction	: "Action",	//MISSING
DlgFormMethod	: "Method",	//MISSING

// Select Field Dialog
DlgSelectName		: "Name",	//MISSING
DlgSelectValue		: "Value",	//MISSING
DlgSelectSize		: "Size",	//MISSING
DlgSelectLines		: "lines",	//MISSING
DlgSelectChkMulti	: "Allow multiple selections",	//MISSING
DlgSelectOpAvail	: "Available Options",	//MISSING
DlgSelectOpText		: "Text",	//MISSING
DlgSelectOpValue	: "Value",	//MISSING
DlgSelectBtnAdd		: "Add",	//MISSING
DlgSelectBtnModify	: "Modify",	//MISSING
DlgSelectBtnUp		: "Up",	//MISSING
DlgSelectBtnDown	: "Down",	//MISSING
DlgSelectBtnSetValue : "Set as selected value",	//MISSING
DlgSelectBtnDelete	: "Delete",	//MISSING

// Textarea Dialog
DlgTextareaName	: "Name",	//MISSING
DlgTextareaCols	: "Columns",	//MISSING
DlgTextareaRows	: "Rows",	//MISSING

// Text Field Dialog
DlgTextName			: "Name",	//MISSING
DlgTextValue		: "Value",	//MISSING
DlgTextCharWidth	: "Character Width",	//MISSING
DlgTextMaxChars		: "Maximum Characters",	//MISSING
DlgTextType			: "Type",	//MISSING
DlgTextTypeText		: "Text",	//MISSING
DlgTextTypePass		: "Password",	//MISSING

// Hidden Field Dialog
DlgHiddenName	: "Name",	//MISSING
DlgHiddenValue	: "Value",	//MISSING

// Bulleted List Dialog
BulletedListProp	: "Bulleted List Properties",	//MISSING
NumberedListProp	: "Numbered List Properties",	//MISSING
DlgLstType			: "Type",	//MISSING
DlgLstTypeCircle	: "Circle",	//MISSING
DlgLstTypeDisc		: "Disc",	//MISSING
DlgLstTypeSquare	: "Square",	//MISSING
DlgLstTypeNumbers	: "Numbers (1, 2, 3)",	//MISSING
DlgLstTypeLCase		: "Lowercase Letters (a, b, c)",	//MISSING
DlgLstTypeUCase		: "Uppercase Letters (A, B, C)",	//MISSING
DlgLstTypeSRoman	: "Small Roman Numerals (i, ii, iii)",	//MISSING
DlgLstTypeLRoman	: "Large Roman Numerals (I, II, III)",	//MISSING

// Document Properties Dialog
DlgDocGeneralTab	: "General",	//MISSING
DlgDocBackTab		: "Background",	//MISSING
DlgDocColorsTab		: "Colors and Margins",	//MISSING
DlgDocMetaTab		: "Meta Data",	//MISSING

DlgDocPageTitle		: "Page Title",	//MISSING
DlgDocLangDir		: "Language Direction",	//MISSING
DlgDocLangDirLTR	: "Left to Right (LTR)",	//MISSING
DlgDocLangDirRTL	: "Right to Left (RTL)",	//MISSING
DlgDocLangCode		: "Language Code",	//MISSING
DlgDocCharSet		: "Character Set Encoding",	//MISSING
DlgDocCharSetOther	: "Other Character Set Encoding",	//MISSING

DlgDocDocType		: "Document Type Heading",	//MISSING
DlgDocDocTypeOther	: "Other Document Type Heading",	//MISSING
DlgDocIncXHTML		: "Include XHTML Declarations",	//MISSING
DlgDocBgColor		: "Background Color",	//MISSING
DlgDocBgImage		: "Background Image URL",	//MISSING
DlgDocBgNoScroll	: "Nonscrolling Background",	//MISSING
DlgDocCText			: "Text",	//MISSING
DlgDocCLink			: "Link",	//MISSING
DlgDocCVisited		: "Visited Link",	//MISSING
DlgDocCActive		: "Active Link",	//MISSING
DlgDocMargins		: "Page Margins",	//MISSING
DlgDocMaTop			: "Top",	//MISSING
DlgDocMaLeft		: "Left",	//MISSING
DlgDocMaRight		: "Right",	//MISSING
DlgDocMaBottom		: "Bottom",	//MISSING
DlgDocMeIndex		: "Document Indexing Keywords (comma separated)",	//MISSING
DlgDocMeDescr		: "Document Description",	//MISSING
DlgDocMeAuthor		: "Author",	//MISSING
DlgDocMeCopy		: "Copyright",	//MISSING
DlgDocPreview		: "Preview",	//MISSING

// Templates Dialog
Templates			: "Templates",	//MISSING
DlgTemplatesTitle	: "Content Templates",	//MISSING
DlgTemplatesSelMsg	: "Please select the template to open in the editor<br>(the actual contents will be lost):",	//MISSING
DlgTemplatesLoading	: "Loading templates list. Please wait...",	//MISSING
DlgTemplatesNoTpl	: "(No templates defined)",	//MISSING

// About Dialog
DlgAboutAboutTab	: "About",	//MISSING
DlgAboutBrowserInfoTab	: "Browser Info",	//MISSING
DlgAboutVersion		: "versioon",
DlgAboutLicense		: "Litsenseeritud GNU Lesser General Public License litsentsiga",
DlgAboutInfo		: "T?psema info saamiseks mine"
}