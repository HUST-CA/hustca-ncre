<?php $this->_compileInclude('header'); ?><body><?php $this->_compileInclude('nav'); ?><div class="container-fluid">	<div class="row-fluid">		<div class="span2">			<?php $this->_compileInclude('menu'); ?>		</div>		<div class="span10">			<ul class="breadcrumb">				<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master"><?php echo $this->tpl_var['apps'][$this->tpl_var['_app']]['appname']; ?></a> <span class="divider">/</span></li>				<li class="active">首页</li>			</ul>			<div class="row-fluid">				<div class="span6">					<div class="well">						<h5>							模块介绍						</h5>						<p style="color:blue">							文件模块主要包括<span style="color:red">文件类型</span> 和<span style="color:red">文件管理</span>两类内容。						</p>						<p>主要实现对文件的管理</p>					</div>				</div>				<div class="span6">					<div class="well">						<h5>							使用帮助						</h5>						<p>							帮助页面：<a href="help.php">本系统管理后台的操作指南</a>						</p>						<p>						注意事项：<a href="attention.php">操作该后台时应注意的地方</a>						</p>					</div>				</div>			</div>						<div class="row-fluid">				<div class="span6">					<div class="well">						<h5>							文件类型							</h5>							<p><span style="color:blue">功能：</span>查看、删除、修改、添加文件类型</p>							<p><span style="color:blue">说明：</span>不得随意更改</p>														</div>					</div>					<div class="span6">					<div class="well">						<h5>							文件管理							</h5>							<p><span style="color:blue">功能：</span>查看、搜索、删除、修改所有上传文件</p>							<p><span style="color:blue">说明：</span>不要随意删除</p>							 							</div>					</div>											</div>											</div>	</div></div></body></html>