<?php

if (isset($_POST["enviar"]))
{
    $nome = isset ($_POST["nome"]) ? (string) $_POST["nome"] : NULL;
    $telefone = isset ($_POST["telefone"]) ? (string) $_POST["telefone"] : NULL;
    $email = isset ($_POST["email"]) ? (string) $_POST ["email"] : NULL;
    $genero = isset ($_POST["genero"]) ? (string) $_POST ["genero"] : NULL;

    if (!empty($nome) && !empty($telefone) && !empty($email) && !empty(email) && !empty($genero) && !empty($linguagem))
    {
        $aux = null;
        $aux . = "Nome: " . $nome . "<br>";
        $aux . = "Telefone: " . $telefone . "<br>";
        $aux . = "Email: " . $email . "<br>";
        $aux . = "Genero: " . $genero . "<br>";
        $aux . = "Genero: ";

        foreach ($genero as $val)
        {
            echo $aux . = $val . "<br";
        }
    }

}
?>