<?php

class Router
{
    public function __construct()
    {

    }

    public function handleRequest($get) : void
    {
        
        $pc = new PageController();
        $cc = new CategoryController();
        $poc = new PostController();


        if (isset($get['route']) && ($get['route'] === 'home'))
        {
            $pc->home();
        }
        elseif(isset($get["route"]) && ($get["route"] ==="categories"))
        {
            $cc->categories();
        }
        elseif(isset($get["route"]) && ($get["route"] ==="category"))
        {
            $categoryId = $get['id'];
            
            $cc->category();
        }
        elseif(isset($get["route"]) && ($get["route"] ==="post"))
        {
            $poc->post();
        }

        elseif(!isset($get["route"]))
        {
            $pc->home();
        }
        else
        {
            $pc->notFound();
        }       
    }
}