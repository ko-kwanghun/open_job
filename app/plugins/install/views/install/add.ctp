<style type="text/css"><!--
table.tbl {
	border: 1px #E3E3E3 solid;
	border-collapse: collapse;
	border-spacing: 0;
}

table.tbl tr.bgcl {
    background: #F5F5F5;
}

table.tbl td {
	padding: 10px;
	border: 1px #E3E3E3 solid;
	border-width: 0 0 1px 1px;
}

table.tbl td.left {
	text-align: left;
}

table.tbl td.center {
	text-align: center;
}
.contents_box {
	padding-botom:20px;
	padding-top:50px;
	padding-left:150px;
}
.w120{ width:120px; }
table.tbl td.w200{ width:200px;}
._error{
	color:#FF0000;
}
._f_error{
	background:#FFCCCC
}
--></style>
<div class="contents_box mb20">
		<div class="contents_area">
			<?php echo $form->create('Administrator', array('class'=>'Administrator','url' => array('plugin' => 'install', 'controller' => 'install', 'action' => 'add')));?>
			<table cellspacing="0" cellpadding="0" border="0" width="880" class="tbl">
				<tbody>
					<tr class="bgcl">
						<td class="w120"><p class="float_l">ユーザ名<span class='required'>*</span></p></td>
						<td class="center w200"><?php echo $form->input('user_name',array('class'=>$form->error('user_name')?'w250 _f_error':'w250','label' => false,'error'=>false));?>
						<?php echo $form->error('user_name',array('class'=>'_error'));?>
						</td>
						<td>管理者のユーザ名を入力してください</td>
					</tr>
					<tr>
						<td><p class="float_l">管理者ID<span class='required'>*</span></p></td>
						<td class="center"><?php echo $form->input('user',array('class'=>$form->error('user')?'w250 _f_error':'w250','label' => false,'error'=>false));?>
						<?php echo $form->error('user',array('class'=>'_error'));?>
						</td>
						<td>管理者のIDを入力してください</td>
					</tr>
					<tr class="bgcl">
						<td><p class="float_l">パスワード<span class='required'>*</span></p></td>
						<td class="center"><?php echo $form->input('user_passwd',array('class'=>$form->error('user_passwd')?'w250 _f_error':'w250','label' => false,'error'=>false));?>
						<?php echo $form->error('user_passwd',array('class'=>'_error'));?>
						</td>
						<td>管理者のパスワードを入力してください</td>
					</tr>
				</tbody>
			</table>
			<br />
			<br />
			<?php echo $form->end('登録');?>
		</div>
</div>
