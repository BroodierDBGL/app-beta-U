<?php

    require("../config/database.php");
    /*
    $sql_users="
                SELECT 
                        u.firstname||" "||u.lastname as fullname,
                        u.email,
                        u.mobile_phone,
                        CASE
                            WHEN u.status=true
                            then 'Active' else 'Inactive END as status,
                        u.profile_photo
                FROM
                    users u
                update users set profile_photo='profile_photos/user_default.png';       
                ";
                */
?>

<!DOCTYPE html>
<!-- 
    //Este archivo es un endpoint
    //http://127.0.0.1:8080/app-beta-u/src/list_users.php 
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" align="center">
        <!-- tr es para hacer filas y esta es la fila 1 -->
        <tr>
            <!-- th es para las etiquetas -->
            <th>FullName</th>
            <th>E-mail</th>
            <th>Mobile phone</th>
            <th>Status</th>
            <th>Photo</th>
            <th>Options</th>
        
            <!-- Datos quemados -->
        </tr>
            <!-- td es para añadir dts a las etiquetas -->
            <td>Peter Loza</td>
            <td>peter@mail.com</td>
            <td>300123</td>
            <td>Active</td>
            <td><img src="profile_photos/user_default.png" width="50" alt="User photo"></td>
        
        <td>
            <a href="#">
                <img src="icons/edit.png" 
                    width="20" 
                    alt="Edit user">
            </a>
            &nbsp; <!-- Espacio en blanco para borrar ese "_" de los icons -->
            <a href="#">
                <img src="icons/delete.png" 
                    width="20" 
                    alt="Delete user">
            </a>
        </td>
    </table>
</body>
</html>