import React from 'react';
import ReactDOM from 'react-dom/client';
import Header from '@/components/Header';
import Footer from '@/components/Footer';
import ContactPage from '@/components/ContactPage';

const App = () => {
    const data = window.appData || {};
    
    return (
        <>
            <Header />
            <ContactPage data={data} />
            <Footer />
        </>
    );
};

const root = ReactDOM.createRoot(document.getElementById('contact-page'));
root.render(<App />);