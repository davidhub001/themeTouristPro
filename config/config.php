<?php 

function add_config($param){
    if(isset($_REQUEST[$param])){
        update_option($param, $_REQUEST[$param]);
    }else{
        delete_option($param);
    }
}