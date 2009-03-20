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
 * File Name: pl.js
 * 	Polish language file.
 * 
 * File Authors:
 * 		Jakub Boesche (jboesche@gazeta.pl)
 * 		Maciej Bochynski (maciej.bochynski@lubman.pl)
 */

var FCKLang =
{
// Language direction : "ltr" (left to right) or "rtl" (right to left).
Dir					: "ltr",

ToolbarCollapse		: "Zwiń pasek narz?dzi",
ToolbarExpand		: "Rozwiń pasek narz?dzi",

// Toolbar Items and Context Menu
Save				: "Zapisz",
NewPage				: "Nowa strona",
Preview				: "Podgl?d",
Cut					: "Wytnij",
Copy				: "Kopiuj",
Paste				: "Wklej",
PasteText			: "Wklej jako czysty tekst",
PasteWord			: "Wklej z Worda",
Print				: "Drukuj",
SelectAll			: "Zaznacz wszystko",
RemoveFormat		: "Usuń formatowanie",
InsertLinkLbl		: "Hiper??cze",
InsertLink			: "Wstaw/edytuj hiper??cze",
RemoveLink			: "Usuń hiper??cze",
Anchor				: "Wstaw/edytuj kotwic?",
InsertImageLbl		: "Obrazek",
InsertImage			: "Wstaw/edytuj obrazek",
InsertFlashLbl		: "Flash",	//MISSING
InsertFlash			: "Insert/Edit Flash",	//MISSING
InsertTableLbl		: "Tabela",
InsertTable			: "Wstaw/edytuj tabel?",
InsertLineLbl		: "Linia pozioma",
InsertLine			: "Wstaw poziom? lini?",
InsertSpecialCharLbl: "Znak specjalny",
InsertSpecialChar	: "Wstaw znak specjalny",
InsertSmileyLbl		: "Emotikona",
InsertSmiley		: "Wstaw emotikon?",
About				: "O programie FCKeditor",
Bold				: "Pogrubienie",
Italic				: "Kursywa",
Underline			: "Podkre?lenie",
StrikeThrough		: "Przekre?lenie",
Subscript			: "Indeks dolny",
Superscript			: "Indeks górny",
LeftJustify			: "Wyrównaj do lewej",
CenterJustify		: "Wyrównaj do ?rodka",
RightJustify		: "Wyrównaj do prawej",
BlockJustify		: "Wyrównaj do lewej i prawej",
DecreaseIndent		: "Zmniejsz wci?cie",
IncreaseIndent		: "Zwi?ksz wci?cie",
Undo				: "Cofnij",
Redo				: "Ponów",
NumberedListLbl		: "Lista numerowana",
NumberedList		: "Wstaw/usuń numerowanie listy",
BulletedListLbl		: "Lista wypunktowana",
BulletedList		: "Wstaw/usuń wypunktowanie listy",
ShowTableBorders	: "Pokazuj ramk? tabeli",
ShowDetails			: "Poka? szczegó?y",
Style				: "Styl",
FontFormat			: "Format",
Font				: "Czcionka",
FontSize			: "Rozmiar",
TextColor			: "Kolor tekstu",
BGColor				: "Kolor t?a",
Source				: "?ród?o dokumentu",
Find				: "Znajd?",
Replace				: "Zamień",
SpellCheck			: "Sprawd? pisowni?",
UniversalKeyboard	: "Klawiatura Uniwersalna",

Form			: "Formularz",
Checkbox		: "Checkbox",
RadioButton		: "Pole wyboru",
TextField		: "Pole tekstowe",
Textarea		: "Obszar tekstowy",
HiddenField		: "Pole ukryte",
Button			: "Przycisk",
SelectionField	: "Lista wyboru",
ImageButton		: "Przycisk obrazek",

// Context Menu
EditLink			: "Edytuj hiper??cze",
InsertRow			: "Wstaw wiersz",
DeleteRows			: "Usuń wiersze",
InsertColumn		: "Wstaw kolumn?",
DeleteColumns		: "Usuń kolumny",
InsertCell			: "Wstaw komórk?",
DeleteCells			: "Usuń komórki",
MergeCells			: "Po??cz komórki",
SplitCell			: "Podziel komórk?",
CellProperties		: "W?a?ciwo?ci komórki",
TableProperties		: "W?a?ciwo?ci tabeli",
ImageProperties		: "W?a?ciwo?ci obrazka",
FlashProperties		: "Flash Properties",	//MISSING

AnchorProp			: "W?a?ciwo?ci kotwicy",
ButtonProp			: "W?a?ciwo?ci przycisku",
CheckboxProp		: "Checkbox - w?a?ciwo?ci",
HiddenFieldProp		: "W?a?ciwo?ci pola ukrytego",
RadioButtonProp		: "W?a?ciwo?ci pola wyboru",
ImageButtonProp		: "W?a?ciwo?ci przycisku obrazka",
TextFieldProp		: "W?a?ciwo?ci pola tekstowego",
SelectionFieldProp	: "W?a?ciwo?ci listy wyboru",
TextareaProp		: "W?a?ciwo?ci obszaru tekstowego",
FormProp			: "W?a?ciwo?ci formularza",

FontFormats			: "Normalny;Tekst sformatowany;Adres;Nag?ówek 1;Nag?ówek 2;Nag?ówek 3;Nag?ówek 4;Nag?ówek 5;Nag?ówek 6",

// Alerts and Messages
ProcessingXHTML		: "Przetwarzanie XHTML. Prosz? czeka?...",
Done				: "Gotowe",
PasteWordConfirm	: "Tekst, który chcesz wklei?, prawdopodobnie pochodzi z programu Word. Czy chcesz go wyczy?cic przed wklejeniem?",
NotCompatiblePaste	: "Ta funkcja jest dost?pna w programie Internet Explorer w wersji 5.5 lub wy?szej. Czy chcesz wklei? tekst bez czyszczenia?",
UnknownToolbarItem	: "Nieznany element paska narz?dzi \"%1\"",
UnknownCommand		: "Nieznana komenda \"%1\"",
NotImplemented		: "Komenda niezaimplementowana",
UnknownToolbarSet	: "Pasek narz?dzi \"%1\" nie istnieje",
NoActiveX			: "You browser's security settings could limit some features of the editor. You must enable the option \"Run ActiveX controls and plug-ins\". You may experience errors and notice missing features.",	//MISSING

// Dialogs
DlgBtnOK			: "OK",
DlgBtnCancel		: "Anuluj",
DlgBtnClose			: "Zamknij",
DlgBtnBrowseServer	: "Przegl?daj",
DlgAdvancedTag		: "Zaawansowane",
DlgOpOther			: "&lt;Inny&gt;",
DlgInfoTab			: "Info",	//MISSING
DlgAlertUrl			: "Please insert the URL",	//MISSING

// General Dialogs Labels
DlgGenNotSet		: "&lt;nieustawione&gt;",
DlgGenId			: "Id",
DlgGenLangDir		: "Kierunek tekstu",
DlgGenLangDirLtr	: "Od lewej do prawej (LTR)",
DlgGenLangDirRtl	: "Od prawej do lewej (RTL)",
DlgGenLangCode		: "Kod j?zyka",
DlgGenAccessKey		: "Klawisz dost?pu",
DlgGenName			: "Nazwa",
DlgGenTabIndex		: "Indeks tabeli",
DlgGenLongDescr		: "Long Description URL",
DlgGenClass			: "Stylesheet Classes",
DlgGenTitle			: "Advisory Title",
DlgGenContType		: "Advisory Content Type",
DlgGenLinkCharset	: "Linked Resource Charset",
DlgGenStyle			: "Styl",

// Image Dialog
DlgImgTitle			: "W?a?ciwo?ci obrazka",
DlgImgInfoTab		: "Informacje o obrazku",
DlgImgBtnUpload		: "Sy?lij",
DlgImgURL			: "Adres URL",
DlgImgUpload		: "Wy?lij",
DlgImgAlt			: "Tekst zast?pczy",
DlgImgWidth			: "Szeroko??",
DlgImgHeight		: "Wysoko??",
DlgImgLockRatio		: "Zablokuj proporcje",
DlgBtnResetSize		: "Przywró? rozmiar",
DlgImgBorder		: "Ramka",
DlgImgHSpace		: "Odst?p poziomy",
DlgImgVSpace		: "Odst?p pionowy",
DlgImgAlign			: "Wyrównaj",
DlgImgAlignLeft		: "Do lewej",
DlgImgAlignAbsBottom: "Do do?u",
DlgImgAlignAbsMiddle: "Do ?rodka w pionie",
DlgImgAlignBaseline	: "Do linii bazowej",
DlgImgAlignBottom	: "Do do?u",
DlgImgAlignMiddle	: "Do ?rodka",
DlgImgAlignRight	: "Do prawej",
DlgImgAlignTextTop	: "Do góry tekstu",
DlgImgAlignTop		: "Do góry",
DlgImgPreview		: "Podgl?d",
DlgImgAlertUrl		: "Podaj adres obrazka.",
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
DlgLnkWindowTitle	: "Hiper??cze",
DlgLnkInfoTab		: "Informacje ",
DlgLnkTargetTab		: "Cel",

DlgLnkType			: "Typ hiper??cza",
DlgLnkTypeURL		: "Adres URL",
DlgLnkTypeAnchor	: "Odno?nik wewn?trz strony",
DlgLnkTypeEMail		: "Adres e-mail",
DlgLnkProto			: "Protokó?",
DlgLnkProtoOther	: "&lt;inny&gt;",
DlgLnkURL			: "Adres URL",
DlgLnkAnchorSel		: "Wybierz etykiet?",
DlgLnkAnchorByName	: "Wg etykiety",
DlgLnkAnchorById	: "Wg identyfikatora elementu",
DlgLnkNoAnchors		: "&lt;W dokumencie nie zdefiniowano ?adnych etykiet&gt;",
DlgLnkEMail			: "Adres e-mail",
DlgLnkEMailSubject	: "Temat",
DlgLnkEMailBody		: "Tre??",
DlgLnkUpload		: "Upload",
DlgLnkBtnUpload		: "Wy?lij",

DlgLnkTarget		: "Cel",
DlgLnkTargetFrame	: "&lt;ramka&gt;",
DlgLnkTargetPopup	: "&lt;wyskakuj?ce okno&gt;",
DlgLnkTargetBlank	: "Nowe okno (_blank)",
DlgLnkTargetParent	: "Okno nadrz?dne (_parent)",
DlgLnkTargetSelf	: "To samo okno (_self)",
DlgLnkTargetTop		: "Okno najwy?sze w hierarchii (_top)",
DlgLnkTargetFrameName	: "Nazwa Ramki Docelowej",
DlgLnkPopWinName	: "Nazwa wyskakuj?cego okna",
DlgLnkPopWinFeat	: "W?a?ciwo?ci wyskakuj?cego okna",
DlgLnkPopResize		: "Mo?liwa zmiana rozmiaru",
DlgLnkPopLocation	: "Pasek adresu",
DlgLnkPopMenu		: "Pasek menu",
DlgLnkPopScroll		: "Paski przewijania",
DlgLnkPopStatus		: "Pasek statusu",
DlgLnkPopToolbar	: "Pasek narz?dzi",
DlgLnkPopFullScrn	: "Pe?ny ekran (IE)",
DlgLnkPopDependent	: "Okno zale?ne (Netscape)",
DlgLnkPopWidth		: "Szeroko??",
DlgLnkPopHeight		: "Wysoko??",
DlgLnkPopLeft		: "Pozycja w poziomie",
DlgLnkPopTop		: "Pozycja w pionie",

DlnLnkMsgNoUrl		: "Podaj adres URL",
DlnLnkMsgNoEMail	: "Podaj adres e-mail",
DlnLnkMsgNoAnchor	: "Wybierz etykiet?",

// Color Dialog
DlgColorTitle		: "Wybierz kolor",
DlgColorBtnClear	: "Wyczy??",
DlgColorHighlight	: "Podgl?d",
DlgColorSelected	: "Wybrane",

// Smiley Dialog
DlgSmileyTitle		: "Wstaw emotikon?",

// Special Character Dialog
DlgSpecialCharTitle	: "Wybierz znak specjalny",

// Table Dialog
DlgTableTitle		: "W?a?ciwo?ci tabeli",
DlgTableRows		: "Liczba wierszy",
DlgTableColumns		: "Liczba kolumn",
DlgTableBorder		: "Grubo?? ramki",
DlgTableAlign		: "Wyrównanie",
DlgTableAlignNotSet	: "<brak ustawień>",
DlgTableAlignLeft	: "Do lewej",
DlgTableAlignCenter	: "Do ?rodka",
DlgTableAlignRight	: "Do prawej",
DlgTableWidth		: "Szeroko??",
DlgTableWidthPx		: "piksele",
DlgTableWidthPc		: "%",
DlgTableHeight		: "Wysoko??",
DlgTableCellSpace	: "Odst?p pomi?dzy komórkami",
DlgTableCellPad		: "Margines wewn?trzny komórek",
DlgTableCaption		: "Tytu?",

// Table Cell Dialog
DlgCellTitle		: "W?a?ciwo?ci komórki",
DlgCellWidth		: "Szeroko??",
DlgCellWidthPx		: "piksele",
DlgCellWidthPc		: "%",
DlgCellHeight		: "Wysoko??",
DlgCellWordWrap		: "Zawijanie tekstu",
DlgCellWordWrapNotSet	: "<brak ustawień>",
DlgCellWordWrapYes	: "Tak",
DlgCellWordWrapNo	: "Nie",
DlgCellHorAlign		: "Wyrównanie poziome",
DlgCellHorAlignNotSet	: "<brak ustawień>",
DlgCellHorAlignLeft	: "Do lewej",
DlgCellHorAlignCenter	: "Do ?rodka",
DlgCellHorAlignRight: "Do prawej",
DlgCellVerAlign		: "Wyrównanie pionowe",
DlgCellVerAlignNotSet	: "<brak ustawień>",
DlgCellVerAlignTop	: "Do góry",
DlgCellVerAlignMiddle	: "Do ?rodka",
DlgCellVerAlignBottom	: "Do do?u",
DlgCellVerAlignBaseline	: "Do linii bazowej",
DlgCellRowSpan		: "Zaj?to?? wierszy",
DlgCellCollSpan		: "Zaj?to?? kolumn",
DlgCellBackColor	: "Kolor t?a",
DlgCellBorderColor	: "Kolor ramki",
DlgCellBtnSelect	: "Wybierz...",

// Find Dialog
DlgFindTitle		: "Znajd?",
DlgFindFindBtn		: "Znajd?",
DlgFindNotFoundMsg	: "Nie znaleziono szukanego has?a.",

// Replace Dialog
DlgReplaceTitle			: "Zamień",
DlgReplaceFindLbl		: "Znajd?:",
DlgReplaceReplaceLbl	: "Zast?p przez:",
DlgReplaceCaseChk		: "Uwzgl?dnij wielko?? liter",
DlgReplaceReplaceBtn	: "Zast?p",
DlgReplaceReplAllBtn	: "Zast?p wszystko",
DlgReplaceWordChk		: "Ca?e s?owa",

// Paste Operations / Dialog
PasteErrorPaste	: "Ustawienia bezpieczeństwa Twojej przegl?darki nie pozwalaj? na automatyczne wklejanie tekstu. U?yj skrótu klawiszowego Ctrl+V.",
PasteErrorCut	: "Ustawienia bezpieczeństwa Twojej przegl?darki nie pozwalaj? na automatyczne wycinanie tekstu. U?yj skrótu klawiszowego Ctrl+X.",
PasteErrorCopy	: "Ustawienia bezpieczeństwa Twojej przegl?darki nie pozwalaj? na automatyczne kopiowanie tekstu. U?yj skrótu klawiszowego Ctrl+C.",

PasteAsText		: "Wklej jako czysty tekst",
PasteFromWord	: "Wklej z Worda",

DlgPasteMsg2	: "Please paste inside the following box using the keyboard (<STRONG>Ctrl+V</STRONG>) and hit <STRONG>OK</STRONG>.",	//MISSING
DlgPasteIgnoreFont		: "Ignore Font Face definitions",	//MISSING
DlgPasteRemoveStyles	: "Remove Styles definitions",	//MISSING
DlgPasteCleanBox		: "Clean Up Box",	//MISSING


// Color Picker
ColorAutomatic	: "Automatycznie",
ColorMoreColors	: "Wi?cej kolorów...",

// Document Properties
DocProps		: "W?a?ciwo?ci dokumentu",

// Anchor Dialog
DlgAnchorTitle		: "W?a?ciwo?ci kotwicy",
DlgAnchorName		: "Nazwa kotwicy",
DlgAnchorErrorName	: "Wpisz nazw? kotwicy",

// Speller Pages Dialog
DlgSpellNotInDic		: "S?owa nie ma w s?owniku",
DlgSpellChangeTo		: "Zmień na",
DlgSpellBtnIgnore		: "Ignoruj",
DlgSpellBtnIgnoreAll	: "Ignoruj wszystkie",
DlgSpellBtnReplace		: "Zmień",
DlgSpellBtnReplaceAll	: "Zmień wszystkie",
DlgSpellBtnUndo			: "Undo",
DlgSpellNoSuggestions	: "- Brak sugestii -",
DlgSpellProgress		: "Trwa sprawdzanie ...",
DlgSpellNoMispell		: "Sprawdzanie zakończone: nie znaleziono b??dów",
DlgSpellNoChanges		: "Sprawdzanie zakończone: nie zmieniono ?adnego s?owa",
DlgSpellOneChange		: "Sprawdzanie zakończone: zmieniono jedno s?owo",
DlgSpellManyChanges		: "Sprawdzanie zakończone: zmieniono %l s?ów",

IeSpellDownload			: "S?ownik nie jest zainstalowany. Chcesz go ?ci?gn???",

// Button Dialog
DlgButtonText	: "Tekst (Warto??)",
DlgButtonType	: "Typ",

// Checkbox and Radio Button Dialogs
DlgCheckboxName		: "Nazwa",
DlgCheckboxValue	: "Warto??",
DlgCheckboxSelected	: "Zaznaczony",

// Form Dialog
DlgFormName		: "Nazwa",
DlgFormAction	: "Akcja",
DlgFormMethod	: "Metoda",

// Select Field Dialog
DlgSelectName		: "Nazwa",
DlgSelectValue		: "Warto??",
DlgSelectSize		: "Rozmiar",
DlgSelectLines		: "linii",
DlgSelectChkMulti	: "Wielokrotny wybór",
DlgSelectOpAvail	: "Dost?pne opcje",
DlgSelectOpText		: "Tekst",
DlgSelectOpValue	: "Warto??",
DlgSelectBtnAdd		: "Dodaj",
DlgSelectBtnModify	: "Zmień",
DlgSelectBtnUp		: "Do góry",
DlgSelectBtnDown	: "Do do?u",
DlgSelectBtnSetValue : "Ustaw warto?? zaznaczon?",
DlgSelectBtnDelete	: "Usuń",

// Textarea Dialog
DlgTextareaName	: "Nazwa",
DlgTextareaCols	: "Kolumnu",
DlgTextareaRows	: "Wiersze",

// Text Field Dialog
DlgTextName			: "Nazwa",
DlgTextValue		: "Warto??",
DlgTextCharWidth	: "Szeroko?? w znakach",
DlgTextMaxChars		: "Max. szeroko??",
DlgTextType			: "Typ",
DlgTextTypeText		: "Tekst",
DlgTextTypePass		: "Has?o",

// Hidden Field Dialog
DlgHiddenName	: "Nazwa",
DlgHiddenValue	: "Warto??",

// Bulleted List Dialog
BulletedListProp	: "W?a?ciwo?ci listy punktowanej",
NumberedListProp	: "W?a?ciwo?ci listy numerowanej",
DlgLstType			: "Typ",
DlgLstTypeCircle	: "Ko?o",
DlgLstTypeDisc		: "Disc",	//MISSING
DlgLstTypeSquare	: "Kwadrat",
DlgLstTypeNumbers	: "Cyfry (1, 2, 3)",
DlgLstTypeLCase		: "Ma?e litery (a, b, c)",
DlgLstTypeUCase		: "Du?e litery (A, B, C)",
DlgLstTypeSRoman	: "Numeracja rzymska (i, ii, iii)",
DlgLstTypeLRoman	: "Numeracja rzymska (I, II, III)",

// Document Properties Dialog
DlgDocGeneralTab	: "Ogólne",
DlgDocBackTab		: "T?o",
DlgDocColorsTab		: "Kolory i marginesy",
DlgDocMetaTab		: "Meta Dane",

DlgDocPageTitle		: "Tytu? strony",
DlgDocLangDir		: "Kierunek pisania",
DlgDocLangDirLTR	: "Od lewej do prawej (LTR)",
DlgDocLangDirRTL	: "Od prawej do lewej (RTL)",
DlgDocLangCode		: "Kod j?zyka",
DlgDocCharSet		: "Kodowanie znaków",
DlgDocCharSetOther	: "Inne kodowanie znaków",

DlgDocDocType		: "Nag?owek typu dokumentu",
DlgDocDocTypeOther	: "Inny typ dokumentu",
DlgDocIncXHTML		: "Do??cz deklaracj? XHTML",
DlgDocBgColor		: "Kolor t?a",
DlgDocBgImage		: "Obrazek t?a",
DlgDocBgNoScroll	: "T?o nieruchome",
DlgDocCText			: "Tekst",
DlgDocCLink			: "Hiper??cze",
DlgDocCVisited		: "Odwiedzane hiper??cze",
DlgDocCActive		: "Aktywne hiper??cze",
DlgDocMargins		: "Marginesy strony",
DlgDocMaTop			: "Górny",
DlgDocMaLeft		: "Lewy",
DlgDocMaRight		: "Prawy",
DlgDocMaBottom		: "Dolny",
DlgDocMeIndex		: "S?owa kluczowe (oddzielone przecinkami)",
DlgDocMeDescr		: "Opis dokumentu",
DlgDocMeAuthor		: "Autor",
DlgDocMeCopy		: "Copyright",
DlgDocPreview		: "Podgl?d",

// Templates Dialog
Templates			: "Templates",	//MISSING
DlgTemplatesTitle	: "Content Templates",	//MISSING
DlgTemplatesSelMsg	: "Please select the template to open in the editor<br>(the actual contents will be lost):",	//MISSING
DlgTemplatesLoading	: "Loading templates list. Please wait...",	//MISSING
DlgTemplatesNoTpl	: "(No templates defined)",	//MISSING

// About Dialog
DlgAboutAboutTab	: "O ...",
DlgAboutBrowserInfoTab	: "O przegl?darce",
DlgAboutVersion		: "wersja",
DlgAboutLicense		: "na licencji GNU Lesser General Public License",
DlgAboutInfo		: "Wi?cej informacji uzyskasz pod adresem"
}