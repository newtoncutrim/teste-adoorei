.PHONY: start
start:
	@docker compose up -d --build
	@docker compose exec app cp .env.example .env
	@docker compose exec app composer install
	@docker compose exec app php artisan key:generate
	@docker compose exec app sed -i 's/DB_CONNECTION=.*/DB_CONNECTION=mysql/' .env
	@docker compose exec app sed -i 's/DB_HOST=.*/DB_HOST=db/' .env
	@docker compose exec app sed -i 's/DB_PORT=.*/DB_PORT=3306/' .env
	@docker compose exec app sed -i 's/DB_DATABASE=.*/DB_DATABASE=laravel/' .env
	@docker compose exec app sed -i 's/DB_USERNAME=.*/DB_USERNAME=root/' .env
	@docker compose exec app sed -i 's/DB_PASSWORD=.*/DB_PASSWORD=root/' .env
	@docker compose exec app php artisan migrate
	@docker compose exec app php artisan db:seed
	@docker compose exec app php artisan test
	@docker compose exec app chmod 777 -R bootstrap/cache storage
