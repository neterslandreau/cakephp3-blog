<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';


echo 'Welcome Home!<br />';
if (!$this->request->session()->check('Auth.User')) {
    echo $this->Html->link('Login', ['plugin' => false, 'prefix' => false, 'controller' => false, 'action' => 'login']).'<br />';
//    echo $this->Html->link('Register', ['plugin' => 'Users', 'controller' => 'users', 'action' => 'register']).'<br />';
} else {
echo 'You are '. $this->request->session()->read('Auth.User.username').'!<br />';
    echo $this->Html->link('Logout', ['plugin' => false, 'prefix' => false, 'controller' => false, 'action' => 'logout']).'<br />';
}
echo $this->Html->link('Articles', ['plugin' => false, 'prefix' => false, 'controller' => 'articles', 'action' => 'index']).'<br />';
echo $this->element('Comments.test');
