<?php

/**
 * INEO-OPENLIBRARY
 *
 * @copyright INEO Corporation (http://www.ineo.co.jp/)
 * @license
 * @author *
 * @version $Id$
 */
/**
 * ユーザ用のモデルクラス
 *
 * @author 作成者名
 *
 */
class User extends AppModel
{


    /**
     * ユーザ権限に関する定数
     *
     * @var number
     * @author 作成者
     */
    const USER_KIND_TRUE = 0; // 管理人=0
    const USER_KIND_FALSE = 1; // 非管理人=1

    /**
     * モデルの名前を指定
     *
     * @var String
     * @access public
     */
    public $name = 'User';

    /**
     * テーブルの名前を指定
     *
     * @var String
     * @access public
     */
    public $useTable = 'tblmembers';

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
    public $components = array(
        'Auth'
    );

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
//     public $validate = array(
//         'user' => array(
//             'rule0' => array(
//                 'rule' => array(
//                     'maxLengthJP',
//                     30
//                 ),
//                 'message' => 'IDは30文字までです'
//             ),
//             "rule1" => array(
//                 'rule' => 'notEmpty',
//                 'message' => 'IDは必須項目です'
//             )
//         ),

//     	'user_name' => array(
//     		'rule0' => array(
//     			'rule' => array(
//     				'maxLengthJP',
//     				30
//     			),
//     			'message' => '利用者名は30文字までです'
//     		),
//     		"rule1" => array(
//     			'rule' => 'notEmpty',
//     			'message' => '利用者名は必須項目です'
//     		)
//     	),

//         'user_hp' => array(
//             "rule0" => array(
//                 'rule' => array(
//                     'spaceOnly'
//                 ),
//                 'message' => '電話番号を入力してください'
//             ),
//             "rule2" => array(
//                 'rule' => array(
//                     'maxLengthJP',
//                     4
//                 ),
//                 'message' => '正しい電話番号を入力してください'
//             ),
//             "rule3" => array(
//                 'rule' => 'Numberonly',
//                 'message' => '正しい電話番号を入力してください'
//             )
//         ),

//         'user_passwd' => array(
//             'rule0' => array(
//                 'rule' => array(
//                     'password_valid',
//                     'user_passwd',
//                     6,
//                     20
//                 ),
//                 'message' => 'パスワードは6～20文字で入力してください。'
//             ),
//         	'rule1' => array(
//         		'rule' => 'notEmpty',
//         		'message' => 'パスワードを入力してください。'
//         	),
//         	'rule2' => array(
//         		'rule' => 'passwdConfirm',
//         		'message' => 'パスワードが一致していませ'
//         	)
//         ),

//     	'passwd_confirm' => array(
//     		array(
//     			'rule' => 'notEmpty',
//     			'message' => 'パスワード(確認)を入力してください'
//     		),
//     	),

//         'user_mail' => array(
//             "rule0" => array(
//                 'rule' => array(
//                     'maxLengthJP',
//                     256
//                 ),
//                 'message' => '正しいメールアドレスを入力してください。'
//             ),
//             "rule1" => array(
//                 'rule' => array(
//                     'email'
//                 ),
//                 'message' => '正しいメールアドレスを入力してください。'
//             ),
//             "rule2" => array(
//                 'rule' => array(
//                     'notEmpty'
//                 ),
//                 'message' => '正しいメールアドレスを入力してください。'
//             )
//         )
//     );

    /**
     * ハッシュパスワード生成
     *
     * @param array $data
     * @param string $enforce
     * @return array
     * @access public
     * @author 作成者
     */
    public function hashPasswords($data, $enforce = false)
    {
        if ($enforce && isset($this->data[$this->alias]['password'])) {
            if (! empty($this->data[$this->alias]['password'])) {
                $this->data[$this->alias]['password'] = Security::hash($this->data[$this->alias]['password'], null, true);
            }
        }
        return $data;
    }

    /**
     * beforeSave()
     *
     * 保存の前処理のロジック
     *
     * @return boolean
     * @access public
     * @author 作成者
     */
    public function beforeSave()
    {
        $this->hashPasswords(null, true);
        return true;
    }

    /**
     * passwdConfirm()
     *
     * パスワード一致確認
     *
     * @return boolean
     * @access public
     * @author 作成者
     */
    public function passwdConfirm($check){

    	//２つのパスワードフィールドが一致する事を確認する
    	if($this->data['User']['user_passwd'] === $this->data['User']['passwd_confirm']){
    		return true;
    	}else{
    		return false;
    	}

    }

    /**
     * ユーザを保存するための関数
     *
     * @param array $_data
     * @param string $_auth
     * @param string $_mail
     * @param string $_rec
     * @param string $_approval
     * @return boolean
     * @access public
     * @author 作成者
     */
//     public function User_Regist($_data, $_auth = null, $_mail = true, $_rec = true, $_approval = false)
//     {

//         /*
//          * リクエストモデル
//          */
//         App::import('Model', 'Request');
//         $request = new Request();

//         /*
//          * 管理者か否かで権限のステータスを切り替える
//          */
//         if ($_auth != null) {
//             $_data['User']['AUTHORITY'] = User::AUTHORITY_TRUE;
//         } else {
//             $_data['User']['AUTHORITY'] = User::AUTHORITY_FALSE;
//         }

//         if (! isset($_data['User']['STATUS'])) {
//             $_data['User']['STATUS'] = User::STATUS_WAITING_ACCEPTANCE;
//         }

//         $_data['User']['RANDOM_KEY'] = null;
//         $_data['User']['INSERT_DATE'] = date("Y-m-d H:i:s");
//         $_data['User']['LAST_UPDATE'] = date("Y-m-d H:i:s");

//         // トランザクションの開始
//         $dataSource = $this->getDataSource();
//         $dataSource->begin($this);

//         if (isset($_mail["Administrator"]['USR_ID']) && $_mail["Administrator"]["STATUS"] == 2) {
//             $_data['User']['USR_ID'] = $_mail["Administrator"]['USR_ID'];
//         }

//         // 更新可能フィールド
//         $fieldList = array(
//             "NAME",
//             "MAIL",
//             "STATUS",
//             "USR_ID",
//             "PASSWORD",
//             "AUTHORITY",
//             "RANDOM_KEY",
//             "INSERT_DATE",
//             "UPDATE_DATE"
//         );

//         if ($result = $this->save($_data['User'], true, $fieldList) && $_mail) {
//             if (isset($_mail["Administrator"]['USR_ID']) && $_mail["Administrator"]["STATUS"] == 2) {
//                 $usrid = $_mail["Administrator"]['USR_ID'];
//             } else {
//                 $usrid = $this->getInsertID();
//             }

//             if ($_rec) {
//                 if ($token = $request->User_Request($usrid, $_data['User']['NAME'], true, $_approval)) {
//                     $dataSource->commit($this);
//                     return $token;
//                 } else {
//                     // 失敗
//                     $dataSource->rollback($this);
//                     return false;
//                 }
//             } else {
//                 $dataSource->commit($this);
//                 $usrid = $this->getInsertID();

//                 if ($usrid == null) {
//                     $usrid = $_data['User']['USR_ID'];
//                 }

//                 return $usrid;
//             }
//         } else {
//             // 失敗
//             $dataSource->rollback($this);
//             return false;
//         }
//     }
}
