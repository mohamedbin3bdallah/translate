        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left" style="width:100%;">
                <h3 style="text-align:center;"><?php echo lang('companies'); ?></h3>
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
                          <th><?php echo lang('code'); ?></th>						  						  <th><?php echo lang('company'); ?></th>						  						  <th><?php echo lang('username'); ?></th>
						  <th><?php echo lang('name'); ?></th>						  						  <th><?php echo lang('details'); ?></th>						  						  <th><?php echo lang('translator'); ?></th>						  						  <th><?php echo lang('accept'); ?></th>						  						  						  						  
						  <th><?php echo lang('active'); ?></th>
						  <?php if(strpos($this->loginuser->privileges, ',uedit,') !== false) { ?><th><?php echo lang('edit'); ?></th><?php } ?>
						  <?php if(strpos($this->loginuser->privileges, ',udelete,') !== false) { ?><th><?php echo lang('delete'); ?></th><?php } ?>
                        </tr>
                      </thead>


                      <tbody>
					  <?php foreach($users as $user) { ?>
                        <tr id="tr-<?php echo $user['company_id']; ?>" class="<?php if($user['company_accept'] == '2') echo 'danger'; elseif($user['company_accept'] == 0) echo 'warning'; else echo 'success'; ?>">
                          <td align="center"><?php echo $user['code']; ?></td>						  						  <td align="center"><?php echo $user['company_title']; ?></td>						  						  <td align="center"><?php echo $user['username']; ?></td>
						  <td align="center"><?php echo $user['name']; ?></td>						  						  						  <td align="center">						  <a class="" href="#" data-toggle="modal" data-target="#details-<?php echo $user['id']; ?>"><?php echo lang('details'); ?></a>						   <div id="details-<?php echo $user['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">								<div class="modal-dialog modal-lg">									<div class="modal-content" style="border-top-left-radius:50px; border-bottom-right-radius:50px; background-color:#143E66; color:#fff;">										<div class="modal-header">											<button type="button" class="close" data-dismiss="modal">&times;</button>											<br>											<h3><?php echo lang('details'); ?></h3>        								</div>										<div class="modal-body">											<table id="datatable-buttons" class="table"  dir="<?php echo $this->loginuser->dir; ?>" style="background-color:#143E66; color:#fff;">												<thead>													<tr>														<td><?php echo lang('image'); ?></td>														<td align="center"><?php if(isset($user['img']) && $user['img'] != '' && file_exists($this->config->item('users_folder').$user['img'])) { ?><img src="<?php echo base_url().$this->config->item('users_folder').$user['img']; ?>" class="img-responsive" style="max-width:150px;max-height:150px;border-radius:15%;"/><?php } ?></td>													</tr>													<tr>														<td><?php echo lang('email'); ?></td>														<td align="center"><?php echo $user['email']; ?></td>													</tr>													<tr>														<td><?php echo lang('mobile'); ?></td>														<td align="center"><?php echo $user['mobile']; ?></td>													</tr>													<tr>														<td><?php echo lang('lang'); ?></td>														<td align="center"><?php echo $user['language_title']; ?></td>													</tr>													<tr>														<td><?php echo lang('editemployee'); ?></td>														<td align="center"><?php if($user['uid'] != '' && isset($employees[$user['uid']])) echo $employees[$user['uid']]; ?></td>													</tr>													<tr>														<td><?php echo lang('edittime'); ?></td>														<td align="center"><?php if($user['time'] != '') { echo ArabicTools::arabicDate($system->calendar.' Y-m-d', $user['time']).' , '.date('h:i:s', $user['time']); if(date('H', $user['time']) < 12) echo ' '.lang('am'); else echo ' '.lang('pm'); } ?></td>													</tr>												</thead>											</table>										</div>									</div>								</div>							</div>						  </td>						  						  <td align="center"><?php if($user['company_translator'] != '' && isset($employees[$user['company_translator']])) echo $employees[$user['company_translator']]; ?></td>						  <td align="center">							<div class="col-md-12 col-sm-12 col-xs-12">								<select id="accept-<?php echo $user['company_id']; ?>" name="accept" orderid="<?php echo $user['company_id']; ?>" class="form-control accept" style="border-radius:15px;" <?php if($user['company_accept'] != '0' || strpos($this->loginuser->privileges, ',oaccept,') == false) echo 'disabled="true"'; ?>>									<option value="0" <?php if($user['company_accept'] == 0) echo 'selected'; ?>><?php echo lang('waiting'); ?></option>									<option value="1" <?php if($user['company_accept'] == 1) echo 'selected'; ?>><?php echo lang('accept'); ?></option>									<option value="2" <?php if($user['company_accept'] == 2) echo 'selected'; ?>><?php echo lang('reject'); ?></option>								</select>							</div>						  </td>						  
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
											<button class="btn btn-danger" id="action_buttom" onclick="location.href = 'del/<?php echo $user['id']; ?>'" data-dismiss="modal"><?php echo lang('yes'); ?></button>
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