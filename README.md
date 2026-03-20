<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Employee Management System

Project Description
This project is a modified version of a Student Management System developed using the Laravel framework. It has been transformed into an Employee Management System that allows users to manage employee records efficiently.

The system supports basic CRUD operations, including adding, viewing, updating, and deleting employee information.

## Database Fields

- id – Primary key (auto-increment)
- employee_id – Unique identifier for each employee
- name – Full name of the employee
- department – Employee's assigned department (e.g., Human Resources, Finance & Accounting, Marketing & Sales, Information Technology, Research & Development)
- phone_number – Employee contact number
- created_at – Timestamp for record creation
- updated_at – Timestamp for last update


## CRUD operations

- Create

<img width="1360" height="675" alt="Screenshot 2026-03-20 221202" src="https://github.com/user-attachments/assets/b723cde7-06a4-461e-ace6-28f0f36cceca" />

- Read

<img width="1364" height="668" alt="Screenshot 2026-03-20 221241" src="https://github.com/user-attachments/assets/b80aaa4c-8745-4a4d-a57b-5a2dcf0ab155" />


- Update

<img width="1360" height="667" alt="Screenshot 2026-03-20 221351" src="https://github.com/user-attachments/assets/c0df1394-d40b-4b42-9000-6c4291f3c494" />
<img width="1337" height="668" alt="Screenshot 2026-03-20 221420" src="https://github.com/user-attachments/assets/0a7b880f-0118-4345-ac68-8e96c1f5dce0" />
<img width="1356" height="660" alt="Screenshot 2026-03-20 221444" src="https://github.com/user-attachments/assets/61ee879e-28b5-467c-89fe-3c7a72b01f8d" />

= Delete

<img width="1364" height="672" alt="Screenshot 2026-03-20 221513" src="https://github.com/user-attachments/assets/cb9ef7b6-253d-4f3c-8106-db85cda4609e" />
<img width="1334" height="672" alt="Screenshot 2026-03-20 221549" src="https://github.com/user-attachments/assets/34815e05-9e09-462f-bb46-824ce0f2e6c5" />


## How to Run
1. Clone the repository
2. Run `composer install`
3. Copy `.env.example` to `.env`
4. Run `php artisan key:generate`
5. Set up database
6. Run `php artisan migrate`
7. Run `php artisan serve`
