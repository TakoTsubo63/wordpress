job('install-apache') {
    scm {
        git {
            remote {
                url ('https://gitlab.com/Alex-tolch/apache.git')
                branch ('origin/main')
                credentials('github_ssh_key')
            }
        }
    }
    steps {
        ansiblePlaybook('main.yml') {
          disableHostKeyChecking(true)
          inventoryPath('host_apache')
          become(true)
          credentialsId('github_ssh_key')
          vaultCredentialsId('play_key')
        }
        
    }
    
}
job('install-postgres') {
    scm {
        git {
            remote {
                url ('https://gitlab.com/Alex-tolch/postgres.git')
                branch ('origin/main')
                credentials('github_ssh_key')
            }
        }
    }
    steps { 
      ansiblePlaybook('main.yml') {
        disableHostKeyChecking(true)
        inventoryPath('host_postgres')
        credentialsId('github_ssh_key')
        vaultCredentialsId('play_key')
      }
    }
}
queue('install-apache')
queue('install-postgres')

