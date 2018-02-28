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
	'qa_create' => 'बनाइए (क्रिएट)',
	'qa_save' => 'सुरक्षित करे ',
	'qa_edit' => 'संपादित करे (एडिट)',
	'qa_view' => 'देखें',
	'qa_update' => 'सुधारे ',
	'qa_list' => 'सूची',
	'qa_no_entries_in_table' => 'टेबल मे एक भी एंट्री नही है ',
	'qa_custom_controller_index' => 'विशेष(कस्टम) कंट्रोलर इंडेक्स ।',
	'qa_logout' => 'लोग आउट',
	'qa_add_new' => 'नया समाविष्ट करे',
	'qa_are_you_sure' => 'आप निस्चित है ?',
	'qa_back_to_list' => 'सूची पे वापस जाए',
	'qa_dashboard' => 'डॅशबोर्ड ',
	'qa_delete' => 'मिटाइए',
	'quickadmin_title' => 'hotel-booking',
];