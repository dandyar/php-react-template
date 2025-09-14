# Stage 1: Build the React application
FROM node:18-alpine AS build
WORKDIR /app

# Copy package files and install dependencies
COPY package.json webpack.config.js ./
RUN npm install

# Copy source code
COPY src/react ./src/react
COPY public ./public

# Build the application
RUN npm run build

# Stage 2: Setup the PHP production environment
FROM php:8.2-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy PHP source code
COPY src/php ./src/php

# Copy the entire public directory from the build stage, which now contains the built assets
COPY --from=build /app/public /var/www/html/
