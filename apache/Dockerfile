FROM httpd:2.4-alpine

RUN touch /tmp/merged.conf; \
    cat /usr/local/apache2/conf/original/httpd.conf > /tmp/merged.conf; \
    echo "Include /usr/local/apache2/conf.d/tourradar.local.conf" >> /tmp/merged.conf; \
    mv /tmp/merged.conf /usr/local/apache2/conf/httpd.conf;