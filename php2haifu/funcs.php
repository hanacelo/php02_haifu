<?php
//共通に使う関数を記述
//XSS対応（ echoする場所で使用！それ以外はNG ）

//htmlspecialchars() を関数化
//h関数の中に入れた引数が処理される？意味わからん
function h($str){
    return htmlspecialchars($str,ENT_QUOTES);
};

//DB接続のやり方
function db_conn(){
    try {
        $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
        return $pdo;
      } catch (PDOException $e) {
        exit('DBConnectError'.$e->getMessage());
      }
};