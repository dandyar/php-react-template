import React from 'react';
import ReactDOM from 'react-dom/client';
import Header from '@/components/Header';
import Footer from '@/components/Footer';
import HomePage from '@/components/HomePage';

const App = () => {
    const data = window.appData || {};
    
    return (
        <>
            <Header />
            <HomePage data={data} />
            <Footer />
        </>
    );
};

const root = ReactDOM.createRoot(document.getElementById('home-page'));
root.render(<App />);