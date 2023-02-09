import { useState } from 'react'
import InvoicesPageTable from './Invoicespage/Invoicespage_Array';
import Homepage from './homepage/homepage';



function Header() {

// state, données

  const [isOpen, setIsOpen] = useState(false)

//comportements

  const handleClick = () => {
    setIsOpen(!isOpen)};

//render

  return (
    
      <div className= "header">
        <img className="logo" src ="./src/img/logo.svg" alt="logo" />

        <nav className={`navbar ${isOpen ? "navbarDisplay" : ""}`}>
        
          <a href="#">Companies</a>
          <a href="#">Contacts</a>
        </nav>

        <section className={`login ${isOpen ? "loginDisplay" : ""}`}>
          <a className= "signUp"href="#">Sign up</a>
          <a href="#">Login</a>
        </section>

        <section className={`hamburger-lines ${isOpen ? "menu" : ""}`} onClick={handleClick}>
          <span className="line line1"></span>
          <span className="line line2"></span>
          <span className="line line3"></span>
        </section> 

      </div>

   
  );
}
export default Header;

