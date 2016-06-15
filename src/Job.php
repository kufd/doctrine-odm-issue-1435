<?php

class Job
{
    /**
     * @var string
     */
    public $uuid = null;
    /**
     * @var string
     */
    public $name = null;
    /**
     * @var string
     */
    public $description = null;
    /**
     * @var array
     */
    public $taskUuidList = null;
    /**
     * @var array
     */
    public $balancing = null;
    /**
     * @var bool
     */
    public $balancingEnabled = false;
    /**
     * @var int
     */
    public $retryCount = 0;
    /**
     * @var bool
     */
    public $retryEnabled = false;
    /**
     * @var bool
     */
    public $error = false;
    /**
     * @var string
     */
    public $errorMessage = null;
    /**
     * @var string
     */
    public $userId = null;
}