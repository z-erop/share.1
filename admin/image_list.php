
<?php
	$lgpage = 'image_list.php'; 
	require './header.php';
	$imglist  = $mydb->getData('image','imgid,cateid,title,content,addtime,author','status = 1');
	// var_dump($artlist);
?>
				
		<!-- start: Content -->
		<div class="main sidebar-minified">
		
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text"></i>美图列表</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">首页</a></li>			  	
						<li><i class="fa fa-file-text"></i>美图列表</li>				
					</ol>
				</div>
			</div>

			
			
			
			<div class="row">		
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><i class="fa fa-file-text red"></i><span class="break"></span><strong>美图列表</strong></h2>
							<div class="panel-actions">
								<a href="#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
								<a href="#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="#" class="btn-close"><i class="fa fa-times"></i></a>
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

							  
								  <?php 
								  	foreach ($imglist as $k1 => $v1) {
								  		echo '<tr>
												<td>'.$v1['imgid'].'</td>
			                                    <td>'.$v1['cateid'].'</td>
			                                    <td>'.$v1['title'].'</td>
												<td>'.$v1['content'].'</td>
												<td>'.$v1['addtime'].'</td>
			                                    <td>'.$v1['author'].'</td>
			                                    <form action="image_update.php" method="post">
			                                    <td>
			                                    	<input type="hidden" name="action" value="get">
			                                    	<input type="hidden" name="imgid" value="'.$v1['imgid'].'">
													<button type="submit" class="btn btn-info" >
														<i class="fa fa-edit "></i>                                            
													</button>
													<button type="button" class="btn btn-danger image-del" imgid="'.$v1['imgid'].'">
														<i class="fa fa-trash-o "></i>
													</button>
												</td>
												</form>
											</tr>';
								  	}
								  ?>								
									
								
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
<script>
$(function(){

	$('.image-del').click(function(event) {
		var that   = $(this);
		var $imgid = that.attr('imgid');
		if(confirm('确定删除这条记录?')){
			$.ajax({
				url: './image_del.php',
				type: 'POST',
				dataType: 'JSON',
				data: {imgid : $imgid}
			})
			.done(function(data) {
				if(data.r == 'ok'){
					window.location.href='./image_list.php';
					return;
				}
				if(data.r == 'fail'){
					alert('删除失败!请刷新后重试!');
				}
			});
			
		}
	})
})
</script>   
