<?php 
include "../db/f-connect.php";
include "../db/f-script.php";
$aid=$_REQUEST['id'];
?>

<!-- <div class="header">
	 <div class="container">
		 <div class="logo">
			 <a href="photo2.php"><h2>&lt;DOTCODE&gt;</h2></a>
		 </div>
		 <div class="top-menu">
				<span class="menu"> </span>
				<ul>
					 <li><a href="#.html">HOME</a></li>
					 <li><a href="#.html">ABOUT US</a></li>
					 <li class="active"><a href="photo2.php">GALLERY</a></li>					
					 <li><a href="#.html">BLOG</a></li>					 
					 <li><a href="#.html">CONTACT</a></li>
                     <li>|</li>		
                     <li><a href="admin/login.php">Admin panel</a></li>			 
				 </ul>
		 </div>
		 <div class="clearfix"></div> -->
			 <!--script-nav
		 <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>		  
	 </div>
</div>		 -->

<!-- Blog Section
	================================================== -->
<div class="gallery-head">
	 <div class="gallery-info">
		 <div class="container">
			 <a href="gallery.php">Home/</a>
				<?php  
				$sql = "SELECT * FROM tbl_album where albumid='$aid'";
				$rs_result = mysqli_query ($con, $sql);

				####### Fetch Results From Table ########

				while ($row = mysqli_fetch_assoc($rs_result)) 
				{
				$aimage=$row['image'];
				$aname=$row['name'];
				$adesc=$row['adesc'];
				$astatus=$row['status'];

				?>
			<h2>
				<?php echo "$aname"; ?> 
			</h2>
            		 
		 </div>		 
	 </div>
	 <div class="gallery-text">
		 
	 </div>

		<div class="container">
			<div class="one-whole text-center">
            
            <p><?php echo "$adesc"; ?></p>
				<?php } ?>
                <hr style="border:solid 1px;margin-top:0px;">
				<p style="margin-left:75px">
				<?php  
				$sql = "SELECT * FROM tbl_gallery where aid = $aid and status='process'";
				$num_rows = mysqli_num_rows(mysqli_query($con, $sql));	
				

				####### Fetch Results From Table ########

				$result = mysqli_query($con, $sql);
				while($row = mysqli_fetch_array($result))
				{
				$gimage=$row['gimages'];

				?>	
	
<?php	echo "<a href='../admin/admin_gallery/gupload/$gimage' target='_self' class='inline-block litebox' data-litebox-group='group-1'><img src='../admin/admin_gallery/gcatch/$gimage' class='inline-block' /></a> ";?>			
<?php } ?>				
</p>
				
</div>			
</div>
<div class="clearfix"></div>
</div>	
</div>	


	<!-- Bottom Footer Section
	================================================== -->
<!-- <div class="bottom_footer_section">
	<div class="container">
	<div class="sixteen columns bottom_line_dev">	
		
<br/><br/>		
<hr style="border:solid 1px;margin-top:0px">
<br/>
<br/>
<br/>
		</div>	
        
	</div>	
</div>	 -->


