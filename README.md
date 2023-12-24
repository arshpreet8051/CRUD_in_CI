# CRUD Operations in CodeIgniter

<img src="https://github.com/arshpreet8051/CRUD_in_CI/assets/99662930/3e367e9a-e677-4dc3-9adf-f01dbba42d8c" alt="image" width="550"/>

In the context of CodeIgniter, a PHP web application framework, CRUD operations are fundamental for database interactions.

**Create**: Inserting a new user into the 'users' table.

**Read**: Retrieving all products from the 'products' table.

**Update**: Updating the status of an order in the 'orders' table.

**Delete**: Deleting a comment from the 'comments' table.

CodeIgniter's database library provides convenient methods for performing these operations, simplifying the implementation of CRUD functionality in web applications.

## Special Features ⭐
This CodeIgniter project showcases several key features:
- **🙋🏻‍♂️User Creation/SignUp:** Allowing users to create accounts on the platform.
- **🟢User Authentication/Login:** Secure authentication system for registered users.
- **🧑🏻‍💻Admin Interface:** Providing administrators with a dedicated interface for managing the system.
- **🪵Log Table:** A detailed log table to keep track of important activities within the application.

# Project Flow and Explanation
The following steps provide a comprehensive explanation of the entire project.

## Step 1: User Signup


<img src="https://github.com/arshpreet8051/CRUD_in_CI/assets/99662930/089fdf58-3a51-423f-81d6-768b18b02a90" alt="User SignUp" width="500"/>

This step illustrates the user registration process, allowing individuals to sign up for an account on the platform.

## Step 2: User Login


<img src="https://github.com/arshpreet8051/CRUD_in_CI/assets/99662930/01d704e2-4476-45fa-93cc-06d90d0c482c" alt="User LogIn" width="500"/>

Users can securely log into their accounts, verifying their identity through the authentication system.

## Step 3: Create


<img src="https://github.com/arshpreet8051/CRUD_in_CI/assets/99662930/b03ea976-28a7-49f9-97a0-0b3de10d6b1a" alt="Create Operation" width="900"/>

This step demonstrates the creation of new records or entries within the application.

## Step 4: Read
![Read Operation](https://github.com/arshpreet8051/CRUD_in_CI/assets/99662930/81552e15-e771-4f03-9004-638c8e967fa6)
Users can retrieve and view information stored in the system in this read operation.

## Step 5: Update and Delete


<img src="https://github.com/arshpreet8051/CRUD_in_CI/assets/99662930/2240c502-3f0d-4a1b-92e6-2bebc531e3ae" alt="Create Operation" width="550"/>

This step covers updating existing records and deleting unnecessary entries.

## Step 6: Admin Interface
<img src="https://github.com/arshpreet8051/CRUD_in_CI/assets/99662930/1d98f71a-1b78-4d89-9a6d-6ff621c106d9" alt="Admin Interface" width="550"/>

Administrators have access to a specialized interface for managing and overseeing the entire application.

## Step 7: Log Table
<img src="https://github.com/arshpreet8051/CRUD_in_CI/assets/99662930/ffcfb08c-c36a-4a86-975a-936e02cc34a9" alt="Log Table" width="550"/>

This step showcases a log table, providing a detailed record of activities and changes within the system. The highlighted values are updated values.

# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds the distributable version of the framework.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

The user guide corresponding to the latest version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
