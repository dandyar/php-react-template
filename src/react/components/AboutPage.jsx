import React from 'react';

const AboutPage = ({ data }) => {
    return (
        <main>
            <div className="container">
                <div className="card">
                    <h1>About {data.company_name}</h1>
                    <p>{data.description}</p>
                    
                    <div style={{ marginTop: '2rem' }}>
                        <h3>Our Team</h3>
                        <p>We have {data.team_size} talented individuals working together to create amazing experiences.</p>
                    </div>
                    
                    <div style={{ marginTop: '2rem' }}>
                        <a href="/contact" className="btn">Get In Touch</a>
                    </div>
                </div>
            </div>
        </main>
    );
};

export default AboutPage;