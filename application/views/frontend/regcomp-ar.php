	<!--                start howitwork-section                            -->
	<div class="howitwork margin-0 text-center" id="howitwork">
		<div class="content-header">
			<h4 class="bold">دخول الشركات </h4>
			<a href="<?php echo base_url(); ?>">	الرئيسيه</a> /
			<a href="<?php echo base_url().'regcomp/ar'; ?>">	تسجيل جديد</a>
		</div>
	</div>
	<!--                end howitwork-section                            -->
	<!--                Start Freelancer-section                            -->
	<div class="Freelancer-section">
		<div class="container-fluid">
			<form action="<?php echo base_url().'regcomp_action/ar/'.$user[0].'_'.$user[1].'_'.$user[2]; ?>" method="post" class="form-quote no-shadow no-top half-select" enctype="multipart/form-data">
				<h4>يمكنك ان تتحصل على موظفك من هنا </h4>
				<?php echo validation_errors(); ?>
				<br>
					<input type="text" value="<?php echo $user[1].' '.$user[2]; ?>" readonly class="name">
					<input type="hidden" name="translator" value="<?php echo $user[0]; ?>">
					<input type="text" placeholder=" اسم الشركه *" class="name" name="title">
					<!--<input type="text" placeholder=" سنه التاسيس" class="name">
					<input type="text" placeholder=" قطاع الشركه" class="name">
					<input type="date" placeholder=" عدد الموظفين" class="name">
					<input type="date" placeholder=" مكان الشركه بالمملكه" class="name">-->
					<input type="text" placeholder=" اسم الشخص المتواصل معه *" class="name" name="name">
					<input type="text" placeholder=" الدور الوظيفى" class="name" name="job">
					<input type="text" placeholder=" رقم الهاتف *" class="name" name="mobile">
					<input type="email" placeholder="البريد الاليكترونى *" class="name" name="email">
					<!--<input type="text" placeholder="اسم التسجيل" class="name">
					<input type="password" placeholder="كلمه المرور" class="name">
					<input type="date" placeholder=" الرقم المرجعى للوظيفه" class="name">
					<input type="date" placeholder=" التخصص المطلوب" class="name">
					<input type="text" placeholder="التخصص" class="name">
					<select class="select1">
						<option> المهارات المطلوبه</option>
						<option>الحاسوب</option>
						<option>لغات اخرى</option>
					</select>
					<input type="text" placeholder="ملاحظات اخرى " class="name">
					<input type="text" placeholder="عدد سنين الخبره" class="name">
					<select class="select1">
						<option>المستوى الوظيفى</option>
						<option>مبتدئ</option>
						<option>متمرس</option>
						<option>ادارى</option>
					</select>
					<select class="select1">
						<option>نوع التوظيف</option>
						<option>دوام كامل</option>
						<option>دوام جزئى</option>
						<option>عمل حر</option>
						<option>عقود</option>
					</select>
					<input type="text" placeholder="الراتب المقترح للوظيفه" class="name">-->
					<!--<label for="file-comp" class="file-input"><p>ارفاق شهاده تسجيل الشركه واوراق اعتمادها *</p>
						<input type="file" class="hidden" id="file-comp" name="img[]" multiple>
					</label>-->
					
					<button role="submit" class="button button--isi button--border-thick button--round-l button--size-s block">	تسجيل</button>
			</form>

		</div>
	</div>
	<!--                end Freelancer-section                            -->