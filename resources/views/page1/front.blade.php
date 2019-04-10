<!DOCTYPE html>
<html lang ="en">
<body>
    <head>
    <meta charset="UTF-8">
        <title>News</title>
<style>
article,aside,footer,header,main,nav,section {
    display:block;}

html,body,h1,h2,h3,ul,li,a,p,article,aside,footer,header,main,nav,section {
    padding: 0;
    margin: 0;
}

.banner {
    background-color:yellowgreen;
    color:white;
    text-align: center;
    padding: 10px 20px;}

body{
    width:960px;
    margin-left:auto;
    margin-right:auto;
    background-color:#f0f0f0;
    font-family:Arial, Helvetica, sans-serif;
    font-size: 15px;
}
nav{ 
    background-color:#20416c;
    padding :5px;
    margin-top:1px;
}

li a{ color:white;}

li{
    display:inline;
    margin-left:15px;
    margin-right:15px;
    font-size:20;
    font-variant:small-caps;
    font-weight:bold;
}

section {
    background-color:#bbbbbb;
    margin-top:10px;
    padding:5px;
}

article{
    background-color:white;
    margin-top:5px;
    padding:10px 15px;
}
main{
    width:640px;
    float:left;  /* add lang to pra magka spce yung aside*/
    margin-bottom:10px;
}
aside{ 
    background-color: #bbbbbb;
    width:270px;
    float:right;
    padding:20px;
    margin-top:10px;
}
footer{
    clear:both;
    background-color:#20416c;
    color:white;
    padding:5px 10px;
}
     
</style>
    </head>
    <header class="banner">
        <h1>This is a home page!</h1>
        <p>Local and National News </p>
    </header>

    <nav>
        <ul>
            <li> <a href='profile' >Profile</a> </li>
            <li> <a href='about'>About </a></li>
            <li> <a href='contact'>Contact </a></li>
        </ul>
    </nav>

    <main>
        <section>
            <h2>Welcome to this page</h2>
                <article>
                    <header>
                        <h3>who are you?</h3>
                        <p>(Author,date)</p>
                    </header>
                        <div class= "yourName" id=firstName>McRodDixon</div>
                        <div class="player-score" id="score-1">72</div>
                        <p>This is the story text.this another story text</p>  
            <button class="btn-new">Like</button>
                </article>

                <article>
                        <header>
                            <h3>Kagawad was bitten by a stray cat died in 24hrs</h3>
                            <p>(Author,date)</p>
                        </header>
                            <p>This is the story text.this another story text</p>
                            <p>This is the story text.this another story text</p>
                    </article>

                </section>
                <section>
                    <h2>National News</h2>
                    <article>
                        <header>
                            <h3>Duterte introduce Bong Go to Senate</h3>
                            <p>(Author,date)</p>
                        </header>
                            <p>This is the story text.this another story text</p>
                            <p>This is the story text.this another story text</p>
                    </article>
    
                    <article>
                            <header>
                                
                                <h3>First Bible month celebration!</h3>
                                <p>(Codix,Jan 28 2019)</p>
                            </header>
                                <p>This is the story text.this another story text</p>
                                <p>This is the story text.this another story text</p>
                        </article>
        </section>
    </main>

        <aside>
            <h2>Be a news reporter</h2>
            <p>If you see news happening-send to www.mynews.com or in our link-in account</p>
        </aside>

        <footer>
            <p>Type the footer information here!</p>
        </footer>
        
        <script src="myscript.js"></script>


</body>
</html>