<?php

namespace Gary\Live;

use Gary\Live\Kernel\Api;

class Heart extends Api
{
    /**
     * 新增心电图进行HRV分析
     * @param array $params
     * @return array
     */
    public function send(array $params): array
    {
        return $this->request('POST', '/api/user/hrv' . $params);
    }

    /**
     * 获取心电图列表
     * @param array $params
     * @return array
     */
    public function getList(array $params): array
    {
        return $this->request('GET', '/api/user/ecgs' . $params);
    }

    /**
     * 查看心电图详情
     * @param array $params
     * @return array
     */
    public function show(array $params): array
    {
        return $this->request('GET', '/api/user/ecgs/{ecg_id}' . $params);
    }

    /**
     * 查看心电图详情
     * @param array $params
     * @return array
     */
    public function getHrv(array $params): array
    {
        return $this->request('GET', '/api/user/ecgs/{ecg_id}' . $params);
    }

}