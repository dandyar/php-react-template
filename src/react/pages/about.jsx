import React from 'react';
import ReactDOM from 'react-dom/client';
import Header from '@/components/Header';
import Footer from '@/components/Footer';
import AboutPage from '@/components/AboutPage';

const App = () => {
    const data = window.appData || {};
    
    return (
        <>
            <Header />
            <AboutPage data={data} />
            <Footer />
        </>
    );
};

const root = ReactDOM.createRoot(document.getElementById('about-page'));
root.render(<App />);