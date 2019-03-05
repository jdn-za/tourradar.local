# tourradar.local

## Assumptions
- I have built and tested this on OSX 10.14.3
- Docker engine 18.09 
- docker-compose version 1.23.2
- tee is installed

## Firing it up:


```
echo '127.0.0.1 tourradar.local' | sudo tee -a /etc/hosts (not absolutely necessary, just looked nicer [apache ServerName is set tourradar.local])

docker-compose up --build
```

Services:
 - Nginx load balancer
 - Apache HTTP
 - PHP-FPM
 - Redis
 - Elasticsearch
 - Logstash
 - Kibana
 - Jenkins
 - Filebeat
 

## Jenkins:

Jenkins has been configured using https://github.com/jenkinsci/configuration-as-code-plugin and can be reached via http://tourradar.local:8080

```
user: admin
password: tourradar
```

A single https://github.com/jenkinsci/job-dsl-plugin job has been configured to perform elasticsearch garbage collection every day, removing indices older than 30 days.



## Kibana

Kibana dashboard is under http://tourradar.local:5601

- Kibana is not as yet fully configured as I ran out of time, the default index using `logstash-*` with timestamp `@timestamp` needs to be set

## Logs

Currently logs are pushed into logstash using filebeat, whilst functional the i/o overhead when compared to doing so with syslog over udp directly to logstash is less than ideal. This again was a result of running out of time.
