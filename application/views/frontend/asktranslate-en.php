	<!--                start howitwork-section                            -->
	<div class="howitwork margin-0 text-center" id="howitwork">
		<div class="content-header">
			<h4 class="bold">Ask Translation</h4>
			<a href="<?php echo base_url(); ?>" class="margin-0-10">	home</a> |
			<a href="<?php echo base_url().'asktranslate/en'; ?>" class="margin-0-10"> Ask Translation </a>
		</div>
	</div>
	<!--                end howitwork-section                            -->
	<!--                start asktranslate-section                            -->
	<div class="ask-translate">
		<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs ">
		</div>
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 ">
			<form action="<?php echo base_url().'asktranslate_action/en'; ?>" method="post" class="form-quote no-shadow no-top half-select" enctype="multipart/form-data">
			
				<?php $strings = json_decode(file_get_contents('application/language/langs.json'),true); ?>
				<div id="source" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<?php	for($source=6;$source<count($strings);$source++)	{ ?>
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
									<input type="radio" name="to" id="<?php echo $strings[$source]['nativeName']; ?>" value="<?php echo $strings[$source]['nativeName']; ?>">
									<label for="<?php echo $strings[$source]['nativeName']; ?>"><?php echo $strings[$source]['nativeName']; ?></label>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
		
				<div id="target" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<?php	for($target=6;$target<count($strings);$target++)	{ ?>
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
									<input type="radio" name="from" id="<?php echo $strings[$target]['nativeName']; ?>" value="<?php echo $strings[$target]['nativeName']; ?>">
									<label for="<?php echo $strings[$target]['nativeName']; ?>"><?php echo $strings[$target]['nativeName']; ?></label>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>

				<h2 class="text-center">uploads </h2>
				<?php echo validation_errors(); ?>
				<!--<h5 class="bold">Enter Project Requirements</h5>
				<select class="select1 fullwidth"> 
					<option value="Business Style">Business Style</option>
					<option value="Law and Jurisdiction">Law and Jurisdiction</option>
					<option value="School Program">School Program</option>
					<option value="Creative Writing">Creative Writing</option>
					<option value="Overnight Delivery">Overnight Delivery</option>
				</select>-->
				<h5 class="bold">Upload Your File *</h5>
				<div class="text-center">
					<label for="file-input" class="file-input text-left"><p>choose file</p>
						<input type="file" class="hidden" id="file-input" name="cv">
					</label>
				</div>
				<!--<h2 class="text-center">TYPE OF WORK</h2>
				<h5 class="bold">Please Define a Broad Specialism For This Type of Work</h5>
				<select class="select2 fullwidth"> 
					<option value="marketing">marketing</option>
					<option value="buisness">buisness</option>	
				</select>
				<p class="margin-work">This will help us filter the linguists available to do the work.</p>-->
				<div class="line"></div>
				<h5 class="bold">Source Language *</h5>
				<?php	for($from=0;$from<6;$from++)	{ ?>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
					<input type="radio" name="from" id="<?php echo $strings[$from]['nativeName']; ?>" value="<?php echo $strings[$from]['nativeName']; ?>">
					<label for="<?php echo $strings[$from]['nativeName']; ?>"><?php echo $strings[$from]['nativeName']; ?></label>
				</div>
				<?php } ?>
				<a  data-toggle="modal" data-target="#source" class="pointer">More languages ...</a>

				<div class="line"></div>
				<h5 class="bold">Target Language *</h5>
				<?php	for($to=0;$to<6;$to++)	{ ?>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
					<input type="radio" name="to" id="<?php echo $strings[$to]['nativeName']; ?>" value="<?php echo $strings[$to]['nativeName']; ?>">
					<label for="<?php echo $strings[$to]['nativeName']; ?>"><?php echo $strings[$to]['nativeName']; ?></label>
				</div>
				<?php } ?>
				<a  data-toggle="modal" data-target="#target" class="pointer">More languages ...</a>

				<h2 class="text-center">DETAILS</h2>
				<h5 class="bold">Enter Your Details to Proceed With This Request</h5>
				<div class="block text-center">
					<input type="text" placeholder="name *" class="halfwidth" name="fname">
					<input type="text" placeholder="last name *" class="halfwidth" name="lname">
				</div>
				<!--<input type="email" placeholder="company name" class="fullwidth">-->
				<div class="block text-center">
					<input type="tel" placeholder="phone *" class="halfwidth" name="mobile">
					<input type="text" placeholder="email *" class="halfwidth" name="email">
				</div>
				<div class="line"></div>
				<!--<h4>How to contact you?</h4>
				<div class="block">
					<input type="radio" name="conntact-way" id="call">
					<label for="call">Call me back</label>
				</div>
				<div class="block">
					<input type="radio" name="conntact-way" id="email">
					<label for="email">No, contact me via e-mail</label>
				</div>-->
				<div class="block">
					<button role="submit" class="button button--isi button--border-thick button--round-l button--size-s inline-block">	email my quote</button>
				</div>
				
			</form>
				
		</div>
	</div>
	<!--                end asktranslate-section                            -->