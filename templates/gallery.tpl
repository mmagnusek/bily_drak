{include file="header.tpl"}
<h3>Jak to u nás vypadá</h3>
<div id="gallery">
  <a rel="gallery_group" href="gallery/01.jpg" title=""><img alt="" src="gallery/01_s.jpg" /></a>
  <a rel="gallery_group" href="gallery/02.jpg" title=""><img alt="" src="gallery/02_s.jpg" /></a>
  <a rel="gallery_group" href="gallery/03.jpg" title=""><img alt="" src="gallery/03_s.jpg" /></a>
  <a rel="gallery_group" href="gallery/04.jpg" title=""><img alt="" src="gallery/04_s.jpg" /></a>
  <a rel="gallery_group" href="gallery/dymka.jpg" title=""><img alt="" src="gallery/dymka_s.jpg" /></a>
  <a rel="gallery_group" href="gallery/degustace01.jpg" title=""><img alt="" src="gallery/degustace01_s.jpg" /></a>
  <a rel="gallery_group" href="gallery/degustace02.jpg" title=""><img alt="" src="gallery/degustace02_s.jpg" /></a>
</div>
<script type="text/JavaScript" src="jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />

<script language="JavaScript" type="text/JavaScript" smarty>
$(document).ready(function() {
  $("a[rel=gallery_group]").fancybox({
  	'transitionIn'		: 'none',
  	'transitionOut'		: 'none',
  	'titlePosition' 	: 'over',
  	'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
  		return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
  	}
  });
});
</script>

{include file="footer.tpl"}