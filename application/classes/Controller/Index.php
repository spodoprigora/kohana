<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Common {

  public function action_index()
  {
    $articles = array();

    $content = View::factory('/index/index')
      ->bind('articles', $articles);

    $count = Model::factory('Article')->get_count();
    $pagination = Pagination::factory(['total_items' => $count])
      ->route_params([
        'controller' => Request::current()->controller(),
        'action' => Request::current()->action()
      ]);
    $content->pagination = $pagination;
    $articles = Model::factory('Article')->get_page($pagination->items_per_page, $pagination->offset);
    $this->template->content = $content;
  }

  public function action_add() {
    if($_POST)
    {
      $_POST = Arr::map('trim', $_POST);

      $post = Validation::factory($_POST);
      $post -> rule('title', 'not_empty')
        -> rule('content', 'not_empty');

      if($post -> check()){
        $title = Arr::get($_POST, 'title');
        $content = Arr::get($_POST, 'content');
        Model::factory('Article')->create_article($title, $content);
        $this->redirect('/index/add');
      }
      else{
         $errors = $post -> errors('comments');
      }
    }
    $content = View::factory('/index/add')
    ->bind('errors', $errors);
    $this->template->content = $content;
  }

  public function action_article(){
    $id = $this->request->param('id');
    if($id){
      $article = Model::factory('Article')->get_article($id);
      $content = View::factory('/index/article')
        ->bind('article', $article);
      $this->template->content = $content;
    }
    else{

    }


  }

}