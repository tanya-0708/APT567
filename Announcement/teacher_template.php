<?php require_once '../Commons/menu_template.php' ?>

<?php require_once 'includes/fetchAnnouncement.inc.php'; ?>

<div class="col-sm-9">
        <div class="p-4 row">
            <div class="row Ann_add">
              <a href='add_ann_template.php'>
                <button>
                    <i class='bx bx-plus'></i>
                    <span class="mx-2"> Add Announcement</span>
                </button>
              </a>
            </div>
            <?php while ($rows = mysqli_fetch_assoc($resultData)) { // $rows;
						?>
                <div class="whitebox">
                    <div class ="contentbox">
                        <div class="row Ann_head">
                            <div class="col sm Ann_title">
                                <h5>
                                    <a href=""><?php echo $rows['Ann_title'];?> </a>
                                </h5>
                            </div>
                            <div class="col sm Ann-date">
                                <h6>Posted: <?php echo $rows['Ann_date'];?></h6>
                            </div>
                        </div>
                        <div class="row Ann_desc">
                            <?php  echo $rows['Ann_desc'];?>
                        </div>
                        <div class="row Ann_delete">
                        <a href="includes/redirect_delete.inc.php?Ann_ID=<?php echo $rows["Ann_ID"];?>">
                            <button>Delete</button>
                        </a>
                        </div>
                    </div>
                </div>
            <?php }  ?>
            <?php mysqli_stmt_close($stmt); ?>

        </div>
      </div>

      <?php require_once '../Commons/twitter_template.php' ?>