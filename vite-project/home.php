
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>

<body>
    <header> 

        <?php 
        include 'header.php'; 
        ?>

        <section class="herosection">
                <h1>MANAGE YOUR CUSTOMERS AND INVOICES EASLY</h1>
                <img src="./public/img/herosectionImg1.svg" alt="heroSectionImg1">
                <img src="./public/img/herosectionImg2.svg" alt="heroSectionImg2">
            </section>

    </header>

   
    <main>

        <div class="arrays">
            <img src="./public/img/blocknote.svg" alt="blocknote">
            <img src="./public/img/spotlight.svg" alt="spotlight">

            <section class="arrays__lastInvoices">
                <h2>Last invoices </h2>
            </section>

            <section class="arrays__lastContacts">
                <h2>Last contacts </h2>
            </section>

            <section class="arrays__lastCompanies">
                <h2>Last companies </h2>
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