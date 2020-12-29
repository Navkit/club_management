# Sports organization management system App

This is a Sports organization management system app with multiple user support.

This is built on Laravel Framework 7.0.

This application Used Laravel to build a management system that held over 10,000 users.

## Installation

Clone the repository-
```
git clone https://github.com/Ahmed-Mansour-Hallaba/sport-club.git
```

Then cd into the folder with this command-
```
cd sport-club
```

Then do a composer install
```
composer install
```

Then create a environment file using this command-
```
cp .env.example .env
```

Then edit `.env` file with appropriate credential for your database server. Just edit these two parameter(`DB_USERNAME`, `DB_PASSWORD`).

Then create a database named `calendar` and then do a database migration using this command-
```
php artisan migrate --seed
```

Then change permission of storage folder using thins command-
```
(sudo) chmod 777 -R storage
```

At last generate application key, which will be used for password hashing, session and cookie encryption etc.
```
php artisan key:generate
```

## Run server

Run server using this command-
```
php artisan serve
```

Then go to `http://localhost:8000` from your browser and see the app.

## Login with admin account
```
UserName: ahmed
Password: 123
```

## Ask a question?

If you have any query please contact at am00767@gmail.com
