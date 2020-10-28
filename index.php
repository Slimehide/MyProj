<?php 
	require_once("components/session.php");
	require_once("components/head.php");
?>
<body>
	<?php
		require_once("components/header.php");
		require_once("components/main__menu.php");
		require_once("components/welcome.php");
	 ?>
	 <div class="main__content">
	 	<div class="container">
	 		<div class="outer__main">
	 			<div class="main">
	 				
			 	</div>
			 	<div class="side">
			 		<?php 
			 			require_once("components/quick_filter.php");
			 			require_once("components/top_side.php");
			 			require_once("components/recently_added.php");
			 		?>
			 	</div>
	 		</div>
	 	</div>
	 </div>

	 <?php 
	 	require_once("components/footer.php");
	 ?>
	 <?php
	 	require_once("components/bottomscripts.php");
	 ?>
</body>