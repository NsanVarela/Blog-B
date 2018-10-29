<?php
    include "../db/f-connect.php";
    include "../db/f-script.php";

?>

<!-- CONTENT -->
<div class="row bloc_nav">

    <!-- Album n°1 -->
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 bloc bloc1" id="album1">
        <figure>
            <a href="#">
                <img id="album_bali" class="img_couvAlbum" src="../img/img_photo/bali/bali1.jpg" alt="album bali">
            </a>
            <div class="infoAlbums albumBali">
                <h5 class="infoPicture_title">* Bali *</h5>
                <p class="infoPicture_date">Octobre 2010</p>
            </div>
        </figure>
    </div>
    <!-- Album n°2 -->
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 bloc bloc2" id="album2">
        <figure>
            <a href="#">
                <img id="album_caire" class="img_couvAlbum" src="../img/img_photo/caire/caire1.jpg" alt="album caire">
            </a>
            <div class="infoAlbums albumCaire">
                <h5 class="infoPicture_title">* Le Caire *</h5>
                <p class="infoPicture_date">Janvier 2013</p>
            </div>
        </figure>
    </div>
    <!-- Album n°3 -->
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 bloc bloc3" id="album3">
        <figure>
            <a href="#">
                <img id="album_marrakech" class="img_couvAlbum" src="../img/img_photo/caire/caire2.jpg" alt="album marrakech">
            </a>
        </figure>
        <div class="infoAlbums albumMarrakech">
            <h5 class="infoPicture_title">* Marrakech *</h5>
            <p class="infoPicture_date">Avril 2017</p>
        </div>
    </div>
    <!-- Album n°4 -->
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 bloc bloc4" id="album4">
        <figure>
            <a href="#">
                <img id="album_paris" class="img_couvAlbum" src="../img/img_photo/paris/paris1.jpg" alt="album paris">
            </a>
        </figure>
        <div class="infoAlbums albumParis">
            <h5 class="infoPicture_title">* Paris *</h5>
            <p class="infoPicture_date">Juin 2018</p>
        </div>
    </div>


<!-- TEST POUR NEW CONFIG -->
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
<!-- <?php echo ""; ?> -->
    <?php echo "<a href='index.php?p=gallery&id='".$aid."'>
    <span class='pic-caption left-to-right'>
    <img src='..//admin/admin_gallery/acatch/$aimage' class='pic-image' alt='Pic' alt='$aname'>
        <p style='color:#FFFFFF;font-size:24px'>$aname</p>
    </span></a>"?>
</div>
<?php } ?>
	</section>
	

			
		</div>

		
		<div class="clearfix"></div>
	</div>	
	</div>	

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
				echo "<a href='index.php?page=".$i."' class='navigation_item selected_navigation_item'>".$i."</a>";							
				echo "</span>";
				};
			?>
				
				
			</div>
		</div>
</div>

</div>



