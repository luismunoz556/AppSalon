<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia sesión con tus datos</p>

<form action="/" class="formulario" method="POST">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Tu Email">
    </div>
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Tu Password">
    </div>
    <input type="submit" value="Iniciar Sesión" class="boton">
</form>
<div class="acciones">
    <a href="/crear-cuenta">¿No tienes una cuenta? Crear Cuenta</a>    
    <a href="/olvide">Olvidé mi Password</a>
</div>