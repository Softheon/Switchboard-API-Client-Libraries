<?php
namespace ;
final class SoftheonSwitchboard
{
    /**
     * @param \Microsoft\Rest\RunTimeInterface $_runTime
     * @param string $subscriptionId
     */
    public function __construct(
        \Microsoft\Rest\RunTimeInterface $_runTime,
        $subscriptionId
    )
    {
        $_client = $_runTime->createClientFromData(
            self::_SWAGGER_OBJECT_DATA,
            ['subscriptionId' => $subscriptionId]
        );
        $this->_GetBoardById_operation = $_client->createOperation('GetBoardById');
        $this->_UpdateBoard_operation = $_client->createOperation('UpdateBoard');
        $this->_DeleteBoard_operation = $_client->createOperation('DeleteBoard');
        $this->_GetAllBoards_operation = $_client->createOperation('GetAllBoards');
        $this->_CreateBoard_operation = $_client->createOperation('CreateBoard');
        $this->_GetAllBoardHistoryForTheAccount_operation = $_client->createOperation('GetAllBoardHistoryForTheAccount');
        $this->_GetBoardHistoryById_operation = $_client->createOperation('GetBoardHistoryById');
        $this->_GetBoardsByFilter_operation = $_client->createOperation('GetBoardsByFilter');
        $this->_GetSwitchesByBoardId_operation = $_client->createOperation('GetSwitchesByBoardId');
        $this->_CreateSwitch_operation = $_client->createOperation('CreateSwitch');
        $this->_GetSwitch_operation = $_client->createOperation('GetSwitch');
        $this->_UpdateSwitch_operation = $_client->createOperation('UpdateSwitch');
        $this->_DeleteSwitchVersion_operation = $_client->createOperation('DeleteSwitchVersion');
        $this->_GetSwitchHistory_operation = $_client->createOperation('GetSwitchHistory');
        $this->_GetAllSwitchHistoryByBoard_operation = $_client->createOperation('GetAllSwitchHistoryByBoard');
        $this->_GetAllSwitchHistoryBySwitch_operation = $_client->createOperation('GetAllSwitchHistoryBySwitch');
        $this->_GetSwitchesByFilter_operation = $_client->createOperation('GetSwitchesByFilter');
        $this->_RollbackSwitch_operation = $_client->createOperation('RollbackSwitch');
    }
    /**
     * @param integer $id
     * @return array
     */
    public function getBoardById($id)
    {
        return $this->_GetBoardById_operation->call(['id' => $id]);
    }
    /**
     * @param integer $id
     * @param array|null $model
     */
    public function updateBoard(
        $id,
        array $model = null
    )
    {
        return $this->_UpdateBoard_operation->call([
            'id' => $id,
            'model' => $model
        ]);
    }
    /**
     * @param integer $id
     */
    public function deleteBoard($id)
    {
        return $this->_DeleteBoard_operation->call(['id' => $id]);
    }
    /**
     * @return array[]
     */
    public function getAllBoards()
    {
        return $this->_GetAllBoards_operation->call([]);
    }
    /**
     * @param array|null $model
     * @return array
     */
    public function createBoard(array $model = null)
    {
        return $this->_CreateBoard_operation->call(['model' => $model]);
    }
    /**
     * @return array[]
     */
    public function getAllBoardHistoryForTheAccount()
    {
        return $this->_GetAllBoardHistoryForTheAccount_operation->call([]);
    }
    /**
     * @param integer $id
     * @return array
     */
    public function getBoardHistoryById($id)
    {
        return $this->_GetBoardHistoryById_operation->call(['id' => $id]);
    }
    /**
     * @param array|null $model
     * @return array[]
     */
    public function getBoardsByFilter(array $model = null)
    {
        return $this->_GetBoardsByFilter_operation->call(['model' => $model]);
    }
    /**
     * @param integer $boardId
     * @return array[]
     */
    public function getSwitchesByBoardId($boardId)
    {
        return $this->_GetSwitchesByBoardId_operation->call(['boardId' => $boardId]);
    }
    /**
     * @param integer $boardId
     * @param array|null $switchPostModel
     * @return array
     */
    public function createSwitch(
        $boardId,
        array $switchPostModel = null
    )
    {
        return $this->_CreateSwitch_operation->call([
            'boardId' => $boardId,
            'switchPostModel' => $switchPostModel
        ]);
    }
    /**
     * @param integer $id
     * @param string $boardId
     * @return array
     */
    public function getSwitch(
        $id,
        $boardId
    )
    {
        return $this->_GetSwitch_operation->call([
            'id' => $id,
            'boardId' => $boardId
        ]);
    }
    /**
     * @param integer $id
     * @param array|null $switchPutModel
     * @param string $boardId
     */
    public function updateSwitch(
        $id,
        array $switchPutModel = null,
        $boardId
    )
    {
        return $this->_UpdateSwitch_operation->call([
            'id' => $id,
            'switchPutModel' => $switchPutModel,
            'boardId' => $boardId
        ]);
    }
    /**
     * @param integer $id
     * @param string $boardId
     */
    public function deleteSwitchVersion(
        $id,
        $boardId
    )
    {
        return $this->_DeleteSwitchVersion_operation->call([
            'id' => $id,
            'boardId' => $boardId
        ]);
    }
    /**
     * @param integer $id
     * @param string $boardId
     * @return array
     */
    public function getSwitchHistory(
        $id,
        $boardId
    )
    {
        return $this->_GetSwitchHistory_operation->call([
            'id' => $id,
            'boardId' => $boardId
        ]);
    }
    /**
     * @param integer $boardId
     * @return array[]
     */
    public function getAllSwitchHistoryByBoard($boardId)
    {
        return $this->_GetAllSwitchHistoryByBoard_operation->call(['boardId' => $boardId]);
    }
    /**
     * @param integer $switchId
     * @param string $boardId
     * @return array[]
     */
    public function getAllSwitchHistoryBySwitch(
        $switchId,
        $boardId
    )
    {
        return $this->_GetAllSwitchHistoryBySwitch_operation->call([
            'switchId' => $switchId,
            'boardId' => $boardId
        ]);
    }
    /**
     * @param integer $boardId
     * @param array|null $model
     * @return array[]
     */
    public function getSwitchesByFilter(
        $boardId,
        array $model = null
    )
    {
        return $this->_GetSwitchesByFilter_operation->call([
            'boardId' => $boardId,
            'model' => $model
        ]);
    }
    /**
     * @param integer $switchId
     * @param integer $switchHistoryId
     * @param string $boardId
     */
    public function rollbackSwitch(
        $switchId,
        $switchHistoryId,
        $boardId
    )
    {
        return $this->_RollbackSwitch_operation->call([
            'switchId' => $switchId,
            'switchHistoryId' => $switchHistoryId,
            'boardId' => $boardId
        ]);
    }
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetBoardById_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_UpdateBoard_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteBoard_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetAllBoards_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateBoard_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetAllBoardHistoryForTheAccount_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetBoardHistoryById_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetBoardsByFilter_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetSwitchesByBoardId_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_CreateSwitch_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetSwitch_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_UpdateSwitch_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_DeleteSwitchVersion_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetSwitchHistory_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetAllSwitchHistoryByBoard_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetAllSwitchHistoryBySwitch_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_GetSwitchesByFilter_operation;
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_RollbackSwitch_operation;
    const _SWAGGER_OBJECT_DATA = [
        'host' => 'localhost',
        'paths' => [
            '/v1/Board/{id}' => [
                'get' => [
                    'operationId' => 'GetBoardById',
                    'parameters' => [[
                        'name' => 'id',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/BoardModel']],
                        '400' => [],
                        '401' => [],
                        '403' => []
                    ]
                ],
                'put' => [
                    'operationId' => 'UpdateBoard',
                    'parameters' => [
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'model',
                            'in' => 'body',
                            'required' => FALSE,
                            'schema' => ['$ref' => '#/definitions/BoardPutModel']
                        ]
                    ],
                    'responses' => [
                        '204' => [],
                        '400' => [],
                        '404' => [],
                        '401' => [],
                        '403' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteBoard',
                    'parameters' => [[
                        'name' => 'id',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]],
                    'responses' => [
                        '204' => [],
                        '400' => [],
                        '404' => [],
                        '401' => [],
                        '403' => []
                    ]
                ]
            ],
            '/v1/Board' => [
                'get' => [
                    'operationId' => 'GetAllBoards',
                    'parameters' => [],
                    'responses' => [
                        '200' => ['schema' => [
                            'type' => 'array',
                            'items' => ['$ref' => '#/definitions/BoardModel']
                        ]],
                        '400' => [],
                        '404' => [],
                        '401' => [],
                        '403' => []
                    ]
                ],
                'post' => [
                    'operationId' => 'CreateBoard',
                    'parameters' => [[
                        'name' => 'model',
                        'in' => 'body',
                        'required' => FALSE,
                        'schema' => ['$ref' => '#/definitions/BoardPostModel']
                    ]],
                    'responses' => [
                        '201' => ['schema' => ['$ref' => '#/definitions/BoardModel']],
                        '400' => [],
                        '401' => [],
                        '403' => []
                    ]
                ]
            ],
            '/v1/Board/History' => ['get' => [
                'operationId' => 'GetAllBoardHistoryForTheAccount',
                'parameters' => [],
                'responses' => [
                    '200' => ['schema' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/BoardHistoryModel']
                    ]],
                    '400' => [],
                    '404' => [],
                    '401' => [],
                    '403' => []
                ]
            ]],
            '/v1/Board/History/{id}' => ['get' => [
                'operationId' => 'GetBoardHistoryById',
                'parameters' => [[
                    'name' => 'id',
                    'in' => 'path',
                    'required' => TRUE,
                    'type' => 'integer',
                    'format' => 'int32'
                ]],
                'responses' => [
                    '200' => ['schema' => ['$ref' => '#/definitions/BoardHistoryModel']],
                    '400' => [],
                    '401' => [],
                    '403' => []
                ]
            ]],
            '/v1/Board/search' => ['post' => [
                'operationId' => 'GetBoardsByFilter',
                'parameters' => [[
                    'name' => 'model',
                    'in' => 'body',
                    'required' => FALSE,
                    'schema' => ['$ref' => '#/definitions/BoardFilterModel']
                ]],
                'responses' => [
                    '200' => ['schema' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/BoardModel']
                    ]],
                    '401' => [],
                    '403' => []
                ]
            ]],
            '/v1/Board/{boardId}/Switch' => [
                'get' => [
                    'operationId' => 'GetSwitchesByBoardId',
                    'parameters' => [[
                        'name' => 'boardId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ]],
                    'responses' => [
                        '200' => ['schema' => [
                            'type' => 'array',
                            'items' => ['$ref' => '#/definitions/SwitchModel']
                        ]],
                        '401' => [],
                        '403' => []
                    ]
                ],
                'post' => [
                    'operationId' => 'CreateSwitch',
                    'parameters' => [
                        [
                            'name' => 'boardId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'switchPostModel',
                            'in' => 'body',
                            'required' => FALSE,
                            'schema' => ['$ref' => '#/definitions/SwitchPostModel']
                        ]
                    ],
                    'responses' => [
                        '201' => ['schema' => ['$ref' => '#/definitions/SwitchModel']],
                        '401' => [],
                        '403' => []
                    ]
                ]
            ],
            '/v1/Board/{boardId}/Switch/{id}' => [
                'get' => [
                    'operationId' => 'GetSwitch',
                    'parameters' => [
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'boardId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => [
                        '200' => ['schema' => ['$ref' => '#/definitions/SwitchModel']],
                        '404' => [],
                        '401' => [],
                        '403' => []
                    ]
                ],
                'put' => [
                    'operationId' => 'UpdateSwitch',
                    'parameters' => [
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'switchPutModel',
                            'in' => 'body',
                            'required' => FALSE,
                            'schema' => ['$ref' => '#/definitions/SwitchPutModel']
                        ],
                        [
                            'name' => 'boardId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => [
                        '204' => [],
                        '404' => [],
                        '401' => [],
                        '403' => []
                    ]
                ],
                'delete' => [
                    'operationId' => 'DeleteSwitchVersion',
                    'parameters' => [
                        [
                            'name' => 'id',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'integer',
                            'format' => 'int32'
                        ],
                        [
                            'name' => 'boardId',
                            'in' => 'path',
                            'required' => TRUE,
                            'type' => 'string'
                        ]
                    ],
                    'responses' => [
                        '204' => [],
                        '404' => [],
                        '401' => [],
                        '403' => []
                    ]
                ]
            ],
            '/v1/Board/{boardId}/Switch/History/{id}' => ['get' => [
                'operationId' => 'GetSwitchHistory',
                'parameters' => [
                    [
                        'name' => 'id',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'boardId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ]
                ],
                'responses' => [
                    '200' => ['schema' => ['$ref' => '#/definitions/SwitchHistoryModel']],
                    '404' => [],
                    '401' => [],
                    '403' => []
                ]
            ]],
            '/v1/Board/{boardId}/Switch/History' => ['get' => [
                'operationId' => 'GetAllSwitchHistoryByBoard',
                'parameters' => [[
                    'name' => 'boardId',
                    'in' => 'path',
                    'required' => TRUE,
                    'type' => 'integer',
                    'format' => 'int32'
                ]],
                'responses' => [
                    '200' => ['schema' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/SwitchHistoryModel']
                    ]],
                    '401' => [],
                    '403' => []
                ]
            ]],
            '/v1/Board/{boardId}/Switch/{switchId}/History' => ['get' => [
                'operationId' => 'GetAllSwitchHistoryBySwitch',
                'parameters' => [
                    [
                        'name' => 'switchId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'boardId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ]
                ],
                'responses' => [
                    '200' => ['schema' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/SwitchHistoryModel']
                    ]],
                    '401' => [],
                    '403' => []
                ]
            ]],
            '/v1/Board/{boardId}/Switch/search' => ['post' => [
                'operationId' => 'GetSwitchesByFilter',
                'parameters' => [
                    [
                        'name' => 'boardId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'model',
                        'in' => 'body',
                        'required' => FALSE,
                        'schema' => ['$ref' => '#/definitions/SwitchFilterModel']
                    ]
                ],
                'responses' => [
                    '200' => ['schema' => [
                        'type' => 'array',
                        'items' => ['$ref' => '#/definitions/SwitchModel']
                    ]],
                    '401' => [],
                    '403' => []
                ]
            ]],
            '/v1/Board/{boardId}/Switch/{switchId}/history/{switchHistoryId}' => ['put' => [
                'operationId' => 'RollbackSwitch',
                'parameters' => [
                    [
                        'name' => 'switchId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'switchHistoryId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    [
                        'name' => 'boardId',
                        'in' => 'path',
                        'required' => TRUE,
                        'type' => 'string'
                    ]
                ],
                'responses' => [
                    '204' => [],
                    '404' => [],
                    '401' => [],
                    '403' => []
                ]
            ]]
        ],
        'definitions' => [
            'BoardModel' => [
                'properties' => [
                    'boardId' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'accountId' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'createdUserId' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'modifiedUserId' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'name' => ['type' => 'string'],
                    'description' => ['type' => 'string'],
                    'createdDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'modifiedDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'BoardPutModel' => [
                'properties' => [
                    'name' => ['type' => 'string'],
                    'description' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'BoardPostModel' => [
                'properties' => [
                    'name' => ['type' => 'string'],
                    'description' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'BoardHistoryModel' => [
                'properties' => [
                    'boardHistoryId' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'boardId' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'accountId' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'createdUserId' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'modifiedUserId' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'name' => ['type' => 'string'],
                    'description' => ['type' => 'string'],
                    'createdDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'modifiedDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'BoardFilterModel' => [
                'properties' => [
                    'name' => ['type' => 'string'],
                    'createdDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'modifiedDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'SwitchModel' => [
                'properties' => [
                    'switchId' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'boardId' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'createdUserId' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'modifiedUserId' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'name' => ['type' => 'string'],
                    'description' => ['type' => 'string'],
                    'comment' => ['type' => 'string'],
                    'createdDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'modifiedDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'value' => ['type' => 'string'],
                    'valueType' => ['type' => 'string'],
                    'version' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'SwitchPostModel' => [
                'properties' => [
                    'name' => ['type' => 'string'],
                    'description' => ['type' => 'string'],
                    'comment' => ['type' => 'string'],
                    'value' => ['type' => 'string'],
                    'valueType' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'SwitchPutModel' => [
                'properties' => [
                    'name' => ['type' => 'string'],
                    'description' => ['type' => 'string'],
                    'comment' => ['type' => 'string'],
                    'value' => ['type' => 'string'],
                    'valueType' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'SwitchHistoryModel' => [
                'properties' => [
                    'switchHistoryId' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'switchId' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'boardId' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'createdUserId' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'modifiedUserId' => [
                        'type' => 'integer',
                        'format' => 'int32'
                    ],
                    'name' => ['type' => 'string'],
                    'description' => ['type' => 'string'],
                    'comment' => ['type' => 'string'],
                    'createdDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'modifiedDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'value' => ['type' => 'string'],
                    'valueType' => ['type' => 'string'],
                    'version' => ['type' => 'string']
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ],
            'SwitchFilterModel' => [
                'properties' => [
                    'name' => ['type' => 'string'],
                    'valueType' => ['type' => 'string'],
                    'createdDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ],
                    'modifiedDate' => [
                        'type' => 'string',
                        'format' => 'date-time'
                    ]
                ],
                'additionalProperties' => FALSE,
                'required' => []
            ]
        ]
    ];
}
