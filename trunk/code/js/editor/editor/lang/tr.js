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
 * File Name: tr.js
 * 	Turkish language file.
 * 
 * File Authors:
 * 		Bogac Guven (bogacmx@yahoo.com)
 */

var FCKLang =
{
// Language direction : "ltr" (left to right) or "rtl" (right to left).
Dir					: "ltr",

ToolbarCollapse		: "Ara? ?ubugunu Kapat",
ToolbarExpand		: "Ara? ?ubugunu A?",

// Toolbar Items and Context Menu
Save				: "Kaydet",
NewPage				: "Yeni Sayfa",
Preview				: "?n Izleme",
Cut					: "Kes",
Copy				: "Kopyala",
Paste				: "Yapistir",
PasteText			: "Düzyazi Olarak Yapistir",
PasteWord			: "Word'den Yapistir",
Print				: "Yazdir",
SelectAll			: "Tümünü Se?",
RemoveFormat		: "Bi?imi Kaldir",
InsertLinkLbl		: "K?prü",
InsertLink			: "K?prü Ekle/Düzenle",
RemoveLink			: "K?prü Kaldir",
Anchor				: "?apa Ekle/Düzenle",
InsertImageLbl		: "Resim",
InsertImage			: "Resim Ekle/Düzenle",
InsertFlashLbl		: "Flash",
InsertFlash			: "Flash Ekle/Düzenle",
InsertTableLbl		: "Tablo",
InsertTable			: "Tablo Ekle/Düzenle",
InsertLineLbl		: "Satir",
InsertLine			: "Yatay Satir Ekle",
InsertSpecialCharLbl: "?zel Karakter",
InsertSpecialChar	: "?zel Karakter Ekle",
InsertSmileyLbl		: "Ifade",
InsertSmiley		: "Ifade Ekle",
About				: "FCKeditor Hakkinda",
Bold				: "Kalin",
Italic				: "Italik",
Underline			: "Alti ?izgili",
StrikeThrough		: "üstü ?izgili",
Subscript			: "Alt Simge",
Superscript			: "üst Simge",
LeftJustify			: "Sola Dayali",
CenterJustify		: "Ortalanmis",
RightJustify		: "Saga Dayali",
BlockJustify		: "Iki Kenara Yaslanmis",
DecreaseIndent		: "Sekme Azalt",
IncreaseIndent		: "Sekme Arttir",
Undo				: "Geri Al",
Redo				: "Tekrarla",
NumberedListLbl		: "Numarali Liste",
NumberedList		: "Numarali Liste Ekle/Kaldir",
BulletedListLbl		: "Simgeli Liste",
BulletedList		: "Simgeli Liste Ekle/Kaldir",
ShowTableBorders	: "Tablo Kenarlarini G?ster",
ShowDetails			: "Detaylari G?ster",
Style				: "Stil",
FontFormat			: "Bi?im",
Font				: "Yazi Tipi",
FontSize			: "Boyut",
TextColor			: "Yazi Rengi",
BGColor				: "Arka Renk",
Source				: "Kaynak",
Find				: "Bul",
Replace				: "Degistir",
SpellCheck			: "Yazim Denetimi",
UniversalKeyboard	: "Evrensel Klavye",

Form			: "Form",
Checkbox		: "Onay Kutusu",
RadioButton		: "Se?enek Dügmesi",
TextField		: "Metin Girisi",
Textarea		: "?ok Satirli Metin",
HiddenField		: "Gizli Veri",
Button			: "Dügme",
SelectionField	: "Se?im M?nüsü",
ImageButton		: "Resimli Dügme",

// Context Menu
EditLink			: "K?prü Düzenle",
InsertRow			: "Satir Ekle",
DeleteRows			: "Satir Sil",
InsertColumn		: "Sütun Ekle",
DeleteColumns		: "Sütun Sil",
InsertCell			: "Hücre Ekle",
DeleteCells			: "Hücre Sil",
MergeCells			: "Hücreleri Birlestir",
SplitCell			: "Hücre B?l",
CellProperties		: "Hücre ?zellikleri",
TableProperties		: "Tablo ?zellikleri",
ImageProperties		: "Resim ?zellikleri",
FlashProperties		: "Flash ?zellikleri",

AnchorProp			: "?apa ?zellikleri",
ButtonProp			: "Dügme ?zellikleri",
CheckboxProp		: "Onay Kutusu ?zellikleri",
HiddenFieldProp		: "Gizli Veri ?zellikleri",
RadioButtonProp		: "Se?enek Dügmesi ?zellikleri",
ImageButtonProp		: "Resimli Dügme ?zellikleri",
TextFieldProp		: "Metin Girisi ?zellikleri",
SelectionFieldProp	: "Se?im M?nüsü ?zellikleri",
TextareaProp		: "?ok Satirli Metin ?zellikleri",
FormProp			: "Form ?zellikleri",

FontFormats			: "Normal;Bi?imli;Adres;Baslik 1;Baslik 2;Baslik 3;Baslik 4;Baslik 5;Baslik 6;Paragraf (DIV)",

// Alerts and Messages
ProcessingXHTML		: "XHTML isleniyor. Lütfen bekleyin...",
Done				: "Bitti",
PasteWordConfirm	: "Yapistirdiginiz yazi Word'den gelmise benziyor. Yapistirmadan ?nce silmek ister misiniz?",
NotCompatiblePaste	: "Bu komut Internet Explorer 5.5 ve ileriki sürümleri i?in mevcuttur. Temizlenmeden yapistirilmasini ister misiniz ?",
UnknownToolbarItem	: "Bilinmeyen ara? ?ubugu ?gesi \"%1\"",
UnknownCommand		: "Bilinmeyen komut \"%1\"",
NotImplemented		: "Komut uyarlanamadi",
UnknownToolbarSet	: "\"%1\" ara? ?ubugu ?gesi mevcut degil",
NoActiveX			: "You browser's security settings could limit some features of the editor. You must enable the option \"Run ActiveX controls and plug-ins\". You may experience errors and notice missing features.",	//MISSING

// Dialogs
DlgBtnOK			: "Tamam",
DlgBtnCancel		: "Iptal",
DlgBtnClose			: "Kapat",
DlgBtnBrowseServer	: "Sunucuyu Gez",
DlgAdvancedTag		: "Gelismis",
DlgOpOther			: "&lt;Diger&gt;",
DlgInfoTab			: "Bilgi",
DlgAlertUrl			: "Lütfen URL girin",

// General Dialogs Labels
DlgGenNotSet		: "&lt;tanimlanmamis&gt;",
DlgGenId			: "Kimlik",
DlgGenLangDir		: "Lisan Y?nü",
DlgGenLangDirLtr	: "Soldan Saga (LTR)",
DlgGenLangDirRtl	: "Sagdan Sola (RTL)",
DlgGenLangCode		: "Lisan Kodlamasi",
DlgGenAccessKey		: "Erisim Tusu",
DlgGenName			: "Isim",
DlgGenTabIndex		: "Sekme Indeksi",
DlgGenLongDescr		: "Uzun Tanimli URL",
DlgGenClass			: "Stil Klaslari",
DlgGenTitle			: "Danisma Basligi",
DlgGenContType		: "Danisma I?erik Türü",
DlgGenLinkCharset	: "Bagli Kaynak Karakter Gurubu",
DlgGenStyle			: "Stil",

// Image Dialog
DlgImgTitle			: "Resim ?zellikleri",
DlgImgInfoTab		: "Resim Bilgisi",
DlgImgBtnUpload		: "Sunucuya Yolla",
DlgImgURL			: "URL",
DlgImgUpload		: "Karsiya Yükle",
DlgImgAlt			: "Alternatif Yazi",
DlgImgWidth			: "Genislik",
DlgImgHeight		: "Yükseklik",
DlgImgLockRatio		: "Orani Kilitle",
DlgBtnResetSize		: "Boyutu Basa D?ndür",
DlgImgBorder		: "Kenar",
DlgImgHSpace		: "Yatay Bosluk",
DlgImgVSpace		: "Dikey Bosluk",
DlgImgAlign			: "Hizalama",
DlgImgAlignLeft		: "Sol",
DlgImgAlignAbsBottom: "Tam Alti",
DlgImgAlignAbsMiddle: "Tam Ortasi",
DlgImgAlignBaseline	: "Taban ?izgisi",
DlgImgAlignBottom	: "Alt",
DlgImgAlignMiddle	: "Orta",
DlgImgAlignRight	: "Sag",
DlgImgAlignTextTop	: "Yazi Tepeye",
DlgImgAlignTop		: "Tepe",
DlgImgPreview		: "?n Izleme",
DlgImgAlertUrl		: "Lütfen resimin URL'sini yaziniz",
DlgImgLinkTab		: "K?prü",

// Flash Dialog
DlgFlashTitle		: "Flash ?zellikleri",
DlgFlashChkPlay		: "Otomatik Oynat",
DlgFlashChkLoop		: "D?ngü",
DlgFlashChkMenu		: "Flash M?nüsünü Kullan",
DlgFlashScale		: "Boyutland?r",
DlgFlashScaleAll	: "Hepsini G?ster",
DlgFlashScaleNoBorder	: "Kenar Yok",
DlgFlashScaleFit	: "Tam S??d?r",

// Link Dialog
DlgLnkWindowTitle	: "K?prü",
DlgLnkInfoTab		: "K?prü Bilgisi",
DlgLnkTargetTab		: "Hedef",

DlgLnkType			: "K?prü Türü",
DlgLnkTypeURL		: "URL",
DlgLnkTypeAnchor	: "Bu sayfada ?apa",
DlgLnkTypeEMail		: "E-Posta",
DlgLnkProto			: "Protokol",
DlgLnkProtoOther	: "&lt;diger&gt;",
DlgLnkURL			: "URL",
DlgLnkAnchorSel		: "?apa Se?",
DlgLnkAnchorByName	: "?apa Ismi ile",
DlgLnkAnchorById	: "Eleman Id ile",
DlgLnkNoAnchors		: "&lt;Bu dokümanda hi? ?apa yok&gt;",
DlgLnkEMail			: "E-Posta Adresi",
DlgLnkEMailSubject	: "Mesaj Konusu",
DlgLnkEMailBody		: "Mesaj Vücudu",
DlgLnkUpload		: "Karsiya Yükle",
DlgLnkBtnUpload		: "Sunucuya G?nder",

DlgLnkTarget		: "Hedef",
DlgLnkTargetFrame	: "&lt;?er?eve&gt;",
DlgLnkTargetPopup	: "&lt;yeni a?ilan pencere&gt;",
DlgLnkTargetBlank	: "Yeni Pencere(_blank)",
DlgLnkTargetParent	: "Anne Pencere (_parent)",
DlgLnkTargetSelf	: "Kendi Penceresi (_self)",
DlgLnkTargetTop		: "En üst Pencere (_top)",
DlgLnkTargetFrameName	: "Hedef ?er?eve Ismi",
DlgLnkPopWinName	: "Yeni A?ilan Pencere Ismi",
DlgLnkPopWinFeat	: "Yeni A?ilan Pencere ?zellikleri",
DlgLnkPopResize		: "Boyutlandirilabilir",
DlgLnkPopLocation	: "Yer ?ubugu",
DlgLnkPopMenu		: "M?nü ?ubugu",
DlgLnkPopScroll		: "Kaydirma ?ubuklari",
DlgLnkPopStatus		: "Statü ?ubugu",
DlgLnkPopToolbar	: "Ara? ?ubugu",
DlgLnkPopFullScrn	: "Tam Ekran (IE)",
DlgLnkPopDependent	: "Bagli-Dependent- (Netscape)",
DlgLnkPopWidth		: "Genislik",
DlgLnkPopHeight		: "Yükseklik",
DlgLnkPopLeft		: "Sola G?re Pozisyon",
DlgLnkPopTop		: "Yukariya G?re Pozisyon",

DlnLnkMsgNoUrl		: "Lütfen k?prü URL'sini yazin",
DlnLnkMsgNoEMail	: "Lütfen E-posta adresini yazin",
DlnLnkMsgNoAnchor	: "Lütfen bir ?apa se?in",

// Color Dialog
DlgColorTitle		: "Renk Se?",
DlgColorBtnClear	: "Temizle",
DlgColorHighlight	: "Belirle",
DlgColorSelected	: "Se?ilmis",

// Smiley Dialog
DlgSmileyTitle		: "Ifade Ekle",

// Special Character Dialog
DlgSpecialCharTitle	: "?zel Karakter Se?",

// Table Dialog
DlgTableTitle		: "Tablo ?zellikleri",
DlgTableRows		: "Satirlar",
DlgTableColumns		: "Sütunlar",
DlgTableBorder		: "Kenar Kalinligi",
DlgTableAlign		: "Hizalama",
DlgTableAlignNotSet	: "<Tanimlanmamis>",
DlgTableAlignLeft	: "Sol",
DlgTableAlignCenter	: "Merkez",
DlgTableAlignRight	: "Sag",
DlgTableWidth		: "Genislik",
DlgTableWidthPx		: "piksel",
DlgTableWidthPc		: "yüzde",
DlgTableHeight		: "Yükseklik",
DlgTableCellSpace	: "Izgara kalinligi",
DlgTableCellPad		: "Izgara yazi arasi",
DlgTableCaption		: "Baslik",

// Table Cell Dialog
DlgCellTitle		: "Hücre ?zellikleri",
DlgCellWidth		: "Genislik",
DlgCellWidthPx		: "piksel",
DlgCellWidthPc		: "yüzde",
DlgCellHeight		: "Yükseklik",
DlgCellWordWrap		: "S?zcük Kaydir",
DlgCellWordWrapNotSet	: "&lt;Tanimlanmamis&gt;",
DlgCellWordWrapYes	: "Evet",
DlgCellWordWrapNo	: "Hayir",
DlgCellHorAlign		: "Yatay Hizalama",
DlgCellHorAlignNotSet	: "&lt;Tanimlanmamis&gt;",
DlgCellHorAlignLeft	: "Sol",
DlgCellHorAlignCenter	: "Merkez",
DlgCellHorAlignRight: "Sag",
DlgCellVerAlign		: "Dikey Hizalama",
DlgCellVerAlignNotSet	: "&lt;Tanimlanmamis&gt;",
DlgCellVerAlignTop	: "Tepe",
DlgCellVerAlignMiddle	: "Orta",
DlgCellVerAlignBottom	: "Alt",
DlgCellVerAlignBaseline	: "Taban ?izgisi",
DlgCellRowSpan		: "Satir Kapla",
DlgCellCollSpan		: "Sütun Kapla",
DlgCellBackColor	: "Arka Plan Rengi",
DlgCellBorderColor	: "Kenar Rengi",
DlgCellBtnSelect	: "Se?...",

// Find Dialog
DlgFindTitle		: "Bul",
DlgFindFindBtn		: "Bul",
DlgFindNotFoundMsg	: "Belirtilen yazi bulunamadi.",

// Replace Dialog
DlgReplaceTitle			: "Degistir",
DlgReplaceFindLbl		: "Aranan:",
DlgReplaceReplaceLbl	: "Bunla degistir:",
DlgReplaceCaseChk		: "Büyük/kü?ük harf duyarli",
DlgReplaceReplaceBtn	: "Degistir",
DlgReplaceReplAllBtn	: "Tümünü Degistir",
DlgReplaceWordChk		: "Kelimenin tamami uysun",

// Paste Operations / Dialog
PasteErrorPaste	: "Gezgin yaziliminizin güvenlik ayarlari edit?rün otomatik yapistirma islemine izin vermiyor. Islem i?in (Ctrl+V) tuslarini kullanin.",
PasteErrorCut	: "Gezgin yaziliminizin güvenlik ayarlari edit?rün otomatik kesme islemine izin vermiyor. Islem i?in (Ctrl+X) tuslarini kullanin.",
PasteErrorCopy	: "Gezgin yaziliminizin güvenlik ayarlari edit?rün otomatik kopyalama islemine izin vermiyor. Islem i?in (Ctrl+C) tuslarini kullanin.",

PasteAsText		: "Düz Metin Olarak Yapistir",
PasteFromWord	: "Word'den yapistir",

DlgPasteMsg2	: "Please paste inside the following box using the keyboard (<STRONG>Ctrl+V</STRONG>) and hit <STRONG>OK</STRONG>.",	//MISSING
DlgPasteIgnoreFont		: "Yaz? Tipi tan?mlar?n? yoksay",
DlgPasteRemoveStyles	: "Sitil Tan?mlar?n? ??kar",
DlgPasteCleanBox		: "Temizlik Kutusu",


// Color Picker
ColorAutomatic	: "Otomatik",
ColorMoreColors	: "Diger renkler...",

// Document Properties
DocProps		: "Doküman ?zellikleri",

// Anchor Dialog
DlgAnchorTitle		: "?apa ?zellikleri",
DlgAnchorName		: "?apa Ismi",
DlgAnchorErrorName	: "Lütfen ?apa i?in isim giriniz",

// Speller Pages Dialog
DlgSpellNotInDic		: "S?zlükte Yok",
DlgSpellChangeTo		: "Suna degistir:",
DlgSpellBtnIgnore		: "Yoksay",
DlgSpellBtnIgnoreAll	: "Tümünü Yoksay",
DlgSpellBtnReplace		: "Degistir",
DlgSpellBtnReplaceAll	: "Tümünü Degistir",
DlgSpellBtnUndo			: "Geri Al",
DlgSpellNoSuggestions	: "- ?neri Yok -",
DlgSpellProgress		: "Yazim denetimi islemde...",
DlgSpellNoMispell		: "Yazim denetimi tamamlandi: Yanlis yazima raslanmadi",
DlgSpellNoChanges		: "Yazim denetimi tamamlandi: Hi?bir kelime degistirilmedi",
DlgSpellOneChange		: "Yazim denetimi tamamlandi: Bir kelime degistirildi",
DlgSpellManyChanges		: "Yazim denetimi tamamlandi: %1 kelime degistirildi",

IeSpellDownload			: "Yazim denetimi yüklenmemis. Simdi yüklemek ister misiniz?",

// Button Dialog
DlgButtonText	: "Metin (Deger)",
DlgButtonType	: "Tip",

// Checkbox and Radio Button Dialogs
DlgCheckboxName		: "Isim",
DlgCheckboxValue	: "Deger",
DlgCheckboxSelected	: "Se?ili",

// Form Dialog
DlgFormName		: "Isim",
DlgFormAction	: "Islem",
DlgFormMethod	: "Metod",

// Select Field Dialog
DlgSelectName		: "Isim",
DlgSelectValue		: "Deger",
DlgSelectSize		: "Boyut",
DlgSelectLines		: "satir",
DlgSelectChkMulti	: "?oklu se?ime izin ver",
DlgSelectOpAvail	: "Mevcut Se?enekler",
DlgSelectOpText		: "Metin",
DlgSelectOpValue	: "Deger",
DlgSelectBtnAdd		: "Ekle",
DlgSelectBtnModify	: "Düzenle",
DlgSelectBtnUp		: "Yukari",
DlgSelectBtnDown	: "Asagi",
DlgSelectBtnSetValue : "Se?ili deger olarak ata",
DlgSelectBtnDelete	: "Sil",

// Textarea Dialog
DlgTextareaName	: "Isim",
DlgTextareaCols	: "Sütunlar",
DlgTextareaRows	: "Satirlar",

// Text Field Dialog
DlgTextName			: "Isim",
DlgTextValue		: "Deger",
DlgTextCharWidth	: "Karakter Genisligi",
DlgTextMaxChars		: "En Fazla Karakter",
DlgTextType			: "Tip",
DlgTextTypeText		: "Metin",
DlgTextTypePass		: "Sifre",

// Hidden Field Dialog
DlgHiddenName	: "Isim",
DlgHiddenValue	: "Deger",

// Bulleted List Dialog
BulletedListProp	: "Simgeli Liste ?zellikleri",
NumberedListProp	: "Numarali Liste ?zellikleri",
DlgLstType			: "Tip",
DlgLstTypeCircle	: "?ember",
DlgLstTypeDisc		: "Disc",	//MISSING
DlgLstTypeSquare	: "Kare",
DlgLstTypeNumbers	: "Sayilar (1, 2, 3)",
DlgLstTypeLCase		: "Kü?ük Harfler (a, b, c)",
DlgLstTypeUCase		: "Büyük Harfler (A, B, C)",
DlgLstTypeSRoman	: "Kü?ük Romen Rakamlari (i, ii, iii)",
DlgLstTypeLRoman	: "Büyük Romen Rakamlari (I, II, III)",

// Document Properties Dialog
DlgDocGeneralTab	: "Genel",
DlgDocBackTab		: "Arka Plan",
DlgDocColorsTab		: "Renler ve Mesafeler",
DlgDocMetaTab		: "Tanim Bilgisi (Meta)",

DlgDocPageTitle		: "Sayfa Basligi",
DlgDocLangDir		: "Lisan Y?nü",
DlgDocLangDirLTR	: "Soldan Saga (LTR)",
DlgDocLangDirRTL	: "Sagdan Sola (RTL)",
DlgDocLangCode		: "Lisan Kodu",
DlgDocCharSet		: "Karakter Kümesi Kodlamasi",
DlgDocCharSetOther	: "Diger Karakter Kümesi Kodlamasi",

DlgDocDocType		: "Doküman Türü Basligi",
DlgDocDocTypeOther	: "Diger Doküman Türü Basligi",
DlgDocIncXHTML		: "XHTML Bildirimlerini Dahil Et",
DlgDocBgColor		: "Arka Plan Rengi",
DlgDocBgImage		: "Arka Plan Resim URLsi",
DlgDocBgNoScroll	: "Sabit Arka Plan",
DlgDocCText			: "Metin",
DlgDocCLink			: "K?prü",
DlgDocCVisited		: "G?rülmüs K?prü",
DlgDocCActive		: "Aktif K?prü",
DlgDocMargins		: "Kenar Bosluklari",
DlgDocMaTop			: "Tepe",
DlgDocMaLeft		: "Sol",
DlgDocMaRight		: "Sag",
DlgDocMaBottom		: "Alt",
DlgDocMeIndex		: "Doküman Indeksleme Anahtar Kelimeleri (virgülle ayrilmis)",
DlgDocMeDescr		: "Doküman Tanimi",
DlgDocMeAuthor		: "Yazar",
DlgDocMeCopy		: "Telif",
DlgDocPreview		: "?n Izleme",

// Templates Dialog
Templates			: "Düzenler",
DlgTemplatesTitle	: "??erik Düzenleri",
DlgTemplatesSelMsg	: "Edit?rde a?mak i?in lütfen bir düzen se?in.<br>(hali haz?rdaki i?erik kaybolacakt?r.):",
DlgTemplatesLoading	: "Düzenler listesi yüklenmekte. Lütfen bekleyiniz...",
DlgTemplatesNoTpl	: "(Belirli bir düzen se?ilmedi)",

// About Dialog
DlgAboutAboutTab	: "Hakkinda",
DlgAboutBrowserInfoTab	: "Gezgin Bilgisi",
DlgAboutVersion		: "versiyon",
DlgAboutLicense		: "GNU Kisitli Kamu Lisansi (LGPL) kosullari altinda lisanslanmistir",
DlgAboutInfo		: "Daha fazla bilgi i?in:"
}