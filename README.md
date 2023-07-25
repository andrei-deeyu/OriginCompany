# [OriginCompany  - HR system](#here)
#### A small web application that allows you to manage company projects and employees

## [Get started](#here)
### 1. Migrate & seed the database
```
php artisan migrate --seed
```

### 2. Run Docker
```
docker-compose up
```

## [API Routes](#here)
### 1. Public Routes
##### Auth
```
post    /register
@post   /login
```
##### Employees
```
@get    /employees
@get    /employees/{id}
@get    /employees/search/{name}
```

##### Projects
```
@get    /projects
@get    /projects/{id}
@get    /projects/search/{name}
```

##### Companies
```
@get    /companies
@get    /companies/{id}
@get    /companies/search/{name}
```

### 2. Protected routes
##### Auth
```
@post     /logout
```

##### Employees
```
@post     /employees
@put      /employees/{id}
@delete   /employees/{id}
```

##### Projects
```
@post     /projects'
@put      /projects/{id}'
@delete   /projects/{id}'
```

##### Companies
```
@post     /companies'
@put      /companies/{id}'
@delete   /companies/{id}'
```