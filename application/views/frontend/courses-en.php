	<!--                start howitwork-section                            -->
	<div class="howitwork margin-0 text-center" id="howitwork">
		<div class="content-header">
			<h4 class="bold">Courses</h4>
			<a href="<?php echo base_url(); ?>">	home</a> /
			<a href="<?php echo base_url().'courses/en'; ?>">	Coursess</a>
		</div>
	</div>
	<!--                end howitwork-section                            -->
	<!--                Start Courses-section                            -->
	<div class="Courses-section">
	<?php if(isset($datas) && !empty($datas)) { ?>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class='fa fa-close '></i></button>
			  </div>
			  <div class="modal-body">
				<form action="<?php echo base_url().'courses_action/en/'.$page; ?>" method="post" class="form-quote no-shadow no-top half-select">
					<?php echo validation_errors(); ?>

					<input type="hidden" name="course" value="" id="course">
					<p>Name in Cert. :</p>
					<input type="text" placeholder=" First Name *" class="name" name="fname">
					<input type="text" placeholder=" Last Name *" class="name" name="lname">
					<input type="date" placeholder=" Birth Date" class="name" name="birthdate">
					<input type="text" placeholder=" Nationality" class="name" name="nationality">
					<input type="text" placeholder=" Mobile *" class="name" name="mobile">
					<input type="email" placeholder="Email *" class="name" name="email">
					<!--<textarea placeholder=" Address" name="address"></textarea>
					<input type="text" placeholder=" المؤهل" class="name">
					<input type="text" placeholder=" الخبره المنهنيه (ان وجد)" class="name">
					<input type="text" placeholder="المنصب الحالى" class="name">
					<input type="text" placeholder="الاقتراحات والموضوعات التي ترغب في إضافتها للدورة التدريبية ‎:" class="name">
					<p>أي من الدورات التعليميه التالية ترغب في الالتحاق بها في المستقبل ؟ :</p>
					<div class="input-check">
						<input type="checkbox" id="malit">
						<label for="malit">الترجمة عسكرية</label>
					</div>
					<div class="input-check">
						<input type="checkbox" id="syas">
						<label for="syas">الترجمة الإعلامية وسياسية</label>
					</div>
					<div class="input-check">
						<input type="checkbox" id="adb">
						<label for="adb">الترجمة الأدبية</label>
					</div>
					<div class="input-check">
						<input type="checkbox" id="ttb">
						<label for="ttb">الترجمة التتبعية والمنظورة</label>
					</div>
					<div class="input-check">
						<input type="checkbox" id="ukt">
						<label for="ukt"> ترجمة لأمم المتحدة والمنظمات الدولية</label>
					</div>
					<div class="input-check">
						<input type="checkbox" id="oth">
						<label for="oth">أخرى</label>
					</div>
					<input type="text" placeholder="اخرى" class="name">
					<p>هل انت طالب ؟ :</p>
					<div class="input-check">
						<input type="radio" id="no" name="student">
						<label for="no">نعم</label>
						<input type="radio" id="yes" name="student">
						<label for="yes">لا</label>
					</div>
					<p>كم دوره حضرتها معنا ؟ :</p>
					<div class="input-check">
						<input type="number" class="name" value="0">
					</div>-->
					<p>Agreement</p>
					<div class="input-check">
						<input type="checkbox" id="agree" checked disabled />
						<label for="agree">Agree</label>
					</div>
					
					
					
					<button role="submit" class="button button--isi button--border-thick button--round-l button--size-s block">	تسجيل</button>
				</form>
			  </div>
			</div>
		  </div>
		</div>
		<div class="container-fluid text-center">
			<h2>كورسات اللغه</h2>
			<p>مع مساعدة من المعلمين المهنية والمترجمين لدينا سوف تكون قادرة <br>على شحذ المهارات الخاصة بك في أي وقت من الأوقات على الإطلاق</p>

			<?php foreach($datas as $data) { ?>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
				<div class="box-courses">
					<img src="<?php if($data->img != '' && file_exists($courses_folder.$data->img)) echo base_url().$courses_folder.$data->img; else echo base_url().$courses_folder.'course.png'; ?>" class="img-responsive top-img">
					<div class="lang-badge">
						<?php echo $data->lang; ?>
					</div>
					<div class="text-content-courses">
						<h4><?php echo $data->title; ?></h4>
						<p class="date"><i class='fa fa-clock'></i> <?php echo lang('monthar'.date('n', $data->time)); ?> <?php echo date('d', $data->time); ?>, <?php echo date('Y', $data->time); ?></p>
						<p><?php echo $data->desc; ?></p>
						<div class="line-courses"></div>
						<h2 class="red-color"><?php echo $data->price.' '.lang($this->system->currency); ?> <span class="per">/ الاسبوع</span></h2>
						<button course="<?php echo $data->id; ?>" class="open_modal button button--isi button--border-thick button--round-l button--size-s"  data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">اشترك فى الكورس</button>
					</div>
				</div>
			</div>
			<?php } ?>

			<div class="clear"></div>
			<div class="col-lg-12 text-center ">
				<nav aria-label="Page navigation">
					<ul class="pagination">
						<?php if($page > 3) { ?>
						<li>
							<a href="<?php echo $url.($page-2); ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<?php } ?>
						<?php if($page > 1) { ?><li><a href="<?php echo $url.($page-1); ?>"><?php echo $page-1; ?></a></li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="<?php echo $url.($page); ?>"><?php echo $page; ?></a></li><?php } ?>
						<?php if($page < $totalPages) { ?><li><a href="<?php echo $url.($page+1); ?>"><?php echo $page+1; ?></a></li><?php } ?>
						<?php if($page < $totalPages-1) { ?>
						<li>
							<a href="<?php echo $url.($page+2); ?>" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
						<?php } ?>
					</ul>
				</nav>
			</div>
		</div>
		<?php } else echo 'There is no Data'; ?>
	</div>
	<!--                end Courses-section                            -->