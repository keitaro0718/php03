<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ブックマーク</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px; background-color:#487c38; border-color:#487c38;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="bm_select.php">ブックマークはこちら</a></div>
    <div class="navbar-header"><a class="navbar-brand" href="bm_login.php">ブックマークはこちら</a></div>
    <div class="navbar-header"><a class="navbar-brand" href="bm_logout.php">ブックマークはこちら</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="bm_insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>積ん読リスト</legend>
     <label>書籍名:<input type="text" name="name"></label><br>
     <label>書籍リンク:<input type="text" name="url"></label><br>
     <label><textArea name="comment" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
