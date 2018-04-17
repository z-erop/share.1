
<?php 
	require './header.php';
?>
				
		<!-- start: Content -->
		<div class="main sidebar-minified">
		
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text"></i>文章</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">首页</a></li>			  	
						<li><i class="fa fa-file-text"></i>文章</li>				
					</ol>
				</div>
			</div>

			
			
			
			<div class="row">		
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><i class="fa fa-file-text red"></i><span class="break"></span><strong>article</strong></h2>
							<div class="panel-actions">
								<a href="index.php#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
								<a href="index.php#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="index.php#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="panel-body">
							<table class="table table-striped table-bordered bootstrap-datatable datatable">
							  <thead>
								  <tr>
									  <th>ID</th>
                                      <th>所属栏目ID</th>
                                      <th>标题</th>
									  <th>内容</th>
									  <th>发布时间</th>
									  <th>作者</th>
									  <th>操作</th>
								  </tr>
							  </thead>   
							  <tbody>								
								<tr>
									<td>Willson</td>
                                    <td>Developer</td>
                                    <td>2563$</td>
									<td>
										<span class="label label-warning">Pending</span>
									</td>
									
									<td>Developer</td>
                                    <td>2563$</td>

                                    <td>
										<a class="btn btn-info" href="index.php#">
											<i class="fa fa-edit "></i>                                            
										</a>
										<a class="btn btn-danger" href="index.php#">
											<i class="fa fa-trash-o "></i> 

										</a>
									</td>
								</tr>
								
							  </tbody>
						  </table>
						  <ul class="pagination">
								<li><a href="index.php#">Prev</a></li>
								<li class="active">
								  <a href="index.php#">1</a>
								</li>
								<li><a href="index.php#">2</a></li>
								<li><a href="index.php#">3</a></li>
								<li><a href="index.php#">4</a></li>
								<li><a href="index.php#">5</a></li>
								<li><a href="index.php#">Next</a></li>
							  </ul>               
						</div>
					</div>
				</div><!--/col-->
			
			</div><!--/row-->
			
                       
<?php 
	require './footer.php' ;
?>		
   
