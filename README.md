# Simple REST project

## Do poprawy:

* testy: w tej chwili szczególnie testy jednostkowe są do napisania 
* REST API: rozbudowa endpointow o usuwanie, modyfikacje 
* U mnie nie dziaałał poprawnie node. Trzeba sprwadzić co się dzieje z konteneremen

## how to run 

* docker-compose build && docker-compose up -d
* docker-compose run --rm composer install
* docker-compose run --rm artisan migrate
* docker-compose run --rm artisan db:seed
