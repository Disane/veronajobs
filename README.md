# Veronajobs Website

This is the official website for **Veronajobs**, a premium recruitment agency operating in Hungary and Slovakia. The website showcases the company's services, values, and contact information in a modern, responsive design.

## Features

-   **Bilingual Support**: Full support for **Slovak (SK)** and **Hungarian (HU)** languages, with a persistent language switcher in the navigation bar.
-   **Responsive Design**: Fully responsive layout that works seamlessly on desktops, tablets, and mobile devices.
-   **Modern UI**: A premium dark-themed design with gold accents, smooth animations, and a professional look.
-   **Dynamic Content**: Text content is dynamically updated based on the selected language using JavaScript.
-   **Contact Section**: Includes a contact form and detailed company information (Address, IČO).

## Project Structure

-   `index.html`: The main HTML structure of the website.
-   `style.css`: Contains all the styling, variables, and responsive rules.
-   `script.js`: Handles the language switching logic, mobile menu toggling, and other interactive elements.
-   `images/`: Directory containing image assets (e.g., `logo.png`).

## How to Run

Since this is a static website built with HTML, CSS, and JavaScript, you don't need a complex backend setup to run it.

### Option 1: Open directly in Browser
Simply double-click the `index.html` file to open it in your default web browser.

### Option 2: Use a Local Server (Recommended)
For the best experience (especially to avoid CORS issues with some local file operations), it's recommended to use a simple local HTTP server.

**Using Python:**
If you have Python installed, run the following command in the project directory:
```bash
python3 -m http.server
```
Then open `http://localhost:8000` in your browser.

**Using Node.js (npx):**
If you have Node.js installed, you can use `serve`:
```bash
npx serve .
```

## Customization

### Changing Text / Adding Languages
All translatable text is stored in the `translations` object within `script.js`. To modify text or add a new language:
1.  Open `script.js`.
2.  Locate the `translations` object.
3.  Edit the existing strings or add a new language key (e.g., `en`) with the corresponding translations.
4.  If adding a language, remember to add a button in the `index.html` navbar.

### Updating Company Details
Company details (Address, IČO) are also managed via the translation system in `script.js` under the keys `company_address`, `company_ico`, etc.
