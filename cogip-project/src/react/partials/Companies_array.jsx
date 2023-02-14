import React, { useState, useEffect } from "react";
import axios from 'axios';


const CompaniesTable = () => {
    const [companies, setCompanies] = useState([]);

    useEffect(() => {
        axios.get("http://localhost:8001/companies/5")
            .then(res => res.data)
            .then(data => setCompanies(data))
            .catch(err => console.error(err));
    }, []);

    return (
        <div className="array arrays__lastCompanies">
            <h2>Last companies</h2>
            <section className="overflowArray">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>TVA</th>
                            <th>Country</th>
                            <th>Type</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        {companies.map(company => (
                            <tr key={company.id}>
                                <td>{company.Name_company}</td>
                                <td>{company.tva}</td>
                                <td>{company.country}</td>
                                <td>{company.Name_type}</td>
                                <td>{new Date(company.create_dat).toLocaleDateString()}</td>
                            </tr>
                        ))}
                    </tbody>
                </table>
            </section>
        </div>
    );
};

export default CompaniesTable;