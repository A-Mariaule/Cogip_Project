import React from 'react'
import ReactDOM from 'react-dom/client'
import { createBrowserRouter, RouterProvider } from "react-router-dom";

import Header from './partials/Header'
import Footer from './partials/footer'
import Home_HeroSection from './partials/homepage/Home_HeroSection'
import Header_Img from './partials/Header_Img'
import Home_Main_Footer from './partials/homepage/Home_Main_Footer'

import LastInvoicesTable from './partials/LastInvoicesArray'
import LastContactsTable from  './partials/LastContacts_array'
import LastCompaniesTable from  './partials/LastCompanies_array'

import InvoicesPageTable from './partials/Invoicespage/Invoicespage_Array'
import ContactsPageTable from './partials/Contactspage/Contactspage_Array'
import CompaniesPageTable from './partials/Companiespage/Compagniespage_Array'

import Homepage from './partials/homepage/homepage'
import Contactspage from './partials/Contactspage/Contactspages';
import Invoicespage from './partials/Invoicespage/invoicespage';
import Companiespage from './partials/Companiespage/Companiespage';


const router = createBrowserRouter([
  {
    path: "/",
    element: <Homepage />,
    errorElement: <Homepage />,
  },
  {
    path: `/companies`,
    element: <Companiespage />,
  },
  {
    path: `/contacts`,
    element: <Contactspage />,
  },
  {
    path: `/invoices`,
    element: <Invoicespage />,
  },
]);

ReactDOM.createRoot(document.getElementById("root")).render(
  <React.StrictMode>
    <RouterProvider router={router} />
  </React.StrictMode>
);