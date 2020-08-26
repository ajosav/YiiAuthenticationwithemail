# Hospital Management System

## Project Description
This application  is my first attempt to write a web application using the Yii framework, this is just a simple authentication with email verification 

### Cloning the GitHub Repository.
Clone the repository to your local machine by running the terminal command below.

```bash
git clone https://github.com/ajosav/YiiAuthenticationwithemail.git
```
### Setup Database
Create your a MySQL database with the name yii-basicauth

### Setup The mailer
    'transport' => [
        'class' => 'Swift_SmtpTransport',
        'host' => 'your-host-domain e.g. smtp.gmail.com',
        'username' => 'your-email-or-username',
        'password' => 'your-password',
        'port' => '587',
        'encryption' => 'tls',
    ],

### Install Composer Dependencies
Navigate to the project root directory via terminal and run the following command.
```bash
composer install
```

### Migrate the database
```bash
php yii migrate/up --migrationPath=@vendor/dektrium/yii2-user/migrations
```

### Raun the project
```bash
php yii ser
```
### License
[MIT](https://choosealicense.com/licenses/mit/)