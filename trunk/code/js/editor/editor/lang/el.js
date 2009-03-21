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
 * File Name: el.js
 * 	Greek language file.
 * 
 * File Authors:
 * 		Spyros Barbatos (sbarbatos{at}users.sourceforge.net)
 */

var FCKLang =
{
// Language direction : "ltr" (left to right) or "rtl" (right to left).
Dir					: "ltr",

ToolbarCollapse		: "Απ?κρυψη Μπ?ρα? Εργαλε?ων",
ToolbarExpand		: "Εμφ?νιση Μπ?ρα? Εργαλε?ων",

// Toolbar Items and Context Menu
Save				: "Αποθ?κευση",
NewPage				: "Ν?α Σελ?δα",
Preview				: "Προεπισκ?πιση",
Cut					: "Αποκοπ?",
Copy				: "Αντιγραφ?",
Paste				: "Επικ?λληση",
PasteText			: "Επικ?λληση (απλ? κε?μενο)",
PasteWord			: "Επικ?λληση απ? το Word",
Print				: "Εκτ?πωση",
SelectAll			: "Επιλογ? ?λων",
RemoveFormat		: "Αφα?ρεση Μορφοπο?ηση?",
InsertLinkLbl		: "Σ?νδεσμο? (Link)",
InsertLink			: "Εισαγωγ?/Μεταβολ? Συνδ?σμου (Link)",
RemoveLink			: "Αφα?ρεση Συνδ?σμου (Link)",
Anchor				: "Insert/Edit Anchor",	//MISSING
InsertImageLbl		: "Εικ?να",
InsertImage			: "Εισαγωγ?/Μεταβολ? Εικ?να?",
InsertFlashLbl		: "Flash",	//MISSING
InsertFlash			: "Insert/Edit Flash",	//MISSING
InsertTableLbl		: "Π?νακα?",
InsertTable			: "Εισαγωγ?/Μεταβολ? Π?νακα",
InsertLineLbl		: "Γραμμ?",
InsertLine			: "Εισαγωγ? Οριζ?ντια? Γραμμ??",
InsertSpecialCharLbl: "Ειδικ? Σ?μβολο",
InsertSpecialChar	: "Εισαγωγ? Ειδικο? Συμβ?λου",
InsertSmileyLbl		: "Smiley",
InsertSmiley		: "Εισαγωγ? Smiley",
About				: "Περ? του FCKeditor",
Bold				: "?ντονα",
Italic				: "Πλ?για",
Underline			: "Υπογρ?μμιση",
StrikeThrough		: "Διαγρ?μμιση",
Subscript			: "Δε?κτη?",
Superscript			: "Εκθ?τη?",
LeftJustify			: "Στο?χιση Αριστερ?",
CenterJustify		: "Στο?χιση στο Κ?ντρο",
RightJustify		: "Στο?χιση Δεξι?",
BlockJustify		: "Πλ?ρη? Στο?χιση (Block)",
DecreaseIndent		: "Με?ωση Εσοχ??",
IncreaseIndent		: "Α?ξηση Εσοχ??",
Undo				: "Undo",
Redo				: "Redo",
NumberedListLbl		: "Λ?στα με Αριθμο??",
NumberedList		: "Εισαγωγ?/Διαγραφ? Λ?στα? με Αριθμο??",
BulletedListLbl		: "Λ?στα με Bullets",
BulletedList		: "Εισαγωγ?/Διαγραφ? Λ?στα? με Bullets",
ShowTableBorders	: "Προβολ? Ορ?ων Π?νακα",
ShowDetails			: "Προβολ? Λεπτομερει?ν",
Style				: "Style",
FontFormat			: "Μορφ? Γραμματοσειρ??",
Font				: "Γραμματοσειρ?",
FontSize			: "Μ?γεθο?",
TextColor			: "Χρ?μα Γραμμ?των",
BGColor				: "Χρ?μα Υποβ?θρου",
Source				: "HTML κ?δικα?",
Find				: "Αναζ?τηση",
Replace				: "Αντικατ?σταση",
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
EditLink			: "Μεταβολ? Συνδ?σμου (Link)",
InsertRow			: "Εισαγωγ? Γραμμ??",
DeleteRows			: "Διαγραφ? Γραμμ?ν",
InsertColumn		: "Εισαγωγ? Κολ?να?",
DeleteColumns		: "Διαγραφ? Κολων?ν",
InsertCell			: "Εισαγωγ? Κελιο?",
DeleteCells			: "Διαγραφ? Κελι?ν",
MergeCells			: "Ενοπο?ηση Κελι?ν",
SplitCell			: "Διαχωρισμ?? Κελιο?",
CellProperties		: "Ιδι?τητε? Κελιο?",
TableProperties		: "Ιδι?τητε? Π?νακα",
ImageProperties		: "Ιδι?τητε? Εικ?να?",
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

FontFormats			: "Normal;Formatted;Address;Heading 1;Heading 2;Heading 3;Heading 4;Heading 5;Heading 6",

// Alerts and Messages
ProcessingXHTML		: "Επεξεργασ?α XHTML. Παρακαλ? περιμ?νετε...",
Done				: "?τοιμο",
PasteWordConfirm	: "Το κε?μενο που θ?λετε να επικολ?σετε, φα?νεται πω? προ?ρχεται απ? το Word. Θ?λετε να καθαριστε? πριν επικοληθε?;",
NotCompatiblePaste	: "Αυτ? η επιλογ? ε?ναι διαθ?σιμη στον Internet Explorer ?κδοση 5.5+. Θ?λετε να γ?νει η επικ?λληση χωρ?? καθαρισμ?;",
UnknownToolbarItem	: "?γνωστο αντικε?μενο τη? μπ?ρα? εργαλε?ων \"%1\"",
UnknownCommand		: "?γνωστ? εντολ? \"%1\"",
NotImplemented		: "Η εντολ? δεν ?χει ενεργοποιηθε?",
UnknownToolbarSet	: "Η μπ?ρα εργαλε?ων \"%1\" δεν υπ?ρχει",
NoActiveX			: "You browser's security settings could limit some features of the editor. You must enable the option \"Run ActiveX controls and plug-ins\". You may experience errors and notice missing features.",	//MISSING

// Dialogs
DlgBtnOK			: "OK",
DlgBtnCancel		: "Ακ?ρωση",
DlgBtnClose			: "Κλε?σιμο",
DlgBtnBrowseServer	: "Browse Server",	//MISSING
DlgAdvancedTag		: "Για προχωρημ?νου?",
DlgOpOther			: "&lt;Other&gt;",	//MISSING
DlgInfoTab			: "Info",	//MISSING
DlgAlertUrl			: "Please insert the URL",	//MISSING

// General Dialogs Labels
DlgGenNotSet		: "&lt;χωρ??&gt;",
DlgGenId			: "Id",
DlgGenLangDir		: "Κατε?θυνση κειμ?νου",
DlgGenLangDirLtr	: "Αριστερ? προ? Δεξι? (LTR)",
DlgGenLangDirRtl	: "Δεξι? προ? Αριστερ? (RTL)",
DlgGenLangCode		: "Κωδικ?? Γλ?σσα?",
DlgGenAccessKey		: "Συντ?μευση (Access Key)",
DlgGenName			: "Name",
DlgGenTabIndex		: "Tab Index",
DlgGenLongDescr		: "Long Description URL",
DlgGenClass			: "Stylesheet Classes",
DlgGenTitle			: "Advisory Title",
DlgGenContType		: "Advisory Content Type",
DlgGenLinkCharset	: "Linked Resource Charset",
DlgGenStyle			: "Style",

// Image Dialog
DlgImgTitle			: "Ιδι?τητε? Εικ?να?",
DlgImgInfoTab		: "Πληροφορ?ε? Εικ?να?",
DlgImgBtnUpload		: "Αποστολ? στον Διακομιστ?",
DlgImgURL			: "URL",
DlgImgUpload		: "Αποστολ?",
DlgImgAlt			: "Εναλλακτικ? Κε?μενο (ALT)",
DlgImgWidth			: "Πλ?το?",
DlgImgHeight		: "?ψο?",
DlgImgLockRatio		: "Κλε?δωμα Αναλογ?α?",
DlgBtnResetSize		: "Επαναφορ? Αρχικο? Μεγ?θου?",
DlgImgBorder		: "Περιθ?ριο",
DlgImgHSpace		: "Οριζ?ντιο? Χ?ρο? (HSpace)",
DlgImgVSpace		: "Κ?θετο? Χ?ρο? (VSpace)",
DlgImgAlign			: "Ευθυγρ?μμιση (Align)",
DlgImgAlignLeft		: "Αριστερ?",
DlgImgAlignAbsBottom: "Απ?λυτα Κ?τω (Abs Bottom)",
DlgImgAlignAbsMiddle: "Απ?λυτα στη Μ?ση (Abs Middle)",
DlgImgAlignBaseline	: "Γραμμ? Β?ση? (Baseline)",
DlgImgAlignBottom	: "Κ?τω (Bottom)",
DlgImgAlignMiddle	: "Μ?ση (Middle)",
DlgImgAlignRight	: "Δεξι? (Right)",
DlgImgAlignTextTop	: "Κορυφ? Κειμ?νου (Text Top)",
DlgImgAlignTop		: "Π?νω (Top)",
DlgImgPreview		: "Προεπισκ?πιση",
DlgImgAlertUrl		: "Εισ?γετε την τοποθεσ?α (URL) τη? εικ?να?",
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
DlgLnkWindowTitle	: "Υπερσ?νδεσμο? (Link)",
DlgLnkInfoTab		: "Link",
DlgLnkTargetTab		: "Παρ?θυρο Στ?χο? (Target)",

DlgLnkType			: "Τ?πο? Υπερσυνδ?σμου (Link)",
DlgLnkTypeURL		: "URL",
DlgLnkTypeAnchor	: "Anchor in this page",
DlgLnkTypeEMail		: "E-Mail",
DlgLnkProto			: "Protocol",
DlgLnkProtoOther	: "&lt;?λλο&gt;",
DlgLnkURL			: "URL",
DlgLnkAnchorSel		: "Επιλ?ξτε ?να Anchor",
DlgLnkAnchorByName	: "Β?σει του Ον?ματο? (Name)του Anchor",
DlgLnkAnchorById	: "Β?σει του Element Id",
DlgLnkNoAnchors		: "&lt;Δεν υπ?ρχουν Anchors στο κε?μενο&gt;",
DlgLnkEMail			: "Διε?θυνση Ηλεκτρονικο? Ταχυδρομε?ου",
DlgLnkEMailSubject	: "Θ?μα Μην?ματο?",
DlgLnkEMailBody		: "Κε?μενο Μην?ματο?",
DlgLnkUpload		: "Αποστολ?",
DlgLnkBtnUpload		: "Αποστολ? στον Διακομιστ?",

DlgLnkTarget		: "Παρ?θυρο Στ?χο? (Target)",
DlgLnkTargetFrame	: "&lt;frame&gt;",
DlgLnkTargetPopup	: "&lt;popup window&gt;",
DlgLnkTargetBlank	: "Ν?ο Παρ?θυρο (_blank)",
DlgLnkTargetParent	: "Γονικ? Παρ?θυρο (_parent)",
DlgLnkTargetSelf	: "?διο Παρ?θυρο (_self)",
DlgLnkTargetTop		: "Αν?τατο Παρ?θυρο (_top)",
DlgLnkTargetFrameName	: "Target Frame Name",	//MISSING
DlgLnkPopWinName	: "?νομα Popup Window",
DlgLnkPopWinFeat	: "Επιλογ?? Popup Window",
DlgLnkPopResize		: "Με αλλαγ? Μεγ?θου?",
DlgLnkPopLocation	: "Μπ?ρα Τοποθεσ?α?",
DlgLnkPopMenu		: "Μπ?ρα Menu",
DlgLnkPopScroll		: "Μπ?ρε? Κ?λιση?",
DlgLnkPopStatus		: "Μπ?ρα Status",
DlgLnkPopToolbar	: "Μπ?ρα Εργαλε?ων",
DlgLnkPopFullScrn	: "Ολ?κληρη η Οθ?νη (IE)",
DlgLnkPopDependent	: "Dependent (Netscape)",
DlgLnkPopWidth		: "Πλ?το?",
DlgLnkPopHeight		: "?ψο?",
DlgLnkPopLeft		: "Τοποθεσ?α Αριστερ?? ?κρη?",
DlgLnkPopTop		: "Τοποθεσ?α Π?νω ?κρη?",

DlnLnkMsgNoUrl		: "Εισ?γετε την τοποθεσ?α (URL) του υπερσυνδ?σμου (Link)",
DlnLnkMsgNoEMail	: "Εισ?γετε την διε?θυνση ηλεκτρονικο? ταχυδρομε?ου",
DlnLnkMsgNoAnchor	: "Επιλ?ξτε ?να Anchor",

// Color Dialog
DlgColorTitle		: "Επιλογ? χρ?ματο?",
DlgColorBtnClear	: "Καθαρισμ??",
DlgColorHighlight	: "Προεπισκ?πιση",
DlgColorSelected	: "Επιλεγμ?νο",

// Smiley Dialog
DlgSmileyTitle		: "Επιλ?ξτε ?να Smiley",

// Special Character Dialog
DlgSpecialCharTitle	: "Επιλ?ξτε ?να Ειδικ? Σ?μβολο",

// Table Dialog
DlgTableTitle		: "Ιδι?τητε? Π?νακα",
DlgTableRows		: "Γραμμ??",
DlgTableColumns		: "Κολ?νε?",
DlgTableBorder		: "Μ?γεθο? Περιθωρ?ου",
DlgTableAlign		: "Στο?χιση",
DlgTableAlignNotSet	: "<χωρ??>",
DlgTableAlignLeft	: "Αριστερ?",
DlgTableAlignCenter	: "Κ?ντρο",
DlgTableAlignRight	: "Δεξι?",
DlgTableWidth		: "Πλ?το?",
DlgTableWidthPx		: "pixels",
DlgTableWidthPc		: "\%",
DlgTableHeight		: "?ψο?",
DlgTableCellSpace	: "Cell spacing",
DlgTableCellPad		: "Cell padding",
DlgTableCaption		: "Υπ?ρτιτλο?",

// Table Cell Dialog
DlgCellTitle		: "Ιδι?τητε? Κελιο?",
DlgCellWidth		: "Πλ?το?",
DlgCellWidthPx		: "pixels",
DlgCellWidthPc		: "\%",
DlgCellHeight		: "?ψο?",
DlgCellWordWrap		: "Με αλλαγ? γραμμ??",
DlgCellWordWrapNotSet	: "<χωρ??>",
DlgCellWordWrapYes	: "Ναι",
DlgCellWordWrapNo	: "?χι",
DlgCellHorAlign		: "Οριζ?ντια Στο?χιση",
DlgCellHorAlignNotSet	: "<χωρ??>",
DlgCellHorAlignLeft	: "Αριστερ?",
DlgCellHorAlignCenter	: "Κ?ντρο",
DlgCellHorAlignRight: "Δεξι?",
DlgCellVerAlign		: "Κ?θετη Στο?χιση",
DlgCellVerAlignNotSet	: "<χωρ??>",
DlgCellVerAlignTop	: "Π?νω (Top)",
DlgCellVerAlignMiddle	: "Μ?ση (Middle)",
DlgCellVerAlignBottom	: "Κ?τω (Bottom)",
DlgCellVerAlignBaseline	: "Γραμμ? Β?ση? (Baseline)",
DlgCellRowSpan		: "Αριθμ?? Γραμμ?ν (Rows Span)",
DlgCellCollSpan		: "Αριθμ?? Κολων?ν (Columns Span)",
DlgCellBackColor	: "Χρ?μα Υποβ?θρου",
DlgCellBorderColor	: "Χρ?μα Περιθωρ?ου",
DlgCellBtnSelect	: "Επιλογ?...",

// Find Dialog
DlgFindTitle		: "Αναζ?τηση",
DlgFindFindBtn		: "Αναζ?τηση",
DlgFindNotFoundMsg	: "Το κε?μενο δεν βρ?θηκε.",

// Replace Dialog
DlgReplaceTitle			: "Αντικατ?σταση",
DlgReplaceFindLbl		: "Αναζ?τηση:",
DlgReplaceReplaceLbl	: "Αντικατ?σταση με:",
DlgReplaceCaseChk		: "?λεγχο? πεζ?ν/κεφαλα?ων",
DlgReplaceReplaceBtn	: "Αντικατ?σταση",
DlgReplaceReplAllBtn	: "Αντικατ?σταση ?λων",
DlgReplaceWordChk		: "Ε?ρεση πλ?ρου? λ?ξη?",

// Paste Operations / Dialog
PasteErrorPaste	: "Οι ρυθμ?σει? ασφαλε?α? του φυλλομετρητ? σα? δεν επιτρ?πουν την επιλεγμ?νη εργασ?α επικ?λληση?. Χρησιμοποιε?στε το πληκτρολ?γιο (Ctrl+V).",
PasteErrorCut	: "Οι ρυθμ?σει? ασφαλε?α? του φυλλομετρητ? σα? δεν επιτρ?πουν την επιλεγμ?νη εργασ?α αποκοπ??. Χρησιμοποιε?στε το πληκτρολ?γιο (Ctrl+X).",
PasteErrorCopy	: "Οι ρυθμ?σει? ασφαλε?α? του φυλλομετρητ? σα? δεν επιτρ?πουν την επιλεγμ?νη εργασ?α αντιγραφ??. Χρησιμοποιε?στε το πληκτρολ?γιο (Ctrl+C).",

PasteAsText		: "Επικ?λληση ω? Απλ? Κε?μενο",
PasteFromWord	: "Επικ?λληση απ? το Word",

DlgPasteMsg2	: "Please paste inside the following box using the keyboard (<STRONG>Ctrl+V</STRONG>) and hit <STRONG>OK</STRONG>.",	//MISSING
DlgPasteIgnoreFont		: "Ignore Font Face definitions",	//MISSING
DlgPasteRemoveStyles	: "Remove Styles definitions",	//MISSING
DlgPasteCleanBox		: "Clean Up Box",	//MISSING


// Color Picker
ColorAutomatic	: "Αυτ?ματο",
ColorMoreColors	: "Περισσ?τερα χρ?ματα...",

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
DlgAboutVersion		: "?κδοση",
DlgAboutLicense		: "?δεια χρ?ση? υπ? του? ?ρου? τη? GNU Lesser General Public License",
DlgAboutInfo		: "Για περισσ?τερε? πληροφορ?ε?"
}