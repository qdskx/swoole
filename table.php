<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/6/28
 * Time: 12:01
 */

$table = new Swoole\Table(1024);
$table->column('id' , Swoole\Table::TYPE_INT);
$table->column('name' , Swoole\Table::TYPE_STRING , 20);
$table->column('pwd' , Swoole\Table::TYPE_FLOAT , 32);

$table->create();

$table->set('xuanxuan' , [
    'id' => 1,
    'name' => 'xuanxaun',
    'pwd' => 12
]
);

var_dump($table['xuanxuan']);

$table->incr('xuanxuan' , 'name');

var_dump($table['xuanxuan']);

echo ($table->count());

$table['xuanxuan']['name'] = 'maya';

$table->del('xuanxuan');
echo '<br />';
echo ($table->count());

var_dump($table->get('xuanxuan'));

die;



var_dump($table->exists('xuanxuan'));
var_dump($table->exists('xuanxuan2'));