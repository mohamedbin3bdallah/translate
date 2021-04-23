        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left" style="width:100%;">
                <h3 style="text-align:center;"><?php echo lang('translators'); ?></h3>
              </div>

              <div class="">
                <div class="col-md-3 col-sm-3 col-xs-5 <?php if($this->loginuser->dir == 'rtl') echo 'col-md-offset-9 col-sm-offset-9 col-xs-offset-7'; //else echo 'col-md-offset-2 col-sm-offset-2 col-xs-offset-1'; ?> form-group top_search" dir="<?php echo $this->loginuser->dir; ?>">
                  <div class="input-group">
					<?php if(strpos($this->loginuser->privileges, ',uadd,') !== false) { ?><button type="button" class="btn btn-primary" style="background-color:#143E66;" onclick="location.href = 'add'"><?php echo lang('add_user'); ?></button><?php } ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" dir="<?php echo $this->loginuser->dir; ?>">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <!--<h2>Button Example <small>Users</small></h2>-->
                    <ul class="nav navbar-<?php if($this->loginuser->dir == 'rtl') echo 'left'; else echo 'right'; ?> panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <!--<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>-->
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!--<p class="text-muted font-13 m-b-30">
                      The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>-->
                    <?php if(!empty($users)) { ?>
					<table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th><?php echo lang('code'); ?></th>						  						  						  <th><?php echo lang('username'); ?></th>
						  <th><?php echo lang('name'); ?></th>
						  <th><?php echo lang('usertype'); ?></th>						  						  <th><?php echo lang('lang'); ?></th>						  						  <th><?php echo lang('details'); ?></th>						  						  <th><?php echo lang('companies'); ?></th>						  						  <th><?php echo lang('works'); ?></th>
						  <th><?php echo lang('active'); ?></th>
						  <?php if(strpos($this->loginuser->privileges, ',uedit,') !== false) { ?><th><?php echo lang('edit'); ?></th><?php } ?>
						  <?php if(strpos($this->loginuser->privileges, ',udelete,') !== false) { ?><th><?php echo lang('delete'); ?></th><?php } ?>
                        </tr>
                      </thead>
                      <tbody>
					  <?php foreach($users as $user) { ?>
                        <tr>
                          <td align="center"><?php echo $user['code']; ?></td>						  						  						  <td align="center"><?php echo $user['username']; ?></td>
						  <td align="center"><?php echo $user['name']; ?></td>						  
						  <td align="center"><?php echo $user['usertype_title']; ?></td>						  						  <td align="center"><?php echo $user['language_title']; ?></td>						  						  <td align="center">						  <a class="" href="#" data-toggle="modal" data-target="#details-<?php echo $user['id']; ?>"><?php echo lang('details'); ?></a>						   <div id="details-<?php echo $user['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">								<div class="modal-dialog modal-lg">									<div class="modal-content" style="border-top-left-radius:50px; border-bottom-right-radius:50px; background-color:#143E66; color:#fff;">										<div class="modal-header">											<button type="button" class="close" data-dismiss="modal">&times;</button>											<br>											<h3><?php echo lang('details'); ?></h3>        								</div>										<div class="modal-body">											<table id="datatable-buttons" class="table"  dir="<?php echo $this->loginuser->dir; ?>" style="background-color:#143E66; color:#fff;">												<thead>													<tr>														<td><?php echo lang('image'); ?></td>														<td align="center"><?php if(isset($user['img']) && $user['img'] != '' && file_exists($this->config->item('users_folder').$user['img'])) { ?><img src="<?php echo base_url().$this->config->item('users_folder').$user['img']; ?>" class="img-responsive" style="max-width:150px;max-height:150px;border-radius:15%;"/><?php } ?></td>													</tr>													<tr>														<td><?php echo lang('email'); ?></td>														<td align="center"><?php echo $user['email']; ?></td>													</tr>													<tr>														<td><?php echo lang('mobile'); ?></td>														<td align="center"><?php echo $user['mobile']; ?></td>													</tr>													<tr>														<td><?php echo lang('nationality'); ?></td>														<td align="center"><?php echo $user['nationality']; ?></td>													</tr>													<tr>														<td><?php echo lang('six'); ?></td>														<td align="center"><?php echo $user['six']; ?></td>													</tr>													<tr>														<td><?php echo lang('univ'); ?></td>														<td align="center"><?php echo $user['univ']; ?></td>													</tr>													<tr>														<td><?php echo lang('grad_year'); ?></td>														<td align="center"><?php echo $user['grad_year']; ?></td>													</tr>													<tr>														<td><?php echo lang('specialty'); ?></td>														<td align="center"><?php echo $user['specialty']; ?></td>													</tr>													<tr>														<td><?php echo lang('cv'); ?></td>														<td align="center">														<?php															$cvext = pathinfo($this->config->item('cvs_folder').$user['cv'], PATHINFO_EXTENSION); 															if(strtoupper($cvext) == 'PDF') $icon = 'fa fa-file-pdf-o'; elseif(strtoupper($cvext) == 'DOC' || strtoupper($cvext) == 'DOCX') $icon = 'fa fa-file-word-o'; else $icon = 'fa fa-file-image-o';															{																echo '<a href="#" data-toggle="modal" data-target="#cv-'.$user['id'].'"><i class="'.$icon.' fa-2x" style="color:#fff;"></i></a>';																echo '<br>';																echo '<a href="'.base_url().$this->config->item('cvs_folder').$user['cv'].'" style=" color:#fff;" download>'.lang('download').'</a>';															}														?>														</td>													</tr>													<tr>														<td><?php echo lang('editemployee'); ?></td>														<td align="center"><?php if($user['uid'] != '' && isset($employees[$user['uid']])) echo $employees[$user['uid']]; ?></td>													</tr>													<tr>														<td><?php echo lang('edittime'); ?></td>														<td align="center"><?php if($user['time'] != '') { echo ArabicTools::arabicDate($system->calendar.' Y-m-d', $user['time']).' , '.date('h:i:s', $user['time']); if(date('H', $user['time']) < 12) echo ' '.lang('am'); else echo ' '.lang('pm'); } ?></td>													</tr>												</thead>											</table>										</div>									</div>								</div>							</div>							<div id="cv-<?php echo $user['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="yourModalLabel" aria-hidden="true">									<div class="modal-dialog modal-lg">										<div class="modal-content">											<div class="modal-header">												<?php echo $user['name'].'<br>'.lang('cv'); ?>												<br>											</div>											<div class="modal-body">												<center>													<div class="embed-responsive embed-responsive-4by3">													<?php														if(strtoupper($cvext) == 'PDF') echo '<iframe src="'.base_url().$this->config->item('cvs_folder').$user['cv'].'" class="embed-responsive-item" frameborder="0"></iframe>';														elseif(strtoupper($cvext) == 'DOC' || strtoupper($cvext) == 'DOCX') echo '<iframe src="http://docs.google.com/gview?url=http://translate.com/'.base_url().$this->config->item('cvs_folder').$user['cv'].'&embedded=true" class="embed-responsive-item" frameborder="0"></iframe>';														else echo '<img class="img-responsive" src="'.base_url().$this->config->item('cvs_folder').$user['cv'].'" width="100%" />';													?>													</div>												</center>											</div>										</div>									</div>								</div>						  </td>						  						  <td align="center">						  <?php if(isset($user['companies']) && !empty($user['companies'])) { ?>						  <a class="" href="#" data-toggle="modal" data-target="#companies-<?php echo $user['id']; ?>"><?php echo count($user['companies']); ?></a>						   <div id="companies-<?php echo $user['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">								<div class="modal-dialog modal-lg">									<div class="modal-content" style="border-top-left-radius:50px; border-bottom-right-radius:50px; background-color:#143E66; color:#fff;">										<div class="modal-header">											<button type="button" class="close" data-dismiss="modal">&times;</button>											<br>											<h3><?php echo lang('companies'); ?></h3>        								</div>										<div class="modal-body">											<table id="datatable-buttons" class="table"  dir="<?php echo $this->loginuser->dir; ?>" style="background-color:#143E66; color:#fff;">												<?php if(!empty($user['companies'])) { ?>												<thead>													<tr>														<td><?php echo lang('company'); ?></td>														<td><?php echo lang('time'); ?></td>													</tr>												</thead>												<?php } ?>												<tbody>												<?php foreach($user['companies'] as $company) { ?>													<tr>														<td align="center"><?php echo $company['company_title']; ?></td>														<td align="center"><?php if($company['company_time'] != '') { echo ArabicTools::arabicDate($system->calendar.' Y-m-d', $company['company_time']).' , '.date('h:i:s', $company['company_time']); if(date('H', $company['company_time']) < 12) echo ' '.lang('am'); else echo ' '.lang('pm'); } ?></td>													</tr>												<?php } ?>												</tbody>											</table>										</div>									</div>								</div>							</div>						  <?php } ?>						  </td>						  						  <td align="center">						  <?php if(isset($user['items']) && !empty($user['items'])) { ?>						  <a class="" href="#" data-toggle="modal" data-target="#open-<?php echo $user['id']; ?>"><?php echo count($user['items']); ?></a>						   <div id="open-<?php echo $user['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">								<div class="modal-dialog modal-lg">									<div class="modal-content" style="border-top-left-radius:50px; border-bottom-right-radius:50px; background-color:#143E66; color:#fff;">										<div class="modal-header">											<button type="button" class="close" data-dismiss="modal">&times;</button>											<br>											<h3><?php echo lang('works'); ?></h3>        								</div>										<div class="modal-body">											<table id="datatable-buttons" class="table"  dir="<?php echo $this->loginuser->dir; ?>" style="background-color:#143E66; color:#fff;">												<?php if(!empty($user['items'])) { ?>												<thead>													<tr>														<td><?php echo lang('translate_needer'); ?></td>														<td><?php echo lang('lang'); ?></td>														<td><?php echo lang('file'); ?></td>														<td><?php echo lang('time'); ?></td>													</tr>												</thead>												<?php } ?>												<tbody>												<?php foreach($user['items'] as $item) { ?>													<tr>														<td align="center"><?php if(isset($employees[$item['work_company']])) echo $employees[$item['work_company']]; ?></td>														<td align="center"><?php echo $item['work_lang']; ?></td>														<td align="center">														<?php 															if(isset($item['work_file']) && $item['work_file'] != '' && file_exists($this->config->item('b_files_folder').$item['work_file']))															{																$ext = pathinfo($this->config->item('b_files_folder').$item['work_file'], PATHINFO_EXTENSION); 																if(strtoupper($ext) == 'PDF') $icon = 'fa fa-file-pdf-o'; elseif(strtoupper($ext) == 'DOC' || strtoupper($ext) == 'DOCX') $icon = 'fa fa-file-word-o'; else $icon = 'fa fa-file-image-o';																{																	echo '<a href="#" data-toggle="modal" data-target="#file-'.$item['work_id'].'"><i class="'.$icon.' fa-2x" style="color:#fff;"></i></a>';																	echo '<br>';																	echo '<a href="'.base_url().$this->config->item('b_files_folder').$item['work_file'].'" style=" color:#fff;" download>'.lang('download').'</a>';																}														?>															<!--<a href="<?php //echo base_url().$this->config->item('b_files_folder').$item['work_file']; ?>" style="color:#fff;" download><?php //echo $item['work_file']; ?>-->														<?php } ?>														</td>														<td align="center"><?php if($item['work_time'] != '') { echo ArabicTools::arabicDate($system->calendar.' Y-m-d', $item['work_time']).' , '.date('h:i:s', $item['work_time']); if(date('H', $item['work_time']) < 12) echo ' '.lang('am'); else echo ' '.lang('pm'); } ?></td>													</tr>												<?php } ?>												</tbody>											</table>										</div>									</div>								</div>							</div>							<?php foreach($user['items'] as $item) { $ext = pathinfo($this->config->item('b_files_folder').$item['work_file'], PATHINFO_EXTENSION); ?>								<div id="file-<?php echo $item['work_id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="yourModalLabel" aria-hidden="true">									<div class="modal-dialog modal-lg">										<div class="modal-content">											<div class="modal-header">												<?php echo $item['work_file']; ?>												<br>											</div>											<div class="modal-body">												<center>													<div class="embed-responsive embed-responsive-4by3">													<?php														if(strtoupper($ext) == 'PDF') echo '<iframe src="'.base_url().$this->config->item('b_files_folder').$item['work_file'].'" class="embed-responsive-item" frameborder="0"></iframe>';														elseif(strtoupper($ext) == 'DOC' || strtoupper($ext) == 'DOCX') echo '<iframe src="http://docs.google.com/gview?url=http://translate.com/'.base_url().$this->config->item('b_files_folder').$item['work_file'].'&embedded=true" class="embed-responsive-item" frameborder="0"></iframe>';														else echo '<img class="img-responsive" src="'.base_url().$this->config->item('b_files_folder').$item['work_file'].'" width="100%" />';													?>													</div>												</center>											</div>										</div>									</div>								</div>							<?php } ?>						  <?php } ?>						  </td>
						  <td align="center"><input type="checkbox" <?php if($user['active'] == 1) echo 'checked'; ?> disabled></td>
						  <?php if(strpos($this->loginuser->privileges, ',uedit,') !== false) { ?><td align="center"><a href="<?php echo base_url(); ?>users/edit/<?php echo $user['id']; ?>" style="color: #2AA3D6;"><i style="color:#2AA3D6;" class="glyphicon glyphicon-edit"></i></a></td><?php } ?>
						  <?php if(strpos($this->loginuser->privileges, ',udelete,') !== false) { ?><td align="center">
							<i id="<?php echo $user['id']; ?>" style="color:red;" class="del glyphicon glyphicon-remove-circle"></i>
							<div id="del-<?php echo $user['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<?php echo lang('deletemodal'); ?>
											<br>
        								</div>
										<div class="modal-body">
										<center>
											<button class="btn btn-danger" id="action_buttom" onclick="location.href = 'users/del/<?php echo $user['id']; ?>'" data-dismiss="modal"><?php echo lang('yes'); ?></button>
											<button class="btn btn-success" data-dismiss="modal" aria-hidden="true"><?php echo lang('no'); ?></button>
										</center>
										</div>
									</div>
								</div>
							</div>
						</td><?php } ?>
                        </tr>
					  <?php } ?>
                      </tbody>
                    </table>
					<?php } else echo lang('no_data');?>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- /page content -->