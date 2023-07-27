# [OriginCompany  - HR system](https://github.com/andrei-deeyu/OriginCompany)
#### A small RESTful API that allows you to manage companies, their employees, and associated projects.
- read [FreightCentralized](https://github.com/andrei-deeyu/FreightCentralized) to see a more complex project.
## [Get started](https://github.com/andrei-deeyu/OriginCompany#get-started)

### 1. Import packages & create the vendor folder, along with the autoload script.
```
composer install
```

### 2. Create .env file
Copy the text from `.env.example` and place it in the newly created .env file

### 2. Migrate & seed the database
```
php artisan migrate --seed
```

### 3. Run Docker
```
docker-compose up
```

## [API Routes](https://github.com/andrei-deeyu/OriginCompany#api-routes)
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
