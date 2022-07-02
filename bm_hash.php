<?php

$pw = password_hash("test1", PASSWORD_DEFAULT);
// passwordのhash化
// ある一定の法則に従って読めないようにするのが暗号化
// hash化は、読めないような文字列に変換するのは一緒だが、元の文字列に直すことはできない

echo $pw;
// var_dump(password_verify("test1", $pw));
// hash化した結果が、元々のパスワードと等しければtrue


