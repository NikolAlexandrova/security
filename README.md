# Global Security Website

## 📌 Project Overview
The **GlobalSecurity** website is a professional platform designed for a security company specializing in **physical security, IT security, data protection, risk analysis, security training, and surveillance**. The website provides detailed insights into the company's services, allowing potential clients to explore security solutions tailored to their needs.

## 🏗️ Features

### 🏢 **Company Information**
- Home Page: Overview of **GlobalSecurity**, its mission, and expertise.
- About Page: Background on the company, its values, and team.

### 🛡️ **Services Offered**
Each service has its **dedicated page**:
- **IT Security** – Protecting digital assets and cybersecurity strategies.
- **Data Protection** – Securing sensitive information and preventing breaches.
- **Risk Analysis** – Evaluating security risks and mitigation strategies.
- **Physical Security** – Providing personnel and infrastructure protection.
- **Security Training** – Specialized training programs for security professionals.
- **Surveillance** – Advanced surveillance systems and monitoring.

### 📞 **Contact Page**
- Clients can reach out via a **contact form** for inquiries or service requests.

### 🏆 **User Engagement Features**
- **FAQ Page** – Commonly asked questions and answers.
- **Scrolling Partner Logos** – Showcasing trusted partners and affiliations.

### 📱 **Responsive & Interactive Design**
- Built using **Tailwind CSS** for a modern, mobile-friendly interface.
- **Parallax effects** and animations for a dynamic user experience.

## 🛠️ Tech Stack
- **Frontend**: HTML, Tailwind CSS, JavaScript
- **Backend**: Laravel (PHP Framework)
- **Database**: MySQL
- **Server**: Apache (MAMP for local development)

## 🚀 Installation Guide

1. **Clone the Repository**
   ```bash
   git clone https://github.com/yourusername/security.git
   cd security
2. **Install Dependencies**
   ```bash
   composer install
   npm install
3. **Set Up Environment**
   ```bash
   cp .env.example .env
   Update the .env file with your database credentials:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=8889
   DB_DATABASE=globalsecurity
   DB_USERNAME=root
   DB_PASSWORD=root
4. **Generate Application Key**
   ```bash
   php artisan key:generate
5. **Run Database Migrations**
   ```bash
   php artisan migrate --seed
6. **Start the Development Server**
   ```bash
   php artisan serve
