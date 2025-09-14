const path = require('path');

module.exports = {
  entry: {
    home: './src/pages/home.jsx',
    about: './src/pages/about.jsx',
    contact: './src/pages/contact.jsx'
  },
  output: {
    path: path.resolve(__dirname, 'public/assets/js/bundle'),
    filename: '[name].bundle.js',
    clean: true
  },
  module: {
    rules: [
      {
        test: /\.(js|jsx)$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env', '@babel/preset-react']
          }
        }
      },
      {
        test: /\.css$/,
        use: ['style-loader', 'css-loader']
      }
    ]
  },
  resolve: {
    extensions: ['.js', '.jsx'],
    alias: {
      '@': path.resolve(__dirname, 'src')
    }
  },
  devtool: 'source-map',
  watch: true,
  watchOptions: {
    aggregateTimeout: 300,
    poll: 1000
  }
};