<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
 

    <link rel="stylesheet" href="http://localhost/marvintimido/MARvintimido/estilos/estilos1.css" />
    
</head>

<body>
<?php


include ("menu.php");


?>

    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form action="vercliente.php" method="post" autocomplete="off" class="sign-in-form"  id="form_cliente">
                        <div class="logo">
                            <img src="./img/logo.png" alt="easyclass" />
                            <h4>Marvin Galeano</h4>
                            
                        </div>

                        <div class="heading">
                            <h2>Cliente</h2>
                            
                            <h6>Aun no estas registrado?</h6>
                            <a href="#" class="toggle">Sign up</a>
                        </div>
                        

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" input name="nombre" id="nombre" class="input-field" autocomplete="off" required  />
                                <label>Name</label>

                                
                            </div>

                            <div class="input-wrap">
                                <input type="text" input name="direccion" id="direccion" class="input-field" autocomplete="off" required />
                                <label>Direccion</label>

                                
                            </div>

                            <div class="input-wrap">
                                <input type="text" input name="dui" id="dui" class="input-field" autocomplete="off" required />
                                <label>Dui</label>

                                
                            </div>

                            <div class="input-wrap">
                                
                            <input type="text"  input name="telefono" id="telefono" class="input-field" autocomplete="off" required />
                                <label>Telefono</label>

                                
                            </div>

                            <div class="input-wrap">
                                <input type="email" input name="email" id="nombre" class="input-field" autocomplete="off" required />
                                <label>Email</label>

                                
                            </div>
                            <div class="form-group">
                            <h6>Status</h6>
				
				<select class="form-control" name="status">
					<option value="1">1</option>
					<option value="0">0</option>
				</select>
			</div>
                            

                            <input type="submit" value="Guardar" class="sign-btn" />
                            <input type="submit" value="Ver detalles" onclick="window.location.href='registroclien.php'" id="myModal" class="sign-btn" />
                           

                            <p class="text">
                                Forgotten your password or you login datails?
                                <a href="#">Get help</a> signing in
                            </p>
                        </div>
                    </form>

                    <form action="vercliente.php" method="post" autocomplete="off" class="sign-up-form">
                        <div class="logo">
                            <img src="./img/logo.png" alt="easyclass" />
                            <h4>easyclass</h4>
                        </div>

                        <div class="heading">
                            <h2>Get Started</h2>
                            <h6>Already have an account?</h6>
                            <a href="#" class="toggle">Sign in</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" minlength="4" class="input-field" autocomplete="off" required />
                                <label>Name</label>
                            </div>
                            

                            <div class="input-wrap">
                                <input name="username" id="username" type="email" class="input-field" autocomplete="off"
                                    required />

                                <label>Email</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password"  class="input-field" required
                                name="password"  id="password"/>
                                <label>Password</label>
                            </div>

                            <input type="submit" value="Sign Up" class="sign-btn" />

                            <p class="text">
                                By signing up, I agree to the
                                <a href="#">Terms of Services</a> and
                                <a href="#">Privacy Policy</a>
                            </p>
                        </div>
                    </form>
                </div>

                <div class="carousel">
                    <div class="images-wrapper">
                        <img src="./img/yellow 2.svg" class="image img-1 show" alt="" />
                        <img src="./img/df.svg" class="image img-2" alt="" />
                        <img src="./img/hh.svg" class="image img-3" alt="" />
                        
                    </div>

                    <div class="text-slider">
                        <div class="text-wrap">
                            <div class="text-group">
                                <h2>Creador por @MarvinGaleano</h2>
                                <h2>Nike Force Marvin | SV</h2>
                                <h2>Nike @Marvin | SV</h2>
                               
                            </div>
                        </div>

                        <div class="bullets">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 <script src="estilos/app.js"></script>
 <script src="js/cliente.js"></script>
 <script src="http://localhost/MARVINVETERINARIA/estilos/script.js"></script>
</body>

</html>