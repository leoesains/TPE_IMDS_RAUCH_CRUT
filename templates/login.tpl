{include file="header.tpl"}
        <div>
            <div>
            <p>Debe loguearse</p>
            </div>
            <div>
                <form method="POST" action="verify">
                    <div>
                        <label>Usuario</label>
                        <input type="text" name="usuario" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="contrasenia" placeholder="Password">
                    </div>
                    <button type="submit" class="btn-volver">Ingresar</button>
                </form>
            </div> 
        </div>
{include file="footerAdmin.tpl"}