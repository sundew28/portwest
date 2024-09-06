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
will set up your database tables migration and seeding.

```bash
$ composer run setup
```
This would create all the basic and tasks tables to run your application smoothly. I populated the tasks table with dummy data for the purpose of testing.


## Testing the Application

The API endpoint require a "get" request to be made which is already made mandatory in the api route file for secure transfer of data.

### Workflow 

The purpose of the application is to manage the admin tasks. I have made the application simple by using the blade template of laravel instead of Vue / Inertia for the test purpose. Now you can view the application from the url like below

```bash
$ Url : <define your localhost with port/virtual domain>/tasks
```

You can create or edit or delete tasks. Only NEW / COMPLETED tasks are listed . Deleted tasks won't show up in the list. I have setup soft deletes so records are not deleted from the database. You can set a task to COMPLETED status from the list itself. Each completed task has a line-through to indicate its completed and those tasks can't be deleted. 

## Improvements

- I would like to make improvement to the error capturing by making use of error handler in laravel.
- Check the quality of code by using tools like PHPsniffer, PHP-CS-Fixer with PSR2 and Symfony standards (much extra checks, closer to Laravel than PSR2).
- Writing unit tests and feature tests to ensure functionality better.
- I have used the repository design pattern for this API development. We can use the Laravel manager/builder design pattern based on requirement.

