<?php
$active = "upload";
include('includes/header.php');
?>
/* 18-12-17 */
.row
{
	min-width: 356px;
}

.upload-wrapper
{
	position:relative;
}

.upload
{
    width: 100px;
    border: 1px solid #aaaaaa;
    background-color: white;
    padding: 10px;
    font-size: 14pt;
    text-align: center;
	margin-left:42px;
}

.file-select
{
    position: absolute;
    opacity: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
}

.left-content
{
    display: inline-block;
	width:501px;
	margin-bottom:25px;
}

.right-content
{
	display: inline-block;
	width:501px;
	margin-bottom:25px;
}

.center-content
{
	text-align:center;
}

<div class="container">

<div class="row">
	<div class="left-content"><label>Title:</label> <input type="text" style="width:300px;"/></div>
	<div class="right-content"><label>Tags:</label> <dl class="dropdown">
						<dt>
							<a href="#">
								<span class="selectTxt">Select</span>
							</a>
						</dt>
						
						<dd>
							<div class="mutliSelect">
								<ul>
									<li><input type="checkbox" value="English"/>English</li>
									<li><input type="checkbox" value="Maths"/>Maths</li>
									<li><input type="checkbox" value="Science"/>Science</li>
									<li><input type="checkbox" value="Sport & Health"/>Sport & Health</li>
									<li><input type="checkbox" value="Computing"/>Computing</li>
									<li><input type="checkbox" value="Level 1"/>Level 1</li>
									<li><input type="checkbox" value="Level 2"/>Level 2</li>
									<li><input type="checkbox" value="Level 3"/>Level 3</li>
									<li><input type="checkbox" value="Interactive"/>Interactive</li>
									<li><input type="checkbox" value="Easy"/>Easy</li>
									<li><input type="checkbox" value="Difficult"/>Difficult</li>
								</ul>
							</div>
						</dd>
					</dl>
	</div>
</div>


<div class="row">
				<div class="left-content">
					<div class="upload-wrapper">
						<div class="upload">Add File</div>
						<input type="file" name="fileToUpload" class="file-select" id="fileToUpload"/></div>
				</div>
				
				<div class="right-content">
					<label>Visibility</label> <select name="privacy">
							<option value="private">Private</option>
							<option value="teacher review">Teacher Review</option>
							<option value="registered users">Registered Users</option>
							<option value="public">Public</option>
						</select>
				</div>
			
</div>
<div class="row">
<div class="left-content"><p id="demo"></p></div>
</div>

<div class="row">
<div class="left-content">
<button class="file-submit" id="uploadBtn" onclick="UploadFile()"/>Submit <span class="progressBar" id="progressBar"></span></button>
</div>
</div>

	
		
</div>


	
<?php include('includes/footer.php'); ?>