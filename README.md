# Graduation-project

Create APIs with Laravel 9.X for PT Lifestyle to customize a suitable diet for users based on their data, and the user can define some foods that need a diet generated with the help of AI.

## Getting Started

for user:
- Handle registration, login, and logout controllers. 
- user profile controller to get all user's data.
- Use SMTP to send an email to verify the user's email address.
- Respond to forgotten passwords and reset them by emailing the user an OTP code.
- Handle mail notifications when the user has registered or logged in.

For administrator: 
- Create a user crud to manage all users.
- Create a role crud to manage all roles in the system, such as admin, moderator, tester, etc.
- Create permissions crud to set roles's permissions in the system.

For the diet recommendation system:
- Validate the user's data that helps generate a suitable diet and store it in a database.
- Show the suitable diet after it is generated for the user.
- Handle storing the user's data when specifying which foods the diet should be based on, then show it for him.

### Tools

- Laravel 9.x.
- JWT.

### Installing

A step by step series of examples that tell you how to get a development
environment running

clone Repository in your local pc

    git clone https://github.com/Breksam/Graduation-project.git

run on your cmd or terminal

    composer install

copy .env.example file to .env on the root folder

    copy .env.example .env

then open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.

after that, set mail SMTP settings in .env file.

open the terminal in the project then:

run

    php artisan key:generate
run

    php artisan migrate
run

    php artisan db:seed
run

    php artisan serve

## Running the tests

Now you can test Routes at postman Platform.

### Sample Tests

All requests to test: https://github.com/Breksam/Graduation-project/blob/master/requests.txt

## Authors

  - **Breksam Hassan Elsokkary** - (https://github.com/Breksam)



