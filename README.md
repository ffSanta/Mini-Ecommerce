<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Mini-Ecommerce
โปรเจคอยู่ระหว่างพัฒนา 70 % 
- ระบบจัดการคำสั่งซื้อ (Orders) ซึ่งอยู่ระหว่างการออกแบบและปรับโครงสร้างฐานข้อมูล
- การปรับปรุงประสิทธิภาพของระบบเมื่อมีข้อมูลในฐานข้อมูลมากขึ้น

## Overview
ระบบเว็บ e-commerce ขนาดเล็ก พัฒนาด้วย Laravel และ Blade รองรับระบบสิทธิ์ผู้ใช้และการเข้าถึงแบบ Role-based (Authentication / Authorization ) โดยใช้ตัว Gate ซึ่งในโปรเจคนี้จะเน้นไปทางการใช้ feature ของ Laravel เป็นหลัก
ระบบฐานข้อมูลมีการทำเป็น Relational Database มีการจัดหน้าด้วย layout components และใช้ DaisyUI, Tailwind CSS UI ซึ่งทั้งคู่ได้ปรับแต่งด้วย Tailwind CSS อีกที

## Database Design
ฐานข้อมูลถูกออกแบบโดยใช้ความสัมพันธ์แบบ Relational เพื่อรองรับการจัดการข้อมูลอย่างเป็นระบบ

- ความสัมพันธ์ระหว่าง User และ Product เป็นแบบ One-to-Many  
- ความสัมพันธ์ระหว่าง Product และ Category เป็นแบบ Many-to-One  
  
## Features
- ระบบสมัครสมาชิก / เข้าสู่ระบบ (Login / Register)
- การกำหนดสิทธิ์และให้สิทธิ์การเข้าถึง (Guest, User, Admin)
- จัดสินค้าและหมวดหมู่
- Guest สามารถดูสินค้าที่ User,Admin สร้างขึ้นได้
- User สามารถ(เพิ่ม แก้ไข ลบ )สินค้าลงตามหมวดหมู่ที่เลือก(อัพโหลดภาพได้) และจะไม่เห็นสินค้าของคนอื่นในหน้าหมวดหมู่ ไม่สามารถปรับแต่งหรือลบสินค้าของ admin และ user คนอื่นได้
- Admin สามารถ( เพิ่ม แก้ไข ลบ )สินค้าของUserได้ และสร้างหมวดหมู่ได้ มีสิทธิ์เหมือน User

## Tech Stack
- Laravel, Blade
- Postgresql
- Tailwind / DaisyUI

## Demo
https://mini-ecommerce-production-bc09.up.railway.app/products

## Demo Account
User:
- Email: test@gmail.com
- Password: test123

Admin:
- Email: admin@gmail.com
- Password: admin123

## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
