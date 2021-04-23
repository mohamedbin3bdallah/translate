<!--                start subscribe-section                            -->
	<div class="subscribe-section">
		<div class="container-fluid">
			<div class="subscribe-content">
				<div class="col-lg-6 col-md-9 col-sm-12 col-xs-12 ">
					<form class="sub-form">
						<input type="email" placeholder="email">
						<button class="button button--isi button--border-thick button--round-l button--size-s inline-block">	registration</button>

					</form>
				</div>
				<div class="col-lg-2 col-md-2 hidden-sm hidden-xs ">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 social-sub ">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!--                end subscribe-section                            -->
	<!--                start footer-section                            -->
	<div class="footer">
		<div class="container-fluid">
			<div class="footer-content">
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 ">
					<a href="indexen.html">
						<img src="css/pic/logo.png" alt="#" class="img-responsive logo-footer">
					</a>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
					<img src="css/pic/bbb.png" alt="#" class="logos-comp">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 ">
					<h2>Services</h2>
					<ul>
						<li><a href="#">Business and Legal Translation</a></li>
						<li><a href="#">Technical Translation</a></li>
						<li><a href="#">Personal Documents</a></li>
						<li><a href="#">Apostille and Legalization</a></li>
						<li><a href="#">Hands-on Learning</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 ">
					<h2>Customer Care</h2>
					<ul>
						<li><a href="contactusen.html">Contact Us</a></li>
						<li><a href="aboutusen.html">About Us</a></li>
						<li><a href="newsen.html">News & Articles</a></li>
						<li><a href="#">	Projects</a></li>
						<li><a href="#">Portfolio</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 paddingb-30">
					<h2>Call now for Services!
						<br>444-333-2211 </h2>
					<a href="mailto:support@themerex.net"><big><i class="fa fa-envelope"></i></big> email us</a>

					<h2>123, New Lenox
						<br>Chicago, IL, 60606
					</h2>
					<a href="#popup_with_map"><big><i class="fa fa-map-marker"></i></big> Get Direction</a>


				</div>
			</div>
		</div>
	</div>
	<!--                end footer-section                            -->
	<script src="<?php echo base_url(); ?>trans/js/jquery-3.1.1.min.js"></script>
	<script src="<?php echo base_url(); ?>trans/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>trans/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url(); ?>trans/js/plugins.js"></script>
	<script>
	$(document).ready(function(){
		$(".open_modal").click(function() {
			var id = $(this).attr('course');
			$("#course").val(id);
		});
	});
	</script>
	<!--<style>
.modal-backdrop.in
{
	background-color: #fff;
	opacity: 0.2;
}
</style>-->
<link href="<?php echo base_url(); ?>css/custom.ltr.css" rel="stylesheet">
<?php if(isset($docs_title) && !empty($docs_title)) { ?>
<script type="text/javascript">
	<?php for($cc=0;$cc<count($docs_title);$cc++) { ?>
	$(document).ready(function(){
			$('<?php echo $docs_title[$cc]['selector']; ?>').attr('data-toggle', 'tooltip');
			$('<?php echo $docs_title[$cc]['selector']; ?>').attr('data-placement', 'top');
			$('<?php echo $docs_title[$cc]['selector']; ?>').attr('title', '<?php echo lang($docs_title[$cc]['title']); ?>');
	});
	<?php } ?>
	
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})
</script>
<?php } ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#submit_form').submit(function() {
			$('#loader').modal({show: true, backdrop: 'static', keyboard: false});
			//e.preventDefault();
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#action_buttom').click(function() {
			$('#loader').modal({show: true, backdrop: 'static', keyboard: false});
		});
	});
</script>
<script>
<?php 
//$pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
if(isset($_SESSION['message'],$_SESSION['time'],$_SERVER['REQUEST_TIME']) && ($_SERVER['REQUEST_TIME'] < ($_SESSION['time']+3))) {
?>
$(document).ready(function(){
	$("#<?php echo $_SESSION['message']; ?>").modal('show');
	setTimeout(function() { $("#<?php echo $_SESSION['message']; ?>").modal('hide'); }, 3000);
});
<?php  /*unset($_SESSION['message']);*/ } ?>
</script>
<div id="loader" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="padding-top: 55px;">
	<img src="<?php echo base_url(); ?>imgs/loader.gif" id="gif" style="display: block; margin: 0 auto; width: 100px;">
</div>
<div id="success" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content"  style="background-color: green;">
			<div class="modal-body">
				<center style="color: #fff; font-size:25px;">
					<?php echo lang('success_saved'); ?>
				</center>
			</div>
		</div>
	</div>
</div>
<div id="itempayment" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content"  style="background-color: red;">
			<div class="modal-body">
				<center style="color: #fff; font-size:25px;">
					<?php echo lang('please_renew_your_partnership_less_10_days'); ?>
				</center>
			</div>
		</div>
	</div>
</div>
<div id="cantdelete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content"  style="background-color: red;">
			<div class="modal-body">
				<center style="color: #fff; font-size:25px;">
					<?php echo lang('cant_delete'); ?>
				</center>
			</div>
		</div>
	</div>
</div>
<div id="somthingwrong" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content"  style="background-color: red;">
			<div class="modal-body">
				<center style="color: #fff; font-size:25px;">
					<?php echo lang('somthing_wrong'); ?>
				</center>
			</div>
		</div>
	</div>
</div>
<div id="not_available" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content"  style="background-color: orange;">
			<div class="modal-body">
				<center style="color: #fff; font-size:25px;">
					<?php echo lang('not_available'); ?>
				</center>
			</div>
		</div>
	</div>
</div>
<div id="inputnotcorrect" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content"  style="background-color: orange;">
			<div class="modal-body">
				<center style="color: #fff; font-size:25px;">
					<?php echo lang('input_not_correct'); ?>
				</center>
			</div>
		</div>
	</div>
</div>
<div id="invalidinput" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content"  style="background-color: orange;">
			<div class="modal-body">
				<center style="color: #fff; font-size:25px;">
					<?php echo lang('invalid_input'); ?>
				</center>
			</div>
		</div>
	</div>
</div>
<div id="numberexist" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content"  style="background-color: orange;">
			<div class="modal-body">
				<center style="color: #fff; font-size:25px;">
					<?php echo lang('number_exist'); ?>
				</center>
			</div>
		</div>
	</div>
</div>
<div id="usernameexist" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content"  style="background-color: orange;">
			<div class="modal-body">
				<center style="color: #fff; font-size:25px;">
					<?php echo lang('username_exist'); ?>
				</center>
			</div>
		</div>
	</div>
</div>
<div id="nameexist" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content"  style="background-color: orange;">
			<div class="modal-body">
				<center style="color: #fff; font-size:25px;">
					<?php echo lang('name_exist'); ?>
				</center>
			</div>
		</div>
	</div>
</div>
<div id="emailexist" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content"  style="background-color: orange;">
			<div class="modal-body">
				<center style="color: #fff; font-size:25px;">
					<?php echo lang('email_exist'); ?>
				</center>
			</div>
		</div>
	</div>
</div>
<div id="emailnotexist" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content"  style="background-color: orange;">
			<div class="modal-body">
				<center style="color: #fff; font-size:25px;">
					<?php echo lang('email_not_exist'); ?>
				</center>
			</div>
		</div>
	</div>
</div>
<div id="codeexist" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content"  style="background-color: orange;">
			<div class="modal-body">
				<center style="color: #fff; font-size:25px;">
					<?php echo lang('code_exist'); ?>
				</center>
			</div>
		</div>
	</div>
</div>

</body>

</html>