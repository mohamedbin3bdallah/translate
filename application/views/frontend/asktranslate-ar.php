	<!--                start howitwork-section                            -->
	<div class="howitwork margin-0 text-center" id="howitwork">
		<div class="content-header">
			<h4 class="bold">طلب ترجمه</h4>
			<a href="<?php echo base_url(); ?>" class="margin-0-10">	الرئيسيه</a> |
			<a href="<?php echo base_url().'asktranslate/ar'; ?>" class="margin-0-10"> طلب ترجمه </a>
		</div>
	</div>
	<!--                end howitwork-section                            -->
	<!--                start asktranslate-section                            -->
	<div class="ask-translate">
		<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs ">
		</div>

		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 ">
			<form action="<?php echo base_url().'asktranslate_action/ar'; ?>" method="post" class="form-quote no-shadow no-top half-select" enctype="multipart/form-data">
				
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

				<h2 class="text-center">رفع الملفات</h2>
				<?php echo validation_errors(); ?>
				<!--<h5 class="bold">ادخل متطلبات مشروعك</h5>
				<select class="select1 fullwidth"> 
					<option value="Business Style">Business Style</option>
					<option value="Law and Jurisdiction">Law and Jurisdiction</option>
					<option value="School Program">School Program</option>
					<option value="Creative Writing">Creative Writing</option>
					<option value="Overnight Delivery">Overnight Delivery</option>
				</select>-->
				<h5 class="bold">أرفع الفايل الخاص بك *</h5>
				<div class="text-center">
					<label for="file-input" class="file-input text-right"><p>اختار الملف</p>
						<input type="file" class="hidden" id="file-input" name="cv">
					</label>
				</div>
				<!--<h2 class="text-center">نوع العمل</h2>
				<h5 class="bold">يرجى تحديد تخصص واسع النطاق لهذا النوع من العمل</h5>
				<select class="select2 fullwidth"> 
					<option value="marketing">marketing</option>
					<option value="buisness">buisness</option>	
				</select>
				<p class="margin-work">وهذا سوف يساعدنا على تصفية اللغويين المتاحة للقيام بهذا العمل</p>-->
				<div class="line"></div>
				<h5 class="bold">لغة المصدر *</h5>
				<?php	for($from=0;$from<6;$from++)	{ ?>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
					<input type="radio" name="from" id="<?php echo $strings[$from]['nativeName']; ?>" value="<?php echo $strings[$from]['nativeName']; ?>">
					<label for="<?php echo $strings[$from]['nativeName']; ?>"><?php echo $strings[$from]['nativeName']; ?></label>
				</div>
				<?php } ?>
				<a data-toggle="modal" data-target="#source" class="pointer">المزيد من اللغات ...</a>

				<div class="line"></div>
				<h5 class="bold">اللغة الستهدفة *</h5>
				<?php	for($to=0;$to<6;$to++)	{ ?>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
					<input type="radio" name="to" id="<?php echo $strings[$to]['nativeName']; ?>" value="<?php echo $strings[$to]['nativeName']; ?>">
					<label for="<?php echo $strings[$to]['nativeName']; ?>"><?php echo $strings[$to]['nativeName']; ?></label>
				</div>
				<?php } ?>
				<a data-toggle="modal" data-target="#target" class="pointer">المزيد من اللغات ...</a>

				<h2 class="text-center">التفاصيل</h2>
				<h5 class="bold">أدخل التفاصيل الخاصة بك لمتابعة هذا الطلب</h5>
				<div class="block text-center">
					<input type="text" placeholder="الاسم *" class="halfwidth" name="fname">
					<input type="text" placeholder="الاسم الاخير *" class="halfwidth" name="lname">
				</div>
				<!--<input type="email" placeholder="اسم الشركه" class="fullwidth">-->
				<div class="block text-center">
					<input type="tel" placeholder="رقم الهاتف *" class="halfwidth" name="mobile">
					<input type="text" placeholder="البريد الاليكترونى *" class="halfwidth" name="email">
				</div>
				<div class="line"></div>
				<!--<h4>كيف يمكننا الاتصال بك</h4>
				<div class="block">
					<input type="radio" name="conntact-way" id="call">
					<label for="call">اتصل بى عبر مكالمه صوتيه</label>
				</div>
				<div class="block">
					<input type="radio" name="conntact-way" id="email">
					<label for="email">راسلنى عبر البريد الاليكترونى</label>
				</div>-->
				<div class="block">
					<button role="submit" class="button button--isi button--border-thick button--round-l button--size-s inline-block">	ارسل البيانات</button>
				</div>

			</form>

		</div>
	</div>
	<!--                end asktranslate-section                            -->