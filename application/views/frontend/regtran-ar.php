	<!--                start howitwork-section                            -->
	<div class="howitwork margin-0 text-center" id="howitwork">
		<div class="content-header">
			<h4 class="bold">دخول المترجمين </h4>
			<a href="<?php echo base_url(); ?>">	الرئيسيه</a> /
			<a href="<?php echo base_url().'regtran/ar'; ?>">	تسجيل جديد</a>
		</div>
	</div>
	<!--                end howitwork-section                            -->
	<!--                Start Freelancer-section                            -->
	<div class="Freelancer-section">
		<div class="container-fluid">
			<form action="<?php echo base_url().'regtran_action/ar'; ?>" method="post" class="form-quote no-shadow no-top half-select" enctype="multipart/form-data">
				<h4> يمكنك التسجيل معنا كباحث عن وظيفة وسوف يتم اطلاع الشركات بسيرتك الذاتية </h4>
				<?php echo validation_errors(); ?>
				<br>
					<input type="text" placeholder=" الاسم الاول *" class="name" name="fname">
					<!--<input type="text" placeholder=" اسم ألاوسط" class="name">-->
					<input type="text" placeholder=" اللقب *" class="name" name="lname">
					<input type="text" placeholder=" الجنسيه" class="name" name="nationality">
					<input type="date" placeholder=" تاريخ الميلاد" class="name" name="birthdate">
					<select class="select1" name="six">
						<option value="">الجنس</option>
						<option value="male">ذكر</option>
						<option value="female">اانثى</option>
					</select>
					<input type="text" placeholder=" مكان الاقامه" class="name" name="place">
					<input type="text" placeholder=" رقم الهاتف *" class="name" name="mobile">
					<input type="email" placeholder="البريد الاليكترونى *" class="name" name="email">
					<!--<input type="text" placeholder="اسم التسجيل" class="name">
					<input type="password" placeholder="كلمه المرور" class="name" name="password">-->
					<select class="select1" name="status">
						<option value="">الحاله الاجتماعيه</option>
						<option value="married">متزوج</option>
						<option value="single">اعزب</option>
						<option value="divorced">مطلق</option>
					</select>
					<input type="text" placeholder="سنه التخرج" class="name" name="grad_year">
					<input type="text" placeholder="جامعه التخرج" class="name" name="univ">
					<input type="text" placeholder="التخصص" class="name" name="specialty">
					<select class="select1" name="skills">
						<option value="">المهارات</option>
						<option value="computer">الحاسوب</option>
						<option value="other_lang">لغات اخرى</option>
					</select>
					<input type="text" placeholder="الدوارات" class="name" name="courses">
					<input type="text" placeholder="عدد سنين الخبره" class="name" name="exper_year">
					<select class="select1" name="exper">
						<option value="">المستوى الوظيفى</option>
						<option value="junior">مبتدئ</option>
						<option value="senior">متمرس</option>
						<option value="admin">ادارى</option>
					</select>
					<input type="text" placeholder="الراتب المتوقع" class="name" name="salary">
					<!--<select class="select1" name="emp_type">
						<option value="">نوع التوظيف</option>
						<option value="full_time">دوام كامل</option>
						<option value="part_time">دوام جزئى</option>
						<option value="freelancer">عمل حر</option>
						<option value="contracts">عقود</option>
					</select>
					<input type="text" placeholder="مكان العمل الحالى" class="name">
					<input type="text" placeholder="الدور الوظيفى " class="name">
					<input type="text" placeholder="اماكن عمل سابقه" class="name">
					<input type="text" placeholder="المكان" class="name">
					<input type="text" placeholder="من " class="name">
					<input type="text" placeholder="الى" class="name">
					<input type="text" placeholder="الدور الوظيفى" class="name">-->
					<label for="file-cv" class="file-input"><p>ارفاق السيره الذاتيه *</p>
						<input type="file" class="hidden" id="file-cv"  name="cv">
					</label>
					<label for="file-img" class="file-input"><p>ارفاق الصوره الشخصيه</p>
						<input type="file" class="hidden" id="file-img"  name="img">
					</label>

					<button role="submit" class="button button--isi button--border-thick button--round-l button--size-s block">	تسجيل</button>
			</form>

		</div>
	</div>
	<!--                end Freelancer-section                            -->