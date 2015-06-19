<script>
$(function () {	
	$("#city").geocomplete({
	  details: ".geo-details",
	  detailsAttribute: "data-geo",
types: ['(cities)']
	});
});
</script>