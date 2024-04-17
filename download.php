
<h1><?php echo $title; ?></h1><!-- Invoking the title of the page -->


<!-- For the pdf files -->
<div class="col-lg-6">
    <h3>PDF Document</h3>
    <div class="table-responsive">
        <table id="example" class="table table-bordered">
            <thead>
                <th width="2%">#</th>
                <th>Chapter</th>
                <th>Title</th>
                <th width="10%">Action</th>
            </thead>
            <tbody>
                <!--The sql quarry  for finding the documents in a table -->
                <?php 
                $sql = "SELECT * FROM tbllesson WHERE Category='Docs'";
                $mydb->setQuery($sql);
                $cur = $sql->loadResultList();


                // Insert the data from the database into the table front end  
                foreach ($cur as $result) {
					# code
					echo '<tr>';
					echo '<td></td>';
					echo '<td>'.$result->LessonChapter.'</td>';
					echo '<td>'.$result->LessonTitle.'</td>';
					echo '<td><a href="'.web_root.'admin/modules/lesson/'.$result->FileLocation.'" class="btn btn-xs btn-info" download><i class="fa fa-download"></i> Downlaod</a></td>';
					echo '</tr>';
				}
                ?>
            </tbody>
        </table>
    </div>

</div>

<!-- for the video files -->
<div class="col-lg-6">
    <h3>VIDEO</h3>
    <div class="table-responsive">
        <table id="example2" class="table table-bordered">
        <thead>
				<th width="2%">#</th>
				<th>Decription</th>
				<th width="10%">Action</th>
			</thead>
        
            <tbody>
            <?php 
            // sql quary for finding the video in the databade
                    $sql = "SELECT * FROM tbllesson WHERE Category='Video'";
                    $mydb->setQuery($sql);
                    $cur = $mydb->loadResultList();

                    // inserting the videon informantion in the table in the front end
                    foreach ($cur as $result) {
                        # code...
                        echo '<tr>';
                        echo '<td></td>';
                        echo '<td>'.$result->LessonTitle.'</td>'; 
                        echo '<td><a href="'.web_root.'admin/modules/lesson/'.$result->FileLocation.'" class="btn btn-xs btn-info" download><i class="fa fa-download"></i> Downlaod</a></td>';
                        echo '</tr>';
                    }
                    ?>
            </tbody>
        </table>
    </div>
</div>