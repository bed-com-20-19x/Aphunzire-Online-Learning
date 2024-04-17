<h1> <?php echo $title; ?> </h1> <!-- Invoking the title of the page -->

<div class="col-lg-12">
<div class="table-responsive">
		<table id="example" class="table table-bordered">
			<thead>
				<th width="2%">#</th>
				<th>Chapter</th>
				<th>Title</th> 
				<th width="10%">Action</th>
			</thead>
			<tbody>
				<?php 

                // Sql querry for selecting all lessons in the lesson table in te data base
				$sql = "SELECT * FROM tbllesson";
				$mydb->setQuery($sql);
				$cur = $mydb->loadResultList();

                // inserting the data from database into front end table 
				foreach ($cur as $result) {
					# code... for injecting the data into the front table 
					echo '<tr>';
					echo '<td></td>';
					echo '<td>'.$result->LessonChapter.'</td>';
					echo '<td>'.$result->LessonTitle.'</td>';
					echo '<td><a href="index.php?q=question&id='.$result->LessonID.'" class="btn btn-xs btn-info">View Exercises</a></td>';
					echo '</tr>';
				}
				?>
			</tbody>
		</table>
	</div>
</div>