﻿<div style="padding:5px;">
<div id="nav"><strong>您的位置:</strong> 网站设置 &gt;&gt; 链接类管理  &gt;&gt; 编辑分类</div>
<div id="menu">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="10">&nbsp;</td>
      <td class="menu-function">分类信息</td>
      <td class="menu-function">&nbsp;</td>
      <td class="menu-function">&nbsp;</td>
      <td class="menu-function">&nbsp;</td>
      <td class="menu-function">&nbsp;</td>
      <td class="menu-function">&nbsp;</td>
      <td class="menu-function">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
<div id="main">
	
	<?php echo $form->create();?>		
	<?php echo $form->input('LinkType.title', array('label' => '分类名称'));?>
	
	<?php echo $form->input('LinkType.type', array('label' => '分类类型', 'options' => array('1' => '商城站内广告', '2' => '网站站内广告', '3' => '友情连接'), 'type' => 'select', 'after' => '<div class="div_c"></div>'));?>
	
	<?php echo $this->Html->div('options',$form->button('提交', array('type' => 'submit')).$form->button('返回', array('type' => 'button', 'onclick' => 'javascript: location.href=\'' . $this->Html->url('/LinkTypes/index') . '\'')));?>	
	
	<?=$form->hidden('LinkType.id')?>
	<?=$form->end()?> 
</div>
</div>