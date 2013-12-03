	<div class = "row-fluid" >
		<div class = "span10 offset1" style = "background-color:none;border:1px solid;border-color:#d4d2d3;border-top-style:none">
				<div class="span3">Column 1</div>
				<div class="span2">Column 2</div>
				<div class="span2">Column 3</div>
				<div class="span2">Column 4</div>
				<div class="span2">Column 5</div>
			
		</div>	
	</div>	

</div>
			<div style = "clear:both"></div>		
		<div id="push"></div>
	</div>  

<script type = "text/javascript">
$(document).ready(function(e){
	$('img[usemap]').rwdImageMaps();

	$('area').on('click',function(){
		alert($(this).attr('alt') + 'clicked');
	});	
});
</script>