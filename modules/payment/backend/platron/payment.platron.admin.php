<?php
/**
 * Настройки платежной системы Platron для административного интерфейса
 * 
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    5.4
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2014 OOO «Диафан» (http://diafan.ru)
 */

if (! defined('DIAFAN'))
{
	include dirname(dirname(dirname(dirname(dirname(__FILE__))))).'/includes/404.php';
}

class Payment_platron_admin
{
	public $config;

	public function __construct()
	{
		$this->config = array(
			"name" => 'Platron',
			"params" => array(
                'platron_merchant_id' => 'Номер магазина',
                'platron_secret_key' => 'Секретный ключ',
                'platron_lifetime' => 'Время жизни счета в минутах. Максимально 7 дней',
				'platron_test' => array('name' => 'Тестовый режим', 'type' => 'checkbox'),
				'platron_payment_system' => 'Название платежной системы, на которую указывает метод',
				'platron_create_ofd_check' => array('name' => 'Создавать чек в ОФД', 'type' => 'checkbox', 'help' => '54-ФЗ'),
				'platron_ofd_vat_type' => array(
					'name' => 'Тип НДС для ОФД',
					'type' => 'select',
					'select' => array(
						'0' => '0%',
						'10' => '10%',
						'20' => '20%',
						'110' => '10/110',
						'120' => '20/120',
						'none' => 'Не облагается',
					),
					'help' => 'НДС для товаров при создании чека в ОФД.',
				),

			)
		);
	}
}
