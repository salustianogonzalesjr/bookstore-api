# bookstore-api

How to setup
- git clone 
- cd to bookstore-api
- composer install
- mv .env.example to .env
- provide database information
- run php artisan migrate --seed
- run php artisan serve or should be accessible via https://bookstore-api.test


How to Use This API ( via Postman )

1. Register
![Register](images/Register.png)

2. Login
![Login](images/Login.png)

3. Get the response Token from Login
![GetAllBook](images/GetAllBook.jpg)

4. Add the Token in Postman
![GetAllBook](images/GetAllBook.jpg)
