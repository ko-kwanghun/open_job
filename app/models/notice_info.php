<?php

/**
 * SoftWiz
 *
 * @copyright SoftWiz Corporation
 * @author *
 * @version $Id$
 */
/**
 * お知らせ用のモデルクラス
 *
 * @author 作成者名
 *
 */
class NoticeInfo extends AppModel
{
    /**
     * モデルの名前を指定
     *
     * @var String
     * @access public
     */
    public $name = 'NoticeInfo';

    /**
     * テーブルの名前を指定
     *
     * @var String
     * @access public
     */


    public $useTable = 'notice_infos';

    /**
     * プライマリーキーのカラムを指定
     *
     * @var String
     * @access public
     */
    public $primaryKey = 'id';

    /**
     * コンポーネントを指定
     *
     * @var array
     * @access public
     */
//     public $components = array(
//         'Auth'
//     );

    /**
     * ビヘイビアを指定
     *
     * @var array
     * @access public
     */
    public $actsAs = array(
        'Cakeplus.AddValidationRule'
    );

    /**
     * バリデーションの設定
     *
     * @var array
     * @access public
     */
    //以下を参考してバリデージョン作成する
//      public $validate = array(

//         'create_user' => array(
//             "rule1" => array(
//                 'rule' => 'notEmpty',
//                 'message' => '作成者は必須項目です。'
//             )
//         ),

//      	'title' => array(
//      		"rule1" => array(
//      			'rule' => 'notEmpty',
//      			'message' => 'タイトルは必須項目です。'
//      		)
//      	),

//      	'content' => array(
//      		"rule1" => array(
//      			'rule' => 'notEmpty',
//      			'message' => '内容は必須項目です。'
//      		)
//      	),

//      );


/** 以下のところにコンテンツ管理に関する関数を作成する **/

    /**
     * お知らせを保存するための関数
     *
     * @return boolean
     * @access public
     * @author 作成者
     */

//     function regsit($params){
// 	##登録に関するサービスロジック追加
//     	if($this->__Notice_Save($params)){
//     		//DB登録
//     		return true;
//     	}else{
//     		return false;
//     	}
//     }

    /**
     * お知らせ情報を登録
     *
     * @var array
     * @access public
     */
//     public function __Notice_Save($_data)
//     {
//     	$dataSource = $this->getDataSource();
//     	$dataSource->begin($this);

//     	if($this->save($_data,false)) {
//     		return true;
//     	}else{
//     		$dataSource->rollback($this);
//     		return false;
//     	}
//     }

//     public function Notice_Edit($params)
//     {
//     	// セーブ
//     	if ($this->save($params)) {
//     		// 成功
//     		return true;
//     	} else {
//     		// 失敗
//     		return false;
//     	}
//     }
}
