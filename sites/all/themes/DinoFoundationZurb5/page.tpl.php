<div id="contenedor" class="row">
    <!-- ################################################### -->
    
    <!-- Columna Izquierda 30% -->   
    <div class="large-3 columns"> <!-- Inicio 30% -->
    <?php print render($page['sidebar_first']); ?>   
    </div> <!-- Fin 30% -->
    
    <!-- ################################################### -->
    
    <!-- Columna Derecha 70% -->
    <div class="large-9 columns"> <!-- Inicio 70% -->
        <?php
        global $user;
        if ($user->uid) {
            
        ?>
        <div class="row">
        <nav id="usuario" class="top-bar" data-topbar>
  <ul class="title-area">
    
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>
  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right" id="usuario-sub">      
      <li class="has-dropdown active">
        <a href="#" ><i class="fi-torso"></i> Usuario</a>
        <ul class="dropdown">
            <li><a href="user/<?php print $user->uid; ?>/edit"><i class="fi-results-demographics"></i> Editar Mi Cuenta</a></li>
          <li><a href="user/logout"><i class="fi-power"></i> Cerrar Sesion</a></li>
        </ul>
      </li>
    </ul>
  </section>
</nav> 
            </div>
        
        
        <?php
        }
        if (!$user->uid) {        
        ?>
        <div class="row">
        <nav id="usuario" class="top-bar" data-topbar>
  <ul class="title-area">   
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>
  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li class="active registro"><a href="user/register"><i class="fi-clipboard-pencil"></i> Registrate</a></li>
      <li class="has-dropdown">
        <a href="#"><i class="fi-torso"></i> Usuario</a>
        <ul class="dropdown">
          <li><a href="user/login"><i class="fi-lock"></i> Iniciar Sesión</a></li>
          <li><a href="user/password"><i class="fi-info"></i> Solicitar Nueva Contraseña</a></li>
        </ul>
      </li>
    </ul>
  </section>
</nav>   
        </div>
        <?php
        }
        ?>
    <?php print render($page['content']); ?>            
       
    </div> <!-- Fin 70% -->
    
    <!-- ################################################### -->
    
    <hr>
    
    <!-- ################################################### -->
    <!-- Menu y Redes Sociales  -->
    <div class="large-12 columns">
        <!-- Columna Izquierda 80% -->
        
        <div class="large-10 columns"> <!-- Inicio 80% -->
        <?php print render($page['footer_menu']); ?>   
        </div> <!-- Fin 80% -->
        
        <!-- Columna Derecha 20% -->
        
        <div class="large-2 columns"> <!-- Inicio 20% -->
        <?php print render($page['footer_social']); ?>   
        </div> <!-- Fin 20% -->
        
        <!-- Footer -->
        <div class="row">
        <?php print render($page['footer']); ?>   
        </div>
    </div>
    
    <!-- ################################################### -->
    
</div>  
    <!-- Script de Foundation Zurb 5 -->
    <script> $(document).foundation(); </script>
