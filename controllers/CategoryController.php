<?php


class CategoryController {


  public function __construct() 
  {

  }
  
  public function category(): void 
{
    $template = 'route=category&category=id_category';
    require "templates/layout.phtml";
}

// Méthode pour afficher la page à propos
public function categories(): void {
  $template =  "route=categories";
  require "templates/layout.phtml";
}

}