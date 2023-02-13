import Header from "../Header";
import Header_Img from "../Header_Img";
import CompaniesPageTable from "./Compagniespage_Array";
import Footer from "../footer";


function Companiespage(){

    return(
      <div>
        <header>
          <Header />
          <Header_Img />
        </header>
        <main>
        <div className="arrays">
          <section className="overflowArray">
          <Companiespage/>
          </section>
          </div>
        </main>
        <Footer/>
      </div>
    );

}
export default Companiespage