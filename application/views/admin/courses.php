        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left" style="width:100%;">
                <h3 style="text-align:center;"><?php echo lang('courses'); ?></h3>
              </div>

              <div class="">
                <div class="col-md-3 col-sm-3 col-xs-5 <?php if($this->loginuser->dir == 'rtl') echo 'col-md-offset-9 col-sm-offset-9 col-xs-offset-7'; //else echo 'col-md-offset-2 col-sm-offset-2 col-xs-offset-1'; ?> form-group top_search" dir="<?php echo $this->loginuser->dir; ?>">
                  <div class="input-group">
					<?php if(strpos($this->loginuser->privileges, ',csadd,') !== false) { ?><button type="button" class="btn btn-primary" style="background-color:#143E66;" onclick="location.href = 'courses/add'"><?php echo lang('add_course'); ?></button><?php } ?>
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
                    <?php if(!empty($courses)) { ?>
					<table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th><?php echo lang('code'); ?></th>						  						  						  <th><?php echo lang('lang'); ?></th>						  						  						  <th><?php echo lang('title'); ?></th>						  						  						  <th><?php echo lang('price'); ?></th>						  						  						  <th><?php echo lang('image'); ?></th>
						  <th><?php echo lang('desc'); ?></th>						  						  						  <th><?php echo lang('orders'); ?></th>
						  <th><?php echo lang('editemployee'); ?></th>
						  <th><?php echo lang('edittime'); ?></th>
						  <th><?php echo lang('active'); ?></th>
						  <?php if(strpos($this->loginuser->privileges, ',csedit,') !== false) { ?><th><?php echo lang('edit'); ?></th><?php } ?>
						  <?php if(strpos($this->loginuser->privileges, ',csdelete,') !== false) { ?><th><?php echo lang('delete'); ?></th><?php } ?>
                        </tr>
                      </thead>


                      <tbody>
					  <?php foreach($courses as $course) { ?>
                        <tr>						  <td align="center"><?php echo $course['code']; ?></td>						  
                          						  <td align="center"><?php echo $course['lang']; ?></td>						  						  <td align="center"><?php echo $course['title']; ?></td>						  						  						  <td align="center"><?php echo $course['price'].' '.lang($system->currency); ?></td>						  						  						  <td align="center"><?php if(isset($course['img']) && $course['img'] != '' && file_exists($this->config->item('courses_folder').$course['img'])) { ?><img src="<?php echo base_url().$this->config->item('courses_folder').$course['img']; ?>" class="img-responsive" style="max-width:150px;max-height:150px;border-radius:15%;"/><?php } ?></td>
						  <td style="text-align:justify;"><?php echo htmlspecialchars_decode($course['desc']); ?></td>						  						  						  <td align="center">						  <?php if(isset($course['items']) && !empty($course['items'])) { ?>						  <a class="" href="#" data-toggle="modal" data-target="#open-<?php echo $course['id']; ?>"><?php echo count($course['items']); ?></a>						   <div id="open-<?php echo $course['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">								<div class="modal-dialog modal-lg">									<div class="modal-content" style="border-top-left-radius:50px; border-bottom-right-radius:50px; background-color:#143E66; color:#fff;">										<div class="modal-header">											<button type="button" class="close" data-dismiss="modal">&times;</button>											<br>											<h3><?php echo lang('orders'); ?></h3>        								</div>										<div class="modal-body">											<table id="datatable-buttons" class="table"  dir="<?php echo $this->loginuser->dir; ?>" style="background-color:#143E66; color:#fff;">												<?php if(!empty($course['items'])) { ?>												<thead>													<tr>														<td><?php echo lang('trainee'); ?></td>														<td><?php echo lang('email'); ?></td>														<td><?php echo lang('mobile'); ?></td>														<td><?php echo lang('time'); ?></td>													</tr>												</thead>												<?php } ?>												<tbody>												<?php foreach($course['items'] as $item) { ?>													<tr>														<td align="center"><?php if(isset($employees[$item['course_order_user']]['name'])) echo $employees[$item['course_order_user']]['name']; ?></td>														<td align="center"><?php if(isset($employees[$item['course_order_user']]['email'])) echo $employees[$item['course_order_user']]['email']; ?></td>														<td align="center"><?php if(isset($employees[$item['course_order_user']]['mobile'])) echo $employees[$item['course_order_user']]['mobile']; ?></td>														<td align="center"><?php if($item['course_order_time'] != '') { echo ArabicTools::arabicDate($system->calendar.' Y-m-d', $item['course_order_time']).' , '.date('h:i:s', $item['course_order_time']); if(date('H', $item['course_order_time']) < 12) echo ' '.lang('am'); else echo ' '.lang('pm'); } ?></td>													</tr>												<?php } ?>												</tbody>											</table>										</div>									</div>								</div>							</div>						  <?php } ?>						  </td>
						  <td align="center"><?php if(isset($employees[$course['uid']]['name'])) echo $employees[$course['uid']]['name']; ?></td>
						  <td align="center"><?php if($course['time'] != '') { echo ArabicTools::arabicDate($system->calendar.' Y-m-d', $course['time']).' , '.date('h:i:s', $course['time']); if(date('H', $course['time']) < 12) echo ' '.lang('am'); else echo ' '.lang('pm'); } ?></td>
						  <td align="center"><input type="checkbox" <?php if($course['active'] == 1) echo 'checked'; ?> disabled></td>
						  <?php if(strpos($this->loginuser->privileges, ',csedit,') !== false) { ?><td align="center"><a href="<?php echo base_url(); ?>courses/edit/<?php echo $course['id']; ?>" style="color: #2AA3D6;"><i style="color:#2AA3D6;" class="glyphicon glyphicon-edit"></i></a></td><?php } ?>
						  <?php if(strpos($this->loginuser->privileges, ',csdelete,') !== false) { ?><td align="center">						  
							<i id="<?php echo $course['id']; ?>" style="color:red;" class="del glyphicon glyphicon-remove-circle"></i>
							<div id="del-<?php echo $course['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<?php echo lang('deletemodal'); ?>
											<br>
        								</div>
										<div class="modal-body">
										<center>
											<button class="btn btn-danger" id="action_buttom" onclick="location.href = 'courses/del/<?php echo $course['id']; ?>'" data-dismiss="modal"><?php echo lang('yes'); ?></button>
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