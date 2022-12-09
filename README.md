# bookstore-api
This is the backend api of bookstore https://github.com/salustianogonzalesjr/bookstore-vue

How to setup
- git clone https://github.com/salustianogonzalesjr/bookstore-api.git
- cd to bookstore-api
- composer install
- mv .env.example to .env
- provide database information
- run php artisan migrate --seed to run factories of user and books
- run php artisan serve or should be accessible via https://bookstore-api.test


How to Use This API ( via Postman )

1. Register
![Register]([images/Register.png](https://github.com/salustianogonzalesjr/bookstore-api/blob/main/resources/images/Register.png))

2. Login
![Login](https://github.com/salustianogonzalesjr/bookstore-api/blob/main/resources/images/Login.png)

3. Get the response Token from Login. Add add it in the Authorization Bearer Token in Postman

4. Add the Token in Postman
![GetAllBook]([images/GetAllBook.jpg](https://github.com/salustianogonzalesjr/bookstore-api/blob/main/resources/images/GetAllBooks.png))
