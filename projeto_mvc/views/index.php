<h2>projetos</h2>
<div class "panel panel-default")
<div class "panel-heading text-right"s> <div class-"pull-right"›<a class-"btn btn-primary" href='?classe=Projetosacao=create'>Novo</a>‹/div>
< div> <br>
<div class="panel-body"s
$table id "tabela" class 'table table-striped table-bordered table-hover' style "width: 1008">
<thead>
<tr>
<th>Nome</th>
<th>Duração</th>
<th width="280px"SAções>
<tr>
</thead>
<tbody>
<?php foreach (Sprojetos as Sprojeto) ?>
<tr>
<td><? $projeto->nome?></td>
<ta><?-$projeto->duracao_dmY?></td>
<td>
<a classe ben ben-primary
href='?classe-Projetosacao-readrid-<?=$projeto-›id?>'>Ver</a>
<a class= 'btn bun-primary'>
href-'?classe-Projetosacao=updatesid=<?-Sprojeto->id?>">Alterar</a>
Sbutton type="button" classe"ben btn-primary" data-toggle-"modal" data-
targete" (myModal"
data-id-"<?-Sprojeto->id?>">Excluir</button)
</ed>
</tr>
<?php  ?>
</tbody>
</table>
</div>
</div>