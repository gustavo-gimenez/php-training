<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bootstrap 3, from LayoutIt!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3 class="text-primary text-center">
				h3. Lorem ipsum dolor sit amet.
			</h3>
			<div class="row clearfix">
				<div class="col-md-6 column">
					<form role="form" class="form-inline">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">New Task</label>
                                                <input type="text" class="form-control"/>
                                                <p class="help-block">
                                                   Example block-level help text here.
                                                </p>
                                            </div>
                                              <button type="button" class="btn btn-primary btn-default">Default</button>
                                              <!--button type="button" class="btn disabled btn-primary btn-default">Default</button-->
					</form>
			<ul>
				<li>
					Lorem ipsum dolor sit amet
				</li>
				<li>
					Consectetur adipiscing elit
				</li>
				<li>
					Integer molestie lorem at massa
				</li>
				<li>
					Facilisis in pretium nisl aliquet
				</li>
				<li>
					Nulla volutpat aliquam velit
				</li>
				<li>
					Faucibus porta lacus fringilla vel
				</li>
				<li>
					Aenean sit amet erat nunc
				</li>
				<li>
					Eget porttitor lorem
				</li>
                        </ul>
                     </div>
                     <div class="col-md-6 column">
                         <p contenteditable="true" class="text-muted">
                              Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. 
                              Aliquam eget sapien sapien. Curabitur in metus urna. 
                              In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum 
                              velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. 
                              Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales 
                              nisi id sodales. Proin consectetur, nisi id commodo imperdiet, 
                              metus nunc consequat lectus, id bibendum diam velit et dui.</em> 
                              Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. 
                              <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla
                               euismod ultrices massa, et feugiat ipsum consequat eu. </small>
                         </p>
                     </div>
                  </div>
			 <a id="modal-406208" href="#modal-container-406208" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
			
			<div class="modal fade" id="modal-container-406208" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="myModalLabel">
								Modal title
							</h4>
						</div>
						<div class="modal-body">
							...
						</div>
						<div class="modal-footer">
							 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
					
				</div>
				
			</div>
			
		</div>
	</div>
</div>
</body>
</html>
