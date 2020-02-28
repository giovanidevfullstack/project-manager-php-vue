<?php

$composer = require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/config/modules.php';

$app = new PM\Framework\App($composer, $modules);
$app->run();


/**
 * < Aplicação com 7 camadas >
 * Gerenciamento de dependências
 * Rotas
 * Model
 * View
 * Controller
 * Eventos
 * Middlewares
 */

 /**
  * { Modularização }
  * -> confiabilidade
  * -> legibilidade
  * -> manutenção
  * -> flexibilidade 
  */