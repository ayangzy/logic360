pipeline {
    agent any 
    stages {
        stage('Build') { 
            steps {
                sh 'composer install'
            }
        }

       
        stage('Deploy') { 

            steps{
                sh 'ssh -o StrictHostKeyChecking=no logic@3.238.251.148 "bash /var/www/logic/scripts/deploy.sh"'
            }
           
            //  steps {
            //     sh 'ssh -o StrictHostKeyChecking=no logic@3.238.251.148 "cd var/www/logic; \
            //     git pull origin master; \
            //     composer install --optimize-autoloader --no-dev; \
            //     php artisan migrate --force --seed; \
            //     php artisan config:clear; \
            //     php artisan cache:clear; \
            //     php artisan optimize:clear; \
            //     composer dump-autoload; \"'
            // }
        }
        
    }
}