<?php

if(session_status() ==PHP_SESSION_ACTIVE){
    session_start();
    echo"A session is currently active";
}else{
    echo"NO active Session";

}

?>