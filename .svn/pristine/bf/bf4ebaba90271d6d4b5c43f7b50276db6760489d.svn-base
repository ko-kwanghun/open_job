

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<?php
// 完了メッセージ
echo $session->flash();
?>
          <h2 class="sub-header"><?php echo $title_text ?></h2>
          <div class="table-responsive">

			<?php
				echo $form->create('AdminNotice', array(
					'type' => 'post',
			));?>
			<?php
			echo $customHtml->hiddenToken();
			?>


            <table class="table table-striped input_form">
              <tbody>


                <tr>
                  <th>作成者</th>
				  <td>
    				<div class="input-group">
						<?php echo $form->input('Notice.user_name',array(
									'class'=>'form-control',
									'placeholder'=>'必須、3文字以上（半額、数字、ローマ字）',
									'label' => false,
									'required' => false,
									'error'=>false
						));?>
						<?php echo $form->error('Notice.user_name',array('class'=>'_error'));?>
					</div>			  
				  </td>
                </tr>
                <tr>
                  <th>タイトル</th>
				  <td>
    				<div class="input-group">
						<?php echo $form->input('Notice.subject',array(
									'class'=>'form-control',
									'placeholder'=>'必須、3文字以上（半額、数字、ローマ字）',
									'label' => false,
									'required' => false,
									'error'=>false
						));?>	
						<?php echo $form->error('Notice.subject',array('class'=>'_error'));?>
					</div>			  
				  </td>
                </tr>
                <tr>
                  <th>内容</th>
				  <td>
					<div class="input-group" data-validate="length" data-length="5">
							<?php echo $form->input('Notice.memo',array(
									'type' => 'textarrea',
									'class'=>'form-control',
									'placeholder'=>'内容',
									'label' => false,
									'required' => false,
									'error'=>false
							));?>					
						<?php echo $form->error('Notice.memo',array('class'=>'_error'));?>
					</div>
				  </td>
                </tr>
                <tr>
                  <th>表示</th>
				  <td>
					<div class="input-group">
						<div id="radioBtn" class="btn-group">
	    					<!--  <a class="btn radio-selector btn-sm active" data-toggle="happy" data-title="Y">反映</a>
	    					<a class="btn radio-selector btn-sm notActive" data-toggle="happy" data-title="N">未反映</a>-->
	    					
							<?php echo $form->input('Notice.date_check',array(
								'type' => 'radio',	
								'class'=>'btn radio-selector btn-sm',
							    'options' => array('未反映', '反映'),
								'value' => 1,
								'label' => false,
								'required' => false,
								'legend' => false,
								'data-toggle' => 'happy',
								'style' => 'position:relative;margin-left:10px;margin-right:5px;',
								'error'=>false
							));?>
							<?php echo $form->input('Notice.id',array(
									'class'=>'form-control datepicker',
									'label' => false,
									'required' => false,
									'error'=>false,
									'id' => 'start',
									'type' => 'hidden'
							));?>
	    					
    					</div>
					</div>
				  </td>
                </tr>


              </tbody>


            </table>
            <table class="table">
              <tbody>
                <tr>
				  <td class="text-center"><a class="btn btn-primary btn-outline btn-lg">戻る</a>　<?= $this->Form->button(' 登録する',array('class' => 'btn btn-primary btn-outline btn-lg')) ?></td>
				</tr>
              </tbody>
            </table>

<?php echo $form->end();?>

          </div>
        </div>