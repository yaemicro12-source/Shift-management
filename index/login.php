<?php
$name = ($_REQUEST('name')) ;
$id = ($_REQUEST('id'));

if(isset($name)){
    echo ("名前が未入力です");
}
if(isset($id)){
    echo("IDが未入力です");
}

foreach($ids as $id){
    if($id == $_REQUEST('id')){
        echo "idが見つかりません";
    }
    if($pass == sql-> WHERE '$id'){
        echo "パスワードが一致しません";
    }
}
require_once('login_views.php');