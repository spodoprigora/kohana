<?php defined('SYSPATH') or die('No direct script access.');

class Model_Article extends Model
{
  protected $_tableArticles = 'articles';

  /**
   * Get all articles
   * @return array
   */
  public function get_all()
  {
    $sql = "SELECT * FROM ". $this->_tableArticles . " ORDER BY created_at DESC";

    return DB::query(Database::SELECT, $sql)
      ->execute();
  }

  /**
   * Get article by id
   * @return array
   */
  public function get_article($id = '')
  {
    $sql = "SELECT * FROM ". $this->_tableArticles ." WHERE `id` = :id";

    $query = DB::query(Database::SELECT, $sql, FALSE)
      ->param(':id', (int)$id)
      ->execute();

    $result = $query->as_array();

    if($result)
      return $result[0];
    else
      return FALSE;
  }

  /**
   * Create new article
   * @param $title
   * @param $content
   */
  public function create_article($title, $content)
  {
    $query = DB::query(Database::INSERT, 'INSERT INTO ' . $this->_tableArticles . ' (title, content) VALUES(:title, :content)')
      ->parameters([
        ':title' => $title,
        ':content' => $content
        ]);
    $query->execute();
  }

  /**
   *Get count of articles
   */
  public function get_count(){
    $sql = "SELECT COUNT(*) FROM ". $this->_tableArticles;

    $query = DB::query(Database::SELECT, $sql, FALSE)
         ->execute();

    $result = $query->as_array();

    if($result)
      return (int)$result[0]['COUNT(*)'];
    else
      return FALSE;
  }

  public function get_page($limit, $offset){
    $sql = "SELECT * FROM ". $this->_tableArticles . " ORDER BY created_at DESC LIMIT :offset, :limit";
    $query = DB::query(Database::SELECT, $sql, FALSE)
      ->param(':limit', $limit)
      ->param(':offset', $offset)
      ->execute();

    $result = $query->as_array();

    if($result)
      return $result;
    else
      return FALSE;
  }
}