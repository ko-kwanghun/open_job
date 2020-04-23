<?php

/**
 *
 * @copyright SoftWiz Corporation
 * @license
 * @author
 *
 * @version $Id$
 */
/**
 * 管理者用のコントローラクラス
 *
 * @author 作成者
 */
class AdminController extends AppController
{

    /**
     * コントローラの名前を指定
     *
     * @var String
     * @access public
     */
    public $name = "Admin";

    /**
     * 使用するモデルのクラス名を配列で指定
     *
     * @var array
     * @access public
     */
    public $uses = FALSE;

    /**
     * 自動レンダリングをするかどうか指定
     *
     * @var boolean
     * @access public
     */
    public $autoLayout = true;


    /**
     * 管理画面レイアウトを指定
     *
     * @var boolean
     * @access public
     */
    public $layout = 'admin_default';

    /**
     * コンポーネントを指定
     *
     * @var array
     * @access public
     */
    public $components = array(
        'Session',
        'Auth',
        'Cookie'
    );

    /**
     * ページネーションの初期設定
     *
     * @var array
     * @access public
     */
//     public $paginate = array(
//         'page' => 1,
//         'conditions' => array(),
//         'sort' => '',
//         'limit' => 10,
//         'order' => 'User.id',
//         'recursive' => 0
//     );

    /**
     * コントローラのアクション前に実行
     *
     * @return void
     * @access public
     * @author 作成者
     */
//     public function beforeFilter()
//     {
//         parent::beforeFilter();
// 	    if (! $this->Authority_Check()) {
// 	    	$this->Session->setFlash('管理者以外アクセスできません');
// 	    	$this->redirect("/homes");
// 	    }
//     }

    /**
     * 管理メイン画面
     *
     * 管理メイン画面を表示する
     *
     * @return void
     * @access public
     * @author 作成者
     */
    public function index()
    {
        // 初期化
        $this->set("main_title", "管理者メニュー");
        $this->set("title_text", "ユーザ管理");
    }

}

