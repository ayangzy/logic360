
## Overview 

Logic360 is a project written with PHP Laravel Framework which is indended for comparing prices of different commodities accross different local markets.

## Installation & Usage
<hr/>

### Downloading the Project

This framework requires PHP 8.0 and mysql database
.  
You can simply clone  ``logic360`` like below on your git bash

```bash
git clone https://github.com/ayangzy/logic360
```

After cloning the project, please run this command on the project directory
```
composer install
```
### Configure Environment
To run the application you must configure the ```.env``` environment file with your database details. Use the following commmand to create .env file. 
```
cp .env.example .env

```

Once you run the above command please configure your database in the .env file. You can check the default .env.example if you want to manually create the .env file

The application uses cloudinary for products upload, kindly ensure you add your cloudinary key to the application .env file

```
CLOUDINARY_URL=xxxxxxxxxxx
```

 Run the following command at this stage to run database migrations
```
php artisan migrate
```

## Seeding DB
Once your database is correctly set up, you can seed your database by running
```
php artisan db:seed
```

### Note
Run ```php artisan serve```  on the project directory to start your application


For testing purpose, kindly navigate to ```http://127.0.0.1:8000/login``` <br> with the followwing credentials below <br>
```
Phone Number: 08100000000 
password: admin@123
```


## Security

If you discover any security related issues, please email felixdecoder2020@gmail.com instead of using the issue tracker.

## Credits

- [Ayange Felix](https://github.com/ayangzy)


