<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/27 0027
 * Time: 22:07
 */
class Blog_model extends CI_Model
{
    public function get_blog_list(){
        $query = $this -> db -> get('t_blog');
        return $query -> result();
    }
}