import React, { useState, useEffect } from "react";
import axios from 'axios';
import { Link, useParams } from "react-router-dom";
import ShowInvoicesArray from "./Show_InvoicesArray";
import ShowInvoicesContactsPeople from "./Show_InvoicePeople";

const CompanyDetails = () => {
  const {id} = useParams();
  const [companies, setCompanies] = useState([]);

  useEffect(() => {
    axios.get(`https://quentin.hugoorickx.tech/company/${id}`)
      .then((res) => setCompanies(res.data))
      .catch(err => console.error(err));
  }, []);

  return (
    <main>
    <div className=" show companyDetails">
      {companies.map(company => (
        <div className="info"  key={company.id}>
          <section className="contactpeople">
          <h2 className="underline">{company.Name_company}</h2>
          <section>
            <p>Name: {company.Name_company}</p>
            <p>TVA Number: {company.tva}</p>
            <p>Country: {company.country}</p>
            <p>Type: {company.Name_type}</p>
          </section>
          </section>
        </div>
      ))}
      <ShowInvoicesContactsPeople /> 
      <ShowInvoicesArray />
    </div>
    </main>
  );
};

export default CompanyDetails;