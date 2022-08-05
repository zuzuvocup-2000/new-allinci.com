<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Xóa Nhóm Thông tin: <?php echo $brand_catalogue['title'] ?></h2>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo site_url('admin'); ?>">Home</a>
			</li>
			<li class="active"><strong>Xóa Nhóm Thông tin</strong></li>
		</ol>
	</div>
</div>
<form method="post" action="" class="form-horizontal box" >
	<div class="wrapper wrapper-content animated fadeInRight">
		<div class="row">
			<div class="col-lg-5">
				<div class="panel-head">
					<h2 class="panel-title">Thông tin chung</h2>
					<div class="panel-description">
						Một số thông tin cơ bản của người sử dụng.
						<div><span class="text-danger">Khi xóa Nhóm Thông tin, thì Nhóm Thông tin này sẽ không thể truy cập và mất toàn bộ thông tin. Hãy chắc chắn bạn muốn thực hiện chức năng này!</span></div>
					</div>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="ibox m0">
					<div class="ibox-content">
						<div class="row mb15">
							<div class="col-lg-12">
								<div class="form-row">
									<label class="control-label text-left">
										<span>Nhóm Thông tin <b class="text-danger">(*)</b></span>
									</label>
									<?php echo form_input('title', set_value('title', $brand_catalogue['title']), 'class="form-control" disabled placeholder="" autocomplete="off"');?>
									<?php echo form_hidden('id', set_value('id', $brand_catalogue['id']), 'class="form-control" disabled placeholder="" autocomplete="off"');?>
								</div>
							</div>
						</div>
						<script type="text/javascript">
							var id = '<?php echo $brand_catalogue['id'] ?>';
						</script>
						<div class="toolbox action clearfix">
							<div class="uk-flex uk-flex-middle uk-button pull-right">
								<button class="btn btn-danger btn-sm delete" name="delete" value="delete" type="submit">Xóa</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</form>