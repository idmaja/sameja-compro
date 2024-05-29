# SAMEJA EATERY - Company Profile and Admin Dashboard

Welcome to the GitHub repository for SAMEJA EATERY, a renowned restaurant located in Salatiga. This repository contains the source code and documentation for our two main web applications: the Company Profile website and the Admin Dashboard.

## Table of Contents
- [Introduction](#introduction)
- [Company Profile Website](#company-profile-website)
- [Admin Dashboard](#admin-dashboard)
- [User Manual](#user-manual)
  - [Admin Login](#admin-login)
  - [Managing Menu](#managing-menu)
  - [Managing Promo](#managing-promo)
  - [Managing Venue](#managing-venue)
- [Setup and Installation](#setup-and-installation)
  - [Database Setup](#database-setup)
- [Contributing](#contributing)
- [License](#license)

## Introduction
SAMEJA EATERY is a cozy and welcoming restaurant in Salatiga, offering a variety of delicious dishes and a comfortable dining experience. Our web applications aim to provide information about our menu, promotions, and venue, as well as an administrative interface to manage this information efficiently.

## Company Profile Website
The Company Profile website is the public-facing site that allows visitors to explore our menu, check out our latest promotions, and learn more about our venue. This website is accessible to all users without requiring a login.

### Features
- **Menu:** Display a list of available dishes along with descriptions and prices.
- **Promo:** Showcase current promotions and special offers.
- **Venue:** Provide details about the restaurant’s location, ambiance, and facilities.

## Admin Dashboard
The Admin Dashboard is a restricted area accessible only to authorized personnel. It allows the management team to update and maintain the information displayed on the Company Profile website.

### Features
- **Login Authentication:** Secure login system for admin users.
- **Menu Management:** Add, edit, and delete menu items.
- **Promo Management:** Create, update, and remove promotional offers.
- **Venue Management:** Update information about the restaurant’s venue and facilities.

## User Manual

### Admin Login
To access the Admin Dashboard, follow these steps:
1. Navigate to the Admin Dashboard login page.
2. Enter your admin credentials (username and password).
3. Click on the "Login" button.

### Managing Menu
1. After logging in, go to the "Menu" section.
2. To add a new dish, click on the "Add Menu Item" button, fill in the required details, and save.
3. To edit an existing dish, click on the "Edit" button next to the dish, update the information, and save.
4. To delete a dish, click on the "Delete" button next to the dish and confirm the deletion.

### Managing Promo
1. Navigate to the "Promo" section.
2. To add a new promotion, click on the "Add Promo" button, fill in the required details, and save.
3. To edit an existing promotion, click on the "Edit" button next to the promotion, update the information, and save.
4. To delete a promotion, click on the "Delete" button next to the promotion and confirm the deletion.

### Managing Venue
1. Navigate to the "Venue" section.
2. Update the information about the restaurant’s location, ambiance, and facilities.
3. Click on the "Save" button to apply the changes.

## Setup and Installation
To set up the project locally, follow these steps:

1. **Clone the repository:**
   ```sh
   git clone https://github.com/username/sameja-eatery.git
   cd sameja-eatery
   ```

2. **Install dependencies:**
   ```sh
   composer install
   npm install
   ```

3. **Set up environment variables:**
   Create a `.env` file in the root directory and add the necessary environment variables. Use the `.env.example` file as a reference.

4. **Database Setup:**
   Our original database was lost and corrupted. You will need to create a new database using the Laravel migrations provided.
   - Create a new MySQL database.
   - Update your `.env` file with the database credentials.
   - Run the migrations to set up the database schema:
     ```sh
     php artisan migrate
     ```
   - (Optional) Seed the database with initial data:
     ```sh
     php artisan db:seed
     ```

5. **Run the application:**
   ```sh
   php artisan serve
   ```

## Contributing
We welcome contributions from the community! To contribute, please follow these steps:

1. Fork the repository.
2. Create a new branch.
3. Make your changes.
4. Submit a pull request.

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

---

Thank you for visiting SAMEJA EATERY's GitHub repository! We hope you enjoy exploring our applications. For any questions or feedback, please contact us at [E-MAIL](mailto:dhimasm999@gmail.com).
