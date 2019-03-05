# tourradar.local

## Asumptions
- I have built and tested this on OSX, 
- Docker engine 18.09 
- docker-compose version 1.23.2
- tee is installed

## Firing it up:


```
echo '127.0.0.1 tourradar.loc' | sudo tee -a /etc/hosts

docker-compose up --build
```

## Jenkins:

Jenkins has been configured using https://github.com/jenkinsci/configuration-as-code-plugin and can be reached via http://localhost:8080

```
user: admin
password: tourradar
```

A single https://github.com/jenkinsci/job-dsl-plugin job has been configured to perform elasticsearch garabge colelction every day, removing indices older than 30 days.



## Kibana

Kibana dashboard is under http://localhost:5601


