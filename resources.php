<?php
$active = "resources";
include('includes/header.php');
?>
<br><br><br>
	
<!-- <div class="feedTabs">
	<div class="tab" onclick="activeTabs(0);">
		Feed
	</div>

	<div class="tab" onclick="activeTabs(1)";>
		My Posts
	</div>
</div> -->

<div class="feedTabs">
<h4>Filter By Tags:</h4>
	<div class='filters'>
		<div><input type="checkbox" value="English" class="tagFilter" onclick="updateTags();"><span>English</span></div>
		<div><input type="checkbox" value="Maths" class="tagFilter" onclick="updateTags();"><span>Maths</span></div>
		<div><input type="checkbox" value="Science" class="tagFilter" onclick="updateTags();"><span>Science</span></div>
		<div><input type="checkbox" value="Computing" class="tagFilter" onclick="updateTags();"><span>Computing</span></div>
		<div><input type="checkbox" value="Level1" class="tagFilter" onclick="updateTags();"><span>Level 1</span></div>
		<div><input type="checkbox" value="Level2" class="tagFilter" onclick="updateTags();"><span>Level 2</span></div>
		<div><input type="checkbox" value="Level3" class="tagFilter" onclick="updateTags();"><span>Level 3</span></div>
		<div><input type="checkbox" value="Interactive" class="tagFilter" onclick="updateTags();"><span>Interactive</span></div>
		<div><input type="checkbox" value="Easy" class="tagFilter" onclick="updateTags();"><span>Easy</span></div>
		<div><input type="checkbox" value="Difficult" class="tagFilter" onclick="updateTags();"><span>Difficult</span></div>
		<div class="special"><input type="checkbox" value="Sport-Health" class="tagFilter" onclick="updateTags();"><span>Sport-Health</span></div>
	</div>
	<br>
	<h4>Order By:</h4>
	<div class='filters'><select id="orderby" onchange="orderby();">
	<option value=0>Oldest</option>
	<option value=1>Newest</option>
	</select>
	</div>
</div>

<br><br><br>
<h3>ADSEI Resource Feed</h3>
<div class="content" id="feedTabs">
<!--	<table class="contentTable" onload="activeTabs();">
		<tbody id="feedTabs">
		<tr><br>
			<th style="width:2%"><br>Date<br><br></th>
			<th style="width:10%"><br>User<br><br></th>
			<th><br>Resource Title<br><br></th>	
		</tr>

	</tbody>
	</table> -->
</div>

		<!-- Test output 
		<div class="resource">
			<h3>Resource Title</h3>
			<span class="tags">Resource, Tags, Go, Here</span>
			<span class="author">Resource Author</span>
		</div> -->

<!-- <div class="content">
	<table class="contentTable">
		<tbody class="myPostTabs">
		<tr><br>
			<th style="width:2%"><br>12:00<br><br></th>
			<th style="width:10%"><br>Example poster profile<br><br></th>
			<th><br>Example post content<br><br></th>
		</tr>
		<tr>
			<th style="width:2%"><br>12:00<br><br></th>
			<th style="width:10%"><br>Example poster profile<br><br></th>
			<th><br>Example post content<br><br></th>
		</tr>
	</tbody>
	</table>
</div> -->

<?php include('includes/footer.php'); ?>
<script>UTMfilter(); var loadcheck = setInterval(getResources, 500);</script>