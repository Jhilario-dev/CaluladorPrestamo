<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>calculadorPrestamo</title>

    <style>
        body {
            background-color: #c2d2e9;
        }

        fieldset {
            background-color: #5e83ba;
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
            font-size: 30px;
            width: 50%;
        }

        fieldset label {
            font-size: 25px;
            margin: 10px;
            padding: 5px;
            color: seashell;
        }

        fieldset input {
            border-radius: 4px;
        }

        div {
            margin: 2px;
            padding: 5px;
        }

        div p {
            font-size: 20px;
        }

        #btn {
            margin: 15px;
            padding: 30px;
            background-color: #3a4e7a;
            color: azure;
            border-radius: 7px;
            border-style: outset;
            font-size: 17px;
        }

        #btn:hover {
            background-color: #3a4e7a;
            font-style: oblique;
            opacity: 0.5;
        }
    </style>
</head>
<body>
    
    <fieldset >
        <legend>Calcular</legend>
            <div >
                <label>Tipo de prestamo <br></label>
                <select name="prestamo" id="prestamo">
                    <option>prestamo consumo</option>
                    <option>prestamo vehiculo</option>
                    <option>prestamo hipotecario</option>
                    <option>prestamo comercio</option>
                </select>
                <p></p>
                <label>Tipo de cuota <br></label>
                <select name="prestamo" id="cuota">
                    <option>cuota fija</option>
                    <option>capital fijo</option>
                </select>
                <p></p>
                <label>monto del prestamo <br></label>
                <input type="number" name="" id="monto">
                <p></p>

                <table>
                    <tr>
                        <th>Nro. de meses</th>
                        <th>Nro. de años</th>
                    </tr>
                    <tr>
                        <td><input type="number" name="" id="nroMeses"></td>
                        <td><input type="number" name="" id="nroAnios"></td>
                    </tr>

                </table>
                <p></p>

                <input type="button" value="calcular" onclick=''>
                <input type="reset" value="Reset">
                
            </div>
            <div>

            </div>
            <p id="resp"></p>
    </fieldset>

<?php








?>

    
</body>
</html>