<?php


class PageController {

  public function __construct() 
  {

  }

  public function home() : void
{
  $template = "home";
  $categories = "category.php";
  require "templates/layout.phtml";
  
}


// Méthode pour afficher la page 404
public function notFound(): void 
{
  $template = "404";
  require "templates/layout.phtml";
   
}
  
}