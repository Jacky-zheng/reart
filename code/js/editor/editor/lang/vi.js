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
 * File Name: vi.js
 * 	Vietnamese language file.
 * 
 * File Authors:
 * 		Phan Binh Giang (bbbgiang@yahoo.com)
 */

var FCKLang =
{
// Language direction : "ltr" (left to right) or "rtl" (right to left).
Dir					: "ltr",

ToolbarCollapse		: "Collapse Toolbar",
ToolbarExpand		: "Expand Toolbar",

// Toolbar Items and Context Menu
Save				: "Ghi",
NewPage				: "Trang M?i",
Preview				: "Xem tr??c",
Cut					: "C?t",
Copy				: "Sao",
Paste				: "Dán",
PasteText			: "Dán Ky t? ??n thu?n",
PasteWord			: "Dán v?i ??nh d?ng Word",
Print				: "In",
SelectAll			: "Ch?n T?t c?",
RemoveFormat		: "Xoá ??nh d?ng",
InsertLinkLbl		: "Liên k?t",
InsertLink			: "Chèn/S?a Liên k?t",
RemoveLink			: "Xoá Liên k?t",
Anchor				: "Chèn/S?a Neo",
InsertImageLbl		: "Hình ?nh",
InsertImage			: "Chèn/S?a Hình ?nh",
InsertFlashLbl		: "Flash",
InsertFlash			: "Chèn/S?a Flash",
InsertTableLbl		: "B?ng",
InsertTable			: "Chèn/S?a b?ng",
InsertLineLbl		: "???ng phan cách",
InsertLine			: "Chèn ???ng phan cách ngang",
InsertSpecialCharLbl: "Ky t? ??t bi?t",
InsertSpecialChar	: "Chèn Ky t? ??c bi?t",
InsertSmileyLbl		: "Hình c?m xúc",
InsertSmiley		: "Chèn Hình c?m xúc",
About				: "Gi?i thi?u v? FCKeditor",
Bold				: "??m",
Italic				: "Nghiêng",
Underline			: "G?ch chan",
StrikeThrough		: "G?ch ngang",
Subscript			: "Ch? s? d??i",
Superscript			: "Ch? s? trên",
LeftJustify			: "Canh bên Trái",
CenterJustify		: "Canh Gi?a",
RightJustify		: "Canh bên Ph?i",
BlockJustify		: "Canh Hai bên",
DecreaseIndent		: "D?ch sang Trái",
IncreaseIndent		: "D?ch sang Ph?i",
Undo				: "Ph?c h?i Lùi",
Redo				: "Ph?c h?i Ti?n",
NumberedListLbl		: "S? th? t?",
NumberedList		: "Chèn/Xoá S? th? t?",
BulletedListLbl		: "Danh sách Bulleted",
BulletedList		: "Chèn/Xoá Danh sách Bulleted",
ShowTableBorders	: "Hi?n th? ???ng vi?n b?ng",
ShowDetails			: "Hi?n th? Chi ti?t",
Style				: "M?u",
FontFormat			: "??nh d?ng",
Font				: "Font",
FontSize			: "C? Ch?",
TextColor			: "Màu Ch?",
BGColor				: "Màu N?n",
Source				: "M? ngu?n",
Find				: "Tìm",
Replace				: "Thay th?",
SpellCheck			: "Ki?m tra Chính t?",
UniversalKeyboard	: "Bàn phím qu?c t?",

Form			: "Form",
Checkbox		: "N?t Ki?m",
RadioButton		: "N?t ?ài",
TextField		: "Text Field",
Textarea		: "Textarea",
HiddenField		: "Hidden Field",
Button			: "Button",
SelectionField	: "Selection Field",
ImageButton		: "Image Button",

// Context Menu
EditLink			: "S?a Liên k?t",
InsertRow			: "Chèn Dòng",
DeleteRows			: "Xoá Dòng",
InsertColumn		: "Chèn C?t",
DeleteColumns		: "Xoá C?t",
InsertCell			: "Chèn ?",
DeleteCells			: "Xoá ?",
MergeCells			: "Tr?n ?",
SplitCell			: "Chia ?",
CellProperties		: "Thu?c tính ?",
TableProperties		: "Thu?c tính B?ng",
ImageProperties		: "Thu?c tính Hình ?nh",
FlashProperties		: "Thu?c tính Flash",

AnchorProp			: "Thu?c tính Neo",
ButtonProp			: "Thu?c tính Button",
CheckboxProp		: "Thu?c tính N?t ki?m",
HiddenFieldProp		: "Thu?c tính Hidden Field",
RadioButtonProp		: "Thu?c tính N?t ?ài",
ImageButtonProp		: "Thu?c tính Image Button",
TextFieldProp		: "Thu?c tính Text Field",
SelectionFieldProp	: "Thu?c tính Selection Field",
TextareaProp		: "Thu?c tính Textarea",
FormProp			: "Thu?c tính Form",

FontFormats			: "Normal;Formatted;Address;Heading 1;Heading 2;Heading 3;Heading 4;Heading 5;Heading 6;Paragraph (DIV)",

// Alerts and Messages
ProcessingXHTML		: "?ang x? ly XHTML. Xin h?y ??i...",
Done				: "?? hoàn thành",
PasteWordConfirm	: "V?n b?n b?n mu?n dán có kèm ??nh d?ng c?a Word. B?n có mu?n lo?i b? ??nh d?ng Word tr??c khi dán?",
NotCompatiblePaste	: "L?nh này ch? ???c h? tr? t? trình duy?t Internet Explorer phiên b?n 5.5 ho?c m?i h?n. B?n có mu?n dán nguyên m?u?",
UnknownToolbarItem	: "Kh?ng r? N?t \"%1\"",
UnknownCommand		: "Kh?ng r? l?nh \"%1\"",
NotImplemented		: "L?nh kh?ng ???c thi hành",
UnknownToolbarSet	: "Thanh c?ng c? \"%1\" kh?ng t?n t?i",
NoActiveX			: "You browser's security settings could limit some features of the editor. You must enable the option \"Run ActiveX controls and plug-ins\". You may experience errors and notice missing features.",	//MISSING

// Dialogs
DlgBtnOK			: "??ng y",
DlgBtnCancel		: "B? qua",
DlgBtnClose			: "?óng",
DlgBtnBrowseServer	: "Duy?t trên máy ch?",
DlgAdvancedTag		: "M? r?ng",
DlgOpOther			: "&lt;Khác&gt;",
DlgInfoTab			: "Th?ng tin",
DlgAlertUrl			: "H?y ??a vào m?t URL",

// General Dialogs Labels
DlgGenNotSet		: "&lt;kh?ng thi?t l?p&gt;",
DlgGenId			: "??nh danh",
DlgGenLangDir		: "???ng d?n Ng?n ng?",
DlgGenLangDirLtr	: "Trái sang Ph?i (LTR)",
DlgGenLangDirRtl	: "Ph?i sang Trái (RTL)",
DlgGenLangCode		: "M? Ng?n ng?",
DlgGenAccessKey		: "Phím Truy c?p",
DlgGenName			: "Tên",
DlgGenTabIndex		: "Tab Index",
DlgGenLongDescr		: "M? t? URL",
DlgGenClass			: "Stylesheet Classes",
DlgGenTitle			: "Advisory Title",
DlgGenContType		: "Advisory Content Type",
DlgGenLinkCharset	: "Linked Resource Charset",
DlgGenStyle			: "M?u",

// Image Dialog
DlgImgTitle			: "Thu?c tính Hình ?nh",
DlgImgInfoTab		: "Th?ng tin Hình ?nh",
DlgImgBtnUpload		: "G?i lên Máy ch?",
DlgImgURL			: "URL",
DlgImgUpload		: "T?i lên",
DlgImgAlt			: "Chú thích Hình ?nh",
DlgImgWidth			: "R?ng",
DlgImgHeight		: "Cao",
DlgImgLockRatio		: "Gi? t? l?",
DlgBtnResetSize		: "Kích th??c g?c",
DlgImgBorder		: "???ng vi?n",
DlgImgHSpace		: "HSpace",
DlgImgVSpace		: "VSpace",
DlgImgAlign			: "V? trí",
DlgImgAlignLeft		: "Trái",
DlgImgAlignAbsBottom: "Abs Bottom",
DlgImgAlignAbsMiddle: "Abs Middle",
DlgImgAlignBaseline	: "Baseline",
DlgImgAlignBottom	: "D??i",
DlgImgAlignMiddle	: "Gi?a",
DlgImgAlignRight	: "Ph?i",
DlgImgAlignTextTop	: "Text Top",
DlgImgAlignTop		: "Trên",
DlgImgPreview		: "Xem tr??c",
DlgImgAlertUrl		: "H?y ??a vào URL c?a hình ?nh",
DlgImgLinkTab		: "Liên k?t",

// Flash Dialog
DlgFlashTitle		: "Thu?c tính Flash",
DlgFlashChkPlay		: "T? ??ng Ch?y",
DlgFlashChkLoop		: "L?p",
DlgFlashChkMenu		: "Kích ho?t Menu Flash ",
DlgFlashScale		: "Scale",
DlgFlashScaleAll	: "Hi?n th? t?t c?",
DlgFlashScaleNoBorder	: "Kh?ng ???ng vi?n",
DlgFlashScaleFit	: "Exact Fit",

// Link Dialog
DlgLnkWindowTitle	: "Liên k?t",
DlgLnkInfoTab		: "Th?ng tin Liên k?t",
DlgLnkTargetTab		: "H??ng t?i",

DlgLnkType			: "Ki?u Liên k?t",
DlgLnkTypeURL		: "URL",
DlgLnkTypeAnchor	: "Neo trong trang này",
DlgLnkTypeEMail		: "E-Mail",
DlgLnkProto			: "Giao th?c",
DlgLnkProtoOther	: "&lt;khác&gt;",
DlgLnkURL			: "URL",
DlgLnkAnchorSel		: "Ch?n m?t Neo",
DlgLnkAnchorByName	: "Theo Tên Neo",
DlgLnkAnchorById	: "Theo ??nh danh Element",
DlgLnkNoAnchors		: "&lt;Kh?ng có Neo nào trong tài li?u&gt;",
DlgLnkEMail			: "E-Mail",
DlgLnkEMailSubject	: "T?a ?? Th?ng ?i?p",
DlgLnkEMailBody		: "N?i dung Th?ng ?i?p",
DlgLnkUpload		: "T?i lên",
DlgLnkBtnUpload		: "G?i lên Máy ch?",

DlgLnkTarget		: "H??ng t?i",
DlgLnkTargetFrame	: "&lt;frame&gt;",
DlgLnkTargetPopup	: "&lt;c?a s? popup&gt;",
DlgLnkTargetBlank	: "C?a s? m?i (_blank)",
DlgLnkTargetParent	: "C?a s? cha (_parent)",
DlgLnkTargetSelf	: "Cùng c?a s? (_self)",
DlgLnkTargetTop		: "C?a s? trên cùng(_top)",
DlgLnkTargetFrameName	: "Tên Frame h??ng t?i",
DlgLnkPopWinName	: "Tên C?a s? Popup",
DlgLnkPopWinFeat	: "C?a s? Popup ??c tr?ng",
DlgLnkPopResize		: "Kích th??c thay ??i",
DlgLnkPopLocation	: "Location Bar",	//MISSING
DlgLnkPopMenu		: "Thanh Menu",
DlgLnkPopScroll		: "Thanh cu?n",
DlgLnkPopStatus		: "Thanh tr?ng thái",
DlgLnkPopToolbar	: "Thanh c?ng c?",
DlgLnkPopFullScrn	: "Toàn màn hình (IE)",
DlgLnkPopDependent	: "Dependent (Netscape)",
DlgLnkPopWidth		: "R?ng",
DlgLnkPopHeight		: "Cao",
DlgLnkPopLeft		: "V? trí Trái",
DlgLnkPopTop		: "V? trí Trên",

DlnLnkMsgNoUrl		: "H?y ??a vào Liên k?t URL",
DlnLnkMsgNoEMail	: "H?y ??a vào ??a ch? e-mail",
DlnLnkMsgNoAnchor	: "H?y ch?n m?t Neo",

// Color Dialog
DlgColorTitle		: "Ch?n màu",
DlgColorBtnClear	: "Xoá",
DlgColorHighlight	: "?i?m sáng",
DlgColorSelected	: "?? ch?n",

// Smiley Dialog
DlgSmileyTitle		: "Chèn m?t hình c?m xúc",

// Special Character Dialog
DlgSpecialCharTitle	: "Ch?n ky t? ??c bi?t",

// Table Dialog
DlgTableTitle		: "Thu?c tính b?ng",
DlgTableRows		: "Dòng",
DlgTableColumns		: "C?t",
DlgTableBorder		: "C? ???ng vi?n",
DlgTableAlign		: "Alignment",
DlgTableAlignNotSet	: "<Kh?ng thi?t l?p>",
DlgTableAlignLeft	: "Trái",
DlgTableAlignCenter	: "Gi?a",
DlgTableAlignRight	: "Ph?i",
DlgTableWidth		: "R?ng",
DlgTableWidthPx		: "?i?m",
DlgTableWidthPc		: "%",
DlgTableHeight		: "Cao",
DlgTableCellSpace	: "Kho?ng cách ?",
DlgTableCellPad		: "??m ?",
DlgTableCaption		: "??u ??",

// Table Cell Dialog
DlgCellTitle		: "Thu?c tính ?",
DlgCellWidth		: "R?ng",
DlgCellWidthPx		: "?i?m",
DlgCellWidthPc		: "%",
DlgCellHeight		: "Cao",
DlgCellWordWrap		: "Dàn t?",
DlgCellWordWrapNotSet	: "&lt;Kh?ng thi?t l?p&gt;",
DlgCellWordWrapYes	: "??ng y",
DlgCellWordWrapNo	: "Kh?ng",
DlgCellHorAlign		: "S?p x?p Ngang",
DlgCellHorAlignNotSet	: "&lt;Kh?ng thi?t l?p&gt;",
DlgCellHorAlignLeft	: "Trái",
DlgCellHorAlignCenter	: "Gi?a",
DlgCellHorAlignRight: "Ph?i",
DlgCellVerAlign		: "S?p x?p D?c",
DlgCellVerAlignNotSet	: "&lt;Kh?ng thi?t l?p&gt;",
DlgCellVerAlignTop	: "Trên",
DlgCellVerAlignMiddle	: "Gi?a",
DlgCellVerAlignBottom	: "D??i",
DlgCellVerAlignBaseline	: "Baseline",
DlgCellRowSpan		: "Rows Span",
DlgCellCollSpan		: "Columns Span",
DlgCellBackColor	: "Màu n?n",
DlgCellBorderColor	: "Màu vi?n",
DlgCellBtnSelect	: "Ch?n...",

// Find Dialog
DlgFindTitle		: "Tìm",
DlgFindFindBtn		: "Tìm",
DlgFindNotFoundMsg	: "Chu?i c?n tìm kh?ng th?y.",

// Replace Dialog
DlgReplaceTitle			: "Thay th?",
DlgReplaceFindLbl		: "Tìm gì:",
DlgReplaceReplaceLbl	: "Thay b?ng:",
DlgReplaceCaseChk		: "?úng ch? HOA/th??ng",
DlgReplaceReplaceBtn	: "Thay th?",
DlgReplaceReplAllBtn	: "Thay th? T?t c?",
DlgReplaceWordChk		: "?úng t?",

// Paste Operations / Dialog
PasteErrorPaste	: "An ninh trình duy?t c?a b?n ???c thi?t l?p kh?ng cho phép trình so?n th?o t? ??ng th?c thi l?nh dán. H?y s? d?ng bàn phím cho l?nh này (Ctrl+V).",
PasteErrorCut	: "An ninh trình duy?t c?a b?n ???c thi?t l?p kh?ng cho phép trình so?n th?o t? ??ng th?c thi l?nh c?t. H?y s? d?ng bàn phím cho l?nh này (Ctrl+X).",
PasteErrorCopy	: "An ninh trình duy?t c?a b?n ???c thi?t l?p kh?ng cho phép trình so?n th?o t? ??ng th?c thi l?nh sao chép. H?y s? d?ng bàn phím cho l?nh này (Ctrl+C).",

PasteAsText		: "Dán ky t? ??n thu?n",
PasteFromWord	: "Dán v?i ??nh d?ng Word",

DlgPasteMsg2	: "H?y dán vào trong khung bên d??i, s? d?ng t? h?p phím (<STRONG>Ctrl+V</STRONG>) và nh?n vào n?t <STRONG>??ng y</STRONG>.",
DlgPasteIgnoreFont		: "Ch?p nh?n các ??nh d?ng Font",
DlgPasteRemoveStyles	: "Xoá t?t c? các ??nh d?ng Styles",
DlgPasteCleanBox		: "Xoá s?ch",


// Color Picker
ColorAutomatic	: "T? ??ng",
ColorMoreColors	: "Màu khác...",

// Document Properties
DocProps		: "Thu?c tính tài li?u",

// Anchor Dialog
DlgAnchorTitle		: "Thu?c tính Neo",
DlgAnchorName		: "Tên Neo",
DlgAnchorErrorName	: "H?y ??a vào tên Neo",

// Speller Pages Dialog
DlgSpellNotInDic		: "Kh?ng trong t? ?i?n",
DlgSpellChangeTo		: "Change to",
DlgSpellBtnIgnore		: "B? qua",
DlgSpellBtnIgnoreAll	: "B? qua T?t c?",
DlgSpellBtnReplace		: "Thay th?",
DlgSpellBtnReplaceAll	: "Thay th? T?t c?",
DlgSpellBtnUndo			: "Ph?c h?i l?i",
DlgSpellNoSuggestions	: "- Kh?ng ?? xu?t -",
DlgSpellProgress		: "?ang ti?n hành ki?m tra chính t?...",
DlgSpellNoMispell		: "Hoàn t?t ki?m tra chính t?: Kh?ng có l?i chính t?",
DlgSpellNoChanges		: "Hoàn t?t ki?m tra chính t?: Kh?ng t? nào ???c thay ??i",
DlgSpellOneChange		: "Hoàn t?t ki?m tra chính t?: M?t t? ?? ???c thay ??i",
DlgSpellManyChanges		: "Hoàn t?t ki?m tra chính t?: %1 t? ?? ???c thay ??i",

IeSpellDownload			: "Ch?c n?ng ki?m tra chính t? ch?a ???c cài ??t. B?n có t?i v? ngay bay gi??",

// Button Dialog
DlgButtonText	: "Text (Value)",
DlgButtonType	: "Ki?u",

// Checkbox and Radio Button Dialogs
DlgCheckboxName		: "Tên",
DlgCheckboxValue	: "Giá tr?",
DlgCheckboxSelected	: "?? ch?n",

// Form Dialog
DlgFormName		: "Tên",
DlgFormAction	: "Action",
DlgFormMethod	: "Ph??ng th?c",

// Select Field Dialog
DlgSelectName		: "Tên",
DlgSelectValue		: "Giá tr?",
DlgSelectSize		: "Kích c?",
DlgSelectLines		: "dòng",
DlgSelectChkMulti	: "Ch?p nh?n ch?n nhi?u",
DlgSelectOpAvail	: "Available Options",
DlgSelectOpText		: "Text",
DlgSelectOpValue	: "Giá tr?",
DlgSelectBtnAdd		: "Thêm",
DlgSelectBtnModify	: "Thay ??i",
DlgSelectBtnUp		: "Lên",
DlgSelectBtnDown	: "Xu?ng",
DlgSelectBtnSetValue : "Giá tr? ???c ch?n",
DlgSelectBtnDelete	: "Xoá",

// Textarea Dialog
DlgTextareaName	: "Tên",
DlgTextareaCols	: "C?t",
DlgTextareaRows	: "Dòng",

// Text Field Dialog
DlgTextName			: "Tên",
DlgTextValue		: "Giá tr?",
DlgTextCharWidth	: "R?ng",
DlgTextMaxChars		: "S? Ky t? t?i ?a",
DlgTextType			: "Ki?u",
DlgTextTypeText		: "Ky t?",
DlgTextTypePass		: "M?t kh?u",

// Hidden Field Dialog
DlgHiddenName	: "Tên",
DlgHiddenValue	: "Giá tr?",

// Bulleted List Dialog
BulletedListProp	: "Thu?c tính Danh sách Bulleted",
NumberedListProp	: "Thu?c tính Danh sách S?",
DlgLstType			: "Ki?u",
DlgLstTypeCircle	: "Tròn",
DlgLstTypeDisc		: "Disc",	//MISSING
DlgLstTypeSquare	: "Vu?ng",
DlgLstTypeNumbers	: "S? (1, 2, 3)",
DlgLstTypeLCase		: "Ch? cái th??ng (a, b, c)",
DlgLstTypeUCase		: "Ch? cái hoa (A, B, C)",
DlgLstTypeSRoman	: "S? LaMa th??ng (i, ii, iii)",
DlgLstTypeLRoman	: "S? LaMa hoa (I, II, III)",

// Document Properties Dialog
DlgDocGeneralTab	: "Toàn th?",
DlgDocBackTab		: "N?n",
DlgDocColorsTab		: "Màu s?c và Biên",
DlgDocMetaTab		: "Meta Data",

DlgDocPageTitle		: "Tiêu ?? Trang",
DlgDocLangDir		: "???ng d?n Ng?n Ng?",
DlgDocLangDirLTR	: "Trái sang Ph?i (LTR)",
DlgDocLangDirRTL	: "Ph?i sang Trái (RTL)",
DlgDocLangCode		: "M? Ng?n ng?",
DlgDocCharSet		: "Character Set Encoding",
DlgDocCharSetOther	: "Other Character Set Encoding",

DlgDocDocType		: "Ki?u ?? m?c Tài li?u",
DlgDocDocTypeOther	: "Ki?u ?? m?c Tài li?u khác",
DlgDocIncXHTML		: "Bao g?m c? ??nh ngh?a XHTML",
DlgDocBgColor		: "Màu n?n",
DlgDocBgImage		: "Background Image URL",
DlgDocBgNoScroll	: "Kh?ng cu?n n?n",
DlgDocCText			: "Text",
DlgDocCLink			: "Liên k?t",
DlgDocCVisited		: "Liên k?t ?? vi?ng th?m",
DlgDocCActive		: "Liên k?t Ho?t ??ng",
DlgDocMargins		: "Biên c?a Trang",
DlgDocMaTop			: "Trên",
DlgDocMaLeft		: "Trái",
DlgDocMaRight		: "Ph?i",
DlgDocMaBottom		: "D??i",
DlgDocMeIndex		: "Document Indexing Keywords (comma separated)",
DlgDocMeDescr		: "M? t? tài li?u",
DlgDocMeAuthor		: "Tác gi?",
DlgDocMeCopy		: "B?n quy?n",
DlgDocPreview		: "Xem tr??c",

// Templates Dialog
Templates			: "M?u d?ng s?n",
DlgTemplatesTitle	: "N?i dung M?u d?ng s?n",
DlgTemplatesSelMsg	: "Please select the template to open in the editor<br>(the actual contents will be lost):",
DlgTemplatesLoading	: "?ang n?p Danh sách M?u d?ng s?n. Xin h?y ch?...",
DlgTemplatesNoTpl	: "(Kh?ng có M?u d?ng s?n nào ???c ??nh ngh?a)",

// About Dialog
DlgAboutAboutTab	: "Gi?i thi?u",
DlgAboutBrowserInfoTab	: "Th?ng tin trình duy?t",
DlgAboutVersion		: "phiên b?n",
DlgAboutLicense		: "Licensed under the terms of the GNU Lesser General Public License",
DlgAboutInfo		: "Th?ng tin thêm h?y ??n"
}