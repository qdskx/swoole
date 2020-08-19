<?php

$url = 'http://shop.zycg.gov.cn/proxy/trade-service/shop/shopItemAgentRelationship/queryBindApprovedShops?platformId=20&agentId=1000724977';


$addUrl = 'http://shop.zycg.gov.cn/proxy/trade-service/shop/shopItemAgentRelationship/add';
$data = [
    'platformId' => 20,
    'agentId'=> 1000724977,
    'shopItemAgentRelationshipVo' => json_encode($shopIdArr)
];
$Authorization = 'eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyU3RhdHVzIjoiMSIsImxvZ2luVHlwZSI6MSwidXNlcl9uYW1lIjoi5Y-y5pyd5pmWMTM2MDExODM4ODkiLCJ1c2VyVHlwZUluZm9zIjpbeyJ1c2VyVHlwZUlkIjoiNCIsImNvbW1vblR5cGUiOiI0Iiwic3lzdGVtVHlwZSI6IjMiLCJzdGF0dXMiOiIxIn1dLCJ1c2VyTmFtZSI6IuWPsuacneaZljEzNjAxMTgzODg5IiwidXNlcklkIjoiNEM5NThEMTA1MjhDNEE2QzkzQTA0Rjc3NjBCNUI5MkYiLCJjbGllbnRfaWQiOiJncC1nYXRld2F5LWNlbnRlciIsImF1ZCI6WyJBTEwiXSwiaWRlbnRpdHlUeXBlIjoxLCJ1c2VyQWNjb3VudCI6InNoZW5namlhZmVpIiwic2NvcGUiOlsicmVhZCIsIndyaXRlIl0sInN5c3RlbVR5cGUiOiIzIiwidXNlclR5cGVOb3ciOiI0IiwiZXhwIjoxNTkzNzQ5NDY1LCJqdGkiOiI2MWY4Nzg1Ny03MzI3LTQxYWEtYTFlMi04NDQ4NTgwZWJiNmUifQ.HYKbwTFz8sZJUe9RkkdfuZMk9B_z-Cr-L7VLy8P2F53glvJLyGkQI6v9LW_bMuigYSxLlNPafLAPT_k7uSgOsowXHiqi3qadfhyQQxs31mtfUouSV1sVuUdeLqUvKk-rhHUPJzs1iPY7L98Jn1TxHARMreLD8dPrbzS_3YgN62HOs62gYmOslvXaabUAVRfnnqndPqcxprkfhQ1JRNwcKdITCDj200YdDZSCErJ6WKxXN2NucEv1nGKbyA1JSqISYLFbBrAX4Ik2YrP2Xgz_jro8mEE4LWUD-ynDeuwH7IUnVK2dOhUPxaPf-2Pq0TNQscMOU2ba5XGQ-20tD1JCfA';
$cookie = 'HWWAFSESID=0cbec73940664def85; HWWAFSESTIME=1591066365038; index_logo=ycLogo; system_region=000000; index_title=%E4%B8%AD%E5%A4%AE%E5%9B%BD%E5%AE%B6%E6%9C%BA%E5%85%B3%E6%94%BF%E5%BA%9C%E9%87%87%E8%B4%AD%E4%B8%AD%E5%BF%83%E5%9F%BA%E7%A1%80%E7%AE%A1%E7%90%86%E5%B9%B3%E5%8F%B0; logoContent=%E4%B8%AD%E5%A4%AE%E5%9B%BD%E5%AE%B6%E6%9C%BA%E5%85%B3%E6%94%BF%E5%BA%9C%E9%87%87%E8%B4%AD%E4%B8%AD%E5%BF%83; iconUrl=/gp-auth-center/major/images/custom/default/logo.png; logoUrl=/gp-auth-center/major/images/yangcai/logo.png; Hm_lvt_8634e79bc7cdf26c2fc52ff6dbc9945f=1593660116; access_token=eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyU3RhdHVzIjoiMSIsImxvZ2luVHlwZSI6MSwidXNlcl9uYW1lIjoi5Y-y5pyd5pmWMTM2MDExODM4ODkiLCJ1c2VyVHlwZUluZm9zIjpbeyJ1c2VyVHlwZUlkIjoiNCIsImNvbW1vblR5cGUiOiI0Iiwic3lzdGVtVHlwZSI6IjMiLCJzdGF0dXMiOiIxIn1dLCJ1c2VyTmFtZSI6IuWPsuacneaZljEzNjAxMTgzODg5IiwidXNlcklkIjoiNEM5NThEMTA1MjhDNEE2QzkzQTA0Rjc3NjBCNUI5MkYiLCJjbGllbnRfaWQiOiJncC1nYXRld2F5LWNlbnRlciIsImF1ZCI6WyJBTEwiXSwiaWRlbnRpdHlUeXBlIjoxLCJ1c2VyQWNjb3VudCI6InNoZW5namlhZmVpIiwic2NvcGUiOlsicmVhZCIsIndyaXRlIl0sInN5c3RlbVR5cGUiOiIzIiwidXNlclR5cGVOb3ciOiI0IiwiZXhwIjoxNTkzNzQ5NDY1LCJqdGkiOiI2MWY4Nzg1Ny03MzI3LTQxYWEtYTFlMi04NDQ4NTgwZWJiNmUifQ.HYKbwTFz8sZJUe9RkkdfuZMk9B_z-Cr-L7VLy8P2F53glvJLyGkQI6v9LW_bMuigYSxLlNPafLAPT_k7uSgOsowXHiqi3qadfhyQQxs31mtfUouSV1sVuUdeLqUvKk-rhHUPJzs1iPY7L98Jn1TxHARMreLD8dPrbzS_3YgN62HOs62gYmOslvXaabUAVRfnnqndPqcxprkfhQ1JRNwcKdITCDj200YdDZSCErJ6WKxXN2NucEv1nGKbyA1JSqISYLFbBrAX4Ik2YrP2Xgz_jro8mEE4LWUD-ynDeuwH7IUnVK2dOhUPxaPf-2Pq0TNQscMOU2ba5XGQ-20tD1JCfA; Hm_lpvt_8634e79bc7cdf26c2fc52ff6dbc9945f=1593745869';

go(function () use ($addUrl , $data , $Authorization , $cookie){

    $cli = new Swoole\Coroutine\Http\Client('http://shop.zycg.gov.cn' , 443 , true);
    $cli->setHeaders([
        "user-agent: Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36"
    ]);
    var_dump('getCookies' , $cli->getCookies());
    $cli->set(['timeout' => 5]);
    $cli->post($addUrl , $data);
    $cli->setCookies([
        "authorization: $Authorization",
        "cookie: $cookie",
    ]);
    $cli->get('/manage/member/info.html');
    echo $cli->getBody();
    $cli->close();

});
