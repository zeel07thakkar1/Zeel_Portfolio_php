<?php
include('dbcon.php');
$limit = 6;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM project LIMIT $start_from, $limit";  
$rs1 = mysqli_query($conn, $sql);  
?>
<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
<?php
              if (mysqli_num_rows($rs1)>0) {

                while ($row1=mysqli_fetch_array($rs1)) {
            ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?php echo $row1['pic1']; ?>"  alt="">
              <div class="portfolio-links">
                
                <a href="portfolio-details.php?id=<?php echo $row1['pro_id']; ?>" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
<?php
            }
        }                              
?>
</div>