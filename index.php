<!DOCTYPE html>
<?php   
/*
Nombre: Ruben Dario Rocha Lizcano
Programa: Desarrollo Web con PHP
Evidencia: Taller “Uso de arreglos”
*/

//Arreglo para guardar el listado de personas que se van a mostrar en la tabla
$listPersons = array(
    array(
        'name' => 'Juan Pérez',
        'address' => 'Cra. 45 # 45 - 56',
        'phoneNumber' => '3456789',
        'birthDate' => '23/12/1997',
        'colorFavorite' => 'Amarillo'
    ),
    array(
        'name' => 'Pablo Manrique',
        'address' => 'Clle. 23 # 12 - 19 Sur',
        'phoneNumber' => '3214567',
        'birthDate' => '12/10/1980',
        'colorFavorite' => 'Verde'
    ),
    array(
        'name' => 'Nancy Peña',
        'address' => 'Av. 34 # 16 - 12',
        'phoneNumber' => '2135423',
        'birthDate' => '07/06/2000',
        'colorFavorite' => 'Rojo'
    ),
);

//Arreglo encargado de guarda llave - valor para obtener el siginificado del color favorito de las personas
$meaningColor = array(
    'Amarillo' => 'Riqueza y alegría.'
);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <table border="1">
           <thead>
               <tr style="background-color: blue; color: white;">
                   <th>Nombre</th>
                   <th>Dirección</th>
                   <th>Teléfono</th>
                   <th>Fecha de cumpleaños</th>
                   <th>Color favorito</th>
                   <th>Significado</th>
               </tr>
           </thead>
           <tbody>
               <?php foreach($listPersons as $person) { ?>
                    <tr>
                        <td><?php echo $person['name']; ?></td>
                        <td><?php echo $person['address']; ?></td>
                        <td><?php echo $person['phoneNumber']; ?></td>
                        <td><?php echo $person['birthDate']; ?></td>
                        <td><?php echo $person['colorFavorite']; ?></td>
                        <td>
                            <?php 
                            /*Linea encargada de obtener el significado del color pasandole como llave al arreglo $meaningColor 
                            el color favorito de la persona y en caso de no encontrarlo, se agrega como valor por defecto "No se encuentra el significado."
                            */
                            echo $meaningColor[$person['colorFavorite']] ?? 'No se encuentra el significado.'; 
                            ?>
                        </td>
                    </tr>
               <?php } ?>
           </tbody>
       </table>
    </body>
</html>
