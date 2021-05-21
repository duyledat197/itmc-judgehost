FROM domjudge/domserver:7.3.0

COPY ./webapp/public /opt/domjudge/domserver/webapp/public
COPY ./webapp/templates /opt/domjudge/domserver/webapp/templates

CMD ["/scripts/start.sh"]
EXPOSE 80