# IU-Housing-System

A comprehensive web-based student housing management system developed for the **Islamic University of Madinah**, designed to transition traditional paper-based dormitory operations into a smart, digital, and efficient platform.

> **Note:** This is a graduation project developed by Information Technology students to streamline student housing services, room bookings, maintenance, and administrative management.

---

## Overview

The current manual housing system faces challenges such as lost paper documents, lack of priority criteria for students in need, and delayed processing. The **IU-Housing-System** solves these issues by offering:
* **Student Portal:** Digital account registration, real-time room availability checking, online bookings, contract printing, and automated regional priority validation.
* **Admin Dashboard:** Centralized control panel for administrators to manage student requests, residential units, maintenance tickets, and complaints with status tracking.
* **Intelligent Support:** Integrated AI chatbot (powered by Chatbase) to instantly answer student inquiries regarding prices, rules, and system usage.

---

## How it works

The system operates on a client-server architecture tailored for academic campus deployment:
* **Frontend:** Built using HTML5, CSS3, and JavaScript to deliver responsive, intuitive interfaces for students and administrators.
* **Backend & Processing:** PHP handles request routing, session security, input validation, and database operations.
* **Data Storage:** MySQL via phpMyAdmin manages relational records including user profiles, room allocations, contracts, maintenance tickets, and complaints.

---

## Features

* **Smart Priority Calculation:** Automatically checks the student's registered region against Medina to determine eligibility and prioritize remote applicants.
* **Room Booking & Management:** Real-time availability tracking to prevent double-booking and ensure smooth allocation.
* **Maintenance & Complaints Workflows:** Students can submit issue tickets with image attachments, while admins manage status updates (`empty`, `accept`, `not accept`, `The operation is complete`).
* **Digital Contracts & Payments:** Generates electronic lease agreements with QR codes and supports multiple payment methods (including social security/pension documentation uploads)[cite: 1].

---

## Security Model

* **Password Hashing:** Passwords are securely stored using PHP's `password_hash()` and verified using `password_verify()` rather than plain text[cite: 1].
* **Input Sanitization:** Uses `mysqli_real_escape_string()` to filter user inputs and mitigate SQL injection risks[cite: 1].
* **Session Control:** Implements `session_start()` and authentication checks (`isset($_POST['username'])`) to restrict unauthorized access to protected dashboard routes[cite: 1].

---

## Repository layout

```text
IU-Housing-System/
├── css/                  # Stylesheets and visual design assets
├── database/             # MySQL database dump (.sql file)
├── images/               # UI graphics and asset images
├── admin_dashboard.php   # Administrative control interface
├── booking.php           # Room booking management page
├── login.php             # User authentication entry
├── README.md             # Project documentation
└── END_IU_Housing_System.pdf # Full project analysis and documentation (74 pages)[cite: 1]
