<style>
	body {
		margin: 0;
		font-family: "Poppins", sans-serif;
		font-size: .75rem;
		font-weight: 400;
		line-height: 1.5;
		color: #333;
		text-align: left;
		background-color: #d9e0e7;
	}

	hr {
		border: 0;
		display: block;
		width: 100%;
		background-color: #e2e2e2;
		height: 1px;
		margin-top: 10px;
		margin-bottom: 10px;
	}
</style>
<div id="page-container" class="fade">
	<div class="login login-with-news-feed">
		<div class="news-feed">
			<div class="news-image" style="background-image: url(<?= base_url($BACKGROUND); ?>)"></div>
			<div class="news-caption">
				<h4 class="caption-title"><b><?= $APP_NAME ?></b> <?= $COMPANY ?></h4>
				<p>
					<i class="fas fa-map-marker-alt"></i> <?= $ADDRESS ?>
				</p>
			</div>
		</div>
		<div class="right-content">
			<div class="login-header">
				<div id="login-header" style="background-image: url(<?= base_url('assets/apps/img/svg/bgsignin.svg') ?>)"></div>
				<div class="brand">
					<div style="display: flex;justify-content: flex-start;align-content: center;align-items: center;">
						<div>
							<img src="<?= base_url($ICON) ?>" style="width: 55px;" alt="Logo">
						</div>
						<div style="margin-left: 10px;">
							<div>
								<b><?= $APP_NAME ?></b>
							</div>
							<div style="margin-top: -25px;">
								<font style="font-size: 14px;font-weight: 100;"> <?= $COMPANY ?></font>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="login-content">
				<form action="index.html" method="GET" class="margin-bottom-0">
					<div class="form-group m-b-15">
						<input type="text" id="username" class="form-control form-control-lg" placeholder="Username" required />
					</div>
					<div class="form-group m-b-15">
						<input type="password" id="password" class="form-control form-control-lg" placeholder="Password" required />
					</div>
					<div class="checkbox checkbox-css">
						<input type="checkbox" id="ckb1" onclick="myFunction()" />
						<label for="ckb1">Show Password</label>
					</div>
					<div class="checkbox checkbox-css m-b-30">
						<input type="checkbox" id="remember_me_checkbox" value="" />
						<label for="remember_me_checkbox">Remember me</label>
					</div>
					<div class="login-buttons">
						<button type="submit" name="submit" class="btn btn-erp btn-block btn-lg"><i class="fas fa-sign-in-alt"></i>&nbsp; Sign In</button>
						<div class="d-flex justify-content-center or-hr" style="margin:10px 0 -5px 0">
							<hr>
							<p class="mx-4 text-muted">OR</p>
							<hr>
						</div>
						<button type="submit" name="google" class="btn btn-default btn-block btn-lg">
							<img src="<?= base_url('assets/apps/img/svg/google.svg') ?>" class="google" alt="Sign In with Google">&nbsp; Sign In with Google
						</button>
					</div>
					<hr />
					<p class="text-center text-grey-darker mb-0">© Copyright
						<a href="https://hellos-id.com/" target="_blank">
							<font style="color:#070d2d"><b>HELLOS<sup>ID</sup></b></font>
						</a>
						<?php if (date('Y') == 2022) { ?>
							All Right Reserved <?= date('Y') ?>
						<?php } else { ?>
							All Right Reserved 2022 - <?= date('Y') ?>
						<?php } ?>
					</p>
					<p class="text-center text-grey-darker mb-0">
						<?= $VERSION; ?> - <?= $TYPE_APP; ?>
					</p>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Show Password -->
<script type="text/javascript">
	function myFunction() {
		var x = document.getElementById("password");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}
</script>
<!-- End Show Password -->