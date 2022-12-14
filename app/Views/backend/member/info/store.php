<form method="post" action="" class="form-horizontal box" >
	<div class="wrapper wrapper-content animated fadeInRight">
		<div class="row">
			<div class="box-body">
				<?php echo  (!empty($validate) && isset($validate)) ? '<div class="alert alert-danger">'.$validate.'</div>'  : '' ?>
			</div><!-- /.box-body -->
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox m0">
					<div class="ibox-content">
						<div class="row mb15">
							<div class="col-lg-6">
								<div class="form-row">
									<label class="control-label text-left">
										<span>Tiêu đề Nhóm <b class="text-danger">(*)</b></span>
									</label>
									<?php echo form_input('title', set_value('title', (isset($member_info['title'])) ? $member_info['title'] : ''), 'class="form-control " placeholder="" autocomplete="off"');?>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-row">
									<label class="control-label text-left">
										<span>Loại Nhóm <b class="text-danger">(*)</b></span>
									</label>
									<?php echo form_dropdown('type', $type, set_value('type', (isset($member_info['type'])) ? $member_info['type'] : ''), 'data-module= "'.$module.'" class="form-control m-b select2 "');?>
								</div>
							</div>
						</div>
						<div class="toolbox action clearfix">
							<div class="uk-flex uk-flex-middle uk-button pull-right">
								<button class="btn btn-primary btn-sm" name="create" value="delete" type="submit">Lưu Lại</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</form>