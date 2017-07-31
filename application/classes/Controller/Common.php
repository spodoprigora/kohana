<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Common extends Controller_Template {

  public $template = 'main';

  public function before()
  {
    parent::before();
    View::set_global('title', 'Тестовое задание');
    View::set_global('description', 'Тестовое задание');
    $this->template->content = '';
    $this->template->style = 'style';
    $this->template->scripts = 'main';
  }

}