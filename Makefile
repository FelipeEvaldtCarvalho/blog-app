up: 	 		## Up all docker containers.
	@./vendor/bin/sail up -d

down: 	 		## Up all docker containers.
	@./vendor/bin/sail down

migrate: 	 		## Up all docker containers.
	@./vendor/bin/sail ./vendor/bin/sail php artisan migrate
