FROM openjdk:17-alpine
ARG JAR_FILE=target/*.jar
COPY ${JAR_FILE} login.jar
EXPOSE 1000-1009
ENTRYPOINT ["java","-jar","login.jar"]

## sudo docker run -p 8080:8080 -t docker-spring-boot:1.0
## sudo docker run -p 80:8080 -t docker-spring-boot:1.0
## sudo docker run -p 443:8443 -t docker-spring-boot:1.0
## mvn package
## FROM adoptopenjdk/openjdk11:alpine-jre
