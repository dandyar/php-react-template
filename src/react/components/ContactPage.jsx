import React, { useState } from 'react';

const ContactPage = ({ data }) => {
    const [formData, setFormData] = useState({
        name: '',
        email: '',
        message: ''
    });

    const handleChange = (e) => {
        setFormData({
            ...formData,
            [e.target.name]: e.target.value
        });
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        alert('Form submitted! (This is just a demo)');
        console.log('Form data:', formData);
    };

    return (
        <main>
            <div className="container">
                <div className="card">
                    <h1>Contact Us</h1>
                    
                    <div style={{ display: 'grid', gridTemplateColumns: '1fr 1fr', gap: '2rem', marginTop: '2rem' }}>
                        <div>
                            <h3>Get In Touch</h3>
                            <p><strong>Email:</strong> {data.email}</p>
                            <p><strong>Phone:</strong> {data.phone}</p>
                            <p><strong>Address:</strong> {data.address}</p>
                        </div>
                        
                        <form onSubmit={handleSubmit}>
                            <div style={{ marginBottom: '1rem' }}>
                                <label>Name:</label>
                                <input
                                    type="text"
                                    name="name"
                                    value={formData.name}
                                    onChange={handleChange}
                                    style={{ width: '100%', padding: '0.5rem', marginTop: '0.25rem' }}
                                    required
                                />
                            </div>
                            
                            <div style={{ marginBottom: '1rem' }}>
                                <label>Email:</label>
                                <input
                                    type="email"
                                    name="email"
                                    value={formData.email}
                                    onChange={handleChange}
                                    style={{ width: '100%', padding: '0.5rem', marginTop: '0.25rem' }}
                                    required
                                />
                            </div>
                            
                            <div style={{ marginBottom: '1rem' }}>
                                <label>Message:</label>
                                <textarea
                                    name="message"
                                    value={formData.message}
                                    onChange={handleChange}
                                    rows="4"
                                    style={{ width: '100%', padding: '0.5rem', marginTop: '0.25rem' }}
                                    required
                                ></textarea>
                            </div>
                            
                            <button type="submit" className="btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    );
};

export default ContactPage;