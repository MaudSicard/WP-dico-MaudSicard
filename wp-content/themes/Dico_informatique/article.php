<div class="card mb-3" ">
  <div class="row g-0">
  <div class="col-md-3">

  <?php
      if(has_category('Serveur et navigateur'))
      {
        echo'<img src="https://cdn.pixabay.com/photo/2020/10/09/21/03/buddha-5641534__340.jpg" class="card-img" alt="bouddha picture">';
      }elseif (has_category('Langages'))
      {
        echo'<img src="https://cdn.pixabay.com/photo/2020/11/09/22/20/tower-bridge-5727975__340.jpg" class="card-img" alt="tower brdge pont">';
      }elseif (has_category('Framework'))
      {
        echo'<img src="https://cdn.pixabay.com/photo/2017/09/07/16/50/acropolis-2725918__340.jpg" class="card-img" alt="Acropole Grêce">';
      }elseif (has_category('Sécurité'))
      {
        echo'<img src="https://cdn.pixabay.com/photo/2020/08/18/19/23/monument-valley-5499156__340.jpg" class="card-img" alt="monument valley USA">';
      }elseif (has_category('SEO'))
      {
        echo'<img src="https://cdn.pixabay.com/photo/2020/01/25/19/13/paris-4793193__340.jpg" class="card-img" alt="Paris la Seine">';
      }
      elseif (has_category('API'))
      {
        echo'<img src="https://cdn.pixabay.com/photo/2017/11/30/18/55/castel-santangelo-2989238__340.jpg" class="card-img" alt="château Saint Ange Rome">';
      }
      elseif (has_category('CMS'))
      {
        echo'<img src="https://cdn.pixabay.com/photo/2020/11/24/19/34/colosseum-5773684__340.jpg" class="card-img" alt="colisée Rome">';
      }
      elseif (has_category('Base de données'))
      {
        echo'<img src="https://cdn.pixabay.com/photo/2015/11/21/15/17/stone-henge-1055046__340.jpg" class="card-img" alt="stonehedge">';
      }
      else {
        echo '<img src="https://cdn.pixabay.com/photo/2017/06/04/16/33/pyramids-2371501__340.jpg" class="card-img" alt="pyramides Egypte">';
      }
      
      ?>
    </div>
    <div class="col-md-8">
      <div class="card-body">
         <h2 class="card-title"><?php the_title();?></h2>
         <p class="card-text"><?=get_the_content();?></p>
      </div>
    </div>
  </div>
</div>