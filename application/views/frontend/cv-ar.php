	<!--                start howitwork-section                            -->
	<div class="howitwork margin-0 text-center" id="howitwork">
		<div class="content-header">
			<h4 class="bold">السير الذاتيه</h4>
			<a href="<?php echo base_url(); ?>" class="margin-0-10">	الرئيسيه</a> |
			<a href="<?php echo base_url().'cv/ar'; ?>" class="margin-0-10"> السير الذاتيه </a>
		</div>
	</div>
	<!--                end howitwork-section                            -->
	<!--                start cv-section                            -->
	<div class="cv">
		<div class="container-fluid">
			<a href="<?php echo base_url().'regtran/ar'; ?>" class="button button--isi button--border-thick button--round-l button--size-s inline-block inline-block"><i class="fa fa-plus"></i> اضف سيره ذاتيه جديده</a>

		<?php if(isset($users) && !empty($users)) { ?>
			<?php foreach($users as $user) { ?>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
				<div class="cv-box">
					<div class="top-head-box-cv">
						<p class="inline-block">التفاصيل : <span><?php echo $user->fname.' '.$user->lname; ?></span></p>
						<a href="<?php echo base_url().'regcomp/ar/'.$user->user_id.'_'.$user->fname.'_'.$user->lname; ?>" class="button button--isi button--border-thick button--round-l button--size-s inline-block left inline-block"> تواصل الان </a>
					</div>

					<div class="cv-content">
						<div class="right img-cv">
							<img src="<?php if($user->img != '' && file_exists($users_folder.$user->img)) echo base_url().$users_folder.$user->img; else echo base_url().$users_folder.'user.png'; ?>">
						</div>
						<h2 class="darkblue"><?php echo $user->fname.' '.$user->lname; ?></h2>
						<h4><?php echo $user->lang; ?></h4>
						<div class="line"></div>
						<div class="margin-5px-10px inline-block">
							<p class="inline-block">العمر : <span><?php echo date('Y')-date('Y',strtotime($user->birthdate)); ?> </span></p>
						</div>
						<div class="margin-5px-10px inline-block">
							<p class="inline-block">النوع : <span> <?php echo $user->six; ?> </span></p>
						</div>
						<div class="margin-5px-10px inline-block">
							<p class="inline-block">الجنسيه : <span> <?php echo $user->nationality; ?> </span></p>
						</div>
						<div class="margin-5px-10px inline-block">
							<p class="inline-block"> مكان الاقامه : <span> <?php echo $user->place; ?> </span></p>
						</div>
						<div class="line"></div>
						<br>
						<div class="text-right margin-auto">
							<p class="inline-block margin-right-50">الحاله الاجتماعيه : <span> <?php echo $user->status; ?> </span></p>
							<p class="inline-block margin-right-50"> سنه التخرج : <span> <?php echo $user->grad_year; ?> </span></p>
							<p class="inline-block margin-right-50"> جامعه التخرج : <span><?php echo $user->univ; ?></span></p>
							<p class="inline-block margin-right-50">التخصص : <span><?php echo $user->specialty; ?></span></p>
							<p class="inline-block margin-right-50">المهارات : <span> <?php echo $user->skills; ?> </span></p>
							<p class="inline-block margin-right-50">الدوارات : <span><?php echo $user->courses; ?> </span></p>
							<p class="inline-block margin-right-50">عدد سنين الخبره : <span><?php echo $user->exper_year; ?></span></p>
							<p class="inline-block margin-right-50">مستوى الخبره : <span><?php echo $user->exper; ?></span></p>
							<p class="inline-block margin-right-50">الراتب المتوقع : <span> <?php echo $user->salary; ?></span></p>
						</div>
						<div class="line"></div>
						<div class="left">
							<p class="inline-block margin-5px-10px">تاريخ النشر : <span> <?php echo date('Y:m:d', $user->time); ?></span></p>
							<p class="inline-block margin-5px-10px">كود السيره الذاتيه : <span> <?php echo $user->code; ?></span></p>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>

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

		<?php } else echo 'لا توجد بيانات'; ?>
		</div>
	</div>
	<!--                end cv-section                            -->