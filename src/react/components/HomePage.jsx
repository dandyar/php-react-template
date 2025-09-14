import React from 'react';

const HomePage = ({ data }) => {
    return (
        <main>
            <div className="container">
                <div className="card">
                    <h1>{data.welcome_message}</h1>
                    <p>This application demonstrates the integration of PHP routing with React components.</p>
                    
                    <h3>Features:</h3>
                    <ul>
                        {data.features.map((feature, index) => (
                            <li key={index}>{feature}</li>
                        ))}
                    </ul>
                    
                    <div style={{ marginTop: '2rem' }}>
                        <a href="/about" className="btn">Learn more about this project template</a>
                    </div>
                </div>
            </div>
        </main>
    );
};

export default HomePage;