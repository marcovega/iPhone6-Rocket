// Including the styles for responsive iPhone 6 Portrait
$("head").append('<link href="https://www.marcovega.co/bonativo/bonativo.css" rel="stylesheet" type="text/css" />');
	
// Making the mobile filter
$('#catalog-products').before('<div id="category-menu-mobile"></div>');
$('#category-menu-mobile').html('<a class="filter" href="#"><span class="fa fa-filter"></span> Filter</a>');

$("head").append('<meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1">');

// Making the mobile categories
$('#categories').append('<a id="menu-mobile" href="#"><span class="fa fa-ellipsis-v"></span> Produktkategorien</a>');

// Inject sidr
var element_sidr = document.createElement("script");element_sidr.src = "https://www.marcovega.co/bonativo/jquery.sidr.min.js";element_sidr.type="text/javascript";document.getElementsByTagName("head")[0].appendChild(element_sidr);

// Let's wait to load Sidr Plugin and execute it in 3 seconds (hopefully it loaded in 3 seconds, hah!)
setTimeout(function(){
	$('#category-menu-mobile .filter').sidr({
	  name: 'sidr-filter',
	  side: 'right',
	  source: '#category-menu',
	  body: 'article'
	  
	});
	
	$('#menu-mobile').sidr({
	  name: 'sidr-menu',
	  side: 'left',
	  source: '#categories nav ul',
	  body: 'article'
	  
	});
}, 3000);

