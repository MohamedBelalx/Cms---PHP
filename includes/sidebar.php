<div class="col-md-4">

	<?php
	
	if(isset($_POST['submit'])){
		$search = $_POST['search'];
		
		$query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'" ;
		$search_query = mysqli_query($connection,$query);
		
		if(!$search_query){
			die("QUERY FIELD" . mysqli_error($connection));
		}
		$count = mysqli_num_rows($search_query);
		
		if($count == 0){
			echo '<h1>NO RESULT FOUND</h1>';
		}
		else{
			echo '<h1>RESULT FOUND</h1>';
		}
	}
	
	
	
	?>




	<!-- Blog Search Well -->
	<div class="well">
		<h4>Blog Search</h4>
<!--		search form-->
		<form action="search.php" method="post" class="form-group">
			<div class="input-group">
				<input name="search" type="text" class="form-control">
				<span class="input-group-btn">
				<button class="btn btn-default" type="submit" name="submit">
					<span class="glyphicon glyphicon-search"></span>
				</button>
				</span>
			</div>
		</form>
		<!-- /.input-group -->
	</div>

	<!-- Blog Categories Well -->
	<div class="well">
		<h4>Blog Categories</h4>
		<div class="row">
			<div class="col-lg-6">
				<ul class="list-unstyled">
					<li><a href="#">Category Name</a>
					</li>
					<li><a href="#">Category Name</a>
					</li>
					<li><a href="#">Category Name</a>
					</li>
					<li><a href="#">Category Name</a>
					</li>
				</ul>
			</div>
			<!-- /.col-lg-6 -->
			<div class="col-lg-6">
				<ul class="list-unstyled">
					<li><a href="#">Category Name</a>
					</li>
					<li><a href="#">Category Name</a>
					</li>
					<li><a href="#">Category Name</a>
					</li>
					<li><a href="#">Category Name</a>
					</li>
				</ul>
			</div>
			<!-- /.col-lg-6 -->
		</div>
		<!-- /.row -->
	</div>

	<!-- Side Widget Well -->
	<div class="well">
		<h4>Side Widget Well</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
	</div>

</div>
