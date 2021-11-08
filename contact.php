<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <style>
        div.p {
            color: #DBD0C0; font-size: xx-large;
        }

        div.li {
            color: #8E0505; font-size: x-large;
            background-color:thistle;
        }

        /* div.form {
            font-size: x-large;
            column-width: auto;
            color:slategrey
        } */
    </style>
</head>
<body>

    <div>
        <h1>Contact</h1>
        <hr/>
    </div>

    <div>
        <button type="button"><a href= index.php> Homepage </a></button>
        <button type="button"><a href= about-me.php target="_blank"> About Me </a></button>
        <button type="button"><a href= gallery.php target="_blank"> Gallery </a></button>
        
    </div>

    <div class="p">
        <p>
            Here are some of the biggest Pineapple Farms around the globe where you can find me there.
        </p>
    </div>

    <div style="float: right;">
        <img src="img/Map.png" width="594px" height="412px" alt="image">
    </div>

    <div class="li">
        <lu>
            <li>Arruda Pineapple Plantation - São Miguel Island, Portugal<br/> Website:<a href="https://www.ananasesarruda.com/" target="_blank">Arruda Pineapple Plantation</a>
            </li>
            <br/>

            <li>OHU Farms - Akuapim Hills, Ghana<br/> Website:<a href="https://ohufarms.com/" target="_blank">OHU Farms</a>
            </li>
            <br/>

            <li>Finca Paraíso Orgánico – Costa Rica<br/> Website:<a href="https://www.organicparadisetour.com/"target="_blank">Finca Paraíso Orgánico</a>
            </li>
            <br/>
            
            <li>Dole Pineapple Plantation – Oahu, Hawaii<br/> Website:<a href="https://www.doleplantation.com/" target="_blank">Dole Pineapple Plantation</a>
            </li>
            <br/>

            <li>Groital Farms - Accra Ghana<br/> Website:<a href="https://groital.com/" target="_blank">Groital Farms</a>
            </li>
            <br/>

        </lu>

    </div>

    <div class="form">
        <h1><i>Write me a message</i></h1>
        <form style="color: slategrey; font-size: x-large; background-color: thistle;">
            <input placeholder="Name"/><br/>
            <input placeholder="Email"/><br/>
            <hr width="150px">
            <textarea placeholder="Message" required></textarea><br/>
            <input type="submit" value="SEND">
        </form>         
    </div>
</body>
</html>