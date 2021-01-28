Wymagane:
composer, docker, docker-compose, git

1. Ściągamy do pustego folderu aplikacje przy użyciu Gita komendą || git clone https://github.com/Przemo92/rekrutacja.git
2. Przechodzimy do folderu z programem i tworzymy własne środowisko || cp .env.example .env
3. Przechodzimy do folderu z dockerem || cd docker
4. Budowanie środowiska dockerowego || docker-compose build
5. Uruchomienie środowiska || docker-compose up -d
6. Instalacja zależności || docker exec -it test-backend composer install
7. Generowanie API key || docker exec -it test-backend php artisan key:generate
8. Wyświetlenie stworzonych kontenerów || docker ps
9. Zbadanie konteneru z baza danych ||  docker inspect {id_kontenera_test-database}
10. Spisujemy adres IP tego kontenera.
11. W folderze z projektem wchodzimy do pliku .env, w miejsce DB_HOST= {adres IP kontenera z baza danych} oraz poprawiamy DB_DATABASE=test
12. Zbadanie konteneru z redisem ||  docker inspect {id_kontenera_test-redis}
13. Spisujemy adres IP tego kontenera.
14. W folderze z projektem wchodzimy do pliku .env, w miejsce REDIS_HOST= {adres IP kontenera z redisem}
15. Po konfiguracji środowiska otwieramy przeglądarke, wpisujemy http://localhost/palindromes
16. W okienku wpisujemy słowo, przycisk wyślij zapisuje palindrom do bazy danych i przekierowuje do okna z id, palindromem oraz data utworzenia zapisanego słowa.
