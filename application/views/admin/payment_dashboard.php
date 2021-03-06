<div class="well well_border_left">
	<h4 class="text-center"> <i class="fa fa-dashboard"></i> <?php echo $this->lang->line('Payment Dashboard');?></h4>
</div>

<div class="row" style="padding:10px;">
	<div class="col-xs-12"><h4 class="text-center dynamic_font_color"><?php echo $this->lang->line("total report") ?></h4><br></div>
	<div class="col-lg-4 col-xs-12 col-md-4 col-md-offset-2 col-lg-offset-2">
		<!-- small box -->
		<div class="small-box bg-aqua">
			<div class="inner">
				<h4><?php echo $total_user; ?></h4>
				<p><?php echo $this->lang->line("total users") ?></p>
			</div>
			<div class="icon">
				<i class="fa fa-users"></i>
			</div>
			<a href="<?php echo site_url('payment/admin_payment_history'); ?>" class="small-box-footer"><?php echo $this->lang->line("more info") ?> <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div><!-- ./col -->
	<div class="col-lg-4 col-xs-12 col-md-4">
		<!-- small box -->
		<div class="small-box bg-blue">
			<div class="inner">
				<h4><?php echo $total_paid_amount." ".$system_currency; ?></h4>
				<p><?php echo $this->lang->line('Total Paid Amount'); ?></p>
			</div>
			<div class="icon">
				<i class="fa fa-paypal"></i>
			</div>
			<a href="<?php echo site_url('payment/admin_payment_history'); ?>" class="small-box-footer"><?php echo $this->lang->line("more info") ?> <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div><!-- ./col -->
</div><!-- /.row -->

<!-- Small boxes (Stat box) -->
<div class="row" style="padding:10px;">
	<div class="col-xs-12"><h4 class="text-center dynamic_font_color"><?php echo $this->lang->line("this month's report") ?></h4><br></div>
	<div class="col-md-4 col-md-offset-2 col-sm-6 col-xs-12">
		<div class="info-box" >
			<span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
			<div class="info-box-content">
				<span class="info-box-text"><?php echo $this->lang->line("new users") ?></span>
				<span class="info-box-number"><?php echo $this_month_total_user; ?></span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
	</div><!-- /.col -->
	<div class="col-md-4 col-sm-6 col-xs-12">
		<div class="info-box">
			<span class="info-box-icon bg-blue"><i class="fa fa-paypal"></i></span>
			<div class="info-box-content">
				<span class="info-box-text"><?php echo $this->lang->line("total paid amount") ?></span>
				<?php if($this_month_paid_amount=="") $this_month_paid_amount=0; ?>
				<span class="info-box-number"><?php echo $this_month_paid_amount." ".$system_currency; ?></span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
	</div><!-- /.col -->
</div><!-- /.row -->

<div class="row" style="padding:10px;">
	<!-- Info Boxes Style 2 -->
	<div class="col-xs-12"><h4 class="text-center dynamic_font_color"><?php echo $this->lang->line("this month's report") ?></h4><br></div>
	<div class="col-md-4 col-md-offset-2 col-sm-6 col-xs-12">
		<div class="info-box bg-aqua">
			<span class="info-box-icon"><i class="fa fa-users"></i></span>
			<div class="info-box-content">
				<!-- <span class="info-box-text">Inventory</span> -->
				<span class="info-box-number" style="color:#fff !important;"><?php echo $today_user; ?></span>
				<div class="progress">
					<div class="progress-bar" style="width: 70%"></div>
				</div>
				<span class="progress-description">
					<b><?php echo $this->lang->line("new users") ?></b>
				</span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
	</div>
	<div class="col-md-4 col-sm-6 col-xs-12">
		<div class="info-box bg-blue">
			<span class="info-box-icon"><i class="fa fa-paypal"></i></span>
			<div class="info-box-content">
				<?php if($today_paid_amount=="") $today_paid_amount=0; ?>
				<span class="info-box-number" style="color:#fff !important;"><?php echo $today_paid_amount." ".$system_currency; ?></span>
				<div class="progress">
					<div class="progress-bar" style="width: 70%"></div>
				</div>
				<span class="progress-description">
					<b><?php echo $this->lang->line("total paid amount") ?></b>
				</span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
	</div>	
</div>