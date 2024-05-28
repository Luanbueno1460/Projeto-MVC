<?php
require once 'model/Projeto.php';
class ProjetoController
public function al1 () (
Sobj = new Projeto);
Sprojetos = Sobj-›all ();
require once 'view/Projeto_al1. php';
public function create () (
Sobi = new Projeto ();
if( isset ($_ POST (' nome?)) )‹
Sobj->setNome (§ POST [ ' nome ' ]) ;
Sobj-›setDuracao ($_ POST ( 'duracao'1);
Sobi-›create ();
Sprojeto = Sobj-›read():
Yelse (
Sprojeto = (object) 
'id'=> null;
'nome’
'duracao'
require once 'view/Projeto create.php';
public function reado f
Sobj - new Projeto ();
Sobj->setld($ GET('id']);
$projeto = Sobj-›read ();
require once 'view/Projeto read.php';
public function update () l
Sobj - new Projeto ();
Sobj-›setId($_GET['id'1);
LE( isset (S _POsT('nome?1) )
Sobj->setNome (S POST | ' nome' ]);
Sobj-›setDuracao($_ POSTI 'duracao']);
Sobj-›update () ;
)
Sprojeto = Sobj-›read();
require _once 'view/Projeto_update.php';
public function delete () (
Sobj = new Projeto ();
Sobj-›setid($_GET('id'1);
Sobj-›delete (J;
header ("Location: /");