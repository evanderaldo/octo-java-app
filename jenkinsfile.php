pipeline {
    agent any

    stages {
        stage('Git Code Checkout') {
            steps {
                
                script{
                  
                  'git 'https://github.com/evanderaldo/webapp-project''
                } 
            }
        }
        stage('Code Build') {
            steps {
                echo 'This is the Build Stage'
            }
        }   
        stage('Code Test') {
            steps {
                echo 'This is the Test Stage'
            }
        }
        stage('Build docker image') {
            steps {
                echo 'This is the Docker Build Stage'
            }
        }
        stage('Push image to Hub') {
            steps {
                echo 'This is the Docker Hub Environment'
            }
        }
        stage('Deploy to k8s') {
            steps {
                echo 'This is the Kubernetes Deployment Stage'
            }
        }
    }
}

