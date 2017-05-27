<?php include("cabecalho.php");
//include("conecta.php");
//include("banco-categoria.php");
?>


<html>
<form  name="metodologia" action="radio.php" method="post">
	<table class="table" border="1">
	<tr>
	<h4 align="left"> Aplicativo:</h4>                 
	<h4 align="left"> Versão: </h4>             
	<h4 align="left"> SO: </h4>
	<h4 align="left">Afirmativas sobre o Aplicativo</h4>
	</tr>
	<tr bgcolor="#CCC">
	<td>Documentação</td>
	<td>NA</td>
	<td>DC</td>
	<td>D</td>
	<td> NC/ND</td>
	<td>C</td>
	<td>CC</td>
	<td>Peso</td>
	</tr>
	<tr>
	<td>possui descrição dos seus objetivos ou dos conteúdos que aborda</td>
	<td><input type="radio" name="a1" value="na" />     </td>
	<td>
	<input type="radio" name="a1" value=0 />      </td>
	<td>
	<input type="radio" name="a1" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a1" value=0.5 />     </td>
	<td>
	<input type="radio" name="a1" value=0.75 />    </td>
	<td>
	<input type="radio" name="a1" value=1 />       </td>
	<td><select name="pesoA1">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>especifica o público alvo a que se destina</td>
	<td><input type="radio" name="a2" value="na" />     </td>
	<td>
	<input type="radio" name="a2" value=0 />      </td>
	<td>
	<input type="radio" name="a2" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a2" value=0.5 />     </td>
	<td>
	<input type="radio" name="a2" value=0.75 />    </td>
	<td>
	<input type="radio" name="a2" value=1 />       </td>
	<td><select name="pesoA2">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>possui página Web de suporte com informações úteis e espaço para sugestões/reclamações
</td>
	<td><input type="radio" name="a3" value="na" />     </td>
	<td>
	<input type="radio" name="a3" value=0 />      </td>
	<td>
	<input type="radio" name="a3" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a3" value=0.5 />     </td>
	<td>
	<input type="radio" name="a3" value=0.75 />    </td>
	<td>
	<input type="radio" name="a3" value=1 />       </td>
	<td><select name="pesoA3">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>possui nome coerente</td>
	<td><input type="radio" name="a4" value="na" />     </td>
	<td>
	<input type="radio" name="a4" value=0 />      </td>
	<td>
	<input type="radio" name="a4" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a4" value=0.5 />     </td>
	<td>
	<input type="radio" name="a4" value=0.75 />    </td>
	<td>
	<input type="radio" name="a4" value=1 />       </td>
	<td><select name="pesoA4">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>possui tutorial interno sobre sua utilização</td>
	<td><input type="radio" name="a5" value="na" />     </td>
	<td>
	<input type="radio" name="a5" value=0 />      </td>
	<td>
	<input type="radio" name="a5" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a5" value=0.5 />     </td>
	<td>
	<input type="radio" name="a5" value=0.75 />    </td>
	<td>
	<input type="radio" name="a5" value=1 />       </td>
	<td><select name="pesoA5">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr bgcolor="#CCC">
	<td>Usabilidade/Questões operacionais</td>
	<td>NA</td>
	<td>DC</td>
	<td>D</td>
	<td> NC/ND</td>
	<td>C</td>
	<td>CC</td>
	<td>Peso</td>
	</tr>
	<tr>
	<td>oferece flexibilidade para alterar as configurações de acordo com as necessidades dos usuários (som, cor, etc.)
</td>
	<td><input type="radio" name="a6" value="na" />     </td>
	<td>
	<input type="radio" name="a6" value=0 />      </td>
	<td>
	<input type="radio" name="a6" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a6" value=0.5 />     </td>
	<td>
	<input type="radio" name="a6" value=0.75 />    </td>
	<td>
	<input type="radio" name="a6" value=1 />       </td>
	<td><select name="pesoA6">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>é de fácil utilização</td>
	<td><input type="radio" name="a7" value="na" />     </td>
	<td>
	<input type="radio" name="a7" value=0 />      </td>
	<td>
	<input type="radio" name="a7" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a7" value=0.5 />     </td>
	<td>
	<input type="radio" name="a7" value=0.75 />    </td>
	<td>
	<input type="radio" name="a7" value=1 />       </td>
	<td><select name="pesoA7">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>possui funções suficientes para realizar as tarefas para as quais se propõe</td>
	<td><input type="radio" name="a8" value="na" />     </td>
	<td>
	<input type="radio" name="a8" value=0 />      </td>
	<td>
	<input type="radio" name="a8" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a8" value=0.5 />     </td>
	<td>
	<input type="radio" name="a8" value=0.75 />    </td>
	<td>
	<input type="radio" name="a8" value=1 />       </td>
	<td><select name="pesoA8">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>esteve isento de falhas durante sua utilização</td>
	<td><input type="radio" name="a9" value="na" />     </td>
	<td>
	<input type="radio" name="a9" value=0 />      </td>
	<td>
	<input type="radio" name="a9" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a9" value=0.5 />     </td>
	<td>
	<input type="radio" name="a9" value=0.75 />    </td>
	<td>
	<input type="radio" name="a9" value=1 />       </td>
	<td><select name="pesoA9">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>permite a recuperação dos dados, quando ocorre erro</td>
	<td><input type="radio" name="a10" value="na" />     </td>
	<td>
	<input type="radio" name="a10" value=0 />      </td>
	<td>
	<input type="radio" name="a10" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a10" value=0.5 />     </td>
	<td>
	<input type="radio" name="a10" value=0.75 />    </td>
	<td>
	<input type="radio" name="a10" value=1 />       </td>
	<td><select name="pesoA10">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>possui versão para diversos sistemas operacionais</td>
	<td><input type="radio" name="a11" value="na" />     </td>
	<td>
	<input type="radio" name="a11" value=0 />      </td>
	<td>
	<input type="radio" name="a11" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a11" value=0.5 />     </td>
	<td>
	<input type="radio" name="a11" value=0.75 />    </td>
	<td>
	<input type="radio" name="a11" value=1 />       </td>
	<td><select name="pesoA11">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>se adapta aos diferentes tamanhos de dispositivos móveis </td>
	<td><input type="radio" name="a12" value="na" />     </td>
	<td>
	<input type="radio" name="a12" value=0 />      </td>
	<td>
	<input type="radio" name="a12" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a12" value=0.5 />     </td>
	<td>
	<input type="radio" name="a12" value=0.75 />    </td>
	<td>
	<input type="radio" name="a12" value=1 />       </td>
	<td><select name="pesoA12">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>mantêm disponíveis, em todas as telas, menus e funções comuns</td>
	<td><input type="radio" name="a13" value="na" />     </td>
	<td>
	<input type="radio" name="a13" value=0 />      </td>
	<td>
	<input type="radio" name="a13" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a13" value=0.5 />     </td>
	<td>
	<input type="radio" name="a13" value=0.75 />    </td>
	<td>
	<input type="radio" name="a13" value=1 />       </td>
	<td><select name="pesoA13">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>possui cor e detalhamento favoráveis à leitura em uma tela pequena</td>
	<td><input type="radio" name="a14" value="na" />     </td>
	<td>
	<input type="radio" name="a14" value=0 />      </td>
	<td>
	<input type="radio" name="a14" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a14" value=0.5 />     </td>
	<td>
	<input type="radio" name="a14" value=0.75 />    </td>
	<td>
	<input type="radio" name="a14" value=1 />       </td>
	<td><select name="pesoA14">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>possui a opção "voltar" (Desfazer)</td>
	<td><input type="radio" name="a15" value="na" />     </td>
	<td>
	<input type="radio" name="a15" value=0 />      </td>
	<td>
	<input type="radio" name="a15" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a15" value=0.5 />     </td>
	<td>
	<input type="radio" name="a15" value=0.75 />    </td>
	<td>
	<input type="radio" name="a15" value=1 />       </td>
	<td><select name="pesoA15">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>permite salvar ou exportar figuras, texto, etc, para outros softwares ou através da internet</td>
	<td><input type="radio" name="a16" value="na" />     </td>
	<td>
	<input type="radio" name="a16" value=0 />      </td>
	<td>
	<input type="radio" name="a16" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a16" value=0.5 />     </td>
	<td>
	<input type="radio" name="a16" value=0.75 />    </td>
	<td>
	<input type="radio" name="a16" value=1 />       </td>
	<td><select name="pesoA16">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>permite a sua execução a partir do cartão de memória</td>
	<td><input type="radio" name="a17" value="na" />     </td>
	<td>
	<input type="radio" name="a17" value=0 />      </td>
	<td>
	<input type="radio" name="a17" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a17" value=0.5 />     </td>
	<td>
	<input type="radio" name="a17" value=0.75 />    </td>
	<td>
	<input type="radio" name="a17" value=1 />       </td>
	<td><select name="pesoA17">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>se adapta ao rotacionar a tela</td>
	<td><input type="radio" name="a18" value="na" />     </td>
	<td>
	<input type="radio" name="a18" value=0 />      </td>
	<td>
	<input type="radio" name="a18" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a18" value=0.5 />     </td>
	<td>
	<input type="radio" name="a18" value=0.75 />    </td>
	<td>
	<input type="radio" name="a18" value=1 />       </td>
	<td><select name="pesoA18">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>não apresenta propagandas/anúncios durante a execução</td>
	<td><input type="radio" name="a19" value="na" />     </td>
	<td>
	<input type="radio" name="a19" value=0 />      </td>
	<td>
	<input type="radio" name="a19" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a19" value=0.5 />     </td>
	<td>
	<input type="radio" name="a19" value=0.75 />    </td>
	<td>
	<input type="radio" name="a19" value=1 />       </td>
	<td><select name="pesoA19">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr bgcolor="#CCC">
	<td>Pedagógico</td>
	<td>NA</td>
	<td>DC</td>
	<td>D</td>
	<td> NC/ND</td>
	<td>C</td>
	<td>CC</td>
	<td>Peso</td>
	</tr>
	<tr>
	<td>pode ser utilizado para despertar o interesse do usuário pelo assunto</td>
	<td><input type="radio" name="a20" value="na" />     </td>
	<td>
	<input type="radio" name="a20" value=0 />      </td>
	<td>
	<input type="radio" name="a20" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a20" value=0.5 />     </td>
	<td>
	<input type="radio" name="a20" value=0.75 />    </td>
	<td>
	<input type="radio" name="a20" value=1 />       </td>
	<td><select name="pesoA20">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>possui interface (ícones, menus, etc.) fácil de ser reconhecida/entendida</td>
	<td><input type="radio" name="a21" value="na" />     </td>
	<td>
	<input type="radio" name="a21" value=0 />      </td>
	<td>
	<input type="radio" name="a21" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a21" value=0.5 />     </td>
	<td>
	<input type="radio" name="a21" value=0.75 />    </td>
	<td>
	<input type="radio" name="a21" value=1 />       </td>
	<td><select name="pesoA21">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>permite que o aluno realize atividade extraclasse, de forma independente</td>
	<td><input type="radio" name="a22" value="na" />     </td>
	<td>
	<input type="radio" name="a22" value=0 />      </td>
	<td>
	<input type="radio" name="a22" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a22" value=0.5 />     </td>
	<td>
	<input type="radio" name="a22" value=0.75 />    </td>
	<td>
	<input type="radio" name="a22" value=1 />       </td>
	<td><select name="pesoA22">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>possui mecanismo de feedback (resposta, retorno) para auxiliar o usuário em caso de erro</td>
	<td><input type="radio" name="a23" value="na" />     </td>
	<td>
	<input type="radio" name="a23" value=0 />      </td>
	<td>
	<input type="radio" name="a23" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a23" value=0.5 />     </td>
	<td>
	<input type="radio" name="a23" value=0.75 />    </td>
	<td>
	<input type="radio" name="a23" value=1 />       </td>
	<td><select name="pesoA23">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr bgcolor="#CCC">
	<td>Conteúdos da disciplina</td>
	<td>NA</td>
	<td>DC</td>
	<td>D</td>
	<td> NC/ND</td>
	<td>C</td>
	<td>CC</td>
	<td>Peso</td>
	</tr>
	<tr>
	<td>utiliza a linguagem da disciplina de maneira correta</td>
	<td><input type="radio" name="a24" value="na" />     </td>
	<td>
	<input type="radio" name="a24" value=0 />      </td>
	<td>
	<input type="radio" name="a24" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a24" value=0.5 />     </td>
	<td>
	<input type="radio" name="a24" value=0.75 />    </td>
	<td>
	<input type="radio" name="a24" value=1 />       </td>
	<td><select name="pesoA24">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>apresenta os conceitos de forma correta</td>
	<td><input type="radio" name="a25" value="na" />     </td>
	<td>
	<input type="radio" name="a25" value=0 />      </td>
	<td>
	<input type="radio" name="a25" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a25" value=0.5 />     </td>
	<td>
	<input type="radio" name="a25" value=0.75 />    </td>
	<td>
	<input type="radio" name="a25" value=1 />       </td>
	<td><select name="pesoA25">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>contribui para a construção de abstrações da disciplina evitando a mera memorização de algoritmos</td>
	<td><input type="radio" name="a26" value="na" />     </td>
	<td>
	<input type="radio" name="a26" value=0 />      </td>
	<td>
	<input type="radio" name="a26" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a26" value=0.5 />     </td>
	<td>
	<input type="radio" name="a26" value=0.75 />    </td>
	<td>
	<input type="radio" name="a26" value=1 />       </td>
	<td><select name="pesoA26">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>permite o desenvolvimento das capacidades de raciocínio e de resolução de problemas</td>
	<td><input type="radio" name="a27" value="na" />     </td>
	<td>
	<input type="radio" name="a27" value=0 />      </td>
	<td>
	<input type="radio" name="a27" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a27" value=0.5 />     </td>
	<td>
	<input type="radio" name="a27" value=0.75 />    </td>
	<td>
	<input type="radio" name="a27" value=1 />       </td>
	<td><select name="pesoA27">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>permite trabalhar os conteúdos de forma gradativa ou seja, caminhando do básico ao profundo de forma suave</td>
	<td><input type="radio" name="a28" value="na" />     </td>
	<td>
	<input type="radio" name="a28" value=0 />      </td>
	<td>
	<input type="radio" name="a28" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a28" value=0.5 />     </td>
	<td>
	<input type="radio" name="a28" value=0.75 />    </td>
	<td>
	<input type="radio" name="a28" value=1 />       </td>
	<td><select name="pesoA28">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>propõe exercícios/problemas criativos, bem elaborados e apresentados de forma interessante</td>
	<td><input type="radio" name="a29" value="na" />     </td>
	<td>
	<input type="radio" name="a29" value=0 />      </td>
	<td>
	<input type="radio" name="a29" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a29" value=0.5 />     </td>
	<td>
	<input type="radio" name="a29" value=0.75 />    </td>
	<td>
	<input type="radio" name="a29" value=1 />       </td>
	<td><select name="pesoA29">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	<tr>
	<td>permite que os conceitos trabalhados sejam relacionados com outros conceitos da disciplina</td>
	<td><input type="radio" name="a30" value="na" />     </td>
	<td>
	<input type="radio" name="a30" value=0 />      </td>
	<td>
	<input type="radio" name="a30" value=0.25 />      </td>
	<td align="middle">
	<input type="radio" name="a30" value=0.5 />     </td>
	<td>
	<input type="radio" name="a30" value=0.75 />    </td>
	<td>
	<input type="radio" name="a30" value=1 />       </td>
	<td><select name="pesoA30">
	<option value=1>1</option>
	<option value=2>2</option>
	<option value=3>3</option>
	</select></td></tr>
	
	</table>
	<tr><td><input class="button" value ="Avaliar" type="submit" onclick="valida()" /></td>
    </tr>
</form>
</html>

<?php include("rodape.php"); ?>

