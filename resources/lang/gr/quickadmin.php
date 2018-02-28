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
	'qa_create' => 'Δημιουργία',
	'qa_save' => 'Αποθήκευση',
	'qa_edit' => 'Επεξεργασία',
	'qa_view' => 'Εμφάνιση',
	'qa_update' => 'Ενημέρωησ',
	'qa_list' => 'Λίστα',
	'qa_no_entries_in_table' => 'Δεν υπάρχουν δεδομένα στην ταμπέλα',
	'qa_custom_controller_index' => 'index προσαρμοσμένου controller.',
	'qa_logout' => 'Αποσύνδεση',
	'qa_add_new' => 'Προσθήκη νέου',
	'qa_are_you_sure' => 'Είστε σίγουροι;',
	'qa_back_to_list' => 'Επιστροφή στην λίστα',
	'qa_dashboard' => 'Dashboard',
	'qa_delete' => 'Διαγραφή',
	'quickadmin_title' => 'hotel-booking',
];