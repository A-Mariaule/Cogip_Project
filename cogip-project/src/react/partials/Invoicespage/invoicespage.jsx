import Header from "../Header";
import Header_Img from "../Header_Img";
import InvoicesPageTable from "./Invoicespage_Array";
import Footer from "../footer";

function Invoicespage(){

    return(
      <div>
        <header>
          <Header />
          <Header_Img />
        </header>
        <main>
        <div className="arrays">
          <section className="overflowArray">
          <Invoicespage/>
          </section>
          </div>
        </main>
        <Footer/>
      </div>
    );

}
export default Invoicespage