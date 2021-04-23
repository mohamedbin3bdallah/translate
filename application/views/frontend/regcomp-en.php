	<!--                start howitwork-section                            -->
	<div class="howitwork margin-0 text-center" id="howitwork">
		<div class="content-header">
			<h4 class="bold">registration companies </h4>
			<a href="<?php echo base_url(); ?>">	home</a> /
			<a href="<?php echo base_url().'regcomp/en'; ?>">	sign in</a>
		</div>
	</div>
	<!--                end howitwork-section                            -->
	<!--                Start Freelancer-section                            -->
	<div class="Freelancer-section">
		<div class="container-fluid">
			<form action="<?php echo base_url().'regcomp_action/en/'.$user[0].'_'.$user[1].'_'.$user[2]; ?>" method="post" class="form-quote no-shadow no-top half-select" enctype="multipart/form-data">
				<h4>
					You can get your employee here </h4>
				<br>
				<?php echo validation_errors(); ?>
				<input type="text" value="<?php echo $user[1].' '.$user[2]; ?>" readonly class="name">
				<input type="hidden" name="translator" value="<?php echo $user[0]; ?>">
				<input type="text" placeholder=" company name *" class="name" name="title">
				<!--<input type="text" placeholder=" Year Founded" class="name">
				<input type="text" placeholder=" Company Sector" class="name">
				<input type="text" placeholder=" Number of Employees" class="name">
				<input type="text" placeholder=" Place of company in the Kingdom" class="name">-->
				<input type="text" placeholder=" Name of the person continuing with him *" class="name" name="name">
				<input type="text" placeholder=" Functional role" class="name" name="job">
				<input type="text" placeholder=" phone number *" class="name" name="mobile">
				<input type="email" placeholder="email *" class="name" name="email">
				<!--<input type="text" placeholder="username" class="name">
				<input type="password" placeholder="password" class="name">
				<input type="text" placeholder=" The reference number for the job" class="name">
				<input type="text" placeholder="Required profession" class="name">
				<input type="text" placeholder="Specialization" class="name">
				<select class="select1">
						<option> required skills</option>
						<option>the computer</option>
						<option>other language</option>
					</select>
				<input type="text" placeholder="more notes" class="name">
				<input type="text" placeholder="Years of experience" class="name">
				<select class="select1">
						<option>Career Level</option>
						<option>junior</option>
						<option>experienced</option>
						<option>Administrative</option>
					</select>
				<select class="select1">
						<option>Employment Type</option>
						<option>Full-time</option>
						<option>part time</option>
						<option>freelancer</option>
						<option>Contracts</option>
					</select>
				<input type="text" placeholder="الراتب المقترح للوظيفه" class="name">-->
				<!--<label for="file-comp" class="file-input"><p>Attach your company registration certificate and credentials *</p>
						<input type="file" class="hidden" id="file-comp" name="img[]" multiple>
					</label>-->

				<button role="submit" class="button button--isi button--border-thick button--round-l button--size-s block">	Sign Up</button>
			</form>

		</div>
	</div>
	<!--                end Freelancer-section                            -->