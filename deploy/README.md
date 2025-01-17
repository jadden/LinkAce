# LinkAce Helm Chart (BETA)

This Helm chart can be used to deploy LinkAce to your Kubernetes cluster. Please note that this chart deploys the
full application stack by default, including a MariaDB database and Redis for caching. It is possible to use an existing
database or Redis. Please see the values.yml file for details.

This Helm Chart is currently a beta version. Please give feedback if you are using it.


## Overview

The following resources will be created during the deployment of LinkAce:

- Deployment for LinkAce itself including
  - a Service
  - an Ingress
  - a Secret for the configuration and passwords
  - PersistentVolumeClaim for both logs and backups
  - a cronjob which runs every minute to properly execute scheduled commands
  - if autoscaling is enabled
    - a HorizontalPodAutoscaler for the LinkAce container
- if MariaDB and Redis
  - an additional Deployment including MariaDB and Redis
  - Services for both applications
  - PersistentVolumeClaim for both applications


## Requirements

- a working Kubernetes cluster
- `kubectl` installed and configured to access your cluster
- `helm` installed


## Deployment

### Prepare the environment variables

To be able to correctly use LinkAce you have to adjust some parts of the configuration **before** the deployment. 
Please open the `.env.k8s` file and do the following adjustments: 

- Please run `docker run --rm linkace/linkace php artisan key:generate --show` and set the output as the `APP_KEY` variable.
- Change the database password at `DB_PASSWORD` from the current value to something unique and secure.
- Change the redis password at `REDIS_PASSWORD` from the current value to something unique and secure.
- Configure sending emails from LinkAce by adjusting the settings starting with `MAIL`. 

LinkAce stores the configuration from the .env.k8s file as a Secret in Kubernetes, as there is sensible data which should
not be exposed as regular environment variables.

### Adjust the Kubernetes deployment configuration (optional)

You may change certain settings of the deployment such as the allowed resources, volume sizes or database version used.
Depending on the type of changes you want to do, you may either
- pass specific options directly to helm with
  ```
  helm upgrade linkace ./linkace --set database.volumeSize=2Gi
  ```
- or change the values directly in the `values.yml`.

> Please be advised that enabling autoscaling must NOT be turned on if you have either the database or redis enabled! 

### Deploy the application for the first time

```bash
cd deploy
helm install linkace ./linkace
```

To deploy LinkAce without a database and Redis, use this command:

```bash
helm install linkace ./linkace  --set database.enabled=false --set redis.enabled=false
```

### Update an existing LinkAce deployment

```bash
cd deploy
helm upgrade linkace ./linkace
```

### Remove an existing LinkAce deployment

```bash
cd deploy
helm uninstall linkace
```
