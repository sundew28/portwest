# PortWest Technical Test

An application to manage admin tasks.

## Requirements

- PHP :- 8.1 or above
- MySQL :- 5.6 or above
- Composer :- To install the dependencies

## Install

Clone the repo to your working directory using your favorite CLI console (eg: GitBash, PowerShell, cmd or any of your choice) 

```bash
$ git clone https://github.com/sundew28/portwest.git
```

Once you are done cloning the repo next would be to run composer in your console to install laravel framework dependencies by running the below composer command. Make sure you have composer installed

Via Composer

```bash
$ composer install
```

Next would be to change your .env file to set your database credentials in your root .env file. Once completed run the below command in your console which
will set up your database tables migraion and seeding.

```bash
$ composer run setup
```
This would create all the basic and tasks tables to run your application smoothly. I populated the tasks table with dummy data for the purpose of testing.


## Testing the Application

The API endpoint require a "get" request to be made which is already made mandatory in the api route file for secure transfer of data.

### Workflow 

The purpose of the API end point is to grab random 5 products.

Login :

```bash
Url : <define your localhost with port/virtual domain>/api/login
Params : 
- email <already a user account with email created. Please refer the doc for the informations>,
- password
```
The API will return you with a secure token generated for use. Next you can use the token be set under the Authorization tab.

```
Authorization --> Type (Select Bearer Token)
```
### API Endpoint

1) GET <define your localhost with port/virtual domain>/api/products - grab minimum 5 products with their attributes. Returns a json response. At this point i have implemented a method to return random 5 products from the products table.

    Response example

    ```bash
    {
        "id": 9,
        "name": "brozkwwqfcmlwmnebhgu",
        "code": "prod-1616",
        "price": "686.06",
        "created_at": "2024-04-18T12:43:24.000000Z",
        "updated_at": "2024-04-18T12:43:24.000000Z"
    },
    {
        "id": 1,
        "name": "mnifzxnwaqabtwgtxuds",
        "code": "prod-9216",
        "price": "12.40",
        "created_at": "2024-04-18T12:43:24.000000Z",
        "updated_at": "2024-04-18T12:43:24.000000Z"
    },
    {
        "id": 3,
        "name": "kplcxvhhnpbdtigluluu",
        "code": "prod-5269",
        "price": "906.26",
        "created_at": "2024-04-18T12:43:24.000000Z",
        "updated_at": "2024-04-18T12:43:24.000000Z"
    },
    {
        "id": 5,
        "name": "duoeargzorlvyplecfjd",
        "code": "prod-0487",
        "price": "681.44",
        "created_at": "2024-04-18T12:43:24.000000Z",
        "updated_at": "2024-04-18T12:43:24.000000Z"
    },
    {
        "id": 10,
        "name": "sgkcyyafaybeqawxtjxs",
        "code": "prod-6547",
        "price": "83.91",
        "created_at": "2024-04-18T12:43:24.000000Z",
        "updated_at": "2024-04-18T12:43:24.000000Z"
    }
    ```

## Test case

For running the test case just follow the command below in your console
```bash
php artisan test
```

## Improvements

- I would like to make improvement to the error capturing by making use of error handler in laravel, make use of JsonResponse error handling
- Check the quality of code by using tools like PHPsniffer, PHP-CS-Fixer with PSR2 and Symfony standards (much extra checks, closer to Laravel than PSR2).
- Writing unit tests and feature tests to ensure API functionality better. The current test is just basics.
- I have used the repository design pattern for this API development. We can use the Laravel manager/builder design pattern based on requirement.

