<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$name = $_POST["name"];
$url = $_POST["url"];
$comment = $_POST["comment"];


//*** 外部ファイルを読み込む ***
include("bm_funcs.php");
$pdo = db_conn();
// データベースに接続

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(name, url, comment, datetime) values(:name, :url, :comment, sysdate())");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':url', $url, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //*** function化を使う！*****************
  sql_errror($stmt);
}else{
  //*** function化を使う！*****************
  redirect("bm_index.php");
}
?>
