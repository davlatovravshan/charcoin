<!DOCTYPE html>
<html lang="en">
<head>
	<?php require 'blocks/head.php' ?>
</head>
<body>

	<section id="beta">
		
		<div class="wrapper">
			
			<div class="beta">
				<h2 class="beta_title">
					Next-get NFTs <br> for Everyone
				</h2>
				<!-- <p class="beta_text">
					Mattis mi vestibulum mattis lacus, 
					tristique ullamcorper sed. 
					Eget tellus condimentum in sagittis, 
					aliquam aliquam in. Viverra dictum 
					odio vulputate molestie. 
				</p> -->
				<button class="beta_button">
					Register for a Beta Phase
				</button>
			</div>

		</div>

	</section>

	<div class="beta-sm">
		<img class="bg-sm_img" src="img/bg-sm.png" alt="">
		<div class="beta-sm_info">
			<h2 class="beta_title bet_title-sm">
				Next-get NFTs <br> for Everyone
			</h2>
			<p class="beta_text beta_text-sm">
				Mattis mi vestibulum mattis lacus, 
				tristique ullamcorper sed. 
				Eget tellus condimentum in sagittis, 
				aliquam aliquam in. Viverra dictum 
				odio vulputate molestie. 
			</p>
			<button class="beta_button">
				Register for a Beta Phase
			</button>
			<div class="down-arrow">
				<img src="img/down-arrow.png" alt="Down">
			</div>
		</div>

	</div>

	<section id="send">
		
		<div class="wrapper">
			
			<div class="send">
				<h4 class="form_title">Registration</h4>
				<form enctype="multipart/form-data" action="mail.php" method="POST" class="send-form">
						
					<div class="form-item">
						<label class="form-label" for="name">Name</label>
						<input placeholder="Enter your name" id="name" type="text" name="name" class="form_input">
					</div>


					<div class="form-item">
						<label class="form-label" for="email">Email</label>
						<input placeholder="Enter your email" id="email" type="email" name="email" class="form_input">
					</div>


					<div class="form-item">
						<label class="form-label" for="bitcout">BitCout</label>
						<input placeholder="bitclout.com/nickname" type="text" id="bitcout" name="bitcout" class="form_input">
					</div>


					<div class="form-item">
						<textarea name="message" id="message_text" cols="30" rows="10" placeholder="Tell us more about yourself"></textarea>
					</div>

					<div class="form-item form-item-file">
						<label class="form-label">Upload your work</label>
						<div class="file">
							<label class="file_label" for="file">
								<span>Choose file</span>
							</label>
							<input type="file" name="photo" class="file_input" id="file">
						</div>
					</div>

					<div class="form_button">
						<button class="main_btn">
							<svg class="spinner" viewBox="0 0 50 50">
							  <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
							</svg>
							Submit
						</button>
					</div>

				</form>
			</div>

		</div>

	</section>


<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

<script src="js/main.js"></script>
	
<script>
	var inputs = document.querySelectorAll( '.file_input' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.previousElementSibling,
			labelVal = label.innerHTML;

		input.addEventListener( 'change', function( e )
		{
			var fileName = '';
			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				label.querySelector( 'span' ).innerHTML = fileName;
			else
				label.innerHTML = labelVal;
		});
	});
</script>

</body>
</html>