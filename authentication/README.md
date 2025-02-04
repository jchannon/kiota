# Welcome to the Kiota Authentication section

The Kiota Authentication libraries are language specific libraries implementing the authentication interfaces Kiota projects need once an SDK has been generated from an OpenAPI definition to authenticate before calling the API.
Your project will need a reference to the abstraction package to build and run, the following languages are currently supported:

- [Dotnet](./dotnet/azure): relies on [Azure identity](https://www.nuget.org/packages/Azure.Identity).
- [Go](./go/azure): relies on [Azure identity](https://pkg.go.dev/github.com/Azure/azure-sdk-for-go/sdk/azidentity)
- [Java](./java/azure) : relies on [Azure identity](https://docs.microsoft.com/en-us/java/api/overview/azure/identity-readme?view=azure-java-stable).
- [TypeScript](./typescript/azure) : relies on [Azure identity](https://www.npmjs.com/package/@azure/identity).
