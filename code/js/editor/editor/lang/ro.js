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
 * File Name: ro.js
 * 	Romanian language file.
 * 
 * File Authors:
 * 		Adrian Nicoara
 * 		Ionut Traian Popa
 */

var FCKLang =
{
// Language direction : "ltr" (left to right) or "rtl" (right to left).
Dir					: "ltr",

ToolbarCollapse		: "Ascunde bara cu op?iuni",
ToolbarExpand		: "Expandeaz? bara cu op?iuni",

// Toolbar Items and Context Menu
Save				: "Salveaz?",
NewPage				: "Pagin? nou?",
Preview				: "Previzualizare",
Cut					: "Taie",
Copy				: "Copiaz?",
Paste				: "Adaug?",
PasteText			: "Adaug? ca text simplu",
PasteWord			: "Adaug? din Word",
Print				: "Printeaz?",
SelectAll			: "Selecteaz? tot",
RemoveFormat		: "?nl?tur? formatarea",
InsertLinkLbl		: "Link (Leg?tur? web)",
InsertLink			: "Insereaz?/Editeaz? link (leg?tur? web)",
RemoveLink			: "?nl?tur? link (leg?tur? web)",
Anchor				: "Insereaz?/Editeaz? ancor?",
InsertImageLbl		: "Imagine",
InsertImage			: "Insereaz?/Editeaz? imagine",
InsertFlashLbl		: "Flash",
InsertFlash			: "Insereaz?/Editeaz? flash",
InsertTableLbl		: "Tabel",
InsertTable			: "Insereaz?/Editeaz? tabel",
InsertLineLbl		: "Linie",
InsertLine			: "Insereaz? linie orizont?",
InsertSpecialCharLbl: "Caracter special",
InsertSpecialChar	: "Insereaz? caracter special",
InsertSmileyLbl		: "Figur? expresiv? (Emoticon)",
InsertSmiley		: "Insereaz? Figur? expresiv? (Emoticon)",
About				: "Despre FCKeditor",
Bold				: "?ngro?at (bold)",
Italic				: "?nclinat (italic)",
Underline			: "Subliniat (underline)",
StrikeThrough		: "T?iat (strike through)",
Subscript			: "Indice (subscript)",
Superscript			: "Putere (superscript)",
LeftJustify			: "Aliniere la stanga",
CenterJustify		: "Aliniere central?",
RightJustify		: "Aliniere la dreapta",
BlockJustify		: "Aliniere ?n bloc (Block Justify)",
DecreaseIndent		: "Scade indentarea",
IncreaseIndent		: "Cre?te indentarea",
Undo				: "Starea anterioar? (undo)",
Redo				: "Starea ulterioar? (redo)",
NumberedListLbl		: "List? numerotat?",
NumberedList		: "Insereaz?/?terge list? numerotat?",
BulletedListLbl		: "List? cu puncte",
BulletedList		: "Insereaz?/?terge list? cu puncte",
ShowTableBorders	: "Arat? marginile tabelului",
ShowDetails			: "Arat? detalii",
Style				: "Stil",
FontFormat			: "Formatare",
Font				: "Font",
FontSize			: "M?rime",
TextColor			: "Culoarea textului",
BGColor				: "Coloarea fundalului",
Source				: "Sursa",
Find				: "G?se?te",
Replace				: "?nlocuie?te",
SpellCheck			: "Verific? text",
UniversalKeyboard	: "Tastatur? universal?",

Form			: "Formular (Form)",
Checkbox		: "Bif? (Checkbox)",
RadioButton		: "Buton radio (RadioButton)",
TextField		: "Camp text (TextField)",
Textarea		: "Suprafa?? text (Textarea)",
HiddenField		: "Camp ascuns (HiddenField)",
Button			: "Buton",
SelectionField	: "Camp selec?ie (SelectionField)",
ImageButton		: "Buton imagine (ImageButton)",

// Context Menu
EditLink			: "Editeaz? Link",
InsertRow			: "Insereaz? Row",
DeleteRows			: "?terge Rows",
InsertColumn		: "Insereaz? Column",
DeleteColumns		: "?terge Columns",
InsertCell			: "Insereaz? Cell",
DeleteCells			: "?terge celule",
MergeCells			: "Une?te celule",
SplitCell			: "?mparte celul?",
CellProperties		: "Propriet??ile celulei",
TableProperties		: "Propriet??ile tabelului",
ImageProperties		: "Propriet??ile imaginii",
FlashProperties		: "Propriet??ile flash-ului",

AnchorProp			: "Propriet??i ancor?",
ButtonProp			: "Propriet??i buton",
CheckboxProp		: "Propriet??i bif? (Checkbox)",
HiddenFieldProp		: "Propriet??i camp ascuns (Hidden Field)",
RadioButtonProp		: "Propriet??i buton radio (Radio Button)",
ImageButtonProp		: "Propriet??i buton imagine (Image Button)",
TextFieldProp		: "Propriet??i camp text (Text Field)",
SelectionFieldProp	: "Propriet??i camp selec?ie (Selection Field)",
TextareaProp		: "Propriet??i suprafa?? text (Textarea)",
FormProp			: "Propriet??i formular (Form)",

FontFormats			: "Normal;Formatat;Adresa;Titlu 1;Titlu 2;Titlu 3;Titlu 4;Titlu 5;Titlu 6;Paragraf (DIV)",

// Alerts and Messages
ProcessingXHTML		: "Proces?m XHTML. V? rug?m a?tepta?i...",
Done				: "Am terminat",
PasteWordConfirm	: "Textul pe care dori?i s?-l ad?uga?i pare a fi formatat pentru Word. Dori?i s?-l cur??a?i de aceast? formatare ?nainte de a-l ad?uga?",
NotCompatiblePaste	: "Aceast? facilitate e disponibil? doar pentru Microsoft Internet Explorer, versiunea 5.5 sau ulterioar?. Vre?i s?-l ad?uga?i f?r? a-i fi ?nl?turat formatarea?",
UnknownToolbarItem	: "Obiectul \"%1\" din bara cu op?iuni necunoscut",
UnknownCommand		: "Comanda \"%1\" necunoscut?",
NotImplemented		: "Comand? neimplementat?",
UnknownToolbarSet	: "Grupul din bara cu op?iuni \"%1\" nu exist?",
NoActiveX			: "You browser's security settings could limit some features of the editor. You must enable the option \"Run ActiveX controls and plug-ins\". You may experience errors and notice missing features.",	//MISSING

// Dialogs
DlgBtnOK			: "Bine",
DlgBtnCancel		: "Anulare",
DlgBtnClose			: "?nchidere",
DlgBtnBrowseServer	: "R?sfoie?te server",
DlgAdvancedTag		: "Avansat",
DlgOpOther			: "&lt;Altul&gt;",
DlgInfoTab			: "Informa?ii",
DlgAlertUrl			: "V? rug?m s? scrie?i URL-ul",

// General Dialogs Labels
DlgGenNotSet		: "&lt;nesetat&gt;",
DlgGenId			: "Id",
DlgGenLangDir		: "Direc?ia cuvintelor",
DlgGenLangDirLtr	: "stanga-dreapta (LTR)",
DlgGenLangDirRtl	: "dreapta-stanga (RTL)",
DlgGenLangCode		: "Codul limbii",
DlgGenAccessKey		: "Tasta de acces",
DlgGenName			: "Nume",
DlgGenTabIndex		: "Indexul tabului",
DlgGenLongDescr		: "Descrierea lung? URL",
DlgGenClass			: "Clasele cu stilul paginii (CSS)",
DlgGenTitle			: "Titlul consultativ",
DlgGenContType		: "Tipul consultativ al titlului",
DlgGenLinkCharset	: "Setul de caractere al resursei legate",
DlgGenStyle			: "Stil",

// Image Dialog
DlgImgTitle			: "Propriet??ile imaginii",
DlgImgInfoTab		: "Informa?ii despre imagine",
DlgImgBtnUpload		: "Trimite la server",
DlgImgURL			: "URL",
DlgImgUpload		: "?ncarc?",
DlgImgAlt			: "Text alternativ",
DlgImgWidth			: "L??ime",
DlgImgHeight		: "?n?l?ime",
DlgImgLockRatio		: "P?streaz? propor?iile",
DlgBtnResetSize		: "Reseteaz? m?rimea",
DlgImgBorder		: "Margine",
DlgImgHSpace		: "HSpace",
DlgImgVSpace		: "VSpace",
DlgImgAlign			: "Aliniere",
DlgImgAlignLeft		: "Stanga",
DlgImgAlignAbsBottom: "Jos absolut (Abs Bottom)",
DlgImgAlignAbsMiddle: "Mijloc absolut (Abs Middle)",
DlgImgAlignBaseline	: "Linia de jos (Baseline)",
DlgImgAlignBottom	: "Jos",
DlgImgAlignMiddle	: "Mijloc",
DlgImgAlignRight	: "Dreapta",
DlgImgAlignTextTop	: "Text sus",
DlgImgAlignTop		: "Sus",
DlgImgPreview		: "Previzualizare",
DlgImgAlertUrl		: "V? rug?m s? scrie?i URL-ul imaginii",
DlgImgLinkTab		: "Link (Leg?tur? web)",

// Flash Dialog
DlgFlashTitle		: "Propriet??ile flash-ului",
DlgFlashChkPlay		: "Ruleaz? automat",
DlgFlashChkLoop		: "Repet? (Loop)",
DlgFlashChkMenu		: "Activeaz? meniul flash",
DlgFlashScale		: "Scal?",
DlgFlashScaleAll	: "Arat? tot",
DlgFlashScaleNoBorder	: "F?r? margini (No border)",
DlgFlashScaleFit	: "Potrive?te",

// Link Dialog
DlgLnkWindowTitle	: "Link (Leg?tur? web)",
DlgLnkInfoTab		: "Informa?ii despre link (Leg?tur? web)",
DlgLnkTargetTab		: "?int? (Target)",

DlgLnkType			: "Tipul link-ului (al leg?turii web)",
DlgLnkTypeURL		: "URL",
DlgLnkTypeAnchor	: "Ancor? ?n aceast? pagin?",
DlgLnkTypeEMail		: "E-Mail",
DlgLnkProto			: "Protocol",
DlgLnkProtoOther	: "&lt;altul&gt;",
DlgLnkURL			: "URL",
DlgLnkAnchorSel		: "Selecta?i o ancor?",
DlgLnkAnchorByName	: "dup? numele ancorei",
DlgLnkAnchorById	: "dup? Id-ul elementului",
DlgLnkNoAnchors		: "&lt;Nici o ancor? disponibil? ?n document&gt;",
DlgLnkEMail			: "Adres? de e-mail",
DlgLnkEMailSubject	: "Subiectul mesajului",
DlgLnkEMailBody		: "Con?inutul mesajului",
DlgLnkUpload		: "?ncarc?",
DlgLnkBtnUpload		: "Trimite la server",

DlgLnkTarget		: "?int? (Target)",
DlgLnkTargetFrame	: "&lt;frame&gt;",
DlgLnkTargetPopup	: "&lt;fereastra popup&gt;",
DlgLnkTargetBlank	: "Fereastr? nou? (_blank)",
DlgLnkTargetParent	: "Fereastra p?rinte (_parent)",
DlgLnkTargetSelf	: "Aceea?i fereastr? (_self)",
DlgLnkTargetTop		: "Fereastra din topul ierarhiei (_top)",
DlgLnkTargetFrameName	: "Numele frame-ului ?int?",
DlgLnkPopWinName	: "Numele ferestrei popup",
DlgLnkPopWinFeat	: "Propriet??ile ferestrei popup",
DlgLnkPopResize		: "Scalabil?",
DlgLnkPopLocation	: "Bara de loca?ie",
DlgLnkPopMenu		: "Bara de meniu",
DlgLnkPopScroll		: "Scroll Bars",
DlgLnkPopStatus		: "Bara de status",
DlgLnkPopToolbar	: "Bara de op?iuni",
DlgLnkPopFullScrn	: "Tot ecranul (Full Screen)(IE)",
DlgLnkPopDependent	: "Dependent (Netscape)",
DlgLnkPopWidth		: "L??ime",
DlgLnkPopHeight		: "?n?l?ime",
DlgLnkPopLeft		: "Pozi?ia la stanga",
DlgLnkPopTop		: "Pozi?ia la dreapta",

DlnLnkMsgNoUrl		: "V? rug?m s? scrie?i URL-ul",
DlnLnkMsgNoEMail	: "V? rug?m s? scrie?i adresa de e-mail",
DlnLnkMsgNoAnchor	: "V? rug?m s? selecta?i o ancor?",

// Color Dialog
DlgColorTitle		: "Selecteaz? culoare",
DlgColorBtnClear	: "Cur???",
DlgColorHighlight	: "Subliniaz? (Highlight)",
DlgColorSelected	: "Selectat",

// Smiley Dialog
DlgSmileyTitle		: "Insereaz? o figur? expresiv? (Emoticon)",

// Special Character Dialog
DlgSpecialCharTitle	: "Selecteaz? caracter special",

// Table Dialog
DlgTableTitle		: "Propriet??ile tabelului",
DlgTableRows		: "Linii",
DlgTableColumns		: "Coloane",
DlgTableBorder		: "M?rimea marginii",
DlgTableAlign		: "Aliniament",
DlgTableAlignNotSet	: "<Nesetat>",
DlgTableAlignLeft	: "Stanga",
DlgTableAlignCenter	: "Centru",
DlgTableAlignRight	: "Dreapta",
DlgTableWidth		: "L??ime",
DlgTableWidthPx		: "pixeli",
DlgTableWidthPc		: "procente",
DlgTableHeight		: "?n?l?ime",
DlgTableCellSpace	: "Spa?iu ?ntre celule",
DlgTableCellPad		: "Spa?iu ?n cadrul celulei",
DlgTableCaption		: "Titlu (Caption)",

// Table Cell Dialog
DlgCellTitle		: "Propriet??ile celulei",
DlgCellWidth		: "L??ime",
DlgCellWidthPx		: "pixeli",
DlgCellWidthPc		: "procente",
DlgCellHeight		: "?n?l?ime",
DlgCellWordWrap		: "Desparte cuvintele (Wrap)",
DlgCellWordWrapNotSet	: "&lt;Nesetat&gt;",
DlgCellWordWrapYes	: "Da",
DlgCellWordWrapNo	: "Nu",
DlgCellHorAlign		: "Aliniament orizontal",
DlgCellHorAlignNotSet	: "&lt;Nesetat&gt;",
DlgCellHorAlignLeft	: "Stanga",
DlgCellHorAlignCenter	: "Centru",
DlgCellHorAlignRight: "Dreapta",
DlgCellVerAlign		: "Aliniament vertical",
DlgCellVerAlignNotSet	: "&lt;Nesetat&gt;",
DlgCellVerAlignTop	: "Sus",
DlgCellVerAlignMiddle	: "Mijloc",
DlgCellVerAlignBottom	: "Jos",
DlgCellVerAlignBaseline	: "Linia de jos (Baseline)",
DlgCellRowSpan		: "Lungimea ?n linii (Span)",
DlgCellCollSpan		: "Lungimea ?n coloane (Span)",
DlgCellBackColor	: "Culoarea fundalului",
DlgCellBorderColor	: "Culoarea marginii",
DlgCellBtnSelect	: "Selecta?i...",

// Find Dialog
DlgFindTitle		: "G?se?te",
DlgFindFindBtn		: "G?se?te",
DlgFindNotFoundMsg	: "Textul specificat nu a fost g?sit.",

// Replace Dialog
DlgReplaceTitle			: "Replace",
DlgReplaceFindLbl		: "G?se?te:",
DlgReplaceReplaceLbl	: "?nlocuie?te cu:",
DlgReplaceCaseChk		: "Deosebe?te majuscule de minuscule (Match case)",
DlgReplaceReplaceBtn	: "?nlocuie?te",
DlgReplaceReplAllBtn	: "?nlocuie?te tot",
DlgReplaceWordChk		: "Doar cuvintele ?ntregi",

// Paste Operations / Dialog
PasteErrorPaste	: "Set?rile de securitate ale navigatorului (browser) pe care ?l folosi?i nu permit editorului s? execute automat opera?iunea de ad?ugare. V? rug?m folosi?i tastatura (Ctrl+V).",
PasteErrorCut	: "Set?rile de securitate ale navigatorului (browser) pe care ?l folosi?i nu permit editorului s? execute automat opera?iunea de t?iere. V? rug?m folosi?i tastatura (Ctrl+X).",
PasteErrorCopy	: "Set?rile de securitate ale navigatorului (browser) pe care ?l folosi?i nu permit editorului s? execute automat opera?iunea de copiere. V? rug?m folosi?i tastatura (Ctrl+C).",

PasteAsText		: "Adaug? ca text simplu (Plain Text)",
PasteFromWord	: "Adaug? din Word",

DlgPasteMsg2	: "V? rug?m ad?uga?i ?n c?su?a urm?toare folosind tastatura (<STRONG>Ctrl+V</STRONG>) ?i ap?sa?i <STRONG>OK</STRONG>.",
DlgPasteIgnoreFont		: "Ignor? defini?iile Font Face",
DlgPasteRemoveStyles	: "?terge defini?iile stilurilor",
DlgPasteCleanBox		: "?terge c?su?a",


// Color Picker
ColorAutomatic	: "Automatic",
ColorMoreColors	: "Mai multe culori...",

// Document Properties
DocProps		: "Propriet??ile documentului",

// Anchor Dialog
DlgAnchorTitle		: "Propriet??ile ancorei",
DlgAnchorName		: "Numele ancorei",
DlgAnchorErrorName	: "V? rug?m scrie?i numele ancorei",

// Speller Pages Dialog
DlgSpellNotInDic		: "Nu e ?n dic?ionar",
DlgSpellChangeTo		: "Schimb? ?n",
DlgSpellBtnIgnore		: "Ignor?",
DlgSpellBtnIgnoreAll	: "Ignor? toate",
DlgSpellBtnReplace		: "?nlocuie?te",
DlgSpellBtnReplaceAll	: "?nlocuie?te tot",
DlgSpellBtnUndo			: "Starea anterioar? (undo)",
DlgSpellNoSuggestions	: "- F?r? sugestii -",
DlgSpellProgress		: "Verificarea textului ?n desf??urare...",
DlgSpellNoMispell		: "Verificarea textului terminat?: Nici o gre?eal? g?sit?",
DlgSpellNoChanges		: "Verificarea textului terminat?: Nici un cuvant modificat",
DlgSpellOneChange		: "Verificarea textului terminat?: Un cuvant modificat",
DlgSpellManyChanges		: "Verificarea textului terminat?: 1% cuvinte modificate",

IeSpellDownload			: "Unealta pentru verificat textul (Spell checker) neinstalat?. Dori?i s? o desc?rca?i acum?",

// Button Dialog
DlgButtonText	: "Text (Valoare)",
DlgButtonType	: "Tip",

// Checkbox and Radio Button Dialogs
DlgCheckboxName		: "Nume",
DlgCheckboxValue	: "Valoare",
DlgCheckboxSelected	: "Selectat",

// Form Dialog
DlgFormName		: "Nume",
DlgFormAction	: "Ac?iune",
DlgFormMethod	: "Metod?",

// Select Field Dialog
DlgSelectName		: "Nume",
DlgSelectValue		: "Valoare",
DlgSelectSize		: "M?rime",
DlgSelectLines		: "linii",
DlgSelectChkMulti	: "Permite selec?ii multiple",
DlgSelectOpAvail	: "Op?iuni disponibile",
DlgSelectOpText		: "Text",
DlgSelectOpValue	: "Valoare",
DlgSelectBtnAdd		: "Adaug?",
DlgSelectBtnModify	: "Modific?",
DlgSelectBtnUp		: "Sus",
DlgSelectBtnDown	: "Jos",
DlgSelectBtnSetValue : "Seteaz? ca valoare selectat?",
DlgSelectBtnDelete	: "?terge",

// Textarea Dialog
DlgTextareaName	: "Nume",
DlgTextareaCols	: "Coloane",
DlgTextareaRows	: "Linii",

// Text Field Dialog
DlgTextName			: "Nume",
DlgTextValue		: "Valoare",
DlgTextCharWidth	: "L?rgimea caracterului",
DlgTextMaxChars		: "Caractere maxime",
DlgTextType			: "Tip",
DlgTextTypeText		: "Text",
DlgTextTypePass		: "Parol?",

// Hidden Field Dialog
DlgHiddenName	: "Nume",
DlgHiddenValue	: "Valoare",

// Bulleted List Dialog
BulletedListProp	: "Propriet??ile listei punctate (Bulleted List)",
NumberedListProp	: "Propriet??ile listei numerotate (Numbered List)",
DlgLstType			: "Tip",
DlgLstTypeCircle	: "Cerc",
DlgLstTypeDisc		: "Disc",	//MISSING
DlgLstTypeSquare	: "P?trat",
DlgLstTypeNumbers	: "Numere (1, 2, 3)",
DlgLstTypeLCase		: "Minuscule-litere mici (a, b, c)",
DlgLstTypeUCase		: "Majuscule (A, B, C)",
DlgLstTypeSRoman	: "Cifre romane mici (i, ii, iii)",
DlgLstTypeLRoman	: "Cifre romane mari (I, II, III)",

// Document Properties Dialog
DlgDocGeneralTab	: "General",
DlgDocBackTab		: "Fundal",
DlgDocColorsTab		: "Culori si margini",
DlgDocMetaTab		: "Meta Data",

DlgDocPageTitle		: "Titlul paginii",
DlgDocLangDir		: "Descrierea limbii",
DlgDocLangDirLTR	: "stanga-dreapta (LTR)",
DlgDocLangDirRTL	: "dreapta-stanga (RTL)",
DlgDocLangCode		: "Codul limbii",
DlgDocCharSet		: "Encoding setului de caractere",
DlgDocCharSetOther	: "Alt encoding al setului de caractere",

DlgDocDocType		: "Document Type Heading",
DlgDocDocTypeOther	: "Alt Document Type Heading",
DlgDocIncXHTML		: "Include declara?ii XHTML",
DlgDocBgColor		: "Culoarea fundalului (Background Color)",
DlgDocBgImage		: "URL-ul imaginii din fundal (Background Image URL)",
DlgDocBgNoScroll	: "Fundal neflotant, fix (Nonscrolling Background)",
DlgDocCText			: "Text",
DlgDocCLink			: "Link (Leg?tur? web)",
DlgDocCVisited		: "Link (Leg?tur? web) vizitat",
DlgDocCActive		: "Link (Leg?tur? web) activ",
DlgDocMargins		: "Marginile paginii",
DlgDocMaTop			: "Sus",
DlgDocMaLeft		: "Stanga",
DlgDocMaRight		: "Dreapta",
DlgDocMaBottom		: "Jos",
DlgDocMeIndex		: "Cuvinte cheie dup? care se va indexa documentul (separate prin virgul?)",
DlgDocMeDescr		: "Descrierea documentului",
DlgDocMeAuthor		: "Autor",
DlgDocMeCopy		: "Drepturi de autor",
DlgDocPreview		: "Previzualizare",

// Templates Dialog
Templates			: "Template-uri (?abloane)",
DlgTemplatesTitle	: "Template-uri (?abloane) de con?inut",
DlgTemplatesSelMsg	: "V? rug?m selecta?i template-ul (?ablonul) ce se va deschide ?n editor<br>(con?inutul actual va fi pierdut):",
DlgTemplatesLoading	: "Se ?ncarc? lista cu template-uri (?abloane). V? rug?m a?tepta?i...",
DlgTemplatesNoTpl	: "(Nici un template (?ablon) definit)",

// About Dialog
DlgAboutAboutTab	: "Despre",
DlgAboutBrowserInfoTab	: "Informa?ii browser",
DlgAboutVersion		: "versiune",
DlgAboutLicense		: "Licen?iat sub termenii GNU Lesser General Public License",
DlgAboutInfo		: "Pentru informa?ii am?nun?ite, vizita?i"
}