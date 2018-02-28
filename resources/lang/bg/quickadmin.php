<?php

return [
		'user-management' => [		'title' => 'User management',		'fields' => [		],	],
		'roles' => [		'title' => 'Roles',		'fields' => [			'title' => 'Title',		],	],
		'users' => [		'title' => 'Users',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',		],	],
		'countries' => [		'title' => 'Countries',		'fields' => [			'shortcode' => 'Shortcode',			'title' => 'Title',			'name' => 'Name',		],	],
		'customers' => [		'title' => 'Customers',		'fields' => [			'first-name' => 'First name',			'last-name' => 'Last name',			'address' => 'Address',			'phone' => 'Phone',			'email' => 'Email',			'country' => 'Country',		],	],
		'rooms' => [		'title' => 'Rooms',		'fields' => [			'room-number' => 'Room number',			'floor' => 'Floor',			'description' => 'Description',		],	],
		'bookings' => [		'title' => 'Bookings',		'fields' => [			'customer' => 'Customer',			'room' => 'Room',			'time-from' => 'Time from',			'time-to' => 'Time to',			'additional-information' => 'Additional information',		],	],
		'find-room' => [		'title' => 'Find room',		'fields' => [		],	],
	'qa_create' => 'Създай',
	'qa_save' => 'Запази',
	'qa_edit' => 'Промени',
	'qa_view' => 'Покажи',
	'qa_update' => 'Обнови',
	'qa_list' => 'Списък',
	'qa_no_entries_in_table' => 'Няма записи в таблицата',
	'qa_custom_controller_index' => 'Персонализиран контролер.',
	'qa_logout' => 'Изход',
	'qa_add_new' => 'Добави нов',
	'qa_are_you_sure' => 'Сигурни ли сте?',
	'qa_back_to_list' => 'Обратно към списъка',
	'qa_dashboard' => 'Табло',
	'qa_delete' => 'Изтрий',
	'quickadmin_title' => 'hotel-booking',
];