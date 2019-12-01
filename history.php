<!DOCTYPE html>
<html lang="en">
<head>
  <title>Real Madrid FC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="history.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
  $(document).ready(function()
  {
    //hides dropdown content
    $(".size_chart").hide();
    //unhides first option content
    $("#1902").show();
    //listen to dropdown for change
    $("#year").change(function()
    {
      //rehide content on change
      $('.size_chart').hide();
      //unhides current item
      $('#'+$(this).val()).show();
      });
  });
  </script>
  </head>
<body>

<div class="container-fluid">
  <div class="jumbotron jumbotron-fluid" style="height: 200px;">
    <div class="container-fluid">
      <a href="index.php" style="color: black; text-decoration: none;">
        <div class="header">
        <h1 class="display-5">Real Madrid FC</h1>
    </div>
      <img src="Images/realmadridlogo.jpg" class="rounded-circle" alt="Real Madrid Logo" width="240" height="200" style="position: absolute; top: 0px;"></a>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: goldenrod;">
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="squad.php">Squad <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="gallery.php">Gallery <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                    <a class="nav-link" href="history.php">History <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a class="nav-link" href="Admin.php" style="color:white">Admin<span class="sr-only">(current)</span></a>
        </form>
    </div>
</nav>
<div class="container">
  <h2>Club History</h2>
  <form>
    <div class="form-group">
      <label for="sel1"><h5>Year:</h5></label>
      <select class="year_select" id="year">
        <option value="empty"> --Select a Year--</option>
        <option value="option1">1902-</option>
        <option value="option2">1911-1920</option>
        <option value="option3">1921-1930</option>
        <option value="option4">1931-1940</option>
        <option value="option5">1941-1950</option>
        <option value="option6">1951-1960</option>
        <option value="option7">1961-1970</option>
        <option value="option8">1971-1980</option>
        <option value="option9">1981-1990</option>
        <option value="option10">1991-2000</option>
        <option value="option11">2001-2010</option>
        <option value="option12">2011-2020</option>
      </select>
    </div>
  </form>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
<div class="box">
<div class="container-fluid">
<div id="empty" class = "size_chart"></div>   
<div id="option1" class="size_chart">
    <p>A new sport from England called football started to take a grip of our country. Its quick uptake meant that in the late nineteenth
        and early twentieth century the first organisations were created for its practice. 
        One of them was the Madrid Football Club, a predecessor of Real Madrid.
        <strong>Julián Palacios</strong> was its first figurehead, but it was 
        <strong>Juan Padrós</strong>
         who formally constituted the institution (1902). Interest grew at such a rate that Madrid proposed a tournament in homage to king Alfonso XIII.
        The initiative became the Copa de España.
    </p>
    <div class="box2">
      <p>The figure of Julián Palacios was ever-present in the club's early years.
        It was he who, in 1900, called a general meeting to decide which players would form Madrid's first team.
        The Padrós brothers took the reins shortly afterwards. Football was starting to generate a lot of attention and the number of members was growing in leaps and bounds.
        Its constitution as a company came on the 6<sup>th</sup> of March 1902, with a board of directors presided by Juan Padrós.
        <br>
        <br>
        Those visionary directors made a proposal to the mayor of Madrid, Alberto Aguilera; the constitution of the first football tournament.
        The first competition was established in honour of king Alfonso XIII. Five companies registered for the tournament, which was held in the Hipódromo.
        It was the beginnings of the Copa de España and of what would become Madrid's hallmark, victory. The Whites won four titles from the first six editions.
        <br>
        <img class="img-fluid" src="Images/CopaRegional_historia.png" alt="Copa Regional">
      </p>
    </div>
</div>
<div id="option2" class="size_chart">
  <p>Spanish football was going through a period of difficulty and uncertainty.
  Real Madrid was not completely unaffected by these problems, but it overcame them thanks to some good work from its directors.
  With a growing fanbase, they saw the need to change grounds in order to facilitate the number of visitors and obtain more money.
  The club moved to the O’Donnell Stadium. It was then that the King of Spain's high steward granted Madrid the title ‘Real’ (1920).</p>
  <div class="box2">
      <p>It was thought that the constitution of a Federation would be a quick solution to the crisis, but it was not to be.
        Each company was looking out for its own interests, and while some supported the Federación, others formed another organisation in parallel, the Unión de Clubes.
        The predominant feeling at Madrid was one of disappointment and disillusion.
        The board of directors even had to take action to avoid the 'resignation' of the president, <strong>Adolfo Meléndez</strong> .
        <br>
        <br>
        The duplication of competitions and interests did nothing to undermine expectations in the world of <em>fútbol</em>.
        The fans were still turning up to see their team. Madrid, with the move to O’Donnell, had taken its first step towards professionalization.
        More spectators, more profit and more money to buy players. The new ground was better than that of Villa y Corte, with a capacity of 5,000.
        <br>
        <br>
        The 1915-1916 season produced a brilliant performance in the Campeonato de España.
        The team was the runner-up after winning an epic semi-final against Español and losing an equally competitive final against Athletic de Bilbao.
        The circumstances of that match took their toll and resulted in the resignation of the entire board of directors, with Pedro Parages taking the reins from Adolfo Meléndez.
        The changes bore fruit, as the next season Madrid was the champion of Spain once more.
        <br>
        <img class="img-fluid" src="Images/CopaRegional_historia.png" alt="Copa Regional">
      </p>
    </div>
</div>
<div id="option3" class="size_chart">
  <p>In the early 20s, Real Madrid returned to its pioneering role in Spanish football.
  The team made a series of trips abroad, making it an international trailblazer.
  As a result of the club's growing stature, two more stadium changes were made in this period. First, to the Velódromo de Ciudad Lineal, and then Chamartín was built.
  The latter hosted the first match in the recently created Campeonato de Liga (1928).</p>
  <div class="box2">
    <p>
      What began as a project between football fans at the start of the century was starting to take on unimaginable proportions.
      The silver medal won by the national side in the Olympic Games in Antwerp (1920) further bolstered its following. The outlook for our club was looking optimistic.
      <br>
      <br>
      The Campeonato de Liga was born out of these circumstances and the enormous organisational problems in Spanish football were a thing of the past.
      The parties involved agreed that there should be three <em>divisiones</em>. The six champions of Spain, the three runners-up and the winner of a promotional tournament between the clubs in the <em>Segunda</em> would play in the <em>Primera</em>.
      It was a competition that would bring together teams from every corner of our country each year.
      <br>
      <img class="img-fluid" src="Images/CopaRegional_historia.png" alt="Copa Regional">
    </p>
  </div>
</div>
<div id="option4" class="size_chart">
 <p>The arrival of <strong>Ricardo Zamora</strong> was soon followed by that of <strong>Ciriaco</strong> and <strong>Quincoces</strong>.
  The trio formed the best defence in the world. The result was four titles in as many years (two in La Liga and two Copas).
  The seeds of Madrid's reputation as winners had been sown, but the outbreak of the Civil War was to cut their run short.</p>
  <div class="box2">
    <p>
      Real Madrid had now accepted the fact that the success they craved would only be possible with the best players.
      With Zamora, Ciriaco, Quincoces, among others, the trophies came quickly. The 1931-1932 season was a great one for Lippo Hertza's team.
      The Whites finished the league as unbeaten champions. It was the start of an era of Madrid dominance.
      <br>
      <br>
      Just a month after the latest cup win (1936), civil war broke out. Real Madrid's finest hour on the pitch so far, was under threat and cut short by the military conflict.
      It led to many players ending their careers or leaving the country in exile. The club and team would not be reassembled until after the war.
      <br>
      <img class="img-fluid" src="Images/TrofeoMancomunado_historia.png" alt="TrofeoMancomunado_historia">
    </p>
  </div>
</div>
<div id="option5" class="size_chart">
<p>This period would give rise to the entity's future success stories and also to the rivalry with Barcelona.
 The Chamartín stadium had to be rebuilt and a new team had to be put together and brought up to speed for competition.
 Thanks to <strong>Santiago Bernabéu</strong>, all these challenges were met with aplomb.
 It was in this decade that the foundations were set for what would later be recognised as the ‘Best Club of the Twentieth Century’.</p>
 <div class="box2">
   <p>
     The Whites tried to alleviate the effects of the Civil War (1936-39), which left it without some of its most emblematic names.
     Some important players were brought in, such as Pruden, Corona and Bañón. In 1943, in the semi-final of the cup, Real Madrid met Barcelona.
     In Les Corts, the eleven <em>azulgranas</em> won 3-0. In the return match, the Whites knocked out their opponent with an extraordinary comeback.
     Madrid won 11-1, and an eternal rivalry was born.
     <br>
     <br>
     On the 15<sup>th</sup> of December 1943, <strong>Santiago Bernabéu</strong> became the club's president.
     It was the start of the legendary mandate in which the club pulled off some great deeds.
     He took charge intent on building bridges between all the clubs.
     In 1948 he was named president of honour and merit of the Whites “for his extraordinary work and continuing concern for the well-being of the Sociedad Real Madrid Club de Fútbol”.
     <br>
     <br>
     Real Madrid faced Valencia in the final (June 9<sup>th</sup> 1946), ten years after the team had won its previous Copa de España. In the Montjuïc stadium the Whites dominated the game, beating Valencia 3-1, to win the cup once more.
     The mayor of Madrid presented <strong>Ipiña</strong> with the Sports Medal of the City for his part in 237 official matches. Each player received a leather purse with a one thousand peseta (6€) note.
     <br>
     <img class="img-fluid" src="Images/copaDeEspaña_historia.png" alt="Copa De Espana">
   </p>
 </div>
</div>
<div id="option6" class="size_chart">
   <p>This was a brilliant decade. A pleiad of players, led by Alfredo Di Stéfano, put Real Madrid at the summit of football.
    The team that won five European Cups in a row amazed the world with its spectacular brand of football. An endless torrent of success made the club the most decorated in Europe.
    It was proclaimed the 'king of kings' and it won the first edition of the Intercontinental Cup (1960) to put the icing on the cake.</p>
    <div class="box2">
      <p>
        Football in Europe was being played at a high standard. Aware of this fact, at the start of the 50s, renowned French journalist Gabriel Hanot dreamed up a competition that would bring together the champions of each European league.
        His colleague Jacques Ferrán joined the project. Between them they drew up some regulations that reached the headquarters of the Union of European Football Associations (UEFA).
        The proposal was much to the liking of the heads of French publication ‘L’Equipe’, which organised the tournament.
        <br>
        <br>
        They named a commission that included Santiago Bernabéu as one of its vice presidents.
        The championship became a reality in 1956. Real Madrid won the first European Cup in history on the 13<sup>th</sup> of June that year.
        It was the first of the five consecutive cups it would win.
        This great feat was achieved at the hands of one of history's greatest footballers, <strong>Alfredo Di Stéfano</strong>,  and during Bernabéu's presidency.
        <br>
        <br>
        Madrid discovered Di Stéfano in the club's fiftieth anniversary year (1952), when the team took on Millonarios (4-2).
        Since then the club had its sights set on him and the following year he made his debut as a Madrid player.
        He became the best footballer in the Whites' history, receiving two Ballon d'Ors (1957 and 1959) as one of the stars of the team that ruled Europe for five years in a row.
        Everyone was enchanted by his wizardry and he raised the bar for the rest.
        <br>
        <br>
        In the 1959-1960 season, ex-Madrid player Miguel Muñoz (enlazar ficha) took the reins of Real Madrid.
        He won the Fifth European Cup in his first season as manager, becoming the first footballer to win the European Cup as a player (three times) and as a manager.
        In 1960, the merengues were also crowned champions of the world as they won the first edition of the Intercontinental Cup (Real Madrid 5-1 Peñarol de Montevideo).
        <br>
        <img class="img-fluid" src="Images/copaEuropaAntigua_historia.png" alt="Europa Antigua">
      </p>
    </div>
</div>
<div id="option7" class="size_chart">
   <p>The team was going through a period of change. In Spain it was far superior, winning eight league championships, five of them on the trot and including and league-cup double.
    Overseas it won its Sixth European Cup, with the ‘yé-yé’ team.</p>
    <div class="box2">
      <p>
        In the 1961-62 season, Real Madrid again enjoyed an excellent campaign as they claimed a league and cup double, and were runners-up in the European Cup. On 18 March 1962, Madrid sealed another title win at their stadium, with two matches to spare.
        On 8 July 1962, the Whites beat Sevilla 2-1 in the cup final.
        <br>
        <br>
        They were the kings of Spain and of Europe. On the 11<sup>th</sup> of May 1966, Real Madrid were crowned champions of Europe once again, against Partizán (2-1).
        Without Di Stéfano and Puskas, the most experienced player was <strong>Gento</strong>.
        The rest of the team was made up by Araquistáin, Pachín, Pedro de Felipe, Sanchís, Pirri, Zoco, Serena, Amancio, Grosso and Velázquez.
        After winning their Sixth European Cup, four of the players were photographed impersonating the Beatles. They then became known as the ‘ye-yé’ Madrid because of the chorus of the English group's song ‘She Loves You’.
        <br>
        <img class="img-fluid" src="Images/CopaL_Liga_historia.png" alt="Copa Liga">
      </p>
    </div>
</div>
<div id="option8" class="size_chart">
   <p>The decade in which the team won its sixth La Liga trophy to keep was also marked by the death of Santiago Bernabéu.
    Football was in mourning on the 2nd of June 1978 at the loss of the president who took Real Madrid to the top.
   <strong>Luis de Carlos</strong> replaced his best friend and mentor. He ran the Whites for seven years. In that time he was able to embody and transmit the values of the club, earning himself recognition around the world.</p>
   <div class="box2">
     <p>
       The team proved to be very solid at home in the league in the 1978-79 season, with only five teams taking a point from the Bernabéu: Espanyol, Sevilla, Hércules, Las Palmas and Atlético de Madrid.
       <strong>Molowny</strong> knew how to get the best out of his players, also making a difference on the road.
       The win in the Molinón (0-1, with a goal from <strong>Santillana</strong>) was key to the <em>merengue's</em> sixth league title.
       <br>
       <br>
       The team's brilliant performances were tarnished by the death of the club's president.
       Real Madrid wanted to make a posthumous gesture of thanks to the late <strong>Santiago Bernabéu</strong>. The goal was for his great work at the club to live on in the collective memory.
       On the 31<sup>st</sup> of August 1979 the first edition of the tournament that bore his name was played. Four of continental football's great champions took part: Real Madrid, Ajax, Bayern Munich and Milan.
       <br>
       <img class="img-fluid" src="Images/Copa_rey_historia.png" alt="Copa Rey">
     </p>
   </div>
</div>
<div id="option9" class="size_chart">
   <p>The 80s were dominated by a brilliant generation of youth-team players. ‘Vulture's Cohort’, led by <strong>Emilio Butragueño</strong>, made Real Madrid into one of the best teams in history.
    The goals of <strong>Hugo Sánchez</strong> also played an important role in this successful decade.
    The Whites won the first two UEFA Cups with some historic comebacks in Europe and magical nights in the Bernabéu.</p>
    <div class="box2">
      <p>
        In 1983, Castilla was crowned champion of the Segunda División under the orders of <strong>Amancio</strong> and with some stunning performances from five players: <strong>Pardeza, Sanchís, Míchel, Martín Vázquez</strong> and Butragueño.
        These gems from the academy were a real discovery and <strong>Di Stéfano</strong> did not hesitate to prepare them for the first team.
        The group made its breakthrough in 1985, winning five consecutive La Ligas and setting important records, such as the competition's top goal-scorer with 107.
        <br>
        <br>
        Mexican striker Hugo Sánchez had a lot to do with this success.
        Together with veterans <strong>Juanito, Valdano</strong> and <strong>Santillana</strong>, he formed a 'Cohort' that was close to perfection.
        In his seven seasons in white he scored 251 goals, and was the league's top goal-scorer in four of them.
        His famous front-flip celebrations are burned into the retinas of Madrid fans.
        <br>
        <br>
        In this decade Real Madrid also won its first UEFA title.
        It came in the 1984-85 season, in a two-legged final where they beat Videoton, a little-known team who had knocked out PSG, Partizán Belgrade and Manchester United.
        In the following campaign, the Whites successfully defended their title thanks to an unbelievable comeback.
        After losing the first leg 5-1 to Borussia Mönchengladbach, they won an epic tie in the return match with two goals from Valdano and another brace from Santillana to reach the quarters (4-0).
        <br>
        <img class="img-fluid" src="Images/Uefa_historia.png" alt="Uefa Cup">
      </p>
    </div>
</div>
<div id="option10" class="size_chart">
  <p><strong>Jorge Valdano</strong>, <strong>Fabio Capello</strong> and <strong>Vicente del Bosque</strong> were the names to remember this decade.
    The three successful coaches took Real Madrid to the top in La Liga and in Europe and they were helped on their way by some superstars.
    Players such as <strong>Redondo</strong>, <strong>Laudrup</strong>, <strong>Seedorf</strong>, <strong>Suker</strong>, <strong>Mijatovic</strong> and <strong>Roberto Carlos</strong> all arrived at the club in the 90s.</p>
    <div class="box2">
      <p>
        Having demonstrated his abilities at the helm of Tenerife, where his team played an attractive and efficient brand of football, Valdano returned to Real Madrid in 1994.
        With new signings <strong>Redondo, Laudrup</strong>, Amavisca and Cañizares, the Madrid side went on to win the league title.
        That same season, youth-academy player <strong>Raúl</strong> made his debut. On the 29<sup>th</sup> of October at 17 years of age, the young player from Madrid filled in for <strong>Martín Vázquez</strong> in La Romareda, where he would put in a stunning performance.
        A new legend was born.
        <br>
        <br>
        Early in 1995, Valdano's Real Madrid beat Johan Cruyff's Barça 5-0 in the Santiago Bernabéu.
        It was a magical game that was televised and followed by more than 10 million viewers.
        But the bad results in the 95-96 season forced Lorenzo Sanz to bring in Fabio Capello, one of the most sought-after coaches in European football.
        The Italian had a dream squad. The signings of Seedorf, Suker, Mijatovic and Roberto Carlos, together with Raúl, <strong>Hierro</strong> and Redondo, took Madrid to a new league title.
        <br>
        <br>
        The 20<sup>th</sup> of May 1998 was a historic day for the club.
        After 32 years, and under the orders of Jupp Heynckes, Real Madrid conquered Europe once more by beating Juventus in the final of the Champions League.
        A goal from <strong>Pedja Mijatovic</strong> in the 66<sup>th</sup> minute brought number Seven from the Amsterdam Arena to the Santiago Bernabéu trophy room.
        In December that year, this time at the hands of Guus Hiddink, Madrid won its second Intercontinental Cup.
        <br>
        <br>
        In 1999, and after a lifetime connected to the club as a player, Vicente del Bosque returned as the first-team manager.
        The man from Salamanca managed to instil a philosophy in the team that made them the best in the continent. His first title came in 2000: the Eighth European Cup.
        In the same year, <strong>Florentino Pérez</strong> (enlazar ficha) took over the presidency and signed one of the best players on the planet, <strong>Luis Figo</strong>
        <br>
        <img class="img-fluid" src="Images/Champions_historia2017.png" alt="Champions League Cup">
      </p>
    </div>
</div>
<div id="option11" class="size_chart">
   <p> In this decade Real Madrid made a proud return to triumph on the continent, winning its Ninth European Cup and its third Intercontinental Cup as well as five Ligas, among other titles.
     Also, <strong>Florentino Pérez</strong> reorganised the club's economy to make it the richest on the planet.</p>
     <div class="box2">
       <p>
        <strong>Vicente del Bosque</strong> stayed on as manager until 2003.
         His philosophy and brand of football made Madrid into a team of champions.
         During his time at the helm, the Whites celebrated another European Cup victory, another Intercontinental Cup, two domestic championships, a Supercup of Spain and a UEFA Super Cup.
         It was an era that is only comparable with the Real Madrid of the 50s and 60s.
         <br>
         <br>
         Florentino Pérez's management led to profound changes in the club's structure.
         He reorganised the institution's economy, making it the richest club in the world, and made far-reaching changes at the top of the organisation.
         He completely renovated the Santiago Bernabéu, created a new sports complex in Valdebebas and opened the Alfredo Di Stéfano stadium.
         Meanwhile, on the pitch, he made the fans' dreams come true by bringing in <strong>Zidane, Ronaldo</strong> and <strong>Beckham</strong>.
         <br>
         <br>
         In his second spell (2006), the president continued to delight the supporters, signing the best players and managers in the world.
         Great players such as <strong>Cristiano Ronaldo</strong> and <strong>Benzemá</strong> among others, were brought in, along with manager José Mourinho.
         The Portuguese arrived in the Santiago Bernabéu a week after being crowned champions of Europe with Inter Milan in the same stadium.
         <br>
         <img class="img-fluid" src="Images/intercontinental_historia.png" alt="Intercontinental cup">
       </p>
     </div>
</div>
<div id="option12" class="size_chart">
   <p>Real Madrid have once again defined an era in world football, winning four European Cups and four Club World Cup.
     In 2014, they lifted La Décima, before winning the Club World Cup that same year. Zidane's first two seasons in the dugout were historic, clinching La Undécima and La Duodécima.
     What's more, 2017 became a record-breaking year when the team got their hands on five trophies: The European Cup, the Club World Cup, LaLiga and the European and Spanish Super Cups.
     La Decimotercera then came in 2018, when they came out on top against Liverpool in Kiev.</p>
     <div class="box2">
       <p>
         In the first few years of this new decade three trophies were added to the cabinet by José Mourinho's Real Madrid.
         The most notable was the 2011-12 Liga title, which they won with a record-breaking 100 points, the highest score achieved in the history of the championship at that stage, and 121 goals.
         They also beat Barcelona to clinch a Copa del Rey and a Supercopa de España.
         <br>
         <br>
         In June 2013, Carlo Ancelotti arrived at Real Madrid.
         The Italian won four trophies with the Whites, the first coming in the shape of Real Madrid's nineteenth Copa del Rey, after beating Barcelona 1-2 in the final.
         On 24 May 2014, Madrid lifted the European Cup once again, claiming La Décima with a 4-1 victory over Atlético in Lisbon. Goals from Ramos, Bale, Marcelo and Cristiano secured the triumph.
         <br>
         <br>
         Two further triumphs arrived in the second season under Ancelotti: The European Super Cup, against Sevilla and Real Madrid’s first World Club Cup, against San Lorenzo.
         This meant Real Madrid capped of a historic year in their history in 2014, making it the year in which most trophies were won by the club. In June 2015, Rafa Benítez returned to the club where he cut his teeth, to take charge of the Whites.
         Then, in January 2016, Zidane made the step up to first team coach, following his legendary career as a player. His first season ended with the team lifting the La Undécima trophy, against Atlético in Milán.
         <br>
         <br>
         The French tactician's second season in charge delivered a clutch of silverware.
         Real Madrid secured the Duodécima, becoming the first-ever team to successfully defend their continental crown in the Champions League era.
         Alongside this success in Europe's elite club competition, the team also captured the 2016/17 LaLiga crown, the club's third UEFA Super Cup and a second Club World Cup, after overcoming Manchester United, as well as a 10th Spanish Super Cup.
         In December 2017, the Whites clinched another Club World Cup crown and this fifth piece of silverware saw the team set a new record for the number of titles claimed in a calendar year.
         2018 is also a big part of the Real Madrid legend thanks to la Decimotercera, won against Liverpool the final played in Kiev, as well as being crowned world champions for the seventh time after beating Al Ain in the United Arab Emirates.
         <br>
         <img class="img-fluid" src="Images/Champions_historia2017.png" alt="Champions League Cup">
       </p>
     </div>
</div>
</div>
</div>
</div>
</div>
</div>

<footer class="footer" style="text-align: center; clear: both;">
  <address>
    <p>
      Copyright © 2019<a class="mail" href="mailto:kamilli818@gmail.com" style="color: black; text-decoration: none;"> Kamran Kamilli</a>
    </p>
  </address>
</footer>

</body>
</html>