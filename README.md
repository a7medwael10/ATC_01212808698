# 🎟️ Event Booking System

A complete event booking system built with **Laravel 11** and **Blade**, allowing users to browse events, book and cancel reservations, and admins to manage events and view booking analytics.

---

## 🚀 Features

### 👤 User
- View list of upcoming events
- Book / Cancel event reservation using AJAX (with modals)
- Dynamic feedback with confirmation modals

### 🛠️ Admin
- Admin login and role-based access
- Add / Edit / Delete events
- Upload and preview event images
- View users who booked each event
- Dashboard analytics:
  - Total events
  - Total users
  - Total bookings


---

## 🧰 Tech Stack

- **Framework**: Laravel 11
- **Frontend**: Blade + Bootstrap 5
- **Database**: MySQL
- **Authentication**: Manual with role-based control
- **Modals**: Bootstrap 5

---

## ⚙️ Installation Steps

```bash
# 1. Clone the repo
git clone https://github.com/your-username/event-booking.git
cd event-booking

# 2. Install dependencies
composer install

# 3. Copy and set up .env
cp .env.example .env

# 4. Generate app key
php artisan key:generate

# 5. Set your DB credentials in .env, then run:
php artisan migrate --seed

# 6. Create storage link
php artisan storage:link

# 7. Serve the application
php artisan serve

# 8. For Admin Panal use: 
Email: admin@admin.com
Password: 12345678
