
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="./assets/sass/header.css">
</head>

<body>
    <header> 

        <?php 
        include 'header.php'; 
        ?>

        <section class="herosection">
                <h1>MANAGE YOUR CUSTOMERS AND INVOICES EASLY</h1>
                <img src="./public/img/herosectionImg1.svg" alt="heroSectionImg1">
                <img class="herosectionImg2" src ="./public/img/herosectionImg2.svg" alt="heroSectionImg2">
            </section>

    </header>


    <main>

        <div class="arrays">
            <img src="./public/img/blocknote.svg" alt="blocknote">
            <img src="./public/img/spotlight.svg" alt="spotlight">

            <section class="arrays__lastInvoices">
                <h2>Last invoices </h2>

                <table>
                    <tr>
                        <th>Invoice Number</th>
                        <th>Date Due</th>
                        <th>Company</th>
                        <th>Created At</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>01/01/23</td>
                        <td>XYZ</td>
                        <td>01/01/23</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>15/01/23</td>
                        <td>ABC</td>
                        <td>10/01/23</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>28/01/23</td>
                        <td>PQR</td>
                        <td>20/01/23</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>05/02/23</td>
                        <td>DEF</td>
                        <td>25/01/23</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>12/02/23</td>
                        <td>GHI</td>
                        <td>30/01/23</td>
                    </tr>
                </table>
            </section>

            <section class="arrays__lastContacts">
                <h2>Last contacts </h2>  
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Mail</th>
                        <th>Company</th>
                        <th>Created At</th>
                    </tr>
                    <tr>
                        <td>John Doe</td>
                        <td>555-555-1212</td>
                        <td>johndoe@example.com</td>
                        <td>ABC Inc.</td>
                        <td>01/01/23</td>
                    </tr>
                    <tr>
                        <td>Jane Doe</td>
                        <td>555-555-1213</td>
                        <td>janedoe@example.com</td>
                        <td>XYZ Inc.</td>
                        <td>02/01/23</td>
                    </tr>
                    <tr>
                        <td>Bob Smith</td>
                        <td>555-555-1214</td>
                        <td>bobsmith@example.com</td>
                        <td>PQR Corp.</td>
                        <td>03/01/23</td>
                    </tr>
                    <tr>
                        <td>Alice Johnson</td>
                        <td>555-555-1215</td>
                        <td>alicejohnson@example.com</td>
                        <td>DEF LLC.</td>
                        <td>04/01/23</td>
                    </tr>
                    <tr>
                        <td>Charlie Brown</td>
                        <td>555-555-1216</td>
                        <td>charliebrown@example.com</td>
                        <td>GHI Inc.</td>
                        <td>05/01/23</td>
                    </tr>
                    </table>
            </section>

            <section class="arrays__lastCompanies">
                <h2>Last companies </h2>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>TVA</th>
                        <th>Country</th>
                        <th>Type</th>
                        <th>Created At</th>
                    </tr>
                    <tr>
                        <td>John Doe</td>
                        <td>BE123456789</td>
                        <td>Belgium</td>
                        <td>Individual</td>
                        <td>01/01/23</td>
                    </tr>
                    <tr>
                        <td>Jane Doe</td>
                        <td>FR987654321</td>
                        <td>France</td>
                        <td>Individual</td>
                        <td>02/01/23</td>
                    </tr>
                    <tr>
                        <td>Bob Smith</td>
                        <td>DE678901234</td>
                        <td>Germany</td>
                        <td>Individual</td>
                        <td>03/01/23</td>
                    </tr>
                    <tr>
                        <td>Alice Johnson</td>
                        <td>NL567890123</td>
                        <td>Netherlands</td>
                        <td>Individual</td>
                        <td>04/01/23</td>
                    </tr>
                    <tr>
                        <td>Charlie Brown</td>
                        <td>UK456789012</td>
                        <td>United Kingdom</td>
                        <td>Individual</td>
                        <td>05/01/23</td>
                    </tr>
                </table>

            </section>

        </div>

        <section class="main__Footer">
                <h1>WORK BETTER IN YOUR COMPANY</h1>  
                <img src="./public/img/Rectangle.svg" alt="rectangle"> 
                <img src="./public/img/phone.svg" alt="phone"> 
        </section>

    </main>

       <?php 
        include 'footer.php'; 
        ?>
</body>
</html>