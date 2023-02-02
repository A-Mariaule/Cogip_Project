<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/sass/invoices.css">
    <title>invoices</title>
</head>

<body>
    <main>
        <section class="title">
            <h1 class="underline_title">All invoices</h1>
        </section>
        <section class="bar_search">
            <form class="search" action="/search" method="get">
                <input type="text" name="q" placeholder="Search...">
            </form>
        </section>

        <section class="array">
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

    </main>
</body>

</html>