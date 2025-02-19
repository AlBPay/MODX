<?php
	define('MODX_API_MODE', true);
	require dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/index.php';
	
	$modx->getService('error','error.modError');
	$modx->setLogLevel(modX::LOG_LEVEL_ERROR);
	$modx->setLogTarget('FILE');
	
	$miniShop2 = $modx->getService('minishop2');
	$miniShop2->loadCustomClasses('payment');
	
	if (!class_exists('Fondy')) {exit('Error: could not load payment class "Alliance bank".');}
	$context = '';
	$params = array();
	
	$handler = new Fondy($modx->newObject('msOrder'));
	
	if (empty($_POST)) {
		$fap = json_decode(file_get_contents("php://input"));
		if(empty($fap))
			die;
		$_POST = array();
		foreach ($fap as $key => $val) {
			$_POST[$key] = $val;
		}
		$request = $_POST;
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if ($_POST["response_status"]!='success') {
				echo "Error";
				die;
			}elseif($_POST['order_status'] != 'approved'){
				echo "Error order status";
				die;
			}else{
				$id = explode('#', $_POST['order_id']);
				$order = $modx->getObject('msOrder', $id);
				
				$handler->receive($order);
			}
	}
die;