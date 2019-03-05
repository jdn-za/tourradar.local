FROM jenkins/jenkins:lts

USER root
RUN /usr/local/bin/install-plugins.sh configuration-as-code configuration-as-code-support job-dsl
RUN apt-get update && apt-get install python-pip -y && pip install elasticsearch-curator
USER jenkins

