# Switchboard API Client Libraries
A collection of libraries for the Softheon Switchboard API. Client libraries are available in the following languages:
* [C#](https://github.com/Softheon/Switchboard-API-Client-Libraries/tree/master/CSharp)
* [Go](https://github.com/Softheon/Switchboard-API-Client-Libraries/tree/master/Go)
* [Java](https://github.com/Softheon/Switchboard-API-Client-Libraries/tree/master/Java)
* [Node.js](https://github.com/Softheon/Switchboard-API-Client-Libraries/tree/master/NodeJS)
* [TypeScript](https://github.com/Softheon/Switchboard-API-Client-Libraries/tree/master/TypeScript)
* [Python](https://github.com/Softheon/Switchboard-API-Client-Libraries/tree/master/Python)
* [Ruby](https://github.com/Softheon/Switchboard-API-Client-Libraries/tree/master/Ruby)
* [PHP](https://github.com/Softheon/Switchboard-API-Client-Libraries/tree/master/PHP)

## Overview
Client libraries are generated using the [AutoRest](https://github.com/Azure/autorest) open-source REST API client generation tool.  The
input to AutoRest is a spec file that describes the Softheon Switchboard API using the [OpenAPI Specification](https://github.com/OAI/OpenAPI-Specification).
[Swashbuckle](https://github.com/domaindrivendev/Swashbuckle.AspNetCore) was used for spec file generation.

## Getting Started
The client libraries for each language includes all request and response models used by the Softheon Switchboard API, as well as methods covering all types
of interactions supported by the Softheon Switchboard API.  To get started using the client libraries, create an application using your IDE of choice. Then import the files located in the folder for your selected languge into your application.

### C# Client Example
For an example on how to use a C# generated client, please refer to the [AutoRest C# client documentation](https://github.com/Azure/autorest/tree/master/docs/client).

### Client Runtimes
Some languages requrie additional client runtimes in order to use these libraries. Information on required client runtimes can be found in the 
[AutoRest client runtime documentation](https://github.com/Azure/autorest/blob/master/docs/developer/architecture/Autorest-and-Clientruntimes.md).
