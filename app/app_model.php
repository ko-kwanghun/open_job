<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.model
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Application model for Cake.
 *
 * This is a placeholder class.
 * Create the same file in app/app_model.php
 * Add your application-wide methods to the class, your models will inherit them.
 *
 * @package       cake
 * @subpackage    cake.cake.libs.model
 */
class AppModel extends Model {

    /**
     *  指定されたIDのデータが存在するかどうか
     *
     *  @param $id  primaryKey
     *  @return 存在していれはtrue, いなければfalse
     */
//     function existsID($id) {
//         return $this->hasAny(array($this->primaryKey => $id));
//     }

//     public function exists($id = null) {
//     	if ($this->Behaviors->attached('SoftDelete')) {
//     		return $this->existsAndNotDeleted($id);
//     	} else {
//     		return parent::exists($id);
//     	}
//     }

//     public function delete($id = null, $cascade = true) {
//     	$result = parent::delete($id, $cascade);
//     	if ($result === false && $this->Behaviors->enabled('SoftDelete')) {
//     		return (bool)$this->field('deleted', array('deleted' => 1));
//     	}
//     	return $result;
//     }

}
