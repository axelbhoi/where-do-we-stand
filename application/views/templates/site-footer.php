	<div id="footer" style = "height:145px;background-color:#1e252e;margin-top:10px">
		<div style = "float:left;width:25%;height:145px;">
			<div style = "float:right;margin-right:25px;margin-top:60px">
				<img src = "<?php echo base_url();?>img/face.png" />
				<img src = "<?php echo base_url();?>img/twitter.png" />				
			</div>
		</div>

		<div class = "vertical_line"></div>

		<div style = "float:left;width:20%;height:145px;display:table">
			<div style = "display:table-cell;vertical-align:middle">
				<a href = "#"><span class = "desktop-view">About</span></a><br>
				<a href = "#"><span class = "desktop-view">How this site works</span></a><br>
				<a href = "#"><span class = "desktop-view">Contact</span></a><br>
				<a href = "#"><span class = "desktop-view">Terms of Service</span></a>
			</div>
		</div>	

		<div class = "vertical_line"></div>

		<div style = "float:left;width:20%;height:145px;display:table">
			<div style = "display:table-cell;vertical-align:middle">
				<a href = "#"><span class = "desktop-view">Most Recent</span></a><br>
				<a href = "#"><span class = "desktop-view">Highest Ranked</span></a><br>
				<a href = "#"><span class = "desktop-view">Most Commented</span></a><br>
				<a href = "#"><span class = "desktop-view">Random</span></a>
			</div>
		</div>	

		<div class = "vertical_line"></div>

		<div style = "float:left;width:30%;height:145px;display:table">
			<div style = "display:table-cell;vertical-align:middle">
				<a href = "#"><span class = "desktop-view">Friends & Family</span></a><br>
				<a href = "#"><span class = "desktop-view">Health & Self</span></a><br>
				<a href = "#"><span class = "desktop-view">Others</span></a><br>
				<a href = "#"><span class = "desktop-view">Politics & Current Events</span></a>
			</div>
			<div style = "display:table-cell;vertical-align:middle">
				<a href = "#"><span class = "desktop-view">Religion</span></a><br>
				<a href = "#"><span class = "desktop-view">Science & Tech</span></a><br>
				<a href = "#"><span class = "desktop-view">Sex & Love</span></a><br>
			</div>			
		</div>		

	</div>
		<!-- Scripts -->
		<?php 
			foreach($scripts as $script) {
					
				?>
				<script type="text/javascript" src="<?php echo base_url().'js/'.$script; ?>.js"></script>
				<?php
			}
		?>
</body>
</html>		
