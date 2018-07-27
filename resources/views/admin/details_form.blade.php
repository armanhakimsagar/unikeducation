<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Dashboard</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />


		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('admin/font-awesome/4.5.0/css/font-awesome.min.css') }}" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="{{ asset('admin/css/fonts.googleapis.com.css') }}" />

		<!-- ace styles -->
		<link rel="stylesheet" href="{{ asset('admin/css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="{{ asset('admin/css/ace-skins.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('admin/css/ace-rtl.min.css') }}" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="{{ asset('admin/js/ace-extra.min.js') }}"></script>
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Ace Admin
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey dropdown-modal">
							

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Software Update</span>
													<span class="pull-right">65%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:65%" class="progress-bar"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Hardware Upgrade</span>
													<span class="pull-right">35%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:35%" class="progress-bar progress-bar-danger"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Unit Testing</span>
													<span class="pull-right">15%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:15%" class="progress-bar progress-bar-warning"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Bug Fixes</span>
													<span class="pull-right">90%</span>
												</div>

												<div class="progress progress-mini progress-striped active">
													<div style="width:90%" class="progress-bar progress-bar-success"></div>
												</div>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See tasks with details
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								Settings

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								
								<li>
									<a href="{{ url('studentLogout') }}">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				

				<ul class="nav nav-list">
					<li class="active">

					</li>

					<li class="">
						<a href="{{ url('admin/reporting') }}">
							<i class="menu-icon fa fa-home"></i>
							<span class="menu-text">
								Reporting
							</span>
						</a>
					</li>


					<li class="">
						<a href="{{ url('admin/registration') }}">
							<i class="menu-icon fa fa-home"></i>
							<span class="menu-text">
								Registration Approve
							</span>
						</a>
					</li>



				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					
					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Registration
								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">

							<form action="{{ url('admin/submit') }}" method="post">
									{{ csrf_field() }}

									@foreach($admin as $d)
									<div class="container">

										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
													Student name : 
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													Date of Birth :
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													Sex :
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													Phone number :
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="student_name" value="{{ $d->student_name }}">
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="date_of_birth" value="{{ $d->date_of_birth }}">
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													Male : <input type="radio" value="male" name="sex" <?php if($d->sex == "male") echo "checked" ?>>
													Female : <input type="radio" value="female" name="sex" <?php if($d->sex == "female") echo "checked" ?>>
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="phone_number" value="{{ $d->phone_number }}">
													<input name="old_id" type="hidden" value="{{ $d->id }}">
												</div>
											</div>
										</div>
<br>									

										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
													Father name : 
												</div>
												<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
													Mother name :
												</div>
												<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
													Brother name : 
												</div>
												<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
													Sister name :
												</div>
												<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
													Other name : 
												</div>
											</div>
										</div>
<br>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-5 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="student_father"  value="{{ $d->student_father }}">
												</div>
												<div class="col-lg-2 col-md-5 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="student_mother" value="{{ $d->student_mother }}">
												</div>
												<div class="col-lg-2 col-md-5 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="student_brother" value="{{ $d->student_brother }}">
												</div>
												<div class="col-lg-2 col-md-5 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="student_sister" value="{{ $d->student_sister }}">
												</div>
												<div class="col-lg-2 col-md-5 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="student_other" value="{{ $d->student_other }}">
												</div>
											</div>
										</div>
<br>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
													Place of Birth :
												</div>
												<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
													Birth certificate number:
												</div>
												<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
													Passport Number : 
												</div>
												<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
													Issue date :
												</div>
												<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
													Expiry date :
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="place_of_birth" value="{{ $d->place_of_birth }}">
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="birth_certificate_number" value="{{ $d->birth_certificate_number }}">
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="passport_number" value="{{ $d->passport_number }}">
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="issue_date" value="{{ $d->issue_date }}">
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="expiry_date" value="{{ $d->expiry_date }}">
												</div>
											</div>
										</div>

										<br>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
													Student Permanent Address
												</div>
												<div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
													Student present Address
												</div>
											</div>
										</div>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
													<input type="text" class="form-control" name="student_permanent_address" value="{{ $d->student_permanent_address }}">
												</div>
												<div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
													<input type="text" class="form-control" name="student_present_address" value="{{ $d->student_present_address }}">
												</div>
											</div>
										</div>


										<br>
										<hr>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
													family members
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													Date of birth and age
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													Occupation
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													Permanent Address
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													Present Address
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													Business or office Address
												</div>
											</div>
										</div>

<br>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
													Student Father
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_father_dateof_birth" value="{{ $d->student_father_dateof_birth }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_father_occupation" value="{{ $d->student_father_occupation }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_father_permanent_address" value="{{ $d->student_father_permanent_address }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_father_present_address" value="{{ $d->student_father_present_address }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_father_office_address" value="{{ $d->student_father_office_address }}">
												</div>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
													Student mother	
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_mother_dateof_birth" value="{{ $d->student_mother_dateof_birth }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_mother_occupation" value="{{ $d->student_mother_occupation }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_mother_permanent_address" value="{{ $d->student_mother_permanent_address }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_mother_present_address" value="{{ $d->student_mother_present_address }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_mother_office_address" value="{{ $d->student_mother_office_address }}">
												</div>
											</div>
										</div>
<br>

										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
													Student brother	
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_brother_dateof_birth" value="{{ $d->student_brother_dateof_birth }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_brother_occupation" value="{{ $d->student_brother_occupation }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_brother_permanent_address" value="{{ $d->student_brother_permanent_address }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_brother_present_address" value="{{ $d->student_brother_present_address }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_brother_office_address" value="{{ $d->student_brother_office_address }}">
												</div>
											</div>
										</div>

<br>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
													Student sister
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_sister_dateof_birth" value="{{ $d->student_sister_dateof_birth }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_sister_occupation" value="{{ $d->student_sister_occupation }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_sister_permanent_address" value="{{ $d->student_sister_permanent_address }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_sister_present_address" value="{{ $d->student_sister_present_address }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_sister_office_address" value="{{ $d->student_sister_office_address }}">
												</div>
											</div>
										</div>

<br>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
													Others
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_others_dateof_birth" value="{{ $d->student_others_dateof_birth }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_others_occupation" value="{{ $d->student_others_occupation }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_others_permanent_address" value="{{ $d->student_others_permanent_address }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_others_present_address" value="{{ $d->student_others_present_address }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_others_office_address" value="{{ $d->student_others_office_address }}">
												</div>
											</div>
										</div>

<br>

										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
													Others
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_others2_dateof_birth" value="{{ $d->student_others2_dateof_birth }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_others2_occupation" value="{{ $d->student_others2_occupation }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_others2_permanent_address" value="{{ $d->student_others2_permanent_address }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_others2_present_address" value="{{ $d->student_others2_present_address }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_others2_office_address" value="{{ $d->student_others2_office_address }}">
												</div>
											</div>
										</div>

										<br>
										<hr>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													Sponsor name
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													Relation With Sponsor
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													Permanent Address
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													Present Address
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													Business or office Address
												</div>
											</div>
										</div>
<br>



										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="sponsor_name" value="{{ $d->sponsor_name }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="relation_with_sponsor" value="{{ $d->relation_with_sponsor }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="permanent_address" value="{{ $d->permanent_address }}">
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="present_address" value="{{ $d->present_address }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="office_address" value="{{ $d->office_address }}">
												</div>
											</div>
										</div>


<br>

<hr>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													Documents name
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													Permanent Address
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													Present Address
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													Business or office Address
												</div>
											</div>
										</div>


<br>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													Sponsor NID
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="sponsor_nid_permanent_address" value="{{ $d->sponsor_nid_permanent_address }}">
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="sponsor_nid_present_address" value="{{ $d->sponsor_nid_present_address }}">
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="sponsor_nid_office_address" value="{{ $d->sponsor_nid_office_address }}">
												</div>
											</div>
										</div>

<br>

										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													Sponsor Trade License 
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="sponsor_trade_license_permanent_address" value="{{ $d->sponsor_trade_license_permanent_address }}">
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="sponsor_trade_license_present_address" value="{{ $d->sponsor_trade_license_present_address }}">
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="sponsor_trade_license_office_address" value="{{ $d->sponsor_trade_license_office_address }}">
												</div>
											</div>
										</div>
<br>

										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													Sponsor Job Certificate
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="sponsor_job_certificate_permanent_address" value="{{ $d->sponsor_job_certificate_permanent_address }}">
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="sponsor_job_certificate_present_address" value="{{ $d->sponsor_job_certificate_present_address }}">
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="sponsor_job_certificate_office_address" value="{{ $d->sponsor_job_certificate_office_address }}">
												</div>
											</div>
										</div>

<br>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													Sponsor TIN 
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="sponsor_tin_permanent_address" value="{{ $d->sponsor_tin_permanent_address }}">
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="sponsor_tin_present_address" value="{{ $d->sponsor_tin_present_address }}">
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="sponsor_tin_office_address" value="{{ $d->sponsor_tin_office_address }}">
												</div>
											</div>
										</div>
<br>

										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													Sponsor income certificate 
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="sponsor_income_certificate_permanent_address" value="{{ $d->sponsor_income_certificate_permanent_address }}">
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="sponsor_income_certificate_present_address" value="{{ $d->sponsor_income_certificate_present_address }}">
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="sponsor_income_certificate_office_address" value="{{ $d->sponsor_income_certificate_office_address }}">
												</div>
											</div>
										</div>


<br>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													Sponsor tax certificate 
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="sponsor_tax_permanent_address" value="{{ $d->sponsor_tax_permanent_address }}">
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="sponsor_tax_present_address" value="{{ $d->sponsor_tax_present_address }}">
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="sponsor_tax_office_address" value="{{ $d->sponsor_tax_office_address }}">
												</div>
											</div>
										</div>
<br>
<hr>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-4 col-sm-2 col-xs-12">
													Annual income year 1 (Amount) 
												</div>
												<div class="col-lg-3 col-md-4 col-sm-2 col-xs-12">
													Annual income tax year 2 (Amount)
												</div>
												<div class="col-lg-3 col-md-4 col-sm-2 col-xs-12">
													Annual income year 3 (Amount)
												</div>
												
											</div>
										</div>
<br>
										<div class="row">
											<div class="col-lg-3 col-md-4 col-sm-2 col-xs-12">
												<input type="text" class="form-control" name="annual_income_year_1" value="{{ $d->annual_income_year_1 }}">
											</div>
											<div class="col-lg-3 col-md-4 col-sm-2 col-xs-12">
												<input type="text" class="form-control" name="annual_income_year_2" value="{{ $d->annual_income_year_2 }}">
											</div>
											<div class="col-lg-3 col-md-4 col-sm-2 col-xs-12">
												<input type="text" class="form-control" name="annual_income_year_3" value="{{ $d->annual_income_year_3 }}">
											</div>
										</div>
<br>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Annual income tax year 1 (Amount)
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Annual income year 2 (Amount)
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Annual income tax year 3 (Amount)
												</div>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="annual_incometax_year_1" value="{{ $d->annual_incometax_year_1 }}">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="annual_incometax_year_2" value="{{ $d->annual_incometax_year_2 }}">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="annual_incometax_year_3" value="{{ $d->annual_incometax_year_3 }}">
												</div>
											</div>
										</div>


<br><hr>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													Education
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													Course Start date
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													Graduation date
												</div>
												<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
													Course Duration 
												</div>
												<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
													Education Gap 
												</div>
											</div>
										</div>



<br>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="primarys" placeholder="Primary School" value="{{ $d->primarys }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="primary_school_course_start_date" value="{{ $d->primary_school_course_start_date }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="primary_school_graduation_date" value="{{ $d->primary_school_graduation_date }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="primary_school_course_duration" value="{{ $d->primary_school_course_duration }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="primary_school_education_gap" value="{{ $d->primary_school_education_gap }}">
												</div>
											</div>
										</div>

<br>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="ssc" placeholder="SSC School" value="{{ $d->ssc }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="SSC_course_start_date" value="{{ $d->SSC_course_start_date }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="SSC_graduation_date" value="{{ $d->SSC_graduation_date }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="SSC_course_duration" value="{{ $d->SSC_course_duration }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="SSC_education_gap" value="{{ $d->SSC_education_gap }}">
												</div>
											</div>
										</div>
<br>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="hsc" placeholder="HSC School" value="{{ $d->hsc }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="HSC_course_start_date" value="{{ $d->HSC_course_start_date }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="HSC_graduation_date" value="{{ $d->HSC_graduation_date }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="HSC_course_duration" value="{{ $d->HSC_course_duration }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="HSC_education_gap" value="{{ $d->HSC_education_gap }}">
												</div>
											</div>
										</div>

<br>

										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="bachelor" placeholder="Bachelor" value="{{ $d->bachelor }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="bachelor_course_start_date" value="{{ $d->bachelor_course_start_date }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="bachelor_graduation_date" value="{{ $d->bachelor_graduation_date }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="bachelor_course_duration" value="{{ $d->bachelor_course_duration }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="bachelor_education_gap" value="{{ $d->bachelor_education_gap }}">
												</div>
											</div>
										</div>

<br>

										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="masters" placeholder="Masters" value="{{ $d->masters }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="masters_course_start_date" value="{{ $d->masters_course_start_date }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="masters_graduation_date" value="{{ $d->masters_graduation_date }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="masters_course_duration" value="{{ $d->masters_course_duration }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="masters_education_gap" value="{{ $d->masters_education_gap }}">
												</div>
											</div>
										</div>

<br>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="others" placeholder="Any Other Diploma" value="{{ $d->others }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="others_course_start_date" value="{{ $d->others_course_start_date }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="others_graduation_date" value="{{ $d->others_graduation_date }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="others_course_duration" value="{{ $d->others_course_duration }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="others_education_gap" value="{{ $d->others_education_gap }}">
												</div>
											</div>
										</div>
										
<br><hr>

										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													Japanese Language School Name
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													School Address
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													Course Start date
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													Graduation date 
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													Course Duration
												</div>
											</div>
										</div>
<br>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="japanese_language_school_name" value="{{ $d->japanese_language_school_name }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="japanese_school_address" value="{{ $d->japanese_school_address }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="japanese_course_start_date" value="{{ $d->japanese_course_start_date }}">
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="japanese_graduation_date" value="{{ $d->japanese_graduation_date }}">
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="japanese_course_duration" value="{{ $d->japanese_course_duration }}">
												</div>
											</div>
										</div>

<br>

										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-3 col-sm-2 col-xs-12">
													Sponsor Father Name
												</div>
												<div class="col-lg-2 col-md-3 col-sm-2 col-xs-12">
													Sponsor Mother Name
												</div>
												<div class="col-lg-2 col-md-3 col-sm-2 col-xs-12">
													Sponsor Occupation 
												</div>
												<div class="col-lg-2 col-md-3 col-sm-2 col-xs-12">
													Sponsor Date Of Birth 
												</div>
											</div>
										</div>
										<br>
			<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="sponsor_father" value="{{ $d->sponsor_father }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="sponsor_mother" value="{{ $d->sponsor_mother }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text"  class="form-control" name="sponsor_profession" value="{{ $d->sponsor_profession }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text"  class="form-control" name="sponsor_dob" value="{{ $d->sponsor_dob }}">
												</div>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													Sponsor Phone Number
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													Sponsor office Phone Number
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													Student Father phone number 
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													Student mother phone number 
												</div>
											</div>
										</div>
<br>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="sponsor_phone_number" value="{{ $d->sponsor_phone_number }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="sponsor_office_phone_number" value="{{ $d->sponsor_office_phone_number }}">
												</div>
												<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_father_phone_number" value="{{ $d->student_father_phone_number }}">
												</div>
												<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
													<input type="text" class="form-control" name="student_mother_phone_number" value="{{ $d->student_mother_phone_number }}">
												</div>
											</div>
										</div>

<br>



										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Sponsor Trade License Number
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Sponsor NID Number
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Sponsor TIN Number
												</div>
											</div>
										</div>
<br>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="sponsor_trade_license_number" value="{{ $d->sponsor_trade_license_number }}">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="sponsor_nid_number" value="{{ $d->sponsor_nid_number }}">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="sponsor_tin_number" value="{{ $d->sponsor_tin_number }}">
												</div>
											</div>
										</div>


<br>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Sponsor Job Designation
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Job Starting date 
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Job To Till Date
												</div>
											</div>
										</div>
<br>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="sponsor_job_designation" value="{{ $d->sponsor_job_designation }}">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="sponsor_job_starting_date" value="{{ $d->sponsor_job_starting_date }}">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="sponsor_job_to_till_date" value="{{ $d->sponsor_job_to_till_date }}">
												</div>
											</div>
										</div><br>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Yearly Basic Salary 
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Travel allowance
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Insurance
												</div>
											</div>
										</div>
<br>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="sponsor_yearly_basic_salary" value="{{ $d->sponsor_yearly_basic_salary }}">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="sponsor_travel_allowance" value="{{ $d->sponsor_travel_allowance }}">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="sponsor_insurance" value="{{ $d->sponsor_insurance }}">
												</div>
											</div>
										</div><br>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Yearly Bonus
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Housing  allowance
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Others
												</div>
											</div>
										</div>
<br>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="sponsor_yearly_bonus" value="{{ $d->sponsor_yearly_bonus }}">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="sponsor_housing_allowance" value="{{ $d->sponsor_housing_allowance }}">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="sponsor_others" value="{{ $d->sponsor_others }}">
												</div>
											</div>
										</div><br>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Student Job Designation
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Job Starting date
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Job To Till Date 
												</div>
											</div>
										</div>
<br>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_job_designation" value="{{ $d->student_job_designation }}">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_job_starting_date" value="{{ $d->student_job_starting_date }}">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_job_to_till_date" value="{{ $d->student_job_to_till_date }}">
												</div>
											</div>
										</div><br>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Yearly Basic Salary 
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Travel allowance
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Graduation date
												</div>
											</div>
										</div>
<br>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_yearly_basic_salary" value="{{ $d->student_yearly_basic_salary }}">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_travel_allowance" value="{{ $d->student_travel_allowance }}">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_insurance" value="{{ $d->student_insurance }}">
												</div>
											</div>
										</div><br>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Yearly Bonus 
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Housing allowance
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Others
												</div>
											</div>
										</div>
<br>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_yearly_bonus" value="{{ $d->student_yearly_bonus }}">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_housing_allowance" value="{{ $d->student_housing_allowance }}">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_others" value="{{ $d->student_others }}">
												</div>
											</div>
										</div><br>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Sponsor Bank name
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Sponsor Bank Branch name
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Sponsor Bank Address
												</div>
											</div>
										</div>
<br>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="sponsor_bank_name" value="{{ $d->sponsor_bank_name }}">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="sponsor_bank_branch_name" value="{{ $d->sponsor_bank_branch_name }}">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="sponsor_bank_address" value="{{ $d->sponsor_bank_address }}">
												</div>
											</div>
										</div><br>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Sponsor Bank phone number
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Sponsor Bank Account Number 
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Sponsor Bank Account type
												</div>
											</div>
										</div>
<br>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="sponsor_bank_phone_number" value="{{ $d->sponsor_bank_phone_number }}">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="sponsor_bank_account_number" value="{{ $d->sponsor_bank_account_number }}">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="sponsor_bank_account_type" value="{{ $d->sponsor_bank_account_type }}">
												</div>
											</div>
										</div><br>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Sponsor Bank Account Balance
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Sponsor Bank Account Balance in word
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Date of Bank Statement
												</div>
											</div>
										</div>
<br>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="sponsor_bank_account_balance" value="{{ $d->sponsor_bank_account_balance }}">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="sponsor_bank_account_balance_in_word" value="{{ $d->sponsor_bank_account_balance_in_word }}">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="date_of_bank_statement" value="{{ $d->date_of_bank_statement }}">
												</div>
											</div>
										</div><br>




										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Student Running College university name
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Season (Year) 
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Roll Number
												</div>
											</div>
										</div>
<br>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" value="{{ $d->student_running_college_university_name }}" name="student_running_college_university_name">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="season_year" value="{{ $d->season_year }}">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="roll_number" value="{{ $d->roll_number }}">
												</div>
											</div>
										</div>

										<br>

										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Subject name
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Date of Certificate 
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													Student ID Number 
												</div>
											</div>
										</div>
<br>


										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_subject_name" value="{{ $d->student_subject_name }}">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_date_of_certificate" value="{{ $d->student_date_of_certificate }}">
												</div>
												<div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
													<input type="text" class="form-control" name="student_student_id_number" value="{{ $d->student_student_id_number }}">
												</div>
											</div>
										</div>

										<br><br>
									<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												
												<input type="submit" class="btn btn-success" value="Update" name="submit">

											</div>
										</div>
									</div>

								@endforeach
	
								</form>


								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->


			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->
		<script src="{{ asset('admin/js/jquery-2.1.4.min.js') }}"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="{{ asset('admin/js/jquery-ui.custom.min.js') }}"></script>
		<script src="{{ asset('admin/js/jquery.ui.touch-punch.min.js') }}"></script>
		<script src="{{ asset('admin/js/jquery.easypiechart.min.js') }}"></script>
		<script src="{{ asset('admin/js/jquery.sparkline.index.min.js') }}"></script>
		<script src="{{ asset('admin/js/jquery.flot.min.js') }}"></script>
		<script src="{{ asset('admin/js/jquery.flot.pie.min.js') }}"></script>
		<script src="{{ asset('admin/js/jquery.flot.resize.min.js') }}"></script>

		<!-- ace scripts -->
		<script src="{{ asset('js/ace-elements.min.js') }}"></script>
		<script src="{{ asset('js/ace.min.js') }}"></script>
		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: ace.vars['old_ie'] ? false : 1000,
						size: size
					});
				})
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html',
									 {
										tagValuesAttribute:'data-values',
										type: 'bar',
										barColor: barColor ,
										chartRangeMin:$(this).data('min') || 0
									 });
				});
			
			
			  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
			  //but sometimes it brings up errors with normal resize event handlers
			  $.resize.throttleWindow = false;
			
			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne", 
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);
			
			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);
			
			
			  //pie chart tooltip example
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;
			
			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}
				
			 });
			
				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					$tooltip.remove();
				});
			
			
			
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				
			
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});
			
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			
				$('.dialogs,.comments').ace_scroll({
					size: 300
			    });
				
				
				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if(ace.vars['touch'] && ace.vars['android']) {
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				  });
				}
			
				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
			
			
				//show the dropdowns on top or bottom depending on window height and menu position
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();
			
					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) 
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
				});
			
			})
		</script>
	</body>
</html>
