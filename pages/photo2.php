<?php
    include "../db/f-connect.php";
    include "../db/f-script.php";
?>

	<!-- The Menu -->
	<!-- <link href="../public/stylesheets_gallery/styles.css" rel="stylesheet" type="text/css"> -->
	<link rel="stylesheet" href="../public/pe-icon-7-stroke/css/pe-icon-7-stroke.css">

	<!-- Optional - Adds useful class to manipulate icon font display -->
	<!-- <link rel="stylesheet" href="../public/pe-icon-7-stroke/css/helper.css"> -->
<!-- <script src="libs/modernizr.js" type="text/javascript"></script> -->
<link rel="stylesheet" href="../public/css_gallery/sass-compiled.css" />
<!-- Custom Theme files -->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->

<!-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> -->
<!--webfont-->
<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,300,600,800,700' rel='stylesheet' type='text/css'> -->

<!-- </head> -->
<!-- <body> -->
<!---->
<!-- <div class="header"> -->
	 <!-- <div class="container"> -->

		 <div class="top-menu">
			<span class="menu"> </span>
			<ul>	
				<li><a href="../admin/admin_dotc/login.php">Admin panel</a></li>			 
			</ul>
		 </div>
		 <!-- <div class="clearfix"></div> -->
			 <!--script-nav-->
		 <!-- <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>		   -->
	 <!-- </div> -->
<!-- </div> -->
<!--header-->
<!-- <div class="gallery-head"> -->
	 <!-- <div class="gallery-info"> -->
		 <!-- <div class="container">
			 <a href="gallery.php">Home/</a><h2>Gallery</h2>			 
		 </div>		  -->
	 <!-- </div> -->
	 <!-- <div class="gallery-text">
		 
	 </div> -->

	 <!-- <div class="container"> -->
        
		<section class="wrapper cl" >
			<?php  
			if (isset($_GET["page"])) { $page = $_GET["page"]; } else { $page=1; };
			$start_from = ($page-1) * 12;
			$sql = "SELECT * FROM tbl_album where status='process' ORDER BY albumid DESC LIMIT $start_from, 12";
			$rs_result = mysqli_query ($con, $sql);

			####### Fetch Results From Table ########
		 
			while ($row = mysqli_fetch_assoc($rs_result)) 
			{
			$aimage=$row['image'];
			$aid=$row['albumid'];
			$aname=$row['name'];
			$astatus=$row['status'];

			?>
		<div class="pic" style="margin-right:1px;margin-left:1px;margin-top:1px;margin-bottom:1px">
        	<?php echo "<img src='../admin/admin_gallery/acatch/$aimage' class='pic-image' alt='Pic' alt='$aname'>"; ?>
		   <?php echo"<a href='index.php?p=gallery&id='".$aid."'>
		    <span class='pic-caption left-to-right'>
            
		        <p style='color:#FFFFFF;font-size:24px'>$aname</p>
		    </span></a>"?>
		</div>
			<?php } ?>
		</section>
	<!-- </div> -->
		<!-- <div class="clearfix"></div> -->
<!-- </div>	 -->
	

<div class="seeall_div2">
	<!--   NAVIGATION FOR BLOG POST -->
		<div class="blog_navigation">
			<div style="margin-top:20px;margin-left:180px">
				<?php
					$sql = "SELECT COUNT(name) FROM tbl_album";
					$rs_result = mysqli_query($con, $sql);
					$row = mysqli_fetch_row($rs_result);
					$total_records = $row[0];
					$total_pages = ceil($total_records / 12);
					for ($i=1; $i<=$total_pages; $i++) {
					echo "<span class='navigations_items_span'>";
					echo "<b>Page </b>";
					echo "<a href='photo2.php?page=".$i."' class='navigation_item selected_navigation_item'>".$i."</a>";							
					echo "</span>";
					};
				?>	
			</div>
		</div>
</div>