pipeline {
    agent any 
    stages {
        stage('Build') { 
            steps {
                sh 'composer install'
            }
        }

         stage('Test') { 
            steps {
                sh 'touch database/database.sqlite'
                sh 'php artisan migrate --env=testing'
                sh 'php artisan key:generate --env=testing'
                sh 'php artisan test'
            }
        }
       
        stage('Deploy') { 

            steps{
                sh 'ssh -o StrictHostKeyChecking=no logic@3.238.251.148 "bash var/www/logic/scripts/deploy.sh"'
            }
           
        }
        
    }
}