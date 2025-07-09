pipeline {
    agent any

    stages {
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
