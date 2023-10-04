<html>
    <body>
        <form action="submit.php" method="post" enctype="multipart/form-data">
            Nombre: <input type="text" name="nombre"><br/>
            Email: <input type="email" name="email"><br/>
            Estudios: <select name="select" id="select">
                <option value="ESO">ESO</option>
                <option value="BAC">BAC</option>
                <option value="FPB">FPB</option>
                <option value="CFGM">CFGM</option>
                <option value="CFGS">CFGS</option>
            </select> <br/>
            Archivo: <input type="file" name="imagen"><br/>
            <input type="submit" name="submit" value="Enviar">
        </form>
    </body>
</html>