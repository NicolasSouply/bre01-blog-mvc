<?php 


class PostController {


public function __construct() 
{

}
public function post(): void {
  $route =  "post";
  require "templates/layout.phtml";
    echo "Bienvenue sur la page post.";
}
  

  }