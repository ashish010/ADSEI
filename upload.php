<?php
$active = "upload";
include('includes/header.php');
?>

<div class="container">
		<div class="uploadBox">
			<svg width="150px" height="150px" viewbox="0 0 1800 1800"><path d="M1675 971q0 51-37 90l-75 75q-38 38-91 38-54 0-90-38l-294-293v704q0 52-37.5 84.5t-90.5 32.5h-128q-53 0-90.5-32.5t-37.5-84.5v-704l-294 293q-36 38-90 38t-90-38l-75-75q-38-38-38-90 0-53 38-91l651-651q35-37 90-37 54 0 91 37l651 651q37 39 37 91z"/></svg>
			<span id="uploadText">Click To Attach A File</span>
			
				<input type="file" name="fileToUpload" class="file-select" id="fileToUpload"/>
			
			<p id="demo"></p>
		</div>

		</div>
		<div class="flexible">
			<div class="fieldContainer">
				<div class="content-left">Title:</div>
				<div class="content-right"><input type="text" id="title" /></div>
			</div>
		
		
			<div class="fieldContainer">
				<div class="content-left">Visibility:</div>
				<div class="content-right">
					<select name="privacy" id="visibility">
						<option value="public">Public</option>
						<option value="private">Private</option>
						<option value="teacher review">Teacher Review</option>
						<option value="registered users">Registered Users</option>
					</select>
				</div>
			</div>
			
			<div class="fieldContainer">
				<div class="content-left">Tags:</div> 
				<div class="content-right">
					<dl class="dropdown">
						<dt>
							<a href="#">
								<span class="selectTxt" id="tags">Select</span>
							</a>
						</dt>
						
						<dd>
							<div class="mutliSelect">
								<ul>
									<li><input type="checkbox" value="English"/>English</li>
									<li><input type="checkbox" value="Maths"/>Maths</li>
									<li><input type="checkbox" value="Science"/>Science</li>
									<li><input type="checkbox" value="Sport-Health"/>Sport-Health</li>
									<li><input type="checkbox" value="Computing"/>Computing</li>
									<li><input type="checkbox" value="Level1"/>Level 1</li>
									<li><input type="checkbox" value="Level2"/>Level 2</li>
									<li><input type="checkbox" value="Level3"/>Level 3</li>
									<li><input type="checkbox" value="Interactive"/>Interactive</li>
									<li><input type="checkbox" value="Easy"/>Easy</li>
									<li><input type="checkbox" value="Difficult"/>Difficult</li>
								</ul>
							</div>
						</dd>
					</dl>
				</div>
			</div>
			
					<div class="fieldContainer">
						<div class="content-left">Comments:</div> 
						<div class="content-right"><textarea rows="5" cols="50" style="resize:none;" id="comments"> </textarea></div>
					</div>
			
		</div>
	
		
		<button class="file-submit" id="uploadBtn" onclick="UploadFile(this)"/>Submit <span class="progressBar" id="progressBar"></span></button>
</div>


	
<?php include('includes/footer.php'); ?>