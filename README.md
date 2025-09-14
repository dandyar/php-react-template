# PHP + React Multi-Page Application

A traditional multi-page application that combines PHP for server-side routing and React for frontend components.

## Architecture

- **PHP**: Handles routing, middleware, and serves HTML views
- **React**: Provides interactive components for each page
- **Docker**: Development environment with hot reload

## Project Structure

```
├── public/                 # Web root
│   ├── index.php          # Main entry point
│   └── assets/            # Static assets
├── src/
│   ├── php/               # PHP backend code
│   │   ├── Router.php     # Custom router
│   │   ├── Controllers/   # Page controllers
│   │   └── Views/         # HTML templates
│   └── react/             # React frontend code
│       ├── components/    # Reusable components
│       └── pages/         # Page-specific entry points
├── docker-compose.yml     # Docker configuration
└── webpack.config.js      # Build configuration
```

## Getting Started

1. **Clone and setup:**
   ```bash
   git clone <repository>
   cd php-react-multipage
   ```

2. **Start development environment:**
   ```bash
   docker-compose up --build
   ```

3. **Access the application:**
   - Visit http://localhost:8080

## How It Works

1. **Request Flow:**
   - Browser requests a route (e.g., `/about`)
   - PHP Router handles the request
   - Controller processes the request and prepares data
   - PHP renders HTML template with React mount point
   - Browser loads page-specific React bundle
   - React components render with data from PHP

2. **Hot Reload:**
   - Webpack watches for changes in React components
   - PHP files are watched by Docker volume mounts
   - Changes trigger automatic rebuilds and browser refresh

## Development

- **PHP files**: Located in `src/php/` - changes are reflected immediately
- **React files**: Located in `src/react/` - automatically rebuilt by Webpack
- **Styles**: Global styles in `public/assets/css/app.css`
- **Static assets**: Place in `public/assets/`

## Adding New Pages

1. Create a new controller in `src/php/Controllers/`
2. Create a view template in `src/php/Views/`
3. Create React components in `src/react/components/`
4. Create page entry point in `src/react/pages/`
5. Add webpack entry point in `webpack.config.js`
6. Register route in `public/index.php`

## Docker Services

- **php**: Apache + PHP 8.2 server on port 8080
- **node**: Node.js for building React components with webpack

## Features

- ✅ Server-side routing with PHP
- ✅ React components with hot reload
- ✅ Data passing from PHP to React
- ✅ Docker development environment
- ✅ Asset bundling with Webpack