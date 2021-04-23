	<!--                start howitwork-section                            -->
	<div class="howitwork margin-0 text-center" id="howitwork">
		<div class="content-header">
			<h4 class="bold">registration transaltion</h4>
			<a href="<?php echo base_url(); ?>">	home</a> /
			<a href="<?php echo base_url().'regtran/en'; ?>">	registration </a>
		</div>
	</div>
	<!--                end howitwork-section                            -->
	<!--                Start Freelancer-section                            -->
	<div class="Freelancer-section">
		<div class="container-fluid">
			<form action="<?php echo base_url().'regtran_action/en'; ?>" method="post" class="form-quote no-shadow no-top half-select" enctype="multipart/form-data">
				<h4> You can register with us as a job seeker and your companies will be informed of your resume </h4>
				<?php echo validation_errors(); ?>
				<br>
					<input type="text" placeholder=" first name *" class="name" name="fname">
					<!--<input type="text" placeholder=" second name" class="name">-->
					<input type="text" placeholder=" family name *" class="name" name="lname">
					<input type="text" placeholder=" nationality" class="name" name="nationality">
					<input type="date" placeholder=" date of birthday" class="name" name="birthdate">
					<select class="select1" name="six">
						<option value="">Gander</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
					<input type="text" placeholder=" place" class="name" name="place">
					<input type="text" placeholder=" phone number *" class="name" name="mobile">
					<input type="email" placeholder="email *" class="name" name="email">
					<!--<input type="text" placeholder="username" class="name">
					<input type="password" placeholder="password" class="name">-->
					<select class="select1" name="status">
						<option value="">Social status</option>
						<option value="married">Married</option>
						<option value="single">Single</option>
						<option value="divorced">Divorced</option>
					</select>
					<input type="text" placeholder="Graduation Year" class="name" name="grad_year">
					<input type="text" placeholder="Graduation University" class="name" name="univ">
					<input type="text" placeholder="Specialization" class="name" name="specialty">
					<select class="select1" name="skills">
						<option value="">Skills</option>
						<option value="computer">the computer</option>
						<option value="other_lang">other language</option>
					</select>
					<input type="text" placeholder="coursess" class="name" name="courses">
					<input type="text" placeholder="Years of experience" class="name" name="exper_year">
					<select class="select1" name="exper">
						<option value="">Career Level</option>
						<option value="junior">Junior</option>
						<option value="senior">Senior</option>
						<option value="admin">Administrative</option>
					</select>
					<input type="text" placeholder="expected salary" class="name" name="salary">
					<!--<select class="select1">
						<option>Employment Type</option>
						<option>Full-time</option>
						<option>part time</option>
						<option>freelancer</option>
						<option>Contracts</option>
					</select>
					<input type="text" placeholder="current place of work" class="name">
					<input type="text" placeholder="Functional role" class="name">
					<input type="text" placeholder="Previous work places" class="name">
					<input type="text" placeholder="Place" class="name">
					<input type="text" placeholder="from " class="name">
					<input type="text" placeholder="to" class="name">
					<input type="text" placeholder="Functional role" class="name">-->
					<label for="file-cv" class="file-input"><p>Attach your CV *</p>
						<input type="file" class="hidden" id="file-cv" name="cv">
					</label>
					<label for="file-img" class="file-input"><p>Attach the personal photo *</p>
						<input type="file" class="hidden" id="file-img" name="img">
					</label>

					<button role="submit" class="button button--isi button--border-thick button--round-l button--size-s block">	Sign Up</button>
			</form>

		</div>
	</div>
	<!--                end Freelancer-section                            -->