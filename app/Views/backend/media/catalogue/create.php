<?php
    $baseController = new App\Controllers\BaseController();
    $language = $baseController->currentLanguage();
?>
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Thêm mới nhóm dự án</h2>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo site_url('admin'); ?>"><?php echo translate('cms_lang.media_catalogue.mediacat_home', $language) ?></a>
			</li>
			<li class="active"><strong>Thêm mới nhóm dự án</strong></li>
		</ol>
	</div>
</div>
<?php echo view('backend/media/catalogue/store') ?>