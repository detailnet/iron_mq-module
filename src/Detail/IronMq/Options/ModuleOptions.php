<?php

namespace Detail\IronMq\Options;

class ModuleOptions extends AbstractOptions
{
    /**
     * @var string
     */
    protected $token = null;

    /**
     * @var string
     */
    protected $projectId = null;

    /**
     * @var array
     */
    protected $api = array();

    /**
     * @var array
     */
    protected $options = array();

    /**
     * @param array $api
     */
    public function setApi($api)
    {
        $this->api = $api;
    }

    /**
     * @return array
     */
    public function getApi()
    {
        return $this->api;
    }

    /**
     * @param array $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }

    /**
     * @return string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
}
