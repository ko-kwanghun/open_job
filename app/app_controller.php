<?php


class AppController extends Controller
{

    public $autoLayout = false;

    var $helpers = array(
        'Session',
        'Form',
        'Html',
        'Js' => array(
            'jquery'
        ),
        'CustomHtml',
        'CustomJs',
        'time',
    	'Text'
    );

    var $uses = array(
        //'User',
        //'Administrator'
    );

    var $components = array(
        'Session',
        'Auth',
        'Cookie',
        'Common',
        'RequestHandler',
    );

//     function beforeFilter()
//     {
//     	$this->Auth->allow('*');

//          $user = $this->Auth->user();
//          $this->set("user", $user);
//      }


//     function Authority_Check()
//     {
//     	$auth = $this->Auth->User();
// 	        if ($auth !=null &&$auth['User']['user_kind'] == User::USER_KIND_TRUE) {
// 	            return true;
// 	        } else {
// 	            return false;
// 	        }
//     }

//     function month_days($m, $y)
//     {
//         if ($m == 4 || $m == 6 || $m == 9 || $m == 11)
//             return 30;
//         if ($m != 2)
//             return 31;
//         if ($y % 400 == 0)
//             return 29;
//         if ($y % 100 == 0)
//             return 28;
//         if ($y % 4 == 0)
//             return 29;
//         return 28;
//     }


    // CSRF対策、トークンチェック
//     function isCorrectToken($_token)
//     {
//         if ($_token === session_id()) {
//             return true;
//         } else {
//             $this->data = null;
//             $this->Session->setFlash('正規の画面からご利用ください。', '');
//             $this->redirect(array(
//                 'controller' => 'users',
//                 'action' => 'logout'
//             ));
//             return false;
//         }
//     }

    // POSTかどうかの判定
    // すべてのアクションの中で、POST/GETの判定に使う
    // POSTかつフォームのデータがあり、トークンチェックも正しい場合にtrue
    // それ以外はfalse
    function checkPost()
    {
        if ($this->RequestHandler->isPost() || $this->RequestHandler->isPut()) {
            if (isset($this->data) && $this->data && $this->isCorrectToken($this->data['Security']['token'])) {
                return true;
            }
        }
        return false;
    }

//     function checkAjaxPost()
//     {
//         if ($this->RequestHandler->isPost() || $this->RequestHandler->isPut()) {
//             if (isset($this->params['form']) && $this->params['form'] && $this->isCorrectToken($this->params['form']['token'])) {
//                 return true;
//             }
//         }
//         return false;
//     }

    // リクエストパラメータに主キーが含まれる場合はエラーにする
//     function denyPrimaryKey($modelName)
//     {
//         $primaryKey = $this->{$modelName}->primaryKey;

//         if (isset($this->data[$modelName][$primaryKey])) {
//             $this->{$modelName}->invalidate($modelName . "." . $primaryKey, "不正な操作が行われました");
//             $this->Session->setFlash("不正な操作が行われました");
//             $this->redirect("/" . $this->params["url"]["url"]);
//         }
//     }
}


