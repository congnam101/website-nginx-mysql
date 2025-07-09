pipeline {
    agent any
    environment {
        DOCKER_BUILDKIT = 1
    }

   stage('Checkout') {
    steps {
        git branch: 'main', url: 'https://github.com/congnam101/website-nginx-mysql.git'
    }
}


        stage('Build & Deploy') {
            steps {
                sh 'docker-compose down || true'
                sh 'docker-compose build'
                sh 'docker-compose up -d'
            }
        }

        stage('Check Site') {
            steps {
                sh 'curl -I http://localhost'
            }
        }
    }
}
