﻿<div style="padding:5px;">
<div id="nav"><strong>您的位置:</strong> 网站设置 &gt;&gt; 链接分类管理</div>
<div id="menu">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="10">&nbsp;</td>
      <td class="menu-function"><label>
        <input type="button" name="Submit" value="新增分类" onClick="self.location.href='<?php echo $this->Html->url('/LinkTypes/edit');?>'"/>
        </label>
      </td>
      <td class="menu-function">&nbsp;</td>
      <td class="menu-function">&nbsp;</td>
      <td class="menu-function">&nbsp;</td>
      <td class="menu-function">&nbsp;</td>
      <td class="menu-function">&nbsp;</td>
      <td class="menu-function">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
<div id="main">
  <form id="infolist" name="infolist" method="post" action="#" style="margin:0px;">
    <!--通用模型信息显示开始-->
    <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
      <tr>
        <th width="30">&nbsp;</td>
        <th width="40"><?=$paginator->sort('ID', 'LinkType.id')?></td>
        <th><?=$paginator->sort('分类名称', 'LinkType.title')?></td>
        <th width="80"><?=$paginator->sort('链接数量', 'LinkType.link_count')?></td>
        <th width="150"><div class="class-menu-function">操作</div></td>
      </tr>
      <!--信息列表开始-->
	  <?php
	  	foreach($list as $item):
	  ?>
      <tr>
        <td><input name="id[]" type="checkbox" id="id[]" value="1" /></td>
        <td><?php echo $item['LinkType']['id'];?></td>
        <td><?php echo $this->Html->link($item['LinkType']['title'], '/LinkTypes/edit/'.$item['LinkType']['id']);?></td>		
        <td><?php echo $item['LinkType']['link_count'];?></td>
        <td>
        	<?php echo $this->Html->link('编辑', '/LinkTypes/edit/'.$item['LinkType']['id'], array('target' => '_self'))?>
			<?php echo $this->Html->link('删除', '/LinkTypes/delete/'.$item['LinkType']['id'], array('target' => '_self'), '确认是否删除该分类')?>
		</td>
      </tr>
	  <?php
	  	endforeach;
	  ?>
      <!--信息列表结束-->
    </table>
    <!--通用模型信息显示结束-->
	<div class="option">
		<!-- 分页 -->
		<?php echo $this->element('page');?>	
		<div class="botton">
			<input name="" type="button" value="删除" />			
		</div>
	</div>	
  </form>
</div>
</div>