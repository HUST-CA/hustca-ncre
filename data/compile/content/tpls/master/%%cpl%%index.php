<?php $this->_compileInclude('header'); ?><body><?php $this->_compileInclude('nav'); ?><div class="container-fluid">	<div class="row-fluid">		<div class="span2">			<?php $this->_compileInclude('menu'); ?>		</div>		<div class="span10">			<ul class="breadcrumb">				<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master"><?php echo $this->tpl_var['apps'][$this->tpl_var['_app']]['appname']; ?></a> <span class="divider">/</span></li>				<li class="active">首页</li>			</ul>			<div class="row-fluid">				<div class="span6">					<div class="well">						<h5>							模块介绍						</h5>						<p style="color:blue">							内容模块主要包括<span style="color:red">分类管理</span>、<span style="color:red">内容管理</span>、<span style="color:red">标签管理</span>和<span style="color:red">模型管理</span>四类内容。						</p>						<p>主要实现对内容的管理</p>					</div>				</div>				<div class="span6">					<div class="well">						<h5>							使用帮助						</h5>						<p>							帮助页面：<a href="help.php">本系统管理后台的操作指南</a>						</p>						<p>						注意事项：<a href="attention.php">操作该后台时应注意的地方</a>						</p>					</div>				</div>			</div>						<div class="row-fluid">				<div class="span3">					<div class="well">						<h5>							分类管理							</h5>							<p><span style="color:blue">功能：</span>查看、删除、添加分类</p>							<p><span style="color:blue">说明：</span>不得随意更改</p>							</div>					</div>					<div class="span3">					<div class="well">						<h5>							内容管理							</h5>							<p><span style="color:blue">功能：</span>查看、删除、修改、添加</p>							<p><span style="color:blue">说明：</span>排序、复制、移动</p>							</div>					</div>					<div class="span3">					<div class="well">						<h5>							模型管理							</h5>							<p><span style="color:blue">功能：</span>预览、删除、修改、添加</p>							<p><span style="color:blue">说明：</span>模型即模板</p>							</div>					</div>					<div class="span3">					<div class="well">						<h5>							标签管理							</h5>							<p><span style="color:blue">功能：</span>查看、删除、修改、添加</p>							<p><span style="color:blue">说明：</span>不得随意更改</p>							</div>					</div>							</div>											</div>	</div></div></body></html>