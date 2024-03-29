<!DOCTYPE html>

<!-- ICS Lib Index page AB-4L -->

<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
	
	<title>ICS Lib</title>

	<!-- CSS Links -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link href='<?php echo base_url(); ?>assets/css/bootstrap.css' rel="stylesheet" type="text/css" />
    <link href='<?php echo base_url(); ?>assets/css/main.css' rel="stylesheet" type="text/css" />
	
</head>
<!--end of head-->

<body>
	<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-collapse collapse">
		  <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>assets/images/ICSLibIcon.png" alt="ICSLib" length = "10" width = "70"></a> <!--If an account us active, redirect to profile instead-->
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
		
		  <ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Link</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
							</ul>
						</li>
					</ul>
        </div> <!--/.navbar-collapse -->
      </div>
    </div>
	
	
	<div class="container">
		
		
		<div class="tabbable" id="tabs-931288">
				<ul class="nav nav-pills">
					<li class="active">
						<a href="#panel-1" data-toggle="tab">Search</a>
					</li>
					<li>
						<a href="#panel-2" data-toggle="tab">News</a>
					</li>
					<li>
						<a href="#panel-3" data-toggle="tab">Login</a>
					</li>
					<li>
						<a href="#panel-4" data-toggle="tab">Register</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-1">
						
						
						
						
					<div class="row clearfix">
							<div class="col-md-2 column"	>
							<!-- First div -->
							</div>
						<div class="col-md-8 column">
							<div class="panel-group" id="panel-340522">
								<div class="panel panel-default">
									<!--<div class="panel-heading">
									-->	<!--
										<form action="<?php echo base_url('/index.php/c_index/search')?>" method="post" id="search-form" role="search">
											<div class="input-group">
												<input type="text" id="word" name="word" class="form-control" placeholder="Enter keywords">
												<span class="input-group-btn">
										-->		<!--	<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button> --> <!-- search button -->
										<!--			<select name="filter">
														<option value="all">All</option>
														<option value="title">Title</option>
														<option value="author">Author</option>
														<option value="type">Type</option>
														<option value="status">Status</option>
													</select>
												</span> -->
										<!--	</div>--><!-- /input-group -->
										<!--</form> -->
									<!--</div>
								-->

									<div class="panel-body">
											<!-- para kung ano man 'yung type, nakalagay siya sa header :) -->
											<h3> <?php echo $item->book_type;?> Information </h3>	
												<!-- table -->	
													
												<table class="table table-condensed table-hover">
													<thead>
													<tr>
														<th>Call No.</th>
														<th>Title</th>
														<th>Author</th>
														<th>Book Type</th>
														<th>Description</th>
														<th>Status</th>
														<th>Editor</th>
														<th>Publisher</th>
													</tr>
													<tr>
														<td><?php echo $item->call_no;?></td>
														<td><?php echo $item->title;?></td>
														<td><?php echo $item->author;?></td>
														<td><?php echo $item->book_type;?></td>
														<td><?php echo $item->description;?></td>
														<td><?php echo $item->book_status;?></td>
														<td><?php echo $item->editor;?></td>
														<td><?php echo $item->publisher;?></td>	
													</tr>
													</thead>
													<tbody>

													</tbody>
												</table>
												</div>

									<div id="panel-element-122876" class="panel-collapse collapse">
										<div class="panel-body">
				`							Advanced Options
										</div>	<!-- for panel-body -->
									</div> <!-- for panel-collapse -->
								</div> <!-- for panel panel-default -->
								
							</div> <!-- for panel group -->
						</div> <!-- for col-md-8-column -->
						<div class="col-md-2 column">
						<!-- Third div -->
						<!-- <h3> What's this? </h3> -->
						</div>
					</div>
						
						
						
						
					</div>
					<div class="tab-pane" id="panel-2">
						<p>
							News
						</p>
					</div>
					<div class="tab-pane" id="panel-3">
						<p>
							<div class="row" id="main-content">

								<?php if(isset($error)) echo "invalid username/password combination"; ?>
								<br/>

								<form name='user_signup' method='post' action='<?php echo base_url('/index.php/c_user/login_confirm')?>'>
									<fieldset> <legend>Login</legend>
									<p> 
										<input type="text" name="uname" id="uname" placeholder="Username" required/>
									</p>
									<p> 
										<input type="password" name="password" id="password" placeholder="Password" required/>
									</p>

									<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Log In"/>
									<a class="btn btn-danger" href="<?php echo base_url('/index.php/c_index/signup_init#panel-4');?>" role="button" data-toggle="modal">Register</a>
									</fieldset>
								</form>
							</div>	
						</p>
					</div>
					<div class="tab-pane" id="panel-4">
						<p>
							<div class="row" id="main-content">
							<form name='user_signup' method='post' action='<?php echo base_url('/index.php/c_user/signup_insert')?>'>
								<fieldset>
								<legend> Sign Up Form </legend>
								<br/>
								<p>
									<input type='text' name='name' placeholder='Name' required/><br/>
								</p>
								<p>
									<input type='text' name='uname' placeholder='Username' required/><br/>
								</p>
								<p>
									<input type='password' name='pword' placeholder='Password'required/><br/>
								</p>
								<p>
									<input type='email' name='email' placeholder='Email' required/><br/>
								</p>
								<p>
									<input type='text' name='cnum' placeholder='Mobile No.' required/><br/>
								</p>
								<!-- Insert option for user type here (e.g. Employee or Student) -->
								<p>
									<input type='text' name='usr_num' placeholder='User Number' required/><br/>
								</p>
								<br/>
								<p> 
									College <select name="college" required>
									<option selected>CAS</option>
									<option>CEM</option>
									<option>CEAT</option>
									<option>CVM</option>
									</select></br>
								</p>
								<br/>
								<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Register"/>
								</fieldset>
							</form>
							</div>
						</p>
					</div>
				</div>
			</div>
		</div>
		
	</div>

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<!--    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>-->
	<script src="<?php echo base_url(); ?>assets/js/jquery-2.0.3.min.js"></script>	 
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>|
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<!--	<script>
	$(document).ready(function(){
		//$('.booktitle').click(function() {
		$('.booktitle').on('click', function(){
			$this = $(this);
			var $description = $this.parent().siblings().find('[bookdata = description]').text();
			console.log("Hi");
			console.log($description);
		});
	});
	</script>
-->
</body>
<!--end of body-->

</html>
<!--end of v_index-->