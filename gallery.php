<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <style>
        div.gallery {
          border: 1px solid #ccc;
        }
        
        div.gallery:hover {
          border: 1px solid #777;
        }
        
        div.gallery img {
          width: 100%;
          height: 100%;
        }
        
        div.desc {
          padding: 15px;
          text-align: center;
        }
        
        * {
          box-sizing: border-box;
        }
        
        .responsive {
          padding: 0 6px;
          float: left;
          width: 24.99999%;
        }
        
        @media only screen and (max-width: 700px) {
          .responsive {
            width: 49.99999%;
            margin: 6px 0;
          }
        }
        
        @media only screen and (max-width: 500px) {
          .responsive {
            width: 100%;
          }
        }
        
        .clearfix:after {
          content: "";
          display: table;
          clear: both;
        }
    </style>

</head>
<body>

    <div>
        <h1>Gallery</h1>
        <hr/>
    </div>

    <div>
        <button type="button"><a href= index.php> Homepage </a></button>
        <button type="button"><a href= about-me.php target="_blank"> About Me </a></button>
        <button type="button"><a href= contact.php target="_blank">Contact </a></button>
    </div>

<div class="responsive">
    <div class="gallery">
        <img src="img/gallery1.jpg" width="1000" height="600" alt="image">
    </div>
</div>    

<div class="responsive">
    <div class="gallery">
        <img src="img/gallery2.jpg" width="1000" height="600" alt="image">
    </div>
</div>    

<div class="responsive">
    <div class="gallery">
        <img src="img/gallery3.jpg" width="1000" height="600" alt="image">
    </div>
</div>    

<div class="responsive">
    <div class="gallery">
        <img src="img/gallery4.jpg" width="1000" height="600" alt="image">
    </div>
</div>    

<div class="responsive">
    <div class="gallery">
        <img src="img/gallery5.jpg" width="1000" height="600" alt="image">
    </div>
</div>    

<div class="responsive">
    <div class="gallery">
        <img src="img/gallery6.jpg" width="1000" height="600" alt="image">
    </div>
</div>    

<div class="responsive">
    <div class="gallery">
        <img src="img/gallery7.jpg" width="1000" height="600" alt="image">
    </div>
</div>    
    
<div class="responsive">
    <div class="gallery">
        <img src="img/Brazil1.jpg" width="1000" height="600" alt="image">      
    </div>
</div>    

<div class="responsive">
    <div class="gallery">
        <img src="img/CRica.jpg" width="1000" height="600" alt="image">
        <div class="desc">COSTA RICA</div>
    </div>
</div>     

<div class="responsive"> 
    <div class="gallery">
        <img src="img/Hawaii1.jpg" width="1000" height="600" alt="image">
        <div class="desc">HAWAII</div>
    </div>
</div>     

<div class="responsive">    
    <div class="gallery">
        <img src="img/Phil1.jpg" width="1000" height="600" alt="image">
        <div class="desc">PHILIPPINES</div>
    </div>
</div>            

<div class="responsive">    
    <div class="gallery">
        <img src="img/Brazil2.jpg" width="1000" height="600" alt="image">
        <div class="desc">BRAZIL</div>
    </div>
</div>      

<div class="responsive">    
    <div class="gallery">
        <img src="img/CRica2.jpg" width="1000" height="600" alt="image">
        <div class="desc">COSTA RICA</div>
    </div>
</div>      

<div class="responsive">    
    <div class="gallery">
        <img src="img/Hawaii2.jpg" width="1000" height="600" alt="image">
        <div class="desc">HAWAII</div>
    </div>
</div>    

<div class="responsive">    
    <div class="gallery">
        <img src="img/Phil2.jpg" width="1000" height="600" alt="image">
        <div class="desc">PHILIPPINES</div>
    </div>
</div>        

<div class="responsive">    
    <div class="gallery">
        <img src="img/Brazil3.jpeg" width="1000" height="600" alt="image">
        <div class="desc">BRAZIL</div>
    </div>
</div>      

<div class="responsive">    
    <div class="gallery">
        <img src="img/CRica3.jpg" width="1000" height="600" alt="image">
        <div class="desc">COSTA RICA</div>
    </div>
</div>        

<div class="responsive">    
    <div class="gallery">
        <img src="img/Hawaii3.jpg" width="1000" height="600" alt="image">
        <div class="desc">HAWAII</div>
    </div>
</div> 

<div class="responsive">    
    <div class="gallery">
        <img src="img/Phil3.jpg" width="1000" height="600" alt="image">
        <div class="desc">PHILIPPINES</div>
    </div>
</div>

</body>
</html>