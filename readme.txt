echoes act1
=====================================================

【説明】
PHP5で動作するMVCフレームワーク

クライアントから渡るパラメータをmodel/view/actionとし、
それぞれに対応するクラスを記述することで動作する。

実行時の処理の流れは、
actionオブジェクトの内部でmodelオブジェクトがDBアクセスを行い、
結果をviewオブジェクトが受け取って画面表示する。


【使い方】
-config.php
パラメータの入力チェックに使用。
ここで指定した正規表現にマッチしない場合は、デフォルト値に置換される。

-action/hogeaction.php
-model/piyomodel.php
-view/fugaview.php
それぞれのパラメータに応じたクラスを記述する。
commonクラスには共通メソッドを記述する。