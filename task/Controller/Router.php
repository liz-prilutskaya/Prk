<?php
namespace Prk\Task\Controller;
class Router implements \Magento\Framework\App\RouterInterface
{
    protected $actionFactory;
    protected $_response;
    protected $data;

    public function __construct(
    \Magento\Framework\App\ActionFactory $actionFactory,
    \Magento\Framework\App\ResponseInterface $response,
    \Prk\Task\Model\Data $data
    ) {
    $this->actionFactory = $actionFactory;
    $this->_response = $response;
        $this->data = $data;
    }

    public function match(\Magento\Framework\App\RequestInterface $request)
    {
    $identifier = trim($request->getPathInfo(), '/');
    if(strpos($identifier, $this->data->getURL()) !== false) {
    $request->setModuleName('task')-> //module name
    setControllerName('index')-> //controller name
    setActionName('index');//action name
    } else {
    return false;
    }
    return $this->actionFactory->create(
    'Magento\Framework\App\Action\Forward',
    ['request' => $request]
    );
    }
}