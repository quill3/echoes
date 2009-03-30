<?php
//ここで指定した正規表現にマッチしなければ、デフォルト値に置換する
$regexpparam['action'] = '/^[0-9a-zA-Z_]+$/';
$regexpparam['model'] = '/^[0-9a-zA-Z_]+$/';
$regexpparam['view'] = '/^[0-9a-zA-Z_]+$/';
$regexpparam['op1'] = '/^[0-9]+$/';
$regexpparam['op2'] = '/^[0-9a-zA-Z_]+$/';

//デフォルト値
$defaultparam['action'] = 'hoge';
$defaultparam['model'] = 'piyo';
$defaultparam['view'] = 'fuga';
$defaultparam['op1'] = '';
$defaultparam['op2'] = '';
?>