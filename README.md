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
![Register](https://github.com/salustianogonzalesjr/bookstore-api/blob/main/resources/images/Register.png)

2. Login
![Login](https://github.com/salustianogonzalesjr/bookstore-api/blob/main/resources/images/Login.png)

3. Get the response Token from Login. Add add it in the Authorization Bearer Token in Postman

4. You should now be able to access the API endpoint
CREATE 
![Create](https://github.com/salustianogonzalesjr/bookstore-api/blob/main/resources/images/CreateBook.png)

READ
![Register](https://github.com/salustianogonzalesjr/bookstore-api/blob/main/resources/images/GetAllBooks.png)

UPDATE 
![Update](https://github.com/salustianogonzalesjr/bookstore-api/blob/main/resources/images/UpdateBook.png)

DELETE 
![Delete](https://github.com/salustianogonzalesjr/bookstore-api/blob/main/resources/images/DeleteBook.png)


# Dummy JSON API Wrapper Interface
![Dummy JSON API Wrapper Interface](https://github.com/salustianogonzalesjr/bookstore-api/blob/main/resources/images/json_api_interface_wrapper.png)
