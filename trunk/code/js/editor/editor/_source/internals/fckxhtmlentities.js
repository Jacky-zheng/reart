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
 * File Name: fckxhtmlentities.js
 * 	This file define the HTML entities handled by the editor.
 * 
 * File Authors:
 * 		Frederico Caldeira Knabben (fredck@fckeditor.net)
 */

var FCKXHtmlEntities = new Object() ;

if ( FCKConfig.ProcessHTMLEntities )
{
	FCKXHtmlEntities.Entities = {
		// Latin-1 Entities
		'?':'nbsp',
		'?':'iexcl',
		'￠':'cent',
		'￡':'pound',
		'¤':'curren',
		'￥':'yen',
		'|':'brvbar',
		'§':'sect',
		'¨':'uml',
		'?':'copy',
		'a':'ordf',
		'?':'laquo',
		'?':'not',
		'-':'shy',
		'?':'reg',
		'ˉ':'macr',
		'°':'deg',
		'±':'plusmn',
		'2':'sup2',
		'3':'sup3',
		'′':'acute',
		'μ':'micro',
		'?':'para',
		'·':'middot',
		'?':'cedil',
		'1':'sup1',
		'o':'ordm',
		'?':'raquo',
		'?':'frac14',
		'?':'frac12',
		'?':'frac34',
		'?':'iquest',
		'×':'times',
		'÷':'divide',

		// Symbols and Greek Letters 

		'?':'fnof',
		'?':'bull',
		'…':'hellip',
		'′':'prime',
		'″':'Prime',
		'￣':'oline',
		'?':'frasl',
		'?':'weierp',
		'?':'image',
		'?':'real',
		'?':'trade',
		'?':'alefsym',
		'←':'larr',
		'↑':'uarr',
		'→':'rarr',
		'↓':'darr',
		'?':'harr',
		'?':'crarr',
		'?':'lArr',
		'?':'uArr',
		'?':'rArr',
		'?':'dArr',
		'?':'hArr',
		'?':'forall',
		'?':'part',
		'?':'exist',
		'?':'empty',
		'?':'nabla',
		'∈':'isin',
		'?':'notin',
		'?':'ni',
		'∏':'prod',
		'∑':'sum',
		'?':'minus',
		'?':'lowast',
		'√':'radic',
		'∝':'prop',
		'∞':'infin',
		'∠':'ang',
		'∧':'and',
		'∨':'or',
		'∩':'cap',
		'∪':'cup',
		'∫':'int',
		'∴':'there4',
		'～':'sim',
		'?':'cong',
		'≈':'asymp',
		'≠':'ne',
		'≡':'equiv',
		'≤':'le',
		'≥':'ge',
		'?':'sub',
		'?':'sup',
		'?':'nsub',
		'?':'sube',
		'?':'supe',
		'⊕':'oplus',
		'?':'otimes',
		'⊥':'perp',
		'?':'sdot',
		'?':'loz',
		'?':'spades',
		'?':'clubs',
		'?':'hearts',
		'?':'diams',

		// Other Special Characters 

		'"':'quot',
	//	'&':'amp',		// This entity is automatically handled by the XHTML parser.
	//	'<':'lt',		// This entity is automatically handled by the XHTML parser.
	//	'>':'gt',		// This entity is automatically handled by the XHTML parser.
		'?':'circ',
		'?':'tilde',
		'?':'ensp',
		'?':'emsp',
		'?':'thinsp',
		'?':'zwnj',
		'?':'zwj',
		'?':'lrm',
		'?':'rlm',
		'–':'ndash',
		'—':'mdash',
		'‘':'lsquo',
		'’':'rsquo',
		'?':'sbquo',
		'“':'ldquo',
		'”':'rdquo',
		'?':'bdquo',
		'?':'dagger',
		'?':'Dagger',
		'‰':'permil',
		'?':'lsaquo',
		'?':'rsaquo',
		'€':'euro'
	} ;

	FCKXHtmlEntities.Chars = '' ;

	// Process Base Entities.
	for ( var e in FCKXHtmlEntities.Entities )
		FCKXHtmlEntities.Chars += e ;

	// Include Latin Letters Entities.
	if ( FCKConfig.IncludeLatinEntities )
	{
		var oEntities = {
			'à':'Agrave',
			'á':'Aacute',
			'?':'Acirc',
			'?':'Atilde',
			'?':'Auml',
			'?':'Aring',
			'?':'AElig',
			'?':'Ccedil',
			'è':'Egrave',
			'é':'Eacute',
			'ê':'Ecirc',
			'?':'Euml',
			'ì':'Igrave',
			'í':'Iacute',
			'?':'Icirc',
			'?':'Iuml',
			'D':'ETH',
			'?':'Ntilde',
			'ò':'Ograve',
			'ó':'Oacute',
			'?':'Ocirc',
			'?':'Otilde',
			'?':'Ouml',
			'?':'Oslash',
			'ù':'Ugrave',
			'ú':'Uacute',
			'?':'Ucirc',
			'ü':'Uuml',
			'Y':'Yacute',
			'T':'THORN',
			'?':'szlig',
			'à':'agrave',
			'á':'aacute',
			'a':'acirc',
			'?':'atilde',
			'?':'auml',
			'?':'aring',
			'?':'aelig',
			'?':'ccedil',
			'è':'egrave',
			'é':'eacute',
			'ê':'ecirc',
			'?':'euml',
			'ì':'igrave',
			'í':'iacute',
			'?':'icirc',
			'?':'iuml',
			'e':'eth',
			'?':'ntilde',
			'ò':'ograve',
			'ó':'oacute',
			'?':'ocirc',
			'?':'otilde',
			'?':'ouml',
			'?':'oslash',
			'ù':'ugrave',
			'ú':'uacute',
			'?':'ucirc',
			'ü':'uuml',
			'y':'yacute',
			't':'thorn',
			'?':'yuml',
			'?':'OElig',
			'?':'oelig',
			'?':'Scaron',
			'?':'scaron',
			'?':'Yuml'
		} ; 
		
		for ( var e in oEntities )
		{
			FCKXHtmlEntities.Entities[ e ] = oEntities[ e ] ;
			FCKXHtmlEntities.Chars += e ;
		}
		
		oEntities = null ;
	}

	// Include Greek Letters Entities.
	if ( FCKConfig.IncludeGreekEntities )
	{
		var oEntities = {
			'Α':'Alpha',
			'Β':'Beta',
			'Γ':'Gamma',
			'Δ':'Delta',
			'Ε':'Epsilon',
			'Ζ':'Zeta',
			'Η':'Eta',
			'Θ':'Theta',
			'Ι':'Iota',
			'Κ':'Kappa',
			'Λ':'Lambda',
			'Μ':'Mu',
			'Ν':'Nu',
			'Ξ':'Xi',
			'Ο':'Omicron',
			'Π':'Pi',
			'Ρ':'Rho',
			'Σ':'Sigma',
			'Τ':'Tau',
			'Υ':'Upsilon',
			'Φ':'Phi',
			'Χ':'Chi',
			'Ψ':'Psi',
			'Ω':'Omega',
			'α':'alpha',
			'β':'beta',
			'γ':'gamma',
			'δ':'delta',
			'ε':'epsilon',
			'ζ':'zeta',
			'η':'eta',
			'θ':'theta',
			'ι':'iota',
			'κ':'kappa',
			'λ':'lambda',
			'μ':'mu',
			'ν':'nu',
			'ξ':'xi',
			'ο':'omicron',
			'π':'pi',
			'ρ':'rho',
			'?':'sigmaf',
			'σ':'sigma',
			'τ':'tau',
			'υ':'upsilon',
			'φ':'phi',
			'χ':'chi',
			'ψ':'psi',
			'ω':'omega'
		} ;

		for ( var e in oEntities )
		{
			FCKXHtmlEntities.Entities[ e ] = oEntities[ e ] ;
			FCKXHtmlEntities.Chars += e ;
		}

		oEntities = null ;
	}

	// Create and Compile the Regex used to separate the entities from the text.
	FCKXHtmlEntities.EntitiesRegex = new RegExp('','') ;
	FCKXHtmlEntities.EntitiesRegex.compile( '[' + FCKXHtmlEntities.Chars + ']|[^' + FCKXHtmlEntities.Chars + ']+', 'g' ) ;
}
else
{
	// Even if we are not processing the entities, we must respect the &nbsp;.
	FCKXHtmlEntities.Entities = { '?':'nbsp' } ;
	FCKXHtmlEntities.EntitiesRegex = /[?]|[^?]+/g ;
}