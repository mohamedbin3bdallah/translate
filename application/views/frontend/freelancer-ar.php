	<!--                start howitwork-section                            -->
	<div class="howitwork margin-0 text-center" id="howitwork">
		<div class="content-header">
			<h4 class="bold">انضم لفريق العمل الحر‎ لدينا‎</h4>
			<a href="<?php echo base_url(); ?>">	الرئيسيه</a> /
			<a href="<?php echo base_url().'freelancer/ar'; ?>">	انضم لفريق العمل الحر‎ لدينا‎</a>
		</div>
	</div>
	<!--                end howitwork-section                            -->
	<!--                Start Freelancer-section                            -->
	<div class="Freelancer-section">
		<div class="container-fluid">
			<form action="<?php echo base_url().'freelancer_action/ar'; ?>" method="post" class="form-quote no-shadow no-top half-select" enctype="multipart/form-data">
				<p>تفتخر شركة صالح آل العمر للترجمة المعتمدة باستقطابها للمحترفين في الترجمة التحريرية والفورية من كافة أرجاء الكرة الأرضية. لدينا شبكة كبيرة من المترجمين في الشرق الأوسط وأفريقيا وأوروبا حيث يوجد عملاؤنا.  إذا كنت حاصل على درجة علمية معترف بها في الترجمة ولديك أكثر من خمس سنوات خبرة عملية في الترجمة سواء أكانت متخصصة أم لا، فنود أن نتعرف عليك ويشرفنا أن تكون جزء من فريقنا في شركة صالح آل العمر للترجمة المعتمدة.</p>
				<?php echo validation_errors(); ?>
				<input type="text" placeholder=" الاسم *" class="name" name="fname">
				<input type="text" placeholder=" اللقب *" class="name" name="lname">
				<input type="email" placeholder="البريد الاليكترونى *" class="name" name="email">
				<input type="text" placeholder=" رقم الهاتف *" class="name">
				<label for="file-input" class="file-input"><p>اختار الملف</p>
					<input type="file" class="hidden" id="file-input" name="cv">
				</label>
				<button role="submit" class="button button--isi button--border-thick button--round-l button--size-s block">	ارسال</button>
			</form>

		</div>
	</div>
	<!--                end Freelancer-section                            -->