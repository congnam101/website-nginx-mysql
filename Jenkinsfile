pipeline {
    agent any

    stages {
        stage('Build & Deploy') {
            steps {
                // Xóa container cũ nếu còn tồn tại
                sh '''
                    docker rm -f web_app || true
                    docker rm -f mysql_db || true
                '''

                // Tắt toàn bộ stack nếu đang chạy
                sh 'docker-compose down || true'

                // Build lại images
                sh 'docker-compose build'

                // Khởi động lại các service
                sh 'docker-compose up -d'
            }
        }

        stage('Check Site') {
            steps {
                // Kiểm tra trang chính có phản hồi HTTP không
                sh 'curl -I http://localhost || true'
            }
        }
    }
}
