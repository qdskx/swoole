<?php
/**
 * User: websockte 基础类
 * FileName: 文件名称
 * Date: 2019/3/23
 * Time: 21:42
 */
class WsTask
{
    CONST HOST = '0.0.0.0'; //IP地址

    CONST POST = 8881;  //端口号

    protected $ws;  //服务器对象

    public function __construct()
    {
        $this->ws = new Swoole\WebSocket\Server(self::HOST,self::POST);
        $this->ws->set([
            'worker_num'=>2,
            'task_worker_num'=>2    //配置此参数后将会启用task功能
        ]);
        $this->ws->on('open',[$this,'on_open']);
        $this->ws->on('message',[$this,'on_message']);
        //使用task任务必须要注册task、finish回调函数
        $this->ws->on('task',[$this,'on_task']);
        $this->ws->on('finish',[$this,'on_finish']);
        $this->ws->on('close',[$this,'on_close']);
        $this->ws->start();
    }


    /**
     * 客户端与服务器成功建立连接 完成握手
     * @param object $server 服务器对象
     * @param object $request   Http对象
     */
    public function on_open($server,$request)
    {
//        echo "server: handshake success with fd-{$request->fd}";
        echo "server 握手成功 with fd-{$request->fd}";
    }

    /**
     * 监听客户端发送数据
     * @param object $server 服务器对象
     * @param object $frame 包含客户端信息
     */
    public function on_message($server,$frame)
    {
        echo "receive from {$frame->fd}:{$frame->data},opcode:{$frame->opcode},fin:{$frame->finish}\n";
        //投放task任务到task_worker任务池
        $data = [
            'task'=>1,
            'fd'=>$frame->fd
        ];
        $server->task($data);
        //返回数据给客户端
        $server->push($frame->fd,'到底我说什么了',1,true);
    }

    /**
     * 执行task任务 返回执行结果到worker进程
     * @param object $sev 服务器对象
     * @param int $taskId task任务ID
     * @param int $workId task任务进程ID
     * @param array $data task任务数据
     */
    public function on_task($sev,$taskId,$workId,$data)
    {
        var_dump('task任务id' , $taskId);
        var_dump('task任务进程id' , $workId);
        var_dump('task任务数据' , $data);
        echo "start 正在处理task异步任务....".time()."\n";
        //模拟执行10s场景
        sleep(10);
        echo "end 结束处理task异步任务....".time()."\n";
        //返回执行结果到worker进程 调用onFinish回调函数
        return '执行结果return_data';
    }

    /**
     * 将任务处理的结果发送给worker进程
     * @param object $sev 服务器对象
     * @param int $taskId 任务的ID
     * @param $data task任务处理返回的结果内容
     */
    public function on_finish($sev,$taskId,$data)
    {
        var_dump('finish task任务id' , $taskId);
        var_dump('finish 返回处理结果给woker进程' , $data);
//        echo "接收到Tasker进程处理任务结果,finish_task_id={$taskId}\n";
//        echo "返回处理结果给woker进程:{$data}\n";
    }

    /**
     * 服务器发送数据到客户端
     * @param array $message
     * @method push 客户端连接的ID,发送的数据内容,发送数据内容的格式，默认为文本,发送结果bool
     */
    public function push($message)
    {
        $this->ws->push($this->fd,$message);
    }

    /**
     * 断开连接
     * @param object $ser 服务器对象
     * @param int $fd 客户端唯一标识
     */
    public function on_close($ser,$fd)
    {
        echo "client {$fd} closed\n";
    }


}
$server = new WsTask();

