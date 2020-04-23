<?php

/**
 * SoftWiz
 *
 * @copyright Softwiz Corporation (http://www.ineo.co.jp/)
 * @license
 * @author *
 * @version $Id$
 */
/**
 * ユーザ用のコントローラクラス
 *
 * @author 作成者
 */
class AdminNoticeInfosController extends AppController
{

    /**
     * コントローラの名前を指定
     *
     * @var String
     * @access public
     */
    public $name = "AdminNoticeInfo";

    /**
     * 使用するモデルのクラス名を配列で指定
     *
     * @var array
     * @access public
     */
    public $uses = array(
        "NoticeInfo"
    );

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
        'RequestHandler'
    );

    /**
     * コントローラのアクション前に実行
     *
     * @return void
     * @access public
     * @author 作成者
     */
    public function beforeFilter()
    {
//         parent::beforeFilter();
// 	    if (! $this->Authority_Check()) {
// 	    	$this->Session->setFlash('管理者以外アクセスできません');
// 	    	$this->redirect("/homes");
// 	    }
    }

    /**
     * ページネーションの初期設定
     *
     * @var array
     * @access public
     */
//     public $paginate = array(
//     		'page' => 1,
//     		'conditions' => array(),
//     		'sort' => '',
//     		'limit' => 10,
//     		'order' => 'NoticeInfo.id',
//     		'recursive' => 0
//     );


    /**
     * お知らせ一覧
     *
     * お知らせ一覧をを表示する
     *
     * @return void
     * @access public
     * @author 作成者
     */
    public function index()
    {
    	// 初期化
    	$this->set("main_title", "コンテンツメニュー");
    	$this->set("title_text", "お知らせ一覧");
    }


    /**
     * お知らせ新規登録
     *
     * お知らせ新規登録する
     *
     * @return void
     * @access public
     * @author 作成者
     */
    public function add()
    {
    	// 初期化
    	$this->set("main_title", "コンテンツメニュー");
    	$this->set("title_text", "お知らせ登録");

    }


    /**
     * お知らせ編集
     *
     * お知らせを編集する
     *
     * @return void
     * @access public
     * @author 作成者
     */
    public function edit()
    {
    	$this->set("main_title", "コンテンツメニュー");
    	$this->set("title_text", "お知らせ編集");

    }

    /**
     * お知らせ削除
     *
     * お知らせを削除する
     *
     * @return void
     * @access public
     * @author 作成者
     */
    public function delete()
    {
    	// 初期化
    	$this->set("main_title", "コンテンツメニュー");
    	$this->set("title_text", "お知らせ削除");

    }

}
