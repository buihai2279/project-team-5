<?php
 
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Hello2 extends MX_Controller{
   
    function index()
    {
        echo "test";
        echo Modules::run('hello/tree');
    }
    function tree()
    {
        echo "tree";
    }
}