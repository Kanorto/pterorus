<?php

return [
    'daemon_connection_failed' => 'Возникла исключительная ситуация при попытке связаться с демоном, что привело к коду ответа HTTP/:code. Это исключение было зарегистрировано.',
    'node' => [
        'servers_attached' => 'Узел не должен иметь связанных с ним серверов, чтобы его можно было удалить.',
        'daemon_off_config_updated' => 'Конфигурация демона <strong>обновлена</strong>, однако при попытке автоматического обновления файла конфигурации на демоне произошла ошибка. Вам нужно будет вручную обновить файл конфигурации (config.yml), чтобы демон применил эти изменения.',
    ],
    'allocations' => [
        'server_using' => 'A server is currently assigned to this allocation. An allocation can only be deleted if no server is currently assigned.',
        'too_many_ports' => 'Adding more than 1000 ports in a single range at once is not supported.',
        'invalid_mapping' => 'The mapping provided for :port was invalid and could not be processed.',
        'cidr_out_of_range' => 'CIDR notation only allows masks between /25 and /32.',
        'port_out_of_range' => 'Ports in an allocation must be greater than 1024 and less than or equal to 65535.',
    ],
    'nest' => [
        'delete_has_servers' => 'A Nest with active servers attached to it cannot be deleted from the Panel.',
        'egg' => [
            'delete_has_servers' => 'An Egg with active servers attached to it cannot be deleted from the Panel.',
            'invalid_copy_id' => 'The Egg selected for copying a script from either does not exist, or is copying a script itself.',
            'must_be_child' => 'The "Copy Settings From" directive for this Egg must be a child option for the selected Nest.',
            'has_children' => 'This Egg is a parent to one or more other Eggs. Please delete those Eggs before deleting this Egg.',
        ],
        'variables' => [
            'env_not_unique' => 'The environment variable :name must be unique to this Egg.',
            'reserved_name' => 'The environment variable :name is protected and cannot be assigned to a variable.',
            'bad_validation_rule' => 'The validation rule ":rule" is not a valid rule for this application.',
        ],
        'importer' => [
            'json_error' => 'There was an error while attempting to parse the JSON file: :error.',
            'file_error' => 'The JSON file provided was not valid.',
            'invalid_json_provided' => 'The JSON file provided is not in a format that can be recognized.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Редактирование собственной учетной записи субпользователя не разрешено.',
        'user_is_owner' => 'Вы не можете добавить владельца сервера в качестве субпользователя для этого сервера.',
        'subuser_exists' => 'Пользователь с таким адресом электронной почты уже назначен субпользователем для этого сервера.',
    ],
    'databases' => [
        'delete_has_databases' => 'Невозможно удалить хост-сервер баз данных, с которым связаны активные базы данных.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'Максимальное время интервала для связанной задачи составляет 15 минут.',
    ],
    'locations' => [
        'has_nodes' => 'Невозможно удалить местоположение, к которому подключены активные узлы.',
    ],
    'users' => [
        'node_revocation_failed' => 'Failed to revoke keys on <a href=":link">Node #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Не удалось найти узлы, удовлетворяющие требованиям, указанным для автоматического развертывания.',
        'no_viable_allocations' => 'Выделения, удовлетворяющие требованиям автоматического развертывания, не найдены.',
    ],
    'api' => [
        'resource_not_found' => 'Запрашиваемого ресурса нету на сервере',
    ],
];
