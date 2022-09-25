2. In microservice, how will different services exchange data

Answer: One database instance can be shared between the services, but each service only used data from tables it owned. 
Any data from another service will be requested using REST. Services can also communicate with each other via third party service
Like RabbitMq with Events and Jobs in laravel
