up: 	 		## Up all docker containers.
	@./vendor/bin/sail up -d

down: 	 		## Up all docker containers.
	@./vendor/bin/sail down

migrate: 	 		## migrate.
	@./vendor/bin/sail  php artisan migrate:refresh --seed

tinker: 	 		## .
	@./vendor/bin/sail php artisan tinker
