
/* HallWala Schema */



/***************** USERS *********************/
CREATE TABLE IF NOT EXISTS 
`users` (
	`id` int(11) AUTO_INCREMENT,
	`given_name` varchar(256),
	`formatted` varchar(256),			
	`family_name` varchar(256),
	`email` varchar(256) UNIQUE NOT NULL,
	`about` varchar(512),
	`password` varchar(256),
	`user_id` varchar(256),
	`domain` varchar(256),
	`access_token` varchar(256),
	`refresh_token` varchar(256),
	`profile_pic` varchar(512),
	`joining_time` int(20),
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



/***************** CONTACT *********************/
CREATE TABLE IF NOT EXISTS 
`contacts` (
	`id` int(11) AUTO_INCREMENT,
	`user_id` int(11),
	`type` varchar(256),
	`info` varchar(1024),
	FOREIGN KEY (`user_id`) REFERENCES users(`id`),
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



/***************** CUSTOMERS *********************/
CREATE TABLE IF NOT EXISTS 
`customers` (
	`id` int(11) AUTO_INCREMENT,
	`user_id` int(11),
	FOREIGN KEY (`user_id`) REFERENCES users(`id`),
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



/***************** VENDORS *********************/
CREATE TABLE IF NOT EXISTS 
`vendors` (
	`id` int(11) AUTO_INCREMENT,
	`user_id` int(11),
	`pan_card_number` varchar(256),
	FOREIGN KEY (`user_id`) REFERENCES users(`id`),
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



/***************** EVENTS *********************/
CREATE TABLE IF NOT EXISTS 
`events` (
	`id` int(11) AUTO_INCREMENT,
	`name` varchar(256),
	`type` varchar(256),
	`description` varchar(2048),
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



/***************** ACCOMODATION *********************/
CREATE TABLE IF NOT EXISTS 
`accomodation` (
	`id` int(11) AUTO_INCREMENT,
	`min_accomodation` int(11),
	`max_accomodation` int(11),
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



/***************** VENUES *********************/
CREATE TABLE IF NOT EXISTS 
`venues` (
	`id` int(11) AUTO_INCREMENT,
	`name` varchar(1024),
	`description` varchar(2048),
	`registration_number` varchar(256),
	`accomodation_id` int(11),
	`vendor_id` int(11),
	FOREIGN KEY (`accomodation_id`) REFERENCES accomodation(`id`),
	FOREIGN KEY (`vendor_id`) REFERENCES vendors(`id`),
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



/***************** VENUE FACILITIES *********************/
CREATE TABLE IF NOT EXISTS 
`venue_facilities` (
	`id` int(11) AUTO_INCREMENT,
	`area` varchar(256),
	`num_halls` int(11),
	`num_guest_rooms` int(11),
	`guest_rooms_price` int(11),
	`garden` boolean DEFAULT 0,
	`catering` varchar(2048),
	`catering_in_budget` boolean DEFAULT 0,
	`decoration` varchar(2048),
	`decoration_in_budget` boolean DEFAULT 0,
	`bridal_makeup` boolean DEFAULT 0,
	`guest_makeup` boolean DEFAULT 0,
	`dance_music_dj` boolean DEFAULT 0,
	`transport` varchar(2048),
	`venue_id` int(11),
	FOREIGN KEY (`venue_id`) REFERENCES venues(`id`),
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



/***************** VENUE LOCATION *********************/
CREATE TABLE IF NOT EXISTS 
`venue_location` (
	`id` int(11) AUTO_INCREMENT,
	`latitude` double,
	`longitude` double,
	`state` varchar(256),
	`city` varchar(256),
	`locality` varchar(256),
	`address` varchar(1024),
	`venue_id` int(11),
	FOREIGN KEY (`venue_id`) REFERENCES venues(`id`),
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



/***************** VENUE IMAGES *********************/
CREATE TABLE IF NOT EXISTS 
`venue_images` (
	`id` int(11) AUTO_INCREMENT,
	`url` varchar(2048),
	`thumbnail` varchar(2048),
	`caption` varchar(2048),
	`venue_id` int(11),
	FOREIGN KEY (`venue_id`) REFERENCES venues(`id`),
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



/***************** VENUE CONTACTS *********************/
CREATE TABLE IF NOT EXISTS 
`venue_contacts` (
	`id` int(11) AUTO_INCREMENT,
	`type` varchar(256),
	`info` varchar(1024),
	`venue_id` int(11),
	FOREIGN KEY (`venue_id`) REFERENCES venues(`id`),
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



/***************** VENUE EVENTS *********************/
CREATE TABLE IF NOT EXISTS 
`venue_events` (
	`id` int(11) AUTO_INCREMENT,
	`venue_id` int(11),
	`event_id` int(11),
	FOREIGN KEY (`venue_id`) REFERENCES venues(`id`),
	FOREIGN KEY (`event_id`) REFERENCES events(`id`),
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



/***************** VENUE RATINGS *********************/
CREATE TABLE IF NOT EXISTS 
`venue_ratings` (
	`id` int(11) AUTO_INCREMENT,
	`type` varchar(256),
	`rating` int(11),
	`customer_id` int(11),
	`venue_id` int(11),
	FOREIGN KEY (`customer_id`) REFERENCES customers(`id`),
	FOREIGN KEY (`venue_id`) REFERENCES venues(`id`),
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



/***************** VENUE AVAILABILITY *********************/
CREATE TABLE IF NOT EXISTS 
`venue_availability` (
	`id` int(11) AUTO_INCREMENT,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



/***************** VENUE FEEDBACK *********************/
CREATE TABLE IF NOT EXISTS 
`venue_feedbacks` (
	`id` int(11) AUTO_INCREMENT,
	`feedback` varchar(8192),
	`customer_id` int(11),
	`venue_id` int(11),
	FOREIGN KEY (`customer_id`) REFERENCES customers(`id`),
	FOREIGN KEY (`venue_id`) REFERENCES venues(`id`),
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



/***************** VENUE REVIEWS *********************/
CREATE TABLE IF NOT EXISTS 
`venue_reviews` (
	`id` int(11) AUTO_INCREMENT,
	`review` varchar(8192),
	`customer_id` int(11),
	`venue_id` int(11),
	FOREIGN KEY (`customer_id`) REFERENCES customers(`id`),
	FOREIGN KEY (`venue_id`) REFERENCES venues(`id`),
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



/***************** VENUE REVIEW VOTE *********************/
CREATE TABLE IF NOT EXISTS 
`venue_review_vote` (
	`id` int(11) AUTO_INCREMENT,
	`customer_id` int(11),
	`venue_review_id` int(11),
	`vote` boolean DEFAULT 1,
	FOREIGN KEY (`customer_id`) REFERENCES customers(`id`),
	FOREIGN KEY (`venue_review_id`) REFERENCES venue_reviews(`id`),
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



/***************** USER TOP VENUES *********************/
CREATE TABLE IF NOT EXISTS 
`user_top_venues` (
	`id` int(11) AUTO_INCREMENT,
	`customer_id` int(11),
	`venue_id` int(11),
	FOREIGN KEY (`customer_id`) REFERENCES customers(`id`),
	FOREIGN KEY (`venue_id`) REFERENCES venues(`id`),
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



/***************** USER WISHLIST *********************/
CREATE TABLE IF NOT EXISTS 
`user_wishlist` (
	`id` int(11) AUTO_INCREMENT,
	`customer_id` int(11),
	`venue_id` int(11),
	FOREIGN KEY (`customer_id`) REFERENCES customers(`id`),
	FOREIGN KEY (`venue_id`) REFERENCES venues(`id`),
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



/***************** BOOKINGS *********************/
CREATE TABLE IF NOT EXISTS 
`bookings` (
	`id` int(11) AUTO_INCREMENT,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



/***************** PAYMENTS *********************/
CREATE TABLE IF NOT EXISTS 
`payments` (
	`id` int(11) AUTO_INCREMENT,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


