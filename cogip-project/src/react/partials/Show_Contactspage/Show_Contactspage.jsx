// components
import { useEffect } from "react";
import Header from "../Compoments/Header";
import Header_Img from "../Compoments/Header_Img";
import Footer from "../Compoments/Footer";
import ContactsDetails from "./Show_contactsMain";




function Show_Contactspage() {
  //state

//comportements

useEffect(() => {
  window.scrollTo(0, 0);
}, []);

//render
  return (
    <>
      <header>
        <Header />
        <Header_Img />
      </header>
      <main>
        <ContactsDetails/>
        </main>
      <Footer />
    </>
  );
}

export default Show_Contactspage;