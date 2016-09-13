<div class="footer">
	<div class="container">
		<h2><a href="index.html">Larasocial</a></h2>
		<p>Social Network Built on Laravel 5.3 | Mohammed Manahi</p>
		<ul>
			<li><a class="face1" href="#"></a></li>
			<li><a class="face2"href="#"></a></li>
			<li><a class="face3" href="#"></a></li>
			<li><a class="face4" href="#"></a></li>
		</ul>
	</div>
</div>

<script type="text/javascript" src="{{URL::asset('/assets/js/jquery.min.js')}}"></script>
<script src="{{URL::asset('/assets/js/bootstrap.js')}}"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script>
$(document).ready(function () {
	//Initialize tooltips
	$('.nav-tabs > li a[title]').tooltip();

	//Wizard
	$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

		var $target = $(e.target);

		if ($target.parent().hasClass('disabled')) {
			return false;
		}
	});

	$(".next-step").click(function (e) {

		var $active = $('.wizard .nav-tabs li.active');
		$active.next().removeClass('disabled');
		nextTab($active);

	});
	$(".prev-step").click(function (e) {

		var $active = $('.wizard .nav-tabs li.active');
		prevTab($active);

	});
});

function nextTab(elem) {
	$(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
	$(elem).prev().find('a[data-toggle="tab"]').click();
}
</script>

<script>
$( "span.menu" ).click(function() {
	$( "ul.nav1" ).slideToggle( 300, function() {
		// Animation complete.
	});
});
</script>
<!-- /script-for-menu -->
</div>
<!-- start search-->
<!-- search-scripts -->
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script>
new UISearch( document.getElementById( 'sb-search' ) );
</script>
<!-- //search-scripts -->
